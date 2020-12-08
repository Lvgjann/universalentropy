<?php include '../decide-lang.php';
require_once('../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <title>La tanière du Ratus</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link href="../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/stardust.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/fontawesome.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<?php set_menu(1); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>La tanière du ratus</h2>
            <span class="byline">Le ratus</span></div>
        <p class="general">
            La tanière de ratus est un espace qui regroupe diverses astuces et bons
            plans pour réduire ses dépenses et des initiatives écologiques.
        </p>
        <p class="general">
            Les astuces ratus sont inspirées de la streameuse <a href="https://www.twitch.tv/ultia">Ultia</a> et sa
            Chronique Ratus dans l'émission Le Récap Week-end puis dans Un Beau Dimanche.
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_ratus_sidebar(0); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(1);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../js/general_script.js"></script>
</body>
</html>
