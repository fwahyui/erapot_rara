<?php
include("koneksi.php");
$sql = "INSERT INTO sekolah
		(Jenjang,
		Nama,
		NSS,
		Alamat,
		NoTelp,
		Desa,
		Kec,
		Kab,
		Prov,
		NLang)
		VALUES ('$_POST[Jenjang]',
		'$_POST[Nama]',
		'$_POST[NSS]',
		'$_POST[Alamat]',
		'$_POST[NoTelp]',
		'$_POST[Desa]',
		'$_POST[Kec]',
		'$_POST[Kab]',
		'$_POST[Prov]',
		'$_POST[NLang]')";
		
$rs=mysql_query($sql);
if($rs)
{
	echo "<script>window.location='index.php?page=sekolah'</script>";
}
?>