<?php
$ids=$_GET['act']; 
$id=$_GET['id'];   
if ($ids=="1") 
{
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-files-o"></i>Entry Sarpras</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-files-o"></i>Entry Sarpras</li>
		</ol>
	</div>
</div>
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <div class="panel-body">
			  <div class="form">
				  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="simpansarpras.php">
					  
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2"> Sarpras<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="Jenjang" required />
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
else
{
include("koneksi.php");
$sql="select * FROM sekolah where sha1(idsekolah) = '$id'";
$rws=mysql_query($sql,$conn);
$rs=mysql_fetch_array($rws)
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-files-o"></i>Edit  Sarpras</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-files-o"></i>Edit  Sarpras</li>
		</ol>
	</div>
</div>
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <div class="panel-body">
			  <div class="form">
				  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="simpaneditsarpras.php?id=<?php echo $rs[0];?>">
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Jenjang <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="Jenjang">
							<option><?php echo $rs['1'];?></option>
							<?php
								include("koneksi.php");
								$sql = "select * from jenjang";
								$rw=mysql_query($sql,$conn);
								while($s=mysql_fetch_array($rw))
								{
							?>
							<option><?php echo $s['Jenjang'];?></option>
							<?php
								}
							?>
							</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Nama Sekolah <span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="Nama" required 
							  value="<?php echo $rs[2];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">NSS</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="NSS" value="<?php echo $rs[3];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Alamat</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="Alamat" value="<?php echo $rs[4];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">NoTelp</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="NoTelp" value="<?php echo $rs[5];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Desa</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="Desa" value="<?php echo $rs[6];?>"/>
						</div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Kec</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="Kec"  value="Licin"value="<?php echo $rs[7];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Kab</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="Kab" value="Banyuwangi"value="<?php echo $rs[8];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="curl" class="control-label col-lg-2">Prov</label>
						  <div class="col-lg-10">
							  <input class="form-control " id="curl" type="text" name="Prov" value="Jawatimur"value="<?php echo $rs[9];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Koordinat Lokasi</label>
						  <div class="col-lg-10">
							  <input class="form-control" id="subject" name="NLang" minlength="5" type="text" required value="<?php echo $rs[10];?>"/>
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