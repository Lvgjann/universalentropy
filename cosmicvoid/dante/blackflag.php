<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "cos", "Black Flag");?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <img target="_parent" src="../../img/rpg_bg/b_blackflag.jpg" style="max-width: 75%" alt="Nukes">
        </div>
        <p class="general"><span style="font-style: italic;">
                <?php echo TXT_DANTE_BLACK_FLAG_CONTENT;?>
        </span></p>
        <div class="title">
            <h2>Game System</h2>
            <span class="byline">Plot</span></div>
        <p class="general">
            <?php echo TXT_DANTE_BLACK_FLAG_SYSTEM;?>
        </p>
        <h4>Objectives</h4>
        <p class="general">
            [Description]
        </p>
        <h4>Health</h4>
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
