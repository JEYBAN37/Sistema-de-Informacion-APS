<?php $this->layout = 'default_familia'; ?>
<div class="row" style="margin:1px;">
	<div class="dataTable_wrapper">
		<div class="row" style="justify-content: center;">
			<div class=" col-sm-12">
				<table width="100%" class="table table-striped table-bordered table-hover">
					<thead>
						<div class="dataTable_wrapper">
							<div class="row">
								<div class="col-sm-12">
									<table width="100%" class="table table-striped table-bordered table-hover">
										<tr>
										<tr>
											<td rowspan="4" style="text-align: center; vertical-align: middle;">

												<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWooVnP-ggyJ3x_xZOgBlBAHas5_sVFyR16boEFOv24Q&s" style="display: block; margin: 0 auto;" width="100px" height="auto">

											</td>
										</tr>
										<tr>
											<td colspan="6">Atención Primaria En Salud</td>
										</tr>
										<tr>
											<td colspan="6">Nombre de Formato: Registro Joven-adulto
											</td>
										</tr>
										<td>Vigencia 00-00-000</td>
										<td>Version 1.0</td>
										<td>Codigo ID Adultos</td>
										<td><?php echo ($juventudadulto['Juventudadulto']['id']); ?>
										</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="row" style="justify-content: center;">
								<div class="col-sm-12">

									<table width="100%" class="table table-striped table-bordered table-hover">
										<tr class="title">
											<td colspan="3">Nombre del Menor </td>
											<td colspan="3">Documento </td>
											<td colspan="3">Aseguradora </td>
											<td colspan="3">Familia Asociada </td>
										</tr>
										<tr>

											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['primernombre'] . ' ' . $juventudadulto['Juventudadulto']['segundonombre'] . ' ' . $juventudadulto['Juventudadulto']['primerapellido'] . ' ' . $juventudadulto['Juventudadulto']['segundoapellido']); ?>
											</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['tipodocumento'] . ' ' . $juventudadulto['Juventudadulto']['numerodoc']); ?>
											</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['aseguradora'] . ' ' . $juventudadulto['Juventudadulto']['regimen']); ?>
											</td>
											<td colspan="3">
												<?php echo $this->Html->link($juventudadulto['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?>
											</td>

										</tr>
										<tr>
											<td colspan="12" style="text-align: center;" class="title">Valoración En
												Salud</td>

										</tr>

										<tr>
											<td colspan="2" class="title"> Talla</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['talla']); ?>
											</td>
											<td colspan="2" class="title">Peso</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['peso']); ?>
											</td>
											<td colspan="2" class="title">Indice de Masa Corporal</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['indicemasacorporal']); ?>
											</td>

										</tr>

										<tr>
											<td colspan="2" class="title">Tensión Arterial</td>
											<td colspan="4">
												<?php echo ($juventudadulto['Juventudadulto']['tensionarterial']); ?>
											</td>
											<td colspan="2" class="title">Discapacidad</td>
											<td colspan="4">
												<?php echo ($juventudadulto['Juventudadulto']['discapacidad']); ?>
											</td>

										</tr>



										<tr>
											<td colspan="2" class="title">Enfermedad Crónica</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['condicioncronica']); ?>
											</td>
											<td colspan="2" class="title">Enfermedad Crónica</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['condicioncronica1']); ?>
											</td>
											<td colspan="2" class="title">Antecedente Ginecológico</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['antecedenteginecologico']); ?>
											</td>
										</tr>
										<tr>

											<td colspan="2" class="title">Valoración Medica</td>
											<td colspan="10">
												<?php echo ($juventudadulto['Juventudadulto']['valoracionmedica']); ?>
											</td>
										</tr>

										<tr>
											<td colspan="12" style="text-align: center;" class="title">Atención En
												Salud</td>

										</tr>
										<tr>
											<td colspan="6" style="text-align: center;" class="title">Esquema de
												Vacunación</td>
											<td colspan="6" style="text-align: center;" class="title">Desparasitación
											</td>

										</tr>
										<tr>
											<td colspan="6">
												<?php echo ($juventudadulto['Juventudadulto']['esquemavacunacion']); ?>
											</td>
											<td colspan="6">
												<?php echo ($juventudadulto['Juventudadulto']['desparasitacion']); ?>
											</td>
										</tr>
										<tr>
											
											<td colspan="6" class="title">Salud Oral</td>
											<td colspan="6">
												<?php echo ($juventudadulto['Juventudadulto']['saludoral']); ?>
											</td>

										</tr>
										<tr>
											<td colspan="2" class="title">Valoración Medica</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['valoracionmedica']); ?>
											</td>
											<td colspan="2" class="title">Toma citología</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['tomacitologia']); ?>
											</td>
										</tr>
										<tr>
											<td colspan="12" style="text-align: center;" class="title">Salud Sexual y
												Reproductiva</td>

										</tr>

										<tr>
											<td colspan="2" class="title">Inicio vida Sexual</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['iniciovidasexual']); ?>
											</td>
											<td colspan="2" class="title">Metodos Anticonceptivos</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?>
											</td>
											<td colspan="2" class="title">Infecciones de trasmision Sexual</td>
											<td colspan="2">
												<?php echo ($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?>
											</td>
										</tr>


										<tr>
											<td colspan="12" style="text-align: center;" class="title">Condiciones de
												Vulnerabilidad</td>

										</tr>
										<tr>
											<td colspan="4" class="title">Riesgo de Maltrato</td>
											<td colspan="8">
												<?php echo ($juventudadulto['Juventudadulto']['sopechamaltrato']); ?>
											</td>
										</tr>


										<tr>
											<td colspan="3" class="title">Riesgo Psicosocial</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?>
											</td>
											<td colspan="3" class="title">otro..</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?>
											</td>
										</tr>
										<tr>
											<td colspan="3" class="title">Consumo sustancias Psicoactivas</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['consumospa']); ?>
											</td>
											<td colspan="3" class="title">Consumo sustancias Psicoactivas</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['consumospa1']); ?>
											</td>
										</tr>
										<tr>
											<td colspan="3" class="title">Estudio</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['estudio']); ?>
											</td>
											<td colspan="3" class="title">Educación</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['educacion']); ?>
											</td>
										</tr>
										<tr>
											<td colspan="12" style="text-align: center;" class="title">Plan de
												Atención Integral</td>

										</tr>

										<tr>
											<td colspan="3" class="title">Canalización uno</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['canalizacionuno']); ?>
											</td>
											<td colspan="3" class="title">Canalización dos</td>
											<td colspan="3">
												<?php echo ($juventudadulto['Juventudadulto']['canalizaciondos']); ?>
											</td>
										</tr>
										<tr>
											<td colspan="2" class="title">Canalización tres</td>
											<td colspan="10">
												<?php echo ($juventudadulto['Juventudadulto']['canalizaciontres']); ?>
											</td>
										</tr>

									
									</table>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<table width="100%" class="table table-striped table-bordered table-hover">
										<button class="my-button" onclick="window.print();">Imprimir</button>
									</table>
								</div>
							</div>
						</div>
			</div>


			<thead>

				</table>
		</div>
	</div>
</div>




</div>



<?php
/*$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://code.jquery.com/jquery-3.2.1.min.js',
    'https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);*/
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('textarea').eac(function() {
			this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
		}).on('input', function() {
			this.style.height = 'auto';
			this.style.height = (this.scrollHeight) + 'px';
		});

	});
</script>