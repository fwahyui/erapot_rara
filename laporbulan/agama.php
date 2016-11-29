<?php
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
		$sql="SELECT b.nama AS Sekolah,a.Bulan,a.Tahun,a.agama,a.L,a.P,a.IDSekolah
		FROM agama a,sekolah b
		WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang'
		and a.bulan='$BulanAktif' and a.tahun='$TahunAktif'";
	}
	else
	{
		$sql="SELECT b.nama AS Sekolah,a.Bulan,a.Tahun,a.agama,a.L,a.P,a.IDSekolah
		FROM agama a,sekolah b
		WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang' and b.idsekolah=$sd
		and a.bulan='$BulanAktif' and a.tahun='$TahunAktif'";
	}
$rw=mysql_query($sql,$conn);

?>
<table class="table table-striped table-advance table-hover">
	<tbody>
		<tr>
			<th><i class="icon_profile"></i>Sekolah</th>
			<th><i class="icon_calendar"></i>Bulan</th>
			<th><i class="icon_mail_alt"></i>Tahun</th>
			<th><i class="icon_pin_alt"></i>Agama</th>
			<th><i class="icon_mobile"></i>L</th>
			<th><i class="icon_mobile"></i>P</th>
		</tr>
		<?php
		while($s=mysql_fetch_array($rw))
		{
		?>
			<tr>
				<td><?php echo $s[0];?></td>
				<td><?php echo $s[1];?></td>
				<td><?php echo $s[2];?></td>
				<td><?php echo $s[3];?></td>
				<td><?php echo $s[4];?></td>
				<td><?php echo $s[5];?></td>
			</tr>
		<?php
		}
		?>					
	</tbody>
</table>
	