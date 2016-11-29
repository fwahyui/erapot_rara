<?php
session_start();
include("koneksi.php");
	if(isset($_GET['login_attempt']))
	{
		$sql="Select * from tbluser where Username='$_POST[Username]' and pass='$_POST[password]'";
		$rs=mysql_query($sql,$conn);
		$rw=mysql_fetch_array($rs);
		$rc=mysql_num_rows($rs);
		if($rc==1)
		{
			$_SESSION['hak']=$rw[3];
			$_SESSION['UserName']=$rw[0];
			$_SESSION['Idsekolah']=$rw[2];
			
				if($rw['IDSekolah']==0)
				{
					?>
					<script>
					alert("Anda Login Sebagai Admin/Operator UPTD");
					document.location.href="index.php";
					</script>
					<?php
				}
				else if ($rw['IDSekolah']>=1)
				{
				?>
					<script>
					alert("Anda Login Sebagai Operator Sekolah");
					document.location.href="index.php";
					</script>
					<?php
				}
		}
				else
				{
				?>
				<script>
				alert("Username Atau Password Salah!!!");
				document.location.href="index.php";
				</script>
				<?php
			}
			}
		?>