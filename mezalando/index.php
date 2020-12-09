<?php
require('../scripts/decide-lang.php');
require_once('../scripts/functions.php');
ob_start();
require('./index.html');
$content = ob_get_clean();
generate(1, "mez", "Mezalando", $content); ?>
