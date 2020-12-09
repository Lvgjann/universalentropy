<?php
require('../../scripts/decide-lang.php');
require_once('../../scripts/functions.php');
generate(2, "mez", "Les Alters",
    file_get_contents("./alters.html")); ?>