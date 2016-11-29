<?php
include "fpdf17/fpdf.php";
include "koneksi.php";
function dateDifference($date_1 , $date_2 , $differenceFormat = '%y Thn %m Bln %d Hr' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
    
    $interval = date_diff($datetime1, $datetime2);
    
    return $interval->format($differenceFormat);
    
}
if (isset($_GET['b']))
{
$TahunAktif = $_GET['t'];
$BulanAktif= $_GET['b'];
}
$jenjang=$_GET['jenjang'];
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
// Logo
$pdf->Ln(5);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'DATA GURU DAN PENJAGA SEKOLAH '.$jenjang,'0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Ln(4);
$pdf->Cell(275,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',7);
$tgl='Tanggal : '.date("d-m-20y").'';
$pdf->Cell(50,5,$tgl,'0','1','L',false);
$pdf->Ln(3);

$pdf->SetFont('Arial','B',6);
$pdf->Cell(8,6,'NO.',1,0,'C');
//$pdf->Cell(30,6,'Nama Sekolah.',1,0,'C');
$pdf->Cell(27 ,6,'NIP',1,0,'C');
$pdf->Cell(25,6,'Nama Guru.',1,0,'C');
$pdf->Cell(25,6,'Tempat/Tgl Lahir',1,0,'C');
$pdf->Cell(15,6,'Golongan',1,0,'C');
$pdf->Cell(8,6,'L/p',1,0,'C');
$pdf->Cell(10,6,'Ijazah',1,0,'C');
$pdf->Cell(20,6,'Jabatan',1,0,'C');
$pdf->Cell(10,6,'Status',1,0,'C');
$pdf->Cell(17,6,'Tgl Diangkat',1,0,'C');
$pdf->Cell(15,6,'Tgl SK',1,0,'C');
$pdf->Cell(15,6,'No SK',1,0,'C');
$pdf->Cell(20,6,'Masa Kerja',1,0,'C');
$pdf->Cell(5,6,'S',1,0,'C');
$pdf->Cell(5,6,'I',1,0,'C');
$pdf->Cell(5,6,'A',1,0,'C');
$pdf->Cell(5,6,'CH',1,0,'C');
$pdf->Cell(5,6,'CD',1,0,'C');
$pdf->Cell(5,6,'CS',1,0,'C');
$pdf->Ln(2);
$no = 0;
	$sd = 0;
	if ($sd==0)
	{
		$sqls="SELECT b.Nama, a.NIP, a.Nama as Guru,
		a.TempatLahir, a.TanggalLahir, a.Golongan,
		a.JK, Ijazah, a.Jabatan, a.Status,
		a.TGLDiangkat, a.TGLMulai, a.TGLSK, a.NOSK
		FROM guru a, sekolah b WHERE a.IDSekolah=b.IdSekolah 
		and b.Jenjang='$jenjang'";
	}
	else
	{
		$sqls="SELECT b.Nama, a.NIP, a.Nama as Guru,
		a.TempatLahir, a.TanggalLahir, a.Golongan,
		a.JK, Ijazah, a.Jabatan, a.Status,
		a.TGLDiangkat, a.TGLMulai, a.TGLSK, a.NOSK
		FROM guru a, sekolah b WHERE a.IDSekolah=b.IdSekolah 
		and b.Jenjang='$jenjang' and b.idsekolah=$sd";
	}
$sql = mysql_query($sqls);
while($data = mysql_fetch_array($sql)) {
$no++;
$pdf->Ln(4);
$pdf->SetFont('Arial','',6);
$pdf->Cell(8,4,$no,1,0,'C');
//$pdf->Cell(30,4,$data[0],1,0,'L');
$pdf->Cell(27,4,$data[1],1,0,'L');
$pdf->Cell(25,4,$data[2],1,0,'L');
$pdf->Cell(25,4,$data[3].",".$data[4],1,0,'L');
$pdf->Cell(15,4,$data[5],1,0,'C');
$pdf->Cell(8,4,$data[6],1,0,'C');
$pdf->Cell(10,4,$data[7],1,0,'C');
$pdf->Cell(20,4,$data[8],1,0,'L');
$pdf->Cell(10,4,$data[9],1,0,'L');
$pdf->Cell(17,4,$data[10],1,0,'L');
$pdf->Cell(15,4,$data[12],1,0,'C');
$pdf->Cell(15,4,$data[13],1,0,'C');
$awal = $data[12];
$saiki = date("Y-m-d");
$a = dateDifference( $awal,$saiki );
$pdf->Cell(20,4,$a,1,0,'C');
$sqlsxx="SELECT c.Nama AS NamaSekolah,
		a.NIP,b.Nama AS NamaGuru,a.Bulan, a.Tahun,a.S,a.I,a.A, a.Ch,a.Cd,a.Cs,c.Jenjang
		FROM presensi a, guru b, sekolah c
		WHERE a.nip=b.NIP AND b.IDSekolah=c.IdSekolah and c.jenjang='$jenjang'
		and a.bulan='$BulanAktif' and a.tahun='$TahunAktif' and a.nip='$data[1]'";
$sqlx = mysql_query($sqlsxx);
while($datax = mysql_fetch_array($sqlx)) {

$pdf->Cell(5,4,$datax[5],1,0,'C');	
$pdf->Cell(5,4,$datax[6],1,0,'C');	
$pdf->Cell(5,4,$datax[7],1,0,'C');	
$pdf->Cell(5,4,$datax[8],1,0,'C');	
$pdf->Cell(5,4,$datax[9],1,0,'C');	
$pdf->Cell(5,4,$datax[10],1,0,'C');	}			
}



$pdf->Output();