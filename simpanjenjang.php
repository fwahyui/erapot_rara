<?php
include("koneksi.php");
$sql = "INSERT into jenjang
            (Jenjang)
VALUES ('$_POST[Jenjang]')";
		
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=jenjang'</script>";
}
?>