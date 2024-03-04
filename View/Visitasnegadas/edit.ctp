<?php $this->layout = 'default_familia' ?>


<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validationSocioAmbiental'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<body style="font-size: 14px;">


	<div>
		<?php echo $this->Form->create('Visitasnegada'); ?>
		<div class="form-group col-sm-12 center">

			<fieldset>

				<div class="col-12 text-center">
					<h1 class="title-general-forms">No Encuestadas
					</h1>
				</div>




				<h2 class="subtitle-general-forms">Datos Básicos</h2>
				<hr style=" border:0.1px solid rgba(0,0,0,.125);">

				<div class="grow justify-content-center" display="none" style="margin-top:20px; ">
					<div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
						<div class="form-group row">


							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('id')
								?>
								<?php echo $this->Form->input('responsable_id', array(
									'label' => 'Responsable diligenciamiento Encuesta',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'class' => 'select-search'
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('ubicacion_id', array(
									'label' => 'Territorio',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'class' => 'select-search col-md-12'
								)); ?>

								<p class="help-block">Los dos últimos codigos del hacen referencia al numero de la torre
								</p>
							</div>
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$numapartamento = array(
									'' => 'Elegir',
									'1' => '1',
									'2' => '2',
									'3' => '3',
									'4' => '4',
									'5' => '5',
									'6' => '6',
									'7' => '7',
									'8' => '8',
									'9' => '9',
									'10' => '10',
									'11' => '11',
									'12' => '12',
									'13' => '13',
									'14' => '14',
									'15' => '15',
									'16' => '16',
									'17' => '17',
									'18' => '18',
									'19' => '19',
									'20' => '20',
									'21' => '21',
									'22' => '22',
									'23' => '23',
									'24' => '24',
									'25' => '25',
									'26' => '26',
									'27' => '27',
									'28' => '28',
									'29' => '29',
									'30' => '30',
									'31' => '31',
									'32' => '32',
									'33' => '33',
									'34' => '34',
									'35' => '35',
									'36' => '36',
									'37' => '37',
									'38' => '38',
									'39' => '39',
									'40' => '40',
									'41' => '41',
									'42' => '42',
									'43' => '43',
									'44' => '44',
									'45' => '45',
									'46' => '46',
									'47' => '47',
									'48' => '48',
									'49' => '49',
									'50' => '50',

								);

								echo $this->Form->input('apartamento', array(
									'label' => 'Num. Apartamento',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
									'options' => $numapartamento,
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								echo $this->Form->input('direccion', array(
									'label' => 'Dirección',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>
							</div>



							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('nombreshabitante', array(
									'label' => 'Nombre de la Persona Presente',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$TipoDeDocumentoOptions = array(
									'' => 'Elegir',
									'CC' => 'Cedula de ciudadania',
									'TI' => 'Tarjeta de identidad',
									'PPT' => 'Permiso Protección Temporal',
									'SD' => 'Sin Dato',

								);
								echo $this->Form->input('tipodocumento', array(
									'label' => 'Tipo de Documento:',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => '',
									'type' => 'select',
									'options' => $TipoDeDocumentoOptions,
									//'empty' => true, // Establecer el campo como vacío
								));
								?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('numerodocumento', [
									'label' => 'N° de documento',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
								]);  ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								echo $this->Form->input('telefono', array(
									'label' => 'telefono de contacto:',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',

								));
								?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$EstateHome = array(
									'' => 'Elegir',
									'Cerrada' => 'Cerrada',
									'Vacia' => 'Vacia',
									'No aceptó ficha' => 'No aceptó ficha',
									'Renuente' => 'Renuente',

								);
								echo $this->Form->input('estadocasa', array(
									'label' => 'Estado de la Casa',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
									'options' => $EstateHome,
								));
								?>
							</div>

							<div class="form-group col-md-12" style="margin-top: 20px;">
								<?php
								$numhogaresOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
								echo $this->Form->input('observacion', array(
									'label' => 'Observación',
									'class' => 'form-control',
									'style' => 'height:90px; font-size: 15px; ',
								));
								?>

							</div>

							<?php echo $this->Form->input('fecha', array(
								'hidden',
							)); ?>


						</div>
					</div>
					<?php //echo $this->Form->end(__('Guardar y Listar')); 
					?>
					<?php echo $this->Form->submit('Guardar', [
						'name' => 'btn',
						'class' => 'my-button',
					]);
					?>
				</div>
			</fieldset>

		</div>
	</div>

</body>
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
		$("#VisitasnegadaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
		$("#VisitasnegadaResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
	}

	$("#switch-label").change(function() {
		var switchValue = this.checked ? "si" : "no";
		mostrar(switchValue);
	});

	$("#switch-label-initial").change(function() {
		var switchValue = this.checked ? "yes" : "nope";
		mostrar(switchValue);
	});


	function mostrar(id) {
		if (id == "si") {
			$("#si").show();
			$("#no").hide();

		} else if (id == "no") {
			$("#si").hide();
			$("#no").show();

		}

		if (id == "yes") {
			$("#yes").show();
			$("#nope").hide();
			$("#validacion").val("si acepto");

		} else if (id == "nope") {
			$("#yes").hide();
			$("#nope").show();
			$("#validacion").val(" ");

		}
	}
</script>