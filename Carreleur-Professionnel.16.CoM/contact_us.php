<?php
	require("head_top.php");
?>
<!---------------------------------------->
<div class="other">
    <div align="left" style="padding: 20px; padding-bottom:0;padding-top: 0">
        <div align="center" style="padding-bottom:10px;">
	        <h3 style="border-bottom:#999 solid 1px;width: 72%;padding-bottom: 11px;">Envoyer Me Un Message</h3>
            <br />
            <style>
			#block4{
				margin-right: -37px;
			}
			#block1{
				margin-right: 7pc;
			}
			</style>
            <div style=" margin-bottom:20px; position:relative;right: -22px;">
				<?php
                    $include=include('commin_icon.php');
                    if(isset($include)){
                        $include;
                    }
                    else{
                        die( "Error In Include The Slider !");
                    }
                ?>
			</div>
            <br />
            <?php
            if(isset($data)){
                echo $lang['contact_us'];
            }
            else{
                echo "Error !";
            }
            ?>
        </div>
		<form action="contact_us_function.php" method="post">
			<div style="width:100%;font-family: monospace;font-size: x-large;color: #009ED9;font-style: italic; background:#CECECE;padding: 10px;border-radius: 10px; padding-bottom:20px;">

				<div style="margin-bottom: 10px;padding-left: 10px;">Email</div>
                <p>
	                <input type="email" name="name" placeholder="Ton Email ici" autofocus="autofocus" autocomplete="off" required="required" />
                </p>
                <br />
                <div style="margin-bottom: 10px;padding-left: 10px;">Message</div>
                <p>
    	            <textarea cols="20" rows="6" placeholder="Écrite Ton Message ..." name="message" autocomplete="off" required="required"></textarea>
                </p>
        	</div>
        	<p align="center" style="margin-top:10px;">
        	    <input type="submit" name="submit" class="submit" value="Envoyer" style="border: #009ED9 1px solid;background-color: #009ED9;" />
        	</p>
		</form>
    </div>
</div>
<?php
	require("foot_bottom.php");
?>