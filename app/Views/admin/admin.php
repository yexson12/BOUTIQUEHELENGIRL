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
									<div class="card-title">Jornadas cumplidas</div>
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
									<canvas id="pieChart"></canvas>
								</div>
							</div>


						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-head-row">
									<div class="card-title">Estadistica Asistencia</div>
									<div class="card-tools">
										<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab1" role="tablist">
											<li class="nav-item">
												<a class="nav-link " id="pills-week4" data-toggle="pill" href="#pills-week4" role="tab" aria-selected="false">Semanal</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active" id="pills-today4" data-toggle="pill" href="#pills-today4" role="tab" aria-selected="true">Anual</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="pills-month4" data-toggle="pill" href="#pills-month4" role="tab" aria-selected="false">Mensual</a>
											</li>
										</ul>


									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-container" style="min-height: 375px">
									<canvas id="multipleBarChart"></canvas>

								</div>
								<div style="display:none;" class="chart-container" style="min-height: 375px">
									<canvas id="statisticsChart"></canvas>

								</div>
							</div>
						</div>
					</div>

				</div>


				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">ESTADISTICA POR TRABAJADOR </h4>

								</div>
							</div>
							<div class="card-body">
								<!-- Modal -->

								<div class="table-responsive">
									<table id="idtablausuario" class="display table table-striped table-hover">

										<thead>
											<tr>

												<th style="background-color: #6f42c1; color: #fcfcfc;width: 30%;">Name</th>
												<th style="background-color: #6f42c1; color: #fcfcfc;">Position</th>
												<th style="background-color: #6f42c1; color: #fcfcfc;">Office</th>
												<th style="background-color: #6f42c1; color: #fcfcfc; width: 10%;">Action</th>

											</tr>
										</thead>
										<tfoot>
											<tr>

												<th style="background-color: #6f42c1; color: #fcfcfc;">Name</th>
												<th style="background-color: #6f42c1; color: #fcfcfc;">Position</th>
												<th style="background-color: #6f42c1; color: #fcfcfc;">Office</th>
												<th style="background-color: #6f42c1; color: #fcfcfc;">Action</th>
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
			$(document).ready(function() {


			
				new DataTable('#idtablausuario', {
					columnDefs: [{
							targets: [0],
							orderData: [0, 1]
						},
						{
							targets: [1],
							orderData: [1, 0]
						},
						{
							targets: [4],
							orderData: [4, 0]
						}
					]
				});
			});
		</script>
		<script>
			//  // Función para obtener la fecha de inicio y fin del día
			const obtenerFechasDiariasgeneral = () => [moment().startOf('day'), moment().endOf('day')];
			const obtenerFechasDiarias = () => [moment().startOf('day'), moment().endOf('day')];
			const obtenerFechasSemanales = () => [moment().startOf('isoWeek'), moment().endOf('isoWeek')];
			const obtenerFechasMensuales = () => [moment().startOf('month'), moment().endOf('month')];
			const obtenerFechasAnuales = () => [moment().startOf('year').startOf('month'), moment().endOf('year').endOf('month')];
			$(document).ready(function() {

				var fechasdefauld = obtenerFechasDiariasgeneral();
				var fechaIniciodefa = fechasdefauld[0].format('YYYY-MM-DD 00:00');
				var fechaFindefa = fechasdefauld[1].format('YYYY-MM-DD HH:mm');
				var fechasAnualdefauld = obtenerFechasAnuales();
				var fechaAnualIniciodefa = fechasAnualdefauld[0].format('YYYY-MM-DD 00:00');
				var fechaAnualFindefa = fechasAnualdefauld[1].format('YYYY-MM-DD HH:mm');
				obtenerllenarciculos(fechaIniciodefa, fechaFindefa);
				validarporcentajeingreso(fechaIniciodefa, fechaFindefa);
				var rangoa = "anual";
				validartablaporcentaje(fechaAnualIniciodefa, fechaAnualFindefa, rangoa);
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


				//PORCENTAJE CIRCULO
				$('#pills-week2').on('click', function() {

					fechas = obtenerFechasSemanales();
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					validarporcentajeingreso(fechaInicioFormateada, fechaFinFormateada);
				});

				// Asignar evento de clic a la pestaña Diaria
				$('#pills-today2').on('click', function() {
					fechas = obtenerFechasDiarias();
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					validarporcentajeingreso(fechaInicioFormateada, fechaFinFormateada);
				});

				// Asignar evento de clic a la pestaña Mensual
				$('#pills-month2').on('click', function() {
					fechas = obtenerFechasMensuales();
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					validarporcentajeingreso(fechaInicioFormateada, fechaFinFormateada);
				});



				//TABLA PORCENTAJE CIRCULO
				$('#pills-week4').on('click', function() {

					fechas = obtenerFechasSemanales();
					var rango = "semanal";
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					validartablaporcentaje(fechaInicioFormateada, fechaFinFormateada, rango);
				});

				// Asignar evento de clic a la pestaña Diaria
				$('#pills-today4').on('click', function() {
					fechas = obtenerFechasAnuales();
					var rango = "anual";
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					validartablaporcentaje(fechaInicioFormateada, fechaFinFormateada, rango);
				});

				// Asignar evento de clic a la pestaña Mensual
				$('#pills-month4').on('click', function() {
					fechas = obtenerFechasMensuales();
					var rango = "mensual";
					// Formatear las fechas utilizando Moment.js
					fechaInicioFormateada = fechas[0].format('YYYY-MM-DD 00:00');
					fechaFinFormateada = fechas[1].format('YYYY-MM-DD HH:mm');
					validartablaporcentaje(fechaInicioFormateada, fechaFinFormateada, rango);
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
							width: 8,
							text: countJornada1,
							colors: ['#f1f1f1', '#1d7af3'],
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
							width: 8,
							text: countJornada2,
							colors: ['#f1f1f1', '#fdaf4b'],
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
							width: 8,
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
			multipleBarChart = document.getElementById('multipleBarChart').getContext('2d');

			function validarporcentajeingreso(fechaIniciodefa, fechaFindefa) {

				pieChart = document.getElementById('pieChart').getContext('2d');
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
						var myPieChart = new Chart(pieChart, {
							type: 'pie',
							data: {
								datasets: [{
									data: [countJornada1, countJornada2, countJornada3],
									backgroundColor: ["#1d7af3", "#fdaf4b", "#f3545d"],
									borderWidth: 0
								}],
								labels: ['JornadaCompleta', 'Tardanzas', 'Faltas']
							},
							options: {
								responsive: true,
								maintainAspectRatio: false,
								legend: {
									position: 'left',
									labels: {
										fontColor: 'rgb(154, 154, 154)',
										fontSize: 11,
										usePointStyle: true,
										padding: 19
									}
								},
								pieceLabel: {
									render: 'percentage',
									fontColor: 'white',
									fontSize: 9,
								},
								layout: {
									padding: {
										left: 10,
										right: 10,
										top: 20,
										bottom: 0
									}
								}
							}
						})

					},
					error: function(xhr, status, error) {
						// Manejar errores
						console.log(error);
					}
				});
			}



			function validartablaporcentaje(fechaIniciodefa, fechaFindefa, rango) {
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
						console.log(data);
						var detalles = data.datos; // Asumiendo que 'datos' es la propiedad correcta, ajusta según tu estructura
						console.log(detalles);

						var cumplidosresumen;
						var tardanzaresumen;
						var faltasresumen;
						var detallestabla;

						if (rango == "anual") {
							const year = new Date().getFullYear();
							const monthlyCounts = {
								cumplido: Array.from({
									length: 12
								}, () => 0),
								tardanza: Array.from({
									length: 12
								}, () => 0),
								falta: Array.from({
									length: 12
								}, () => 0)
							};

							// Iterar sobre los datos
							detalles.forEach(function(item) {
								const date = new Date(item.fechatrabajo);

								// Verificar si el año es el actual
								if (date.getFullYear() === year) {
									// Obtener el mes en formato MM
									const monthIndex = date.getMonth();

									// Incrementar el recuento para esa categoría y mes específicos
									switch (item.idestadoCumplimientoJornada) {
										case '1':
											monthlyCounts.cumplido[monthIndex] += 1;
											break;
										case '2':
											monthlyCounts.tardanza[monthIndex] += 1;
											break;
										case '4':
											monthlyCounts.falta[monthIndex] += 1;
											break;
											// Agregar más casos según sea necesario
									}
								}
							});

							// Imprimir el resultado
							console.log('Cumplido:', monthlyCounts.cumplido);
							console.log('Tardanza:', monthlyCounts.tardanza);
							console.log('Falta:', monthlyCounts.falta);

							cumplidosresumen = monthlyCounts.cumplido.slice(0, 11);
							tardanzaresumen = monthlyCounts.tardanza.slice(0, 11);
							faltasresumen = monthlyCounts.falta.slice(0, 11);
							const anioactual = new Date().getFullYear();
							detallestabla = ["Ene " + anioactual, "Feb " + anioactual, "Mar " + anioactual, "Abr " + anioactual, "May " + anioactual, "Jun " + anioactual, "Jul " + anioactual, "Ago " + anioactual, "Sep " + anioactual, "Oct " + anioactual, "Nov " + anioactual, "Dic " + anioactual];

						} else if (rango == "mensual") {
							const today = new Date();
							const currentMonth = today.getMonth();
							const currentYear = today.getFullYear();

							// Obtener el primer día del mes actual
							const firstDayOfMonth = new Date(currentYear, currentMonth, 1);

							// Obtener el último día del mes actual
							const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);

							// Crear arrays para almacenar los recuentos semanales
							const weeklyCounts = {
								cumplido: Array.from({
									length: 4
								}, () => 0),
								tardanza: Array.from({
									length: 4
								}, () => 0),
								falta: Array.from({
									length: 4
								}, () => 0)
							};

							// Iterar sobre los datos
							detalles.forEach(function(item) {
								const date = new Date(item.fechatrabajo);

								// Verificar si la fecha está dentro del mes actual
								if (date >= firstDayOfMonth && date <= lastDayOfMonth) {
									// Calcular el número de semana
									const weekIndex = Math.floor((date.getDate() - firstDayOfMonth.getDate()) / 7);

									// Asegurarse de que el índice de semana esté dentro del rango
									if (weekIndex >= 0 && weekIndex < 4) {
										// Incrementar el recuento para esa semana y categoría específicos
										switch (item.idestadoCumplimientoJornada) {
											case '1':
												weeklyCounts.cumplido[weekIndex] += 1;
												break;
											case '2':
												weeklyCounts.tardanza[weekIndex] += 1;
												break;
											case '4':
												weeklyCounts.falta[weekIndex] += 1;
												break;
												// Agregar más casos según sea necesario
										}
									}
								}
							});

							// Imprimir el resultado
							console.log('Cumplido semanal para el mes actual:', weeklyCounts.cumplido);
							console.log('Tardanza semanal para el mes actual:', weeklyCounts.tardanza);
							console.log('Falta semanal para el mes actual:', weeklyCounts.falta);
							cumplidosresumen = weeklyCounts.cumplido.slice(0, 3);
							tardanzaresumen = weeklyCounts.tardanza.slice(0, 3);
							faltasresumen = weeklyCounts.falta.slice(0, 3);
							const monthNames = [
								'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
								'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
							];
							const mesanioactual = monthNames[currentMonth] + ' ' + currentYear;

							detallestabla = ["Sem 1 " + mesanioactual, "Sem 2 " + mesanioactual, "Sem 3 " + mesanioactual, "Sem 4 " + mesanioactual];

						} else if (rango == "semanal") {
							const today = new Date();
							const currentDayOfWeek = today.getDay(); // 0 para domingo, 1 para lunes, ..., 6 para sábado

							// Obtener el primer día de la semana actual (lunes)
							const firstDayOfWeek = moment(today).startOf('isoWeek');

							// Obtener el último día de la semana actual (domingo)
							const lastDayOfWeek = moment(firstDayOfWeek).endOf('isoWeek');

							// Crear arrays para almacenar los recuentos diarios y las fechas
							const dailyCounts = {
								cumplido: Array.from({
									length: 7
								}, () => 0),
								tardanza: Array.from({
									length: 7
								}, () => 0),
								falta: Array.from({
									length: 7
								}, () => 0)
							};

							const dailyDates = Array.from({
								length: 7
							}, (_, i) => {
								const date = moment(firstDayOfWeek).add(i, 'days');
								return date.format('DD/MM/YYYY');
							});

							// Iterar sobre los datos
							detalles.forEach(function(item) {
								const date = moment(item.fechatrabajo);

								// Verificar si la fecha está dentro de la semana actual
								if (date.isBetween(firstDayOfWeek, lastDayOfWeek, null, '[]')) {
									// Calcular el índice del día
									const dayIndex = date.day(); // 0 para domingo, 1 para lunes, ..., 6 para sábado

									// Incrementar el recuento para ese día y categoría específicos
									switch (item.idestadoCumplimientoJornada) {
										case '1':
											dailyCounts.cumplido[dayIndex] += 1;
											break;
										case '2':
											dailyCounts.tardanza[dayIndex] += 1;
											break;
										case '4':
											dailyCounts.falta[dayIndex] += 1;
											break;
											// Agregar más casos según sea necesario
									}
								}
							});

							// Imprimir el resultado
							console.log('Cumplido diario para la semana actual:', dailyCounts.cumplido);
							console.log('Tardanza diaria para la semana actual:', dailyCounts.tardanza);
							console.log('Falta diaria para la semana actual:', dailyCounts.falta);
							cumplidosresumen = dailyCounts.cumplido.slice(0, 6);
							tardanzaresumen = dailyCounts.tardanza.slice(0, 6);
							faltasresumen = dailyCounts.falta.slice(0, 6);
							detallestabla = ["Lu " + dailyDates[0], "Ma " + dailyDates[1], "Mi " + dailyDates[2], "Ju " + dailyDates[3], "Vi " + dailyDates[4], "Sab " + dailyDates[5], "Dom " + dailyDates[6]];
							console.log('Detalle de la tabla:', detallestabla);
						}


						var myMultipleBarChart = new Chart(multipleBarChart, {
							type: 'bar',
							data: {
								labels: detallestabla,
								datasets: [{
									label: "Jornada Completa",
									backgroundColor: '#177dff',
									borderColor: ' #177dff',
									data: cumplidosresumen,
								}, {
									label: "Tardanza",
									backgroundColor: '#fdaf4b',
									borderColor: '#fdaf4b',
									data: tardanzaresumen,
								}, {
									label: "Falta",
									backgroundColor: '#f3545d',
									borderColor: '#f3545d',
									data: faltasresumen,
								}],
							},
							options: {
								responsive: true,
								maintainAspectRatio: false,
								legend: {
									position: 'bottom'
								},
								tooltips: {
									mode: 'index',
									intersect: false
								},
								responsive: true,
								scales: {
									xAxes: [{
										stacked: true,
									}],
									yAxes: [{
										stacked: true
									}]
								}
							}
						});
						console.log('Falta semanal para el mes actual:', detallestabla);
					},
					error: function(xhr, status, error) {
						// Manejar errores
						console.log(error);
					}
				});

			}
		</script>