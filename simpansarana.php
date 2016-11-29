<?php
$jenjang=$_GET['jenjang'];   
$tahun =date('Y');
include("koneksi.php");
$sql = "INSERT INTO sarana
            (IDSekolah,
             Bulan,
             Tahun,
             sarpras,
             Jumlah)
VALUES ($_POST[IDSekolah],
        '$_POST[Bulan]',
        '$tahun',
        '$_POST[sarpras]',
        $_POST[Jumlah])";
		
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=sarana&jenjang=$jenjang'</script>";
}
?>