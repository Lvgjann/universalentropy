<?php require('./scripts/decide-lang.php');
require_once('./scripts/functions.php');
require_once('./scripts/constants.php') ?>
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
                <span class="byline"><?php echo TXT_UE_TITLE; ?></span>
            </div>
            <p>
                <?php echo TXT_UE_CONTENT ?>
            </p>
        </div>
    </div>
</div>

<?php

// Copyright
echo TXT_COPYRIGHT;?>
</body>
</html>
