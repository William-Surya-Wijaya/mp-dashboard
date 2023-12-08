<?php

// File IMPORT EXCEL adalah untuk menampilkan tampilan yang dapat menerima file excel
/* File excel tersebut akan dikirimkan melalui route, lalu diteruskan ke controller
/* Setelah diteruskan ke controller maka data akan diteruskan ke model untuk menyimpan data
/*/

?>

<html>
    <head>
    <?php require_once "./view/layout/head.php"; ?>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <?php require_once './view/layout/topbar.php'; ?>
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Year Birth</th>
                    <th>Education</th>
                    <th>Marital Status</th>
                    <th>Income</th>
                </tr>
            <?php foreach ($contohCaraAmbilData as $row) {?>
                <tr>
                    <td><?= $row['ID'] ?></td>
                    <td><?= $row['Year_Birth'] ?></td>
                    <td><?= $row['Education'] ?></td>
                    <td><?= $row['Marital_Status'] ?></td>
                    <td><?= $row['Income'] ?></td>
                </tr>
            <?php }?>
            </table>
        </div>
    </body>
</html>