<?php require('common/decide-lang.php');
require_once('inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Universal Entropy</title>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link href="css/null.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<nav id="menu">
    <ul>
        <li><a href="index.php" class="current_page_item">Home</a></li>
        <li><a href="common/cosmicvoid/index.php">Cosmic Void</a></li>
        <li><a href="common/Constellations/index.php">Mezalando</a></li>
        <li><a href="common/FireNebula/index.php">Litterature</a></li>
        <li><a href="common/Stardust/index.php">Ratus</a></li>
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
<div id="banner"></div>

<!-- Content -->
<div class="main_content">
    <div id="page" class="content">
        <div id="content_index">
            <div class="title">
                <h2>Universal Entropy</h2>
                <span class="byline"><?php echo TXT_UE_TITLE; ?></span></div>
            <p>
                <?php echo TXT_UE_CONTENT ?>
            </p>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div id="portfolio-wrapper">
    <div id="portfolio" class="content">
        <div id="column1">
            <div class="title">
                <h2>Cosmic Void</h2>
            </div>
            <a href="common/cosmicvoid/index.php" class="image image-full">
                <img src="img/background/mbg_cosmic.png" alt=""/></a>
            <a href="common/cosmicvoid/index.php" class="icon icon-arrow-right button">
                My Roleplay Games
            </a></div>
        <div id="column2">
            <div class="title">
                <h2>Constellations</h2>
            </div>
            <a href="common/Constellations/index.php" class="image image-full">
                <img src="img/background/mbg_const.jpg" alt=""/></a>
            <a href="common/Constellations/index.php" class="icon icon-arrow-right button">
                My IT projects
            </a></div>
        <div id="column3">
            <div class="title">
                <h2>Fire Nebula</h2>
            </div>
            <a href="common/FireNebula/index.php" class="image image-full">
                <img src="img/background/mbg_fire.jpg" alt=""/></a>
            <a href="common/FireNebula/index.php" class="icon icon-arrow-right button">
                My literature projects
            </a></div>
        <div id="column4">
            <div class="title">
                <h2>Stardust</h2>
            </div>
            <a href="common/Stardust/index.php" class="image image-full">
                <img src="img/background/mbg_stardust.jpg" alt=""/></a>
            <a href="common/Stardust/index.php" class="icon icon-arrow-right button">
                My musical projects
            </a></div>
    </div>
</div>
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT;?>
<script type="application/javascript" target="_parent" src="js/general_script.js"></script>
</body>
</html>
