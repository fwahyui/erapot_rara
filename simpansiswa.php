<?php
$jenjang=$_GET['jenjang'];   
$tahun =date('Y');
include("koneksi.php");
$sql = "INSERT INTO jumlahsiswa
            (Jenjang,
             IDSekolah,
             Bulan,
             Tahun,
             HariEfektif,
             Kelas,
             L,
             P,
             Sakit,Ijin,TanpaKet)
VALUES ('$jenjang',
        $_POST[IDSekolah],
        '$_POST[Bulan]',
        '$tahun',
        $_POST[HariEfektif],
        '$_POST[Kelas]',
        $_POST[L],
        $_POST[P],
        $_POST[sakit],$_POST[ijin],$_POST[alfa])";	
$rs=mysql_query($sql) or die(mysql_error());

if($rs)
{
	echo "<script>window.location='index.php?page=siswa&jenjang=$jenjang'</script>";
}
?>