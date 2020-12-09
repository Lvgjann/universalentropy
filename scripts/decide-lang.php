<?php
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    // if no language is declared, try to identify the defaul navigator language
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

// Language selector
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'fr') {
        require_once(dirname(__FILE__) . '/../lang/fr-lang.php');
    } elseif ($_GET['lang'] == 'en') {
        require_once(dirname(__FILE__) . '/../lang/en-lang.php');
    }
} else {
    require_once(dirname(__FILE__) . '/../lang/fr-lang.php');
}

// Cookie duration
$expire = 365 * 24 * 3600;

// Saving cookie to lang
setcookie('lang', $lang, time() + $expire);