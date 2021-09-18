<?php
session_start();
require_once 'controllers/controllers.php';
echo '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>'.$WebSiteName.' | '.$PageName.'</title>
';
include 'views/includes/head.php';
echo '
';
include 'controllers/app/head.php';
echo '
</head>
<body>
<header>
';
 include 'views/includes/header.php';
echo '
</header>
<main>
';
include $PageLocation;
echo '
</main>
<footer>
';
include 'views/includes/footer.php';
echo '
</footer>
</body>
</html>';
?>