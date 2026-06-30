<?php $this->layout = 'default_persona' ?>

<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">

	<!-- Main Content -->
	<main class="container mx-auto px-2 md:px-4 py-4 md:py-8 max-w-7xl">

		<!-- Title Section -->
		<div class="text-center mb-8">
			<h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-2 leading-tight">
				Dashboard de Canalizaciones
			</h1>
			<p class="text-slate-600 text-sm md:text-base">
				Indicadores clave de desempeño del sistema de gestión de personas
			</p>
		</div>

		<!-- Filtros -->
		<div class="bg-white rounded-xl shadow-md p-4 md:p-6 mb-6">
			<h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
				<i class="fas fa-sliders-h text-teal-600"></i>
				Filtros
			</h3>

			<?php echo $this->Form->create('Pages', array('type' => 'get', 'action' => 'canalizaciones', 'class' => 'w-full')); ?>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
				<!-- Filtro por Aseguradora -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('aseguradora', 'Aseguradora', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('aseguradora', array(
						'options' => $aseguradorasList,
						'label' => false,
						'empty' => '-- Todas las Aseguradoras --',
						'value' => $aseguradora,
						'required' => false,
						'class' => 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm'
					)); ?>
				</div>

				<!-- Filtro por Canalización -->
				<div class="flex flex-col">
					<?php echo $this->Form->label('canalizacion_id', 'IPS - Canalización', array('class' => 'text-sm font-semibold text-slate-700 mb-2')); ?>
					<?php echo $this->Form->input('canalizacion_id', array(
						'options' => $canalizacionesList,
						'label' => false,
						'empty' => '-- Todas las Canalizaciones --',
						'value' => $canalizacion_id,
						'required' => false,
						'class' => 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-sm'
					)); ?>
				</div>

				<!-- Botones -->
				<div class="flex flex-col justify-end gap-2">
					<?php echo $this->Form->button(__('Filtrar'), array(
						'class' => 'bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg font-semibold transition-colors text-sm',
						'type' => 'submit'
					)); ?>
					<?php echo $this->Html->link(__('Limpiar'), array('action' => 'canalizaciones'), array(
						'class' => 'bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg font-semibold transition-colors text-center text-sm'
					)); ?>
				</div>
			</div>

			<?php echo $this->Form->end(); ?>
		</div>

		<!-- KPI Cards - Primera fila -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

			<!-- Total Canalizaciones -->
			<div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-teal-600">
				<div class="flex items-center justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Total de Canalizaciones</p>
						<h2 class="text-4xl font-bold text-teal-600 mt-2"><?php echo $totalCanalizaciones; ?></h2>
						<p class="text-xs text-gray-500 mt-1">Personas registradas</p>
					</div>
					<i class="fas fa-hospital text-teal-200 text-5xl"></i>
				</div>
			</div>

			<!-- Servicios de Salud -->
			<div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600">
				<div class="flex items-center justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Servicios de Salud</p>
						<h2 class="text-4xl font-bold text-green-600 mt-2"><?php echo $serviciosSalud; ?></h2>
						<p class="text-xs text-green-600 mt-1"><?php echo $porcentajeSalud; ?>% del total</p>
					</div>
					<i class="fas fa-heartbeat text-green-200 text-5xl"></i>
				</div>
			</div>

			<!-- Oferta PIC -->
			<div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-600">
				<div class="flex items-center justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Oferta PIC</p>
						<h2 class="text-4xl font-bold text-blue-600 mt-2"><?php echo $ofertaPic; ?></h2>
						<p class="text-xs text-blue-600 mt-1"><?php echo $porcentajePic; ?>% del total</p>
					</div>
					<i class="fas fa-briefcase text-blue-200 text-5xl"></i>
				</div>
			</div>

			<!-- Caracterizaciones -->
			<div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-600">
				<div class="flex items-center justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Caracterizaciones</p>
						<h2 class="text-4xl font-bold text-purple-600 mt-2"><?php echo $caracterizaciones; ?></h2>
						<p class="text-xs text-purple-600 mt-1"><?php echo $porcentajeCaracterizacion; ?>% del total</p>
					</div>
					<i class="fas fa-clipboard-check text-purple-200 text-5xl"></i>
				</div>
			</div>
		</div>

		<!-- Segunda fila de KPIs -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

			<!-- Servicios Sociales -->
			<div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-orange-600">
				<div class="flex items-center justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Servicios Sociales</p>
						<h2 class="text-4xl font-bold text-orange-600 mt-2"><?php echo $servicioSocialCount; ?></h2>
						<p class="text-xs text-orange-600 mt-1"><?php echo $porcentajeSocial; ?>% del total</p>
					</div>
					<i class="fas fa-users text-orange-200 text-5xl"></i>
				</div>
			</div>

			<!-- Distribución por Estado -->
			<div class="bg-white rounded-xl shadow-lg p-6">
				<h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
					<i class="fas fa-chart-pie text-teal-600"></i>
					Distribución por Estado
				</h3>
				<div class="space-y-2">
					<?php
						$totalEstados = array_sum($estadosData);
						foreach ($estadosData as $estado => $count):
							$porcentaje = $totalEstados > 0 ? round(($count / $totalEstados) * 100, 1) : 0;
							$colorClass = ($estado == 'Activo' || $estado == 'activo') ? 'bg-green-500' :
										  (($estado == 'Inactivo' || $estado == 'inactivo') ? 'bg-red-500' : 'bg-gray-500');
					?>
					<div>
						<div class="flex justify-between items-center mb-1">
							<span class="text-sm font-medium text-gray-700"><?php echo h($estado); ?></span>
							<span class="text-xs font-bold text-gray-900"><?php echo $count; ?> (<?php echo $porcentaje; ?>%)</span>
						</div>
						<div class="w-full bg-gray-200 rounded-full h-2">
							<div class="<?php echo $colorClass; ?> h-2 rounded-full transition-all duration-300" style="width: <?php echo $porcentaje; ?>%"></div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<!-- Tablas de Datos -->
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

			<!-- Top 5 Aseguradoras -->
			<div class="bg-white rounded-xl shadow-lg p-6">
				<h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
					<i class="fas fa-shield-alt text-teal-600"></i>
					Top Aseguradoras
				</h3>
				<div class="space-y-3">
					<?php
						$contador = 1;
						foreach ($aseguradorasData as $aseg => $count):
							$totalAseg = array_sum($aseguradorasData);
							$porcentaje = $totalAseg > 0 ? round(($count / $totalAseg) * 100, 1) : 0;
					?>
					<div class="flex items-center justify-between p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg hover:shadow-md transition">
						<div class="flex items-center gap-3">
							<span class="inline-flex items-center justify-center w-8 h-8 bg-teal-600 text-white rounded-full text-sm font-bold"><?php echo $contador; ?></span>
							<span class="text-sm font-medium text-gray-800"><?php echo h($aseg); ?></span>
						</div>
						<div class="text-right">
							<p class="text-sm font-bold text-teal-600"><?php echo $count; ?></p>
							<p class="text-xs text-gray-500"><?php echo $porcentaje; ?>%</p>
						</div>
					</div>
					<?php $contador++; endforeach; ?>
				</div>
			</div>

			<!-- Top 5 Barrios -->
			<div class="bg-white rounded-xl shadow-lg p-6">
				<h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
					<i class="fas fa-map-marker-alt text-teal-600"></i>
					Top Barrios/Veredas
				</h3>
				<div class="space-y-3">
					<?php
						$contador = 1;
						foreach ($barriosData as $barrio => $count):
							$totalBarrios = array_sum($barriosData);
							$porcentaje = $totalBarrios > 0 ? round(($count / $totalBarrios) * 100, 1) : 0;
					?>
					<div class="flex items-center justify-between p-3 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg hover:shadow-md transition">
						<div class="flex items-center gap-3">
							<span class="inline-flex items-center justify-center w-8 h-8 bg-blue-600 text-white rounded-full text-sm font-bold"><?php echo $contador; ?></span>
							<span class="text-sm font-medium text-gray-800"><?php echo h($barrio); ?></span>
						</div>
						<div class="text-right">
							<p class="text-sm font-bold text-blue-600"><?php echo $count; ?></p>
							<p class="text-xs text-gray-500"><?php echo $porcentaje; ?>%</p>
						</div>
					</div>
					<?php $contador++; endforeach; ?>
				</div>
			</div>
		</div>

		<!-- Tabla de Canalizaciones (IPS) -->
		<div class="bg-white rounded-xl shadow-lg p-6 mb-6">
			<h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
				<i class="fas fa-hospital text-teal-600"></i>
				Distribución por IPS (Canalización)
			</h3>

			<div class="overflow-x-auto">
				<table class="w-full text-sm">
					<thead class="bg-gradient-to-r from-teal-50 to-cyan-50 border-b border-gray-300">
						<tr>
							<th class="px-4 py-3 text-left font-semibold text-gray-800">#</th>
							<th class="px-4 py-3 text-left font-semibold text-gray-800">IPS / Canalización</th>
							<th class="px-4 py-3 text-center font-semibold text-gray-800">Cantidad</th>
							<th class="px-4 py-3 text-center font-semibold text-gray-800">Porcentaje</th>
							<th class="px-4 py-3 text-center font-semibold text-gray-800">Barra Visual</th>
						</tr>
					</thead>
					<tbody class="divide-y divide-gray-200">
						<?php
							$contador = 1;
							$totalCan = array_sum($canalizacionesDataArray);
							foreach ($canalizacionesDataArray as $nombre => $count):
								$porcentaje = $totalCan > 0 ? round(($count / $totalCan) * 100, 1) : 0;
						?>
						<tr class="hover:bg-gray-50 transition">
							<td class="px-4 py-3 font-bold text-teal-600"><?php echo $contador; ?></td>
							<td class="px-4 py-3 text-gray-800"><?php echo h($nombre); ?></td>
							<td class="px-4 py-3 text-center font-semibold text-gray-900"><?php echo $count; ?></td>
							<td class="px-4 py-3 text-center font-semibold text-teal-600"><?php echo $porcentaje; ?>%</td>
							<td class="px-4 py-3">
								<div class="w-full bg-gray-200 rounded-full h-2">
									<div class="bg-gradient-to-r from-teal-500 to-cyan-500 h-2 rounded-full transition-all duration-300" style="width: <?php echo $porcentaje; ?>%"></div>
								</div>
							</td>
						</tr>
						<?php $contador++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Footer Info -->
		<div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-4 text-center border border-teal-200">
			<p class="text-xs md:text-sm text-gray-600">
				<i class="fas fa-info-circle text-teal-600 mr-2"></i>
				Este dashboard se actualiza automáticamente al filtrar por aseguradora o canalización.
				Los datos mostrados corresponden a personas que han aceptado participar en el formulario.
			</p>
		</div>

	</main>

</body>
