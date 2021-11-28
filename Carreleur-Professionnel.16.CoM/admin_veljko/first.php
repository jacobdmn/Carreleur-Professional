<?php
	session_start();
	if(isset($_SESSION['email'])){
		header("Location:home.php");
	}
	else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<link href="../css/thickbox.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../favicon.png" />
<script src="../js/jquery.1.10.2.min.js"></script>
<script src="../js/amazingslider.js"></script>
<script src="../js/initslider-1.js"></script>
<script src="../js/thickbox.js"></script>
</head>

<body>
    <div align="center" style="margin-bottom:40px;">
    <div style="margin-top: 80px;width: 570px;">
        <div class="login_to_panel">
			<img src="../img/Control Panel.png" width="500" height="110" />
        </div>
    </div>
    <div style="width:700px;">
        <form action="ckeck.php" method="post">
			<p>
        	    <input class="email" type="text" name="admin_email" placeholder="Admin email" autocomplete="off" style="border:1px solid #009FFF;width:80%;" autofocus="autofocus" required="required">
            </p>
            <p>
				<input class="pass" type="password" name="admin_password" placeholder="Admin password" autocomplete="off" style="width:70%;border:1px solid #009FFF;" required="required">
            </p>
            <p>
				<input type="submit" class="submit_gtop" name="submit" value="Log In" style="width:35%;">
            </p>
        </form>
    </div>
</div>
<div align="center">
	<?php
		include('footer.php');
	?>
</div>

</body>
</html>
<?php
}
?>