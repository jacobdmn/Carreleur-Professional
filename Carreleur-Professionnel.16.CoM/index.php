<?php
	require("head_top.php");
?>

<div class="all">
<!---------------------- Header ----------------------------->
	<div class="header">
		<?php
            include("header.php");
        ?>
    </div>
    
    <div>
        <img src="img/foot.jpg" class="img_showbox" />
    </div>
    
<!---------------------- End Header ----------------------------->

<!----------------- Content -------------------------------->
    <div class="content">	
        <?php
            include("home.php");
        ?>
    </div>

<!----------------- End Content -------------------------------->

<!----------------- Footer -------------------------------->
    <div class="footer">
        <?php
            include("footer.php");
        ?>
    </div>

<!----------------- End Footer -------------------------------->

</div>

<?php
	include("foot_bottom.php");
?>