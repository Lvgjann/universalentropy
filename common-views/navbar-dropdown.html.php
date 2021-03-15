<nav id="navbar">
    <ul>
        <li><a href="<?php echo($target) ?>index.php">Home</a></li>
        <li class="dropdown">
            <button>Cosmic Void<i class="fa fa-caret-down"></i></button>
            <ul class="dropdown-list">
                <li> <a href="<?php echo($target) ?>cosmicvoid/index.php">Accueil</a></li>
                <li> <a href="<?php echo($target) ?>cosmicvoid/dante.php">Dante313</a></li>
                <li> <a href="<?php echo($target) ?>cosmicvoid/continental.php">The Continental</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <button>Mezalando<i class="fa fa-caret-down"></i></button>
            <ul class="dropdown-list">
                <li><a href="<?php echo($target) ?>mezalando/index.php">Accueil</a></li>
                <li><a href="<?php echo($target) ?>mezalando/erentia/acces.php">Erentia</a></li>
                <li><a href="<?php echo($target) ?>mezalando/nenien/vie.php">Nenien</a></li>
            </ul>
        </li>
        <li><a href="<?php echo($target) ?>ratus/index.php">Ratus</a></li>
    </ul>
</nav>
<div id="banner">
    <?php if(isset($title)): ?>
        <!--<h1><?php echo($title) ?></h1>-->
    <?php endif; ?>
</div>