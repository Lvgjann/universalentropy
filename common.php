<?php
include('mezalando-helper.php');

define('TXT_FOOTER', '<div id="footer-wrapper">
    <div id="footer" class="content">
        <div id="box1">
            <div class="title">
                <h2>External sources</h2>
            </div>
            <ul class="footer-list">
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
            <ul class="footer-list">
                <li><a href="#">Semper mod quis eget mi dolore</a></li>
                <li><a href="#">Quam turpis feugiat sit dolor</a></li>
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
            <a href="javascript:void(0)" onclick="hideShow(\'languages\');" class="icon button">Languages</a>
            <div id="languages" style="display: none;">
            <ul>
                <li style="color: white;"><a href="#?lang=en">English</a></li>
                <li style="color: white;"><a href="#?lang=fr">French</a></li>
            </ul>
</div>
        </div>
    </div>
</div>');
define('TXT_COPYRIGHT', '<div id="copyright" class="content">
    <p>&copy; N13 Development. All rights reserved. | Created by Fi Skirata</p>
</div>');
define('TXT_SIDEBAR_DANTE', '');
define('TXT_SIDEBAR_MEZALANDO', '');

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

function set_head($n, $param, $title)
{
    switch ($param) {
        case "mez":
            $src = 'p_23.PNG';
            break;
        case "cos":
            $src = 'p_05.png';
            break;
        case "ratus":
            break;
        default:
            $src = 'p_18.png';
            break;
    }
    $target = target($n);
    $head = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head><title>' . $title . '</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <link rel="icon" href="' . $target . 'img/icons/' . $src . '">
        <link href="' . $target . 'css/fontawesome.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="' . $target . 'css/gen.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="' . $target . 'css/' . $param . '.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="application/javascript" src="' . $target . 'js/general_script.js"></script>
        <script>function hideShow(id) {
    var i = document.getElementById(id);
    if (i.style.display === "none")
        i.style.display = "block";
    else
        i.style.display = "none";
}</script>
    </head>
    <body>';
    echo $head;
}

function set_menu($n)
{
    $target = target($n);
    $menu = '<nav id="navbar">
    <ul>
        <li><a href="' . $target . 'index.php" class="current_page_item">Home</a></li>
        <li><a href="' . $target . 'cosmicvoid/index.php">Cosmic Void</a></li>
        <li><a href="' . $target . 'mezalando/index.php">Mezalando</a></li>
        <li><a href="' . $target . 'ratus/index.php">Ratus</a></li>
    </ul>
</nav>
<div id="banner"></div>';
    echo $menu;
}

function set_menu_d($n, $section)
{
    $target = target($n);
    $title = null;
    switch ($section) {
        case 'mez':
            $title = 'Mezalando';
            break;
        default:
            break;
    }
    $menu = '<nav id="navbar">
    <ul>
        
        <li><a href="' . $target . '/index.php">Home</a></li>
        <li class="dropdown"><a href="' . $target . 'cosmicvoid/index.php" >Cosmic Void &ensp;</a>
            <ul class="dropdown-child">
                <li> <a href="' . $target . 'cosmicvoid/dante.php">Dante313</a></li>
                <li> <a href="' . $target . 'cosmicvoid/continental.php">The Continental</a></li>
                <li> <a href="#">No Way Out</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="' . $target . 'mezalando/index.php">Mezalando &ensp;</a>
            <ul class="dropdown-child">
                <li> <a href="' . $target . 'mezalando/erentia/acces.php">Erentia</a></li>
                <li> <a href="' . $target . 'mezalando/nenien/vie.php">Nenien</a></li>
                <li> <a href="#">No Way Out</a></li>
            </ul>
        </li>
        <li><a href="' . $target . 'Stardust/index.php">Ratus</a></li>
    </ul>
</nav>
<div id="banner">' . ($title ? '<h1>' . $title . '</h1>' : '') . '</div>';
    echo $menu;
}

function set_page($content, $n)
{
    echo '<div id="page">
    <main id="page_content">' . $content . ' </main>';
    set_mezalando_sidebar($n - 1);
    echo '</div>';
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
                <h2>Dante313</h2>
            </div>
            <a href="' . $target . $root . 'cosmicvoid/index.php" class="image image-full">
                <img src="' . $target . 'img/background/mbg_cosmic.png" alt=""/></a>
            <a href="' . $target . $root . 'cosmicvoid/index.php" class="icon icon-arrow-right button">
                Fi\'s RPG universe
            </a></div>>
        <div id="column2">
            <div class="title">
                <h2>The Continental</h2>
            </div>
            <a href="' . $target . $root . 'mezalando/index.php" class="image image-full">
                <img src="' . $target . 'img/background/continental.jpg" alt=""/></a>
            <a href="' . $target . $root . 'mezalando/index.php" class="icon icon-arrow-right button">
                Encyclopedia and projects
            </a></div>
        <div id="column3">
            <div class="title">
                <h2>No Way Out</h2>
            </div>
            <a href="' . $target . $root . 'FireNebula/index.php" class="image image-full">
                <img src="' . $target . 'img/background/mbg_fire.jpg" alt=""/></a>
            <a href="' . $target . $root . 'FireNebula/index.php" class="icon icon-arrow-right button">
                Litterature projects
            </a></div>
        <div id="column4">
            <div class="title">
                <h2>See also...</h2>
            </div>
            <a href="' . $target . $root . 'Stardust/index.php" class="image image-full">
                <img src="' . $target . 'img/background/bg_mez.jpg" alt=""/></a>
            <a href="' . $target . $root . 'Stardust/index.php" class="icon icon-arrow-right button">
                Mezalando
            </a></div
    </div>
</div>';
    echo $portfolio;
}

function set_dante_sidebar($n)
{
    $target = target($n);
    $sidebar = '<script>function hideShow(id) {
    var i = document.getElementById(id);
    if (i.style.display === "none")
        i.style.display = "block";
    else
        i.style.display = "none";
}</script><div id="sidebar">
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

function set_ratus_sidebar($n)
{
    $target = target($n);
    $sidebar = '<div id="sidebar">
        <div class="box2">
            <div class="title">
                <h3>Le Ratus</h3>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'index.php">Résumé</a></li>
                <li><a href="' . $target . 'about.php">L\'histoire du ratus</a></li>
            </ul>
            <div class="title">
                <h3>Au quotidien</h3>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'daily/adresses.php">Les bonnes adresses</a></li>
                <li><a href="' . $target . 'daily/tips.php">Les astuces ratus</a></li>
            </ul>
            <div class="title">
                <h3>Alternatives à...</h3>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'diy.php">Se mettre au DIY</a></li>
                <li><a href="' . $target . 'alt/cooking.php">Cuisine</a></li>
                <li><a href="' . $target . 'alt/health.php">Santé, Hygiène & Beauté</a></li>
                <li><a href="' . $target . 'alt/deco.php">Mobilier & déco</a></li>
                <li><a href="' . $target . 'alt/hobbies.php">Loisirs & Mode</a></li>
                <li><a href="' . $target . 'alt/pets.php">Animaux</a></li>
            </ul>
            <div class="title">
                <h3>Le blog du ratus</h3>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'blog/blog1.php">Blog #1</a></li>
                <li>À suivre...</li>
            </ul>
            <div class="title">
                <h3>Sources externes</h3>
            </div>
            <ul class="style2">
                <li><a href="' . $target . 'sources.php">Sources</a></li>
            </ul>
        </div>
    </div>';
    echo $sidebar;
}

function set_footer($content, $n)
{
    switch ($content) {
        case "cos":
            $title1 = 'Sources externes';
            $box1 = '
                <ul class="footer-list">
                    <li><a href="https://www.deviantart.com/saxonsurokov">Saxon Surokov, banners creator</a></li>
                    <li><a href="https://www.artstation.com/alexnice">Alex Nice</a></li>
                </ul>';
            $title2 = 'Tools for RPG';
            $box2 = '<ul class="footer-list">
                    <li><a href="https://azgaar.github.io/Fantasy-Map-Generator/">Azgaar\'s Fantasy Map Generator</a></li>
                    <li><a href="https://www.fantasynamegenerators.com/ ">Fantasy Name Generators</a></li>
                </ul>';
            break;
        case "mez":
            $title1 = 'Sources externes';
            $box1 = '
                <ul class="footer-list">
                    <li><a href="https://mezalando.forumactif.com/ ">Forum RP de Mezalando</a></li>
                </ul>';
            $title2 = 'Tools for RPG';
            $box2 = '<ul class="footer-list">
                    <li><a href="https://azgaar.github.io/Fantasy-Map-Generator/">Azgaar\'s Fantasy Map Generator</a></li>
                    <li><a href="https://www.fantasynamegenerators.com/ ">Fantasy Name Generators</a></li>
                </ul>';
            break;
        case "rat":
            $title1 = 'Ultia';
            $box1 = '<ul class="footer-list">
                    <li><a href="https://www.twitch.tv/ultia/">Chaîne Twitch de Ultia</a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PLrK0ltVp4S8VuAEY3DZq85UOCGfywdURH">Les chroniques Ratus de Ultia</a></li>
                </ul>';
            $title2 = 'À voir aussi';
            $box2 = '';
            break;
        default:
            break;
    }
    $target = target($n);
    $footer = '
    <div id="footer-wrapper">
        <footer id="footer" class="content">
            <div>
                <div class="title">
                    <h2>' . $title1 . '</h2>
                </div> ' . $box1 . '
                </div>
            <div>
                <div class="title">
                    <h2>' . $title2 . '</h2>
                </div> ' . $box2 . '
            </div>
            <div>
                <div class="title">
                    <h2>Join us on Discord</h2>
                </div>
                <ul class="footer-list">
                    <li>
                        <div>
                            <i class="fab fa-discord"></i>
                            <a href="https://discord.gg/bRb9VJYgTR">
                                Mezalando
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <i class="fab fa-discord"></i>
                            <a href="https://discord.gg/bRb9VJYgTR">
                                The Cosmic Void
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </footer>
    </div>';
    echo $footer;
}