<?php
include("koneksi.php");
$ids=$_GET['id'];
$jenjang=$_GET['jenjang'];
$sql = "Delete from guru Where sha1(nip)='$ids'";
$ff=mysql_query($sql,$conn);
if($ff)
{
	echo "<script>window.location='index.php?page=guru&jenjang=$jenjang'</script>";
}
?>