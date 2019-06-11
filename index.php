<?php

header("Content-Type: text/html; charset=utf-8");
require_once('config/config.php');
require_once('autoloader.php');
require_once('route.php');
$pdo = null;
try {
    $pdo = new PDO($dbDsn, $dbUser, $dbPassword);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
$route = new Route();
$route->start();