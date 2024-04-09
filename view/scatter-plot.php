<?php

?>

<html>
    <head>
    <?php require_once "../view/layout/head.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <?php require_once '../view/layout/topbar.php'; ?>
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <form id="createChartForm" action="/mp-dashboard/scatter-plot/upload" method="POST">
                <div class="container mt-3">
                    <label for="columnSelectX">Column:</label>
                    <select id="columnSelectX" name="columnX" class="form-select">
                        <option value="" disabled selected hidden>Select your option</option>
                        <?php
                        foreach ($tableNamesX as $names) {
                            echo "<option value='$names'>$names</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="container mt-3">
                    <label for="columnSelectY">Column:</label>
                    <select id="columnSelectY" name="columnY" class="form-select">
                        <option value="" disabled selected hidden>Select your option</option>
                        <?php
                        foreach ($tableNamesX as $names) {
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
        const ctx = document.getElementById('myChart').getContext('2d');
        const xAxis = <?php echo json_encode(array_column($dataXAxis, 'colX')); ?>;
        const yAxis = <?php echo json_encode(array_column($dataYAxis, 'colY')); ?>;
        var data = [];

        for (var i = 0; i < xAxis.length; i++) {
            data.push({ x: xAxis[i], y: yAxis[i] });
        }

        const scatterChart = new Chart(ctx, {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'Scatter Plot',
                    data: data,
                    backgroundColor: 'rgba(0, 158, 247,0.5)',
                    borderColor: 'rgba(0, 158, 247,1)',
                    pointRadius: 5,
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'linear',
                        position: 'bottom'
                    },
                    y: {
                        type: 'linear',
                        position: 'left'
                    }
                }
            }
        });
    });
</script>
