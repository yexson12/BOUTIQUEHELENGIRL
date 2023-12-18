<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="http://www.themekita.com">
						ThemeKita
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						Help
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						Licenses
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright ml-auto" id="copyright">
			<!-- El año se actualizará automáticamente mediante JavaScript -->
		</div>
	</div>
</footer>
</div>

<div class="quick-sidebar">
	<a href="#" class="close-quick-sidebar">
		<i class="flaticon-cross"></i>
	</a>
	<div class="quick-sidebar-wrapper">
		<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
			<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab" aria-selected="true">Messages</a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Tasks</a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
		</ul>
		<div class="tab-content mt-3">
			<div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
				<div class="messages-contact">
					<div class="quick-wrapper">
						<div class="quick-scroll scrollbar-outer">
							<div class="quick-content contact-content">
								<span class="category-title mt-0">Contacts</span>
								<div class="avatar-group">
									<div class="avatar">
										<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<div class="avatar">
										<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<div class="avatar">
										<img src="<?= base_url('/public/admin/assets/img/mlane.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<div class="avatar">
										<img src="<?= base_url('/public/admin/assets/img/talha.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<div class="avatar">
										<span class="avatar-title rounded-circle border border-white">+</span>
									</div>
								</div>
								<span class="category-title">Recent</span>
								<div class="contact-list contact-list-recent">
									<div class="user">
										<a href="#">
											<div class="avatar avatar-online">
												<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="user-data">
												<span class="name">Jimmy Denis</span>
												<span class="message">How are you ?</span>
											</div>
										</a>
									</div>
									<div class="user">
										<a href="#">
											<div class="avatar avatar-offline">
												<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="user-data">
												<span class="name">Chad</span>
												<span class="message">Ok, Thanks !</span>
											</div>
										</a>
									</div>
									<div class="user">
										<a href="#">
											<div class="avatar avatar-offline">
												<img src="<?= base_url('/public/admin/assets/img/mlane.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="user-data">
												<span class="name">John Doe</span>
												<span class="message">Ready for the meeting today with...</span>
											</div>
										</a>
									</div>
								</div>
								<span class="category-title">Other Contacts</span>
								<div class="contact-list">
									<div class="user">
										<a href="#">
											<div class="avatar avatar-online">
												<img src="<?= base_url('/public/admin/assets/img/jm_denis.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="user-data2">
												<span class="name">Jimmy Denis</span>
												<span class="status">Online</span>
											</div>
										</a>
									</div>
									<div class="user">
										<a href="#">
											<div class="avatar avatar-offline">
												<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="user-data2">
												<span class="name">Chad</span>
												<span class="status">Active 2h ago</span>
											</div>
										</a>
									</div>
									<div class="user">
										<a href="#">
											<div class="avatar avatar-away">
												<img src="<?= base_url('/public/admin/assets/img/talha.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="user-data2">
												<span class="name">Talha</span>
												<span class="status">Away</span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="messages-wrapper">
					<div class="messages-title">
						<div class="user">
							<div class="avatar avatar-offline float-right ml-2">
								<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
							</div>
							<span class="name">Chad</span>
							<span class="last-active">Active 2h ago</span>
						</div>
						<button class="return">
							<i class="flaticon-left-arrow-3"></i>
						</button>
					</div>
					<div class="messages-body messages-scroll scrollbar-outer">
						<div class="message-content-wrapper">
							<div class="message message-in">
								<div class="avatar avatar-sm">
									<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
								</div>
								<div class="message-body">
									<div class="message-content">
										<div class="name">Chad</div>
										<div class="content">Hello, Rian</div>
									</div>
									<div class="date">12.31</div>
								</div>
							</div>
						</div>
						<div class="message-content-wrapper">
							<div class="message message-out">
								<div class="message-body">
									<div class="message-content">
										<div class="content">
											Hello, Chad
										</div>
									</div>
									<div class="message-content">
										<div class="content">
											What's up?
										</div>
									</div>
									<div class="date">12.35</div>
								</div>
							</div>
						</div>
						<div class="message-content-wrapper">
							<div class="message message-in">
								<div class="avatar avatar-sm">
									<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
								</div>
								<div class="message-body">
									<div class="message-content">
										<div class="name">Chad</div>
										<div class="content">
											Thanks
										</div>
									</div>
									<div class="message-content">
										<div class="content">
											When is the deadline of the project we are working on ?
										</div>
									</div>
									<div class="date">13.00</div>
								</div>
							</div>
						</div>
						<div class="message-content-wrapper">
							<div class="message message-out">
								<div class="message-body">
									<div class="message-content">
										<div class="content">
											The deadline is about 2 months away
										</div>
									</div>
									<div class="date">13.10</div>
								</div>
							</div>
						</div>
						<div class="message-content-wrapper">
							<div class="message message-in">
								<div class="avatar avatar-sm">
									<img src="<?= base_url('/public/admin/assets/img/chadengle.jpg'); ?>" alt="..." class="avatar-img rounded-circle border border-white">
								</div>
								<div class="message-body">
									<div class="message-content">
										<div class="name">Chad</div>
										<div class="content">
											Ok, Thanks !
										</div>
									</div>
									<div class="date">13.15</div>
								</div>
							</div>
						</div>
					</div>
					<div class="messages-form">
						<div class="messages-form-control">
							<input type="text" placeholder="Type here" class="form-control input-pill input-solid message-input">
						</div>
						<div class="messages-form-tool">
							<a href="#" class="attachment">
								<i class="flaticon-file"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="tasks" role="tabpanel">
				<div class="quick-wrapper tasks-wrapper">
					<div class="tasks-scroll scrollbar-outer">
						<div class="tasks-content">
							<span class="category-title mt-0">Today</span>
							<ul class="tasks-list">
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Planning new project structure</span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure </span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Add new Post</span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Finalise the design proposal</span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
							</ul>

							<span class="category-title">Tomorrow</span>
							<ul class="tasks-list">
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Initialize the project </span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure </span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Updates changes to GitHub </span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox custom-control checkbox-secondary">
										<input type="checkbox" class="custom-control-input"><span title="This task is too long to be displayed in a normal space!" class="custom-control-label">This task is too long to be displayed in a normal space! </span>
										<span class="task-action">
											<a href="#" class="link text-danger">
												<i class="flaticon-interface-5"></i>
											</a>
										</span>
									</label>
								</li>
							</ul>

							<div class="mt-3">
								<div class="btn btn-primary btn-rounded btn-sm">
									<span class="btn-label">
										<i class="fa fa-plus"></i>
									</span>
									Add Task
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="settings" role="tabpanel">
				<div class="quick-wrapper settings-wrapper">
					<div class="quick-scroll scrollbar-outer">
						<div class="quick-content settings-content">

							<span class="category-title mt-0">General Settings</span>
							<ul class="settings-list">
								<li>
									<span class="item-label">Enable Notifications</span>
									<div class="item-control">
										<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round" data-size>
									</div>
								</li>
								<li>
									<span class="item-label">Signin with social media</span>
									<div class="item-control">
										<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
								<li>
									<span class="item-label">Backup storage</span>
									<div class="item-control">
										<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
								<li>
									<span class="item-label">SMS Alert</span>
									<div class="item-control">
										<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
							</ul>

							<span class="category-title mt-0">Notifications</span>
							<ul class="settings-list">
								<li>
									<span class="item-label">Email Notifications</span>
									<div class="item-control">
										<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
								<li>
									<span class="item-label">New Comments</span>
									<div class="item-control">
										<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
								<li>
									<span class="item-label">Chat Messages</span>
									<div class="item-control">
										<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
								<li>
									<span class="item-label">Project Updates</span>
									<div class="item-control">
										<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
								<li>
									<span class="item-label">New Tasks</span>
									<div class="item-control">
										<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Custom template | don't include it in your project! -->
