<?php
$jenjang=$_GET['jenjang'];
include("koneksi.php");
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT b.Nama, a.NIP, a.Nama,
		a.TempatLahir, a.TanggalLahir, a.Golongan,
		a.JK, Ijazah, a.Jabatan, a.Status,
		a.TGLDiangkat, a.TGLMulai, a.TGLSK, a.NOSK
		FROM guru a, sekolah b WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang'";

	}
	else
	{
		$sql="SELECT b.Nama, a.NIP, a.Nama,
		a.TempatLahir, a.TanggalLahir, a.Golongan,
		a.JK, Ijazah, a.Jabatan, a.Status,
		a.TGLDiangkat, a.TGLMulai, a.TGLSK, a.NOSK
		FROM guru a, sekolah b WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang' and b.idsekolah=$sd";

	}
$rw=mysql_query($sql,$conn);

function dateDifference($date_1 , $date_2 , $differenceFormat = '%y Tahun %m Bulan %d Hari' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
    
    $interval = date_diff($datetime1, $datetime2);
    
    return $interval->format($differenceFormat);
    
}
?>
<table class="table table-striped table-advance table-hover">
	<tbody>
		<tr>
			<th><i class="icon_profile"></i>Sekolah</th>
			<th><i class="icon_calendar"></i>NIP</th>
			<th><i class="icon_mail_alt"></i>Nama</th>
			<th><i class="icon_pin_alt"></i>Tempat/Tanggal Lahir</th>
			<th><i class="icon_mobile"></i>JK</th>
			<th><i class="icon_mobile"></i>Ijazah</th>
			<th><i class="icon_mobile"></i>Golongan</th>
			<th><i class="icon_mobile"></i>Jabatan</th>
			<th><i class="icon_mobile"></i>TGL SK</th>
			<th><i class="icon_mobile"></i>NO SK</th>
			<th><i class="icon_mobile"></i>Masa Kerja</th>
		</tr>
		<?php
		while($s=mysql_fetch_array($rw))
		{
		?>
			<tr>
				<td><h7><?php echo $s[0];?></h7></td>
				<td><?php echo $s[1];?></td>
				<td><?php echo $s[2];?></td>
				<td><?php echo $s[3];?> / <?php echo $s[4];?></td>
				<td><?php echo $s[6];?></td>
				<td><?php echo $s[7];?></td>
				<td><?php echo $s[5];?></td>
				<td><?php echo $s[8];?></td>
				<td><?php echo $s[12];?></td>
				<td><?php echo $s[13];?></td>
				<td>
				<?php 
				$awal = $s[12];
				$saiki = date("Y-m-d");
				$a = dateDifference( $awal,$saiki );
				echo $a;
				?>
				</td>
			</tr>
		<?php
		}
		?>					
	</tbody>
</table>