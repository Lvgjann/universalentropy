<?php require('decide-lang.php');
require_once('common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <title>Universal Entropy</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="css/null.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/fontawesome.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="application/javascript" src="js/general_script.js"></script>
</head>
<body>

<!-- Menu -->
<nav id="navbar">
    <ul>
        <li><a href="index.php" class="current_page_item">Home</a></li>
        <li><a href="cosmicvoid/index.php">Cosmic Void</a></li>
        <li><a href="mezalando/index.php">Mezalando</a></li>
        <li><a href="FireNebula/index.php">Litterature</a></li>
        <li><a href="ratus/index.php">Ratus</a></li>
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
            <a href="cosmicvoid/index.php" class="image image-full">
                <img src="img/background/mbg_cosmic.png" alt=""/></a>
            <a href="cosmicvoid/index.php" class="icon icon-arrow-right button">
                My Roleplay Games
            </a></div>
        <div id="column2">
            <div class="title">
                <h2>Mezalando</h2>
            </div>
            <a href="mezalando/index.php" class="image image-full">
                <img src="img/background/bg_mez.jpg" alt=""/></a>
            <a href="mezalando/index.php" class="icon icon-arrow-right button">
                Encyclopedia and projects
            </a></div>
        <div id="column3">
            <div class="title">
                <h2>Fire Nebula</h2>
            </div>
            <a href="FireNebula/index.php" class="image image-full">
                <img src="img/background/mbg_fire.jpg" alt=""/></a>
            <a href="FireNebula/index.php" class="icon icon-arrow-right button">
                My literature projects
            </a></div>
        <div id="column4">
            <div class="title">
                <h2>Stardust</h2>
            </div>
            <a href="ratus/index.php" class="image image-full">
                <img src="img/background/mbg_stardust.jpg" alt=""/></a>
            <a href="ratus/index.php" class="icon icon-arrow-right button">
                My musical projects
            </a></div>
    </div>
</div>
// Footer
<? echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT;?>
</body>
</html>
