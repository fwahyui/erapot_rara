<?php
$jenjang=$_GET['jenjang'];   
$tahun =date('Y');
include("koneksi.php");
$sql = "INSERT INTO presensi
            (NIP,
             Bulan,
             Tahun,
             S,
             I,
             A,
             Ch,
             Cd,
             Cs)
VALUES ('$_POST[NIP]',
        '$_POST[Bulan]',
        '$tahun',
        '$_POST[S]',
        '$_POST[I]',
        '$_POST[A]',
        '$_POST[Ch]',
        '$_POST[Cd]',
        '$_POST[Cs]')";
		
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=presensi&jenjang=$jenjang'</script>";
}
?>