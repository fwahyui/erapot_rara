<?php
include("koneksi.php");
$sql = "UPDATE tbluser
SET pass = '$_POST[pass]',
IDSekolah = '$_POST[IDSekolah]',
HakAkses = '$_POST[HakAkses]'
WHERE Username = '$_GET[id]'";
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=user'</script>";
}
?>