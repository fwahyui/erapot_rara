<?php
if ($_SESSION['Idsekolah']==0)
{
	$sql = "Select Count(Status) as PNS from guru where status='PNS'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$pns = $s[0];
	}
	$sql = "Select Count(Status) as PNS from guru where status='CPNS'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$cpns = $s[0];
	}
	$sql = "Select Count(Status) as PNS from guru where status='GTT'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gtt = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Kepala Sekolah'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$ks = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Kelas'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gk = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Penjas'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gp = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Agama'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$ga = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Mapel'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gm = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Penjaga Sekolah'";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$p = $s[0];
	}
}
else
{
	$sql = "Select Count(Status) as PNS from guru where status='PNS' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$pns = $s[0];
	}
	$sql = "Select Count(Status) as PNS from guru where status='CPNS' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$cpns = $s[0];
	}
	$sql = "Select Count(Status) as PNS from guru where status='GTT' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gtt = $s[0];
	}	
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Kepala Sekolah' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$ks = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Kelas' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gk = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Penjas' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gp = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Agama' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$ga = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Guru Mapel' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$gm = $s[0];
	}
	$sql = "Select Count(Jabatan) as PNS from guru where Jabatan='Penjaga Sekolah' and idsekolah=$_SESSION[Idsekolah]";
	$rw=mysql_query($sql,$conn);
	while($s=mysql_fetch_array($rw))
	{
		$p = $s[0];
	}
}
?>