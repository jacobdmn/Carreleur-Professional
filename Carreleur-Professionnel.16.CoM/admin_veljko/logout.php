<?php
	session_start();
	if(isset($_SESSION['email'])){
		session_destroy();
		header("Location:first.php");
	}
	require('connect_db.php');
	mysqli_close($connect);
?>