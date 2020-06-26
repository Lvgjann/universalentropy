<?php require('decide-lang.php');
require_once('../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Universal Entropy</title>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link href="../css/style_null.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<div id="menu">
    <ul>
        <?php set_menu(0);?>
    </ul>
</div>
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
<?php set_portfolio(0);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT;?>
<script type="application/javascript" target="_parent" src="../js/general_script.js"></script>
</body>
</html>
