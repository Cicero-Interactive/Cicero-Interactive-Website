<?php 
	if (isset($_GET['logout'])) {
		session_destroy();
        session_unset();
        exit('<script>window.location.replace("./");</script>');
	} ?>
<div class="nav">
    <div style="max-width: 2000px; margin: auto">
        <ul class="ShowOnBigScreen">
            <li><a href="./"><img src="images/CILogo.png"></a></li>
            <li><a <?php if ($active == "about") {echo 'class="active"';} ?> href="about.php">About</a></li>
            <li><a <?php if ($active == "tools") {echo 'class="active"';} ?> href="tools.php">Tools</a></li>
            <li class="dropdown">
                <a class="dropbtn <?php if ($active == "lwcor" or $active == "fi") {echo 'active';} ?>">Games ▾</a>
                <div class="dropdown-content">
                    <a href="lwcor.php">Latin Wars: Call of Rupert</a>
                    <a href="fi.php">French Invaders</a>
                </div>
            </li>
            <li><a <?php if ($active == "news") {echo 'class="active"';} ?> href="news.php">News</a></li>
            <li class="dropdown">
                <a class="dropbtn">Other Services ▾</a>
                <div class="dropdown-content">
                    <a href="https://lateinparadies.de.cool/" target="_blank">Lateinparadies</a>
                    <a href="">Pettri.de (Work in Progress)</a>
                </div>
            </li>
            <?php if (!isset($_SESSION["username"])) { ?>
                <li style="float:right"><a <?php if ($active == "register") {echo 'class="active"';} ?> href="register.php">Register</a></li>
                <li style="float:right"><a <?php if ($active == "login") {echo 'class="active"';} ?> href="login.php?redirect=./<?php echo $page ?>">Log In</a></li>
            <?php ;} else { ?>
                <li style="float:right"><a <?php if ($active == "register") {echo 'class="active"';} ?> href="?logout=1">Log Out</a></li>
                <li class="dropdown" style="float:right">
                    <a class="dropbtn <?php if ($active == "lwcor" or $active == "fi") {echo 'active';} ?>">My Account ▾</a>
                    <div class="dropdown-content">
                        <div style="padding: 10px; font-size: 13px; display: table; margin: 10px">
                            <div style="height: 50px; width: 50px; background-color: #bbb; border-radius: 50%; display: table-cell; font-size: 25px; color: #333; text-align: center; vertical-align: middle">
                                <?php echo strtoupper($_SESSION["username"][0]) ?>
                            </div>
                            <div style="padding-left: 7px; display: inline-block; vertical-align: middle; display: table-cell">
                                <?php echo $_SESSION["username"];?><br>
                                <span style="color: #666; font-size: 11px"><?php echo $_SESSION["email"]; ?></span>
                            </div>
                        </div>
                        <a href="account.php" style="text-align: center">Manage</a>
                    </div>
                </li>
            <?php ;} ?>
        </ul>
        <ul class="ShowOnSmallScreen">
            <li><a href="./"><img src="images/CILogo.png" style="height: 64px"></a></li>
            <li style="float:right"><a onclick="openNav()" style="font-size: 40px; padding: 7px 22px">&#9776;</a></li>
        </ul>
    </div>
</div>
<div class="sidepnl ShowOnSmallScreen" id="sidepnl">
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a <?php if ($active == "about") {echo 'class="active"';} ?> href="about.php">ABOUT</a>
    <a <?php if ($active == "tools") {echo 'class="active"';} ?> href="about.php">TOOLS</a>
    <span class="sidepnlCategory">GAMES</span>
    <div class="sidepnlSub">
        <a <?php if ($active == "lwcor") {echo 'class="active"';} ?> href="lwcor.php">> Latin Wars: Call of Rupert</a>
        <a <?php if ($active == "fi") {echo 'class="active"';} ?> href="fi.php">> French Invaders</a>
    </div>
    <a <?php if ($active == "news") {echo 'class="active"';} ?> href="news.php">NEWS</a>
    <span class="sidepnlCategory">OTHER SERVICES</span>
    <div class="sidepnlSub">
        <a href="https://lateinparadies.de.cool/" target="_blank">> Lateinparadies</a>
        <a href="">> Cicero's Powerpoint Presentations</a>
    </div>
    <a <?php if ($active == "login") {echo 'class="active"';} ?> href="login.php?redirect=<?php echo $page ?>">LOG IN</a>
    <a <?php if ($active == "register") {echo 'class="active"';} ?> href="register.php">REGISTER</a>
</div>