<?php

require_once './model/ScatterPlotModel.php';
require_once './model/Connection.php';

function tableNamesX()
{
    return getTableNamesX();
}

function dataScatterPlotX($columnX, $pdo)
{
    return getDataScatterPlotX($columnX, $pdo);
}

function dataScatterPlotY($columnY, $pdo)
{
    return getDataScatterPlotY($columnY, $pdo);
}
