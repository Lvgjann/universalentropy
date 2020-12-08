<?php
include('../../scripts/decide-lang.php');
require_once('../../scripts/functions.php');
generate(2, "mez", 'Enseignes', file_get_contents("./enseignes.html"));
