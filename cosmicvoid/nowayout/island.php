<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "cos", "The Island");?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title"><h2>The Island</h2>
            <span class="byline">Plot</span></div>
        <p class="general"><span style="font-style: italic;">
            A plane crashes into an unknown archipelago with on board the winners of a tour. Nobody knows each other,
            we do not know how many have survived the crash and the island is big. They must team up and find a way to
            get back to the continent. But it is not without counting that the city shelters some inhabitants.<br>
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

<script type="application/javascript" src="../../js/general_script.js"></script>
</body>
</html>
