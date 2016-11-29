<?php
include("koneksi.php");
$sql = "INSERT INTO tbluser
            (Username,
             pass,
             IDSekolah,
             HakAkses)
		VALUES ('$_POST[Username]',
        '$_POST[pass]',
        '$_POST[IDSekolah]',
        '$_POST[HakAkses]')";
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=user'</script>";
}
?>