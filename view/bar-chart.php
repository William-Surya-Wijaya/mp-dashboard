<?php

?>

<html>
    <head>
    <?php require_once "./view/layout/head.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <?php require_once './view/layout/topbar.php'; ?>
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <form id="createChartForm" action="/mp-dashboard/bar-chart/upload" method="POST">
                <div class="container mt-3">
                    <label for="columnSelect">Column:</label>
                    <select id="columnSelect" name="column" class="form-select">
                        <option value="" disabled selected hidden>Select your option</option>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('myChart').getContext('2d');
        var labels = <?php echo json_encode(array_column($getDataBarChart, 'col1')); ?>;
        var data = <?php echo json_encode(array_column($getDataBarChart, 'col2')); ?>;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '<?php echo $column; ?>',
                    data: data,
                    backgroundColor: 'rgba(0, 158, 247,0.5)',
                    borderColor: 'rgba(0, 158, 247,1)',
                    borderRadius: 10,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>