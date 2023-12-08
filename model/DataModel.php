<?php

function ambilDataReport($contohParameter, $pdo){
  $stmt = $pdo->prepare("SELECT * FROM `Customer` WHERE Education LIKE '%$contohParameter%'");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}