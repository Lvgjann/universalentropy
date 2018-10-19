<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Templates</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link target="_parent" href="../../_style/style_cosmic.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../_style/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>

<body>
<!-- Menu -->
<?php include('menu.inc.php') ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Roleplay Games</h2>
            <span class="byline">Overview</span></div>
        <div class="tab">
            <button class="tablinks" onclick="openSheet(event, 'Multiverse')">Multiverse</button>
            <button class="tablinks" onclick="openSheet(event, 'Lily')">Lily Vinogradova</button>
            <button class="tablinks" onclick="openSheet(event, 'Marina')">Marina Kornilova</button>
            <button class="tablinks" onclick="openSheet(event, 'Andrei')">Andrei Aleksei</button>
            <button class="tablinks" onclick="openSheet(event, 'Dmitri')">Dmitri Petrenko</button>
            <button class="tablinks" onclick="openSheet(event, 'Victoria')">Vicoria Kormarova</button>
            <button class="tablinks" onclick="openSheet(event, 'Pavlov')">Pavlov Aristof</button>
            <button class="tablinks" onclick="openSheet(event, 'Laina')">Laina Porfirievitch</button>
            <button class="tablinks" onclick="openSheet(event, 'Erast')">Erast Belousov</button>
            <button class="tablinks" onclick="openSheet(event, 'Antoine')">Antoine Beauvoir</button>
            <button class="tablinks" onclick="openSheet(event, 'Alice')">Alice Beauvoir</button>
            <button class="tablinks" onclick="openSheet(event, 'Prokhor')">Prokhor Laventriev</button>
            <button class="tablinks" onclick="openSheet(event, 'Vladimir')">Vladimir</button>
        </div>


        <div id="Multiverse" class="tabcontent">
            <h3>Ravil Yefimov</h3>
            <p>Age : 35 <br> Job : Policeman</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>65</th>
                    <th>40</th>
                    <th>75</th>
                    <th>65</th>
                    <th>55</th>
                    <th>60</th>
                    <th>45</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Ravil Yefimov was destined to be a painter, but his parents preferred him to a career in the local
                police. Easily sensitive to stress, he compensates for this with advanced physical training.

                Ravil was not part of convoy 1138. He got hit by the bus trying to stop him without his car because he
                had lost the keys. It is also a miracle that he has survived since the beginning of the epidemic,
                because beyond being a bit clumsy, he is also very sensitive to stress.
            </p>
            <h4>Skills</h4>
            <table class="skill">
                <tr>
                    <th>Spotter</th>
                    <th>10% bonus in observation in a stress situation</th>
                </tr>
                <tr>
                    <th>Self control</th>
                    <th>Can retry a failed Stress roll</th>
                </tr>
                <tr>
                    <th>First aid</th>
                    <th>20% bonus in healing</th>
                </tr>
                <tr>
                    <th>Russian athlete</th>
                    <th>10% bonus on physical action</th>
                </tr>
            </table>
        </div>
        <div class="title">
            <span class="byline">System</span></div>
    </div>
    <div id="sidebar">
        <div class="box2">
            <div class="title">
                <h2>Projets</h2>
            </div>
            <ul class="style2">
                <li><a href="game_system.php">Game systems</a></li>
                <li><a href="trivia.php">Trivia</a></li>
                <li><a href="templates.php">Character sheet and templates</a></li>
            </ul>
            <div class="title">
                <h2>Universes</h2>
            </div>
            <ul class="style2">
                <li><a href="../dante/rapture.php">Bioshock</a></li>
                <li><a href="../dante/columbia.php">Bioshock Infinite</a></li>
                <li><a href="../dante/thunder.php">Mad Max</a></li>
                <li><a href="../dante/lastchance.php">Last Chance</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Portfolio -->
<?php include('portfolio.inc.php') ?>

<!-- Footer -->
<?php include('../footer.inc.php') ?>

<script type="application/javascript" target="_parent" src="../../_scripts/general_script.js"></script>
</body>
</html>
