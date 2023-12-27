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

    case 'summarize-data':
        $columnNames = columnNames();
        $aggregate = isset($_POST['aggregate']) ? $_POST['aggregate'] : 'SUM';
        $column = isset($_POST['column']) ? $_POST['column'] : 'Income';
        $groupby = isset($_POST['groupby']) ? $_POST['groupby'] : 'Education';
        if ($aggregate == 'COUNT' && $column != 'Education' && $column != 'Marital_Status') {
            $getData = dataSummarizeCount($aggregate, $column, $groupby);
            include './view/summarize-data.php';
        } else {
            $getData = dataSummarize($aggregate, $column, $groupby);
            include './view/summarize-data.php';
        }
        break;

    case 'report-data':
        include './view/report-data.php';
        break;

    case 'bar-chart':
        $tableNames = tableNames();
        $column = isset($_POST['column']) ? $_POST['column'] : 'Education';
        $getDataBarChart = dataBarChart($column);
        include './view/bar-chart.php';
        break;

    case 'scatter-plot':
        $tableNamesX = tableNamesX();
        $columnX = isset($_POST['columnX']) ? $_POST['columnX'] : 'MntSweetProducts';
        $columnY = isset($_POST['columnY']) ? $_POST['columnY'] : 'MntMeatProducts';
        $dataXAxis = dataScatterPlotX($columnX);
        $dataYAxis = dataScatterPlotY($columnY);
        include './view/scatter-plot.php';
        break;

    default:
        $route = 'dashboard';
        include './view/dashboard.php';
        break;
}