<div class="custom-template">
	<div class="title">Settings</div>
	<div class="custom-content">
		<div class="switcher">
			<div class="switch-block">
				<h4>Logo Header</h4>
				<div class="btnSwitch">
					<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
					<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
					<br />
					<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Navbar Header</h4>
				<div class="btnSwitch">
					<button type="button" class="changeTopBarColor" data-color="dark"></button>
					<button type="button" class="changeTopBarColor" data-color="blue"></button>
					<button type="button" class="changeTopBarColor" data-color="purple"></button>
					<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
					<button type="button" class="changeTopBarColor" data-color="green"></button>
					<button type="button" class="changeTopBarColor" data-color="orange"></button>
					<button type="button" class="changeTopBarColor" data-color="red"></button>
					<button type="button" class="changeTopBarColor" data-color="white"></button>
					<br />
					<button type="button" class="changeTopBarColor" data-color="dark2"></button>
					<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
					<button type="button" class="changeTopBarColor" data-color="purple2"></button>
					<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
					<button type="button" class="changeTopBarColor" data-color="green2"></button>
					<button type="button" class="changeTopBarColor" data-color="orange2"></button>
					<button type="button" class="changeTopBarColor" data-color="red2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Sidebar</h4>
				<div class="btnSwitch">
					<button type="button" class="selected changeSideBarColor" data-color="white"></button>
					<button type="button" class="changeSideBarColor" data-color="dark"></button>
					<button type="button" class="changeSideBarColor" data-color="dark2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Background</h4>
				<div class="btnSwitch">
					<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
					<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
					<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
					<button type="button" class="changeBackgroundColor" data-color="dark"></button>
				</div>
			</div>
		</div>
	</div>
	<div class="custom-toggle">
		<i class="flaticon-settings"></i>
	</div>
