<?php 

require_once './model/DataModel.php';

function dataSummarize($aggregate, $column, $groupby){
  require_once './model/Connection.php';
  return getDataSummarize($aggregate, $column, $groupby, $pdo);
}

function columnNames(){
  return getColumnNames();
}