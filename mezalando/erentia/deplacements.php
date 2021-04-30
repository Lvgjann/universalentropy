<?php
require('../../scripts/decide-lang.php');
require_once('../../scripts/functions.php');
ob_start();
require('./deplacements.html');
$content = ob_get_clean();
generate(2, "mez", "Déplacements",
$content); ?>