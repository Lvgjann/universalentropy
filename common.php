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

function set_head($n, $param, $title)
{
    $target = target($n);
    $head = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head><title>' . $title . '</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <link rel="icon" href="' . $target . 'img/icons/p_23.PNG">
        <link href="' . $target . 'css/' . $param . '.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="' . $target . 'css/gen.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="' . $target . 'css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="application/javascript" src="' . $target . 'js/general_script.js"></script>
    </head>';
    echo $head;
}

function set_menu($n)
{
    $target = target($n);
    $menu = '<nav id="menu">
    <ul>
        <li><a href="' . $target . '../index.php" class="current_page_item">Home</a></li>
        <li><a href="' . $target . 'cosmicvoid/index.php">Cosmic Void</a></li>
        <li><a href="' . $target . 'mezalando/index.php">Mezalando</a></li>
        <li><a href="' . $target . 'FireNebula/index.php">Litterature</a></li>
        <li><a href="' . $target . 'Stardust/index.php">Ratus</a></li>
        <!--<li><a href="?lang=fr">Français</a></li>
        <li><a href="?lang=en">English</a></li>-->
        <!--<li><a href="#">Language</a>
            <ul>
                <li><a href="#?lang=en">English</a></li>
                <li><a href="#?lang=fr">French</a></li>
            </ul>
        </li>-->
    </ul>
</nav>
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
                <img src="' . $target . 'img/background/mbg_cosmic.png" alt=""/></a>
            <a href="' . $target . $root . 'cosmicvoid/index.php" class="icon icon-arrow-right button">
                Fi\'s RPG universe
            </a></div>>
        <div id="column2">
            <div class="title">
                <h2>Mezalando</h2>
            </div>
            <a href="' . $target . $root . 'mezalando/index.php" class="image image-full">
                <img src="' . $target . 'img/background/bg_mez.jpg" alt=""/></a>
            <a href="' . $target . $root . 'mezalando/index.php" class="icon icon-arrow-right button">
                Myo\'s RPG universe
            </a></div>
        <div id="column3">
            <div class="title">
                <h2>Fire Nebula</h2>
            </div>
            <a href="' . $target . $root . 'FireNebula/index.php" class="image image-full">
                <img src="' . $target . 'img/background/mbg_fire.jpg" alt=""/></a>
            <a href="' . $target . $root . 'FireNebula/index.php" class="icon icon-arrow-right button">
                Litterature projects
            </a></div>
        <div id="column4">
            <div class="title">
                <h2>Stardust</h2>
            </div>
            <a href="' . $target . $root . 'Stardust/index.php" class="image image-full">
                <img src="' . $target . 'img/background/mbg_stardust.jpg" alt=""/></a>
            <a href="' . $target . $root . 'Stardust/index.php" class="icon icon-arrow-right button">
                Work in progress
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

function set_mezalando_sidebar($n)
{

    $target = target($n);
    echo '<script>function hideShow(id) {
    var i = document.getElementById(id);
    if (i.style.display === "none")
        i.style.display = "block";
    else
        i.style.display = "none";
}</script>
    <div id="sidebar">
        <div class="box2">
            <div class="title">
                <h2><a href="javascript:void(0)" style="text-decoration: none;" onclick="hideShow(\'context\');">
                Contexte général</a></h2>
            </div>
            <div id="context" style="display: none;">
            <ul class="style2">
                <li><a href="' . $target . 'index.php">Résumé</a></li>
                <li><a href="' . $target . 'histoire/factions.php">Factions</a></li>
            </ul>
            </div>
            <div class="title">
                <h2><a href="javascript:void(0)" onclick="hideShow(\'races\');" style="text-decoration: none;">
                Races</a></h2>
            </div>
            <div id="races" style="display: none;">
            <ul class="style2">
                <li><a href="' . $target . 'races/alters.php">Les races Alters</a></li>
                <li><a href="' . $target . 'dante/thunder.php">WIP</a></li>
                <li><a href="' . $target . '#">WIP</a></li>
                <li><a href="' . $target . '#">WIP</a></li>
            </ul>
            </div>
            <div class="title">
                <h2><a href="javascript:void(0)" style="text-decoration: none;" onclick="hideShow(\'magic\');">
                Magie</a></h2>
            </div>
            <div id="magic" style="display: none;">
            <ul class="style2">
                <li><a href="' . $target . 'magie/magie.php">Magie</a></li>
                <li><a href="' . $target . 'magie/voies.php">Voies et branches</a></li>
                <li><a href="' . $target . 'magie/objets.php">Objets enchantés</a></li>
                <li><a href="' . $target . 'magie/invocations.php">Invocations et animations</a></li>
            </ul>
            </div>
            <div class="title">
                <h2><a href="javascript:void(0)" style="text-decoration: none;" onclick=hideShow(\'histgeo\');>
                Histoire et géographie</a></h2>
            </div>
            <div id="histgeo" style="display: none;">
            <ul class="style2">
                <li><a href="' . $target . 'histoire/generale.php">Histoire</a></li>
                <li><a href="' . $target . 'geographie/climat.php">Géographie et climat</a></li>
            </ul>
            </div>
            <div class="title">
                <h2><a href="javascript:void(0)" style="text-decoration: none;" onclick="hideShow(\'society\');">
                Société</a></h2>
            </div>
            <div id="society" style="display: none;">
            <ul class="style2">
                <li><a href="' . $target . 'societe/gouvernance.php">Gouvernance et économie</a></li>
                <li><a href="' . $target . 'societe/lois.php">Lois de l\'île</a></li>
                <li><a href="' . $target . 'societe/certificat.php">Certificats de magie</a></li>
                <li><a href="' . $target . 'societe/garde.php">Garde et police</a></li>
                <li><a href="' . $target . 'societe/guildes.php">Guildes et status</a></li>
                <li><a href="' . $target . 'societe/religions.php">Religions et croyances</a></li>
                <li><a href="' . $target . 'societe/enseignes.php">Enseignes</a></li>
                <li><a href="' . $target . 'societe/traditions.php">Célébrations et traditions</a></li>
            </ul>
            </div>
            <div class="title">
                <h2><a href="javascript:void(0)" style="text-decoration: none;" onclick="hideShow(\'life\');">
                Vie pratique</a></h2>
            </div>
            <div id="life" style="display: none;">
            <ul class="style2">
                <li><a href="' . $target . 'vie/acces.php">Accès à l\'île</a></li>
                <li><a href="' . $target . 'vie/communication.php">Communication</a></li>
                <li><a href="' . $target . 'vie/deplacements.php">Déplacements</a></li>
                <li><a href="' . $target . 'vie/drogues.php">Drogues et alcool</a></li>
                <li><a href="' . $target . 'vie/langue.php">Langue et noms</a></li>
                <li><a href="' . $target . 'vie/medecine.php">Médecine et accès aux soins</a></li>
                <li><a href="' . $target . 'vie/monnaie.php">Monnaie</a></li>
                <li><a href="' . $target . 'vie/sports.php">Sports</a></li>
                <li><a href="' . $target . 'vie/technologie.php">Technologie</a></li>
            </ul>
            </div>
            <div class="title">
                <h2><a href="javascript:void(0)" style="text-decoration: none;" onclick="hideShow(\'system\');">
                Système</a></h2>
            </div>
            <div id="system" style="display: none;">
            <ul class="style2">
                <li><a href="' . $target . 'systeme/mecaniques.php">Mécaniques</a></li>
                <li><a href="' . $target . 'systeme/fiche.php">Fiche de personnage</a></li>
            </ul>
            </div>
        </div>
    </div>';
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
