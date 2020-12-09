<?php require '../../decide-lang.php';
require_once('../../common.php');
set_head("cos", "Last Chance");?>
<body>

<!-- Menu -->
<?php set_menu('cos'); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title"><h2>Last Chance</h2>
            <span class="byline">Plot</span></div>
        <p class="general"><span style="font-style: italic;">
           TODO
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

// Copyright
echo TXT_COPYRIGHT; ?>

<script type="application/javascript" src="../../js/general_script.js"></script>
</body>
</html>
