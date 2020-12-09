<?php
require('../../decide-lang.php');
require_once('../../common.php');
set_head("cos", "Last Chance : Virus 201");?>
<body>

<!-- Menu -->
<?php set_menu('cos'); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title"><h2>Last Chance : Virus 201</h2>
            <span class="byline">Plot</span></div>
        <p class="general"><span style="font-style: italic;">
            An anti-government unit has created a virus similar to the smallpox and spreaded it around Berlin. It was
            supposed to kill people as the smallpox did but it turned every infected into zombies, maybe worse.<br>
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
