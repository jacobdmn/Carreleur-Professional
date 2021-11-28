<?php
	require("head_top.php");
?>

<!---------------------------------------->

<div class="about_me">
	<?php
    if(isset($data)){
		echo $lang['about'];
	}
	else{
		echo "Error !";
	}
	?>
</div>

<!---------------------------------------->

<?php
	require("foot_bottom.php");
?>