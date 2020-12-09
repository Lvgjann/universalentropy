<?php
require('../../scripts/decide-lang.php');
require_once('../../scripts/functions.php');
generate(2, "mez", "Langue, monnaie et calendrier",
    file_get_contents('./langue.html')); ?>