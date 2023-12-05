<?php

// File DASHBOARD adalah untuk menampilkan graph secara umum yaitu
/* Jumlah produk ikan(fish) yang dibeli oleh tiap kelompok Education
/* Jumlah produk daging(meat) yang dibeli oleh tiap kelompok Education
/* Rata rata penghasilan(income) yang dibeli oleh tiap kelompok Education
/* Jumlah produk ikan(fish) yang dibeli oleh tiap kelompok Marital_Status
/* Jumlah produk daging(meat) yang dibeli oleh tiap kelompok Marital_Status
/* Rata rata penghasilan(income) pada tiap kelompok Marital_Status
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
        Dashboard         
    </h1>
    <!--end::Title--> 
</div>
<!--end::Page title-->
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
    
            <!--begin::Row-->
<div class="row gx-5 gx-xl-10">  
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
    <div class="card-body pt-0 pb-1">                 
        <div id="kt_charts_widget_27" class="min-h-auto" style="min-height: 365px;"><div id="apexcharts6ahc4fp1h" class="apexcharts-canvas apexcharts6ahc4fp1h apexcharts-theme-light" style="width: 338px; height: 350px;"><svg id="SvgjsSvg1006" width="338" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="338" height="350"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 175px;"></div></foreignObject><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(72.40625, 30)"><defs id="SvgjsDefs1007"><linearGradient id="SvgjsLinearGradient1011" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1012" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1013" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1014" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask6ahc4fp1h"><rect id="SvgjsRect1016" width="246.08665466308594" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask6ahc4fp1h"></clipPath><clipPath id="nonForecastMask6ahc4fp1h"></clipPath><clipPath id="gridRectMarkerMask6ahc4fp1h"><rect id="SvgjsRect1017" width="246.08665466308594" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1015" width="0" height="277.494" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1011)" class="apexcharts-xcrosshairs" y2="277.494" filter="none" fill-opacity="0.9"></rect><line id="SvgjsLine1058" x1="0" y1="278.494" x2="0" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1060" x1="48.71733093261719" y1="278.494" x2="48.71733093261719" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1062" x1="97.43466186523438" y1="278.494" x2="97.43466186523438" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1064" x1="146.15199279785156" y1="278.494" x2="146.15199279785156" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1066" x1="194.86932373046875" y1="278.494" x2="194.86932373046875" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1068" x1="243.58665466308594" y1="278.494" x2="243.58665466308594" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1053" class="apexcharts-grid"><g id="SvgjsG1054" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1055" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1059" x1="48.71733093261719" y1="0" x2="48.71733093261719" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1061" x1="97.43466186523438" y1="0" x2="97.43466186523438" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1063" x1="146.15199279785156" y1="0" x2="146.15199279785156" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1065" x1="194.86932373046875" y1="0" x2="194.86932373046875" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1070" x1="0" y1="277.494" x2="242.08665466308594" y2="277.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1069" x1="0" y1="1" x2="0" y2="277.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1056" class="apexcharts-grid-borders"><line id="SvgjsLine1057" x1="0" y1="0" x2="0" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1067" x1="243.58665466308594" y1="0" x2="243.58665466308594" y2="277.494" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1018" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1019" class="apexcharts-series" rel="1" seriesName="Sessions" data:realIndex="0"><path id="SvgjsPath1024" d="M8.101 2.7494000000000014L193.48481845906574 2.7494000000000014C197.48481845906574 2.7494000000000014 201.48481845906574 6.749400000000001 201.48481845906574 10.749400000000001L201.48481845906574 44.7494C201.48481845906574 48.7494 197.48481845906574 52.7494 193.48481845906574 52.7494L8.101 52.7494C4.101000000000001 52.7494 0.101 48.7494 0.101 44.7494L0.101 10.749400000000001C0.101 6.749400000000001 4.101 2.7494000000000014 8.101 2.7494000000000014C8.101 2.7494000000000014 8.101 2.7494000000000014 8.101 2.7494000000000014 " fill="rgba(62,151,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6ahc4fp1h)" pathTo="M 8.101 2.7494000000000014 L 193.48481845906574 2.7494000000000014 C 197.48481845906574 2.7494000000000014 201.48481845906574 6.749400000000001 201.48481845906574 10.749400000000001 L 201.48481845906574 44.7494 C 201.48481845906574 48.7494 197.48481845906574 52.7494 193.48481845906574 52.7494 L 8.101 52.7494 C 4.101000000000001 52.7494 0.101 48.7494 0.101 44.7494 L 0.101 10.749400000000001 C 0.101 6.749400000000001 4.101 2.7494000000000014 8.101 2.7494000000000014 Z " pathFrom="M 0.101 2.7494000000000014 L 0.101 2.7494000000000014 L 0.101 52.7494 L 0.101 52.7494 L 0.101 52.7494 L 0.101 52.7494 L 0.101 52.7494 L 0.101 2.7494000000000014 Z" cy="58.248200000000004" cx="201.48381845906573" j="0" val="12.478" barHeight="50" barWidth="201.38381845906574"></path><path id="SvgjsPath1030" d="M8.101 58.248200000000004L113.88672640584309 58.248200000000004C117.88672640584309 58.248200000000004 121.88672640584309 62.2482 121.88672640584309 66.2482L121.88672640584309 100.2482C121.88672640584309 104.2482 117.88672640584309 108.2482 113.88672640584309 108.2482L8.101 108.2482C4.101000000000001 108.2482 0.101 104.2482 0.101 100.2482L0.101 66.2482C0.101 62.2482 4.101 58.248200000000004 8.101 58.248200000000004C8.101 58.248200000000004 8.101 58.248200000000004 8.101 58.248200000000004 " fill="rgba(241,65,108,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6ahc4fp1h)" pathTo="M 8.101 58.248200000000004 L 113.88672640584309 58.248200000000004 C 117.88672640584309 58.248200000000004 121.88672640584309 62.2482 121.88672640584309 66.2482 L 121.88672640584309 100.2482 C 121.88672640584309 104.2482 117.88672640584309 108.2482 113.88672640584309 108.2482 L 8.101 108.2482 C 4.101000000000001 108.2482 0.101 104.2482 0.101 100.2482 L 0.101 66.2482 C 0.101 62.2482 4.101 58.248200000000004 8.101 58.248200000000004 Z " pathFrom="M 0.101 58.248200000000004 L 0.101 58.248200000000004 L 0.101 108.2482 L 0.101 108.2482 L 0.101 108.2482 L 0.101 108.2482 L 0.101 108.2482 L 0.101 58.248200000000004 Z" cy="113.74700000000001" cx="121.88572640584309" j="1" val="7.546" barHeight="50" barWidth="121.78572640584309"></path><path id="SvgjsPath1036" d="M8.101 113.74700000000001L90.27520802103679 113.74700000000001C94.27520802103679 113.74700000000001 98.27520802103679 117.74700000000001 98.27520802103679 121.74700000000001L98.27520802103679 155.747C98.27520802103679 159.747 94.27520802103679 163.747 90.27520802103679 163.747L8.101 163.747C4.101000000000001 163.747 0.101 159.747 0.101 155.747L0.101 121.74700000000001C0.101 117.74700000000001 4.101 113.74700000000001 8.101 113.74700000000001C8.101 113.74700000000001 8.101 113.74700000000001 8.101 113.74700000000001 " fill="rgba(80,205,137,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6ahc4fp1h)" pathTo="M 8.101 113.74700000000001 L 90.27520802103679 113.74700000000001 C 94.27520802103679 113.74700000000001 98.27520802103679 117.74700000000001 98.27520802103679 121.74700000000001 L 98.27520802103679 155.747 C 98.27520802103679 159.747 94.27520802103679 163.747 90.27520802103679 163.747 L 8.101 163.747 C 4.101000000000001 163.747 0.101 159.747 0.101 155.747 L 0.101 121.74700000000001 C 0.101 117.74700000000001 4.101 113.74700000000001 8.101 113.74700000000001 Z " pathFrom="M 0.101 113.74700000000001 L 0.101 113.74700000000001 L 0.101 163.747 L 0.101 163.747 L 0.101 163.747 L 0.101 163.747 L 0.101 163.747 L 0.101 113.74700000000001 Z" cy="169.24580000000003" cx="98.27420802103678" j="2" val="6.083" barHeight="50" barWidth="98.17420802103679"></path><path id="SvgjsPath1042" d="M8.101 169.24580000000003L73.45825507710775 169.24580000000003C77.45825507710775 169.24580000000003 81.45825507710775 173.24580000000003 81.45825507710775 177.24580000000003L81.45825507710775 211.24580000000003C81.45825507710775 215.24580000000003 77.45825507710775 219.24580000000003 73.45825507710775 219.24580000000003L8.101 219.24580000000003C4.101000000000001 219.24580000000003 0.101 215.24580000000003 0.101 211.24580000000003L0.101 177.24580000000003C0.101 173.24580000000003 4.101 169.24580000000003 8.101 169.24580000000003C8.101 169.24580000000003 8.101 169.24580000000003 8.101 169.24580000000003 " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6ahc4fp1h)" pathTo="M 8.101 169.24580000000003 L 73.45825507710775 169.24580000000003 C 77.45825507710775 169.24580000000003 81.45825507710775 173.24580000000003 81.45825507710775 177.24580000000003 L 81.45825507710775 211.24580000000003 C 81.45825507710775 215.24580000000003 77.45825507710775 219.24580000000003 73.45825507710775 219.24580000000003 L 8.101 219.24580000000003 C 4.101000000000001 219.24580000000003 0.101 215.24580000000003 0.101 211.24580000000003 L 0.101 177.24580000000003 C 0.101 173.24580000000003 4.101 169.24580000000003 8.101 169.24580000000003 Z " pathFrom="M 0.101 169.24580000000003 L 0.101 169.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 219.24580000000003 L 0.101 169.24580000000003 Z" cy="224.74460000000005" cx="81.45725507710775" j="3" val="5.041" barHeight="50" barWidth="81.35725507710775"></path><path id="SvgjsPath1048" d="M8.101 224.74460000000005L63.43586757405599 224.74460000000005C67.43586757405599 224.74460000000005 71.43586757405599 228.74460000000005 71.43586757405599 232.74460000000005L71.43586757405599 266.74460000000005C71.43586757405599 270.74460000000005 67.43586757405599 274.74460000000005 63.43586757405599 274.74460000000005L8.101 274.74460000000005C4.101000000000001 274.74460000000005 0.101 270.74460000000005 0.101 266.74460000000005L0.101 232.74460000000005C0.101 228.74460000000005 4.101 224.74460000000005 8.101 224.74460000000005C8.101 224.74460000000005 8.101 224.74460000000005 8.101 224.74460000000005 " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6ahc4fp1h)" pathTo="M 8.101 224.74460000000005 L 63.43586757405599 224.74460000000005 C 67.43586757405599 224.74460000000005 71.43586757405599 228.74460000000005 71.43586757405599 232.74460000000005 L 71.43586757405599 266.74460000000005 C 71.43586757405599 270.74460000000005 67.43586757405599 274.74460000000005 63.43586757405599 274.74460000000005 L 8.101 274.74460000000005 C 4.101000000000001 274.74460000000005 0.101 270.74460000000005 0.101 266.74460000000005 L 0.101 232.74460000000005 C 0.101 228.74460000000005 4.101 224.74460000000005 8.101 224.74460000000005 Z " pathFrom="M 0.101 224.74460000000005 L 0.101 224.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 274.74460000000005 L 0.101 224.74460000000005 Z" cy="280.24340000000007" cx="71.43486757405599" j="4" val="4.42" barHeight="50" barWidth="71.33486757405599"></path><g id="SvgjsG1021" class="apexcharts-bar-goals-markers"><g id="SvgjsG1023" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6ahc4fp1h)"></g><g id="SvgjsG1029" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6ahc4fp1h)"></g><g id="SvgjsG1035" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6ahc4fp1h)"></g><g id="SvgjsG1041" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6ahc4fp1h)"></g><g id="SvgjsG1047" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6ahc4fp1h)"></g></g><g id="SvgjsG1022" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1020" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"><g id="SvgjsG1026" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1028" font-family="inherit" x="22.099999999999994" y="33.2494" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="22.099999999999994" cy="33.2494" style="font-family: inherit;">12,478</text></g><g id="SvgjsG1032" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1034" font-family="inherit" x="18.099999999999994" y="88.74820000000001" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="18.099999999999994" cy="88.74820000000001" style="font-family: inherit;">7,546</text></g><g id="SvgjsG1038" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1040" font-family="inherit" x="19.099999999999994" y="144.247" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="19.099999999999994" cy="144.247" style="font-family: inherit;">6,083</text></g><g id="SvgjsG1044" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1046" font-family="inherit" x="18.099999999999994" y="199.74580000000003" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="18.099999999999994" cy="199.74580000000003" style="font-family: inherit;">5,041</text></g><g id="SvgjsG1050" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1052" font-family="inherit" x="15.099999999999994" y="255.24460000000005" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="15.099999999999994" cy="255.24460000000005" style="font-family: inherit;">4,420</text></g></g></g><line id="SvgjsLine1071" x1="0" y1="0" x2="242.08665466308594" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1072" x1="0" y1="0" x2="242.08665466308594" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1093" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG1094" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(-51.90625, 0)"><text id="SvgjsText1096" font-family="inherit" x="0" y="32.27207272727273" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1097">USA</tspan><title>USA</title></text><text id="SvgjsText1099" font-family="inherit" x="0" y="87.77087272727273" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1100">India</tspan><title>India</title></text><text id="SvgjsText1102" font-family="inherit" x="0" y="143.26967272727273" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1103">Canada</tspan><title>Canada</title></text><text id="SvgjsText1105" font-family="inherit" x="0" y="198.76847272727275" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1106">Brasil</tspan><title>Brasil</title></text><text id="SvgjsText1108" font-family="inherit" x="0" y="254.26727272727277" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1109">France</tspan><title>France</title></text></g></g><g id="SvgjsG1073" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG1074" class="apexcharts-xaxis-texts-g" transform="translate(0, -9.333333333333334)"><text id="SvgjsText1075" font-family="inherit" x="242.08665466308594" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1077">15K</tspan><title>15K</title></text><text id="SvgjsText1078" font-family="inherit" x="193.56932373046874" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1080">12K</tspan><title>12K</title></text><text id="SvgjsText1081" font-family="inherit" x="145.05199279785157" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1083">9K</tspan><title>9K</title></text><text id="SvgjsText1084" font-family="inherit" x="96.53466186523437" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1086">6K</tspan><title>6K</title></text><text id="SvgjsText1087" font-family="inherit" x="48.01733093261717" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1089">3K</tspan><title>3K</title></text><text id="SvgjsText1090" font-family="inherit" x="-0.5" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#252f4a" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1092">0K</tspan><title>0K</title></text></g></g><g id="SvgjsG1110" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1111" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1112" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(62, 151, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>       
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
        <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto" style="min-height: 315px;"><div id="apexchartsvdlg2dw6" class="apexcharts-canvas apexchartsvdlg2dw6 apexcharts-theme-light" style="width: 383px; height: 300px;"><svg id="SvgjsSvg1113" width="383" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="383" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1141" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1192" class="apexcharts-yaxis" rel="0" transform="translate(27.53125, 0)"><g id="SvgjsG1193" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1195" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1196">250</tspan><title>250</title></text><text id="SvgjsText1198" font-family="inherit" x="20" y="89.08250000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1199">212.5</tspan><title>212.5</title></text><text id="SvgjsText1201" font-family="inherit" x="20" y="146.76500000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1202">175</tspan><title>175</title></text><text id="SvgjsText1204" font-family="inherit" x="20" y="204.44750000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1205">137.5</tspan><title>137.5</title></text><text id="SvgjsText1207" font-family="inherit" x="20" y="262.13" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1208">100</tspan><title>100</title></text></g></g><g id="SvgjsG1115" class="apexcharts-inner apexcharts-graphical" transform="translate(57.53125, 30)"><defs id="SvgjsDefs1114"><clipPath id="gridRectMaskvdlg2dw6"><rect id="SvgjsRect1118" width="300.02274322509766" height="246.73000000000002" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskvdlg2dw6"></clipPath><clipPath id="nonForecastMaskvdlg2dw6"></clipPath><clipPath id="gridRectMarkerMaskvdlg2dw6"><rect id="SvgjsRect1119" width="297.02274322509766" height="234.73000000000002" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1124" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1125" stop-opacity="0.4" stop-color="rgba(114,57,234,0.4)" offset="0"></stop><stop id="SvgjsStop1126" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop><stop id="SvgjsStop1127" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1130" class="apexcharts-grid"><g id="SvgjsG1131" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1135" x1="0" y1="57.682500000000005" x2="293.02274322509766" y2="57.682500000000005" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1136" x1="0" y1="115.36500000000001" x2="293.02274322509766" y2="115.36500000000001" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1137" x1="0" y1="173.0475" x2="293.02274322509766" y2="173.0475" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1132" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1140" x1="0" y1="230.73000000000002" x2="293.02274322509766" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1139" x1="0" y1="1" x2="0" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1133" class="apexcharts-grid-borders"><line id="SvgjsLine1134" x1="0" y1="0" x2="293.02274322509766" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1138" x1="0" y1="230.73000000000002" x2="293.02274322509766" y2="230.73000000000002" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1120" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1121" class="apexcharts-series" zIndex="0" seriesName="Links" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1128" d="M0 230.73000000000002L0 92.29200000000003C0.3618000213589445 91.22842506868824 13.953463963099889 30.76400000000001 20.93019594464983 30.76400000000001C30.23250525338309 30.76400000000001 37.209237234933035 30.76400000000001 41.86039188929966 30.76400000000001C51.16270119803292 61.52800000000002 58.139433179582866 76.91000000000003 62.790587833949495 76.91000000000003C72.09289714268274 76.91000000000003 79.06962912423269 76.91000000000003 83.72078377859933 76.91000000000003C93.02309308733258 87.16466666666668 99.99982506888253 92.29200000000003 104.65097972324916 92.29200000000003C113.95328903198242 92.29200000000003 120.93002101353235 92.29200000000003 125.58117566789899 92.29200000000003C134.88348497663225 82.03733333333332 141.8602169581822 76.91000000000003 146.51137161254883 76.91000000000003C155.81368092128207 76.91000000000003 162.79041290283203 76.91000000000003 167.44156755719865 76.91000000000003C176.7438768659319 56.400666666666666 183.72060884748183 46.146000000000015 188.37176350184848 46.146000000000015C197.67407281058178 46.146000000000015 204.65080479213174 46.146000000000015 209.30195944649833 46.146000000000015C218.6042687552316 66.65533333333337 225.5810007367815 76.91000000000003 230.23215539114815 76.91000000000003C239.53446469988143 76.91000000000003 246.51119668143136 76.91000000000003 251.16235133579798 76.91000000000003C260.46466064453125 66.65533333333337 267.4413926260812 61.52800000000002 272.09254728044783 61.52800000000002C283.7204339163644 61.52800000000002 290.6971658979144 61.52800000000002 293.02274322509766 61.52800000000002C293.02274322509766 61.52800000000002 293.02274322509766 230.73000000000002 293.02274322509766 230.73000000000002C293.02274322509766 230.73000000000002 0 230.73000000000002 0 230.73000000000002M0 92.29200000000003C0 92.29200000000003 0 92.29200000000003 0 92.29200000000003 " fill="url(#SvgjsLinearGradient1124)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvdlg2dw6)" pathTo="M 0 230.73000000000002 L 0 92.29200000000003C0.3618000213589444, 91.22842506868824, 13.953463963099889, 30.76400000000001, 20.93019594464983, 30.76400000000001Q34.88365990774972, 30.76400000000001, 41.86039188929966, 30.76400000000001Q55.81385585239955, 76.91000000000003, 62.790587833949495, 76.91000000000003Q76.74405179704938, 76.91000000000003, 83.72078377859933, 76.91000000000003Q97.67424774169922, 92.29200000000003, 104.65097972324916, 92.29200000000003Q118.60444368634904, 92.29200000000003, 125.58117566789899, 92.29200000000003Q139.5346396309989, 76.91000000000003, 146.51137161254883, 76.91000000000003Q160.46483557564872, 76.91000000000003, 167.44156755719865, 76.91000000000003Q181.39503152029852, 46.146000000000015, 188.37176350184848, 46.146000000000015Q202.3252274649484, 46.146000000000015, 209.30195944649833, 46.146000000000015Q223.25542340959822, 76.91000000000003, 230.23215539114815, 76.91000000000003Q244.18561935424805, 76.91000000000003, 251.16235133579798, 76.91000000000003Q265.11581529889787, 61.52800000000002, 272.09254728044783, 61.52800000000002Q289.5343772343227, 61.52800000000002, 293.02274322509766, 61.52800000000002 L 293.02274322509766 230.73000000000002 L 0 230.73000000000002M 0 92.29200000000003z" pathFrom="M -1 384.55000000000007 L -1 384.55000000000007 L 20.93019594464983 384.55000000000007 L 41.86039188929966 384.55000000000007 L 62.790587833949495 384.55000000000007 L 83.72078377859933 384.55000000000007 L 104.65097972324916 384.55000000000007 L 125.58117566789899 384.55000000000007 L 146.51137161254883 384.55000000000007 L 167.44156755719865 384.55000000000007 L 188.37176350184848 384.55000000000007 L 209.30195944649833 384.55000000000007 L 230.23215539114815 384.55000000000007 L 251.16235133579798 384.55000000000007 L 272.09254728044783 384.55000000000007 L 293.02274322509766 384.55000000000007"></path><path id="SvgjsPath1129" d="M0 92.29200000000003C0.3618000213589445 91.22842506868824 13.953463963099889 30.76400000000001 20.93019594464983 30.76400000000001C30.23250525338309 30.76400000000001 37.209237234933035 30.76400000000001 41.86039188929966 30.76400000000001C51.16270119803292 61.52800000000002 58.139433179582866 76.91000000000003 62.790587833949495 76.91000000000003C72.09289714268274 76.91000000000003 79.06962912423269 76.91000000000003 83.72078377859933 76.91000000000003C93.02309308733258 87.16466666666668 99.99982506888253 92.29200000000003 104.65097972324916 92.29200000000003C113.95328903198242 92.29200000000003 120.93002101353235 92.29200000000003 125.58117566789899 92.29200000000003C134.88348497663225 82.03733333333332 141.8602169581822 76.91000000000003 146.51137161254883 76.91000000000003C155.81368092128207 76.91000000000003 162.79041290283203 76.91000000000003 167.44156755719865 76.91000000000003C176.7438768659319 56.400666666666666 183.72060884748183 46.146000000000015 188.37176350184848 46.146000000000015C197.67407281058178 46.146000000000015 204.65080479213174 46.146000000000015 209.30195944649833 46.146000000000015C218.6042687552316 66.65533333333337 225.5810007367815 76.91000000000003 230.23215539114815 76.91000000000003C239.53446469988143 76.91000000000003 246.51119668143136 76.91000000000003 251.16235133579798 76.91000000000003C260.46466064453125 66.65533333333337 267.4413926260812 61.52800000000002 272.09254728044783 61.52800000000002C283.7204339163644 61.52800000000002 290.6971658979144 61.52800000000002 293.02274322509766 61.52800000000002C293.02274322509766 61.52800000000002 293.02274322509766 61.52800000000002 293.02274322509766 61.52800000000002 " fill="none" fill-opacity="1" stroke="#7239ea" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvdlg2dw6)" pathTo="M 0 92.29200000000003C0.3618000213589444, 91.22842506868824, 13.953463963099889, 30.76400000000001, 20.93019594464983, 30.76400000000001Q34.88365990774972, 30.76400000000001, 41.86039188929966, 30.76400000000001Q55.81385585239955, 76.91000000000003, 62.790587833949495, 76.91000000000003Q76.74405179704938, 76.91000000000003, 83.72078377859933, 76.91000000000003Q97.67424774169922, 92.29200000000003, 104.65097972324916, 92.29200000000003Q118.60444368634904, 92.29200000000003, 125.58117566789899, 92.29200000000003Q139.5346396309989, 76.91000000000003, 146.51137161254883, 76.91000000000003Q160.46483557564872, 76.91000000000003, 167.44156755719865, 76.91000000000003Q181.39503152029852, 46.146000000000015, 188.37176350184848, 46.146000000000015Q202.3252274649484, 46.146000000000015, 209.30195944649833, 46.146000000000015Q223.25542340959822, 76.91000000000003, 230.23215539114815, 76.91000000000003Q244.18561935424805, 76.91000000000003, 251.16235133579798, 76.91000000000003Q265.11581529889787, 61.52800000000002, 272.09254728044783, 61.52800000000002Q289.5343772343227, 61.52800000000002, 293.02274322509766, 61.52800000000002" pathFrom="M -1 384.55000000000007 L -1 384.55000000000007 L 20.93019594464983 384.55000000000007 L 41.86039188929966 384.55000000000007 L 62.790587833949495 384.55000000000007 L 83.72078377859933 384.55000000000007 L 104.65097972324916 384.55000000000007 L 125.58117566789899 384.55000000000007 L 146.51137161254883 384.55000000000007 L 167.44156755719865 384.55000000000007 L 188.37176350184848 384.55000000000007 L 209.30195944649833 384.55000000000007 L 230.23215539114815 384.55000000000007 L 251.16235133579798 384.55000000000007 L 272.09254728044783 384.55000000000007 L 293.02274322509766 384.55000000000007" fill-rule="evenodd"></path><g id="SvgjsG1122" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1212" r="0" cx="0" cy="0" class="apexcharts-marker w9ctke9in no-pointer-events" stroke="#7239ea" fill="#7239ea" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1123" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1142" x1="0" y1="0" x2="0" y2="230.73000000000002" stroke="#7239ea" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="230.73000000000002" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1143" x1="0" y1="0" x2="293.02274322509766" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1144" x1="0" y1="0" x2="293.02274322509766" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1145" class="apexcharts-xaxis" transform="translate(20, 0)"><g id="SvgjsG1146" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1148" font-family="inherit" x="0" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1149">May 04</tspan><title>May 04</title></text><text id="SvgjsText1151" font-family="inherit" x="20.93019594464983" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1152"></tspan><title></title></text><text id="SvgjsText1154" font-family="inherit" x="41.86039188929966" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1155"></tspan><title></title></text><text id="SvgjsText1157" font-family="inherit" x="62.7905878339495" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1158"></tspan><title></title></text><text id="SvgjsText1160" font-family="inherit" x="83.72078377859933" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1161">May 10</tspan><title>May 10</title></text><text id="SvgjsText1163" font-family="inherit" x="104.65097972324915" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1164"></tspan><title></title></text><text id="SvgjsText1166" font-family="inherit" x="125.58117566789898" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1167"></tspan><title></title></text><text id="SvgjsText1169" font-family="inherit" x="146.5113716125488" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1170"></tspan><title></title></text><text id="SvgjsText1172" font-family="inherit" x="167.44156755719862" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1173">May 18</tspan><title>May 18</title></text><text id="SvgjsText1175" font-family="inherit" x="188.37176350184845" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1176"></tspan><title></title></text><text id="SvgjsText1178" font-family="inherit" x="209.30195944649827" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1179"></tspan><title></title></text><text id="SvgjsText1181" font-family="inherit" x="230.2321553911481" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1182"></tspan><title></title></text><text id="SvgjsText1184" font-family="inherit" x="251.16235133579792" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1185">May 26</tspan><title>May 26</title></text><text id="SvgjsText1187" font-family="inherit" x="272.0925472804477" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1188"></tspan><title></title></text><text id="SvgjsText1190" font-family="inherit" x="293.02274322509754" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1191"></tspan><title></title></text></g></g><g id="SvgjsG1209" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1210" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1211" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1213" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1214" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
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
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-6 mb-5 mb-xl-10">
        
<!--begin::Table widget 9-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-5">        
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Top Referral Sources</span>
            
            <span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <a href="#" class="btn btn-sm btn-light">PDF Report</a>             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
	<div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold border-0 text-gray-500">                                    
                        <th class="min-w-150px" colspan="2">CAMPAIGN</th>
                        <th class="min-w-150px text-end pe-0" colspan="2">SESSIONS</th>
                        <th class="text-end min-w-150px" colspan="2">CONVERSION RATE</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Google</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6 me-1">1,256</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6 me-3">23.63%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Facebook</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6 me-1">446</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6 me-3">12.45%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-57.02%</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Bol.com</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6 me-1">67</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6 me-3">73.63%</span>

                                    <span class="text-success min-w-60px d-block text-end fw-bold fs-6">+28.73%</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Dutchnews.nl</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6 me-1">2,136</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6 me-3">3.67%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-12.29%</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Stackoverflow</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6 me-1">945</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6 me-3">25.03%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Themeforest</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6 me-1">237</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6 me-3">36.52%</span>

                                    <span class="text-success min-w-60px d-block text-end fw-bold fs-6">+3.06%</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
	</div>
	<!--end::Body-->
</div>
<!--end::Table Widget 9-->    </div>
    <!--end::Col-->

     <!--begin::Col-->
     <div class="col-xl-6 mb-5 mb-xl-10">
        
<!--begin::Table widget 10-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-5">        
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Top Performing Pages</span>
            
            <span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <a href="#" class="btn btn-sm btn-light">PDF Report</a>             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
	<div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold border-0 text-gray-500">                                    
                        <th class="min-w-200px" colspan="2">LANDING PAGE</th>
                        <th class="min-w-100px text-end pe-0" colspan="2">CLICKS</th>
                        <th class="text-end min-w-100px" colspan="2">AVG. POSITION</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Index</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6">1,256</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6">2.63</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1.35</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Products</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6">446</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6">1.45</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">0.32</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                        <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">devs.keenthemes.com</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6">67</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6">7.63</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+8.73</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">studio.keenthemes.com</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6">2,136</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6">3.67</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-2.29</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">graphics.keenthemes.com</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6">945</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6">5.03</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-0.35</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Licenses</a>                                            
                            </td>

                            <td class="pe-0" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-800 fw-bold fs-6">237</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>                                                              
                                </div>                                                          
                            </td>

                            <td class="" colspan="2">                                
                                <div class="d-flex justify-content-end">                                
                                    <span class="text-gray-900 fw-bold fs-6">3.52</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+3.06</span>                                                              
                                </div>                                                          
                            </td>
                        </tr>
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
	</div>
	<!--end::Body-->
</div>
<!--end::Table Widget 10-->    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-6 mb-5 mb-xl-10">
        <!--begin::Chart widget 15-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-900">Author Sales</span>

			<span class="text-gray-500 pt-2 fw-semibold fs-6">Statistics by Countries</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar"> 
                            <div class="card-toolbar">   
                    <a href="#" class="btn btn-sm btn-light">PDF Report</a>             
                </div>
             

            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Remove
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Mute
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
 
            <!--end::Menu-->             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-5">
        <!--begin::Chart container-->
        <div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-300px"><div style="position: relative; width: 100%; height: 100%;"><div aria-hidden="true" style="position: absolute; width: 553px; height: 300px;"><div><canvas class="am5-layer-0" width="553" height="300" style="position: absolute; top: 0px; left: 0px; width: 553px; height: 300px;"></canvas><canvas class="am5-layer-30" width="553" height="300" style="position: absolute; top: 0px; left: 0px; width: 553px; height: 300px;"></canvas></div></div><div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 553px; height: 300px;"></div><div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div><div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 553px; height: 300px;"><div role="button" aria-label="Zoom Out" aria-hidden="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div></div><div class="am5-tooltip-container"></div></div></div>       
        <!--end::Chart container--> 
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 15-->
    </div>
    <!--end::Col-->
    
     <!--begin::Col-->
     <div class="col-xl-6 mb-5 mb-xl-10">
        
<!--begin::Table widget 11-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-5">        
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Top Queries by Clicks</span>
            
            <span class="text-gray-500 pt-2 fw-semibold fs-6">Counted in Millions</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <a href="#" class="btn btn-sm btn-light">PDF Report</a>             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex justify-content-between flex-column py-3">
        <!--begin::Block-->
        <div class="m-0"></div>
        <!--end::Block-->

        <!--begin::Table container-->
        <div class="table-responsive mb-n2">
            <!--begin::Table-->
            <table class="table table-row-dashed gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold border-0 text-gray-500">                                    
                        <th class="min-w-300px">KEYWORD</th>
                        <th class="min-w-100px">CLICKS</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Buy phone online</a>                                            
                            </td>
                            <td class="d-flex align-items-center border-0">                                
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span> 

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 166px" aria-valuenow="166" aria-valuemin="0" aria-valuemax="166px"></div>
                                </div>                                 
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Top 10 Earbuds</a>                                            
                            </td>
                            <td class="d-flex align-items-center border-0">                                
                                <span class="fw-bold text-gray-800 fs-6 me-3">238</span> 

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 158px" aria-valuenow="158" aria-valuemin="0" aria-valuemax="158px"></div>
                                </div>                                 
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Cyber Monday</a>                                            
                            </td>
                            <td class="d-flex align-items-center border-0">                                
                                <span class="fw-bold text-gray-800 fs-6 me-3">189</span> 

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 129px" aria-valuenow="129" aria-valuemin="0" aria-valuemax="129px"></div>
                                </div>                                 
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">OLED TV in Amsterdam</a>                                            
                            </td>
                            <td class="d-flex align-items-center border-0">                                
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span> 

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 112px" aria-valuenow="112" aria-valuemin="0" aria-valuemax="112px"></div>
                                </div>                                 
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Macbook M1</a>                                            
                            </td>
                            <td class="d-flex align-items-center border-0">                                
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span> 

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 107px" aria-valuenow="107" aria-valuemin="0" aria-valuemax="107px"></div>
                                </div>                                 
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Best noise cancelation headsets</a>                                            
                            </td>
                            <td class="d-flex align-items-center border-0">                                
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span> 

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 74px" aria-valuenow="74" aria-valuemin="0" aria-valuemax="74px"></div>
                                </div>                                 
                            </td>
                        </tr>
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Body-->
</div>
<!--end::Table Widget 11-->





    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">  
    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-10">       
        <!--begin::Chart widget 29-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">   
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">          
                <!--begin::Title-->     
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">7,9</span>
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
            <span class="fs-6 fw-semibold text-gray-500">Avarage Position</span>
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
    <div class="card-body d-flex align-items-end p-0">                 
        <!--begin::Chart-->
        <div id="kt_charts_widget_29" class="h-300px w-100 min-h-auto ps-7 pe-0 mb-5" style="min-height: 315px;"><div id="apexchartszwntqo6v" class="apexcharts-canvas apexchartszwntqo6v apexcharts-theme-light" style="width: 373.25px; height: 300px;"><svg id="SvgjsSvg1215" width="373.25" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="373.25" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1243" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1294" class="apexcharts-yaxis" rel="0" transform="translate(19.53125, 0)"><g id="SvgjsG1295" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1297" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1298">10</tspan><title>10</title></text><text id="SvgjsText1300" font-family="inherit" x="20" y="89.08250000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1301">7.75</tspan><title>7.75</title></text><text id="SvgjsText1303" font-family="inherit" x="20" y="146.76500000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1304">5.5</tspan><title>5.5</title></text><text id="SvgjsText1306" font-family="inherit" x="20" y="204.44750000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1307">3.25</tspan><title>3.25</title></text><text id="SvgjsText1309" font-family="inherit" x="20" y="262.13" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1310">1</tspan><title>1</title></text></g></g><g id="SvgjsG1217" class="apexcharts-inner apexcharts-graphical" transform="translate(49.53125, 30)"><defs id="SvgjsDefs1216"><clipPath id="gridRectMaskzwntqo6v"><rect id="SvgjsRect1220" width="300.5483093261719" height="246.73000000000002" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzwntqo6v"></clipPath><clipPath id="nonForecastMaskzwntqo6v"></clipPath><clipPath id="gridRectMarkerMaskzwntqo6v"><rect id="SvgjsRect1221" width="297.5483093261719" height="234.73000000000002" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1226" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1227" stop-opacity="0.4" stop-color="rgba(246,192,0,0.4)" offset="0"></stop><stop id="SvgjsStop1228" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop><stop id="SvgjsStop1229" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1232" class="apexcharts-grid"><g id="SvgjsG1233" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1237" x1="0" y1="57.682500000000005" x2="293.5483093261719" y2="57.682500000000005" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1238" x1="0" y1="115.36500000000001" x2="293.5483093261719" y2="115.36500000000001" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1239" x1="0" y1="173.0475" x2="293.5483093261719" y2="173.0475" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1234" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1242" x1="0" y1="230.73000000000002" x2="293.5483093261719" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1241" x1="0" y1="1" x2="0" y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1235" class="apexcharts-grid-borders"><line id="SvgjsLine1236" x1="0" y1="0" x2="293.5483093261719" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1240" x1="0" y1="230.73000000000002" x2="293.5483093261719" y2="230.73000000000002" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1222" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1223" class="apexcharts-series" zIndex="0" seriesName="Position" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1230" d="M0 230.73000000000002L0 153.82C0.1809479929479978 153.04565976924522 13.978490920293897 64.09166666666664 20.967736380440847 64.09166666666664C30.28673032730345 64.09166666666664 37.2759757874504 64.09166666666664 41.935472760881694 64.09166666666664C51.2544667077443 89.7283333333333 58.243712167891246 102.54666666666665 62.90320914132254 102.54666666666665C72.22220308818514 102.54666666666665 79.21144854833209 102.54666666666665 83.87094552176339 102.54666666666665C93.189939468626 136.7288888888889 100.17918492877294 153.82 104.83868190220424 153.82C114.15767584906683 153.82 121.14692130921378 153.82 125.80641828264508 153.82C135.12541222950767 119.63777777777776 142.11465768965465 102.54666666666665 146.77415466308594 102.54666666666665C156.09314860994854 102.54666666666665 163.0823940700955 102.54666666666665 167.74189104352678 102.54666666666665C177.06088499038938 68.36444444444442 184.05013045053633 51.27333333333331 188.70962742396762 51.27333333333331C198.02862137083025 51.27333333333331 205.0178668309772 51.27333333333331 209.6773638044085 51.27333333333331C218.9963577512711 85.45555555555552 225.98560321141804 102.54666666666665 230.64510018484933 102.54666666666665C239.96409413171193 102.54666666666665 246.95333959185888 102.54666666666665 251.61283656529017 102.54666666666665C260.93183051215277 85.45555555555555 267.9210759722997 76.91 272.58057294573103 76.91C284.22931537930924 76.91 291.2185608394562 76.91 293.5483093261719 76.91C293.5483093261719 76.91 293.5483093261719 230.73000000000002 293.5483093261719 230.73000000000002C293.5483093261719 230.73000000000002 0 230.73000000000002 0 230.73000000000002M0 153.82C0 153.82 0 153.82 0 153.82 " fill="url(#SvgjsLinearGradient1226)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzwntqo6v)" pathTo="M 0 230.73000000000002 L 0 153.82C0.1809479929479978, 153.04565976924522, 13.978490920293897, 64.09166666666664, 20.967736380440847, 64.09166666666664Q34.94622730073475, 64.09166666666664, 41.935472760881694, 64.09166666666664Q55.913963681175595, 102.54666666666665, 62.90320914132254, 102.54666666666665Q76.88170006161644, 102.54666666666665, 83.87094552176339, 102.54666666666665Q97.8494364420573, 153.82, 104.83868190220424, 153.82Q118.81717282249814, 153.82, 125.80641828264508, 153.82Q139.784909202939, 102.54666666666665, 146.77415466308594, 102.54666666666665Q160.75264558337983, 102.54666666666665, 167.74189104352678, 102.54666666666665Q181.72038196382067, 51.27333333333331, 188.70962742396762, 51.27333333333331Q202.68811834426154, 51.27333333333331, 209.6773638044085, 51.27333333333331Q223.65585472470238, 102.54666666666665, 230.64510018484933, 102.54666666666665Q244.62359110514322, 102.54666666666665, 251.61283656529017, 102.54666666666665Q265.5913274855841, 76.91, 272.58057294573103, 76.91Q290.0536865960984, 76.91, 293.5483093261719, 76.91 L 293.5483093261719 230.73000000000002 L 0 230.73000000000002M 0 153.82z" pathFrom="M -1 256.3666666666667 L -1 256.3666666666667 L 20.967736380440847 256.3666666666667 L 41.935472760881694 256.3666666666667 L 62.90320914132254 256.3666666666667 L 83.87094552176339 256.3666666666667 L 104.83868190220424 256.3666666666667 L 125.80641828264508 256.3666666666667 L 146.77415466308594 256.3666666666667 L 167.74189104352678 256.3666666666667 L 188.70962742396762 256.3666666666667 L 209.6773638044085 256.3666666666667 L 230.64510018484933 256.3666666666667 L 251.61283656529017 256.3666666666667 L 272.58057294573103 256.3666666666667 L 293.5483093261719 256.3666666666667"></path><path id="SvgjsPath1231" d="M0 153.82C0.1809479929479978 153.04565976924522 13.978490920293897 64.09166666666664 20.967736380440847 64.09166666666664C30.28673032730345 64.09166666666664 37.2759757874504 64.09166666666664 41.935472760881694 64.09166666666664C51.2544667077443 89.7283333333333 58.243712167891246 102.54666666666665 62.90320914132254 102.54666666666665C72.22220308818514 102.54666666666665 79.21144854833209 102.54666666666665 83.87094552176339 102.54666666666665C93.189939468626 136.7288888888889 100.17918492877294 153.82 104.83868190220424 153.82C114.15767584906683 153.82 121.14692130921378 153.82 125.80641828264508 153.82C135.12541222950767 119.63777777777776 142.11465768965465 102.54666666666665 146.77415466308594 102.54666666666665C156.09314860994854 102.54666666666665 163.0823940700955 102.54666666666665 167.74189104352678 102.54666666666665C177.06088499038938 68.36444444444442 184.05013045053633 51.27333333333331 188.70962742396762 51.27333333333331C198.02862137083025 51.27333333333331 205.0178668309772 51.27333333333331 209.6773638044085 51.27333333333331C218.9963577512711 85.45555555555552 225.98560321141804 102.54666666666665 230.64510018484933 102.54666666666665C239.96409413171193 102.54666666666665 246.95333959185888 102.54666666666665 251.61283656529017 102.54666666666665C260.93183051215277 85.45555555555555 267.9210759722997 76.91 272.58057294573103 76.91C284.22931537930924 76.91 291.2185608394562 76.91 293.5483093261719 76.91C293.5483093261719 76.91 293.5483093261719 76.91 293.5483093261719 76.91 " fill="none" fill-opacity="1" stroke="#f6c000" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzwntqo6v)" pathTo="M 0 153.82C0.1809479929479978, 153.04565976924522, 13.978490920293897, 64.09166666666664, 20.967736380440847, 64.09166666666664Q34.94622730073475, 64.09166666666664, 41.935472760881694, 64.09166666666664Q55.913963681175595, 102.54666666666665, 62.90320914132254, 102.54666666666665Q76.88170006161644, 102.54666666666665, 83.87094552176339, 102.54666666666665Q97.8494364420573, 153.82, 104.83868190220424, 153.82Q118.81717282249814, 153.82, 125.80641828264508, 153.82Q139.784909202939, 102.54666666666665, 146.77415466308594, 102.54666666666665Q160.75264558337983, 102.54666666666665, 167.74189104352678, 102.54666666666665Q181.72038196382067, 51.27333333333331, 188.70962742396762, 51.27333333333331Q202.68811834426154, 51.27333333333331, 209.6773638044085, 51.27333333333331Q223.65585472470238, 102.54666666666665, 230.64510018484933, 102.54666666666665Q244.62359110514322, 102.54666666666665, 251.61283656529017, 102.54666666666665Q265.5913274855841, 76.91, 272.58057294573103, 76.91Q290.0536865960984, 76.91, 293.5483093261719, 76.91" pathFrom="M -1 256.3666666666667 L -1 256.3666666666667 L 20.967736380440847 256.3666666666667 L 41.935472760881694 256.3666666666667 L 62.90320914132254 256.3666666666667 L 83.87094552176339 256.3666666666667 L 104.83868190220424 256.3666666666667 L 125.80641828264508 256.3666666666667 L 146.77415466308594 256.3666666666667 L 167.74189104352678 256.3666666666667 L 188.70962742396762 256.3666666666667 L 209.6773638044085 256.3666666666667 L 230.64510018484933 256.3666666666667 L 251.61283656529017 256.3666666666667 L 272.58057294573103 256.3666666666667 L 293.5483093261719 256.3666666666667" fill-rule="evenodd"></path><g id="SvgjsG1224" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1314" r="0" cx="0" cy="0" class="apexcharts-marker wbo7s0jqa no-pointer-events" stroke="#f6c000" fill="#f6c000" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1225" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1244" x1="0" y1="0" x2="0" y2="230.73000000000002" stroke="#f6c000" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="230.73000000000002" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1245" x1="0" y1="0" x2="293.5483093261719" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1246" x1="0" y1="0" x2="293.5483093261719" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1247" class="apexcharts-xaxis" transform="translate(20, 0)"><g id="SvgjsG1248" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1250" font-family="inherit" x="0" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1251">Apr 02</tspan><title>Apr 02</title></text><text id="SvgjsText1253" font-family="inherit" x="20.967736380440847" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1254"></tspan><title></title></text><text id="SvgjsText1256" font-family="inherit" x="41.935472760881694" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1257"></tspan><title></title></text><text id="SvgjsText1259" font-family="inherit" x="62.90320914132255" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1260">Apr 05</tspan><title>Apr 05</title></text><text id="SvgjsText1262" font-family="inherit" x="83.87094552176339" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1263"></tspan><title></title></text><text id="SvgjsText1265" font-family="inherit" x="104.83868190220423" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1266"></tspan><title></title></text><text id="SvgjsText1268" font-family="inherit" x="125.80641828264507" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1269">Apr 10</tspan><title>Apr 10</title></text><text id="SvgjsText1271" font-family="inherit" x="146.7741546630859" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1272"></tspan><title></title></text><text id="SvgjsText1274" font-family="inherit" x="167.74189104352675" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1275"></tspan><title></title></text><text id="SvgjsText1277" font-family="inherit" x="188.7096274239676" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1278">Apr 17</tspan><title>Apr 17</title></text><text id="SvgjsText1280" font-family="inherit" x="209.67736380440843" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1281"></tspan><title></title></text><text id="SvgjsText1283" font-family="inherit" x="230.64510018484927" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1284"></tspan><title></title></text><text id="SvgjsText1286" font-family="inherit" x="251.6128365652901" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1287">Apr 20</tspan><title>Apr 20</title></text><text id="SvgjsText1289" font-family="inherit" x="272.5805729457309" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1290"></tspan><title></title></text><text id="SvgjsText1292" font-family="inherit" x="293.54830932617176" y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1293"></tspan><title></title></text></g></g><g id="SvgjsG1311" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1312" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1313" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1315" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1316" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(246, 192, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        <!--end::Chart-->   
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 29-->


     </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8 mb-5 mb-xl-10">       
        
<!--begin::Chart widget 24-->
<div class="card card-flush overflow-hidden h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">            
            <span class="card-label fw-bold text-gray-900">Human Resources</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">            
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">   
                                
                <i class="ki-outline ki-dots-square fs-1"></i>                             
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

    <!--begin::Card body-->
    <div class="card-body pt-0">  
        <!--begin::Chart-->
        <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"><div style="position: relative; width: 100%; height: 100%;"><div aria-hidden="true" style="position: absolute; width: 768px; height: 300px;"><div><canvas class="am5-layer-0" width="768" height="300" style="position: absolute; top: 0px; left: 0px; width: 768px; height: 300px;"></canvas><canvas class="am5-layer-30" width="768" height="300" style="position: absolute; top: 0px; left: 0px; width: 768px; height: 300px;"></canvas></div></div><div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 768px; height: 300px;"></div><div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div><div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 768px; height: 300px;"><div role="button" aria-label="Zoom Out" aria-hidden="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div></div><div class="am5-tooltip-container"></div></div></div>
        <!--end::Chart--> 
    </div>
    <!--end::Card body-->
</div>
<!--end::Chart widget 24-->

     </div>
    <!--end::Col-->    
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">  
    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-0">       
        
<!--begin::List widget 12-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Visits by Source</span>
			<span class="text-gray-500 mt-1 fw-semibold fs-6">29.4k visitors</span>
		</h3>
        <!--end::Title-->

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
    <div class="card-body d-flex align-items-end">  
        <!--begin::Wrapper-->
        <div class="w-100">           
                                             
               
                <!--begin::Item-->
                <div class="d-flex align-items-center">                    
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">  
                            <i class="ki-outline ki-rocket fs-3 text-gray-600"></i>                             
                        </span>                
                    </div>
                    <!--end::Symbol-->                   

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct Source</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>   
                            <!--end::Desc-->                                     
                        </div>
                        <!--end::Content--> 

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center"> 
                            <!--begin::Number-->           
                            <span class="text-gray-800 fw-bold fs-4 me-3">1,067</span> 
                            <!--end::Number-->                        
                            
                            <!--begin::Info--> 
                                                            <!--begin::label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                        
                                    2.6%
                                </span>  
                                <!--end::label-->   
                                      
                            <!--end::Info-->                  
                        </div>
                        <!--end::Wrapper-->   
                    </div>
                    <!--end::Container-->                                    
                </div>
                <!--end::Item-->                           

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                 
                                             
               
                <!--begin::Item-->
                <div class="d-flex align-items-center">                    
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">  
                            <i class="ki-outline ki-tiktok fs-3 text-gray-600"></i>                             
                        </span>                
                    </div>
                    <!--end::Symbol-->                   

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social Networks</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social Channels </span>   
                            <!--end::Desc-->                                     
                        </div>
                        <!--end::Content--> 

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center"> 
                            <!--begin::Number-->           
                            <span class="text-gray-800 fw-bold fs-4 me-3">24,588</span> 
                            <!--end::Number-->                        
                            
                            <!--begin::Info--> 
                                                            <!--begin::label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                        
                                    4.1%
                                </span>  
                                <!--end::label-->   
                                      
                            <!--end::Info-->                  
                        </div>
                        <!--end::Wrapper-->   
                    </div>
                    <!--end::Container-->                                    
                </div>
                <!--end::Item-->                           

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                 
                                             
               
                <!--begin::Item-->
                <div class="d-flex align-items-center">                    
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">  
                            <i class="ki-outline ki-sms fs-3 text-gray-600"></i>                             
                        </span>                
                    </div>
                    <!--end::Symbol-->                   

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email Newsletter</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>   
                            <!--end::Desc-->                                     
                        </div>
                        <!--end::Content--> 

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center"> 
                            <!--begin::Number-->           
                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span> 
                            <!--end::Number-->                        
                            
                            <!--begin::Info--> 
                                                            <!--begin::label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                        
                                    0.2%
                                </span>  
                                <!--end::label-->   
                                      
                            <!--end::Info-->                  
                        </div>
                        <!--end::Wrapper-->   
                    </div>
                    <!--end::Container-->                                    
                </div>
                <!--end::Item-->                           

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                 
                                             
               
                <!--begin::Item-->
                <div class="d-flex align-items-center">                    
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">  
                            <i class="ki-outline ki-icon fs-3 text-gray-600"></i>                             
                        </span>                
                    </div>
                    <!--end::Symbol-->                   

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>   
                            <!--end::Desc-->                                     
                        </div>
                        <!--end::Content--> 

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center"> 
                            <!--begin::Number-->           
                            <span class="text-gray-800 fw-bold fs-4 me-3">6,578</span> 
                            <!--end::Number-->                        
                            
                            <!--begin::Info--> 
                                                            <!--begin::label--> 
                                <span class="badge badge-light-danger fs-base">                           
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>                             
                                
                                    0.4%
                                </span>  
                                <!--end::label-->               
                                      
                            <!--end::Info-->                  
                        </div>
                        <!--end::Wrapper-->   
                    </div>
                    <!--end::Container-->                                    
                </div>
                <!--end::Item-->                           

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                 
                                             
               
                <!--begin::Item-->
                <div class="d-flex align-items-center">                    
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">  
                            <i class="ki-outline ki-abstract-25 fs-3 text-gray-600"></i>                             
                        </span>                
                    </div>
                    <!--end::Symbol-->                   

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>   
                            <!--end::Desc-->                                     
                        </div>
                        <!--end::Content--> 

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center"> 
                            <!--begin::Number-->           
                            <span class="text-gray-800 fw-bold fs-4 me-3">79,458</span> 
                            <!--end::Number-->                        
                            
                            <!--begin::Info--> 
                                                            <!--begin::label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                        
                                    8.3%
                                </span>  
                                <!--end::label-->   
                                      
                            <!--end::Info-->                  
                        </div>
                        <!--end::Wrapper-->   
                    </div>
                    <!--end::Container-->                                    
                </div>
                <!--end::Item-->                           

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->
                 
                                             
               
                <!--begin::Item-->
                <div class="d-flex align-items-center">                    
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">  
                            <i class="ki-outline ki-abstract-39 fs-3 text-gray-600"></i>                             
                        </span>                
                    </div>
                    <!--end::Symbol-->                   

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Rising Networks</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>   
                            <!--end::Desc-->                                     
                        </div>
                        <!--end::Content--> 

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center"> 
                            <!--begin::Number-->           
                            <span class="text-gray-800 fw-bold fs-4 me-3">18,047</span> 
                            <!--end::Number-->                        
                            
                            <!--begin::Info--> 
                                                            <!--begin::label--> 
                                <span class="badge badge-light-success fs-base">                                
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>                                                              
                                        
                                    1.9%
                                </span>  
                                <!--end::label-->   
                                      
                            <!--end::Info-->                  
                        </div>
                        <!--end::Wrapper-->   
                    </div>
                    <!--end::Container-->                                    
                </div>
                <!--end::Item-->                           

                 
               

                    </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Body-->
</div>
<!--end::List widget 12-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-0">
        <!--begin::Chart widget 31-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->    
    <div class="card-header pt-7 mb-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Warephase stats</span>
			<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <a href="/metronic8/demo53/../demo53/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>             
        </div>
        <!--end::Toolbar-->
    </div>    
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end pt-0">         
        <!--begin::Chart-->
        <div id="kt_charts_widget_31_chart" class="w-100 h-300px"><div style="position: relative; width: 100%; height: 100%;"><div aria-hidden="true" style="position: absolute; width: 337px; height: 300px;"><div><canvas class="am5-layer-0" width="337" height="300" style="position: absolute; top: 0px; left: 0px; width: 337px; height: 300px;"></canvas><canvas class="am5-layer-30" width="337" height="300" style="position: absolute; top: 0px; left: 0px; width: 337px; height: 300px;"></canvas></div></div><div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 337px; height: 300px;"></div><div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div><div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 337px; height: 300px;"><div role="button" aria-label="Zoom Out" aria-hidden="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div><div tabindex="0" role="checkbox" aria-label="Revenue; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div><div tabindex="0" role="checkbox" aria-label="Expense; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div></div><div class="am5-tooltip-container"><div role="tooltip" aria-hidden="true" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px); pointer-events: none;">Revenue: 
Expense:</div></div></div></div>       
        <!--end::Chart-->            
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 31-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-0">
        <!--begin::Chart widget 30-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->    
    <div class="card-header pt-7 mb-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Stats by Department</span>
			<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <a href="/metronic8/demo53/../demo53/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>             
        </div>
        <!--end::Toolbar-->
    </div>    
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex justify-content-between flex-column">
        <!--begin::Items-->
        <div class="d-flex flex-wrap d-grid gap-5 mb-10">   
            <!--begin::Item-->
            <div class="border-end-dashed border-end border-gray-300 pe-xxl-7 me-xxl-5">   
                <!--begin::Statistics-->
                <div class="d-flex mb-2">   
                    <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>                
                </div>
                <!--end::Statistics-->

                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
                <!--end::Description-->
            </div>
            <!--end::Item-->             

            <!--begin::Item-->
            <div class="m-0">   
                <!--begin::Statistics-->
                <div class="d-flex align-items-center mb-2">   
                    <!--begin::Currency-->
                    <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                    <!--end::Currency-->

                    <!--begin::Value-->
                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="badge badge-light-success fs-base">                                
                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i> 
                        4.5%
                    </span>
                    <!--end::Label-->
                </div>
                <!--end::Statistics-->

                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-500">GAP</span>
                <!--end::Description-->
            </div>
            <!--end::Item-->
        </div>
        <!--end::Items-->

        <!--begin::Chart container-->
        <div id="kt_charts_widget_30_chart" class="w-100 h-200px"><div style="position: relative; width: 100%; height: 100%;"><div aria-hidden="true" style="position: absolute; width: 337px; height: 200px;"><div><canvas class="am5-layer-0" width="337" height="200" style="position: absolute; top: 0px; left: 0px; width: 337px; height: 200px;"></canvas><canvas class="am5-layer-30" width="337" height="200" style="position: absolute; top: 0px; left: 0px; width: 337px; height: 200px;"></canvas></div></div><div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 337px; height: 200px;"></div><div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div><div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 337px; height: 200px;"></div><div class="am5-tooltip-container"></div></div></div>       
        <!--end::Chart container--> 
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 30-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

 

        
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