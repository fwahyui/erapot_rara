<?php
include("koneksi.php");
$ids=$_GET['id'];
$sql = "Delete from tbbulanaktif Where idbulan='$ids'";
$ff=mysql_query($sql,$conn);
if($ff)
{
	echo "<script>window.location='index.php?page=bulantahun'</script>";
}
?>