<?php
$jenjang=$_GET['jenjang'];   
include("koneksi.php");
$sql = "INSERT INTO guru
            (IDSekolah,
             NIP,
             Nama,
             TempatLahir,
             TanggalLahir,
             Golongan,
             JK,
             Ijazah,
             Jabatan,
             Status,
             TGLDiangkat,
             TGLMulai,
             TGLSK,
             NOSK)
VALUES ('$_POST[IDSekolah]',
        '$_POST[NIP]',
        '$_POST[Nama]',
        '$_POST[TempatLahir]',
        '$_POST[TanggalLahir]',
        '$_POST[Golongan]',
        '$_POST[JK]',
        '$_POST[Ijazah]',
        '$_POST[Jabatan]',
        '$_POST[Status]',
        '$_POST[TGLDiangkat]',
        '$_POST[TGLMulai]',
        '$_POST[TGLSK]',
        '$_POST[NOSK]')";
		
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=guru&jenjang=$jenjang'</script>";
}
?>