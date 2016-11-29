<?php
$ids=$_GET['act']; 
$id=$_GET['id'];   
if ($ids=="1") 
{
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-files-o"></i>Entry Data User</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-files-o"></i>Entry Data User</li>
		</ol>
	</div>
</div>
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <div class="panel-body">
			  <div class="form">
				  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="simpanuser.php">
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Sekolah <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="IDSekolah">
							<option Value="0">Admin</option>
							<option Value="0">Operator UPTD</option>
							<?php
								include("koneksi.php");
								$sql = "select * from sekolah order by jenjang";
								$rw=mysql_query($sql,$conn);
								while($s=mysql_fetch_array($rw))
								{
							?>
							<option value="<?php echo $s[0];?>"><?php echo $s[2];?></option>
							<?php
								}
							?>
							</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Username <span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="Username" required />
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Password</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="pass" />
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Hak Akses</label>
						  <div class="col-lg-10">
						    <select class="form-control m-bot15"  name="HakAkses">
						      <option Value="Admin"> Admin</option>
							  <option Value="Operator UPTD"> Operator UPTD</option>
							  <option Value="Operator Sekolah"> Operator Sekolah</option>
					        </select>
						  </div>
					  </div>
					  <div class="form-group "></div>
					  <div class="form-group ">					    </div>
					  <div class="form-group">
						  <div class="col-lg-offset-2 col-lg-10">
							  <button class="btn btn-primary" type="submit">Save</button>
							  <button class="btn btn-default" type="Reset">Reset</button>
						  </div>
					  </div>
				  </form>
			  </div>
		  </div>
	  </section>
  </div>
</div>
<?php
}
else
{
include("koneksi.php");
$sql = "SELECT   a.Username, a.pass,  b.Nama,  a.HakAkses,a.IDSekolah
FROM tbluser a, sekolah b WHERE a.IDSekolah= b.idsekolah and a.Username = '$id'";
$rws=mysql_query($sql,$conn);
$rs=mysql_fetch_array($rws)
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-files-o"></i>Edit Data User</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-files-o"></i>Edit Data User</li>
		</ol>
	</div>
</div>
<div class="row">
  <div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <div class="panel-body">
			  <div class="form">
				  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="simpanedituser.php?id=<?php echo $rs[0];?>">
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Sekolah <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="IDSekolah">
							<option Value="<?php echo $rs[4];?>"><?php echo $rs[2];?></option>
							<option Value="Admin">Admin</option>
							<?php
								include("koneksi.php");
								$sql = "select * from sekolah";
								$rw=mysql_query($sql,$conn);
								while($s=mysql_fetch_array($rw))
								{
							?>
							<option value="<?php echo $s[0];?>"><?php echo $s[2];?></option>
							<?php
								}
							?>
							</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Username <span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="Username" required value ="<?php echo $rs[0];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Password</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="pass" value ="<?php echo $rs[1];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Hak Akses</label>
						  <div class="col-lg-10">
						    <select class="form-control m-bot15"  name="HakAkses">
						      <option  value ="<?php echo $rs[3];?>"> <?php echo $rs[3];?></option>
							  <option Value="Admin"> Admin</option>
							  <option Value="Operator UPTD"> Operator UPTD</option>
							  <option Value="Operator Sekolah"> Operator Sekolah</option>
					        </select>
						  </div>
					  </div>
					  <div class="form-group">
						  <div class="col-lg-offset-2 col-lg-10">
							  <button class="btn btn-primary" type="submit">Save</button>
							  <button class="btn btn-default" type="reset">Reset</button>
						  </div>
					  </div>
				  </form>
			  </div>
		  </div>
	  </section>
  </div>
</div>
<?php
}
?>