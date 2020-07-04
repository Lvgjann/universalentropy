<?php require('../../decide-lang.php');
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Trivia</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link target="_parent" href="../../../css/cosmic.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Roleplay Games</h2>
            <span class="byline">Overview</span></div>
        <p>I created a multiverse RPG using four universes :
            Joueur du Grenier's RPG serie <a
                    href="https://www.youtube.com/watch?v=OheEVaoNrK0&list=PLWmL9Ldoef0sKB07aXA1ekfyIqu-47rV6"> Les
                Suvivants</a>. The main universe is based on the post apocalyptic zombie world of <span
                    style="font-weight: bold;">Les Survivants</span> and I kept the same game system as Joueur du
            Grenier. The three other universes use an easier game system as they have been used for one-player sessions.
        </p>
        <div class="title">
            <span class="byline">System</span></div>
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
