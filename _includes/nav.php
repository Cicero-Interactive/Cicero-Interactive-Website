{% assign page.navitems =  site.data.navitems | process_navitems %}

<nav {% if page.nav_absolute %} class="posAbsolute" {% endif %}>
    <div style="max-width: 1800px; margin: auto">
        <!-- Navbar for wider devices -->
        <ul class="showOnBigScreen">
            <li><a href="{{ site.baseurl }}"><img src="{{ site.baseurl_root }}/assets/img/CILogo.png" style="filter: drop-shadow(1px 1px 1px black) drop-shadow(-1px -1px 1px black);"></a></li>
            {% for navitem in site.data.navitems %}
                <li {% if navitem.dropdown %} class="dropdown" {% endif %}>
                    <a  {% if page.title == navitem.en %}
                            class="active"
                        {% endif %}
                        {% unless navitem.dropdown %} href="{{ navitem.dest }}" {% endunless %}>
                        {{ navitem.en }} {% if navitem.dropdown %} ▾ {% endif %}
                    </a>
                    {% if navitem.dropdown %}
                        <div class="dropdown-content">
                            {% for dropdownitem in navitem.dropdown %}
                                <a href="{{ dropdownitem.dest }}">{{ dropdownitem.en }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </li>
            {% endfor %}
            <li class="dropdown dropdown--lang" style="float:right">
                <a><img src="{{ site.baseurl_root }}/assets/img/icoGlobe.png"></a>
                <div class="dropdown-content">
                    {% for lang in site.languages %}
                        <a 
                            {% if site.lang == lang %}
                                class="active"
                            {% endif %}
                            href="{{ site.baseurl_root }}/{{ lang }}/"><img src="{{ site.baseurl_root }}/assets/img/ico{{ lang }}.png">{{ site.languageNames[lang] }}
                        </a>
                    {% endfor %}
                </div>
            </li>
            <?php if (!isset($_SESSION["username"])) { ?>
                <li style="float:right"><a {% if page.title == "Register" %}class="active"{% endif %} href="register.php">Register</a></li>
                <li style="float:right"><a {% if page.title == "Log In" %}class="active"{% endif %} href="login.php?redirect=.{{page.url}}">Log In</a></li>
            <?php ;} else { ?>
                <li style="float:right"><a {% if page.title == "Register" %}class="active"{% endif %} href="?logout=1">Log Out</a></li>
                <li class="dropdown" style="float:right">
                    <a class="dropdown">My Account ▾</a>
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
        <ul class="showOnSmallScreen">
            <li><a href="./"><img src="{{ site.baseurl_root }}/assets/img/CILogo.png"></a></li>
            <li style="float:right"><a class="btnHamburger" onclick="openNav()">&#9776;</a></li>
        </ul>
    </div>

    <!-- Mobile panel for small screen sizes -->
    <div class="sidepnl showOnSmallScreen" id="sidepnl">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        {% for navitem in site.data.navitems %}
            {% unless navitem.dropdown %}
                <a  {% if page.title == "{{ navitem.en }}" %}
                        class="active"
                    {% endif %}
                    {% unless navitem.dropdown %} href="{{ navitem.dest }}" {% endunless %}>
                    {{ navitem.en | upcase }}
                </a>
            {% else %}
                <span
                    {% if page.title == "{{ navitem.en }}" %}
                        class="active"
                    {% endif %}
                    class="sidepnlCategory">
                    {{ navitem.en | upcase }}
                </span>
                <div class="sidepnlSub">
                    {% for dropdownitem in navitem.dropdown %}
                        <a  {% if page.title == "{{ navitem.en }}" %}
                                class="active"
                            {% endif %}
                            href="{{ dropdownitem.dest }}">
                            > {{ dropdownitem.en }}
                        </a>
                    {% endfor %}
                </div>
            {% endunless %}
        {% endfor %}
        <a {% if page.title == "Log In" %}class="active"{% endif %} href="login.php?redirect=<?php echo $page ?>">LOG IN</a>
        <a {% if page.title == "Register" %}class="active"{% endif %} href="register.php">REGISTER</a>
    </div>
</nav>