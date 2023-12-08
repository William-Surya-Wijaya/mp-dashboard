<?php 

require_once './model/DataModel.php';

function contohReportController($contohParameter){
  require_once './model/Connection.php'; // Jangan lupa import Connection
  return ambilDataReport($contohParameter, $pdo); // Jangan lupa ,asukin pdo ke parameter
}