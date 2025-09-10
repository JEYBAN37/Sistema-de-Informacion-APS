<div>

	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Canalizacion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
		<fieldset>
			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo de Canalizaciones
				</h1>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Detalles</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('tipo', array(
								'label' => 'Tipo de Canalizacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',

							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('nombre', array(
								'label' => 'Nombre de la Canalizacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',

							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('sede', array(
								'label' => 'Sede de la Canalizacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',

							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('telefonoInstitucional', array(
								'label' => 'Telefono Institucional',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('enlaceuno', array(
								'label' => 'Enlace',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('cargouno', array(
								'label' => 'Cargo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('telefono1', array(
								'label' => 'Telefono',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('correo1', array(
								'label' => 'Correo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('enlacedos', array(
								'label' => 'Enlace Dos',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('cargodos', array(
								'label' => 'Cargo Dos',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('telefono2', array(
								'label' => 'Telefono',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('correo2', array(
								'label' => 'Correo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							));
							?>
						</div>
					</div>
				</div>
			</div>

		</fieldset>
		<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
	</div>
</div>


<?php
$this->Html->css([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.select-search').select2();
		agregarOpcionSeleccion();
	});

	function agregarOpcionSeleccion() {
		$("#ObservacionResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
	}

	function validarTamanioSoporte() {
		var auxFile = document.getElementById('ActaAnexo');
		var sizeF = auxFile.files[0].size;
		if (sizeF > 3000000) {
			alert('El archivo debe ser menor a 3 Mb');
			auxFile.value = '';
		}
	}
</script>