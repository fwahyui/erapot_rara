<?php
	include("koneksi.php");
	$jenjang=$_GET['jenjang'];
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT c.Nama AS NamaSekolah,
		a.NIP,b.Nama AS NamaGuru,a.Bulan, a.Tahun,a.S,a.I,a.A, a.Ch,a.Cd,a.Cs,c.Jenjang
		FROM presensi a, guru b, sekolah c
		WHERE a.nip=b.NIP AND b.IDSekolah=c.IdSekolah and c.jenjang='$jenjang'";
	}
	else
	{
		$sql="SELECT c.Nama AS NamaSekolah,
		a.NIP,b.Nama AS NamaGuru,a.Bulan, a.Tahun,a.S,a.I,a.A, a.Ch,a.Cd,a.Cs,c.Jenjang
		FROM presensi a, guru b, sekolah c
		WHERE a.nip=b.NIP AND b.IDSekolah=c.IdSekolah and c.jenjang='$jenjang' and b.idsekolah=$sd";
	}
	
	$rw=mysql_query($sql,$conn);
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Presensi</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Presensi 
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel"><br>
		<a class="btn btn-success btn-sm" href="?page=addpresensi&act=1&id=0&jenjang=<?php echo $jenjang; ?>" title="Bootstrap 3 themes generator">
		      Input Presensi</a><br><br>
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

						<th><i class="icon_cogs"></i> Action</th>
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
							<td>
							<div class="btn-group">
								<a class="btn btn-danger" href="?page=hapuspresensi&id=<?php echo $s[1];?>&b=<?php echo $s[3];?>&t=<?php echo $s[4];?>&j=<?php echo $jenjang;?>" ><i class="icon_close_alt2" title="Hapus"></i></a>
							</div>
							</td>
						</tr>
					<?php
					}
					?>					
				</tbody>
			</table>
		</section>
	</div>
</div>