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
    <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            
                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-7 pt-lg-1 pb-lg-5 ">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex align-items-stretch ">
            <!--begin::Toolbar container-->
<div class="app-toolbar-container d-flex flex-column flex-row-fluid">  
     

<!--begin::Page title-->
<div class="page-title gap-4 me-3 mb-3 mb-lg-5">
    
    <!--begin::Title-->
    <h1 class="text-gray-900 fw-bolder m-0">
        Import Data       
    </h1>
    <!--end::Title--> 
</div>

     
</div>
<!--end::Toolbar container--->

        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->            
                  
            
                            <!--begin::Wrapper container-->
                <div class="app-container  container-xxl ">
            
            
            
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
<!--begin::Content-->
<div id="kt_app_content" class="app-content ">
    
            <!--begin::Card-->
<div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('/metronic8/demo53/assets/media/illustrations/sketchy-1/4.png')">

    <!--begin::Card header-->
    <div class="card-header pt-10">
        <div class="d-flex align-items-center">
            <!--begin::Icon-->
            <div class="symbol symbol-circle me-5">
                <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                    <i class="ki-outline ki-abstract-47 fs-2x text-primary"></i>                </div>
            </div>
            <!--end::Icon-->

            <!--begin::Title-->
            <div class="d-flex flex-column">
                <h2 class="mb-1">Import Data</h2>
                <div class="text-muted fw-bold">
                    <a href="#">MP - DASHBOARD</a> <span class="mx-3">|</span> <a href="#">Import Data</a> <span class="mx-3">|</span> 2.6 GB <span class="mx-3">|</span> 758 items
                </div> 
            </div>
            <!--end::Title-->
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pb-0">
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
<!--begin::Card-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header pt-8">
        <div class="card-title">
            <!--begin::Search-->
<div class="d-flex align-items-center position-relative my-1">
    <i class="ki-outline ki-magnifier fs-1 position-absolute ms-6"></i>    <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files &amp; Folders">
</div>
<!--end::Search--> 
        </div>

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
        <!--begin::Back to folders-->
    <a href="/metronic8/demo53/../demo53/apps/file-manager/folders.html" class="btn btn-icon btn-light-primary me-3">
        <i class="ki-outline ki-exit-up fs-2"></i>    </a>
    <!--end::Back to folders-->
    
    <!--begin::Export-->
    <button type="button" class="btn btn-flex btn-light-primary me-3" id="kt_file_manager_new_folder">
        <i class="ki-outline ki-add-folder fs-2"></i>        New Folder
    </button>
    <!--end::Export-->

    <!--begin::Add customer-->
    <button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
        <i class="ki-outline ki-folder-up fs-2"></i>        Upload Files
    </button>
    <!--end::Add customer--> 
</div>
<!--end::Toolbar-->

<!--begin::Group actions-->
<div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
    <div class="fw-bold me-5">
        <span class="me-2" data-kt-filemanager-table-select="selected_count"></span> Selected
    </div>

    <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">
        Delete Selected
    </button>
</div>
<!--end::Group actions-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Table header-->
        <div class="d-flex flex-stack">
            <!--begin::Folder path-->
            <div class="badge badge-lg badge-light-primary">
                <div class="d-flex align-items-center flex-wrap">
                    <i class="ki-outline ki-abstract-32 fs-2 text-primary me-3"></i>                    <a href="/metronic8/demo53/../demo53/apps/file-manager/folders.html">Keenthemes</a>
                    <i class="ki-outline ki-right fs-2 text-primary mx-1"></i>                    <a href="/metronic8/demo53/../demo53/apps/file-manager/folders.html">themes</a>
                    <i class="ki-outline ki-right fs-2 text-primary mx-1"></i>                    <a href="/metronic8/demo53/../demo53/apps/file-manager/folders.html">html</a>
                    <i class="ki-outline ki-right fs-2 text-primary mx-1"></i>                    demo1
                </div>
            </div>
            <!--end::Folder path-->

            <!--begin::Folder Stats-->
            <div class="badge badge-lg badge-primary">
                <span id="kt_file_manager_items_counter">0 items</span>
            </div>
            <!--end::Folder Stats-->
        </div>
        <!--end::Table header-->

        <!--begin::Table-->
        <div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table id="kt_file_manager_list" data-kt-filemanager-table="blank" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
            <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0"><th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" style="width: 29.8906px;">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1">
                        </div>
                    </th><th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" style="width: 582.344px;">Name</th><th class="min-w-10px sorting_disabled" rowspan="1" colspan="1" style="width: 84.2969px;">Size</th><th class="min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 303.219px;">Last Modified</th><th class="w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 125px;"></th></tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
            <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty"><div class="d-flex flex-column flex-center">
                    <img src="/metronic8/demo53/assets/media/illustrations/sketchy-1/5.png" class="mw-400px">
                    <div class="fs-1 fw-bolder text-dark mb-4">No items found.</div>
                    <div class="fs-6">Start creating new folders or uploading a new file!</div>
                </div></td></tr></tbody>
        </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_file_manager_list_paginate" style="visibility: hidden;"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_file_manager_list_previous"><a href="#" aria-controls="kt_file_manager_list" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item next disabled" id="kt_file_manager_list_next"><a href="#" aria-controls="kt_file_manager_list" data-dt-idx="1" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->

