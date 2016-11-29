<?php
$ids=$_GET['id'];
$ff=mysql_query("Delete from sarpras Where sha1(sarpras)='".$ids."'");
if($ff)
{
	echo "<script>window.location='index.php?page=sarpras'</script>";
}
?>