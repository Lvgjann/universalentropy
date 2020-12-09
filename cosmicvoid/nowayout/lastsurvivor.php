<?php require '../../decide-lang.php';
require_once('../../common.php');
set_head("cos", "The Island : Last Survivor");?>
<body>

<!-- Menu -->
<?php set_menu('cos'); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title"><h2>The Island : Last Survivor</h2>
            <span class="byline">Plot</span></div>
        <p class="general"><span style="font-style: italic;">
            A plane crashes into an unknown archipelago with on board the winners of a tour. Two groups of survivors
            discover when they wake up that this is actually a government-organized death-fight and that only four of
            them will be able to survive. Nobody knows each other, we do not know how many survived the crash, and the
            island is big. Should they team or band apart to regain the continent ?<br>
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
    </div><!-- Sidebar -->
    <?php set_dante_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);

// Copyright
echo TXT_COPYRIGHT; ?>

<script type="application/javascript" src="../../js/general_script.js"></script>
</body>
</html>
