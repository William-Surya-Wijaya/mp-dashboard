<?php 

require_once './model/DataModel.php';

function saveCSV(){
    $uploadDir = './data/';

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $csvFile = $_FILES['csvFile'];

    $originalFileName = basename($csvFile['name']);
    $fileInfo = pathinfo($originalFileName);

    $newFileName = generateNewFileName($fileInfo);

    $targetPath = $uploadDir . $newFileName;

    if (move_uploaded_file($csvFile['tmp_name'], $targetPath)) {
        echo json_encode(['status' => 'success', 'newFileName' => $newFileName]);
    } else {
        echo json_encode(['status' => 'failed']);
    }
}

function generateNewFileName($fileInfo) {
    $timestamp = time();

    $newFileName = $fileInfo['filename'].'-'.$timestamp . '.'. $fileInfo['extension'];
    return $newFileName;
}

function displayImportData(){
    require_once './model/Connection.php';
    return getImportedLog($pdo);
}

function displayImportedCount(){
    include './model/Connection.php';
    return getImportedCount($pdo);
}

function importData($sendedFileName){
    require_once './model/Connection.php';

    $csvFile = './data/'.$sendedFileName;
    insertLog(array($sendedFileName), $pdo);

    // Read the CSV file
    if (($handle = fopen($csvFile, 'r')) !== FALSE) {
        // Skip the header row
        fgetcsv($handle, 1000, ';');

        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
            // Insert data into the 'Customer' table
            $customerData = array_slice($data, 0, 5);
            insertCustomer($customerData, $pdo);

            // Get the customer ID for referencing in other tables
            $customerID = array_slice($data, 0, 1);

            // Insert data into other tables using the customer ID
            $purchaseData = array_merge($customerID, array_slice($data, 5, 13));
            insertPurchase($purchaseData, $pdo);

            $campaignData = array_merge($customerID, array_slice($data, 18, 5));
            insertCampaign($campaignData, $pdo);

            $complaintData = array_merge($customerID, array_slice($data, 23, 1));
            insertComplaint($complaintData, $pdo);

            $contactCostRevenueData = array_merge($customerID, array_slice($data, 24, 2));
            insertContactCostRevenue($contactCostRevenueData, $pdo);

            $responseData = array_merge($customerID, array_slice($data, 28, 1));
            insertResponse($responseData, $pdo);
        }

        echo json_encode(['status' => 'success', 'newFileName' => $newFileName]);
    } else {
        echo json_encode(['status' => 'failed']);
    }
}

?>
