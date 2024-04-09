<?php

// File IMPORT EXCEL adalah untuk menampilkan tampilan yang dapat menerima file excel
/* File excel tersebut akan dikirimkan melalui route, lalu diteruskan ke controller
/* Setelah diteruskan ke controller maka data akan diteruskan ke model untuk menyimpan data
/*/

?>
<?php

require_once "../view/layout/head.php";

?>

<style>

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        width: 50%;
        padding: 20px;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .btn {
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
    }

    #fileDropArea{
        width: 100%;
        height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #csvImportForm{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .custom-btn{
        height: 30px !important;
        width: 100px !important;
        border: 1px solid lightgrey !important;
        display: flex;
        justify-content: center;
        white-space: nowrap;
    }

    .custom-btn:hover{
        background-color: #f7f9fb !important;
    }

    .custom-btn:first-child:hover{
        background-color: grey !important;
    }

    .row-button{
        margin-top: 1em;
        width: 100%;
        display: flex;
        gap: 1em;
        justify-content: flex-end;
    }
</style>

<html>
    <head>
        <?php require_once "../view/layout/head.php"; ?>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <?php require_once '../view/layout/topbar.php'; ?>
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <div id="kt_app_toolbar" class="app-toolbar py-7 pt-lg-1 pb-lg-5">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-stretch">
            <div class="app-toolbar-container d-flex flex-column flex-row-fluid">
                <div class="page-title gap-4 me-3 mb-3 mb-lg-5">
                <h1 class="text-gray-900 fw-bolder m-0">
                    Import Data
                </h1>
                </div>
            </div>
            </div>
        </div>
        <div class="app-container container-xxl">
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_content" class="app-content">
                <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('/metronic8/demo53/assets/media/illustrations/sketchy-1/4.png')">
                    <div class="card-header pt-10">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle me-5">
                        <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                            <i class="ki-outline ki-abstract-47 fs-2x text-primary"></i>
                        </div>
                        </div>
                        <div class="d-flex flex-column">
                        <h2 class="mb-1">Import Data</h2>
                        <div class="text-muted fw-bold">
                            <a href="/mp-dashboard/dashboard">MP - DASHBOARD</a>
                            <span class="mx-3">|</span>
                            <a href="/mp-dashboard/import-excell">Import Data</a>
                            <span class="mx-3"></span>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body pb-0">
                    </div>
                </div>
                <div class="card card-flush">
                    <div class="card-header pt-8">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                        <h2 class="mb-1">Imported CSV</h2>
                        </div>
                    </div>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                        <button type="button" class="btn btn-flex btn-primary" onclick="openModal()">
                            <i class="ki-outline ki-folder-up fs-2"></i> Upload Files
                        </button>
                        </div>
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
                        <div class="fw-bold me-5">
                            <span class="me-2" data-kt-filemanager-table-select="selected_count"></span> Selected
                        </div>
                        <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">
                            Delete Selected
                        </button>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="d-flex flex-stack">
                        <div class="badge badge-lg badge-light-primary">
                        <div class="d-flex align-items-center flex-wrap">
                            <a href="/metronic8/demo53/../demo53/apps/file-manager/folders.html">csv</a>
                        </div>
                        </div>
                        <div class="badge badge-lg badge-primary">
                        <span id="kt_file_manager_items_counter"><?= $importedCounts[0]['imported'] ?> items</span>
                        </div>
                    </div>
                    <div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                        <table id="kt_file_manager_list" data-kt-filemanager-table="blank" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
                            <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" style="width: 29.8906px;"></th>
                                <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" style="width: 582.344px;">CSV File Name</th>
                                <th class="min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 303.219px;">Import Time</th>
                                <th class="w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 125px;"></th>
                            </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                            <?php 
                                foreach ($importedLogs as $log) {
                                    ?>
                                    <tr>
                                        <td><?= $log['ID'] ?></td>
                                        <td><?= $log['File_Name'] ?></td>
                                        <td><?= $log['Created_At'] ?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                            <tr>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="dataTables_paginate paging_simple_numbers" id="kt_file_manager_list_paginate" style="visibility: hidden;">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="kt_file_manager_list_previous">
                                <a href="#" aria-controls="kt_file_manager_list" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="kt_file_manager_list_next">
                                <a href="#" aria-controls="kt_file_manager_list" data-dt-idx="1" tabindex="0" class="page-link"><i class="next"></i></a>
                                </li>
                            </ul>
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
        </div>


        <div id="csvImportModal" class="modal">
            <div class="modal-content">
                <div class="row-button">
                    <h2>CSV Import</h2>
                    <span onclick="closeModal()" style="cursor: pointer; float: right;"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></span>
                </div>
                <form id="csvImportForm" onsubmit="return false">
                    <div id="fileDropArea" style="border: 2px dashed #ccc; padding: 20px; text-align: center; cursor: pointer;">
                        <p>Drop a CSV file here</p>
                        <input type="file" id="csvFile" name="csvFile" accept=".csv" style="display: none;">
                    </div>
                    <div class="row-button">
                        <button type="button" class="custom-btn btn btn-icon btn-active-color-secondary" onclick="browseFile()">Browse File</button>
                        <button type="button" class="custom-btn btn btn-icon btn-active-color-primary" onclick="uploadCSV()">Import</button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>

<script>
    function openModal() {
        document.getElementById('csvImportModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('csvImportModal').style.display = 'none';
    }

    function uploadCSV() {
        const fileInput = document.getElementById('csvFile');
        const file = fileInput.files[0];

        if (file) {
            const formData = new FormData();
            formData.append('csvFile', file);

            sendFileToServer(formData);
        } else {
            alert('Please choose a CSV file.');
        }
    }

    function sendFileToServer(formData) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/mp-dashboard/import-excell/upload', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    const newFileName = response.newFileName;
                    Swal.fire({
                        title: 'Uploading...',
                        allowOutsideClick: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    const processFormData = new FormData();
                    processFormData.append('newFileName', newFileName);

                    const processXHR = new XMLHttpRequest();
                    processXHR.open('POST', '/mp-dashboard/import-excell/process', true);
                    processXHR.onload = function () {
                        const response = JSON.parse(xhr.responseText);
                        Swal.close();
                        if (response.status === 'success') {
                            Swal.fire('Success!', 'File processed successfully.', 'success');
                            location.reload();
                        } else {
                            Swal.fire('Error!', 'File processing failed.', 'error');
                        }
                    };
                    processXHR.send(processFormData);
                } else {
                    alert('Error uploading file.');
                }
                closeModal();
            } else {
                alert('Error uploading file.');
            }
        };
        xhr.send(formData);
    }

    function browseFile() {
        document.getElementById('csvFile').click();
    }

    const fileDropArea = document.getElementById('fileDropArea');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        fileDropArea.addEventListener(eventName, preventDefaults, false);
        document.body.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        fileDropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        fileDropArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight() {
        fileDropArea.style.border = '2px solid #007bff';
    }

    function unhighlight() {
        fileDropArea.style.border = '2px dashed #ccc';
    }

    fileDropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        document.getElementById('csvFile').files = files;
    }
</script>