<?php
include("koneksi.php");
$sql="select * FROM sekolah";
$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Data Sekolah</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
			<li><i class="fa fa-laptop"></i>Data Sekolah 
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<a class="btn btn-success btn-sm" href="?page=addsekolah&act=1&id=0" title="Bootstrap 3 themes generator">Input Data Sekolah</a>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Jenjang</th>
						<th><i class="icon_calendar"></i>Nama</th>
						<th><i class="icon_mail_alt"></i>Alamat</th>
						<th><i class="icon_pin_alt"></i>NoTelp</th>
						<th><i class="icon_mobile"></i>Desa</th>
						<th><i class="icon_cogs"></i> Action</th>
					</tr>
					<?php
					while($s=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $s[1];?></td>
							<td><?php echo $s[2];?></td>
							<td><?php echo $s[4];?></td>
							<td><?php echo $s[5];?></td>
							<td><?php echo $s[6];?></td>
							<td>
							<div class="btn-group">
								<a class="btn btn-success" href="?page=addsekolah&act=2&id=<?php echo sha1($s[0]);?>"><i class="icon_check_alt2" title="Edit"></i> Edit</a>
								<a class="btn btn-danger" href="?page=hapussekolah&id=<?php echo sha1($s[0]);?>" ><i class="icon_close_alt2" title="Hapus"></i> Hapus</a>
								<a class="btn btn-info" href="?page=info&id=<?php echo $s[0];?>" title="Info Sekolah"><span class="icon_house_alt"></span> Info</a>
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