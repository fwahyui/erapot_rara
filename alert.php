<li class="dropdown">
	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
		<span class="profile-ava">
			<img alt="" src="img/avatar1_small.jpg">
		</span>
		<span class="username">
		<?php 
		$hak= $_SESSION['UserName'];
		echo $hak; 
		?>
		</span>
		<b class="caret"></b>
	</a>
	<ul class="dropdown-menu extended logout">
		<div class="log-arrow-up"></div>
	
		<li>
			<a href="log.php"><i class="icon_key_alt"></i> Log Out</a>
		</li>

	</ul>
</li>