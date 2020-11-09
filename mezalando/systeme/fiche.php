<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Fiche"); ?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <span class="byline">Fiche de personnage</span></div>
        <p>
            <a href="template.pdf"> Download</a>
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_mezalando_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../../js/general_script.js"></script>
</body>
</html>
