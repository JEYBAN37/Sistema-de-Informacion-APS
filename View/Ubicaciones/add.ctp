<div>
	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Ubicacion'); ?>
		<fieldset>
			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Ubicacion</h1>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos de Ubicacion</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							$TipoDeDocumentoOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
							echo $this->Form->input('zona', array(
								'label' => 'Zona',
								'class' => 'form-control',
								'style' => 'font-size: 12px;',
								'placeholder' => '',
								'type' => 'select',
								'options' => $TipoDeDocumentoOptions
							));
							?>
							<div class="form-group col-md-6">
								<?php
								$TipoDeDocumentoOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
								echo $this->Form->input('tipo1', array(
									'label' => 'Tipo',
									'class' => 'form-control',
									'style' => 'font-size: 12px;',
									'placeholder' => '',
									'type' => 'select',
									'options' => $TipoDeDocumentoOptions
								));
								?>
							</div>

							<div class="form-group col-md-6">
								<?php
								$TipoDeDocumentoOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
								echo $this->Form->input('comuna', array(
									'label' => 'Comuna',
									'class' => 'form-control',
									'style' => 'font-size: 12px;',
									'placeholder' => '',
									'type' => 'select',
									'options' => $TipoDeDocumentoOptions
								));
								?>
							</div>

							<div class="form-group col-md-6">
								<?php
								$TipoDeDocumentoOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
								echo $this->Form->input('tipo2', array(
									'label' => 'Tipo',
									'class' => 'form-control',
									'style' => 'font-size: 12px;',
									'placeholder' => '',
									'type' => 'select',
									'options' => $TipoDeDocumentoOptions
								));
								?>
							</div>

							<div class="form-group col-md-6">
								<?php
								$TipoDeDocumentoOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
								echo $this->Form->input('barrio', array(
									'label' => 'Barrio',
									'class' => 'form-control',
									'style' => 'font-size: 12px;',
									'placeholder' => '',
									'type' => 'select',
									'options' => $TipoDeDocumentoOptions
								));
								?>
							</div>

							<div class="form-group col-md-6">
								<?php
								$TipoDeDocumentoOptions = array('' => 'Elegir', 'Casa_Apto.' => 'Casa/Apartamento', 'Pieza' => 'Pieza', 'Cuarto improvisado' => 'Cuarto improvisado');
								echo $this->Form->input('estrato', array(
									'label' => 'Estrato',
									'class' => 'form-control',
									'style' => 'font-size: 12px;',
									'placeholder' => '',
									'type' => 'select',
									'options' => $TipoDeDocumentoOptions
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



<div class="actions">
	<h3><?php echo ('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('List Ubicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(('List Sociambientalscompleta'), array('controller' => 'sociambientalscompleta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Sociambientalscompletum'), array('controller' => 'sociambientalscompleta', 'action' => 'add')); ?> </li>
	</ul>
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
		$("#ActaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
		$("#ActaProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
		$("#ActaResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
	}

	function mostrarBarrio(id) {
		if (id == "2")
			$("#divActualizarBarrio").show();
		else
			$("#divActualizarBarrio").hide();
	}

	function validar() {
		var todo_correcto = true;

		if (document.getElementById('status').value == '') {
			todo_correcto = false;
		}

		if (!todo_correcto) {
			alert('Algunos campos no están correctos, vuelva a revisarlos');
		}

		return todo_correcto;
	}

	function mostrar(id) {
		if (id == "si") {
			$("#si").show();
			$("#no").hide();

		} else if (id == "no") {
			$("#si").hide();
			$("#no").show();

		}
	}

	function moduloSocioamabiental(id) {
		if (id == "completo") {
			$("#completo").show();
			$("#revisar").hide();

		} else if (id == "revisar") {
			$("#completo").hide();
			$("#revisar").show();

		}
	}
</script>