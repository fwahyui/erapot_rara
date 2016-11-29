<?php
$ids=$_GET['act']; 
$id=$_GET['id']; 
$jenjang=$_GET['jenjang'];   
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-files-o"></i>Entry Data Siswa & Bangunan</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-files-o"></i>Entry  Data Siswa & Bangunan</li>
		</ol>
	</div>
</div>
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <div class="panel-body">
			  <div class="form">
				  <form class="form-validate form-horizontal" id="feedback_form" method="post" 
				  action="simpansiswa.php?jenjang=<?php echo $jenjang;?>">
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
						  <label for="cemail" class="control-label col-lg-2">Hari Efektif<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="HariEfektif" />
						  </div>
					  </div>
					  <?php
					  if($jenjang=="SD")
					  {
					  ?>
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Kelas <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="Kelas">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						  </div>
					  </div>
					  <?php
					  }
					  else if($jenjang=="PAUD")
					  {
				      ?>
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Umur <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="Kelas">
								<option value="2">0-2 Thn</option>
								<option value="3">3 Thn</option>
								<option value="4">4 Thn</option>
								<option value="5">5 Thn</option>
								<option value="6">6 Thn</option>
							</select>
						  </div>
					  </div>
					  <?php
					  }
					  else if($jenjang=="TK")
					  {
				      ?>
					  <div class="form-group ">
						  <label for="cname" class="control-label col-lg-2">Kelompok <span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="Kelas">
								<option value="A">A</option>
								<option value="B">B</option>
							</select>
						  </div>
					  </div>
					  <?php
					  }
				      ?>
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
					  
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Sakit<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="calendar" name="sakit"  />
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Ijin<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="calendar" name="ijin"  />
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Tanpa Keterangan<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="calendar" name="alfa"  />
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