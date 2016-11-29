<?php
include("koneksi.php");
if($_SESSION['Idsekolah']>=1)
{
	$sql = "Select * from sekolah where idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$Sekolah = $s[0];
	}
}
else
{
	$Sekolah=$_GET['id'];
}
$sql="select * FROM sarana where idsekolah=$Sekolah";
$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<br>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Nama</th>
						<th><i class="icon_profile"></i>Bulan</th>
						<th><i class="icon_profile"></i>Tahun</th>
						<th><i class="icon_profile"></i>Jumlah</th>
					</tr>
					<?php
					while($s=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $s[3];?></td>
							<td><?php echo $s[1];?></td>
							<td><?php echo $s[2];?></td>
							<td><?php echo $s[4];?></td>
						</tr>
					<?php
					}
					?>					
				</tbody>
			</table>
		</section>
	</div>
</div>