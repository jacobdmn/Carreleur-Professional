<?php
$localhost="localhost";
$user_db="root";
$pass_db="";
$db="veljko";
if(mysqli_connect($localhost,$user_db,$pass_db,$db)){
	$connect = mysqli_connect($localhost,$user_db,$pass_db,$db);
}
else{
	die('Error In Include DATABASE !!');
}
?>