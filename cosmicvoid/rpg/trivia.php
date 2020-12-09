<?php require '../../decide-lang.php';
require_once('../../common.php');
set_head("cos", "Trivia");?>
<body>

<!-- Menu -->
<?php set_menu('cos'); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Roleplay Games</h2>
            <span class="byline">Overview</span></div>
        <p>I created a multiverse RPG using four universes :
            Joueur du Grenier's RPG serie <a
                    href="https://www.youtube.com/watch?v=OheEVaoNrK0&list=PLWmL9Ldoef0sKB07aXA1ekfyIqu-47rV6"> Les
                Suvivants</a>. The main universe is based on the post apocalyptic zombie world of <span
                    style="font-weight: bold;">Les Survivants</span> and I kept the same game system as Joueur du
            Grenier. The three other universes use an easier game system as they have been used for one-player sessions.
        </p>
        <div class="title">
            <span class="byline">System</span></div>
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
