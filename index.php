<?php
session_start();
if (isset($_SESSION['hak']))
{
	$TahunAktif = date('Y');
	$bulan=date('m');
	if ($bulan==1)
	{$BulanAktif="Januari";}
	else if ($bulan==2)
	{$BulanAktif="Februari";} 
	else if ($bulan==3)
	{$BulanAktif="Maret";} 
	else if ($bulan==4)
	{$BulanAktif="April";} 
	else if ($bulan==5)
	{$BulanAktif="Mei";} 
	else if ($bulan==6)
	{$BulanAktif="Juni";} 
	else if ($bulan==7)
	{$BulanAktif="Juli";} 
	else if ($bulan==8)
	{$BulanAktif="Agustus";} 
	else if ($bulan==9)
	{$BulanAktif="September";} 
	else if ($bulan==10)
	{$BulanAktif="Oktober";} 
	else if ($bulan==11)
	{$BulanAktif="November";} 
	else if ($bulan==12)
	{$BulanAktif="Desember";} 
}
else
{
	echo "<script>window.location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
	<?php include "head.php";?>
	<?php include "js.php"?>  
  <body onunload="GUnload()">
  <section id="container" class="">
	<header class="header dark-bg">
		<div class="toggle-nav">
			<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
		</div>
		<a href="index.php" class="logo">Aplikasi <span class="lite">Lapor Bulan Online UPTD LICIN</span> </a>
		<div class="top-nav notification-row">                
			<ul class="nav pull-right top-menu"> <?php include "alert.php";?></ul>
		</div>
	</header>      
    <?php include "menu.php"; ?>
	<section id="main-content">
		<section class="wrapper">            
			<?php
				$v_cat = (isset($_REQUEST['cat'])&& $_REQUEST['cat'] !=NULL)?$_REQUEST['cat']:'';
				$v_page = (isset($_REQUEST['page'])&& $_REQUEST['page'] !=NULL)?$_REQUEST['page']:'';
				if(file_exists($v_page.".php"))
				{
					include($v_page.".php");
				}
				else
				{
					include("home.php");
				}
			?>
		</section>
	</section>
  </section>
  
  </body>
</html>