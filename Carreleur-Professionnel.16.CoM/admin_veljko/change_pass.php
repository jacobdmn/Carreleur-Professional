<link href="Style.css" rel="stylesheet" type="text/css" />
<center>
    <div style="font-size: 30px;color: #000;text-align:center; padding-top:40px;font-weight: bold;">
        Binevenue a Change Motpass d'administrateur
    </div>
    <form class="change_pass" action="refresh_pass.php" method="post">
        <input type="password" name="password" placeholder="Nouveau Motpass" required="required" autofocus="autofocus" autocomplete="off" min="8" />
        <br />
        <input type="password" name="r_password" placeholder="R-enter Motpass" required="required" autocomplete="off" min="8" />
        <br />
        <input type="submit" name="submit" value="Refresh" id="Refresh_pass" />
    </form>
</center>