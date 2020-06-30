<?php require('../../decide-lang.php');
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Asylum 31</title>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link target="_parent" href="../../../css/cosmic.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<div id="menu">
    <ul>
        <?php set_menu(2); ?>
    </ul>
</div>
<div id="banner"></div>

<!-- End menu -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <img target="_parent" src="../../../img/rpg_bg/b_asylum.jpg" style="max-width: 75%" alt="Nukes">
        </div>
        <p class="general"><span style="font-style: italic;">
            You cannot escape. You cannot escape. You cannot escape. You cannot escape. You cannot escape. You cannot
            escape. You cannot escape. You cannot escape. You cannot escape. You cannot escape. You cannot escape.
            You cannot escape. You cannot escape. You cannot escape. You cannot escape. You cannot escape. You cannot
            escape. You cannot escape. You cannot escape. You cannot escape. You cannot escape. You cannot escape. <br>
        </span></p>
        <div class="title">
            <h2>Game System</h2>
            <span class="byline">Gameplay</span></div>
        <p class="general">
            [Description]
        </p>
        <h4>Basis</h4>
        <p class="general">
            [Description]
        </p>
        <h4>Mental health</h4>
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
