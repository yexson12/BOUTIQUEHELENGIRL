	<div class="main-panel">
		<div class="container">
			<div class="panel-header bg-primary-gradient">
				<div class="page-inner py-5">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
							<h5 class="text-white op-7 mb-2">Dashboard Boutique Helen Girls</h5>
						</div>
						<div class="ml-md-auto py-2 py-md-0">
							<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
							<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
							<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="page-inner mt--5">
				<div class="row mt--2">
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-header">
								<div class="card-head-row">
									<div class="card-title">Estadistica de Asistencia</div>
									<div class="card-tools">

										<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab1" role="tablist">
											<li class="nav-item">
												<a class="nav-link " id="pills-week1" data-toggle="pill" href="#pills-week1" role="tab" aria-selected="false">Semanal</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active" id="pills-today1" data-toggle="pill" href="#pills-today1" role="tab" aria-selected="true">Diaria</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="pills-month1" data-toggle="pill" href="#pills-month1" role="tab" aria-selected="false">Mensual</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">

								<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-1"></div>
										<h6 class="fw-bold mt-3 mb-0">Jornada Cumplida</h6>
									</div>

									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-2"></div>
										<h6 class="fw-bold mt-3 mb-0">Tardanzas</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-3"></div>
										<h6 class="fw-bold mt-3 mb-0">Faltas</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-header">
								<div class="card-head-row">
									<div class="card-title">Estadistica Semanal</div>
									<div class="card-tools">
										<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab1" role="tablist">
											<li class="nav-item">
												<a class="nav-link " id="pills-week2" data-toggle="pill" href="#pills-week2" role="tab" aria-selected="false">Semanal</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active" id="pills-today2" data-toggle="pill" href="#pills-today2" role="tab" aria-selected="true">Diaria</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="pills-month2" data-toggle="pill" href="#pills-month2" role="tab" aria-selected="false">Mensual</a>
											</li>
										</ul>
									</div>
								</div>
							</div>


							<div class="col-md-12">
								<div id="chart-container">
									<canvas id="totalIncomeChart"></canvas>
								</div>
							</div>


						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">
								<div class="card-head-row">
									<div class="card-title">User Statistics</div>
									<div class="card-tools">
										<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
											<span class="btn-label">
												<i class="fa fa-pencil"></i>
											</span>
											Export
										</a>
										<a href="#" class="btn btn-info btn-border btn-round btn-sm">
											<span class="btn-label">
												<i class="fa fa-print"></i>
											</span>
											Print
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-container" style="min-height: 375px">
									<canvas id="statisticsChart"></canvas>
								</div>
								<div id="myChartLegend"></div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-primary">
							<div class="card-header">
								<div class="card-title">Daily Sales</div>
								<div class="card-category">March 25 - April 02</div>
							</div>
							<div class="card-body pb-0">
								<div class="mb-4 mt-2">
									<h1>$4,578.58</h1>
								</div>
								<div class="pull-in">
									<canvas id="dailySalesChart"></canvas>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body pb-0">
								<div class="h1 fw-bold float-right text-warning">+7%</div>
								<h2 class="mb-2">213</h2>
								<p class="text-muted">Transactions</p>
								<div class="pull-in sparkline-fix">
									<div id="lineChart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-card-no-pd">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-head-row card-tools-still-right">
									<h4 class="card-title">Users Geolocation</h4>
									<div class="card-tools">
										<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
										<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
										<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
									</div>
								</div>
								<p class="card-category">
									Map of the distribution of users around the world</p>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="table-responsive table-hover table-sales">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="flag">
																<img src="<?= base_url('/public/admin/assets/img/flags/id.png'); ?>" alt="indonesia">
															</div>
														</td>
														<td>Indonesia</td>
														<td class="text-right">
															2.320
														</td>
														<td class="text-right">
															42.18%
														</td>
													</tr>
													<tr>
														<td>
															<div class="flag">
																<img src="<?= base_url('/public/admin/assets/img/flags/us.png'); ?>" alt="united states">
															</div>
														</td>
														<td>USA</td>
														<td class="text-right">
															240
														</td>
														<td class="text-right">
															4.36%
														</td>
													</tr>
													<tr>
														<td>
															<div class="flag">
																<img src="<?= base_url('/public/admin/assets/img/flags/au.png'); ?>" alt="australia">
															</div>
														</td>
														<td>Australia</td>
														<td class="text-right">
															119
														</td>
														<td class="text-right">
															2.16%
														</td>
													</tr>
													<tr>
														<td>
															<div class="flag">
																<img src="<?= base_url('/public/admin/assets/img/flags/ru.png'); ?>" alt="russia">
															</div>
														</td>
														<td>Russia</td>
														<td class="text-right">
															1.081
														</td>
														<td class="text-right">
															19.65%
														</td>
													</tr>
													<tr>
														<td>
															<div class="flag">
																<img src="<?= base_url('/public/admin/assets/img/flags/cn.png'); ?>" alt="china">
															</div>
														</td>
														<td>China</td>
														<td class="text-right">
															1.100
														</td>
														<td class="text-right">
															20%
														</td>
													</tr>
													<tr>
														<td>
															<div class="flag">
																<img src="<?= base_url('/public/admin/assets/img/flags/br.png'); ?>" alt="brazil">
															</div>
														</td>
														<td>Brasil</td>
														<td class="text-right">
															640
														</td>
														<td class="text-right">
															11.63%
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mapcontainer">
											<div id="map-example" class="vmap"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Top Products</div>
							</div>
							<div class="card-body pb-0">
								<div class="d-flex">
									<div class="avatar">
										<img src="<?= base_url('/public/admin/assets/img/logoproduct.svg'); ?>" alt="..." class="avatar-img rounded-circle">
									</div>
									<div class="flex-1 pt-1 ml-2">
										<h6 class="fw-bold mb-1">CSS</h6>
										<small class="text-muted">Cascading Style Sheets</small>
									</div>
									<div class="d-flex ml-auto align-items-center">
										<h3 class="text-info fw-bold">+$17</h3>
									</div>
								</div>
								<div class="separator-dashed"></div>
								<div class="d-flex">
									<div class="avatar">
										<img src="<?= base_url('/public/admin/assets/img/logoproduct.svg'); ?>" alt="..." class="avatar-img rounded-circle">
									</div>
									<div class="flex-1 pt-1 ml-2">
										<h6 class="fw-bold mb-1">J.CO Donuts</h6>
										<small class="text-muted">The Best Donuts</small>
									</div>
									<div class="d-flex ml-auto align-items-center">
										<h3 class="text-info fw-bold">+$300</h3>
									</div>
								</div>
								<div class="separator-dashed"></div>
								<div class="d-flex">
									<div class="avatar">
										<img src="<?= base_url('/public/admin/assets/img/logoproduct3.svg'); ?>" alt="..." class="avatar-img rounded-circle">
									</div>
									<div class="flex-1 pt-1 ml-2">
										<h6 class="fw-bold mb-1">Ready Pro</h6>
										<small class="text-muted">Bootstrap 4 Admin Dashboard</small>
									</div>
									<div class="d-flex ml-auto align-items-center">
										<h3 class="text-info fw-bold">+$350</h3>
									</div>
								</div>
								<div class="separator-dashed"></div>
								<div class="pull-in">
									<canvas id="topProductsChart"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title fw-mediumbold">Suggested People</div>
								<div class="card-list">
									<div class="item-list">
										<div class="avatar">
											<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="info-user ml-3">
											<div class="username">Jimmy Denis</div>
											<div class="status">Graphic Designer</div>
										</div>
										<button class="btn btn-icon btn-primary btn-round btn-xs">
											<i class="fa fa-plus"></i>
										</button>
									</div>
									<div class="item-list">
										<div class="avatar">
											<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="info-user ml-3">
											<div class="username">Chad</div>
											<div class="status">CEO Zeleaf</div>
										</div>
										<button class="btn btn-icon btn-primary btn-round btn-xs">
											<i class="fa fa-plus"></i>
										</button>
									</div>
									<div class="item-list">
										<div class="avatar">
											<img src="<?= base_url('/public/admin/assets/img/talha.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="info-user ml-3">
											<div class="username">Talha</div>
											<div class="status">Front End Designer</div>
										</div>
										<button class="btn btn-icon btn-primary btn-round btn-xs">
											<i class="fa fa-plus"></i>
										</button>
									</div>
									<div class="item-list">
										<div class="avatar">
											<img src="<?= base_url('/public/admin/assets/img/mlane.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="info-user ml-3">
											<div class="username">John Doe</div>
											<div class="status">Back End Developer</div>
										</div>
										<button class="btn btn-icon btn-primary btn-round btn-xs">
											<i class="fa fa-plus"></i>
										</button>
									</div>
									<div class="item-list">
										<div class="avatar">
											<img src="<?= base_url('/public/admin/assets/img/talha.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="info-user ml-3">
											<div class="username">Talha</div>
											<div class="status">Front End Designer</div>
										</div>
										<button class="btn btn-icon btn-primary btn-round btn-xs">
											<i class="fa fa-plus"></i>
										</button>
									</div>
									<div class="item-list">
										<div class="avatar">
											<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="info-user ml-3">
											<div class="username">Jimmy Denis</div>
											<div class="status">Graphic Designer</div>
										</div>
										<button class="btn btn-icon btn-primary btn-round btn-xs">
											<i class="fa fa-plus"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-primary bg-primary-gradient">
							<div class="card-body">
								<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
								<h1 class="mb-4 fw-bold">17</h1>
								<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
								<div id="activeUsersChart"></div>
								<h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
								<ul class="list-unstyled">
									<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
									<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/atlantis/demo.html</small> <span>10</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Add Row</h4>
									<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
										<i class="fa fa-plus"></i>
										Add Row
									</button>
								</div>
							</div>
							<div class="card-body">
								<!-- Modal -->
								<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header border-0">
												<h5 class="modal-title">
													<span class="fw-mediumbold">
														New</span>
													<span class="fw-light">
														Row
													</span>
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p class="small">Create a new row using this form, make sure you fill them all</p>
												<form>
													<div class="row">
														<div class="col-sm-12">
															<div class="form-group form-group-default">
																<label>Name</label>
																<input id="addName" type="text" class="form-control" placeholder="fill name">
															</div>
														</div>
														<div class="col-md-6 pr-0">
															<div class="form-group form-group-default">
																<label>Position</label>
																<input id="addPosition" type="text" class="form-control" placeholder="fill position">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Office</label>
																<input id="addOffice" type="text" class="form-control" placeholder="fill office">
															</div>
														</div>
													</div>
												</form>
											</div>
											<div class="modal-footer border-0">
												<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>

								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover">
										<thead>
											<tr>

												<th style="background-color: #02fcef; color: black;width: 30%;">Name</th>
												<th style="background-color: #02fcef; color: black;">Position</th>
												<th style="background-color: #02fcef; color: black;">Office</th>
												<th style="background-color: #02fcef; color: black; width: 10%;">Action</th>

											</tr>
										</thead>
										<tfoot>
											<tr>

												<th style="background-color: #02fcef; color: black;">Name</th>
												<th style="background-color: #02fcef; color: black;">Position</th>
												<th style="background-color: #02fcef; color: black;">Office</th>
												<th style="background-color: #02fcef; color: black;">Action</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>

												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Ver Detalle">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Accountant</td>
												<td>Tokyo</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Senior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Accountant</td>
												<td>Tokyo</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Integration Specialist</td>
												<td>New York</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Sales Assistant</td>
												<td>San Francisco</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Integration Specialist</td>
												<td>Tokyo</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Javascript Developer</td>
												<td>San Francisco</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div style="display: flex; align-items: center;">
														<div class="avatar" style="margin-right: 10px;">
															<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
														</div>
														<div>
															<p style="margin: 0;">Software Engineer</p>
														</div>
													</div>
												</td>

												<td>Software Engineer</td>
												<td>Edinburgh</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>


				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-header">
								<div class="card-title">Feed Activity</div>
							</div>
							<div class="card-body">
								<ol class="activity-feed">
									<li class="feed-item feed-item-secondary">
										<time class="date" datetime="9-25">Sep 25</time>
										<span class="text">Responded to need <a href="#">"Volunteer opportunity"</a></span>
									</li>
									<li class="feed-item feed-item-success">
										<time class="date" datetime="9-24">Sep 24</time>
										<span class="text">Added an interest <a href="#">"Volunteer Activities"</a></span>
									</li>
									<li class="feed-item feed-item-info">
										<time class="date" datetime="9-23">Sep 23</time>
										<span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
									</li>
									<li class="feed-item feed-item-warning">
										<time class="date" datetime="9-21">Sep 21</time>
										<span class="text">Responded to need <a href="#">"In-Kind Opportunity"</a></span>
									</li>
									<li class="feed-item feed-item-danger">
										<time class="date" datetime="9-18">Sep 18</time>
										<span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
									</li>
									<li class="feed-item">
										<time class="date" datetime="9-17">Sep 17</time>
										<span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
									</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-header">
								<div class="card-head-row">
									<div class="card-title">Support Tickets</div>
									<div class="card-tools">
										<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
											<li class="nav-item">
												<a class="nav-link " id="pills-week3" data-toggle="pill" href="#pills-week3" role="tab" aria-selected="false">Semanal</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active" id="pills-today3" data-toggle="pill" href="#pills-today3" role="tab" aria-selected="true">Diaria</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="pills-month3" data-toggle="pill" href="#pills-month3" role="tab" aria-selected="false">Mensual</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="d-flex">
									<div class="avatar avatar-online">
										<span class="avatar-title rounded-circle border border-white bg-info">J</span>
									</div>
									<div class="flex-1 ml-3 pt-1">
										<h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">pending</span></h6>
										<span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
									</div>
									<div class="float-right pt-1">
										<small class="text-muted">8:40 PM</small>
									</div>
								</div>
								<div class="separator-dashed"></div>
								<div class="d-flex">
									<div class="avatar avatar-offline">
										<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
									</div>
									<div class="flex-1 ml-3 pt-1">
										<h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">open</span></h6>
										<span class="text-muted">I have some query regarding the license issue.</span>
									</div>
									<div class="float-right pt-1">
										<small class="text-muted">1 Day Ago</small>
									</div>
								</div>
								<div class="separator-dashed"></div>
								<div class="d-flex">
									<div class="avatar avatar-away">
										<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
									</div>
									<div class="flex-1 ml-3 pt-1">
										<h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-muted pl-3">closed</span></h6>
										<span class="text-muted">Is there any update plan for RTL version near future?</span>
									</div>
									<div class="float-right pt-1">
										<small class="text-muted">2 Days Ago</small>
									</div>
								</div>
								<div class="separator-dashed"></div>
								<div class="d-flex">
									<div class="avatar avatar-offline">
										<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
									</div>
									<div class="flex-1 ml-3 pt-1">
										<h6 class="text-uppercase fw-bold mb-1">Peter Parker <span class="text-success pl-3">open</span></h6>
										<span class="text-muted">I have some query regarding the license issue.</span>
									</div>
									<div class="float-right pt-1">
										<small class="text-muted">2 Day Ago</small>
									</div>
								</div>
								<div class="separator-dashed"></div>
								<div class="d-flex">
									<div class="avatar avatar-away">
										<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
									</div>
									<div class="flex-1 ml-3 pt-1">
										<h6 class="text-uppercase fw-bold mb-1">Logan Paul <span class="text-muted pl-3">closed</span></h6>
										<span class="text-muted">Is there any update plan for RTL version near future?</span>
									</div>
									<div class="float-right pt-1">
										<small class="text-muted">2 Days Ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			//  // Función para obtener la fecha de inicio y fin del día
			const obtenerFechasDiariasgeneral = () => [moment().startOf('day'), moment().endOf('day')];
			const obtenerFechasDiarias = () => [moment().startOf('day'), moment().endOf('day')];
			const obtenerFechasSemanales = () => [moment().startOf('isoWeek'), moment().endOf('isoWeek')];
			const obtenerFechasMensuales = () => [moment().startOf('month'), moment().endOf('month')];

			$(document).ready(function() {

				var fechasdefauld = obtenerFechasDiariasgeneral();
				var fechaIniciodefa = fechasdefauld[0].format('YYYY-MM-DD 00:00');
				var fechaFindefa = fechasdefauld[1].format('YYYY-MM-DD HH:mm');
				obtenerllenarciculos(fechaIniciodefa, fechaFindefa);
				var fechas;
				// Formatear las fechas utilizando Moment.js
				var fechaInicioFormateada;
				var fechaFinFormateada;
				// Asignar evento de clic a la pestaña Semanal
				$('#pills-week1').on('click', function() {

					fechas = obtenerFechasSemanales();
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					obtenerllenarciculos(fechaInicioFormateada, fechaFinFormateada);
				});

				// Asignar evento de clic a la pestaña Diaria
				$('#pills-today1').on('click', function() {
					fechas = obtenerFechasDiarias();
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					obtenerllenarciculos(fechaInicioFormateada, fechaFinFormateada);
				});

				// Asignar evento de clic a la pestaña Mensual
				$('#pills-month1').on('click', function() {
					fechas = obtenerFechasMensuales();
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					obtenerllenarciculos(fechaInicioFormateada, fechaFinFormateada);
				});
			});

			function obtenerllenarciculos(fechaIniciodefa, fechaFindefa) {
				var url = "<?= base_url('listadojornada'); ?>";
				var params = {
					fecha_inicio: fechaIniciodefa,
					fecha_fin: fechaFindefa
				};
				console.log(url);
				console.log(params);
				$.ajax({
					url: url,
					method: 'POST', // Cambia el método a POST
					dataType: 'json',
					data: params, // Incluye los parámetros aquí
					success: function(data) {
						var conteogeneral = 0;
						var countJornada1 = 0;
						var countJornada2 = 0;
						var countJornada3 = 0;

						if (data.success === false) {
							// Si success es false, establecer todas las variables a 0
							conteogeneral = 0;
							countJornada1 = 0;
							countJornada2 = 0;
							countJornada3 = 0;
						} else {
							// Iterar sobre los datos y realizar el conteo
							var detalles = data.datos; // Asumiendo que 'datos' es la propiedad correcta, ajusta según tu estructura
							console.log(detalles);

							detalles.forEach(function(item) {
								conteogeneral++;
								switch (item.idestadoCumplimientoJornada) {
									case '1':
										countJornada1++;
										break;
									case '2':
										countJornada2++;
										break;
									case '4':
										countJornada3++;
										break;
										// Puedes agregar más casos según sea necesario
								}
							});
						}
						Circles.create({
							id: 'circles-1',
							radius: 45,
							value: countJornada1,
							maxValue: conteogeneral,
							width: 7,
							text: countJornada1,
							colors: ['#f1f1f1', '#2BB930'],
							duration: 400,
							wrpClass: 'circles-wrp',
							textClass: 'circles-text',
							styleWrapper: true,
							styleText: true
						})


						Circles.create({
							id: 'circles-2',
							radius: 45,
							value: countJornada2,
							maxValue: conteogeneral,
							width: 7,
							text: countJornada2,
							colors: ['#f1f1f1', '#f1c605'],
							duration: 400,
							wrpClass: 'circles-wrp',
							textClass: 'circles-text',
							styleWrapper: true,
							styleText: true
						})

						Circles.create({
							id: 'circles-3',
							radius: 45,
							value: countJornada3,
							maxValue: conteogeneral,
							width: 7,
							text: countJornada3, // Modificar a 1 para que el texto se muestre siempre
							colors: ['#f1f1f1', '#F25961'],
							duration: 400,
							wrpClass: 'circles-wrp',
							textClass: 'circles-text',
							styleWrapper: true,
							styleText: true
						});
						if (countJornada3 === 0) {
							document.querySelector('#circles-1 .circles-text').innerText = '0';
							document.querySelector('#circles-2 .circles-text').innerText = '0';
							document.querySelector('#circles-3 .circles-text').innerText = '0';
						}

					},
					error: function(xhr, status, error) {
						// Manejar errores
						console.log(error);
					}
				});
			}
		</script>
		<script>
			var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

			var mytotalIncomeChart = new Chart(totalIncomeChart, {
				type: 'bar',
				data: {
					labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
					datasets: [{
						label: "Total Income",
						backgroundColor: '#ff9e27',
						borderColor: 'rgb(23, 125, 255)',
						data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
					}],
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: false,
					},
					scales: {
						yAxes: [{
							ticks: {
								display: false //this will remove only the label
							},
							gridLines: {
								drawBorder: false,
								display: false
							}
						}],
						xAxes: [{
							gridLines: {
								drawBorder: false,
								display: false
							}
						}]
					},
				}
			});

			$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
				type: 'line',
				height: '70',
				width: '100%',
				lineWidth: '2',
				lineColor: '#ffa534',
				fillColor: 'rgba(255, 165, 52, .14)'
			});
		</script>