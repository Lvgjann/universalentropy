<?php include '../../decide-lang.php';
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Monnaie</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link href="../../../css/style_const.css" rel="stylesheet" type="text/css" media="all"/>
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
            <span class="byline">Monnaie</span></div>
        <p>
            La monnaie sur Erentia est le Kröne, abrégé K, et son petit frère le öne, abrégé e. Dans les deux cas le
            “öne” se prononce comme dans “couronne”. Il faut 100 e pour faire un K. <br>
            Il existe des pièces de 1, 5, 10 et 50 önes, toutes en cuivre. <br>
            Les pièces de 1 et 2 Krönes sont en laiton, et les pièces de 5 Krönes sont en argent. <br>
            Il existe aussi des billets de 10,20, 50, 100 et 500 Krönes. <br>
            Par rapport au prix de la vie sur Erentia, on achète la même chose avec 1 Kröne sur l’île qu’avec 1€ en
            France. <br>
            Comme il y a assez peu d’importation sur l'île, tout ce qui doit être importé coûte cher (certains aliments,
            l’essence, etc….) mais les produits de base qui peuvent être fabriqués ou produits sur l’île sont très bon
            marché.
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
