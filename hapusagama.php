<?php
include("koneksi.php");
$ids=$_GET['id'];
$id1=$_GET['id2'];
$id2=$_GET['id3'];
$jenjang=$_GET['jenjang'];
$sql = "Delete from agama Where bulan='$ids' and tahun='$id1' and idsekolah=$id2";
$ff=mysql_query($sql,$conn);
if($ff)
{
	echo "<script>window.location='index.php?page=agama&jenjang=$jenjang'</script>";
}
?>