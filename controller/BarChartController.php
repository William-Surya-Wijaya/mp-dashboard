<?php 

require_once './model/BarChartModel.php';

function tableNames(){
    return getTableNames();
}

function dataBarChart($column){
    require_once './model/Connection.php';
    return getDataBarChart($column, $pdo);
}