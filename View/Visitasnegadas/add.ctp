<?php $this->layout = 'default_familia' ?>




<body style="font-size: 14px;">

	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 style="margin-left: 80px;" class="modal-title" id="myModalLabel">Estado de novedad</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>



				</div>
				<div class="modal-body">
					<!--div>
                        <img src="../img/logoescudopasto.jpg" alt="Imagen de marcador genérico" width="199px" height="auto">
                    </div-->
					<h4 style=" text-align: justify; margin: 20px;">Estado de la casa</h4>

					<p style=" text-align: justify; margin: 20px;"> <strong>Cerrada:</strong> No atienden pero se
						reconoce que si habitan en la residencia.
						<strong>Vacia:</strong> La residencia esta desocupada o no habita nadie.
						<strong>No aceptó ficha:</strong> La persona manifiesta que no desea participar.
						<strong>Local Comercial: </strong>Vivienda de uso comercial(Taller, tienda, bodega)
						donde no habitan famlias.
					</p>




				</div>
				<div class="modal-footer">
					<a href="#" style="margin-top:-5px; background-color: #449D45;" data-dismiss="modal" class="my-button">Salir</a>
				</div>
			</div>
		</div>
	</div>


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

							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('numMicroterritorio', array(
									'label' => 'Numero de microterritorio',
									'style' => 'height:30px;  font-size: 15px ; width:100%',

								)); ?>
								</p>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('barriovereda', array(
									'label' => 'Barrio/sector/vereda',
									'style' => 'height:30px;  font-size: 15px ; width:100%',

								)); ?>
								</p>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('manzana', array(
									'label' => 'N.Cuadra o Manzana',
									'style' => 'height:30px;  font-size: 15px ; width:100%',


								)); ?>

							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php


								echo $this->Form->input('apartamento', array(
									'label' => 'Num. Apartamento',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
									'options' => $numapartamento,
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('direccion', array(
									'label' => 'Nomenclatura de la Dirección',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>


							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('latitud', array(
									'label' => 'Geopunto latitud',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>
								<p class="help-block">Coordenada de latitud en la ubicación geográfica. Ej.: 0.670348
									Valor numérico con decimales, separador punto. Acepta valores negativos
								</p>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php echo $this->Form->input('longitud', array(
									'label' => 'Geopunto longitud',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px',
								)); ?>
								<p class="help-block">Coordenada de longitud en la ubicación geográfica . Ejemplo:
									-70.240149
									Valor numérico con decimales, separador punto. Acepta valores negativos
								</p>
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
									'Local Comercial' => 'Local Comercial',

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
		$("#mostrarmodal").modal("show");
	});
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