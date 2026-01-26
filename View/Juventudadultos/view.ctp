<?php $this->layout = 'default_familia' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
	<h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
		Formato de Ficha de Caracterizacion<br>
		<span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
			Modulo Persona
		</span>
	</h1>
	<p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
		Formato de visualización e impresion de Ficha de Caracterizacion.
	</p>
</div>

<div class="flex max-w-6xl mx-auto text-center mb-8 gap-4">

    <button title="Regresar a la familia" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'view', $juventudadulto['Juventudadulto']['familia_id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="m12 19-7-7 7-7" />
            <path d="M19 12H5" />
        </svg>
    </button>
</div>

<div class="max-w-6xl mx-auto p-18">
	<div class="bg-white shadow-2xl rounded-xl p-12 block" id="print-area">
		<!-- Contenido a imprimir -->
		<div class="overflow-x-auto">
			<table class="w-full border border-gray-300 text-sm text-gray-800">
				<tbody>
					<!-- Encabezado con logo y datos -->
					<tr>
						<td rowspan="1" colspan="3" class="p-2 text-center align-center border border-gray-300">
							<img src="<?php echo $this->Html->url('/img/aps_v2025/logo_Pasto.png', true); ?>" alt="Logo Pasto" class="logo-pasto w-[200px] mx-auto">
						</td>
						<td rowspan="1" colspan="3" class="p-2 text-center align-center border border-gray-300">
							<img src="<?php echo $this->Html->url('/img/aps_v2025/Logo_del_Ministerio.png', true); ?>" alt="Logo Ministerio" class="logo-ministerio w-[100px] mx-auto">
						</td>
						<td rowspan="1" colspan="3" class="p-2 text-center align-center border border-gray-300">
							<img src="<?php echo $this->Html->url('/img/aps_v2025/logo_pst_2025.png', true); ?>" alt="Logo PST" class="logo-pst mx-auto w-[200px]">
						</td>
					</tr>
					<tr>
						<td colspan="9" class="border border-gray-300 font-bold text-center p-2">
							PROCESO SALUD PÚBLICA
						</td>
					</tr>
					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
							NOMBRE DEL FORMATO: FICHA DE CARACTERIZACIÓN
						</td>
					</tr>
					<tr>
						<td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2025</td>
						<td colspan="2" class="border border-gray-300 p-2">VERSIÓN: </td>
						<td colspan="2" class="border border-gray-300 p-2">CÓDIGO: </td>
						<td colspan="2" class="border border-gray-300 py-2 pr-12 pl-2"> <span class="font-semibold">Página:</span></td>
					</tr>
					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold p-2 text-center">INFORMACION DE IDENTIFICACION</td>
					</tr>

					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('ID'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['id']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Numero de Documento'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['numerodoc']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Tipo de Documento'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['tipodocumento']); ?> </td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Nombre Completo'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['primernombre'] . ' ' . $juventudadulto['Juventudadulto']['segundonombre'] . ' ' . $juventudadulto['Juventudadulto']['primerapellido'] . ' ' . $juventudadulto['Juventudadulto']['segundoapellido']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Fecha de Nacimiento'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['fechanac']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Sexo'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['sexo']); ?> </td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Aseguradora'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['aseguradora']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Regimen'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['regimen']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Estado de Afiliacion'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['estadoafiliacion']); ?> </td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Rol'); ?></td>
						<td colspan="1" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['rol']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Etnia'); ?></td>
						<td colspan="1" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['grupopoblacional']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Grupo Poblacional'); ?></td>
						<td colspan="1" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['grupopoblacional']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Telefono'); ?></td>
						<td colspan="1" class="border border-gray-300 p-2"><?php if (!empty($juventudadulto['Juventudadulto']['telefono'])): ?>
								<a href="tel:<?php echo h($juventudadulto['Juventudadulto']['telefono']); ?>" class="text-teal-600 hover:underline"><?php echo h($juventudadulto['Juventudadulto']['telefono']); ?></a>
							<?php else: ?>
								<?php echo h(''); ?>
							<?php endif; ?>
						</td>
						<td colspan="1" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['email']); ?></td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Nivel Educativo'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['niveleducativo']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Ocupacion'); ?></td>
						<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['ocupacion']); ?> </td>
					</tr>
				</tbody>
			</table>

			<table class="w-full border border-gray-300 text-sm text-gray-800 mt-6">
				<tbody>
					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
							ANAMESIS
						</td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Talla'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['talla']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Peso'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['peso']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Indice de Masa Corporal'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['indicemasacorporal']); ?> </td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Condicion Cronica'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['condicioncronica']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Discapacidad'); ?></td>
						<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['discapacidad']); ?> </td>
					</tr>

					<?php
					if ($juventudadulto['Juventudadulto']['sexo'] === 'Mujer') :
					?>
						<tr class="bg-gray-100">
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Antecedente Ginecologico'); ?></td>
							<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['antecedenteginecologico']); ?> </td>
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Toma Citologia'); ?></td>
							<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['tomacitologia']); ?> </td>
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Mamografia</td>
							<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['mamografia']); ?> </td>
						</tr>

					<?php
					endif;
					?>

					<?php

					$now  = new DateTime();
					$birthDate = new DateTime($juventudadulto['Juventudadulto']['fechanac']);
					$age = $now->diff($birthDate)->y;

					if ($age > 12) :
					?>
						<tr>
							<td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
								SALUD SEXUAL Y REPRODUCTIVA
							</td>
						</tr>
						<tr class="bg-gray-100">
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Inicio vida sexual'); ?></td>
							<td colspan="3" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['iniciovidasexual']); ?> </td>
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Metodo Anticonceptivo'); ?></td>
							<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['discapacidad']); ?> </td>
						</tr>
					<?php
					endif;
					?>
					<?php
					if ($juventudadulto['Juventudadulto']['gestacion'] === 'Si') :
					?>
						<tr class="bg-gray-100">
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Control Prenatal'); ?></td>
							<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['controlprenatal']); ?> </td>
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Riesgo Embarazo'); ?></td>
							<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['riesgoembarazo']); ?> </td>
							<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Signos de Alarma</td>
							<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['signoAlarma']); ?> </td>
						</tr>

					<?php
					endif;
					?>
				</tbody>
			</table>

			<table class="w-full border border-gray-300 text-sm text-gray-800 mt-6">
				<tbody>
					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
							ATENCIONES
						</td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Salud Oral'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['saludoral']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Esquema de Vacunación'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['esquemavacunacion']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Desparacitacion'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['desparasitacion']); ?> </td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Desnutrición'); ?></td>
						<td colspan="8" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['desnutricion']); ?> </td>
					</tr>

					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Desarrollo Infantil'); ?></td>
						<td colspan="8" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['desarrolloinfantil']); ?> </td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('ERA'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['era']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('EDA'); ?></td>
						<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['eda']); ?> </td>
					</tr>

					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Prematuro'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['prematuro']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Anomalia Congenita'); ?></td>
						<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['anomaliacongenita']); ?> </td>
					</tr>

					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Perimetro'); ?></td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Branquial'); ?></td>
						<td colspan="1" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['perimetrobraquial']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Cefalico'); ?></td>
						<td colspan="1" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['perimetrocefalico']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Cintura'); ?></td>
						<td colspan="1" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['perimetrocintura']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Cadera'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['perimetrocadera']); ?> </td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Lactancia Materna'); ?></td>
						<td colspan="8" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['lactanciamaterna']); ?> </td>
					</tr>

				</tbody>
			</table>

			<table class="w-full border border-gray-300 text-sm text-gray-800 mt-6">
				<tbody>
					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
							SERVICIOS DE SALUD
						</td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Valoracion Medica'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['valoracionmedica']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Motivos de Inasistencia'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['motivoinasistencia']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Medicina Tradicional'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['saludalternativa']); ?> </td>
					</tr>
					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
							PSICOSOCIAL
						</td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Actividad Fisica'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['actividadfisica']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Cuidador'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['cuidador']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Consumo Padres'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['padresconsumo']); ?> </td>
					</tr>

					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Menor Estudia'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['estudio']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Consumo SPA'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['consumospa']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Situaciones'); ?></td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?> </td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Sospecha de Maltrato'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['sopechamaltrato']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Sospecha de Problemas Psicologicos'); ?></td>
						<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['riesgodepresion']); ?> </td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Signos de Alarma</td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['signoAlarma']); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Riego de Ansiedad</td>
						<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['riegodansiedad']); ?> </td>
					</tr>
				</tbody>
			</table>


			<table class="w-full border border-gray-300 text-sm text-gray-800 mt-6">
				<tbody>
					<tr>
						<td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
							CANALIZACION
						</td>
					</tr>
					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Canalizaciones'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php
							$canalizacionRaw = $juventudadulto['Juventudadulto']['canalizacionuno'];

							if ($canalizacionRaw) {
								$partes = array_filter(array_map('trim', explode(',', $canalizacionRaw)));
								if (!empty($partes)) {
									echo '<ul class="list-disc list-inside space-y-1">';
									foreach ($partes as $parte) {
										echo '<li>' . h($parte) . '</li>';
									}
									echo '</ul>';
								} else {
									echo h($canalizacionRaw);
								}
							} else {
								echo h($canalizacionRaw);
							}
							?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Estado</td>
						<td colspan="4" class="border border-gray-300 p-2"><?php echo h($juventudadulto['Juventudadulto']['estadocanalizacion']); ?> </td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Observaciones'); ?></td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $this->Html->div('observacionplancuidado-tema', $juventudadulto['Juventudadulto']['observacion'], ['escape' => false]); ?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Educacion'); ?></td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $this->Html->div('observacionplancuidado-tema', $juventudadulto['Juventudadulto']['educacion'], ['escape' => false]); ?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('IPS'); ?></td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $this->Html->div('observacionplancuidado-tema', $juventudadulto['Juventudadulto']['educacion'], ['escape' => false]); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>