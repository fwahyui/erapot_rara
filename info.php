<?php
include("koneksi.php");
if($_SESSION['Idsekolah']>=1)
{
	$sql = "Select * from sekolah where idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$Sekolah = $s[0];
	}
}
else
{
	$Sekolah=$_GET['id'];
}
$sql = "select * from Sekolah where idsekolah=$Sekolah";
$rw=mysql_query($sql,$conn);
$s=mysql_fetch_array($rw)
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i> Info Sekolah <?php echo $s[2];?></h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i><a href="?page=sekolah">Data Sekolah</a></li>
			<li><i class="fa fa-laptop"></i><a href="#"><?php echo $s[2];?></a></li>			
		</ol>
	</div>
</div>
<style>
line{}
</style>

<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<header class="panel-heading tab-bg-primary ">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#Peta">Peta Lokasi</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Agama">Guru</a>
                                  </li>
								  <li class="">
                                      <a data-toggle="tab" href="#sarana">Sarana</a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="Peta" class="tab-pane active"><br>
										<div class="col-sm-12">
											<section class="panel">
											<header class="panel-heading">
											Peta Lokasi Sekolah <?php echo $s[2];?>
											</header>
											<div class="panel-body text-center">
											<iframe src="https://maps.google.com/maps?q=<?php echo $s[10];?>&hl=es;z=14&amp;output=embed" 
											width="100%" height="500" 
											frameborder="0" style="border:0" allowfullscreen></iframe>

											</div>
											</section>
										</div>
                                  </div>
                                  <div id="Agama" class="tab-pane"><br>
										<div class="col-sm-12">
											<section class="panel">
											<header class="panel-heading">
											Data Guru
											</header>
											<div class="panel-body text-center">
											<canvas id="line" height="300" width="800"></canvas>
											</div>
											</section>
										</div>
								  </div>
									<div id="sarana" class="tab-pane"><br>
										<div class="col-sm-12">
											<section class="panel">
											<header class="panel-heading">
											Sarana Sekolah
											</header>
											<div class="panel-body text-center">
											<?php include "chart/sarpras.php";?>
											</div>
											</section>
										</div>
								  </div>								  
								  </div>
                              </div>
                          </div>
		</section>
	</div>
</div>
<?php include "chart/status.php";?>
<?php include "chart/js.php";?>