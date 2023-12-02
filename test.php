<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$route = isset($_GET['route']) ? $_GET['route'] : '';
$subroute = isset($_GET['subroute']) ? $_GET['subroute'] : '';

echo "Route: $route<br>";
echo "Subroute: $subroute";
