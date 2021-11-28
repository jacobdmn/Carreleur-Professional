<div class="small_logo">
    <a href="index.php">
        <img src="img/CarreleurProfessionnel.png" width="400px" height="150" />
    </a>
    <br />
    <div style="position:relative;top: 5px;left:-2%;">
    <?php
    if(isset($data)){
        echo $lang['site'];
    }
    else{
        echo "Error !";
    }
    ?>
    </div>
</div>
<div class="inform">
    <div class="call_me">
        <img src="img/carrelage.png" height="100" width="300"/>
        <div style="position:relative; top:30px;right: -25px;">
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
    </div>
</div>
<div class="navbar">
    <div class="menus">
        <ul>
            <a href="index.php">
                <li class="homeli">
                    <span>Central</span>
                </li>
            </a>
            
            <a class="thickbox" href="my_act.php?KeepThis=true&TB_iframe=true&height=620&width=990">
                <li>
                    <img src="img/entreprise.png" height="25" width="25" alt="" style="padding-right:8px;" />
                    <span>Mon Entreprise</span>
                </li>
            </a>
            
            <a class="thickbox" href="contact_us.php?KeepThis=true&TB_iframe=true&height=570&width=600">
                <li>
                    <img src="img/call_me.png" height="25" width="25" alt="" style="padding-right:8px;" />
                    <span>Contact Me</span>
                </li>
            </a>
            <a class="thickbox" href="about.php?KeepThis=true&TB_iframe=true&height=560&width=600">
                <li style="border-right: #333 solid 1px;">
                    <img src="img/my_actions.png" height="25" width="25" alt="" style="padding-right:8px;" />
                    <span>&Aacute; Propos</span>
                </li>
            </a>
        </ul>
    </div>
    <a class="thickbox" href="about.php?KeepThis=true&TB_iframe=true&height=560&width=600">
        <div style="float:right !important; padding:13px; padding-right:30px;">
            <img src="img/veljko.png" height="25" width="240" />
        </div>
	</a>
</div>