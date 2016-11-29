<?php
include("koneksi.php");
if($_SESSION['Idsekolah']>=1)
{
	$sql = "Select nama from sekolah where idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$Sekolah = $s[0];
	}
}
else
{
	$Sekolah="";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard <?php echo $Sekolah;?></h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
			<li><i class="fa fa-laptop"></i>Dashboard <?php echo $Sekolah;?></li>						  	
		</ol>
	</div>
</div>
<style>
pie{}
line{}
</style>
<?php include "chart/status.php";?>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<header class="panel-heading tab-bg-primary ">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#Status">Status</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Jabatan">Jabatan</a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="Status" class="tab-pane active"><br>
										<div class="col-sm-12">
											<section class="panel">
											<header class="panel-heading">
											Diagram Guru Berdasarkan Status Kepegawaian
											</header>
											<div class="panel-body text-center">
											<canvas id="pie" height="300" width="800"></canvas>
											</div>
											</section>
										</div>
                                  </div>
                                  <div id="Jabatan" class="tab-pane"><br>
										<div class="col-sm-12">
											<section class="panel">
											<header class="panel-heading">
											Diagram Guru Berdasarkan Jabatan
											</header>
											<div class="panel-body text-center">
											<canvas id="line" height="300" width="800"></canvas>
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
<?php include "chart/js.php";?>