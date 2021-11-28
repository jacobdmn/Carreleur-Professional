<style>
body{
	color:#333;
}
</style>
<div class="logo">
    <img src="img/home_admin_home.png" width="520px" height="150" />
    <img src="img/Enreprise.png" height="280" width="360" style="float:right; margin-bottom: -90px;" />
</div>
<!--------------------------------------------------------------------------->
<div class="first">
    <table>
    <tr valign="middle" height="330px">
        <td style="width:40%; max-width:40%;">
            <img src="img/img1.jpg" height="390" width="90%" />
        </td>
        <td>
			<?php
            if(isset($data)){
                echo $lang['first1'];
            }
            else{
                echo "Error !";
            }
            ?>
        </td>
    </tr>
    </table>
    <!------------------------------------------------------>
	<table>
    <tr valign="middle" height="330px">
        <td>
			<?php
            if(isset($data)){
                echo $lang['first2'];
            }
            else{
                echo "Error !";
            }
            ?>
        </td>
        <td style="width:40%; max-width:40%;">
            <img src="img/img2.jpg" height=" 390" width="90%" />
        </td>
    </tr>
    </table>
    <!------------------------------------------------------->
	<table>
    <tr valign="middle" height="330px">
        <td style="width:40%; max-width:40%;">
            <img src="img/img3.jpg" height=" 390" width="90%" />
        </td>
        <td>
			<?php
            if(isset($data)){
                echo $lang['first3'];
            }
            else{
                echo "Error !";
            }
            ?>
        </td>
    </tr>
    </table>
</div>
<!--------------------------------------------------------------------------->