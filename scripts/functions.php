<?php
require_once('constants.php');
require_once('helpers.php');
require_once('mezalando-helper.php');

define('TXT_COPYRIGHT', '<div id="copyright" class="content">
    <p>&copy; N13 Development. All rights reserved. | Created by Fi Skirata</p>
</div>');
define('TXT_SIDEBAR_DANTE', '');
define('TXT_SIDEBAR_MEZALANDO', '');

function target($n)
{
    if ($n === -1) {
        return APP_BASE_URL;
    }
    $currentURI = str_replace(APP_BASE_URL, '', getCurrentUrl());
    $sub = null;
    foreach (APP_SUB_BASE_URIS as $key => $uri) {
        if(strpos($currentURI, $uri) === 0) {
            $sub = $key;
            $currentURI = str_replace($uri, '', $currentURI);
            break;
        }
    }

    $currentURI = explode('/', $currentURI);
    // delete current route
    array_pop($currentURI);
    
    $currentURI = array_slice($currentURI, 0, count($currentURI) - $n < 0 ? 0 : count($currentURI) - $n);
    
    $target = APP_BASE_URL;
    if($sub) {
        $target .= APP_SUB_BASE_URIS[$sub];
    }
    
    return $target . ($currentURI ? implode('/', $currentURI) . '/' : '');
}

function set_head($param, $title)
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
    $target = target(-1);
    
    require(dirname(__FILE__) . '/../common-views/head.html.php');
}

function set_menu_legacy()
{
    $target = target(-1);
    require(dirname(__FILE__) . '/../common-views/navbar.html.php');
}

function set_menu($section)
{
    $target = target(-1);
    $title = null;
    switch ($section) {
        case 'cos':
            $title = 'The Cosmic Void';
            break;
        case 'mez':
            $title = 'Mezalando';
            break;
        case 'rat':
            $title = 'La tanière du Ratus';
            break;
        default:
            break;
    }
    require(dirname(__FILE__) . '/../common-views/navbar-dropdown.html.php');
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
            <a href="' . $target . $root . 'cosmicvoid/dante.php" class="image image-full">
                <img src="' . $target . 'img/background/mbg_cosmic.png" alt=""/></a>
            <a href="' . $target . $root . 'cosmicvoid/dante.php" class="icon icon-arrow-right button">
                Dante313
            </a></div>
        <div id="column2">
            <div class="title">
                <h2>The Continental</h2>
            </div>
            <a href="' . $target . $root . 'cosmicvoid/continental.php" class="image image-full">
                <img src="' . $target . 'img/background/cv_con.jpg" alt=""/></a>
            <a href="' . $target . $root . 'cosmicvoid/continental.php" class="icon icon-arrow-right button">
                The Continental
            </a></div>
        <div id="column3">
            <div class="title">
                <h2>No Way Out</h2>
            </div>
            <a href="' . $target . $root . 'cosmicvoid/nowayout.php" class="image image-full">
                <img src="' . $target . 'img/background/cv_nwo.jpg" alt=""/></a>
            <a href="' . $target . $root . 'cosmicvoid/nowayout.php" class="icon icon-arrow-right button">
                No Way Out
            </a></div>
        <div id="column4">
            <div class="title">
                <h2>See also...</h2>
            </div>
            <a href="' . $target . $root . 'mezalando/index.php" class="image image-full">
                <img src="' . $target . 'img/background/bg_mez.jpg" alt=""/></a>
            <a href="' . $target . $root . 'mezalando/index.php" class="icon icon-arrow-right button">
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

function generate($n, $section, $title, $content) {
    set_head($section, $title);
    set_menu($section);
    set_page($content, $n);
    set_footer($section, $n);
    echo TXT_COPYRIGHT;
    echo '
    </body>
    </html>';
}

function set_footer($section, $n)
{
    switch ($section) {
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