<?php 
	if (isset($_GET['logout'])) {
		session_destroy();
        session_unset();
        exit('<script>window.location.replace("./");</script>');
    }
?>

<nav>
    <div style="max-width: 2000px; margin: auto">
        <ul class="ShowOnBigScreen">
            <li><a href="./"><img src="assets/images/CILogo.png"></a></li>
            <li><a {% if page.title == "About" %}class="active"{% endif %} href="about.php">About</a></li>
            <li><a {% if page.title == "Tools" %}class="active"{% endif %} href="tools.php">Tools</a></li>
            <li class="dropdown">
                <a class="dropbtn {% if page.title == "French Invaders" or page.title == "Latin Wars: Call of Rupert" %}class="active"{% endif %} ?>">Games ▾</a>
                <div class="dropdown-content">
                    <a href="lwcor.php">Latin Wars: Call of Rupert</a>
                    <a href="fi.php">French Invaders</a>
                </div>
            </li>
            <li><a {% if page.title == "News" %}class="active"{% endif %} href="news.php">News</a></li>
            <li class="dropdown">
                <a class="dropbtn">Other Services ▾</a>
                <div class="dropdown-content">
                    <a href="https://lateinparadies.de.cool/" target="_blank">Lateinparadies</a>
                    <a href="">Pettri.de (Work in Progress)</a>
                </div>
            </li>
            <?php if (!isset($_SESSION["username"])) { ?>
                <li style="float:right"><a {% if page.title == "Register" %}class="active"{% endif %} href="register.php">Register</a></li>
                <li style="float:right"><a {% if page.title == "Log In" %}class="active"{% endif %} href="login.php?redirect=.{{page.url}}">Log In</a></li>
            <?php ;} else { ?>
                <li style="float:right"><a {% if page.title == "Register" %}class="active"{% endif %} href="?logout=1">Log Out</a></li>
                <li class="dropdown" style="float:right">
                    <a class="dropbtn">My Account ▾</a>
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
            <li><a href="./"><img src="assets/images/CILogo.png" style="height: 64px"></a></li>
            <li style="float:right"><a onclick="openNav()" style="font-size: 40px; padding: 7px 22px">&#9776;</a></li>
        </ul>
    </div>
</nav>

<div class="sidepnl ShowOnSmallScreen" id="sidepnl">
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a {% if page.title == "About" %}class="active"{% endif %} href="about.php">ABOUT</a>
    <a {% if page.title == "Tools" %}class="active"{% endif %} href="about.php">TOOLS</a>
    <span class="sidepnlCategory">GAMES</span>
    <div class="sidepnlSub">
        <a {% if page.title == "Latin Wars: Call of Rupert" %}class="active"{% endif %} href="lwcor.php">> Latin Wars: Call of Rupert</a>
        <a {% if page.title == "French Invaders" %}class="active"{% endif %} href="fi.php">> French Invaders</a>
    </div>
    <a {% if page.title == "News" %}class="active"{% endif %} href="news.php">NEWS</a>
    <span class="sidepnlCategory">OTHER SERVICES</span>
    <div class="sidepnlSub">
        <a href="https://lateinparadies.de.cool/" target="_blank">> Lateinparadies</a>
        <a href="">> Cicero's Powerpoint Presentations</a>
    </div>
    <a {% if page.title == "Log In" %}class="active"{% endif %} href="login.php?redirect=<?php echo $page ?>">LOG IN</a>
    <a {% if page.title == "Register" %}class="active"{% endif %} href="register.php">REGISTER</a>
</div>