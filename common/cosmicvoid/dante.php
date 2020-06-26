<?php require('../decide-lang.php');
require_once('../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dante 313</title>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link target="_parent" href="../../css/cosmic.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<div id="menu">
    <ul>
        <?php set_menu(1);?>
    </ul>
</div>
<div id="banner"></div>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Dante 313</h2>
        </div>
        <p>
            //TODO
        </p>
        <div class="title">
            <h2>Plot</h2>
            <span class="byline">Phase I</span></div>
        <p>
            A group of scientists on the Moon is trapped by an asteroid rain. Their only way to escape is blowing the
            spatial station to create a shockwave that will repulse them and a part of the Moon toward Mars. Few days
            later, the lead research team on Mars faces the collateral damages of the Moon. Both teams meet on Earth and
            decide to use the old Lutece’s technology to go back in time and reduce the population to avoid the
            catastrophe. They create a virus supposed to kill precised targets but it does not go as prepared and the
            virus turns people into zombies.</p>
        <div class="title">
            <span class="byline">Phase II</span></div>
        <p>
            [Description]
        </p>
        <div class="title">
            <span class="byline">Phase III</span></div>
        <p>
            [Description]
        </p>
        <div class="title">
            <span class="byline">Chronology (WIP)</span></div>
        <ul>
            <li>
                2345 : <U>Nukes</U> scientists escape from the Moon.
            </li>
            <li>
                2346 : <U>Nukes : Blood Cells</U> scientists escape from Mars
            </li>
            <li>
                2347 - 2012 : <U>Nukes</U> escapists create <U>Last Chance : Virus 201</U> virus and spread it around
                the world, turning people into infected and horrific forms.
            </li>
            <li>
                2013 : A crew of survivors of <U>The End ?</U> manage to escape the quarantine zone to reach New York.
            </li>
        </ul>

        Iced Earth and Fury Road universes have to meet ‘cause it’s fun <br>
        Quarantine and The End ? are the direct consequences of Last Chance : Virus 201 <br>
        At the end of The End ?, the United Government nukes the Earth. The survivors are few. New population coming
        from tears from Rapture’s sinking and Columbia’s fall are arriving. <br>
    </div>
    <div id="sidebar">
        <div class="box2">
            <div class="title">
                <h2><?php echo TXT_CV_MECHANICS_TITLE;?></h2>
            </div>
            <ul class="style2">
                <li><a href="rpg/game_system.html"><?php echo TXT_CV_GAME_SYSTEM?></a></li>
                <li><a href="rpg/trivia.html">Trivia</a></li>
                <li><a href="rpg/templates.html"><?php echo TXT_CV_TEMPLATES?></a></li>
            </ul>
            <div class="title">
                <h2><?php echo TXT_DANTE_PHASE1?></h2>
            </div>
            <ul class="style2">
                <li><a href="dante/nukes.html"><?php echo TXT_DANTE_NUKES?></a></li>
                <li><a href="dante/thunder.html"><?php echo TXT_DANTE_THUNDER_ROAD?></a></li>
                <li><a href="dante/icedearth.html"><?php echo TXT_DANTE_ICED_EARTH?></a></li>
                <li><a href="dante/bloodcells.html"><?php echo TXT_DANTE_BLOODCELLS?></a></li>
            </ul>
            <div class="title">
                <h2><?php echo TXT_DANTE_PHASE2?></h2>
            </div>
            <ul class="style2">
                <li><a href="dante/nukes.html"><?php echo TXT_DANTE_LAST_CHANCE?></a></li>
                <li><a href="dante/thunder.html"><?php echo TXT_DANTE_QUARANTINE?></a></li>
                <li><a href="dante/icedearth.html"><?php echo TXT_DANTE_THE_END?></a></li>
                <li><a href="dante/bloodcells.html"><?php echo TXT_DANTE_BEREZINA?></a></li>
            </ul>
            <div class="title">
                <h2><?php echo TXT_DANTE_PHASE13?></h2>
            </div>
            <ul class="style2">
                <li><a href="dante/nukes.html"><?php echo TXT_DANTE_BROTHERHOOD?></a></li>
                <li><a href="dante/asylum.html">Asylum 31</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Portfolio -->
<?php set_portfolio(1);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT;?>


<script type="application/javascript" target="_parent" src="../../js/general_script.js"></script>
</body>
</html>