<!--begin::Upload template-->
<table class="d-none">
    <tbody><tr id="kt_file_manager_new_folder_row" data-kt-filemanager-template="upload">
        <td></td>
        <td id="kt_file_manager_add_folder_form" class="fv-row">
            <div class="d-flex align-items-center">
                <!--begin::Folder icon-->
                <span id="kt_file_manager_folder_icon"><i class="ki-outline ki-folder fs-2x text-primary me-4"></i></span>
                <!--end::Folder icon-->

                <!--begin:Input-->
                <input type="text" name="new_folder_name" placeholder="Enter the folder name" class="form-control mw-250px me-3">
                <!--end:Input-->

                <!--begin:Submit button-->
                <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_add_folder">
                    <span class="indicator-label">
                        <i class="ki-outline ki-check fs-1"></i>                    </span>
                    <span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle"></span></span>
                </button>
                <!--end:Submit button-->

                <!--begin:Cancel button-->
                <button class="btn btn-icon btn-light-danger" id="kt_file_manager_cancel_folder">
                    <span class="indicator-label">
                        <i class="ki-outline ki-cross fs-1"></i>                    </span>
                    <span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle"></span></span>
                </button>
                <!--end:Cancel button-->
            </div>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</tbody></table>
<!--end::Upload template-->

<!--begin::Rename template-->
<div class="d-none" data-kt-filemanager-template="rename">
    <div class="fv-row">
        <div class="d-flex align-items-center">
            <span id="kt_file_manager_rename_folder_icon"></span>
            <input type="text" id="kt_file_manager_rename_input" name="rename_folder_name" placeholder="Enter the new folder name" class="form-control mw-250px me-3" value="">
            <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_rename_folder">
                <i class="ki-outline ki-check fs-1"></i>            </button>
            <button class="btn btn-icon btn-light-danger" id="kt_file_manager_rename_folder_cancel">
                <span class="indicator-label">
                    <i class="ki-outline ki-cross fs-1"></i>                </span>
                <span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle"></span></span>
            </button>
        </div>
    </div>
</div>
<!--end::Rename template-->

<!--begin::Action template-->
<div class="d-none" data-kt-filemanager-template="action">
    <div class="d-flex justify-content-end">
        <!--begin::Share link-->
        <div class="ms-2" data-kt-filemanger-table="copy_link">
            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-outline ki-fasten fs-5 m-0"></i>            </button>
            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-gray-900">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-gray-900">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="/metronic8/demo53/../demo53/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->        </div>
        <!--end::Share link-->

        <!--begin::More-->
        <div class="ms-2">
            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-outline ki-dots-square fs-5 m-0"></i>            </button>
            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->        </div>
        <!--end::More-->
    </div>
</div>
<!--end::Action template-->

<!--begin::Checkbox template-->
<div class="d-none" data-kt-filemanager-template="checkbox">
    <div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" value="1"></div>
</div>
<!--end::Checkbox template-->
<!--begin::Modals-->

