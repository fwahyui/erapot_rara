<?php
$jenjang=$_GET['jenjang'];
include("koneksi.php");
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT  b.nama AS Sekolah,a.Bulan,a.Tahun,a.HariEfektif,a.Kelas,a.L,a.P
		,a.MilikSendiri,a.Pinjaman,a.IDSekolah,a.sakit,a.Ijin,a.Tanpaket 
		FROM jumlahsiswa a, sekolah b
		WHERE a.IDSekolah=b.idsekolah and a.Jenjang='$jenjang'";
	}
	else
	{
		$sql="SELECT  b.nama AS Sekolah,a.Bulan,a.Tahun,a.HariEfektif,a.Kelas,a.L,a.P
		,a.MilikSendiri,a.Pinjaman,a.IDSekolah,a.sakit,a.Ijin,a.Tanpaket 
		FROM jumlahsiswa a, sekolah b
		WHERE a.IDSekolah=b.idsekolah and a.Jenjang='$jenjang' and b.idsekolah=$sd";
	}
$rw=mysql_query($sql,$conn);

?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Data Jumlah Siswa</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Data Jumlah Siswa
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel"><br>
		<a class="btn btn-success btn-sm" href="?page=addsiswa&act=1&id=0&jenjang=<?php echo $jenjang;?>" title="Bootstrap 3 themes generator">
		Input Data Jumlah Siswa</a><br><br>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Sekolah</th>
						<th><i class="icon_calendar"></i>Bulan</th>
						<th><i class="icon_mail_alt"></i>Tahun</th>
						<th><i class="icon_pin_alt"></i>HariEfektif</th>
						<?php if ($jenjang=="PAUD")
						{
						?>
						<th><i class="icon_mobile"></i>Umur</th>
						<?php 
						}
						else if ($jenjang=="TK")
						{
						?>
						<th><i class="icon_mobile"></i>Kelompok</th>
						<?php 
						}
						else
						{
						?>
						<th><i class="icon_mobile"></i>Kelas</th>
						<?php 
						}
						?>
						<th><i class="icon_mobile"></i>L</th>
						<th><i class="icon_mobile"></i>P</th>

						<th><i class="icon_mobile"></i>S</th>
						<th><i class="icon_mobile"></i>I</th>
						<th><i class="icon_mobile"></i>A</th>
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
							<td><?php echo $s[4];?></td>
							<td><?php echo $s[5];?></td>
							<td><?php echo $s[6];?></td>
							<td><?php echo $s[10];?></td>
							<td><?php echo $s[11];?></td>
							<td><?php echo $s[12];?></td> 
							<td>
							<div class="btn-group">
								
								<a title = "Hapus"class="btn btn-danger" href="?page=hapussiswa&jenjang=<?php echo $jenjang;?>&id=<?php echo $s[9];?>&id1=<?php echo $s[1];?>&id2=<?php echo $s[2];?>" ><i class="icon_close_alt2" title="Hapus"></i></a>
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