<?php require '../../decide-lang.php';
require_once('../../common.php');
set_head("cos", "Nukes");?>
<body>

<!-- Menu -->
<?php set_menu('cos'); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <img target="_parent" src="../../img/rpg_bg/b_nukes.jpg" style="max-width: 75%" alt="Nukes">
        </div>
        <p class="general"><span style="font-style: italic;">
            A group of scientists is trapped on a lunar base during an asteroid rain. Their mission : escape from the
            Moon before the base is destroyed. There is no signal from any other team on the Moon, they are already
            gone, or have disappeared...<br>
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
