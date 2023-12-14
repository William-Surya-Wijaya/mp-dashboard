<?php
function getTableNames()
{
    $tableName = ['Year_Birth', 'Education', 'Marital_Status', 'Income',
    'Recency', 'MntWines', 'MntFruits', 'MntMeatProducts', 'MntFishProducts',
    'MntSweetProducts', 'MntGoldProds', 'NumDealsPurchases', 'NumWebPurchases',
    'NumCatalogPurchases', 'NumStorePurchases', 'NumWebVisitsMonth', 'AcceptedCmp3',
    'AcceptedCmp4', 'AcceptedCmp5', 'AcceptedCmp1', 'AcceptedCmp2', 'Complain',
    'Z_CostContact', 'Z_Revenue', 'Response'];
    return $tableName;
}

function getDataBarChart($column, $pdo){
    $stmt = $pdo->prepare
    ("SELECT $column AS col1, COUNT($column) AS col2
    FROM `Customer` C
    INNER JOIN `Purchase` P ON C.ID = P.Customer_ID
    INNER JOIN `Response` R ON C.ID = R.Customer_ID
    INNER JOIN `Contact_Cost_Revenue` CCR ON C.ID = CCR.Customer_ID
    INNER JOIN `Complaint` CMP ON C.ID = CMP.Customer_ID
    INNER JOIN `Campaign` CP ON C.ID = CP.Customer_ID
    GROUP BY $column");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }