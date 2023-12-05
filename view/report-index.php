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
<div id="kt_app_toolbar" class="app-toolbar py-7 pt-lg-1 pb-lg-5 ">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex align-items-stretch ">
            <!--begin::Toolbar container-->
<div class="app-toolbar-container d-flex flex-column flex-row-fluid">  
     

<!--begin::Page title-->
<div class="page-title gap-4 me-3 mb-3 mb-lg-5">
    
    <!--begin::Title-->
    <h1 class="text-gray-900 fw-bolder m-0">
        Customer Orders Report         
    </h1>
    <!--end::Title--> 
</div>

<div class="row gx-5 gx-xl-10 my-5">  
    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">       
        <!--begin::Chart widget 27-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">   
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">          
                <!--begin::Title-->     
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35,568</span>
                <!--end::Title-->
                 
                <!--begin::Label-->  
                <span class="badge badge-light-danger fs-base">                                
                    <i class="ki-outline ki-arrow-up fs-5 text-danger ms-n1"></i> 
                    8.02%
                </span> 
                <!--end::Label-->                            
            </div>
            <!--end::Heading-->

            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">Organic Sessions</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">                
                <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>                             
            </button><div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" style="">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>

            
<!--begin::Menu 2-->

<!--end::Menu 2-->
 
            <!--end::Menu-->         
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0 pb-1">                 
        <div id="kt_charts_widget_27" class="min-h-auto" style="min-height: 365px;"><div id="apexchartszocka2zo" class="apexcharts-canvas apexchartszocka2zo apexcharts-theme-light" style="width: 338px; height: 350px;"><svg id="SvgjsSvg1006" width="338" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="338" height="350"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 175px;"></div></foreignObject><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(72.40625, 30)"><defs id="SvgjsDefs1007"><linearGradient id="SvgjsLinearGradient1011" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1012" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1013" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1014" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskzocka2zo"><rect id="SvgjsRect1016" width="246.08665466308594" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzocka2zo"></clipPath><clipPath id="nonForecastMaskzocka2zo"></clipPath><clipPath id="gridRectMarkerMaskzocka2zo"><rect id="SvgjsRect1017" width="246.08665466308594" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1015" width="0" height="277.494" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1011)" class="apexcharts-xcrosshairs" y2="277.494" filter="none" fill-opacity="0.9"></rect><line id="SvgjsLine1058" x1="0" y1="278.494" x2="0" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1060" x1="48.71733093261719" y1="278.494" x2="48.71733093261719" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1062" x1="97.43466186523438" y1="278.494" x2="97.43466186523438" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1064" x1="146.15199279785156" y1="278.494" x2="146.15199279785156" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1066" x1="194.86932373046875" y1="278.494" x2="194.86932373046875" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1068" x1="243.58665466308594" y1="278.494" x2="243.58665466308594" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1053" class="apexcharts-grid"><g id="SvgjsG1054" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1055" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1059" x1="48.71733093261719" y1="0" x2="48.71733093261719" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1061" x1="97.43466186523438" y1="0" x2="97.43466186523438" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1063" x1="146.15199279785156" y1="0" x2="146.15199279785156" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1065" x1="194.86932373046875" y1="0" x2="194.86932373046875" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1070" x1="0" y1="277.494" x2="242.08665466308594" y2="277.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1069" x1="0" y1="1" x2="0" y2="277.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1056" class="apexcharts-grid-borders"><line id="SvgjsLine1057" x1="0" y1="0" x2="0" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1067" x1="243.58665466308594" y1="0" x2="243.58665466308594" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1018" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1019" class="apexcharts-series" rel="1" seriesName="Sessions" data:realIndex="0"><path id="SvgjsPath1024" d="M8.101 2.7494000000000014L193.48481845906574 2.7494000000000014C197.48481845906574 2.7494000000000014 201.48481845906574 6.749400000000001 201.48481845906574 10.749400000000001L201.48481845906574 44.7494C201.48481845906574 48.7494 197.48481845906574 52.7494 193.48481845906574 52.7494L8.101 52.7494C4.101000000000001 52.7494 0.101 48.7494 0.101 44.7494L0.101 10.749400000000001C0.101 6.749400000000001 4.101 2.7494000000000014 8.101 2.7494000000000014C8.101 2.7494000000000014 8.101 2.7494000000000014 8.101 2.7494000000000014 " fill="rgba(62,151,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzocka2zo)" pathTo="M 8.101 2.7494000000000014 L 193.48481845906574 2.7494000000000014 C 197.48481845906574 2.7494000000000014 201.48481845906574 6.749400000000001 201.48481845906574 10.749400000000001 L 201.48481845906574 44.7494 C 201.48481845906574 48.7494 197.48481845906574 52.7494 193.48481845906574 52.7494 L 8.101 52.7494 C 4.101000000000001 52.7494 0.101 48.7494 0.101 44.7494 L 0.101 10.749400000000001 C 0.101 6.749400000000001 4.101 2.7494000000000014 8.101 2.7494000000000014 Z " pathFrom="M 0.101 2.7494000000000014 L 0.101 2.7494000000000014 L 0.101 52.7494 L 0.101 52.7494 L 0.101 52.7494 L 0.101 52.7494 L 0.101 52.7494 L 0.101 2.7494000000000014 Z" cy="58.248200000000004" cx="201.48381845906573" j="0" val="12.478" barHeight="50" barWidth="201.38381845906574"></path><path id="SvgjsPath1030" d="M8.101 58.248200000000004L113.88672640584309 58.248200000000004C117.88672640584309 58.248200000000004 121.88672640584309 62.2482 121.88672640584309 66.2482L121.88672640584309 100.2482C121.88672640584309 104.2482 117.88672640584309 108.2482 113.88672640584309 108.2482L8.101 108.2482C4.101000000000001 108.2482 0.101 104.2482 0.101 100.2482L0.101 66.2482C0.101 62.2482 4.101 58.248200000000004 8.101 58.248200000000004C8.101 58.248200000000004 8.101 58.248200000000004 8.101 58.248200000000004 " fill="rgba(241,65,108,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzocka2zo)" pathTo="M 8.101 58.248200000000004 L 113.88672640584309 58.248200000000004 C 117.88672640584309 58.248200000000004 121.88672640584309 62.2482 121.88672640584309 66.2482 L 121.88672640584309 100.2482 C 121.88672640584309 104.2482 117.88672640584309 108.2482 113.88672640584309 108.2482 L 8.101 108.2482 C 4.101000000000001 108.2482 0.101 104.2482 0.101 100.2482 L 0.101 66.2482 C 0.101 62.2482 4.101 58.248200000000004 8.101 58.248200000000004 Z " pathFrom="M 0.101 58.248200000000004 L 0.101 58.248200000000004 L 0.101 108.2482 L 0.101 108.2482 L 0.101 108.2482 L 0.101 108.2482 L 0.101 108.2482 L 0.101 58.248200000000004 Z" cy="113.74700000000001" cx="121.88572640584309" j="1" val="7.546" barHeight="50" barWidth="121.78572640584309"></path><path id="SvgjsPath1036" d="M8.101 113.74700000000001L90.27520802103679 113.74700000000001C94.27520802103679 113.74700000000001 98.27520802103679 117.74700000000001 98.27520802103679 121.74700000000001L98.27520802103679 155.747C98.27520802103679 159.747 94.27520802103679 163.747 90.27520802103679 163.747L8.101 163.747C4.101000000000001 163.747 0.101 159.747 0.101 155.747L0.101 121.74700000000001C0.101 117.74700000000001 4.101 113.74700000000001 8.101 113.74700000000001C8.101 113.74700000000001 8.101 113.74700000000001 8.101 113.74700000000001 " fill="rgba(80,205,137,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzocka2zo)" pathTo="M 8.101 113.74700000000001 L 90.27520802103679 113.74700000000001 C 94.27520802103679 113.74700000000001 98.27520802103679 117.74700000000001 98.27520802103679 121.74700000000001 L 98.27520802103679 155.747 C 98.27520802103679 159.747 94.27520802103679 163.747 90.27520802103679 163.747 L 8.101 163.747 C 4.101000000000001 163.747 0.101 159.747 0.101 155.747 L 0.101 121.74700000000001 C 0.101 117.74700000000001 4.101 113.74700000000001 8.101 113.74700000000001 Z " pathFrom="M 0.101 113.74700000000001 L 0.101 113.74700000000001 L 0.101 163.747 L 0.101 163.747 L 0.101 163.747 L 0.101 163.747 L 0.101 163.747 L 0.101 113.74700000000001 Z" cy="169.24580000000003" cx="98.27420802103678" j="2" val="6.083" barHeight="50" barWidth="98.17420802103679"></path><path id="SvgjsPath1042" d="M8.101 169.24580000000003L73.45825507710775 169.24580000000003C77.45825507710775 169.24580000000003 81.45825507710775 173.24580000000003 81.45825507710775 177.24580000000003L81.45825507710775 211.24580000000003C81.45825507710775 215.24580000000003 77.45825507710775 219.24580000000003 73.45825507710775 219.24580000000003L8.101 219.24580000000003C4.101000000000001 219.24580000000003 0.101 215.24580000000003 0.101 211.24580000000003L0.101 177.24580000000003C0.101 173.24580000000003 4.101 169.24580000000003 8.101 169.24580000000003C8.101 169.24580000000003 8.101 169.24580000000003 8.101 169.24580000000003 " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzocka2zo)" pathTo="M 8.101 169.24580000000003 L 73.45825507710775 169.24580000000003 C 77.45825507710775 169.24580000000003 81.45825507710775 173.24580000000003 81.45825507710775 177.24580000000003 L 81.45825507710775 211.24580000000003 C 81.45825507710775 215.24580000000003 77.45825507710775 219.24580000000003 73.45825507710775 219.24580000000003 L 8.101 219.24580000000003 C 4.101000000000001 219.24580000000003 0.101 215.24580000000003 0.101 211.24580000000003 L 0.101 177.24580000000003 C 0.101 173.24580000000003 4.101 169.24580000000003 8.101 169.24580000000003 Z " pathFrom="M 0.101 169.24580000000003 L 0.101 169.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 169.24580000000003 Z" cy="224.74460000000005" cx="81.45725507710775" j="3" val="5.041" barHeight="50" barWidth="81.35725507710775"></path><path id="SvgjsPath1048" d="M8.101 224.74460000000005L63.43586757405599 224.74460000000005C67.43586757405599 224.74460000000005 71.43586757405599 228.74460000000005 71.43586757405599 232.74460000000005L71.43586757405599 266.74460000000005C71.43586757405599 270.74460000000005 67.43586757405599 274.74460000000005 63.43586757405599 274.74460000000005L8.101 274.74460000000005C4.101000000000001 274.74460000000005 0.101 270.74460000000005 0.101 266.74460000000005L0.101 232.74460000000005C0.101 228.74460000000005 4.101 224.74460000000005 8.101 224.74460000000005C8.101 224.74460000000005 8.101 224.74460000000005 8.101 224.74460000000005 " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzocka2zo)" pathTo="M 8.101 224.74460000000005 L 63.43586757405599 224.74460000000005 C 67.43586757405599 224.74460000000005 71.43586757405599 228.74460000000005 71.43586757405599 232.74460000000005 L 71.43586757405599 266.74460000000005 C 71.43586757405599 270.74460000000005 67.43586757405599 274.74460000000005 63.43586757405599 274.74460000000005 L 8.101 274.74460000000005 C 4.101000000000001 274.74460000000005 0.101 270.74460000000005 0.101 266.74460000000005 L 0.101 232.74460000000005 C 0.101 228.74460000000005 4.101 224.74460000000005 8.101 224.74460000000005 Z " pathFrom="M 0.101 224.74460000000005 L 0.101 224.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 224.74460000000005 Z" cy="280.24340000000007" cx="71.43486757405599" j="4" val="4.42" barHeight="50" barWidth="71.33486757405599"></path><g id="SvgjsG1021" class="apexcharts-bar-goals-markers"><g id="SvgjsG1023" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskzocka2zo)"></g><g id="SvgjsG1029" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskzocka2zo)"></g><g id="SvgjsG1035" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskzocka2zo)"></g><g id="SvgjsG1041" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskzocka2zo)"></g><g id="SvgjsG1047" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskzocka2zo)"></g></g><g id="SvgjsG1022" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1020" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"><g id="SvgjsG1026" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1028" font-family="inherit" x="22.099999999999994" y="33.2494" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="22.099999999999994" cy="33.2494" style="font-family: inherit;">12,478</text></g><g id="SvgjsG1032" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1034" font-family="inherit" x="18.099999999999994" y="88.74820000000001" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="18.099999999999994" cy="88.74820000000001" style="font-family: inherit;">7,546</text></g><g id="SvgjsG1038" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1040" font-family="inherit" x="19.099999999999994" y="144.247" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="19.099999999999994" cy="144.247" style="font-family: inherit;">6,083</text></g><g id="SvgjsG1044" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1046" font-family="inherit" x="18.099999999999994" y="199.74580000000003" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="18.099999999999994" cy="199.74580000000003" style="font-family: inherit;">5,041</text></g><g id="SvgjsG1050" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1052" font-family="inherit" x="15.099999999999994" y="255.24460000000005" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="15.099999999999994" cy="255.24460000000005" style="font-family: inherit;">4,420</text></g></g></g><line id="SvgjsLine1071" x1="0" y1="0" x2="242.08665466308594" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1072" x1="0" y1="0" x2="242.08665466308594" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1093" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG1094" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(-51.90625, 0)"><text id="SvgjsText1096" font-family="inherit" x="0" y="32.27207272727273" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1097">USA</tspan><title>USA</title></text><text id="SvgjsText1099" font-family="inherit" x="0" y="87.77087272727273" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1100">India</tspan><title>India</title></text><text id="SvgjsText1102" font-family="inherit" x="0" y="143.26967272727273" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1103">Canada</tspan><title>Canada</title></text><text id="SvgjsText1105" font-family="inherit" x="0" y="198.76847272727275" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1106">Brasil</tspan><title>Brasil</title></text><text id="SvgjsText1108" font-family="inherit" x="0" y="254.26727272727277" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1109">France</tspan><title>France</title></text></g></g><g id="SvgjsG1073" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG1074" class="apexcharts-xaxis-texts-g" transform="translate(0, -9.333333333333334)"><text id="SvgjsText1075" font-family="inherit" x="242.08665466308594" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1077">15K</tspan><title>15K</title></text><text id="SvgjsText1078" font-family="inherit" x="193.56932373046874" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1080">12K</tspan><title>12K</title></text><text id="SvgjsText1081" font-family="inherit" x="145.05199279785157" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1083">9K</tspan><title>9K</title></text><text id="SvgjsText1084" font-family="inherit" x="96.53466186523437" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1086">6K</tspan><title>6K</title></text><text id="SvgjsText1087" font-family="inherit" x="48.01733093261717" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1089">3K</tspan><title>3K</title></text><text id="SvgjsText1090" font-family="inherit" x="-0.5" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1092">0K</tspan><title>0K</title></text></g></g><g id="SvgjsG1110" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1111" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1112" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 129.906px; top: -11.4988px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">USA</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(62, 151, 255, 0.85);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Sessions: </span><span class="apexcharts-tooltip-text-y-value">12.478</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>       
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 27-->


     </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">       
        <!--begin::Chart widget 28-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">   
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">          
                <!--begin::Title-->     
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                <!--end::Title-->
                 
                <!--begin::Label-->  
                <span class="badge badge-light-success fs-base">                                
                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>    
                    2.2%
                </span>  
                <!--end::Label-->                            
            </div>
            <!--end::Heading-->

            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">Domain External Links</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">                
                <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>                             
            </button>

            
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
 
            <!--end::Menu-->         
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">                 
        <!--begin::Chart-->
        <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto" style="min-height: 315px;"><div id="apexchartsqo67zxke" class="apexcharts-canvas apexchartsqo67zxke apexcharts-theme-light" style="width: 383px; height: 300px;"><svg id="SvgjsSvg1113" width="383" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="383" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1141" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1192" class="apexcharts-yaxis" rel="0" transform="translate(27.53125, 0)"><g id="SvgjsG1193" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1195" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1196">250</tspan><title>250</title></text><text id="SvgjsText1198" font-family="inherit" x="20" y="89.08250000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1199">212.5</tspan><title>212.5</title></text><text id="SvgjsText1201" font-family="inherit" x="20" y="146.76500000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1202">175</tspan><title>175</title></text><text id="SvgjsText1204" font-family="inherit" x="20" y="204.44750000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1205">137.5</tspan><title>137.5</title></text><text id="SvgjsText1207" font-family="inherit" x="20" y="262.13" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1208">100</tspan><title>100</title></text></g></g><g id="SvgjsG1115" class="apexcharts-inner apexcharts-graphical" transform="translate(57.53125, 30)"><defs id="SvgjsDefs1114"><clipPath id="gridRectMaskqo67zxke"><rect id="SvgjsRect1118" width="300.02274322509766" height="246.73000000000002" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqo67zxke"></clipPath><clipPath id="nonForecastMaskqo67zxke"></clipPath><clipPath id="gridRectMarkerMaskqo67zxke"><rect id="SvgjsRect1119" width="297.02274322509766" height="234.73000000000002" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1124" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1125" stop-opacity="0.4" stop-color="rgba(114,57,234,0.4)" offset="0"></stop><stop id="SvgjsStop1126" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop><stop id="SvgjsStop1127" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1130" class="apexcharts-grid"><g id="SvgjsG1131" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1135" x1="0" y1="57.682500000000005" x2="293.02274322509766" y2="57.682500000000005" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1136" x1="0" y1="115.36500000000001" x2="293.02274322509766" y2="115.36500000000001" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1137" x1="0" y1="173.0475" x2="293.02274322509766" y2="173.0475" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1132" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1140" x1="0" y1="230.73000000000002" x2="293.02274322509766" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1139" x1="0" y1="1" x2="0" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1133" class="apexcharts-grid-borders"><line id="SvgjsLine1134" x1="0" y1="0" x2="293.02274322509766" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1138" x1="0" y1="230.73000000000002" x2="293.02274322509766" y2="230.73000000000002" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1120" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1121" class="apexcharts-series" zIndex="0" seriesName="Links" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1128" d="M0 230.73000000000002L0 92.29200000000003C0.3618000213589445 91.22842506868824 13.953463963099889 30.76400000000001 20.93019594464983 30.76400000000001C30.23250525338309 30.76400000000001 37.209237234933035 30.76400000000001 41.86039188929966 30.76400000000001C51.16270119803292 61.52800000000002 58.139433179582866 76.91000000000003 62.790587833949495 76.91000000000003C72.09289714268274 76.91000000000003 79.06962912423269 76.91000000000003 83.72078377859933 76.91000000000003C93.02309308733258 87.16466666666668 99.99982506888253 92.29200000000003 104.65097972324916 92.29200000000003C113.95328903198242 92.29200000000003 120.93002101353235 92.29200000000003 125.58117566789899 92.29200000000003C134.88348497663225 82.03733333333332 141.8602169581822 76.91000000000003 146.51137161254883 76.91000000000003C155.81368092128207 76.91000000000003 162.79041290283203 76.91000000000003 167.44156755719865 76.91000000000003C176.7438768659319 56.400666666666666 183.72060884748183 46.146000000000015 188.37176350184848 46.146000000000015C197.67407281058178 46.146000000000015 204.65080479213174 46.146000000000015 209.30195944649833 46.146000000000015C218.6042687552316 66.65533333333337 225.5810007367815 76.91000000000003 230.23215539114815 76.91000000000003C239.53446469988143 76.91000000000003 246.51119668143136 76.91000000000003 251.16235133579798 76.91000000000003C260.46466064453125 66.65533333333337 267.4413926260812 61.52800000000002 272.09254728044783 61.52800000000002C283.7204339163644 61.52800000000002 290.6971658979144 61.52800000000002 293.02274322509766 61.52800000000002C293.02274322509766 61.52800000000002 293.02274322509766 230.73000000000002 293.02274322509766 230.73000000000002C293.02274322509766 230.73000000000002 0 230.73000000000002 0 230.73000000000002M0 92.29200000000003C0 92.29200000000003 0 92.29200000000003 0 92.29200000000003 " fill="url(#SvgjsLinearGradient1124)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqo67zxke)" pathTo="M 0 230.73000000000002 L 0 92.29200000000003C0.3618000213589444, 91.22842506868824, 13.953463963099889, 30.76400000000001, 20.93019594464983, 30.76400000000001Q34.88365990774972, 30.76400000000001, 41.86039188929966, 30.76400000000001Q55.81385585239955, 76.91000000000003, 62.790587833949495, 76.91000000000003Q76.74405179704938, 76.91000000000003, 83.72078377859933, 76.91000000000003Q97.67424774169922, 92.29200000000003, 104.65097972324916, 92.29200000000003Q118.60444368634904, 92.29200000000003, 125.58117566789899, 92.29200000000003Q139.5346396309989, 76.91000000000003, 146.51137161254883, 76.91000000000003Q160.46483557564872, 76.91000000000003, 167.44156755719865, 76.91000000000003Q181.39503152029852, 46.146000000000015, 188.37176350184848, 46.146000000000015Q202.3252274649484, 46.146000000000015, 209.30195944649833, 46.146000000000015Q223.25542340959822, 76.91000000000003, 230.23215539114815, 76.91000000000003Q244.18561935424805, 76.91000000000003, 251.16235133579798, 76.91000000000003Q265.11581529889787, 61.52800000000002, 272.09254728044783, 61.52800000000002Q289.5343772343227, 61.52800000000002, 293.02274322509766, 61.52800000000002 L 293.02274322509766 230.73000000000002 L 0 230.73000000000002M 0 92.29200000000003z" pathFrom="M -1 384.55000000000007 L -1 384.55000000000007 L 20.93019594464983 384.55000000000007 L 41.86039188929966 384.55000000000007 L 62.790587833949495 384.55000000000007 L 83.72078377859933 384.55000000000007 L 104.65097972324916 384.55000000000007 L 125.58117566789899 384.55000000000007 L 146.51137161254883 384.55000000000007 L 167.44156755719865 384.55000000000007 L 188.37176350184848 384.55000000000007 L 209.30195944649833 384.55000000000007 L 230.23215539114815 384.55000000000007 L 251.16235133579798 384.55000000000007 L 272.09254728044783 384.55000000000007 L 293.02274322509766 384.55000000000007"></path><path id="SvgjsPath1129" d="M0 92.29200000000003C0.3618000213589445 91.22842506868824 13.953463963099889 30.76400000000001 20.93019594464983 30.76400000000001C30.23250525338309 30.76400000000001 37.209237234933035 30.76400000000001 41.86039188929966 30.76400000000001C51.16270119803292 61.52800000000002 58.139433179582866 76.91000000000003 62.790587833949495 76.91000000000003C72.09289714268274 76.91000000000003 79.06962912423269 76.91000000000003 83.72078377859933 76.91000000000003C93.02309308733258 87.16466666666668 99.99982506888253 92.29200000000003 104.65097972324916 92.29200000000003C113.95328903198242 92.29200000000003 120.93002101353235 92.29200000000003 125.58117566789899 92.29200000000003C134.88348497663225 82.03733333333332 141.8602169581822 76.91000000000003 146.51137161254883 76.91000000000003C155.81368092128207 76.91000000000003 162.79041290283203 76.91000000000003 167.44156755719865 76.91000000000003C176.7438768659319 56.400666666666666 183.72060884748183 46.146000000000015 188.37176350184848 46.146000000000015C197.67407281058178 46.146000000000015 204.65080479213174 46.146000000000015 209.30195944649833 46.146000000000015C218.6042687552316 66.65533333333337 225.5810007367815 76.91000000000003 230.23215539114815 76.91000000000003C239.53446469988143 76.91000000000003 246.51119668143136 76.91000000000003 251.16235133579798 76.91000000000003C260.46466064453125 66.65533333333337 267.4413926260812 61.52800000000002 272.09254728044783 61.52800000000002C283.7204339163644 61.52800000000002 290.6971658979144 61.52800000000002 293.02274322509766 61.52800000000002C293.02274322509766 61.52800000000002 293.02274322509766 61.52800000000002 293.02274322509766 61.52800000000002 " fill="none" fill-opacity="1" stroke="#7239ea" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqo67zxke)" pathTo="M 0 92.29200000000003C0.3618000213589444, 91.22842506868824, 13.953463963099889, 30.76400000000001, 20.93019594464983, 30.76400000000001Q34.88365990774972, 30.76400000000001, 41.86039188929966, 30.76400000000001Q55.81385585239955, 76.91000000000003, 62.790587833949495, 76.91000000000003Q76.74405179704938, 76.91000000000003, 83.72078377859933, 76.91000000000003Q97.67424774169922, 92.29200000000003, 104.65097972324916, 92.29200000000003Q118.60444368634904, 92.29200000000003, 125.58117566789899, 92.29200000000003Q139.5346396309989, 76.91000000000003, 146.51137161254883, 76.91000000000003Q160.46483557564872, 76.91000000000003, 167.44156755719865, 76.91000000000003Q181.39503152029852, 46.146000000000015, 188.37176350184848, 46.146000000000015Q202.3252274649484, 46.146000000000015, 209.30195944649833, 46.146000000000015Q223.25542340959822, 76.91000000000003, 230.23215539114815, 76.91000000000003Q244.18561935424805, 76.91000000000003, 251.16235133579798, 76.91000000000003Q265.11581529889787, 61.52800000000002, 272.09254728044783, 61.52800000000002Q289.5343772343227, 61.52800000000002, 293.02274322509766, 61.52800000000002" pathFrom="M -1 384.55000000000007 L -1 384.55000000000007 L 20.93019594464983 384.55000000000007 L 41.86039188929966 384.55000000000007 L 62.790587833949495 384.55000000000007 L 83.72078377859933 384.55000000000007 L 104.65097972324916 384.55000000000007 L 125.58117566789899 384.55000000000007 L 146.51137161254883 384.55000000000007 L 167.44156755719865 384.55000000000007 L 188.37176350184848 384.55000000000007 L 209.30195944649833 384.55000000000007 L 230.23215539114815 384.55000000000007 L 251.16235133579798 384.55000000000007 L 272.09254728044783 384.55000000000007 L 293.02274322509766 384.55000000000007" fill-rule="evenodd"></path><g id="SvgjsG1122" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1212" r="0" cx="0" cy="0" class="apexcharts-marker wxn7v2ew6 no-pointer-events" stroke="#7239ea" fill="#7239ea" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1123" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1142" x1="0" y1="0" x2="0" y2="230.73000000000002" stroke="#7239ea" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="230.73000000000002" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1143" x1="0" y1="0" x2="293.02274322509766" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1144" x1="0" y1="0" x2="293.02274322509766" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1145" class="apexcharts-xaxis" transform="translate(20, 0)"><g id="SvgjsG1146" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1148" font-family="inherit" x="0" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1149">May 04</tspan><title>May 04</title></text><text id="SvgjsText1151" font-family="inherit" x="20.93019594464983" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1152"></tspan><title></title></text><text id="SvgjsText1154" font-family="inherit" x="41.86039188929966" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1155"></tspan><title></title></text><text id="SvgjsText1157" font-family="inherit" x="62.7905878339495" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1158"></tspan><title></title></text><text id="SvgjsText1160" font-family="inherit" x="83.72078377859933" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1161">May 10</tspan><title>May 10</title></text><text id="SvgjsText1163" font-family="inherit" x="104.65097972324915" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1164"></tspan><title></title></text><text id="SvgjsText1166" font-family="inherit" x="125.58117566789898" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1167"></tspan><title></title></text><text id="SvgjsText1169" font-family="inherit" x="146.5113716125488" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1170"></tspan><title></title></text><text id="SvgjsText1172" font-family="inherit" x="167.44156755719862" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1173">May 18</tspan><title>May 18</title></text><text id="SvgjsText1175" font-family="inherit" x="188.37176350184845" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1176"></tspan><title></title></text><text id="SvgjsText1178" font-family="inherit" x="209.30195944649827" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1179"></tspan><title></title></text><text id="SvgjsText1181" font-family="inherit" x="230.2321553911481" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1182"></tspan><title></title></text><text id="SvgjsText1184" font-family="inherit" x="251.16235133579792" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1185">May 26</tspan><title>May 26</title></text><text id="SvgjsText1187" font-family="inherit" x="272.0925472804477" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1188"></tspan><title></title></text><text id="SvgjsText1190" font-family="inherit" x="293.02274322509754" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1191"></tspan><title></title></text></g></g><g id="SvgjsG1209" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1210" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1211" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1213" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1214" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        <!--end::Chart-->   
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 28-->


     </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">
        
<!--begin::List widget 9-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
                    
            <!--begin::Statistics-->
            <div class="m-0">   
                <!--begin::Heading-->
                <div class="d-flex align-items-center mb-2">          
                    <!--begin::Title-->     
                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                    <!--end::Title-->

                                            <!--begin::Label-->  
                        <span class="badge badge-light-success fs-base">                                
                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>     
                            2.2%
                        </span>  
                        <!--end::Label-->            
                                  
                </div>
                <!--end::Heading-->

                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-500">Visits by Social Networks</span>
                <!--end::Description-->
            </div>
            <!--end::Statistics-->

            <!--begin::Toolbar-->
            <div class="card-toolbar">   
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">                
                    <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>                             
                </button>

                
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
 
                <!--end::Menu-->         
            </div>
            <!--end::Toolbar-->             
         
    </div>
    <!--end::Header-->        

    <!--begin::Body-->
    <div class="card-body card-body d-flex justify-content-between flex-column pt-3">                 
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->                    
                <img src="/metronic8/demo53/assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="">                     
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>   
                        <!--end::Desc-->                                     
                    </div>
                    <!--end::Content-->
                    
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center"> 
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                                    
                        <!--end::Number-->                        
                        
                        <!--begin::Info--> 
                        <div class="m-0">
                                                            <!--begin::Label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                    2.6%
                                </span>  
                                <!--end::Label-->   
                                                    
                        </div>  
                        <!--end::Info-->                  
                    </div>
                    <!--end::Wrapper-->  
                </div>
                <!--end::Section-->                              
            </div>
            <!--end::Item-->

             
                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->                    
                <img src="/metronic8/demo53/assets/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="">                     
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>   
                        <!--end::Desc-->                                     
                    </div>
                    <!--end::Content-->
                    
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center"> 
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>
                                                    
                        <!--end::Number-->                        
                        
                        <!--begin::Info--> 
                        <div class="m-0">
                                                            <!--begin::Label--> 
                                <span class="badge badge-light-danger fs-base">                           
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>                             
                                    0.4%
                                </span>  
                                <!--end::Label-->               
                                                    
                        </div>  
                        <!--end::Info-->                  
                    </div>
                    <!--end::Wrapper-->  
                </div>
                <!--end::Section-->                              
            </div>
            <!--end::Item-->

             
                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->                    
                <img src="/metronic8/demo53/assets/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="">                     
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>   
                        <!--end::Desc-->                                     
                    </div>
                    <!--end::Content-->
                    
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center"> 
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                    
                        <!--end::Number-->                        
                        
                        <!--begin::Info--> 
                        <div class="m-0">
                                                            <!--begin::Label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                    0.2%
                                </span>  
                                <!--end::Label-->   
                                                    
                        </div>  
                        <!--end::Info-->                  
                    </div>
                    <!--end::Wrapper-->  
                </div>
                <!--end::Section-->                              
            </div>
            <!--end::Item-->

             
                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->                    
                <img src="/metronic8/demo53/assets/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px" style="border-radius: 4px" alt="">                     
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>   
                        <!--end::Desc-->                                     
                    </div>
                    <!--end::Content-->
                    
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center"> 
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">978</span>
                                                    
                        <!--end::Number-->                        
                        
                        <!--begin::Info--> 
                        <div class="m-0">
                                                            <!--begin::Label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                    4.1%
                                </span>  
                                <!--end::Label-->   
                                                    
                        </div>  
                        <!--end::Info-->                  
                    </div>
                    <!--end::Wrapper-->  
                </div>
                <!--end::Section-->                              
            </div>
            <!--end::Item-->

             
                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->                    
                <img src="/metronic8/demo53/assets/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="">                     
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>   
                        <!--end::Desc-->                                     
                    </div>
                    <!--end::Content-->
                    
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center"> 
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>
                                                    
                        <!--end::Number-->                        
                        
                        <!--begin::Info--> 
                        <div class="m-0">
                                                            <!--begin::Label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                    8.3%
                                </span>  
                                <!--end::Label-->   
                                                    
                        </div>  
                        <!--end::Info-->                  
                    </div>
                    <!--end::Wrapper-->  
                </div>
                <!--end::Section-->                              
            </div>
            <!--end::Item-->

             
                        </div>
    <!--end::Body-->
</div>
<!--end::List widget 9-->


                                 </div>
    <!--end::Col-->
</div>
<!--end::Page title-->
     
        <!--begin::Toolbar wrapper--->
        
        <!--end::Toolbar wrapper--->     
     
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
    
            <!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report">
            </div>
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_customer_orders_export" class="d-none"><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>PDF</span></button> </div></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title--

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Daterangepicker-->
<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_customer_orders_daterangepicker">
<!--end::Daterangepicker-->

<!--begin::Filter-->
<div class="w-150px">
    <!--begin::Select2-->
    <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status" data-select2-id="select2-data-1-3t9w" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
        <option data-select2-id="select2-data-3-69po"></option>
        <option value="all">All</option>
        <option value="active">Active</option>
        <option value="locked">Locked</option>
        <option value="disabled">Disabled</option>
        <option value="banned">Banned</option>
    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-2-eu6o" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-mu89-container" aria-controls="select2-mu89-container"><span class="select2-selection__rendered" id="select2-mu89-container" role="textbox" aria-readonly="true" title="Status"><span class="select2-selection__placeholder">Status</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    <!--end::Select2-->
</div>
<!--end::Filter-->

<!--begin::Export dropdown-->
<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-outline ki-exit-up fs-2"></i>    Export Report
</button>
<!--begin::Menu-->
<div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">
            Copy to clipboard
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">
            Export as Excel
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">
            Export as CSV
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">
            Export as PDF
        </a>
    </div>
    <!--end::Menu item-->
 
</div>
<!--end::Menu-->
<!--end::Export dropdown-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<div id="kt_ecommerce_report_customer_orders_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_report_customer_orders_table">
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 166.062px;">Customer Name</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 218.969px;">Email</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 142.359px;">Status</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" rowspan="1" colspan="1" aria-label="Date Joined: activate to sort column ascending" style="width: 230.188px;">Date Joined</th><th class="text-end min-w-75px sorting" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" rowspan="1" colspan="1" aria-label="No. Orders: activate to sort column ascending" style="width: 107.719px;">No. Orders</th><th class="text-end min-w-75px sorting" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" rowspan="1" colspan="1" aria-label="No. Products: activate to sort column ascending" style="width: 133.266px;">No. Products</th><th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 142.438px;">Total</th></tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
                                
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                        <tr class="odd">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-06-20T17:20:00+07:00">
                    20 Jun 2023, 5:20 pm                </td>
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    13                </td>
                <td class="text-end">
                    $3866.00
                </td>
            </tr><tr class="even">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-info">Disabled</div>
                </td>
                <td data-order="2023-06-20T22:10:00+07:00">
                    20 Jun 2023, 10:10 pm                </td>
                <td class="text-end pe-0">
                    29                </td>
                <td class="text-end pe-0">
                    35                </td>
                <td class="text-end">
                    $4939.00
                </td>
            </tr><tr class="odd">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-11-10T17:30:00+07:00">
                    10 Nov 2023, 5:30 pm                </td>
                <td class="text-end pe-0">
                    12                </td>
                <td class="text-end pe-0">
                    20                </td>
                <td class="text-end">
                    $2549.00
                </td>
            </tr><tr class="even">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-04-15T18:05:00+07:00">
                    15 Apr 2023, 6:05 pm                </td>
                <td class="text-end pe-0">
                    63                </td>
                <td class="text-end pe-0">
                    73                </td>
                <td class="text-end">
                    $4705.00
                </td>
            </tr><tr class="odd">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-10-25T18:05:00+07:00">
                    25 Oct 2023, 6:05 pm                </td>
                <td class="text-end pe-0">
                    57                </td>
                <td class="text-end pe-0">
                    63                </td>
                <td class="text-end">
                    $3960.00
                </td>
            </tr><tr class="even">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-06-20T20:43:00+07:00">
                    20 Jun 2023, 8:43 pm                </td>
                <td class="text-end pe-0">
                    61                </td>
                <td class="text-end pe-0">
                    70                </td>
                <td class="text-end">
                    $2367.00
                </td>
            </tr><tr class="odd">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-04-15T17:20:00+07:00">
                    15 Apr 2023, 5:20 pm                </td>
                <td class="text-end pe-0">
                    61                </td>
                <td class="text-end pe-0">
                    76                </td>
                <td class="text-end">
                    $4057.00
                </td>
            </tr><tr class="even">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-02-21T17:30:00+07:00">
                    21 Feb 2023, 5:30 pm                </td>
                <td class="text-end pe-0">
                    48                </td>
                <td class="text-end pe-0">
                    56                </td>
                <td class="text-end">
                    $2282.00
                </td>
            </tr><tr class="odd">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-success">Active</div>
                </td>
                <td data-order="2023-07-25T17:30:00+07:00">
                    25 Jul 2023, 5:30 pm                </td>
                <td class="text-end pe-0">
                    41                </td>
                <td class="text-end pe-0">
                    47                </td>
                <td class="text-end">
                    $4019.00
                </td>
            </tr><tr class="even">
                <td>
                    <a href="/metronic8/demo53/../demo53/apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
                </td>
                <td>
                    <a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
                </td>
                <td>
                                        <div class="badge badge-light-info">Disabled</div>
                </td>
                <td data-order="2023-09-22T14:40:00+07:00">
                    22 Sep 2023, 2:40 pm                </td>
                <td class="text-end pe-0">
                    25                </td>
                <td class="text-end pe-0">
                    38                </td>
                <td class="text-end">
                    $289.00
                </td>
            </tr></tbody>
</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_ecommerce_report_customer_orders_table_length"><label><select name="kt_ecommerce_report_customer_orders_table_length" aria-controls="kt_ecommerce_report_customer_orders_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_report_customer_orders_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_ecommerce_report_customer_orders_table_previous"><a href="#" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="kt_ecommerce_report_customer_orders_table_next"><a href="#" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="6" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->        
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
  </body>
</html>