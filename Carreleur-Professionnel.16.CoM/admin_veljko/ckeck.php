<?php
session_start();
function sql($validate_email,$validate_pass){
/*************************/
require('connect_db.php');
/*************************/
echo "<div align='center' style='background:#e5e5e5;color:#f00;'>";
	if($connect=mysqli_connect($localhost,$user_db,$pass_db,$db)){
		if(isset($_POST['submit'])){
			$sql="SELECT * FROM users";
			$query=mysqli_query($connect,$sql);
			while($row=mysqli_fetch_array($query)){
				if(((!empty($validate_email) && !empty($validate_pass)) && ($validate_email == $row['email'] || $validate_email == $row['username'] || $validate_email == $row['id']) && $validate_pass == $row['password'])){
					$_SESSION['email']="email";
					$_SESSION['password']="password";
					header("Location:home.php");
				}
				else{
					echo "<meta http-equiv=\"refresh\" content=\"0;URL=error_in_login.php\">";
				}
			}
		}
	}
}

function check($val){
	htmlspecialchars(strip_tags(addslashes($val)));
}

$em = $_POST['admin_email'];
$ps = $_POST['admin_password'];
if(isset($em) && isset($ps)){
	echo sql($em,$ps);
}
else{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=error_in_login.php\">";
}
echo "</div>";
?>