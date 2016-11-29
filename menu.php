<aside>
	<div id="sidebar"  class="nav-collapse ">
		<ul class="sidebar-menu">                
			<li class="active">
				<a class="" href="index.php">
				  <i class="icon_house_alt"></i>
				  <span>Dashboard</span>
				</a>
			</li>
			
			<?php
				include("koneksi.php");
				$sd = $_SESSION['Idsekolah'];
				if ($_SESSION['hak']=="admin")
				{
					$sql = "select * from jenjang";
					?>
					<li class="sub-menu">
						<a href="javascript:;" class="">
							<i class="icon_document_alt"></i>
							<span>Master</span>
							<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
							<li class="sub-menu"> <a class="" href="?page=jenjang">Jenjang Sekolah</a></li>                          
							<li><a class="" href="?page=user">User</a></li>
							<li class="sub-menu"> <a class="" href="?page=sekolah">Data Sekolah</a></li>                          
							<li class="sub-menu"> <a class="" href="?page=sarpras">Sarpras</a></li>
							
						</ul>
					</li>
					<?php
				}
				else
				{
					$sql = "select jenjang from sekolah where idsekolah=$sd";
					$rws=mysql_query($sql,$conn);
					$ss=mysql_fetch_array($rws);
					$sql = "select * from jenjang where jenjang ='$ss[0]'";
				}
				$rw=mysql_query($sql,$conn);
				while($s=mysql_fetch_array($rw))
				{
			?>
				<li class="sub-menu">
					<a href="javascript:;" class="">
						<i class="icon_document_alt"></i>
						<span><?php echo $s['Jenjang'];?></span>
						<span class="menu-arrow arrow_carrot-right"></span>
					</a>
					<ul class="sub">
						<li class="sub-menu"> <a class="" href="?page=guru&jenjang=<?php echo $s['Jenjang'];?>">Guru & Penjaga</a></li>   
						<li class="sub-menu"> <a class="" href="?page=presensi&jenjang=<?php echo $s['Jenjang'];?>">Presensi</a></li>
						<li class="sub-menu"> <a class="" href="?page=agama&jenjang=<?php echo $s['Jenjang'];?>">Agama</a></li>
						<li class="sub-menu"> <a class="" href="?page=sarana&jenjang=<?php echo $s['Jenjang'];?>">SARPRAS</a></li>
						<li class="sub-menu"> <a class="" href="?page=siswa&jenjang=<?php echo $s['Jenjang'];?>">Jumlah Siswa</a></li>
						<li class="sub-menu"> <a class="" href="?page=laporbulan&jenjang=<?php echo $s['Jenjang'];?>">Lapor Bulan</a></li>
					</ul>
				</li>
			<?php	
				}	
			?>
		</ul>
	</div>
</aside>