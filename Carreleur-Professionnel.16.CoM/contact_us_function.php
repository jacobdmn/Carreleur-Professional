<?php
function contact($name,$thread){
	/*************************/
	$data='admin_veljko/connect_db.php';
	if(isset($data)){
		require($data);
	}
	else{
		die('Error In Include DATABASE!!');
	}
	/*************************/
	if($connect=mysqli_connect($localhost,$user_db,$pass_db,$db)){
		if(isset($_POST["submit"])){
			#------------------------------------#
			$name=filter_var(addslashes(strip_tags($_POST['name'],FILTER_VALIDATE_EMAIL)));
			
			$thread=addslashes(nl2br(strip_tags($_POST['message'])));
			
			$date=addslashes(date("d-M-Y - h:i:s -"));
			
			$email="veljkodlacic76@yahoo.fr";
			
			$title="Request to Attend For Carreling";
			
			$header="From Your Website 'www.Carreleur Professionnel.16mb.com'";
			
			$sql="INSERT INTO messages VALUES ('','$date','$name','$thread','0')";
			
			#$send=mail($email,$title,$thread,$header);
			
			$query=mysqli_query($connect,$sql);
			
			#------------------------------------#
			if(isset($name) && !empty($name)){
				if(isset($thread) && !empty($thread)){
					if(isset($query)){
						echo "<meta http-equiv=\"refresh\" content=\"0;URL=ok_sended.php\">";
						#echo $send;
					}
					else{
						echo "Error In Query !";
					}
				}
				else{
					echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
				}
			}
			else{
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
			}
		}
	}
	else{
		die("Error in DATABASE !");
	}
}
if(isset($_POST['name']) && isset($_POST['message'])){
	echo contact($_POST['name'],$_POST['message']);
}