<?php
	require("head_top.php");
?>
<table width="100%">
    <tr>
        <td>
            <div class="about">
                <?php
                if(isset($data)){
                    echo $lang['my_act_sent'];
                }
                else{
                    echo "Error !";
                }
                ?>
            </div>
        </td>
    </tr>
</table>
<div align="center" style="padding-top:20px; padding-bottom:40px;background: #337;width:98%;border-radius: 30px;margin-left: auto; margin-bottom:10px; margin-right: auto; margin-top:10px;">
    <table width="80%">
        <tr>
            <td align="center">
                <div class="slide_action" id="amazingslider-wrapper-1">
                    <div id="amazingslider-1">
                        <ul class="amazingslider-slides" style="max-width: 37%;">
                            <li>
                                <img src="img/img1.jpg" alt="1" />
                            </li>
                            <li>
                                <img src="img/img2.jpg" alt="2" />
                            </li>
                            <li>
                                <img src="img/img3.jpg" alt="3" />
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>