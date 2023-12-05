<?php
function getImportedCount($pdo)
{
    $stmt = $pdo->prepare('SELECT count(*) as `imported` FROM `Log`');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getImportedLog($pdo)
{
    $stmt = $pdo->prepare('SELECT * FROM `Log`');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function insertLog($data, $pdo)
{
    $stmt = $pdo->prepare('INSERT INTO `Log` (File_Name) VALUES (?)');
    $stmt->execute($data);
}

function insertCustomer($data, $pdo)
{
    $stmt = $pdo->prepare('INSERT INTO Customer (ID, Year_Birth, Education, Marital_Status, Income) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute($data);
}

function insertPurchase($data, $pdo)
{
    $stmt = $pdo->prepare('INSERT INTO Purchase (Customer_ID, Dt_Customer, Recency, MntWines, MntFruits, MntMeatProducts, MntFishProducts, MntSweetProducts, MntGoldProds, NumDealsPurchases, NumWebPurchases, NumCatalogPurchases, NumStorePurchases, NumWebVisitsMonth) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute($data);
}

function insertCampaign($data, $pdo)
{
    $stmt = $pdo->prepare('INSERT INTO Campaign (Customer_ID, AcceptedCmp3, AcceptedCmp4, AcceptedCmp5, AcceptedCmp1, AcceptedCmp2) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute($data);
}

function insertComplaint($data, $pdo)
{
    $stmt = $pdo->prepare('INSERT INTO Complaint (Customer_ID, Complain) VALUES (?, ?)');
    $stmt->execute($data);
}

function insertContactCostRevenue($data, $pdo)
{
    $stmt = $pdo->prepare('INSERT INTO Contact_Cost_Revenue (Customer_ID, Z_CostContact, Z_Revenue) VALUES (?, ?, ?)');
    $stmt->execute($data);
}

function insertResponse($data, $pdo)
{
    $stmt = $pdo->prepare('INSERT INTO Response (Customer_ID, Response) VALUES (?, ?)');
    $stmt->execute($data);
}