<?php
$jenjang=$_GET['jenjang'];   
include("koneksi.php");
$sql = "UPDATE guru
SET IDSekolah = '$_POST[IDSekolah]',
  Nama = '$_POST[Nama]',
  TempatLahir = '$_POST[TempatLahir]',
  TanggalLahir = '$_POST[TanggalLahir]',
  Golongan = '$_POST[Golongan]',
  JK = '$_POST[JK]',
  Ijazah = '$_POST[Ijazah]',
  Jabatan = '$_POST[Jabatan]',
  Status = '$_POST[Status]',
  TGLDiangkat = '$_POST[TGLDiangkat]',
  TGLMulai = '$_POST[TGLMulai]',
  TGLSK = '$_POST[TGLSK]',
  NOSK = '$_POST[NOSK]'
WHERE NIP = '$_POST[NIP]'";
		
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=guru&jenjang=$jenjang'</script>";
}
?>