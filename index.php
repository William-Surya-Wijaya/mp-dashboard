<?php
include './controller/Controllers.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$route = isset($_GET['route']) ? $_GET['route'] : '';
$subroute = isset($_GET['subroute']) ? $_GET['subroute'] : '';

// echo "Route: $route<br>";
// echo "Subroute: $subroute";
// die();

switch ($route) {
    case 'dashboard':
        include './view/dashboard.php';
        break;

    case 'import-excell':
        switch ($subroute) {
            case 'process':
                include './view/import-excell.php';
                break;
            
            default:
                include './view/import-excell.php';
                break;
        }

    case 'report-index':
        include './view/report-index.php';
        break;

    case 'report-data':
        include './view/report-data.php';
        break;

    default:
        include './view/dashboard.php';
        break;
}
