<?php

if(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];
} else {
    // if no language is declared, try to identify the defaul navigator language
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

// Language selector
if ($_GET['lang']=='fr') {
    include(__DIR__.'/../lang/fr-lang.php');
} elseif ($_GET['lang']=='en') {
    include(__DIR__.'/../lang/en-lang.php');
} else {
    include(__DIR__.'/../lang/fr-lang.php');
}

// Cookie duration
$expire = 365*24*3600;

// Saving cookie to lang
setcookie('lang', $lang, time()+$expire);