<?php include '../decide-lang.php';
require_once('../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <title>The Cosmic Void</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link href="../../css/cosmic.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
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
                    <td><a href="dante.php"><img src="../../img/images/pleasestandby.jpg" alt=""><br>Dante313</a></td>
                    <td><a href="continental.php"><img src="../../img/images/pleasestandby.jpg" alt=""><br>The Continental</a></td>
                    <td><a href="#"><img src="../../img/images/pleasestandby.jpg" alt=""><br>No Way Out</a></td>
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
<script type="application/javascript" target="_parent" src="../../js/general_script.js"></script>
</body>
</html>
