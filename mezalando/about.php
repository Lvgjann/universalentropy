<?php include '../decide-lang.php';
require_once('../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php set_head(2, "mez", "About"); ?>
</head>
<body>

<!-- Menu -->
<?php set_menu(1); ?>

<div id="page" class="content">
    <div id="content_index">
        <div class="title">
            <h2>About me</h2> <br>
            <span class="byline">Who am I ?</span>
        </div>
        <p>
            // TODO
        </p>
    </div>
</div>

<!-- Portfolio -->
<?php set_portfolio(1);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../js/general_script.js"></script>
</body>
</html>