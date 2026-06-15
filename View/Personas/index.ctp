<?php $this->layout = 'default_familia' ?>

<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">

	<!-- Main Content -->
	<main class="container mx-auto px-4 py-8 max-w-6xl">

		<!-- Title Section -->
		<div class="text-center mb-12">
			<h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
				Personas Registradas<br>
				<span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
					que Aceptan Formulario
				</span>
			</h1>
			<p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
				Consulta el listado de personas que han aceptado participar en los programas de salud comunitaria.
			</p>
		</div>

		<!-- Quick Actions -->
		<div class="bg-gradient-to-r from-teal-600 to-cyan-600 rounded-t-2xl shadow-lg p-6 text-white">
			<h3 class="text-2xl font-bold flex items-center gap-2 mb-4">
				<i class="fas fa-users"></i>
				Consulta de Personas Registradas
			</h3>
		</div>

		<!-- Filtros Section -->
		<div class="bg-white rounded-b-2xl shadow-lg p-6 mb-8">
			<h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-2">
				<i class="fas fa-filter text-teal-600"></i>
				Filtros de Búsqueda
			</h3>

			<?php echo $this->Form->create('Persona', array('type' => 'get', 'class' => 'w-full', 'id' => 'filtro-form')); ?>

			<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
				<!-- Filtro por Número de Documento -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('numerodoc', 'Número de Documento', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('numerodoc', array(
						'label' => false,
						'placeholder' => 'Ej: 1234567890',
						'value' => isset($this->request->query['numerodoc']) ? $this->request->query['numerodoc'] : '',
						'required' => false,
						'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent'
					)); ?>
				</div>

				<!-- Filtro por Aseguradora -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('aseguradora', 'Aseguradora', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('aseguradora', array(
						'options' => $aseguradoras,
						'label' => false,
						'empty' => '-- Todas las Aseguradoras --',
						'value' => isset($this->request->query['aseguradora']) ? $this->request->query['aseguradora'] : '',
						'required' => false,
						'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent'
					)); ?>
				</div>

				<!-- Filtro por Canalización -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('canalizacion_id', 'Canalización', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('canalizacion_id', array(
						'options' => $canalizaciones,
						'label' => false,
						'empty' => '-- Todas las Canalizaciones --',
						'value' => isset($this->request->query['canalizacion_id']) ? $this->request->query['canalizacion_id'] : '',
						'required' => false,
						'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent'
					)); ?>
				</div>

				<!-- Filtro por Servicio Salud -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('serviciosalud', 'Servicio Salud', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('serviciosalud', array(
						'options' => $serviciosSalud,
						'label' => false,
						'empty' => '-- Todos --',
						'value' => isset($this->request->query['serviciosalud']) ? $this->request->query['serviciosalud'] : '',
						'required' => false,
						'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent'
					)); ?>
				</div>
			</div>

			<!-- Segunda fila de filtros -->
			<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
				<!-- Filtro por Otros Servicios (Oferta Pic) -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('otros_servicios', 'Otros Servicios', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('otros_servicios', array(
						'options' => $otrosServicios,
						'label' => false,
						'empty' => '-- Todos --',
						'value' => isset($this->request->query['otros_servicios']) ? $this->request->query['otros_servicios'] : '',
						'required' => false,
						'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent'
					)); ?>
				</div>

				<!-- Filtro por Servicio Social -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('servicio_social', 'Servicio Social', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('servicio_social', array(
						'options' => $servicioSocialOptions,
						'label' => false,
						'empty' => '-- Todos --',
						'value' => isset($this->request->query['servicio_social']) ? $this->request->query['servicio_social'] : '',
						'required' => false,
						'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent'
					)); ?>
				</div>

				<!-- Filtro por Caracterización APS -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('caracterizacion_aps', 'Caracterización APS', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('caracterizacion_aps', array(
						'options' => $caracterizacionAps,
						'label' => false,
						'empty' => '-- Todos --',
						'value' => isset($this->request->query['caracterizacion_aps']) ? $this->request->query['caracterizacion_aps'] : '',
						'required' => false,
						'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent'
					)); ?>
				</div>
			</div>

			<!-- Botones de Acción -->
			<div class="flex gap-3 items-center">
				<?php echo $this->Form->button(__('Buscar'), array(
					'class' => 'bg-teal-600 hover:bg-teal-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors duration-200 flex items-center gap-2',
					'id' => 'btn-buscar',
					'type' => 'submit'
				)); ?>
				<?php echo $this->Html->link(__('Limpiar Filtros'), array('action' => 'index'), array(
					'class' => 'bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition-colors duration-200',
					'id' => 'btn-limpiar'
				)); ?>
			</div>

			<?php echo $this->Form->end(); ?>
		</div>

		<!-- Tabla de Personas -->
		<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
			<div class="table-wrapper">
				<table class="w-full text-xs md:text-sm text-left text-gray-600">
					<thead class="bg-gray-200 border-b border-gray-300 sticky top-0">
						<tr class="text-gray-900 font-semibold">
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Primer Nombre</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Primer Apellido</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Número Documento</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Aseguradora</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Barrio/Vereda</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Servicio Salud</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Otros Servicios</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Servicio Social</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Caracterización APS</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Estado</th>
							<th class="px-2 py-2 text-center cursor-pointer hover:bg-gray-300 whitespace-nowrap">Acciones</th>
						</tr>
					</thead>
					<tbody class="divide-y divide-gray-300">
						<?php if (!empty($personas)): ?>
							<?php foreach ($personas as $persona): ?>
							<?php
								// Lógica para determinar Servicio Salud
								$urgencia = isset($persona['Persona']['urgencia']) ? $persona['Persona']['urgencia'] : null;
								$detecciontemprana = isset($persona['Persona']['detecciontemprana']) ? $persona['Persona']['detecciontemprana'] : null;
								$rias = isset($persona['Persona']['rias']) ? $persona['Persona']['rias'] : null;

								$servicioSalud = (!empty($urgencia) || !empty($detecciontemprana) || !empty($rias)) ? 'SI' : 'N/A';
								$servicioSaludClass = $servicioSalud === 'SI' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800';

								// Lógica para Otros Servicios (Oferta Pic)
								$ofertapic = isset($persona['Persona']['ofertapic']) ? $persona['Persona']['ofertapic'] : null;
								$otrosServ = (!empty($ofertapic) && $ofertapic != '0.No |0') ? 'Oferta Pic' : 'N/A';
								$otrosServClass = $otrosServ === 'Oferta Pic' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800';

								// Lógica para Servicio Social
								$serviciosocial = isset($persona['Persona']['serviciosocial']) ? $persona['Persona']['serviciosocial'] : null;
								$servSocial = (!empty($serviciosocial)) ? 'Servicio Social' : 'N/A';
								$servSocialClass = $servSocial === 'Servicio Social' ? 'bg-purple-100 text-purple-800' : 'bg-gray-100 text-gray-800';

								// Lógica para Caracterización APS
								$caracterizacionaps = isset($persona['Persona']['caracterizacionaps']) ? $persona['Persona']['caracterizacionaps'] : null;
								$caracAps = ($caracterizacionaps === 'Caracterizar') ? 'Caracterizar' : 'N/A';
								$caracApsClass = $caracAps === 'Caracterizar' ? 'bg-orange-100 text-orange-800' : 'bg-gray-100 text-gray-800';
							?>
							<tr class="hover:bg-gray-50 transition">
								<td class="px-2 py-2 text-xs md:text-sm"><?php echo h($persona['Persona']['primernombre']); ?></td>
								<td class="px-2 py-2 text-xs md:text-sm"><?php echo h($persona['Persona']['primerapellido']); ?></td>
								<td class="px-2 py-2 font-semibold text-teal-600 text-xs md:text-sm"><?php echo h($persona['Persona']['numerodoc']); ?></td>
								<td class="px-2 py-2 text-xs md:text-sm"><?php echo h($persona['Persona']['aseguradora']); ?></td>
								<td class="px-2 py-2 text-xs md:text-sm"><?php echo h($persona['Persona']['barriovereda']); ?></td>
								<td class="px-2 py-2 text-center">
									<span class="px-1.5 py-0.5 rounded text-xs font-semibold <?php echo $servicioSaludClass; ?>">
										<?php echo h($servicioSalud); ?>
									</span>
								</td>
								<td class="px-2 py-2 text-center">
									<span class="px-1.5 py-0.5 rounded text-xs font-semibold <?php echo $otrosServClass; ?>">
										<?php echo h($otrosServ); ?>
									</span>
								</td>
								<td class="px-2 py-2 text-center">
									<span class="px-1.5 py-0.5 rounded text-xs font-semibold <?php echo $servSocialClass; ?>">
										<?php echo h($servSocial); ?>
									</span>
								</td>
								<td class="px-2 py-2 text-center">
									<span class="px-1.5 py-0.5 rounded text-xs font-semibold <?php echo $caracApsClass; ?>">
										<?php echo h($caracAps); ?>
									</span>
								</td>
								<td class="px-2 py-2 text-center">
									<?php
										$estado = isset($persona['Persona']['estado']) ? $persona['Persona']['estado'] : 'Desconocido';
										$estadoClass = '';
										if ($estado == 'Activo' || $estado == 'activo') {
											$estadoClass = 'bg-green-100 text-green-800';
										} elseif ($estado == 'Inactivo' || $estado == 'inactivo') {
											$estadoClass = 'bg-red-100 text-red-800';
										} else {
											$estadoClass = 'bg-gray-100 text-gray-800';
										}
									?>
									<span class="px-1.5 py-0.5 rounded text-xs font-semibold <?php echo $estadoClass; ?>">
										<?php echo h($estado); ?>
									</span>
								</td>
								<td class="px-2 py-2 text-center">
									<div class="flex gap-1 justify-center">
										<?php echo $this->Html->link(
											'<i class="fas fa-eye text-blue-600"></i>',
											array('action' => 'view', $persona['Persona']['id']),
											array('escape' => false, 'title' => 'Ver', 'class' => 'hover:scale-110 transition text-sm')
										); ?>
										<?php echo $this->Html->link(
											'<i class="fas fa-edit text-amber-600"></i>',
											array('action' => 'edit', $persona['Persona']['id']),
											array('escape' => false, 'title' => 'Editar', 'class' => 'hover:scale-110 transition text-sm')
										); ?>
										<?php echo $this->Form->postLink(
											'<i class="fas fa-trash text-red-600"></i>',
											array('action' => 'delete', $persona['Persona']['id']),
											array('escape' => false, 'confirm' => '¿Estás seguro?', 'title' => 'Eliminar', 'class' => 'hover:scale-110 transition text-sm'),
											__('¿Estás seguro de que deseas eliminar este registro?')
										); ?>
									</div>
								</td>
							</tr>
							<?php endforeach; ?>
						<?php else: ?>
						<tr>
							<td colspan="11" class="px-4 py-6 text-center text-gray-500">
								<i class="fas fa-inbox text-3xl mb-2"></i>
								<p class="mt-2">No hay personas registradas con los filtros seleccionados.</p>
							</td>
						</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Paginación -->
		<div class="mt-6 flex items-center justify-between">
			<p class="text-sm text-gray-600">
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total')
				));
				?>
			</p>

			<div class="flex gap-2">
				<?php
					echo $this->Paginator->prev('← Anterior', array(
						'class' => 'px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 disabled:opacity-50'
					), null, array('class' => 'px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 cursor-not-allowed opacity-50'));

					echo $this->Paginator->numbers(array(
						'separator' => '',
						'first' => '«',
						'last' => '»',
						'modulus' => 5,
						'class' => 'px-2 py-1 mx-1 rounded',
						'currentClass' => 'bg-teal-600 text-white',
						'tag' => 'span'
					));

					echo $this->Paginator->next('Siguiente →', array(
						'class' => 'px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 disabled:opacity-50'
					), null, array('class' => 'px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 cursor-not-allowed opacity-50'));
				?>
			</div>
		</div>

	</main>

	<!-- Modal de Loading -->
	<div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
		<div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full mx-4 animate-pulse-scale">
			<div class="flex flex-col items-center gap-4">
				<!-- Spinner -->
				<div class="relative w-16 h-16">
					<div class="absolute inset-0 border-4 border-gray-200 rounded-full"></div>
					<div class="absolute inset-0 border-4 border-transparent border-t-teal-600 border-r-teal-600 rounded-full animate-spin"></div>
				</div>

				<!-- Mensaje -->
				<div class="text-center">
					<h3 id="loading-title" class="text-xl font-bold text-slate-800 mb-2">Consultando</h3>
					<p id="loading-message" class="text-slate-600 text-sm">Por favor espera...</p>
				</div>

				<!-- Puntos animados -->
				<div class="flex gap-1 mt-2">
					<span class="w-2 h-2 bg-teal-600 rounded-full animate-bounce" style="animation-delay: 0s;"></span>
					<span class="w-2 h-2 bg-teal-600 rounded-full animate-bounce" style="animation-delay: 0.2s;"></span>
					<span class="w-2 h-2 bg-teal-600 rounded-full animate-bounce" style="animation-delay: 0.4s;"></span>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="bg-white border-t border-slate-200 mt-12">
		<div class="container mx-auto px-4 py-6">
			<div class="text-center text-slate-600 text-sm">
				<p class="mb-2">© 2025 Gobierno de Colombia - Atención Primaria en Salud</p>
				<p class="text-xs text-slate-500">Sistema de Gestión de Personas y Salud Comunitaria</p>
			</div>
		</div>
	</footer>

	<style>
		@keyframes pulse-scale {
			0%, 100% {
				opacity: 1;
				transform: scale(1);
			}
			50% {
				opacity: 0.9;
				transform: scale(1.02);
			}
		}

		.animate-pulse-scale {
			animation: pulse-scale 2s ease-in-out infinite;
		}
	</style>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const loadingOverlay = document.getElementById('loading-overlay');
			const loadingTitle = document.getElementById('loading-title');
			const loadingMessage = document.getElementById('loading-message');
			const btnBuscar = document.getElementById('btn-buscar');
			const btnLimpiar = document.getElementById('btn-limpiar');
			const filtroForm = document.getElementById('filtro-form');

			// Mostrar loading al buscar
			if (btnBuscar) {
				filtroForm.addEventListener('submit', function(e) {
					loadingTitle.textContent = '🔍 Consultando';
					loadingMessage.textContent = 'Buscando personas registradas...';
					loadingOverlay.classList.remove('hidden');
				});
			}

			// Mostrar loading al limpiar
			if (btnLimpiar) {
				btnLimpiar.addEventListener('click', function(e) {
					loadingTitle.textContent = '🗑️ Limpiando';
					loadingMessage.textContent = 'Limpiando filtros de búsqueda...';
					loadingOverlay.classList.remove('hidden');

					// Simular un pequeño delay antes de navegar
					setTimeout(function() {
						window.location.href = this.href;
					}.bind(this), 500);

					e.preventDefault();
				});
			}
		});
	</script>

</body>
