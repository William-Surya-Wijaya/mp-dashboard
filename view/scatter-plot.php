<?php

// File IMPORT EXCEL adalah untuk menampilkan tampilan yang dapat menerima file excel
/* File excel tersebut akan dikirimkan melalui route, lalu diteruskan ke controller
/* Setelah diteruskan ke controller maka data akan diteruskan ke model untuk menyimpan data
/*/

?>

<html>
    <head>
    <?php require_once "./view/layout/head.php"; ?>
    <title>Scatter Plot</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <?php require_once './view/layout/topbar.php'; ?>
        <canvas id="scatterChart" width="400" height="400"></canvas>

        <?php
        // Generate sample data
        $dataPoints = [];
        for ($i = 0; $i < 10; $i++) {
            $dataPoints[] = [
                'x' => rand(1, 10),
                'y' => rand(1, 10),
            ];
        }

        // Convert data to JSON for JavaScript
        $dataJson = json_encode($dataPoints);
        ?>

        <script>
        // Use the generated data in JavaScript to create the scatter plot
        var data = <?php echo $dataJson; ?>;

        var ctx = document.getElementById('scatterChart').getContext('2d');
        var scatterChart = new Chart(ctx, {
        type: 'scatter',
        data: {
        datasets: [{
        label: 'Scatter Plot',
        data: data,
        backgroundColor: 'rgba(75, 192, 192, 0.5)',
        borderColor: 'rgba(75, 192, 192, 1)',
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
</script>
    </body>
</html>