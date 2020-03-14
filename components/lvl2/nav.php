<div class="nav">
    <div style="max-width: 2000px; margin: auto">
        <ul class="ShowOnBigScreen">
            <li><a href="../"><img src="../images/CILogo.png"></a></li>
            <li><a <?php if ($active == "about") {echo 'class="active"';} ?> href="../about.php">About</a></li>
            <li class="dropdown">
                <a class="dropbtn <?php if ($active == "tools" or $active == "tools") {echo 'active';} ?>">Tools ▾</a>
                <div class="dropdown-content">
                    <a href="../tools.php">General Tools</a>
                    <a href="../tools.php">Windows 10 Tweaking Tools</a>
                </div>
            </li>
            <li class="dropdown">
                <a class="dropbtn <?php if ($active == "lwcor" or $active == "fi") {echo 'active';} ?>"">Games ▾</a>
                <div class="dropdown-content">
                    <a href="../lwcor.php">Latin Wars: Call of Rupert</a>
                    <a href="../fi.php">French Invaders</a>
                </div>
            </li>
            <li><a <?php if ($active == "news") {echo 'class="active"';} ?> href="../news.php">News</a></li>
            <li class="dropdown">
                <a class="dropbtn">Other Services ▾</a>
                <div class="dropdown-content">
                    <a href="https://lateinparadies.de.cool/" target="_blank">Lateinparadies</a>
                    <a href="">Cicero's Powerpoint Presentations</a>
                </div>
            </li>
            <li style="float:right"><a <?php if ($active == "register") {echo 'class="active"';} ?> href="../register.php">Register</a></li>
            <li style="float:right"><a <?php if ($active == "login") {echo 'class="active"';} ?> href="../login.php?redirect=<?php echo $page ?>">Log In</a></li>
        </ul>
        <ul class="ShowOnSmallScreen">
            <li><a href="../"><img src="../images/CILogo.png" style="height: 64px"></a></li>
            <li style="float:right"><a onclick="openNav()" style="font-size: 40px; padding: 7px 22px">&#9776;</a></li>
        </ul>
    </div>
</div>
<div class="sidepnl ShowOnSmallScreen" id="sidepnl">
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a <?php if ($active == "about") {echo 'class="active"';} ?> href="../about.php">ABOUT</a>
    <span class="sidepnlCategory">TOOLS</span>
    <div class="sidepnlSub">
        <a <?php if ($active == "tools") {echo 'class="active"';} ?> href="../tools.php">> General Tools</a>
        <a <?php if ($active == "tools") {echo 'class="active"';} ?> href="../tools.php">> Windows 10 Tweaking Tools</a>
    </div>
    <span class="sidepnlCategory">GAMES</span>
    <div class="sidepnlSub">
        <a <?php if ($active == "lwcor") {echo 'class="active"';} ?> href="../lwcor.php">> Latin Wars: Call of Rupert</a>
        <a <?php if ($active == "fi") {echo 'class="active"';} ?> href="../fi.php">> French Invaders</a>
    </div>
    <a <?php if ($active == "news") {echo 'class="active"';} ?> href="../news.php">NEWS</a>
    <span class="sidepnlCategory">OTHER SERVICES</span>
    <div class="sidepnlSub">
        <a href="https://lateinparadies.de.cool/" target="_blank">> Lateinparadies</a>
        <a href="">> Cicero's Powerpoint Presentations</a>
    </div>
    <a <?php if ($active == "login") {echo 'class="active"';} ?> href="../login.php?redirect=<?php echo $page ?>">LOG IN</a>
    <a <?php if ($active == "register") {echo 'class="active"';} ?> href="../register.php">REGISTER</a>
</div>