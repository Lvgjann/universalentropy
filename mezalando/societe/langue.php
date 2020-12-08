<?php include '../../decide-lang.php';
require_once('../../common.php');
generate(2, "mez", "Langue, monnaie et calendrier",
    file_get_contents('./langue.html')); ?>