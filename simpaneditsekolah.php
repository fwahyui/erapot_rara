<?php
include("koneksi.php");
$sql = "UPDATE sekolah
		SET Jenjang = '$_POST[Jenjang]',
		Nama = '$_POST[Nama]',
		NSS = '$_POST[NSS]',
		Alamat = '$_POST[Alamat]',
		NoTelp = '$_POST[NoTelp]',
		Desa = '$_POST[Desa]',
		Kec = '$_POST[Kec]',
		Kab = '$_POST[Kab]',
		Prov = '$_POST[Prov]',
		NLang = '$_POST[NLang]'
		WHERE IdSekolah = $_GET[id]";
$rs=mysql_query($sql) or die(mysql_error());

if($rs)
{
	echo "<script>window.location='index.php?page=sekolah'</script>";
}
?>