<!--begin::Modal - Upload File-->
<div class="modal fade" id="kt_modal_upload" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="none" id="kt_modal_upload_form">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Upload files</h2> 
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <!--begin::Input group-->
                    <div class="form-group">
                        <!--begin::Dropzone-->
                        <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                            <!--begin::Controls-->
                            <div class="dropzone-panel mb-4">
                                <a class="dropzone-select btn btn-sm btn-primary me-2 dz-clickable">Attach files</a>
                                <a class="dropzone-upload btn btn-sm btn-light-primary me-2" style="display: inline-block;">Upload All</a>
                                <a class="dropzone-remove-all btn btn-sm btn-light-primary" style="display: inline-block;">Remove All</a>
                            </div>
                            <!--end::Controls-->

                            <!--begin::Items-->
                            <div class="dropzone-items wm-200px">
                                
                            <div class="dropzone-item p-5 dz-image-preview dz-success dz-complete" style="" id="">                                    <!--begin::File-->                                    <div class="dropzone-file">                                        <div class="dropzone-filename text-gray-900" title="some_image_file_name.jpg">                                            <span data-dz-name="">44521256.png</span>                                            <strong>(<span data-dz-size=""><strong>6.2</strong> KB</span>)</strong>                                        </div>                                        <div class="dropzone-error mt-0" data-dz-errormessage=""></div>                                    </div>                                    <!--end::File-->                                    <!--begin::Progress-->                                    <div class="dropzone-progress">                                        <div class="progress bg-gray-300" style="opacity: 0;">                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress="" style="opacity: 0; width: 100%;">                                            </div>                                        </div>                                    </div>                                    <!--end::Progress-->                                    <!--begin::Toolbar-->                                    <div class="dropzone-toolbar">                                        <span class="dropzone-start" style="opacity: 0;">                                            <i class="ki-outline ki-to-right fs-1"></i>                                        </span>                                        <span class="dropzone-cancel" data-dz-remove="" style="display: none;">                                            <i class="ki-outline ki-cross fs-2"></i>                                        </span>                                        <span class="dropzone-delete" data-dz-remove="">                                            <i class="ki-outline ki-cross fs-2"></i>                                        </span>                                    </div>                                    <!--end::Toolbar-->                                </div></div>
                            <!--end::Items-->
                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></div>
                        <!--end::Dropzone-->

                        <!--begin::Hint-->
                        <span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
                        <!--end::Hint-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Upload File-->
<!--begin::Modal - New Product-->
<div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="kt_modal_move_to_folder_form">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Move to folder</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <!--begin::Input group-->
                    <div class="form-group fv-row fv-plugins-icon-container">
                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="0" id="kt_modal_move_to_folder_0">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_0">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> account</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="1" id="kt_modal_move_to_folder_1">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_1">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> apps</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="2" id="kt_modal_move_to_folder_2">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_2">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> widgets</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="3" id="kt_modal_move_to_folder_3">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_3">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> assets</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="4" id="kt_modal_move_to_folder_4">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_4">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> documentation</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="5" id="kt_modal_move_to_folder_5">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_5">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> layouts</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="6" id="kt_modal_move_to_folder_6">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_6">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> modals</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="7" id="kt_modal_move_to_folder_7">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_7">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> authentication</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="8" id="kt_modal_move_to_folder_8">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_8">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> dashboards</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class="separator separator-dashed my-5"></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="9" id="kt_modal_move_to_folder_9">
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_9">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> pages</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                                                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                    <!--end::Input group-->

                    <!--begin::Action buttons-->
                    <div class="d-flex flex-center mt-12">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-primary" id="kt_modal_move_to_folder_submit">
                            <span class="indicator-label">
                                Save
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--begin::Action buttons-->
                </div>
                <!--end::Modal body-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Move file--><!--end::Modals-->
        
    </div>
<!--end::Content-->	

                                    </div>
                <!--end::Content wrapper-->

                                    
<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer  d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!--begin::Copyright-->
<div class="text-gray-900 order-2 order-md-1">
    <span class="text-muted fw-semibold me-1">2023©</span>
    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
    <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

    <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
</ul>
<!--end::Menu-->    </div>
<!--end::Footer-->                            </div>
            <!--end:::Main-->

            
                            </div>
                <!--end::Wrapper container-->
                    </div>
                    <div class="modal fade show" id="kt_modal_upload" tabindex="-1" aria-modal="true" role="dialog" style="display: none;">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="none" id="kt_modal_upload_form">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Upload files</h2> 
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <!--begin::Input group-->
                    <div class="form-group">
                        <!--begin::Dropzone-->
                        <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                            <!--begin::Controls-->
                            <div class="dropzone-panel mb-4">
                                <a class="dropzone-select btn btn-sm btn-primary me-2 dz-clickable">Attach files</a>
                                <a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
                                <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                            </div>
                            <!--end::Controls-->

                            <!--begin::Items-->
                            <div class="dropzone-items wm-200px">
                                
                            </div>
                            <!--end::Items-->
                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></div>
                        <!--end::Dropzone-->

                        <!--begin::Hint-->
                        <span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
                        <!--end::Hint-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
  </body>
</html>