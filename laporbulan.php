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
$jenjang=$_GET['jenjang'];
if (isset($_POST['bulan']))
{
	$bln = $_POST['bulan'];
	$thn = $_POST['tahun'];
}
else
{
	$bln = $BulanAktif;
	$thn = $TahunAktif;
}
?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i> Lapor Bulan Jenjang  <?php echo $jenjang;?> - <?php echo " ";echo $Sekolah;?> - <?php echo "Bulan ".$bln." Tahun ".$thn;?></h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Lapor Bulan - <?php echo $Sekolah;?>  </li>						  	
		</ol>
	</div>
</div>
<style>
pie{}
line{}
</style>
<?php 
include "chart/status.php";

?>

<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading tab-bg-primary ">
				<ul class="nav nav-tabs">
				  <li class="active">
					  <a data-toggle="tab" href="#Guru">Data Guru</a>
				  </li>
				  <li class="">
					  <a data-toggle="tab" href="#Presensi">Presensi</a>
				  </li>
				  <li class="">
					  <a data-toggle="tab" href="#Agama">Agama</a>
				  </li>
				  <li class="">
					  <a data-toggle="tab" href="#Sarpras">Sarpras</a>
				  </li>
				  <li class="">
					  <a data-toggle="tab" href="#JumlahSiswa">Jumlah Siswa</a>
				  </li>
				  <li class="">
					  <a data-toggle="tab" href="#Rekap">Rekap Guru Sekolah</a>
				  </li>
				  <li class="">
					  <a data-toggle="tab" href="#Rekapmurid">Rekap Murid</a>
				  </li>
				  <li class="">
					  <a data-toggle="tab" href="#cetak">Cetak</a>
				  </li>
				</ul>
			</header>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="Guru" class="tab-pane active"><br>
						<div class="col-sm-12">
							<section class="panel">
							<header class="panel-heading">
							Data Guru
							</header>
							<div class="panel-body text-center">
							<?php include "laporbulan/guru.php";?>
							</div>
							</section>
						</div>
                    </div>
					<div id="Presensi" class="tab-pane"><br>
						<div class="col-sm-12">
							<section class="panel">
							<header class="panel-heading">
							Presensi
							</header>
							<div class="panel-body text-center">
							<?php include "laporbulan/presensi.php";?>
							</div>
							</section>
						</div>
                    </div>
                    <div id="Agama" class="tab-pane"><br>
						<div class="col-sm-12">
							<section class="panel">
							<header class="panel-heading">
							Diagram Guru Berdasarkan Agama
							</header>
							<div class="panel-body text-center">
							<?php include "laporbulan/agama.php";?>
							</div>
							</section>
						</div>
					</div>
					<div id="Sarpras" class="tab-pane"><br>
						<div class="col-sm-12">
							<section class="panel">
							<header class="panel-heading">
							Diagram Guru Berdasarkan profile
							</header>
							<div class="panel-body text-center">
							<?php include "laporbulan/sarana.php";?>
							</div>
							</section>
						</div>
					</div>								  
					<div id="JumlahSiswa" class="tab-pane"><br>
						<div class="col-sm-12">
							<section class="panel">
							<header class="panel-heading">
							Diagram Guru Berdasarkan contact
							</header>
							<div class="panel-body text-center">
							<?php include "laporbulan/siswa.php";?>
							</div>
							</section>
						</div>
					</div>	
					<div id="Rekap" class="tab-pane"><br>
						<div class="col-sm-12">
							<section class="panel">				
							<?php include "laporbulan/rekap.php";?>
							</section>
						</div>
					</div>
					<div id="Rekapmurid" class="tab-pane"><br>
						<div class="col-sm-12">
							<section class="panel">				
							<?php 
								include "laporbulan/rekapmurid.php";
							?>
							</section>
						</div>
					</div>
					<div id="cetak" class="tab-pane"><br>
						<div class="col-sm-12">
							<section class="panel">				
							<?php 
								include "laporbulan/cetak.php";
							?>
							</section>
						</div>
					</div>					
				
			</div>
			
		</section>
    </div>
</div>
</div>
<section class="panel">
<header class="panel-heading">
 Search
</header>
  <div class="panel-body">
	  <form class="form-horizontal " method="POST" action="index.php?page=laporbulan&jenjang=<?php echo $jenjang?>">
		  <div class="form-group">
			  <label class="control-label col-lg-2" for="inputSuccess">Pilih Bulan Tahun</label>
			  <div class="col-lg-10">
				  <select class="form-control input-lg m-bot15" name="bulan">
					  <option value="Januari">Januari</option>
					  <option value="Februari">Februari</option>
					  <option value="Maret">Maret</option>
					  <option value="April">April</option>
					  <option value="Mei">Mei</option>
					  <option value=""Juni>Juni</option>
					  <option value="Juli">Juli</option>
					  <option value="Agustus">Agustus</option>
					  <option value="September">September</option>
					  <option value="Oktober">Oktober</option>
					  <option value="November">November</option>
					  <option value="Desember">Desember</option>
				  </select>
				  <select class="form-control input-lg m-bot15" name="tahun">
					  <option value="2015">2015</option>
					  <option value="2016">2016</option>
					  <option value="2017">2017</option>
				  </select>
				  <button type="submit" class="btn btn-primary">Submit</button>
			  </div>
		  </div>
	  </form>
  </div>
</section>
<?php include "chart/js.php";?>