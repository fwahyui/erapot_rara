<?php
$jenjang=$_GET['jenjang'];
include("koneksi.php");
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT b.nama AS Sekolah,a.Bulan,a.Tahun,a.agama,a.L,a.P,a.IDSekolah
		FROM agama a,sekolah b
		WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang'";
	}
	else
	{
		$sql="SELECT b.nama AS Sekolah,a.Bulan,a.Tahun,a.agama,a.L,a.P,a.IDSekolah
		FROM agama a,sekolah b
		WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang'  and b.idsekolah=$sd";
	}

$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Data Agama Siswa</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Data Agama Siswa
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel"><br>
		<a class="btn btn-success btn-sm" href="?page=addagama&act=1&id=0&jenjang=<?php echo $jenjang;?>" title="Bootstrap 3 themes generator">
		Input Data Agama Siswa</a><br><br>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Sekolah</th>
						<th><i class="icon_calendar"></i>Bulan</th>
						<th><i class="icon_mail_alt"></i>Tahun</th>
						<th><i class="icon_pin_alt"></i>Agama</th>
						<th><i class="icon_mobile"></i>L</th>
						<th><i class="icon_mobile"></i>P</th>
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
							
							<td>
							<div class="btn-group">
								<a class="btn btn-danger" href="?page=hapusagama&jenjang=<?php echo $jenjang;?>&id=<?php echo $s[1];?>&id2=<?php echo $s[2];?>&id3=<?php echo $s[6];?>" ><i class="icon_close_alt2" title="Hapus"></i></a>
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