<?php

?>

<html>
    <head>
    <?php require_once "./view/layout/head.php"; ?>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <?php require_once './view/layout/topbar.php'; ?>
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <form id="createTableForm" action="/mp-dashboard/bar-chart/upload" method="POST">
                <div class="container mt-3">
                    <label for="tableSelect">Select a Table:</label>
                    <select id="tableSelect" name="column" class="form-select">
                        <option value="" disabled selected>Select your option</option>
                        <?php
                        foreach ($tableNames as $names) {
                            echo "<option value='$names'>$names</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="container mt-3">
                <button type="submit" class="btn btn-primary">Create Chart</button>
                </div>
        </form>
            <div class="container mt-3">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </body>
</html>