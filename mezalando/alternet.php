<?php
require('../scripts/decide-lang.php');
require_once('../scripts/functions.php');
ob_start();
generate(1, "mez", "Mezalando", '<div class="title">
            <h3 class="byline">Alternet</h3>
        </div>
        <p>
            COMING SOON...
        </p>'); ?>
