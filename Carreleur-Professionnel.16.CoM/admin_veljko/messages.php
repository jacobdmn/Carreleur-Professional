<?php
session_start();
if(!isset($_SESSION['email'])){
	header("Location:index.php");
}
elseif(isset($_SESSION['email'])){
	require('connect_db.php');
	if($connect=mysqli_connect($localhost,$user_db,$pass_db,$db)){
		$sql_new="SELECT * FROM messages WHERE readable=0 ORDER BY id DESC";
		$sql_fat="SELECT * FROM messages WHERE readable=1 ORDER BY id DESC";
		$query=mysqli_query($connect,$sql_new);
		$query_fat=mysqli_query($connect,$sql_fat);
		$num=mysqli_num_rows($query_fat);
		$num_new = mysqli_num_rows($query);
		$sql_up="UPDATE messages SET readable=1";
		mysqli_query($connect,$sql_up) or die('You have Error In Updating The Message To (is_Readable)');
?>
<link href="Style.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.1.10.2.min.js"></script>
<script src="../js/thickbox.js"></script>
<div align="center" style="margin-bottom:10px; margin-top:10px;">
<div style="font-family: fantasy;font-size: 40px;color: #000; text-align:center;"> Les Messages Des Clients </div>
<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="margin-bottom: -10px;background: coral;width:80%;border-radius: 15px 15px;">
        <label style="cursor:pointer;">
            <input type="checkbox" checked="checked" disabled="disabled" style="width:3%; height:5%;vertical-align: sub;" />
            Check All
        </label>
        <button type="submit" name="delete_all" class="suppr" id="suppr">
            <img src="../img/admin/delete.png" height="34" width="34" style="vertical-align: -11px;" />
            Supprim&eacute; Tout Les Messages
        </button>
    </form>
</div>
<table class="table" style="border:3px solid #03C; background: rgba(239, 239, 239, 0.8);width: 97%;border-radius: 10px;font-family: fantasy;font-weight: 100;" cellpadding="5" cellspacing="5" border="5">
<tr style="font-family: monospace;font-size: 17px;">
    <th width="10%">
        #
    </th>
    <th width="26%">
        Date D'Envoyer
    </th>
    <th width="30%">
        E-mail
    </th>
    <th>
        Le Message
    </th>
</tr>
<?php
if($num_new>0){
	
	while($row = mysqli_fetch_array($query)){
?>
<tr class="ss">
    <td align="center">
        <img src="../img/admin/new.gif" style="margin-left: -28px;margin-top: -44px;position: absolute;width: 56px;" />
		<?php echo $row['id']; ?>
    </td>
    <td align="center">
        <?php echo $row['date']; ?>
    </td>
    <td>
        <?php echo $row['name']; ?>
    </td>
    <td class="msg" style="overflow:auto;">
        <div class="the_msg">
        	<?php
			echo "<div style='color:#3EA03E;margin: 10px;margin-top: 0;'> He Said : -------------</div>
			<div style='border: #f00 solid 1px;padding: 5px;'> ".$row['thread']."</div>
			<div style='color:#3EA03E;margin: 5px;' align='center'>-------- Finish --------</div>";
			?>
		</div>
    </td>
</tr>
<?php
	}
}
else{
	?>
	<tr>
		<td colspan="4" style="
			text-align: center;
            border:none;
	        border-bottom: #666 solid 1px;
			color: #f00;
			font-weight: bold;
			font-size: 20px;
            font-family: monospace;
		">
			Pas Des Nouveau Messages!
		</td>
	</tr>
	<?php
}
?>
<style>
.affiche{
	text-decoration:none;
	color:#09F;
	font-size: 15px;
	font-weight: bold;
	font-family: arial;
}
.affiche:hover{
	text-decoration:underline;
}
</style>

<tr>
	<td colspan="4" style="border:none;padding-bottom: 0;">
    	<div style="text-align:center;">
        	<a class="affiche" href="#">Afficher Le Plus Ancien....</a>
        </div>
    </td>
</tr>

<!------------------------------------------>

<?php
if($num>0){
?>
<tr class="ancien" style="display:none">
	<td colspan="4" style="border: none;padding: 0;">
    	<hr width="30%" noshade="noshade" color="#666666" />
    </td>
</tr>
<?php
	while($roz = mysqli_fetch_array($query_fat)){

?>
<tr class="ancien" style="display:none">
    <td align="center">
        <?php echo $roz['id']; ?>
    </td>
    <td align="center">
        <?php echo $roz['date']; ?>
    </td>
    <td>
        <?php echo $roz['name']; ?>
    </td>
    <td class="msg" style="overflow:auto;">
        <div class="the_msg">
        	<?php
			echo "<div style='color:#3EA03E;margin: 10px;margin-top: 0;'> He Said : -------------</div>
			<div style='border: #f00 solid 1px;padding: 5px;'> ".$roz['thread']."</div>
			<div style='color:#3EA03E;margin: 5px;' align='center'>-------- Finish --------</div>";
			?>
		</div>
    </td>
</tr>
<?php
	}
}
else{
?>
<tr class="ancien" style="display:none">
    <td colspan="4" style="
    	border:none;
        border-top: #666 solid 1px;
        text-align: center;
        color: #28B667;
        font-weight: bold;
        font-family: monospace;
        font-size: 20px;
    ">
		Pas Des Messages!
    </td>
</tr>
<?php
}
?>
<!--------------------------------------------->

<?php
	if(isset($_POST['delete_all'])){
		$sql2="DELETE FROM messages WHERE readable=1";
		$query2=mysqli_query($connect,$sql2);
		if($query2){
			if($num>0)
			{
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=refresh.php\">";
			}
			else
			{
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=refresh_no.php\">";
			}
		}
		else{
			echo "Error !";
		}			
	}
}
?>
	</table>
</div>
</body>
</html>
<?php
	}
?>

<script>
$(document).ready(function(e) {
	$("a.affiche").click(function(){
		$("tr.ancien").slideToggle("fast");		
	});
	
	$(".afch_msg").click(function(){
		$(".the_msg").fadeToggle();
	})
		
	$("#suppr").click(function(){
		$(this).after(function(){
			alert('The Messages is Removed!');
		});
	});
});

</script>