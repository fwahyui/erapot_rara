<?php
$angka=0;
$jenjang=$_GET['jenjang'];
if (isset($_POST['bulan']))
{
$TahunAktif = $_POST['tahun'];
$BulanAktif= $_POST['bulan'];
}

include("koneksi.php");
	$sd = $_SESSION['Idsekolah'];
	if ($sd==0)
	{
		$sql="SELECT idsekolah, Nama AS NamaSekolah,MilikSendiri,Pinjaman FROM sekolah where Jenjang='$jenjang'";
	}
	else
	{
		$sql="SELECT idsekolah, Nama AS NamaSekolah,MilikSendiri,Pinjaman FROM sekolah where Jenjang='$jenjang'
		and idsekolah=$sd";
	}
	
$rw=mysql_query($sql,$conn);
if ($jenjang =="SD")
{
?>
	<div class="panel-body text-center">
		<table class="table table-striped table-advance table-hover" border=1>
			<tbody>
				<tr>
					
					<td rowspan="3">NAMA SEKOLAH</td>
					<td colspan="9">JUMLAH KELAS</td>
					<td colspan="12">JUMLAH MURID BULAN INI</td>
					<td colspan="3">JML SISWA </td>
				</tr>
				<tr>
					<td rowspan="2">SENDIRI</td>
					<td rowspan="2">PINJAM</td>
					<td rowspan="2">I</td>
					<td rowspan="2">II</td>
					<td rowspan="2">III</td>
					<td rowspan="2">IV</td>
					<td rowspan="2">V</td>
					<td rowspan="2">VI</td>
					<td rowspan="2">JML</td>
					<td colspan="2">I</td>
					<td colspan="2">II</td>
					<td colspan="2">III</td>
					<td colspan="2">IV</td>
					<td colspan="2">V</td>
					<td colspan="2">VI</td>
					<td colspan="3">Semua</td>
				</tr>
				<tr>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>Jml</td>
				</tr>
				<?php
				while($s=mysql_fetch_array($rw))
				{
				?>
				<tr>
					<td><?php echo $s[1];?></td>
					<td><?php echo $s[2];?></td>
					<td><?php echo $s[3];?></td>
					<?php
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='1'";
					$rws=mysql_query($sql,$conn);
					$kls1=mysql_fetch_array($rws);
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='2'";
					$rws=mysql_query($sql,$conn);
					$kls2=mysql_fetch_array($rws);
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='3'";
					$rws=mysql_query($sql,$conn);
					$kls3=mysql_fetch_array($rws);
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.'  AND kelas='4'";
					$rws=mysql_query($sql,$conn);
					$kls4=mysql_fetch_array($rws);
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.'  AND kelas='5'";
					$rws=mysql_query($sql,$conn);
					$kls5=mysql_fetch_array($rws);
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.'  AND kelas='6'";
					$rws=mysql_query($sql,$conn);
					$kls6=mysql_fetch_array($rws);
					?>
					<td><?php echo $kls1[2];?></td>
					<td><?php echo $kls2[2];?></td>
					<td><?php echo $kls3[2];?></td>
					<td><?php echo $kls4[2];?></td>
					<td><?php echo $kls5[2];?></td>
					<td><?php echo $kls6[2];?></td>  
					<td><?php 
					$jumlah = $kls1[2]+$kls2[2]+$kls3[2]+$kls4[2]+$kls5[2]+$kls6[2];
					echo $jumlah;
					?></td>  
					<td><?php echo $kls1[0];?></td>
					<td><?php echo $kls1[1];?></td>
					<td><?php echo $kls2[0];?></td>
					<td><?php echo $kls2[1];?></td>
					<td><?php echo $kls3[0];?></td>
					<td><?php echo $kls3[1];?></td>
					<td><?php echo $kls4[0];?></td>
					<td><?php echo $kls4[1];?></td>
					<td><?php echo $kls5[0];?></td>
					<td><?php echo $kls5[1];?></td>
					<td><?php echo $kls6[0];?></td>
					<td><?php echo $kls6[1];?></td>
					<td><?php 
					$jumlahL = $kls1[0]+$kls2[0]+$kls3[0]+$kls4[0]+$kls5[0]+$kls6[0];
					echo $jumlahL;
					?></td>
					<td><?php 
					$jumlahL = $kls1[1]+$kls2[1]+$kls3[1]+$kls4[1]+$kls5[1]+$kls6[1];
					echo $jumlahL;
					?></td>
					<td><?php echo $jumlah;?></td>
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
					
					<td rowspan="3">NAMA SEKOLAH</td>
					<td colspan="8">JUMLAH KELAS</td>
					<td colspan="10">JUMLAH MURID BULAN INI</td>
					<td colspan="3">JML SISWA </td>
				</tr>
				<tr>
					<td rowspan="2">SENDIRI</td>
					<td rowspan="2">PINJAM</td>
					<td rowspan="2">1-2</td>
					<td rowspan="2">3</td>
					<td rowspan="2">4</td>
					<td rowspan="2">5</td>
					<td rowspan="2">6</td>
					
					<td rowspan="2">JML</td>
					<td colspan="2">1-2</td>
					<td colspan="2">3</td>
					<td colspan="2">4</td>
					<td colspan="2">5</td>
					<td colspan="2">6</td>
					
					<td colspan="3">Semua</td>
				</tr>
				<tr>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>

					<td>L</td>
					<td>P</td>
					<td>Jml</td>
				</tr>
				<?php
				while($s=mysql_fetch_array($rw))
				{
				?>
				<tr>
					<td><?php echo $s[1];?></td>
					<td><?php echo $s[2];?></td>
					<td><?php echo $s[3];?></td>
					<?php
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='1-2'";
					$rws=mysql_query($sql,$conn);
					$kls1=mysql_fetch_array($rws);
					
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='3'";
					$rws=mysql_query($sql,$conn);
					$kls2=mysql_fetch_array($rws);
										
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='4'";
					$rws=mysql_query($sql,$conn);
					$kls3=mysql_fetch_array($rws);
										
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='5'";
					$rws=mysql_query($sql,$conn);
					$kls4=mysql_fetch_array($rws);
										
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='6'";
					$rws=mysql_query($sql,$conn);
					$kls5=mysql_fetch_array($rws);
					?>
					<td><?php echo $kls1[2];?></td>
					<td><?php echo $kls2[2];?></td>
					<td><?php echo $kls3[2];?></td>
					<td><?php echo $kls4[2];?></td>
					<td><?php echo $kls5[2];?></td>
					<td><?php 
					$jumlah = $kls1[2]+$kls2[2]+$kls3[2]+$kls4[2]+$kls5[2];
					echo $jumlah;
					?></td>  
					  
					<td><?php echo $kls1[0];?></td>
					<td><?php echo $kls1[1];?></td>
					<td><?php echo $kls2[0];?></td>
					<td><?php echo $kls2[1];?></td>
					<td><?php echo $kls3[0];?></td>
					<td><?php echo $kls3[1];?></td>
					<td><?php echo $kls4[0];?></td>
					<td><?php echo $kls4[1];?></td>
					<td><?php echo $kls5[0];?></td>
					<td><?php echo $kls5[1];?></td>
					<td><?php 
					$jumlahL = $kls1[0]+$kls2[0]+$kls3[0]+$kls4[0]+$kls5[0];
					echo $jumlahL;
					?></td>
					<td><?php 
					$jumlahL = $kls1[1]+$kls2[1]+$kls3[1]+$kls4[1]+$kls5[1];
					echo $jumlahL;
					?></td>
					<td><?php echo $jumlah; ?></td>
						
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
					
					<td rowspan="3">NAMA SEKOLAH</td>
					<td colspan="5">JUMLAH KELAS</td>
					<td colspan="4">JUMLAH MURID BULAN INI</td>
					<td colspan="3">JML SISWA </td>
				</tr>
				<tr>
					<td rowspan="2">SENDIRI</td>
					<td rowspan="2">PINJAM</td>
					<td rowspan="2">A</td>
					<td rowspan="2">B</td>
				
					<td rowspan="2">JML</td>
					<td colspan="2">A</td>
					<td colspan="2">B</td>
					
					
					<td colspan="3">Semua</td>
				</tr>
				<tr>
					<td>L</td>
					<td>P</td>
					<td>L</td>
					<td>P</td>
					

					<td>L</td>
					<td>P</td>
					<td>Jml</td>
				</tr>
				<?php
				while($s=mysql_fetch_array($rw))
				{
				?>
				<tr>
					<td><?php echo $s[1];?></td>
					<td><?php echo $s[2];?></td>
					<td><?php echo $s[3];?></td>
					<?php
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='A'";
					$rws=mysql_query($sql,$conn);
					$kls1=mysql_fetch_array($rws);
					
					$sql ="SELECT ifnull(l,0),ifnull(p,0), ifnull((l + p),0) AS jumlah 
					FROM jumlahsiswa 
					WHERE idsekolah=$s[0] AND 
					bulan ='.$BulanAktif.' AND tahun ='.$TahunAktif.' AND kelas='B'";
					$rws=mysql_query($sql,$conn);
					$kls2=mysql_fetch_array($rws);
										
					
					?>
					<td><?php echo $kls1[2];?></td>
					<td><?php echo $kls2[2];?></td>
					<td><?php 
					$jumlah = $kls1[2]+$kls2[2];
					echo $jumlah;
					?></td>  
					  
					<td><?php echo $kls1[0];?></td>
					<td><?php echo $kls1[1];?></td>
					<td><?php echo $kls2[0];?></td>
					<td><?php echo $kls2[1];?></td>
					
					<td><?php 
					$jumlahL = $kls1[0]+$kls2[0];
					echo $jumlahL;
					?></td>
					<td><?php 
					$jumlahL = $kls1[1]+$kls2[1];
					echo $jumlahL;
					?></td>
					<td><?php echo $jumlah; ?></td>
						
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
