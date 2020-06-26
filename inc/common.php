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
    for ($i = 0; $i < $n; $i++) {
        $target = $target . '../';
    }
    return $target;
}

function set_menu($n)
{
    $target = target($n);
    $menu = '
        <li><a href="' . $target . 'index.php" class="current_page_item">Home</a></li>
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
        </li>-->';
    echo $menu;
}

function set_portfolio($n)
{
    $target = target($n);
    $portfolio = '
<div id="portfolio-wrapper">
    <div id="portfolio" class="content">
        <div id="column1">
            <div class="title">
                <h2>Cosmic Void</h2>
            </div>
            <a href="' . $target . 'cosmicvoid/index.php" class="image image-full">
                <img src="' . $target . '../img/background/mbg_cosmic.png" alt=""/></a>
            <a href="' . $target . 'cosmicvoid/index.php" class="icon icon-arrow-right button">
                My Roleplay Games
            </a></div>
        <div id="column2">
            <div class="title">
                <h2>Fire Nebula</h2>
            </div>
            <a href="' . $target . 'FireNebula/index.php" class="image image-full">
                <img src="' . $target . '../img/background/mbg_fire.jpg" alt=""/></a>
            <a href="' . $target . 'FireNebula/index.php" class="icon icon-arrow-right button">
                My literature projects
            </a></div>
        <div id="column3">
            <div class="title">
                <h2>Stardust</h2>
            </div>
            <a href="' . $target . 'Stardust/index.html" class="image image-full">
                <img src="' . $target . '../img/background/mbg_stardust.jpg" alt=""/></a>
            <a href="' . $target . 'Stardust/index.html" class="icon icon-arrow-right button">
                My musical projects
            </a></div>
        <div id="column4">
            <div class="title">
                <h2>Constellations</h2>
            </div>
            <a href="' . $target . 'Constellations/index.html" class="image image-full">
                <img src="' . $target . '../img/background/mbg_const.jpg" alt=""/></a>
            <a href="' . $target . 'Constellations/index.html" class="icon icon-arrow-right button">
                My IT projects
            </a></div>
    </div>
</div>';
    echo $portfolio;
}
