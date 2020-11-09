<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "cos", "Iced Earth");?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title"><h2>Iced Earth</h2>
            <span class="byline">Plot</span></div>
        <p class="general"><span style="font-style: italic;">
            The game is set in an alternate 1886 where the eruptions of Krakatoa and Mount Tambora, the dimming of the
            Sun, and other unknown factors caused a worldwide volcanic winter. This in turn led to widespread crop
            failure and the death of millions. This event roughly lines up with the real world 1883 eruption of
            Krakatoa, a volcanic event that led to global cooling. <br> A group of ex-criminal explorator is charged to
            find a coal mine to supply London, but if they come back with empty hands, London government will kill them.
            Unfortunately, the mine they have to dig in is already empty. Three solutions appear, face London’s Captain,
            try to find another mine, or escape from London’s hunters. <br>
        </span></p>
        <div class="title">
            <h2>Soluce</h2>
            <span class="byline">Story</span></div>
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