</div>
<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('/public/admin/assets/js/core/jquery.3.2.1.min.js'); ?>"></script>
<script src="<?= base_url('/public/admin/assets/js/core/popper.min.js'); ?>"></script>
<script src="<?= base_url('/public/admin/assets/js/core/bootstrap.min.js'); ?>"></script>

<!-- jQuery UI -->
<script src="<?= base_url('/public/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js'); ?>"></script>
<script src="<?= base_url('/public/admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'); ?>"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('/public/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js'); ?>"></script>

<!-- Moment JS -->
<script src="<?= base_url('/public/admin/assets/js/plugin/moment/moment.min.js'); ?>"></script>

<!-- Chart JS -->
<script src="<?= base_url('/public/admin/assets/js/plugin/chart.js/chart.min.js'); ?>"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url('/public/admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js'); ?>"></script>

<!-- Chart Circle -->
<script src="<?= base_url('/public/admin/assets/js/plugin/chart-circle/circles.min.js'); ?>"></script>

<!-- Datatables -->
<script src="<?= base_url('/public/admin/assets/js/plugin/datatables/datatables.min.js'); ?>"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url('/public/admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js'); ?>"></script>

<!-- Bootstrap Toggle -->
<script src="<?= base_url('/public/admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js'); ?>"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url('/public/admin/assets/js/plugin/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?= base_url('/public/admin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js'); ?>"></script>

<!-- Google Maps Plugin -->
<script src="<?= base_url('/public/admin/assets/js/plugin/gmaps/gmaps.js'); ?>"></script>

<!-- Dropzone -->
<script src="<?= base_url('/public/admin/assets/js/plugin/dropzone/dropzone.min.js'); ?>"></script>

<!-- Fullcalendar -->
<script src="<?= base_url('/public/admin/assets/js/plugin/fullcalendar/fullcalendar.min.js'); ?>"></script>

<!-- DateTimePicker -->
<script src="<?= base_url('/public/admin/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js'); ?>"></script>

<!-- Bootstrap Tagsinput -->
<script src="<?= base_url('/public/admin/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js'); ?>"></script>

<!-- Bootstrap Wizard -->
<script src="<?= base_url('/public/admin/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js'); ?>"></script>

<!-- jQuery Validation -->
<script src="<?= base_url('/public/admin/assets/js/plugin/jquery.validate/jquery.validate.min.js'); ?>"></script>

<!-- Summernote -->
<script src="<?= base_url('/public/admin/assets/js/plugin/summernote/summernote-bs4.min.js'); ?>"></script>

<!-- Select2 -->
<script src="<?= base_url('/public/admin/assets/js/plugin/select2/select2.full.min.js'); ?>"></script>

<!-- Sweet Alert -->
<script src="<?= base_url('/public/admin/assets/js/plugin/sweetalert/sweetalert.min.js'); ?>"></script>

<!-- Owl Carousel -->
<script src="<?= base_url('/public/admin/assets/js/plugin/owl-carousel/owl.carousel.min.js'); ?>"></script>

<!-- Magnific Popup -->
<script src="<?= base_url('/public/admin/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>

<!-- Atlantis JS -->
<script src="<?= base_url('/public/admin/assets/js/atlantis.min.js'); ?>"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url('/public/admin/assets/js/setting-demo.js'); ?>"></script>
<script src="<?= base_url('/public/admin/assets/js/demo.js'); ?>"></script>
<script>
	Circles.create({
		id: 'circles-1',
		radius: 45,
		value: 60,
		maxValue: 100,
		width: 7,
		text: 9,
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
		value: 70,
		maxValue: 100,
		width: 7,
		text: 36,
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
		value: 40,
		maxValue: 100,
		width: 7,
		text: 12,
		colors: ['#f1f1f1', '#F25961'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

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

	document.getElementById('copyright').innerHTML = 'Derechos Reservados © ' + new Date().getFullYear() + ' <i class="fa fa-heart heart text-danger"></i> por <a href="http://www.yectec.com">YEX TEC COMPANY</a>';

</script>

<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>

</html>