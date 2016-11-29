<?php
$angka=0;
$jenjang=$_GET['jenjang'];
if (isset($_POST['bulan']))
{
$TahunAktif = $_POST['tahun'];
$BulanAktif= $_POST['bulan'];
}

include("koneksi.php");
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT idsekolah, Nama AS NamaSekolah,MilikSendiri,Pinjaman FROM sekolah where Jenjang='$jenjang'";
	}
	else
	{
		$sql="SELECT idsekolah, Nama AS NamaSekolah,MilikSendiri,Pinjaman FROM sekolah where Jenjang='$jenjang'
		and idsekolah=$sd";
	}
	
$rw=mysql_query($sql,$conn);
if ($jenjang =="SD")
{
?>
	<div class="panel-body text-center">
	<a class="btn btn-primary" href="cetakguru.php?jenjang=<?php echo $jenjang?>&t=<?php echo $thn?>&b=<?php echo $bln?>" target="_blank" title="Bootstrap 3 themes generator">CETAK DATA GURU DAN PENJAGA SEKOLAH</a>
	</div>
	<div class="panel-body text-center">
	<a class="btn btn-primary" href="cetakrekapmurid.php?jenjang=<?php echo $jenjang?>&t=<?php echo $thn?>&b=<?php echo $bln?>" target="_blank" title="Bootstrap 3 themes generator">CETAK REKAP MURID</a>
	</div>
<?php 
} 
else if ($jenjang =="PAUD")
{
?>
	<div class="panel-body text-center">
	<a class="btn btn-primary" href="cetakguru.php?jenjang=<?php echo $jenjang?>&t=<?php echo $thn?>&b=<?php echo $bln?>" target="_blank" title="Bootstrap 3 themes generator">CETAK DATA GURU DAN PENJAGA SEKOLAH</a>
	</div>
	<div class="panel-body text-center">
	<a class="btn btn-primary" href="cetakrekapmurid.php?jenjang=<?php echo $jenjang?>&t=<?php echo $thn?>&b=<?php echo $bln?>" target="_blank" title="Bootstrap 3 themes generator">CETAK REKAP MURID</a>
	</div>
<?php 
} 
else if ($jenjang =="TK")
{
?>
	<div class="panel-body text-center">
	<a class="btn btn-primary" href="cetakguru.php?jenjang=<?php echo $jenjang?>&t=<?php echo $thn?>&b=<?php echo $bln?>" target="_blank" title="Bootstrap 3 themes generator">CETAK DATA GURU DAN PENJAGA SEKOLAH</a>
	</div>
	<div class="panel-body text-center">
	<a class="btn btn-primary" href="cetakrekapmurid.php?jenjang=<?php echo $jenjang?>&t=<?php echo $thn?>&b=<?php echo $bln?>" target="_blank" title="Bootstrap 3 themes generator">CETAK REKAP MURID</a>
	</div>
<?php 
} 
?>
