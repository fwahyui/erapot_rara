<?php
$ids=$_GET['id'];
$ff=mysql_query("Delete from tbluser Where sha1(Username)='".$ids."'");
if($ff)
{
	echo "<script>window.location='index.php?page=user'</script>";
}
?>