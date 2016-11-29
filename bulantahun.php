<?php
include("koneksi.php");
$sql = "SELECT   * from tbbulanaktif";
$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Lapor Bulan Aktif</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
			<li><i class="fa fa-laptop"></i>Lapor Bulan Aktif  
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<br><a class="btn btn-success btn-sm" href="?page=adduser&act=1&id=0" 
		title="Bootstrap 3 themes generator">Input Bulan Tahun</a><br><br>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Bulan</th>
						<th><i class="icon_calendar"></i>Tahun</th>
						<th><i class="icon_mail_alt"></i>Status</th>
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
							<td>
							<div class="btn-group">
							  <a class="btn btn-success" href="?page=editbulan&id=<?php echo $s[0];?>"><i class="icon_check_alt2" title="Edit"></i> Set Aktif</a>
							  <a class="btn btn-danger" href="?page=hapusbulan&id=<?php echo $s[0];?>" ><i class="icon_close_alt2" title="Hapus"></i> Hapus</a>
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