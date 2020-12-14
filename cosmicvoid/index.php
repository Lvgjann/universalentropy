<?php
require('../scripts/decide-lang.php');
require_once('../scripts/functions.php');
ob_start();
require('./index.html');
$content = ob_get_clean();
generate(1, "mez", "Mezalando", $content); ?>

<?php require '../scripts/decide-lang.php';
require_once('../scripts/functions.php');
set_head("cos", "The Cosmic Void"); ?>
<body>

<!-- Menu -->
<?php set_menu('cos'); ?>

<!-- Content -->
<div class="main_content">
    <div id="page" class="content">
        <div id="content_index">
            <div class="title">
                <h2>The Cosmic Void</h2>
                <span class="byline">Nowhere</span></div>
            <p class="general">
                Bienvenue dans le Cosmic Void. Cette partie regroupe les trois univers de jeu de rôle de Fi Skirata :
                Dante313, The Continental et No Way Out.
            </p>
            <table>
                <tr>
                    <td><a href="dante.php"><img src="../img/images/pleasestandby.jpg" alt=""><br>Dante313</a></td>
                    <td><a href="continental.php"><img src="../img/images/pleasestandby.jpg" alt=""><br>The Continental</a>
                    </td>
                    <td><a href="#"><img src="../img/images/pleasestandby.jpg" alt=""><br>No Way Out</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Portfolio -->
<?php set_portfolio(1);
set_footer('cos', 0);

// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../js/general_script.js"></script>
</body>
</html>
