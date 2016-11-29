<?php
include("koneksi.php");
$sql = "SELECT   a.Username, SHA1(a.pass)AS Pass,  b.Nama,  a.HakAkses
FROM tbluser a, sekolah b WHERE a.IDSekolah= b.idsekolah";
$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Data User</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
			<li><i class="fa fa-laptop"></i>Data User  
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<br><a class="btn btn-success btn-sm" href="?page=adduser&act=1&id=0" title="Bootstrap 3 themes generator">Input User</a><br><br>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>UserName</th>
						<th><i class="icon_calendar"></i>Password</th>
						<th><i class="icon_mail_alt"></i>Sekolah</th>
						<th><i class="icon_pin_alt"></i>Hak Akses</th>
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
							<td>
							<div class="btn-group">
							  <a class="btn btn-success" href="?page=adduser&act=2&id=<?php echo $s[0];?>"><i class="icon_check_alt2" title="Edit"></i> Edit</a>
							  <a class="btn btn-danger" href="?page=hapususer&id=<?php echo sha1($s[0]);?>" ><i class="icon_close_alt2" title="Hapus"></i> Hapus</a>
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