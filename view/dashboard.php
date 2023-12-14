<?php

?>

<html>
<head>
    <?php require_once "./view/layout/head.php"; ?>
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <?php require_once './view/layout/topbar.php'; ?>

    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <div id="kt_app_toolbar" class="app-toolbar py-7 pt-lg-1 pb-lg-5">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-stretch">
                <div class="app-toolbar-container d-flex flex-column flex-row-fluid">
                    <div class="page-title gap-4 me-3 mb-3 mb-lg-5">
                        <h1 class="text-gray-900 fw-bolder m-0">
                            Empowering Insights for Your Business Growth
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-container container-xxl">
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <div class="d-flex flex-column flex-column-fluid">
                    <div id="kt_app_content" class="app-content">
                        <div class="card card-flush bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('/metronic8/demo53/assets/media/illustrations/sketchy-1/4.png')">
                            <div class="card-header pb-5 pt-5">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h2 class="mb-1">Import Data</h2>
                                        <div class="text-muted fw-bold">
                                            <p>Import data into the system to leverage various analysis features.</p>
                                            <a href="/mp-dashboard/import-excell" class="btn btn-primary">Go to Import Data Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('/metronic8/demo53/assets/media/illustrations/sketchy-1/4.png')">
                            <div class="card-header pb-5 pt-5">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h2 class="mb-1">Summarize Data</h2>
                                        <div class="text-muted fw-bold">
                                            <p>Summarize and analyze your imported data for actionable insights.</p>
                                            <a href="/mp-dashboard/summarize-data" class="btn btn-primary">Go to Summarize Data Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('/metronic8/demo53/assets/media/illustrations/sketchy-1/4.png')">
                            <div class="card-header pb-5 pt-5">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h2 class="mb-1">Dynamic Bar Chart</h2>
                                        <div class="text-muted fw-bold">
                                            <p>Explore and visualize data trends with dynamic bar charts.</p>
                                            <a href="/mp-dashboard/bar-chart" class="btn btn-primary">Go to Dynamic Bar Chart Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('/metronic8/demo53/assets/media/illustrations/sketchy-1/4.png')">
                            <div class="card-header pb-5 pt-5">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h2 class="mb-1">Dynamic Scatter Plot</h2>
                                        <div class="text-muted fw-bold">
                                            <p>Analyze relationships between variables using dynamic scatter plots.</p>
                                            <a href="/mp-dashboard/scatter-plot" class="btn btn-primary">Go to Dynamic Scatter Plot Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>