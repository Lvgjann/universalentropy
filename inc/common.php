<?php

define('TXT_FOOTER', '<div id="footer-wrapper">
    <div id="footer" class="content">
        <div id="box1">
            <div class="title">
                <h2>External sources</h2>
            </div>
            <ul class="style1">
                <li><a href="https://www.deviantart.com/saxonsurokov">Saxon Surokov, banners creator</a></li>
                <li><a href="#">Quam turpis feugiat sit dolor</a></li>
                <li><a href="#">Amet ornare in hendrerit in lectus</a></li>
                <li><a href="#">Consequat etiam lorem phasellus</a></li>
            </ul>
        </div>
        <div id="box2">
            <div class="title">
                <h2>See also</h2>
            </div>
            <ul class="style1">
                <li><a href="#">Semper mod quis eget mi dolore</a></li>
                <li><a href="#">Quam turpis feugiat sit dolor</a></li>
                <li><a href="#">Amet ornare in hendrerit in lectus</a></li>
                <li><a href="#">Consequat etiam lorem phasellus</a></li>
            </ul>
        </div>
        <div id="box3">
            <div class="title">
                <h2>Follow Us</h2>
            </div>
            <p>Follow me on my social media !</p>
            <ul class="contact">
                <li><a href="https://twitter.com/Lvgjann" class="icon icon-twitter"><span>Twitter</span></a></li>
                <li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
                <li><a href="https://www.linkedin.com/in/florian-crampe-skirata/" class="icon icon-linkedin"><span>Linkedin</span></a></li>
                <li><a href="https://github.com/Lvgjann" class="icon icon-github"><span>Github</span></a></li>
                <li><a href="#" class="icon icon-youtube"><span>Youtube</span></a></li>
            </ul>
            <a href="#" class="icon icon-arrow-right button">Read More</a>
        </div>
    </div>
</div>');
define('TXT_COPYRIGHT', '<div id="copyright" class="content">
    <p>&copy; N13 Development. All rights reserved. | Created by Fi Skirata</p>
</div>');

function target($n)
{
    $target = '';
    if ($n != -1) {
        for ($i = 0; $i < $n; $i++) {
            $target = $target . '../';
        }
    }
    return $target;
}

function set_menu($n)
{
    $target = target($n);
    $menu = '<div id="menu">
    <ul>
        <li><a href="' . $target . $target . 'index.php" class="current_page_item">Home</a></li>
        <li><a href="' . $target . 'UniversalEntropy/about.html">About me</a></li>
        <li><a href="' . $target . 'UniversalEntropy/projects.html">My projects</a></li>
        <li><a href="' . $target . 'UniversalEntropy/contact.html">Contact</a></li>
        <li><a href="?lang=fr">Français</a></li>
        <li><a href="?lang=en">English</a></li>
        <!--<li><a href="#">Language</a>
            <ul>
                <li><a href="#?lang=en">English</a></li>
                <li><a href="#?lang=fr">French</a></li>
            </ul>
        </li>-->
    </ul>
</div>
<div id="banner"></div>';
    echo $menu;
}

function set_portfolio($n)
{
    $target = target($n);
    $root = '';
    if ($n == -1) {
        $root = 'common/';
    }
    $portfolio = '
<div id="portfolio-wrapper">
    <div id="portfolio" class="content">
        <div id="column1">
            <div class="title">
                <h2>Cosmic Void</h2>
            </div>
            <a href="' . $target . $root . 'cosmicvoid/index.php" class="image image-full">
                <img src="' . $target . $target . 'img/background/mbg_cosmic.png" alt=""/></a>
            <a href="' . $target . $root . 'cosmicvoid/index.php" class="icon icon-arrow-right button">
                My Roleplay Games
            </a></div>
        <div id="column2">
            <div class="title">
                <h2>Fire Nebula</h2>
            </div>
            <a href="' . $target . $root . 'FireNebula/index.php" class="image image-full">
                <img src="' . $target . $target . 'img/background/mbg_fire.jpg" alt=""/></a>
            <a href="' . $target . $root . 'FireNebula/index.php" class="icon icon-arrow-right button">
                My literature projects
            </a></div>
        <div id="column3">
            <div class="title">
                <h2>Stardust</h2>
            </div>
            <a href="' . $target . $root . 'Stardust/index.html" class="image image-full">
                <img src="' . $target . $target . 'img/background/mbg_stardust.jpg" alt=""/></a>
            <a href="' . $target . $root . 'Stardust/index.html" class="icon icon-arrow-right button">
                My musical projects
            </a></div>
        <div id="column4">
            <div class="title">
                <h2>Constellations</h2>
            </div>
            <a href="' . $target . $root . 'Constellations/index.html" class="image image-full">
                <img src="' . $target . $target . 'img/background/mbg_const.jpg" alt=""/></a>
            <a href="' . $target . $root . 'Constellations/index.html" class="icon icon-arrow-right button">
                My IT projects
            </a></div>
    </div>
</div>';
    echo $portfolio;
}

function set_dante_sidebar($n)
{
    $target = target($n);
    $sidebar = '<div id="sidebar">
        <div class="box2">
            <div class="title">
                <h2>' . TXT_CV_MECHANICS_TITLE . '</h2>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'rpg/game_system.php">' . TXT_CV_GAME_SYSTEM . '</a></li>
                <li><a href="' . $target . 'rpg/trivia.php">Trivia</a></li>
                <li><a href="' . $target . 'rpg/templates.php">' . TXT_CV_TEMPLATES . '</a></li>
            </ul>
            <div class="title">
                <h2>' . TXT_DANTE_PHASE1 . '</h2>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'dante/nukes.php">' . TXT_DANTE_NUKES . '</a></li>
                <li><a href="' . $target . 'dante/thunder.php">' . TXT_DANTE_THUNDER_ROAD . '</a></li>
                <li><a href="' . $target . 'dante/icedearth.php">' . TXT_DANTE_ICED_EARTH . '</a></li>
                <li><a href="' . $target . 'dante/bloodcells.php">' . TXT_DANTE_BLOODCELLS . '</a></li>
            </ul>
            <div class="title">
                <h2>' . TXT_DANTE_PHASE2 . '</h2>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'dante/virus.php">' . TXT_DANTE_LAST_CHANCE . '</a></li>
                <li><a href="' . $target . 'dante/quarantine.php">' . TXT_DANTE_QUARANTINE . '</a></li>
                <li><a href="' . $target . 'dante/blackflag.php">' . TXT_DANTE_BLACK_FLAG . '</a></li>
                <li><a href="' . $target . 'dante/berezina.php">' . TXT_DANTE_BEREZINA . '</a></li>
            </ul>
            <div class="title">
                <h2>' . TXT_DANTE_PHASE13 . '</h2>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'dante/nukes.php">' . TXT_DANTE_BROTHERHOOD . '</a></li>
                <li><a href="' . $target . 'dante/asylum.php">Asylum 31</a></li>
            </ul>
        </div>
    </div>';
    echo $sidebar;
}
