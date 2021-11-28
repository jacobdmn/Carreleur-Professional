<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location:index.html");
	}
	elseif(isset($_SESSION['email'])){
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
<div class="dija_login">
	<img src="../img/Control Panel.png" width="500" height="110" />
</div>
<div class="config">
	<table border="1" class="border_choose">
    <tr>
    	<td>
            <div class="dicon">
                <a href="home_admin.php" target="iframe_affiche">
                <img src="../img/admin/admin.png" height="35" width="35" valign="middle" />
                <span>Central Admin</span>
                </a>    
            </div>
		</td>
	</tr>
    <tr>
    	<td>
            <div class="dicon">
                <a href="../index.php" target="_blank" style="cursor:pointer;">
                    <span>
                        <dd style="
                        	background: url(../img/home_img.png) bottom;
                            width: 30px;
                            height: 35px;
                            float: left;
                            margin-right: 15px;
                        ">
                        </dd>
	                    Central Site
                    </span>
                </a>
            </div>
		</td>
	</tr>
    <tr>
    	<td>
            <div class="dicon">
            	<a href="../my_act.php" target="iframe_affiche">
                <img src="../img/entreprise.png" height="35" width="35" valign="middle" />
                <span>Mon Enterprise</span>
                </a>
            </div>
		</td>
	</tr>
    <tr>
    	<td>
            <div class="dicon">
				<a class='D' href="messages.php" target="iframe_affiche" style="float: left;">
					<div style="float:left;">
                        <img src="../img/commin/email.png" height="35" width="35" valign="-8px" />
                        <?php
                        /*************************/
                        require('connect_db.php');
                        /*************************/
                        $sql2= "SELECT * FROM messages where readable=0";//where read=0 hena tji num ta3 les messages li mmch m7sobin
                        $query2=mysqli_query($connect,$sql2);
                        $num = mysqli_num_rows($query2);
                        if($num >= 1){
                            echo "<span class='num_msg'>".$num."</span>";
                        }
                        ?>
                        <span>Les Messages</span>
					</div>
                </a>
            </div>
		</td>
	</tr>
    <tr>
    	<td>
            <div class="dicon">
                <a href="change_pass.php" target="iframe_affiche">
                <img src="../img/admin/change_pass.png" height="35" width="35" valign="middle" />
                <span>Changer Motpass</span>
                </a>
            </div>
		</td>
	</tr>
    <tr>
    	<td>
            <div class="dicon">
                <a href="../about.php" target="iframe_affiche">
                <img src="../img/my_actions.png" height="35" width="35" valign="middle" />
                <span>&Aacute; Propos</span>
                </a>
            </div>
		</td>
	</tr>
    <tr>
    	<td>
            <div class="dicon">
                <a href="logout.php" target="_top">
                <img src="../img/admin/Shutdown.png" height="35" width="35" valign="middle" />
                <span>Diconnect&eacute;</span>
                </a>
            </div>
		</td>
	</tr>
	</table>
    <div class="iframe">
    	<iframe class="iframe_affiche" name="iframe_affiche" width="100%" height="100%" src="home_admin.php">
        </iframe>
    </div>
</div>
<script>
$(document).ready(function(e) {
   $(".dicon a.D").click(function(){
		$("a.D span.num_msg").hide();
	})
})
</script>
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