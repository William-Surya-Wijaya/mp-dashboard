<?php
function getTableNamesX()
{
    $tableNamesX = ['Education', 'Marital_Status', 'Income',
        'Recency', 'MntWines', 'MntFruits', 'MntMeatProducts', 'MntFishProducts',
        'MntSweetProducts', 'MntGoldProds', 'NumDealsPurchases', 'NumWebPurchases',
        'NumCatalogPurchases', 'NumStorePurchases', 'NumWebVisitsMonth', 'AcceptedCmp3',
        'AcceptedCmp4', 'AcceptedCmp5', 'AcceptedCmp1', 'AcceptedCmp2', 'Complain',
        'Z_CostContact', 'Z_Revenue', 'Response'];
    return $tableNamesX;
}

function getDataScatterPlotX($columnX, $pdo)
{
    $stmt = $pdo->prepare
    ("SELECT $columnX AS colX
    FROM `Customer` C
    INNER JOIN `Purchase` P ON C.ID = P.Customer_ID
    INNER JOIN `Response` R ON C.ID = R.Customer_ID
    INNER JOIN `Contact_Cost_Revenue` CCR ON C.ID = CCR.Customer_ID
    INNER JOIN `Complaint` CMP ON C.ID = CMP.Customer_ID
    INNER JOIN `Campaign` CP ON C.ID = CP.Customer_ID
    GROUP BY $columnX");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getDataScatterPlotY($columnY, $pdo)
{
    $stmt = $pdo->prepare
    ("SELECT $columnY AS colY
    FROM `Customer` C
    INNER JOIN `Purchase` P ON C.ID = P.Customer_ID
    INNER JOIN `Response` R ON C.ID = R.Customer_ID
    INNER JOIN `Contact_Cost_Revenue` CCR ON C.ID = CCR.Customer_ID
    INNER JOIN `Complaint` CMP ON C.ID = CMP.Customer_ID
    INNER JOIN `Campaign` CP ON C.ID = CP.Customer_ID
    GROUP BY $columnY");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}