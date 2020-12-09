<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <title><?php echo($title) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="<?php echo($target) ?>img/icons/<?php echo($src) ?>">
    <link href="<?php echo($target) ?>css/fontawesome.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo($target) ?>css/gen.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo($target) ?>css/<?php echo($param) ?>.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="application/javascript" src="<?php echo($target) ?>js/general_script.js"></script>
    <script>
        function hideShow(id) {
            var i = document.getElementById(id);
            if (i.style.display === "none")
                i.style.display = "block";
            else
                i.style.display = "none";
        }
    </script>
</head>
<body>