<?php
$ids=$_GET['act']; 
$id=$_GET['id']; 
$jenjang=$_GET['jenjang'];   
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-files-o"></i>Entry Data Agama</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-files-o"></i>Entry  Data Agama</li>
		</ol>
	</div>
</div>
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <div class="panel-body">
			  <div class="form">
				  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="simpanagama.php?jenjang=<?php echo $jenjang;?>">
					  					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Sekolah <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="IDSekolah">
								<?php
								include("koneksi.php");
								$sql = "select * from sekolah where jenjang='$jenjang'";
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
						  <label for="cname" class="control-label col-lg-2">Bulan <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="Bulan">
								<option value="Januari">Januari</option>
								<option value="Februari">Februari</option>
								<option value="Maret">Maret</option>
								<option value="April">April</option>
								<option value="Mei">Mei</option>
								<option value="Juni">Juni</option>
								<option value="Juli">Juli</option>
								<option value="Agustus">Agustus</option>
								<option value="September">September</option>
								<option value="November">November</option>
								<option value="Desember">Desember</option>
							</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Agama <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="Agama">
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Katolik">Katolik</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
							</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Laki-laki<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="L" />
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Perempuan<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="calendar" name="P"  />
						  </div>
					  </div>
					  <div class="form-group">
						  <div class="col-lg-offset-2 col-lg-10">
							  <button class="btn btn-primary" type="submit">Save</button>
							  <button class="btn btn-default" type="reset">Cancel</button>
						  </div>
					  </div>
				  </form>
			  </div>
		  </div>
	  </section>
  </div>
</div>