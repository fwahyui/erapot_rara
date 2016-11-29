<?php
$ids=$_GET['id'];
$bulan=$_GET['b'];
$tahun=$_GET['t'];
$jenjang = $_GET['j'];
$ff=mysql_query("Delete from presensi Where nip='$ids' and bulan='$bulan' and tahun='$tahun'");
if($ff)
{
	echo "<script>window.location='index.php?page=presensi&jenjang=$jenjang'</script>";
}
?>