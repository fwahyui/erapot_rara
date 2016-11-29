<header class="panel-heading">
	Rekapitulasi Guru Sekolah
</header>
<?php
$jenjang=$_GET['jenjang'];
include("koneksi.php");
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT idsekolah, Nama AS NamaSekolah FROM sekolah where Jenjang='$jenjang'";
	}
	else
	{
		$sql="SELECT idsekolah, Nama AS NamaSekolah FROM sekolah where Jenjang='$jenjang'
		and idsekolah=$sd";
	}

$rw=mysql_query($sql,$conn);
if ($jenjang =="SD")
{
?>
	<div class="panel-body text-center">
		<table class="table table-striped table-advance table-hover">
			<tbody>
				<tr>
					<th><i class="icon_profile"></i>Sekolah</th>
					<th><i class="icon_mobile"></i>Guru Kelas</th>
					<th><i class="icon_mobile"></i>Guru Agama</th>
					<th><i class="icon_mobile"></i>Guru Penjas</th>
					<th><i class="icon_mobile"></i>Penjaga</th>
					<th><i class="icon_mobile"></i>Jumlah</th>
				</tr>
				<?php
				while($s=mysql_fetch_array($rw))
				{
				?>
					<tr>
						<th><?php echo $s[1];?></th>
						<th>
							<?php
								$sql = "SELECT COUNT(jabatan) AS GuruKelas FROM guru WHERE jabatan='Guru Kelas' and idsekolah=$s[0]";
								$GuruKelas=mysql_query($sql,$conn);
								$xGuruKelas=mysql_fetch_array($GuruKelas);
								echo $xGuruKelas[0];
							?>
						</th>
						<th>
							<?php
								$sql = "SELECT COUNT(jabatan) AS GuruKelas FROM guru WHERE jabatan='Guru Agama' and idsekolah=$s[0]";
								$Agama=mysql_query($sql,$conn);
								$xAgama=mysql_fetch_array($Agama);
								echo $xAgama[0];
							?>
						</th>
						<th>
							<?php
								$sql = "SELECT COUNT(jabatan) AS GuruKelas FROM guru WHERE jabatan='Guru Penjas' and idsekolah=$s[0]";
								$Penjas=mysql_query($sql,$conn);
								$xPenjas=mysql_fetch_array($Penjas);
								echo $xPenjas[0];
							?>
						</th>
						<th>
							<?php
								$sql = "SELECT COUNT(jabatan) AS GuruKelas FROM guru WHERE jabatan='Penjaga' and idsekolah=$s[0]";
								$Penjaga=mysql_query($sql,$conn);
								$xPenjaga=mysql_fetch_array($Penjaga);
								echo $xPenjaga[0];
							?>
						</th>
						<th>
						<?php 
							$jumlah = $xGuruKelas[0]+$xPenjaga[0]+$xPenjas[0]+$xAgama[0];
							echo $jumlah;
						?>
						</th>
					</tr>
				<?php
				}
				?>					
			</tbody>
		</table>
	</div>
<?php 
} 
else if ($jenjang =="TK")
{
?>
<div class="panel-body text-center">
		<table class="table table-striped table-advance table-hover">
			<tbody>
				<tr>
					<th><i class="icon_profile"></i>Sekolah</th>
					<th><i class="icon_mobile"></i>Jumlah Guru</th>
					<th><i class="icon_mobile"></i>Kelas</th>
				</tr>
				<?php
				while($s=mysql_fetch_array($rw))
				{
				?>
					<tr>
						<th><?php echo $s[1];?></th>
						<th>
							<?php
								$sql = "SELECT COUNT(nip) AS GuruKelas FROM guru WHERE  idsekolah=$s[0]";
								$GuruKelas=mysql_query($sql,$conn);
								$xGuruKelas=mysql_fetch_array($GuruKelas);
								echo $xGuruKelas[0];
							?>
						</th>
						<th>
							<?php
								$sql = "SELECT jumlah FROM sarana WHERE idsekolah=$s[0]";
								$Agama=mysql_query($sql,$conn);
								$xAgama=mysql_fetch_array($Agama);
								echo $xAgama[0];
							?>
						</th>
					</tr>
				<?php
				}
				?>					
			</tbody>
		</table>
	</div>
<?php
}
else if ($jenjang =="PAUD")
{
?>
<div class="panel-body text-center">
		<table class="table table-striped table-advance table-hover">
			<tbody>
				<tr>
					<th><i class="icon_profile"></i>Sekolah</th>
					<th><i class="icon_mobile"></i>Jumlah Guru</th>
					<th><i class="icon_mobile"></i>Kelas</th>
				</tr>
				<?php
				while($s=mysql_fetch_array($rw))
				{
				?>
					<tr>
						<th><?php echo $s[1];?></th>
						<th>
							<?php
								$sql = "SELECT COUNT(nip) AS GuruKelas FROM guru WHERE  idsekolah=$s[0]";
								$GuruKelas=mysql_query($sql,$conn);
								$xGuruKelas=mysql_fetch_array($GuruKelas);
								echo $xGuruKelas[0];
							?>
						</th>
						<th>
							<?php
								$sql = "SELECT jumlah FROM sarana WHERE idsekolah=$s[0]";
								$Agama=mysql_query($sql,$conn);
								$xAgama=mysql_fetch_array($Agama);
								echo $xAgama[0];
							?>
						</th>
					</tr>
				<?php
				}
				?>					
			</tbody>
		</table>
	</div>
<?php
}
?>