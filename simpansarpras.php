<?php
include("koneksi.php");
$sql = "INSERT into sarpras
VALUES ('$_POST[Jenjang]')";
		
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=sarpras'</script>";
}
?>