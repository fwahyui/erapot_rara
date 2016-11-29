<?php
$jenjang = $_GET['jenjang'];
$ids=$_GET['id'];
$ids1=$_GET['id1'];
$ids2=$_GET['id2'];
$ff=mysql_query("Delete from jumlahsiswa Where IdSekolah='".$ids."' and bulan='$ids1' and tahun ='$ids2'");
if($ff)
{
	echo "<script>window.location='index.php?page=siswa&jenjang=$jenjang'</script>";
}
?>