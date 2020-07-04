<?php require('../../decide-lang.php');
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Playing a RPG</title>
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
            <h2>Playing roleplaying games</h2>
            <span class="byline">What is a roleplaying game ?</span></div>
        <p class="general">
            <span style="font-style: italic;">ed. This definition was inspired by JBX<a
                    href="http://www.refletsdacide.com/quest-ce-quun-jeu-de-role/">
                Reflet d'Acide</a>. Visit his website if you are looking for a more complete definition (IMPORTANT NOTE
            : this website is in French).</span>
        </p>
        <p class="general">
            The principle of a roleplaying game (RPG) is to stage players who assume the role of a character in a
            fictional
            or historical world, lead by rules and random situation imposed to the participants. A RPG has different
            actors.
        </p>
        <h4>Game Master</h4>
        <p class="general">
            The Game Master (GM) is the leader or the game. His role is to prepare the players for situations he
            established. He sets the rules and the limits of the game, to manage his universe properly. In other words,
            the GM is at the same time a scenarist with a margin adaptation, actor (he incarnates the NPC) and
            more-or-less fair referee.
        </p>
        <h4>Player Characters</h4>
        <p class="general">
            The Player Character (PC) is a fictional character created and player by a player. His actions and behaviour
            depends on the player who controls and the rules established by the GM. The PC's characters (nature, traits,
            appearance, etc.) is according to his player. His attributes and skills are managed by both player and GM,
            for the character not be unbalanced compared to the others PCs and their environment. <br>IMPORTANT NOTE :
            The PCs can be created by the players or conceived and imposed by the GM.
        </p>
        <h4>Non-Player Characters</h4>
        <p class="general">
            The Non-Player Characters (NPCs) are actors in the game incarnated only by the Game master. They intervene
            in the players' adventure as help, obstacle, quest actor, etc.
        </p>
        <div class="title">
            <h2>Game System</h2>
            <span class="byline">The adventure</span></div>
        <p class="general">
            You will assume the role of a character in an adventure. During this adventure, the Game Master will impose
            with his scenario situations in which you will have to take decisions, leading to dice rolls (explained
            below) depending on the difficulty. <br>
        </p>
        <p>
            I must precize there is no clear goal in a RPG in general, except having a good time. The only objective
            will be the one fixed by the adventure (your quest, in other words) and given by the GM.
        </p>
        <div class="title">
            <span class="byline">Rounds</span></div>
        <p class="general">
            The game progresses round by round between the NPC / environment, incarnated y the GM, and the PC.
        </p>
        <h4>GM's round</h4>
        <p class="general">
            During his round, the GM can do anything he wants within the limits and the time he established in his
            rules. The game will be more imersive if the GM keeps being fair all game long, but remember his objective
            is not to let you win.
        </p>
        <h4>PCs' round</h4>
        <p class="general">
            A round for the players corresponds to a precized situation to manage. It can be a fight, an important
            decision to make or just a setup in the group to determine something. Each PC has a action time during which
            he can act how he wants, in a realistic time frame : a round does not last for 15 minutes, every action has
            to be the more spontaneous possible. Most of the actions need a roll dice (explained below), which
            determinates its success or not. Be prepared to adapt the situation in case of failed dice rolls. The Game
            Master cannot interrupt the PCs round, unless exceptional exception.
        </p>
        <p class="general">
            Depending on the circumstances, the players can be allowed bonus time to establish their strategy or their
            decision making. If they need, they can ask for a "Strategy Point", which will freeze the time and give
            them to work out their strategy. However, some situations cannot allow a Strategy Point.
        </p>
        <div class="title">
            <h2>Dices System</h2></div>
        <h4>Dice values and effects</h4>
        <p class="general">
            To accomplish most of their actions, players need to make a dice roll. Depending on its value, the wanted
            action will or not be a success. The principle is to compare PC's dice roll's value to one of his
            attribute's value. The results can be one the following :
        </p>
        <ul>
            <li>dice <= threshold : the dice roll is succeeded</li>
            <li>dice > threshold : the cide roll is failed</li>
        </ul>
        <p class="general">
            Attributes values can temporarily change with a malus given by the GM or a bonus from any PC skill.
        </p>
        <h4>Critical Strike and Critical Fail</h4>
        <p class="general">
            We admit two critical values, respectively for chttps://www.youtube.com/watch?v=2x4zxpymPwsritical strike
            and critical fail. These values are the
            extremities of the dice and depends of the dice used (see the values below).
        </p>
        <ul>
            <li>A Critical Strike (CS) is a succeeded action which has in addition positive effect for the player or
                the group
            </li>
            <li>A Critical Fail (CF) is a failed action which has in addition a negative effect for the player or the
                group
            </li>
        </ul>
        <h4>Adventure roll</h4>
        <p>
            In some RPGs, you are allowed to use <span style="font-weight: bold;">Adventure dices</span>. These dices
            are a bonus / malus added to the current action (either GM or PC) and the values are fixed on a d6.
        </p>
        <h4>Dices used</h4>
        <p class="general">
            Here are the different dices I use in my RPGs.
        </p>
        <table>
            <tr>
                <th>Dice</th>
                <th>Use</th>
            </tr>
            <tr>
                <th>d3</th>
                <th>Damages</th>
            </tr>
            <tr>
                <th>d4</th>
                <th>Damages</th>
            </tr>
            <tr>
                <th>d6</th>
                <th>Damage, Adventure roll, Health state (Last Chance)</th>
            </tr>
            <tr>
                <th>d8</th>
                <th>Damage, Health state (Last Chance), Bullets shoot</th>
            </tr>
            <tr>
                <th>d10</th>
                <th>Damages</th>
            </tr>
            <tr>
                <th>d12</th>
                <th>N/A</th>
            </tr>
            <tr>
                <th>d20</th>
                <th>Action dice roll</th>
            </tr>
            <tr>
                <th>d100</th>
                <th>Action dice roll</th>
            </tr>
        </table>
        <p class="general">
            Here are the value ranges and effects of the dices used.
        </p>
        <table>
            <tr>
                <th>Dice/Value</th>
                <th>CS</th>
                <th>Success</th>
                <th>Fail</th>
                <th>CF</th>
            </tr>
            <tr>
                <th>d3</th>
                <th>1</th>
                <th>< threshold</th>
                <th>>= threshold</th>
                <th>3</th>
            </tr>
            <tr>
                <th>d4</th>
                <th>1</th>
                <th><= threshold</th>
                <th>> threshold</th>
                <th>4</th>
            </tr>
            <tr>
                <th>d6</th>
                <th>1</th>
                <th><= threshold</th>
                <th>> threshold</th>
                <th>6</th>
            </tr>
            <tr>
                <th>d8</th>
                <th>1</th>
                <th><= threshold</th>
                <th>> threshold</th>
                <th>8</th>
            </tr>
            <tr>
                <th>d10</th>
                <th>1-2</th>
                <th><= threshold</th>
                <th>> threshold</th>
                <th>8-10</th>
            </tr>
            <tr>
                <th>d12</th>
                <th>1-2</th>
                <th><= threshold</th>
                <th>> threshold</th>
                <th>10-12</th>
            </tr>
            <tr>
                <th>d20</th>
                <th>1-3</th>
                <th><= threshold</th>
                <th>> threshold</th>
                <th>17-20</th>
            </tr>
            <tr>
                <th>d100</th>
                <th>1-5</th>
                <th><= thresohld</th>
                <th>> threshold</th>
                <th>95-100</th>
            </tr>
        </table>
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
