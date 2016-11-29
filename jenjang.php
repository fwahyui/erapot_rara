<?php
include("koneksi.php");
$sql="select * FROM jenjang";
$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Jenjang Sekolah</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
			<li><i class="fa fa-laptop"></i>Jenjang Sekolah 
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<a class="btn btn-success btn-sm" href="?page=addjenjang&act=1&id=0" title="Bootstrap 3 themes generator">
		Input Jenjang</a>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Jenjang</th>
						<th><i class="icon_cogs"></i> Action</th>
					</tr>
					<?php
					while($s=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $s[0];?></td>
							<td>
							<div class="btn-group">
								<a class="btn btn-danger" href="?page=hapusjenjang&id=<?php echo sha1($s[0]);?>" ><i class="icon_close_alt2" title="Hapus"></i> Hapus</a>
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