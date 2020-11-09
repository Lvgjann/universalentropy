<?php include '../decide-lang.php';
require_once('../common.php');
set_head(1, "cos", "The Cosmic Void");?>
<body>

<!-- Menu -->
<?php set_menu(1);?>

<!-- Content -->
<div class="main_content">
    <div id="page" class="content">
        <div id="content_index">
            <div class="title">
                <h2>The Cosmic Void</h2>
                <span class="byline">Nowhere</span></div>
            <p class="general">
                <?php echo TXT_CV_CONTENT;?>
            </p>
            <table>
                <tr>
                    <td><a href="dante.php"><img src="../img/images/pleasestandby.jpg" alt=""><br>Dante313</a></td>
                    <td><a href="continental.php"><img src="../img/images/pleasestandby.jpg" alt=""><br>The Continental</a></td>
                    <td><a href="#"><img src="../img/images/pleasestandby.jpg" alt=""><br>No Way Out</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Portfolio -->
<?php set_portfolio(1);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT;?>
<script type="application/javascript" target="_parent" src="../js/general_script.js"></script>
</body>
</html>
