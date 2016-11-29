<?php
$jenjang=$_GET['jenjang'];
include("koneksi.php");
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT a.idsekolah,c.nama,a.bulan,a.tahun,a.sarpras,a.jumlah 
		FROM sarana a, sarpras b, sekolah c
		WHERE a.IDSekolah =c.IdSekolah AND a.sarpras=b.sarpras and c.Jenjang='$jenjang'";
	}
	else
	{
		$sql="SELECT a.idsekolah,c.nama,a.bulan,a.tahun,a.sarpras,a.jumlah 
		FROM sarana a, sarpras b, sekolah c
		WHERE a.IDSekolah =c.IdSekolah AND a.sarpras=b.sarpras and c.Jenjang='$jenjang' and c.idsekolah=$sd";
	}

$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Data Sarana Sekolah</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Data Sarana Sekolah
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel"><br>
		<a class="btn btn-success btn-sm" href="?page=addsarana&act=1&id=0&jenjang=<?php echo $jenjang;?>" title="Bootstrap 3 themes generator">
		Input Data Sarana Sekolah</a><br><br>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Sekolah</th>
						<th><i class="icon_calendar"></i>Bulan</th>
						<th><i class="icon_mail_alt"></i>Tahun</th>
						<th><i class="icon_mobile"></i>Sarana Sekolah</th>
						<th><i class="icon_mobile"></i>Jumlah</th>
						<th><i class="icon_cogs"></i> Action</th>
					</tr>
					<?php
					while($s=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $s[1];?></td>
							<td><?php echo $s[2];?></td>
							<td><?php echo $s[3];?></td>
							<td><?php echo $s[4];?></td>
							<td><?php echo $s[5];?></td>
							<td>
							<div class="btn-group">
								
								<a class="btn btn-danger" href="?page=hapussarana&jenjang=<?php echo $jenjang;?>&id=<?php echo $s[0];?>&id1=<?php echo $s[2];?>&id2=<?php echo $s[3];?>" ><i class="icon_close_alt2" title="Hapus"></i></a>
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