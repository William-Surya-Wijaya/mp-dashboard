<?php

?>

<!DOCTYPE html>

<html>

<head>
    <?php require_once "./view/layout/head.php"; ?>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 2px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <?php require_once './view/layout/topbar.php'; ?>
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <form id="createTableForm" action="/mp-dashboard/summarize-data/upload" method="POST">
        <div class="container">
                <h2 class="mb-1">Aggregate Functions:</h2>
                <select id="aggregateSelect" name="aggregate" class="form-select">
                    <option value="" disabled selected hidden>Select your option</option>
                    <option value='SUM'>SUM</option>
                    <option value='AVG'>AVG</option>
                    <option value='COUNT'>COUNT</option>
                </select>
            </div>
            <div class="container mt-3">
                <h2 class="mt-7 mb-1">Column:</h2>
                <select id="columnSelect" name="column" class="form-select">
                    <option value="" disabled selected hidden>Select your option</option>
                    <?php
                        foreach ($columnNames as $names) {
                            echo "<option value='$names'>$names</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="container mt-3">
                <h2 class="mt-7 mb-1">Group-By:</h2>
                <select id="groupbySelect" name="groupby" class="form-select">
                    <option value="" disabled selected hidden>Select your option</option>
                    <option value='Education'>Education</option>
                    <option value='Marital_Status'>Marital_Status</option>
                </select>
            </div>
            <div class="container mt-3 mb-10">
                <button type="submit" class="btn btn-primary">Create Table</button>
            </div>
        </form>

        <div class="container px-8 pb-8 pt-2" id="kt_app_wrapper">
            <h2 class="mt-7 mb-1">Result Table:</h2>
            <table id="resultTable">
                <tr>
                    <th width="50%"><h2><?= $groupby ?></h2></th>
                    <th width="50%"><h2><?= "$aggregate $column" ?></h2></th>
                </tr>
                <?php foreach ($getData as $row) {?>
                    <tr>
                        <td><?= $row['col1'] ?></td>
                        <td><?= $row['col2'] ?></td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</body>

</html>
