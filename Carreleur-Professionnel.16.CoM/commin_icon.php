<link href="css/Style.css" rel="stylesheet" type="text/css" />
<link href="css/thickbox.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.png" />
<script src="js/jquery.1.10.2.min.js"></script>
<script src="js/amazingslider.js"></script>
<script src="js/initslider-1.js"></script>
<style>
table.demmane tr td a{
	text-align:center;
	font-size:16px
}
</style>
<table class="demmane">
<tr>
    <td align="center">
    <a href="https://www.facebook.com/#him_fb/" class="fb">
        <img src="img/commin/facebook.png" width="32" height="32" class="img_ico" />
        <img src="img/abs.png" width="50" height="50" class="img_abs" />
        <div id="block1" class="block" style="right: 120px;min-width: 245px;">
            <span>
            <?php
            if(isset($data)){
                echo $lang['fb_sent'];
            }
            else{
                echo "Error !";
            }
            ?>
            </span>
        </div>
    </a>
    </td>
    <td>
    <a href="contact_us.php?KeepThis=true&TB_iframe=true&height=575&width=600" class="phone thickbox">
        <img src="img/commin/phone.png" width="32" height="32" style="border-radius: 15px;" class="img_ico" />
        <img src="img/abs.png" width="50" height="50" class="img_abs" />
        <div id="block2" class="block" style="min-width: 390px;">
            <span>
            <?php
            if(isset($data)){
                echo $lang['phone_sent'];
            }
            else{
                echo "Error !";
            }
            ?>
            </span>
        </div>
    </a>
    </td>
    <td>
    <span class="skype">
        <img src="img/commin/skype.png" width="36" height="36" class="img_ico" style="top: -2px;left: 2px;" />
        <img src="img/abs.png" width="50" height="50" class="img_abs" />
        <div  class="block" id="block3">
            <span>
            <?php
            if(isset($data)){
                echo $lang['skp_sent'];
            }
            else{
                echo "Error !";
            }
            ?>
            </span>
        </div>
    </span>
    </td>
    <td>
    <span class="email">
        <img src="img/commin/email.png" width="32" height="32" class="img_ico" style="top: 2px;left: 2px;" />
        <img src="img/abs.png" width="50" height="50" class="img_abs" />
        <div  class="block" id="block4" style="min-width: 450px;;">
            <span>
            <?php
            if(isset($data)){
                echo $lang['email_sent'];
            }
            else{
                echo "Error !";
            }
            ?>
            </span>
        </div>
    </span>
    </td>
</tr>
</table>
<script>
$(document).ready(function() {
    $(".fb").hover(function(e){
	$("#block1").fadeToggle();
	})
	$(".phone").hover(function(e){
	$("#block2").fadeToggle();
	})
	$(".skype").hover(function(e){
	$("#block3").fadeToggle();
	})
	$(".email").hover(function(e){
	$("#block4").fadeToggle();
	})
})
</script>