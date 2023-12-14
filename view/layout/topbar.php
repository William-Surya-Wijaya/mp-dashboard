<div class="d-flex flex-column flex-root">
	<div class="page d-flex flex-row flex-column-fluid">
		<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			<div id="kt_header" style="" class="header align-items-stretch">
				<div class="container-xxl d-flex align-items-stretch justify-content-between">
					<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
						<a class="nav-title" href="/mp-dashboard/dashboard">
							MP
						</a>
					</div>
					<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
						<div class="d-flex align-items-stretch" id="kt_header_nav">
							<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
								<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
									<div class="menu-item me-lg-1">
										<a class="menu-link <?= $route=='dashboard'? 'active':'' ?> py-3" href="/mp-dashboard/dashboard">
											<span class="menu-title">Dashboard</span>
										</a>
									</div>
									<div class="menu-item me-lg-1">
										<a class="menu-link <?= $route=='import-excell'? 'active':'' ?> py-3" href="/mp-dashboard/import-excell">
											<span class="menu-title">Import Data</span>
										</a>
									</div>
									<div class="menu-item me-lg-1">
										<a class="menu-link  <?= $route=='summarize-data'? 'active':'' ?> py-3" href="/mp-dashboard/summarize-data">
											<span class="menu-title">Summarize Data</span>
										</a>
									</div>
									<div class="menu-item me-lg-1">
										<a class="menu-link  <?= $route=='bar-chart'? 'active':'' ?> py-3" href="/mp-dashboard/bar-chart">
											<span class="menu-title">Dynamic Bar Chart</span>
										</a>
									</div>
									<div class="menu-item me-lg-1">
										<a class="menu-link  <?= $route=='scatter-plot'? 'active':'' ?> py-3" href="/mp-dashboard/scatter-plot">
											<span class="menu-title">Dynamic Scatter Plot</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex align-items-stretch flex-shrink-0">
							<div class="d-flex align-items-stretch flex-shrink-0">
								<div class="d-flex align-items-stretch ms-1 ms-lg-3">
									<div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
										<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
											<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
												<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0" fill="none">
													<svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
												</span>
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
</div>