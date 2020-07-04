<?php require('../../decide-lang.php');
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Black Flag</title>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link target="_parent" href="../../../css/cosmic.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>

<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <img target="_parent" src="../../../img/rpg_bg/b_blackflag.jpg" style="max-width: 75%" alt="Nukes">
        </div>
        <p class="general"><span style="font-style: italic;">
                <?php echo TXT_DANTE_BLACK_FLAG_CONTENT;?>
        </span></p>
        <div class="title">
            <h2>Game System</h2>
            <span class="byline">Plot</span></div>
        <p class="general">
            <?php echo TXT_DANTE_BLACK_FLAG_SYSTEM;?>
        </p>
        <h4>Objectives</h4>
        <p class="general">
            [Description]
        </p>
        <h4>Health</h4>
        <p class="general">
            [Description]
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_dante_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>

<script type="application/javascript" src="../../../js/general_script.js"></script>
</body>
</html>
