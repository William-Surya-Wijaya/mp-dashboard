<?php

require_once '../model/ScatterPlotModel.php';

function tableNamesX()
{
    include '../model/Connection.php';
    return getTableNamesX($pdo);
}

function dataScatterPlotX($columnX)
{
    include '../model/Connection.php';
    return getDataScatterPlotX($columnX, $pdo);
}

function dataScatterPlotY($columnY)
{
    include '../model/Connection.php';
    return getDataScatterPlotY($columnY, $pdo);
}
