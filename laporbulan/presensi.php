<?php
	include("koneksi.php");
	$jenjang=$_GET['jenjang'];
	if (isset($_POST['bulan']))
	{
	$TahunAktif = $_POST['tahun'];
	$BulanAktif= $_POST['bulan'];
	}
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT c.Nama AS NamaSekolah,
		a.NIP,b.Nama AS NamaGuru,a.Bulan, a.Tahun,a.S,a.I,a.A, a.Ch,a.Cd,a.Cs,c.Jenjang
		FROM presensi a, guru b, sekolah c
		WHERE a.nip=b.NIP AND b.IDSekolah=c.IdSekolah and c.jenjang='$jenjang'
		and a.bulan='$BulanAktif' and a.tahun='$TahunAktif'";
	}
	else
	{
		$sql="SELECT c.Nama AS NamaSekolah,
		a.NIP,b.Nama AS NamaGuru,a.Bulan, a.Tahun,a.S,a.I,a.A, a.Ch,a.Cd,a.Cs,c.Jenjang
		FROM presensi a, guru b, sekolah c
		WHERE a.nip=b.NIP AND b.IDSekolah=c.IdSekolah and c.jenjang='$jenjang' and c.idsekolah=$sd
		and a.bulan='$BulanAktif' and a.tahun='$TahunAktif'";
	}
	
	$rw=mysql_query($sql,$conn);
?>
<table class="table table-striped table-advance table-hover">
	<tbody>
		<tr>
			<th><i class="icon_profile"></i>Nama Sekolah</th>
			<th><i class="icon_profile"></i>NIP</th>
			<th><i class="icon_profile"></i>Nama Guru</th>
			<th><i class="icon_profile"></i>Bulan</th>
			<th><i class="icon_profile"></i>Tahun</th>
			<th><i class="icon_profile"></i>S</th>
			<th><i class="icon_profile"></i>I</th>
			<th><i class="icon_profile"></i>A</th>
			<th><i class="icon_profile"></i>CH</th>
			<th><i class="icon_profile"></i>CD</th>
			<th><i class="icon_profile"></i>CS</th>
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
				<td><?php echo $s[6];?></td>
				<td><?php echo $s[7];?></td>
				<td><?php echo $s[8];?></td>
				<td><?php echo $s[9];?></td>
				<td><?php echo $s[10];?></td>
			</tr>
		<?php
		}
		?>					
	</tbody>
</table>