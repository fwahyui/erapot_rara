<?php
$ids=$_GET['id'];
$ff=mysql_query("Delete from sekolah Where sha1(IdSekolah)='".$ids."'");
if($ff)
{
	echo "<script>window.location='index.php?page=sekolah'</script>";
}
?>