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
            case 'upload':
                return saveCSV();
                break;

            case 'process':
                return importData($_POST['newFileName']);
                break;
            
            default:
                $importedLogs = displayImportData();
                $importedCounts = displayImportedCount();
                include './view/import-excell.php';
                break;
        }
        break;

    case 'report-index':
        include './view/report-index.php';
        break;

    case 'report-data':
        include './view/report-data.php';
        break;

    case 'bar-chart':
        include './view/bar-chart.php';
        break;

    case 'scatter-plot':
        include './view/scatter-plot.php';
        break;

    default:
    $route = 'dashboard';
        include './view/dashboard.php';
        break;
}