<?php include '../../decide-lang.php';
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Fiche</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link href="../../../css/const.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<?php set_menu(1); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <span class="byline">Fiche de personnage</span></div>
        <p>
            <a href="template.pdf"> Download</a>
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_mezalando_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../../../js/general_script.js"></script>
</body>
</html>
