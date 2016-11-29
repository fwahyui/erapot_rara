<?php
$ids=$_GET['id'];
$ff=mysql_query("Delete from jenjang Where sha1(jenjang)='".$ids."'");
if($ff)
{
	echo "<script>window.location='index.php?page=jenjang'</script>";
}
?>