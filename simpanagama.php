<?php
$jenjang=$_GET['jenjang'];   
$tahun =date('Y');
include("koneksi.php");
$sql = "INSERT INTO dbuptblicin.agama
            (IDSekolah,
             Bulan,
             Tahun,
             Agama,
             L,
             P)
VALUES ('$_POST[IDSekolah]',
        '$_POST[Bulan]',
        '$tahun',
        '$_POST[Agama]',
        $_POST[L],
        $_POST[P])";
		
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=agama&jenjang=$jenjang'</script>";
}
?>