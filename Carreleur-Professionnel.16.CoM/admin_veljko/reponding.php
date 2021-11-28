<?php

require('connect_db.php');
if($connect=mysqli_connect($localhost,$user_db,$pass_db,$db)){
	if(isset($_POST['submit'])){

		$sql_new="SELECT * FROM messages";
		$query_one = mysqli_query($connect,$sql_new);
		$num=mysqli_num_rows($query_one);
		$the_title_from_admin = $_POST['title'];
		$the_send = $_POST['the_msg'];
		$thread=$the_title_from_admin."<br>".$the_send;
		$title="Reponding From Veljko Dlacic";
		$header="From The Website 'www.Carreleur Professionnel.16mb.com'";

		while($rows = mysqli_fetch_array($query_one)){
			$send_email= mail($rows['name'],$title,$thread,$header);
			echo $rows['name'];
			
		}
		$send_email;
	}
?>
<center>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
        <input type="text" name="title" value="Dear" disabled="disabled" style="width:19%">
        <select name="emails" size="1">
			<option value="">ssssssss</option>
            <?php
            while($row= mysqli_fetch_array($query_one)){
					echo $row['name'];
			}
            ?>
        </select>
        </p>
        <p>
        <textarea name="the_msg" placeholder="Ecrite a Bien R&eacute;ponde!..."></textarea>
        </p>
        <p>
        <input type="submit" name="submit" value="Envoyer La r&eacute;ponde">
        </p>
    </form>
</center>

<?php
}
?>

<style>
body{
	background: url(../img/backg.png) repeat aliceblue;
}
form{
	width: 67%;
	margin-top: 7%;
	padding: 50px;
	background: #CCC;
}
form input{
	height: 35px;
}
form textarea{
	height: 200x;
	resize:none;
}

form input[type="submit"]{
	font-size: large;
	height: 60px;
	cursor: pointer;
}
form input,form textarea {
	border-radius: 3px;
	border: #e5e5e5 solid 2px;
	padding: 20px;
	font-size: larger;
	width: 91%;
}
</style>