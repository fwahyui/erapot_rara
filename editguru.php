<?php
$id=$_GET['id']; 
$jenjang=$_GET['jenjang'];   
include "koneksi.php";
$sql = "select * from guru where sha1(nip) ='$id'";
$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-files-o"></i>Entry Data Sekolah</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-files-o"></i>Entry Data Sekolah</li>
		</ol>
	</div>
</div>
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <div class="panel-body">
			  <div class="form">
				  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="simpaneditguru.php?jenjang=<?php echo $jenjang;?>">
					  <?php
					  while($rs=mysql_fetch_array($rw))
					  {
					  ?>
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
						  <label for="cemail" class="control-label col-lg-2">NIP<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="NIP" required value="<?php echo $rs[1];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Nama<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="Nama" required  value="<?php echo $rs[2];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Tempat Lahir<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="TempatLahir"  value="<?php echo $rs[3];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Tanggal Lahir<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="calendar" name="TanggalLahir"  value="<?php echo $rs[4];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Golongan<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="Golongan"  value="<?php echo $rs[5];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Jenis Kelamin<span class="required">*</span></label>
						  <div class="col-lg-10">
								<select class="form-control m-bot15"  name="JK">
									<option value="<?php echo $rs[6];?>"><?php echo $rs[6];?></option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Ijazah<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="Ijazah"value="<?php echo $rs[7];?>" />
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Jabatan<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <select class="form-control m-bot15"  name="Jabatan">
								<option value="<?php echo $rs[8];?>"><?php echo $rs[8];?></option>
								<option value="-">--------------------</option>
								<option value="Kepala Sekolah">Kepala Sekolah</option>
								<option value="Guru Kelas">Guru Kelas</option>
								<option value="Guru Penjas">Guru Penjas</option>
								<option value="Guru Agama">Guru Agama</option>
								<option value="Guru Mapel">Guru Mapel</option>
								<option value="Penjaga Sekolah">Penjaga Sekolah</option>
							</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">Status<span class="required">*</span></label>
						  <div class="col-lg-10">
							<select class="form-control m-bot15"  name="Status">
								<option value="<?php echo $rs[9];?>"><?php echo $rs[9];?></option>
								<option value="-">-------</option>
								<option value="PNS">PNS</option>
								<option value="CPNS">CPNS</option>
								<option value="GTT">GTT</option>
								<option value="GTY">GTY</option>
								<option value="SUKWAN">SUKWAN</option>
							</select>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">TGL Diangkat<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="TGLDiangkat"  value="<?php echo $rs[10];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">TGL Mulai<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="TGLMulai" value="<?php echo $rs[11];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">TGL SK<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="TGLSK"  value="<?php echo $rs[12];?>"/>
						  </div>
					  </div>
					  <div class="form-group ">
						  <label for="cemail" class="control-label col-lg-2">NO SK<span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input class="form-control " id="cemail" type="text" name="NOSK" value="<?php echo $rs[13];?>" />
						  </div>
					  </div>
					  <div class="form-group">
						  <div class="col-lg-offset-2 col-lg-10">
							  <button class="btn btn-primary" type="submit">Save</button>
							  <button class="btn btn-default" type="reset">Cancel</button>
						  </div>
					  </div>
					  <?php 
						}
						?>
				  </form>
			  </div>
		  </div>
	  </section>
  </div>
</div>
