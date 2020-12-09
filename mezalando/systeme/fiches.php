<?php require '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Fiche"); ?>
<body>

<!-- Menu -->
<?php set_menu('mez'); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <span class="byline">Fiche de personnage</span></div>
        <p>
            <!--
            <a href="template.pdf"> Download</a> -->
            Refonte en cours.
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_mezalando_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);

// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../../js/general_script.js"></script>
</body>
</html>
