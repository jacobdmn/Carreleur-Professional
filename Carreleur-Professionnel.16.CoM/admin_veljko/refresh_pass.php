<link href="Style.css" rel="stylesheet" type="text/css" />
<?php
session_start();
echo "<center style='position: relative;  top: 46%;'><span style='color:#f00;font-size: xx-large;'>";
function refresh_pass($pass1,$pass2){
	require('connect_db.php');
	if($connect=mysqli_connect($localhost,$user_db,$pass_db,$db)){
		if(isset($_POST['submit'])){
			$sql="UPDATE users SET password=$pass1 WHERE email='veljkodlacic76@yahoo.fr'";
			$query=mysqli_query($connect,$sql);
			echo "<div style='padding:20px;'>";
			if($pass1 == $pass2){
				if(!empty($pass1)){
					if($query){
						echo "<img src='../img/admin/sss.png' valign='middle' /> Ok, Il y-a Changer ";
					}
					else{
						echo "<span style='color:#f00;'>Can Not Find The Query!</span>";
					}
				}
			}
			else{
				echo "<img src='../img/admin/delete.png' valign='middle' />Le Motpass Est D&eacute;ja mdayra Ou le Motpass Est Ne Identical Pas !";
			}
			echo "</div>";
		}
	}
}
echo refresh_pass($_POST['password'],$_POST['r_password'])."</span></center>";