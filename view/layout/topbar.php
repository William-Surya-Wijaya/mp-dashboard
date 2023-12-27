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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>