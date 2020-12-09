<?php require '../../decide-lang.php';
require_once('../../common.php');
set_head("cos", "Asylum 31");?>
<body>

<!-- Menu -->
<?php set_menu('cos'); ?>

<!-- End menu -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <img target="_parent" src="../../img/rpg_bg/b_asylum.jpg" style="max-width: 75%" alt="Nukes">
        </div>
        <p class="general"><span style="font-style: italic;">
                <?php echo TXT_DANTE_ASYLUM_CONTENT; ?>
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
