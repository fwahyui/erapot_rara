<?php
include("koneksi.php");
$ids=$_GET['id'];
$sql = "update tbbulanaktif set status ='Tidak Aktif'";
$ff=mysql_query($sql,$conn);
$sql = "update tbbulanaktif set status ='Aktif' Where idbulan='$ids'";
$ff=mysql_query($sql,$conn);
if($ff)
{
	echo "<script>window.location='index.php?page=bulantahun'</script>";
}
?>