<?php
$jenjang=$_GET['jenjang'];
include("koneksi.php");
$sd = $_SESSION['Idsekolah'];
if ($sd==0)
{
	$sql="SELECT b.Nama, a.NIP, a.Nama,
	a.TempatLahir, a.TanggalLahir, a.Golongan,
	a.JK, Ijazah, a.Jabatan, a.`Status`,
	a.TGLDiangkat, a.TGLMulai, a.TGLSK, a.NOSK
	FROM guru a, sekolah b WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang'";
}
else
{
	$sql="SELECT b.Nama, a.NIP, a.Nama,
	a.TempatLahir, a.TanggalLahir, a.Golongan,
	a.JK, Ijazah, a.Jabatan, a.`Status`,
	a.TGLDiangkat, a.TGLMulai, a.TGLSK, a.NOSK
	FROM guru a, sekolah b WHERE a.IDSekolah=b.IdSekolah and b.Jenjang='$jenjang' and a.idsekolah=$sd";
}
$rw=mysql_query($sql,$conn);

?>

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i>Data Guru Dan Penjaga</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Data Guru Dan Penjaga
			
			</li>						  	
		</ol>
	</div>
</div> 
<div class="row">
	<div class="col-lg-12">
		<section class="panel"><br>
		<a class="btn btn-success btn-sm" href="?page=addguru&act=1&id=0&jenjang=<?php echo $jenjang;?>" title="Bootstrap 3 themes generator">
		Input Data Guru</a><br><br>
			<table class="table table-striped table-advance table-hover" id="data">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i>Sekolah</th>
						<th><i class="icon_calendar"></i>NIP</th>
						<th><i class="icon_mail_alt"></i>Nama</th>
						<th><i class="icon_pin_alt"></i>Tempat/Tanggal Lahir</th>
						<th><i class="icon_mobile"></i>Golongan</th>
						<th><i class="icon_mobile"></i>JK</th>
						<th><i class="icon_mobile"></i>TGL SK</th>
						<th><i class="icon_mobile"></i>Masa Jabatan</th>
						<th><i class="icon_mobile"></i>NO SK</th>
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
							<td><?php echo $s[4];?></td>
							<td><?php echo $s[5];?></td>
							<td><?php echo $s[6];?></td>
							<td><?php echo $s[12];?></td>
							<td>
								<?php
									$saiki = date("d m Y");
									
									$tglsk = date ($s[12]);
									$masa = $saiki-$tglsk;
									$tahun = $masa/365;
									$sisa = $masa%365;
									$bulan = $sisa/30;
									$hari = $sisa%30;
									$masakerja = floor($tahun)." Thn ".floor($bulan)." Bln ".floor ($hari)." Hari";
									
									echo $masakerja;
								?>
							</td>
							<td><?php echo $s[13];?></td>
							<td>
							<div class="btn-group">
								<a class="btn btn-success" href="?page=editguru&jenjang=<?php echo $jenjang;?>&id=<?php echo sha1($s[1]);?>"><i class="icon_check_alt2" title="Edit"></i></a>
								<a class="btn btn-danger" href="?page=hapusguru&jenjang=<?php echo $jenjang;?>&id=<?php echo sha1($s[1]);?>" ><i class="icon_close_alt2" title="Hapus"></i></a>
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