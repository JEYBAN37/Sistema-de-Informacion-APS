<?php $this->layout = 'default_familia' ?>
<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<body style="font-size: 14px;">
	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Juventudadulto'); ?>
		<fieldset>


			<div class="col-12 text-center">
				<h1 class="title-general-forms">Módulo Juventud Adultos
				</h1>

			</div>

			<h2 class="subtitle-general-forms ">Datos Personales</h2>
			<hr style=" border:0.1px solid rgba(0,0,0,.125);">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
					<div class="form-group row">
						<?php echo $this->Form->input('id'); ?>
						<?php

						$idAux = $_GET['juventudadultos'];
						echo $this->Form->input('familia_id', array('value' => '' . $idAux, 'type' => 'hidden'));

						?>
						<!--div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);
							?>
                        </div-->



						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$TipoDeDocumentoOptions = array(
								'' => 'Elegir',
								'CC' => 'Cedula de ciudadania',
								'TI' => 'Tarjeta de identidad',
								'PPT' => 'Permiso Protección Temporal',

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
							<?php echo $this->Form->input('numerodoc', [
								'label' => 'N° de documento',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php echo $this->Form->input('primerapellido', [
								'label' => 'Primer Apellido',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php echo $this->Form->input('segundoapellido', [
								'label' => 'Segundo Apellido',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php echo $this->Form->input('primernombre', [
								'label' => 'Primer Nombre',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php echo $this->Form->input('segundonombre', [
								'label' => 'Segundo Nombre',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<!-- Campo de fecha de nacimiento -->
							<?php echo $this->Form->input('fechanac', [
								'label' => 'Fecha de nacimiento:',
								'type' => 'date',
								'minYear' => date('Y') - 104,
								'maxYear' => date('Y') - 18,
								'style' => 'height:30px;  font-size: 15px ;',
								'id' => 'fechanac', // Agrega este identificador al campo de fecha de nacimiento
								'empty' => true, // Establecer el campo como vacío

							]); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<!-- Campo de edad calculada (se llenará automáticamente con JavaScript) -->
							<?php echo $this->Form->input('edad', [
								'label' => 'Edad',
								'style' => 'font-size: 16px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;',
								'id' => 'edad', // Agrega este identificador al campo de edad
								'readonly' => true, // Hace que el campo de edad sea de solo lectura
								'type' => 'number',
								'class' => 'form-control',
								'step' => '0.01'

							]); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$generoOption = [
								' ' => 'Elegir',
								'Hombre' => 'Hombre',
								'Mujer' => 'Mujer',
							];
							echo $this->Form->input('sexo', [
								'label' => 'Sexo',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $generoOption,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'mostrar(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							]);
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$generoOption = [
								' ' => 'Elegir',
								'Masculino' => 'Masculino',
								'Femenino' => 'Femenino',
								'No binanrio' => 'No binario',
								'Prefiere no informar' => 'Prefiere no informar',

							];
							echo $this->Form->input('genero', [
								'label' => '¿Cúal es su género?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $generoOption,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'mostrar(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							]);
							?>

							<button type="button" id="ayudaButton3" class="btn btn-success rounded-circle"
								data-toggle="popover" data-placement="top" data-content="Reconocer que las mujeres, 
								los hombres y las personas de los sectores sociales LGBTI,
								reaccionan de distinta forma a los servicios de salud,
								 debido a sus diferentes experiencias a lo largo de la vida,
								 que afecta su salud, la incidencia o prevalencia de enfermedades y su tratamiento. 
								 (Ajustado de módulo conocimientos, OPS 2020).
                                        " style="width: 30px; height: 30px; padding: 0; font-size: 18px;">
								?
							</button>
						</div>


						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$aseguradoraOption = [
								' ' => 'Elegir',
								'Sanitas' => 'Sanitas',
								'Emssanar' => 'Emssanar',
								'Nueva EPS' => 'Nueva EPS',
								'Mallamas' => 'Mallamas',
								'Famisanar' => 'Famisanar',
								'Asmet Salud' => 'Asmet Salud',
								'Sanidad PONAL' => 'Sanidad PONAL',
								'PROINSALUD' => 'PROINSALUD',
								'Fondo UNDENAR' => 'Fondo UDENAR',
								'Medicina Prepagada' => 'Medicina Prepagada',
								'otra' => 'Otra',
								'Sin afiliacion' => 'Sin afiliación',
								'SD' => 'Sin dato',
							];
							echo $this->Form->input('aseguradora', [
								'label' => 'Aseguradora',
								'class' => 'form-control',
								'style' => 'height:30px; font-size: 15px; width:100%',
								'options' => $aseguradoraOption,
								'id' => 'aseguradora', // Añade un ID único
							]);
							?>
						</div>

						<!-- Segundo campo de selección -->
						<div class="form-group col-md-6" style="margin-top: 20px; display: none;"
							id="otraAseguradoraDiv">
							<?php
							echo $this->Form->input('aseguradora', [
								'label' => 'Otra Aseguradora',
								'class' => 'form-control',
								'style' => 'height:30px; font-size: 15px; width:100%',
								'disabled' => 'disabled', // Inicialmente deshabilitado
								'id' => 'otraAseguradora', // Añade un ID único
							]);
							?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$regimenOption = [
								' ' => 'Elegir',
								'Subsidiado' => 'Subsidiado',
								'Contributivo' => 'Contributivo',
								'Regimen especial' => 'Régimen especial',
								'Regimen excepción' => 'Régimen excepción',
								'Particular' => 'Particular',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('regimen', [
								'label' => 'Regimen',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $regimenOption,
							]);  ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php $estadoAfiliacionOption = [
								' ' => 'Elegir',
								'Activo' => 'Activo',
								'Inactivo' => 'Inactivo',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('estadoafiliacion', [
								'label' => 'Estado de Afiliación',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $estadoAfiliacionOption,
							]);  ?>
						</div>

						<!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('barrio', [
								'label' => 'Barrio',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div-->

						<!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('direccion', [
								'label' => 'Direccion',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
                        </div-->

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php echo $this->Form->input('telefono', [
								'label' => 'Teléfono',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php echo $this->Form->input('email', [
								'label' => 'Email',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
							]);  ?>
						</div>
					</div>
				</div>
			</div>

			<h2 class="subtitle-general-forms">
				Valoración de Salud</h2>
			<hr style=" border:0.1px solid rgba(0,0,0,.125);">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

					<div class="form-group row">

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionYesNo = [
								'' => 'Elegir',
								'Si' => 'Si',
								'No' => 'No',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							$optionDiscapacidad = array(
								'' => 'Elegir',
								'No' => 'No presenta',
								'Física' => 'Física',
								'Auditiva' => 'Auditiva',
								'Visual' => 'Visual',
								'Sordoceguera' => 'Sordoceguera',
								'Cognitiva o intelectual' => 'Cognitiva o intelectual',
								'Metal' => 'Mental',

							);
							echo $this->Form->input('discapacidad', array(
								'label' => '¿Presenta alguna de las siguientes discapacidades?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',

								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionDiscapacidad
							));
							?>

							<button type="button" id="ayudaButton" class="btn btn-success rounded-circle"
								data-toggle="popover" data-placement="top" data-content="Físicas: Limitaciones o dificultades en la movilidad o funcionamiento físico.

                                        Auditivas: Dificultades o limitaciones en la capacidad de escuchar o procesar el sonido.

                                        Visuales: Limitaciones o dificultades en la visión.

                                        Sordoceguera: Condición en la que una persona tiene tanto discapacidad auditiva como discapacidad visual.

                                        Cognitivas o intelectuales: Limitaciones en el funcionamiento del cerebro que afectan el procesamiento, comprensión, aprendizaje y memoria de la información.

                                        Mentales: Limitaciones en las habilidades cognitivas, emocionales y de comportamiento.
                                        "
								style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 5px; margin-left: 15px;">
								?
							</button>

						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php

							echo $this->Form->input('peso', array(
								'label' => 'Registre Peso en Kg.',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'id' => 'peso',
							));
							?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php

							echo $this->Form->input('talla', array(
								'label' => 'Registre talla en cm',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'id' => 'talla',
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<button class="my-button" style="margin-left: 5px;" id="calcularIMC">Calcular IMC</button>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('indicemasacorporal', array(
								'label' => 'Indice de masa corporal',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'readonly' => 'readonly',
								'id' => 'indicemasacorporal',
							)); ?>

							<p id="mensajeIMC"></p>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('tensionarterial', array(
								'label' => 'Registre Tensión arterial 0/0',
								'class' => 'form-control tension-arterial-input',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => ''

							)); ?>
							<p id="mensaje-tension-arterial"></p>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionCronica = array(
								'' => 'Elegir',
								'No' => 'No',
								'Hipertensión' => 'Hipertensión',
								'Diabetes' => 'Diabetes',
								'Hipertiroidismo' => 'Hipertiroidismo',
								'Hipotiroidismo' => 'Hipotiroidismo',
								'Dislipidemia' => 'colesterol, triglicéridos elevados',
								'Neurologica' => 'Neurológica',
								'Cardiovascular' => 'Cardiovascular',
								'Respiratoria' => 'Respiratoria',
								'Metabólica' => 'Metabólica',
								'Endocrinológica' => 'Endocrinológica',
								'Epilepsia' => 'Epilepsia',
								'Gastrointestinal' => 'Gastrointestinal',
								'Renal, otras enferemdades cronicas' => 'renal otras enferemdades cronicas',
								'No informa' => 'Desconoce la información',
								'SD' => 'Sin dato',
							);
							echo $this->Form->input('condicioncronica', array(
								'label' => '¿Presenta alguna de las siguientes enfermedades crónicas?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCronica,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'condicioncronica',
								'onChange' => 'cronica(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript

							)); ?>
						</div>

						<div id="Cronica" class="form-group col-md-6">

							<?php


							echo $this->Form->input('condicioncronica1', array(
								'label' => '¿Presenta alguna de las siguientes enfermedades crónicas?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCronica,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'condicioncronica1',


							)); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionVacuna = array(
								'' => 'Elegir',
								'No' => 'No',
								'Toxoide tétanico' => 'Toxoide tétanico',
								'Covid' => 'Vacuna Covid-19',
								'Influenza' => 'Influenza Estacional',
								'Fiebre Amarilla' => 'Fiebre Amarilla',
								'No informa' => 'Desconoce la información',
								'SD' => 'Sin dato',

							);
							echo $this->Form->input('esquemavacunacion', array(
								'label' => '¿Le han aplicado alguna de las siguientes vacunas en el último año? ',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionVacuna,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'esquemavacunacion'

							)); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('desparasitacion', array(
								'label' => '¿Se ha desparasitado en los últimos seis meses?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionYesNo,
								'placeholder' => '',
								'id' => 'desparasitacion',
							)); ?> </div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionValoracionMedica = array(
								'' => 'Elegir',
								'Consulta Morbilidad' => 'Consulta de Morbilidad',
								'Consulta Cronicos' => 'Consulta de Crónicos',
								'Consulta PYP' => 'Consulta Promoción y prevención',
								'Consulta Urgencias' => 'Consulta Urgencias',
								'No asistido' => 'No ha asistido',
								'No informa' => 'No informa',
								'SD' => 'Sin Dato',

							);
							echo $this->Form->input('valoracionmedica', array(
								'label' => '¿Ha asistido a Valoración Médica en el ultimo año?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'options' => $optionValoracionMedica,
							)); ?>
						</div>




						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('saludoral', array(
								'label' => '¿Asistió a consulta de odontología en el último año?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionYesNo,
								'placeholder' => '',
								'id' => 'saludoral',
							)); ?>
						</div>
					</div>
				</div>
			</div>


			<h2 class="subtitle-general-forms ">Salud
				Sexual y Reproductiva</h2>
			<hr style=" border:0.1px solid rgba(0,0,0,.125);">
			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

					<div class="form-group row">

						<div class="form-group col-md-6" style="margin-top: 20px;">

							<?php
							$optionVidaSexual = [
								'No aplica ' =>  'Elegir',
								'Si' => 'Si',
								'No' => 'No',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('iniciovidasexual', array(
								'label' => '¿Usted ha iniciado su vida sexual?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionVidaSexual,
								'placeholder' => '',
								'type' => 'select',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'iniciovidasexual(this.value); mujer(this.value);', // Combina ambas funciones en una sola función onchange
							)); ?>
						</div>


					</div>
					<div id="yess" class="form-group row">

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionAnticonceptivos = [
								'No aplica ' => 'Elegir',
								'No' => 'No',
								'Sin pareja' => 'No tiene pareja en el momento',
								'Si control' => 'Si, con supervisión',
								'Si No control' => 'Si, sin supervisión',
								'Responsabilidad Pareja' => 'Deja la responsabilidad a la pareja',
								'Vasectomía' => 'Vasectomía',
								'Pomeroy' => 'Pomeroy',
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => '¿Utiliza algún método de planificación familiar?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionAnticonceptivos,
								'placeholder' => '',
								'id' => 'metodosanticonceptivos'

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionits = [
								'No aplica ' =>  'Elegir',
								'No' => 'No',
								'Si' => 'Si',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('infeccionestransmisionsexual', array(
								'label' => '¿Le han diagnosticado alguna Infección de transmisión Sexual?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionits,
								'placeholder' => '',
								'id' => 'infeccionestransmisionsexual'

							)); ?>
						</div>



					</div>
				</div>
			</div>

			<div id="yesss">
				<div id="si" class="grow justify-content-center" display="none" style="margin-top:20px">
					<h2 class="subtitle-general-forms " style="margin-bottom: 10px;">Salud de la Mujer</h2>
					<hr style=" border:0.1px solid rgba(0,0,0,.125);margin-bottom: 20px;">
					<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
						<div class="form-group row">
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$optionCitologia = [
									'No aplica ' =>  'Elegir',
									'No' => 'No',
									'Citologia VPH' => 'Si, Citología VPH',
									'Citologia convencional' => 'Si, Citología convencional',
									'No informa' => 'No informa',
									'No aplica' => 'No aplica',
									'SD' => 'Sin dato',


								];
								echo $this->Form->input('tomacitologia', array(
									'label' => '¿Se ha realizado el exámen de citología de acuerdo a esquema?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionCitologia,
									'placeholder' => '',
									'id' => 'tomacitologia'
								)); ?>
								<p class="help-block"> Esquema: Citología convencional esquema 1-3-3 edad 25 a 29 años y
									Citología VPH
									1-5-5 edad de 30 a 65 años, Esquemas ante resultado negativo</p>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">

								<?php
								$optionYesNo1 = [
									'No aplica ' => 'Elegir',
									'Si' => 'Si',
									'No' => 'No',
									'No informa' => 'No informa',
									'No aplica' => 'No aplica',
									'SD' => 'Sin dato',

								];

								echo $this->Form->input('mamografia', array(
									'label' => 'Le han realizado Mamografía en los 5 últimos años (Mujer de 50 y más años)',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionYesNo1,
									'placeholder' => ''
								)); ?>
							</div>
						</div>
					</div>

					<h2 class="subtitle-general-forms " style="margin-bottom: 10px;">Antecedentes ginecológicos
						/obsetétricos</h2>
					<hr style=" border:0.1px solid rgba(0,0,0,.125);margin-bottom: 20px;">
					<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
						<div class="form-group row">
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php

								echo $this->Form->input('antecedenteginecologico', array(
									'label' => '¿Le han realizado alguna cirugia ginecológica?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionYesNo1,
									'placeholder' => ''
								)); ?>
								<p class="help-block"> Procedimientos en el sistema reproductivo, ovarios, útero,
									trompas de
									Falopio, cuello uterino </p>
							</div>
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$optionGinecologico = [
									'No aplica ' => 'Elegir',
									'No' => 'No',
									'No embarazos' => 'No ha tenido embarazos',
									'Antecedente de abortos' => 'Antecedente de 2 o más abortos',
									'Muerte perinatal' => 'Muerte perinatal',
									'Bajo peso al nacer' => 'Recien nacido con Bajo peso al nacer',
									'Prematurez' => 'Recien nacido Prematuro',
									'Multiparidad' => 'Multiparidad (5 o más partos)',
									'Edad Materna Avanzada' => 'Embarazo mujer mayor de 35 años',
									'Preclampsia' => 'Antecendente de Preclampsia',
									'Eclampsia' => 'Antecendente de eclampsia',
									'No aplica' => 'No Aplica',
									'SD' => 'Sin dato',

								];
								echo $this->Form->input('antecedenteginecologico', array(
									'label' => '¿Ha presentado alguna de las siguientes situaciones en el embarazo? ',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionGinecologico,
									'placeholder' => ''
								)); ?>
							</div>
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la
									opción
									'No ' </p>
								<?php
								echo $this->Form->input('ancedenteginecologico1', array(
									'label' => '¿Ha presentado alguna de las siguientes situaciones en el embarazo? ',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionGinecologico,
									'placeholder' => ''
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$gestanteOption = [
									'No aplica ' => 'Elegir',
									'No' => 'No',
									'Si' => 'Si',
								];
								echo $this->Form->input('gestacion', [
									'label' => '¿Mujer en embarazo?',
									'class' => 'form-control',
									'placeholder' => '',
									'type' => 'select',
									'options' => $gestanteOption,
									'style' => 'height:30px;  font-size: 15px ; width:100%',

									'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
									'onChange' => 'gestacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
								]);
								?>
								<p class="help-block"> Registre información de mujer en gestación o puerperio</p>
							</div>
						</div>
					</div>

					<div id="yes">
						<h2 class="subtitle-general-forms " style="margin-bottom: 10px;">Gestación</h2>
						<hr style=" border:0.1px solid rgba(0,0,0,.125);margin-bottom: 20px;">
						<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$optionControlPrenatal = [
									'No aplica ' =>  'Elegir',
									'No inscrita' => 'No inscrita en control de embarazo',
									'Asistente CPN' => 'Si, Control al día',
									'Inasistente CPN' => 'Si, inasistente a último control',
									'Puerperio' => 'En etapa de puerperio',
									'No informa' => 'No sabe/No informa',
									'SD' => 'Sin dato',
								];
								echo $this->Form->input('controlprenatal', array(
									'label' => '¿Esta inscrita en control prenatal?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionControlPrenatal,
									'placeholder' => '',

								)); ?>

							</div>
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$optionRiesgoEmbarazo = [
									'No aplica ' =>  'Elegir',
									'Bajo' => 'Bajo',
									'Alto' => 'Alto',
									'No informa' => 'No informa',
									'SD' => 'Sin dato',


								];
								echo $this->Form->input('riesgoembarazo', array(
									'label' => '¿El riesgo del embarazo es?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionRiesgoEmbarazo,
									'placeholder' => '',


								)); ?>

							</div>
							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$optionAlarmaEmbarazo = [
									'No aplica ' =>  'Elegir',
									'No' => 'No',
									'Dolor de Cabeza' => 'Dolor de cabeza',
									'Mareo_zumbido' => 'Mareo/zumbido en el oido',
									'Dolor del vientre' => 'Dolor del vientre tipo contracción',
									'Disminucion o ausencia de movimientos del bebe' => 'Disminución o ausencia de movimientos del bebé',
									'Hinchazon de cara y extremidades' => 'Hinchazón de manos, cara, piernas y pies',
									'Visión borrosa o luces parpadeantes' => 'Visión borrosa o luces parpadeantes',
									'Visión borrosa o luces parpadeantes' => 'Visión borrosa o luces parpadeantes',
									'Sangrado vaginal' => 'Sangrado vaginal',
									'No informa' => 'No informa',
									'SD' => 'Sin dato',


								];
								echo $this->Form->input('signoAlarma', array(
									'label' => '¿En el momento presenta alguno de los siguientes signos o síntomas de alarma?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionAlarmaEmbarazo,
									'placeholder' => '',
									'id' => 'riesgoembarazo'

								)); ?>

							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">

								<?php
								$optionCursoVida = [
									'No aplica ' => 'Elegir',
									'Juventud' => 'Juventud',
									'Adultez' => 'adultez',
								];

								echo $this->Form->input('cursovida', array(
									'label' => '¿El curso de vida de la gestante es?',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'type' => 'select',
									'options' => $optionCursoVida,
									'placeholder' => ''
								)); ?>
							</div>

							<div class="form-group col-md-6" style="margin-top: 20px;">
								<?php
								$optionAlternativa = [
									'No aplica ' => 'Elegir',
									'No refiere' => 'No refiere',
									'Medicina indigena' => 'Medicina Tradicional/indigena',
									'Homeopatía' => 'Homeopatía',
									'Medicina tradicional china' => 'Medicina tradicional china',
									'Acupuntura' => 'Acupuntura',
									'Quiropraxia' => 'Quiropraxia',
									'Otro' => 'Otro',
									'SD' => 'Sin dato'
								];
								echo $this->Form->input('saludalternativa', [
									'label' => '¿Hacen uso de otras opciones para el cuidado de su salud durante su embarazo?',
									'class' => 'form-control',
									'type' => 'select',
									'options' => $optionAlternativa,
									'style' => 'height:30px;  font-size: 15px ; width:100%',
								]);
								?>
							</div>


						</div>
					</div>
				</div>
			</div>



			<h2 class="subtitle-general-forms ">Riesgo
				Psicosocial</h2>
			<hr style=" border:0.1px solid rgba(0,0,0,.125);">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

					<div class="form-group row">

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionEstudio = [
								'' => 'Elegir',
								'No' => 'No',
								'Institucion educativa' => 'Institución educativa',
								'Educacion por ciclos' => 'Educación por ciclos',
								'Instituto tecnico' => 'Instituto técnico',
								'No estudia' => 'No estudia',
								'Centro Dia' => 'Centro Día',
								'Centro Vida' => 'Centro Vida',
								'SENA' => 'SENA',
								'Universidad' => 'Universidad',
								'No aplica' => 'No aplica',
								'No informa' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('estudio', array(
								'label' => '¿Asiste a una institución educativa o de cuidado?',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionEstudio,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionOcupacion = [
								'' => 'Elegir',
								'110- Oficiales de las Fuerzas Militares' => '110- Oficiales de las Fuerzas Militares',
								'210- Suboficiales de las Fuerzas Militares' => '210- Suboficiales de las Fuerzas Militares',
								'310- Otros miembros de las Fuerzas Militares' => '310- Otros miembros de las Fuerzas Militares',
								'1111- Directores formuladores de políticas y normas' => '1111- Directores formuladores de políticas y normas',
								'1112- Directores del gobierno' => '1112- Directores del gobierno',
								'1113- Jefes de comunidades étnicas' => '1113- Jefes de comunidades étnicas',
								'1114- Dirigentes de organizaciones con un interés específico partidos políticos, sindicatos y organizaciones sociales' => '1114- Dirigentes de organizaciones con un interés específico partidos políticos, sindicatos y organizaciones sociales',
								'1120- Directores y gerentes generales' => '1120- Directores y gerentes generales',
								'1211- Directores financieros' => '1211- Directores financieros',
								'1212- Directores de recursos humanos' => '1212- Directores de recursos humanos',
								'1213- Directores de políticas y planificación' => '1213- Directores de políticas y planificación',
								'1219- Directores de administración y servicios no clasificados en otros grupos primarios' => '1219- Directores de administración y servicios no clasificados en otros grupos primarios',
								'1221- Directores de ventas y comercialización' => '1221- Directores de ventas y comercialización',
								'1222- Directores de publicidad y relaciones públicas' => '1222- Directores de publicidad y relaciones públicas',
								'1223- Directores de investigación y desarrollo' => '1223- Directores de investigación y desarrollo',
								'1311- Directores de producción agropecuaria y silvicultura' => '1311- Directores de producción agropecuaria y silvicultura',
								'1312- Directores de producción de piscicultura y pesca' => '1312- Directores de producción de piscicultura y pesca',
								'1321- Directores de industrias manufactureras' => '1321- Directores de industrias manufactureras',
								'1322- Directores de explotaciones de minería' => '1322- Directores de explotaciones de minería',
								'1323- Directores de empresas de construcción' => '1323- Directores de empresas de construcción',
								'1324- Directores de empresas de abastecimiento, distribución y afines' => '1324- Directores de empresas de abastecimiento, distribución y afines',
								'1330- Directores de servicios de tecnología de la información y las comunicaciones' => '1330- Directores de servicios de tecnología de la información y las comunicaciones',
								'1341- Directores de servicios de cuidados infantiles' => '1341- Directores de servicios de cuidados infantiles',
								'1342- Directores de servicios de salud' => '1342- Directores de servicios de salud',
								'1343- Directores de servicios de atención a personas mayores' => '1343- Directores de servicios de atención a personas mayores',
								'1344- Directores de servicios de bienestar social' => '1344- Directores de servicios de bienestar social',
								'1345- Directores de servicios de educación' => '1345- Directores de servicios de educación',
								'1346- Gerentes de sucursales de bancos, de servicios financieros y de seguros' => '1346- Gerentes de sucursales de bancos, de servicios financieros y de seguros',
								'1349- Directores y gerentes de servicios profesionales no clasificados en otros grupos primarios' => '1349- Directores y gerentes de servicios profesionales no clasificados en otros grupos primarios',
								'1411- Gerentes de hoteles' => '1411- Gerentes de hoteles',
								'1412- Gerentes de restaurantes' => '1412- Gerentes de restaurantes',
								'1420- Gerentes de comercios al por mayor y al por menor' => '1420- Gerentes de comercios al por mayor y al por menor',
								'1431- Gerentes de centros deportivos, de esparcimiento y culturales' => '1431- Gerentes de centros deportivos, de esparcimiento y culturales',
								'1439- Otros gerentes de servicios no clasificados en otros grupos primarios' => '1439- Otros gerentes de servicios no clasificados en otros grupos primarios',
								'2111- Físicos y astrónomos' => '2111- Físicos y astrónomos',
								'2112- Meteorólogos' => '2112- Meteorólogos',
								'2113- Químicos' => '2113- Químicos',
								'2114- Geólogos y geofísicos' => '2114- Geólogos y geofísicos',
								'2120- Matemáticos, actuarios y estadísticos' => '2120- Matemáticos, actuarios y estadísticos',
								'2131- Biólogos, botánicos, zoólogos y afines' => '2131- Biólogos, botánicos, zoólogos y afines',
								'2132- Agrónomos, silvicultores, zootecnistas y afines' => '2132- Agrónomos, silvicultores, zootecnistas y afines',
								'2133- Profesionales de la protección medioambiental' => '2133- Profesionales de la protección medioambiental',
								'2141- Ingenieros industriales y de producción' => '2141- Ingenieros industriales y de producción',
								'2142- Ingenieros civiles' => '2142- Ingenieros civiles',
								'2143- Ingenieros medioambientales' => '2143- Ingenieros medioambientales',
								'2144- Ingenieros mecánicos' => '2144- Ingenieros mecánicos',
								'2145- Ingenieros químicos' => '2145- Ingenieros químicos',
								'2146- Ingenieros de minas, metalúrgicos y afines' => '2146- Ingenieros de minas, metalúrgicos y afines',
								'2149- Ingenieros no clasificados en otros grupos primarios' => '2149- Ingenieros no clasificados en otros grupos primarios',
								'2151- Ingenieros electricistas' => '2151- Ingenieros electricistas',
								'2152- Ingenieros electrónicos' => '2152- Ingenieros electrónicos',
								'2153- Ingenieros de telecomunicaciones' => '2153- Ingenieros de telecomunicaciones',
								'2161- Arquitectos constructores' => '2161- Arquitectos constructores',
								'2162- Arquitectos paisajistas' => '2162- Arquitectos paisajistas',
								'2163- Diseñadores de productos y de prendas' => '2163- Diseñadores de productos y de prendas',
								'2164- Planificadores urbanos, regionales y de tránsito' => '2164- Planificadores urbanos, regionales y de tránsito',
								'2165- Cartógrafos y topógrafos' => '2165- Cartógrafos y topógrafos',
								'2166- Diseñadores gráficos y multimedia' => '2166- Diseñadores gráficos y multimedia',
								'2211- Médicos generales' => '2211- Médicos generales',
								'2212- Médicos especialistas' => '2212- Médicos especialistas',
								'2221- Profesionales de enfermería' => '2221- Profesionales de enfermería',
								'2222- Profesionales de partería' => '2222- Profesionales de partería',
								'2230- Profesionales de medicina tradicional y alternativa' => '2230- Profesionales de medicina tradicional y alternativa',
								'2240- Paramédicos e instrumentadores quirúrgicos' => '2240- Paramédicos e instrumentadores quirúrgicos',
								'2250- Veterinarios' => '2250- Veterinarios',
								'2261- Odontólogos' => '2261- Odontólogos',
								'2262- Farmacéuticos' => '2262- Farmacéuticos',
								'2263- Profesionales de la salud y la higiene laboral y ambiental' => '2263- Profesionales de la salud y la higiene laboral y ambiental',
								'2264- Fisioterapeutas' => '2264- Fisioterapeutas',
								'2265- Dietistas y nutricionistas' => '2265- Dietistas y nutricionistas',
								'2266- Fonoaudiólogos y terapeutas del lenguaje' => '2266- Fonoaudiólogos y terapeutas del lenguaje',
								'2267- Optómetras' => '2267- Optómetras',
								'2269- Otros profesionales de la salud no clasificados en otros grupos primarios' => '2269- Otros profesionales de la salud no clasificados en otros grupos primarios',
								'2310- Profesores de instituciones de educación superior' => '2310- Profesores de instituciones de educación superior',
								'2320- Profesores de formación profesional' => '2320- Profesores de formación profesional',
								'2330- Profesores de educación secundaria' => '2330- Profesores de educación secundaria',
								'2341- Profesores de educación primaria' => '2341- Profesores de educación primaria',
								'2342- Profesores de primera infancia' => '2342- Profesores de primera infancia',
								'2351- Especialistas en métodos pedagógicos' => '2351- Especialistas en métodos pedagógicos',
								'2352- Profesores de educación especial e inclusiva' => '2352- Profesores de educación especial e inclusiva',
								'2353- Otros profesores de idiomas' => '2353- Otros profesores de idiomas',
								'2354- Otros profesores de música' => '2354- Otros profesores de música',
								'2355- Otros profesores de artes' => '2355- Otros profesores de artes',
								'2356- Instructores de tecnología de la información' => '2356- Instructores de tecnología de la información',
								'2359- Otros profesionales de la educación no clasificados en otros grupos primarios' => '2359- Otros profesionales de la educación no clasificados en otros grupos primarios',
								'2411- Contadores' => '2411- Contadores',
								'2412- Asesores financieros y de inversiones' => '2412- Asesores financieros y de inversiones',
								'2413- Analistas financieros' => '2413- Analistas financieros',
								'2421- Analistas de gestión y organización' => '2421- Analistas de gestión y organización',
								'2422- Profesionales en políticas de administración' => '2422- Profesionales en políticas de administración',
								'2423- Profesionales de gestión de talento humano' => '2423- Profesionales de gestión de talento humano',
								'2424- Profesionales en formación y desarrollo de personal' => '2424- Profesionales en formación y desarrollo de personal',
								'2431- Profesionales de la publicidad y la comercialización' => '2431- Profesionales de la publicidad y la comercialización',
								'2432- Profesionales de relaciones públicas' => '2432- Profesionales de relaciones públicas',
								'2433- Profesionales de ventas técnicas y médicas (excluyendo las TIC)' => '2433- Profesionales de ventas técnicas y médicas (excluyendo las TIC)',
								'2434- Profesionales de ventas de tecnología de la información y las comunicaciones' => '2434- Profesionales de ventas de tecnología de la información y las comunicaciones',
								'2511- Analistas de sistemas' => '2511- Analistas de sistemas',
								'2512- Desarrolladores de software' => '2512- Desarrolladores de software',
								'2513- Desarrolladores web y multimedia' => '2513- Desarrolladores web y multimedia',
								'2514- Programadores de aplicaciones' => '2514- Programadores de aplicaciones',
								'2519- Desarrolladores y analistas de software y multimedia no clasificados en otros grupos primarios' => '2519- Desarrolladores y analistas de software y multimedia no clasificados en otros grupos primarios',
								'2521- Diseñadores y administradores de bases de datos' => '2521- Diseñadores y administradores de bases de datos',
								'2522- Administradores de sistemas' => '2522- Administradores de sistemas',
								'2523- Profesionales en redes de computadores' => '2523- Profesionales en redes de computadores',
								'2529- Profesionales en bases de datos y en redes de computadores no clasificados en otros grupos primarios' => '2529- Profesionales en bases de datos y en redes de computadores no clasificados en otros grupos primarios',
								'2611- Abogados' => '2611- Abogados',
								'2612- Jueces' => '2612- Jueces',
								'2619- Profesionales en derecho no clasificados en otros grupos primarios' => '2619- Profesionales en derecho no clasificados en otros grupos primarios',
								'2621- Archivistas y curadores de arte' => '2621- Archivistas y curadores de arte',
								'2622- Bibliotecarios, documentalistas y afines' => '2622- Bibliotecarios, documentalistas y afines',
								'2631- Economistas' => '2631- Economistas',
								'2632- Sociólogos, antropólogos y afines' => '2632- Sociólogos, antropólogos y afines',
								'2633- Filósofos, historiadores y especialistas en ciencias políticas' => '2633- Filósofos, historiadores y especialistas en ciencias políticas',
								'2634- Psicólogos' => '2634- Psicólogos',
								'2635- Profesionales del trabajo social y consejeros' => '2635- Profesionales del trabajo social y consejeros',
								'2636- Profesionales religiosos' => '2636- Profesionales religiosos',
								'2641- Autores y otros escritores' => '2641- Autores y otros escritores',
								'2642- Periodistas' => '2642- Periodistas',
								'2643- Traductores, intérpretes y otros lingüistas' => '2643- Traductores, intérpretes y otros lingüistas',
								'2651- Escultores, pintores artísticos y afines' => '2651- Escultores, pintores artísticos y afines',
								'2652- Compositores, músicos y cantantes' => '2652- Compositores, músicos y cantantes',
								'2653- Coreógrafos y bailarines' => '2653- Coreógrafos y bailarines',
								'2654- Directores y productores de cine, de teatro y afines' => '2654- Directores y productores de cine, de teatro y afines',
								'2655- Actores' => '2655- Actores',
								'2656- Locutores de radio, televisión y otros medios de comunicación' => '2656- Locutores de radio, televisión y otros medios de comunicación',
								'2659- Artistas creativos e interpretativos no clasificados en otros grupos primarios' => '2659- Artistas creativos e interpretativos no clasificados en otros grupos primarios',
								'3111- Técnicos en ciencias físicas y químicas' => '3111- Técnicos en ciencias físicas y químicas',
								'3112- Técnicos en ingeniería civil' => '3112- Técnicos en ingeniería civil',
								'3113- Electrotécnicos' => '3113- Electrotécnicos',
								'3114- Técnicos en electrónica' => '3114- Técnicos en electrónica',
								'3115- Técnicos en ingeniería mecánica' => '3115- Técnicos en ingeniería mecánica',
								'3116- Técnicos en química industrial' => '3116- Técnicos en química industrial',
								'3117- Técnicos de minas y metalurgia' => '3117- Técnicos de minas y metalurgia',
								'3118- Delineantes y dibujantes técnicos' => '3118- Delineantes y dibujantes técnicos',
								'3119- Técnicos en ciencias físicas y en ingeniería no clasificados en otros grupos primarios' => '3119- Técnicos en ciencias físicas y en ingeniería no clasificados en otros grupos primarios',
								'3121- Supervisores de minas' => '3121- Supervisores de minas',
								'3122- Supervisores de industrias manufactureras' => '3122- Supervisores de industrias manufactureras',
								'3123- Supervisores de la construcción' => '3123- Supervisores de la construcción',
								'3131- Operadores de plantas de producción de energía' => '3131- Operadores de plantas de producción de energía',
								'3132- Operadores de incineradores, instalaciones de tratamiento de agua y afines' => '3132- Operadores de incineradores, instalaciones de tratamiento de agua y afines',
								'3133- Controladores de instalaciones de procesamiento de productos químicos' => '3133- Controladores de instalaciones de procesamiento de productos químicos',
								'3134- Operadores de instalaciones de refinación de petróleo y gas natural' => '3134- Operadores de instalaciones de refinación de petróleo y gas natural',
								'3135- Operadores de procesos de producción de metales' => '3135- Operadores de procesos de producción de metales',
								'3139- Técnicos en control de procesos no clasificados en otros grupos primarios' => '3139- Técnicos en control de procesos no clasificados en otros grupos primarios',
								'3141- Técnicos en ciencias biológicas (excluyendo la medicina)' => '3141- Técnicos en ciencias biológicas (excluyendo la medicina)',
								'3142- Técnicos agropecuarios' => '3142- Técnicos agropecuarios',
								'3143- Técnicos forestales' => '3143- Técnicos forestales',
								'3151- Oficiales maquinistas en navegación' => '3151- Oficiales maquinistas en navegación',
								'3152- Capitanes, oficiales de cubierta y prácticos' => '3152- Capitanes, oficiales de cubierta y prácticos',
								'3153- Pilotos de aviación y afines' => '3153- Pilotos de aviación y afines',
								'3154- Controladores de tráfico aéreo y marítimo' => '3154- Controladores de tráfico aéreo y marítimo',
								'3155- Técnicos en seguridad aeronáutica' => '3155- Técnicos en seguridad aeronáutica',
								'3211- Técnicos en aparatos de diagnóstico y tratamiento médico' => '3211- Técnicos en aparatos de diagnóstico y tratamiento médico',
								'3212- Técnicos de laboratorios médicos' => '3212- Técnicos de laboratorios médicos',
								'3213- Técnicos y asistentes farmacéuticos' => '3213- Técnicos y asistentes farmacéuticos',
								'3214- Técnicos de prótesis médicas y dentales' => '3214- Técnicos de prótesis médicas y dentales',
								'3221- Técnicos y profesionales del nivel medio en enfermería' => '3221- Técnicos y profesionales del nivel medio en enfermería',
								'3222- Técnicos y profesionales del nivel medio en partería' => '3222- Técnicos y profesionales del nivel medio en partería',
								'3230- Técnicos y profesionales del nivel medio en medicina tradicional y alternativa' => '3230- Técnicos y profesionales del nivel medio en medicina tradicional y alternativa',
								'3240- Técnicos y asistentes veterinarios' => '3240- Técnicos y asistentes veterinarios',
								'3251- Higienistas y asistentes odontológicos' => '3251- Higienistas y asistentes odontológicos',
								'3252- Técnicos en documentación sanitaria' => '3252- Técnicos en documentación sanitaria',
								'3253- Trabajadores comunitarios de la salud' => '3253- Trabajadores comunitarios de la salud',
								'3254- Técnicos en optometría y ópticas' => '3254- Técnicos en optometría y ópticas',
								'3255- Técnicos y asistentes terapeutas' => '3255- Técnicos y asistentes terapeutas',
								'3256- Asistentes médicos' => '3256- Asistentes médicos',
								'3257- Inspectores de seguridad, salud ocupacional, medioambiental y afines' => '3257- Inspectores de seguridad, salud ocupacional, medioambiental y afines',
								'3258- Técnicos en atención prehospitalaria' => '3258- Técnicos en atención prehospitalaria',
								'3259- Otros técnicos y profesionales del nivel medio de la salud, no clasificados en otros grupos primarios' => '3259- Otros técnicos y profesionales del nivel medio de la salud, no clasificados en otros grupos primarios',
								'3311- Agentes de bolsa, cambio y otros servicios financieros' => '3311- Agentes de bolsa, cambio y otros servicios financieros',
								'3312- Analistas de préstamos y créditos' => '3312- Analistas de préstamos y créditos',
								'3313- Técnicos de contabilidad y afines' => '3313- Técnicos de contabilidad y afines',
								'3314- Técnicos y profesionales del nivel medio de servicios estadísticos, matemáticos y afines' => '3314- Técnicos y profesionales del nivel medio de servicios estadísticos, matemáticos y afines',
								'3315- Tasadores y evaluadores' => '3315- Tasadores y evaluadores',
								'3321- Agentes de seguros' => '3321- Agentes de seguros',
								'3322- Representantes comerciales' => '3322- Representantes comerciales',
								'3323- Agentes de compras' => '3323- Agentes de compras',
								'3324- Agentes de operaciones comerciales y consignatarios' => '3324- Agentes de operaciones comerciales y consignatarios',
								'3331- Declarantes o gestores de aduana' => '3331- Declarantes o gestores de aduana',
								'3332- Organizadores de conferencias y eventos' => '3332- Organizadores de conferencias y eventos',
								'3333- Agentes de empleo y contratistas de mano de obra' => '3333- Agentes de empleo y contratistas de mano de obra',
								'3334- Agentes inmobiliarios' => '3334- Agentes inmobiliarios',
								'3339- Agentes de servicios comerciales no clasificados en otros grupos primarios' => '3339- Agentes de servicios comerciales no clasificados en otros grupos primarios',
								'3341- Supervisores de oficina' => '3341- Supervisores de oficina',
								'3342- Secretarios jurídicos' => '3342- Secretarios jurídicos',
								'3343- Secretarios administrativos y ejecutivos' => '3343- Secretarios administrativos y ejecutivos',
								'3344- Secretarios médicos' => '3344- Secretarios médicos',
								'3351- Agentes de aduana e inspectores de frontera' => '3351- Agentes de aduana e inspectores de frontera',
								'3352- Agentes de administración tributaria' => '3352- Agentes de administración tributaria',
								'3353- Agentes de servicios de seguridad social' => '3353- Agentes de servicios de seguridad social',
								'3354- Agentes gubernamentales de expedición de licencias' => '3354- Agentes gubernamentales de expedición de licencias',
								'3355- Inspectores de policía y detectives' => '3355- Inspectores de policía y detectives',
								'3359- Agentes de gobierno y profesionales del nivel medio para la aplicación de regulaciones no clasificados en otros grupos primarios' => '3359- Agentes de gobierno y profesionales del nivel medio para la aplicación de regulaciones no clasificados en otros grupos primarios',
								'3411- Técnicos y profesionales del nivel medio del derecho de servicios legales y afines' => '3411- Técnicos y profesionales del nivel medio del derecho de servicios legales y afines',
								'3412- Trabajadores y asistentes sociales' => '3412- Trabajadores y asistentes sociales',
								'3413- Auxiliares laicos de las religiones' => '3413- Auxiliares laicos de las religiones',
								'3421- Atletas y deportistas' => '3421- Atletas y deportistas',
								'3422- Entrenadores, instructores y árbitros de actividades deportivas' => '3422- Entrenadores, instructores y árbitros de actividades deportivas',
								'3423- Instructores de educación física y actividades recreativas' => '3423- Instructores de educación física y actividades recreativas',
								'3431- Fotógrafos' => '3431- Fotógrafos',
								'3432- Diseñadores y decoradores de interiores' => '3432- Diseñadores y decoradores de interiores',
								'3433- Técnicos en galerías de arte, museos y bibliotecas' => '3433- Técnicos en galerías de arte, museos y bibliotecas',
								'3434- Chefs' => '3434- Chefs',
								'3435- Otros técnicos y profesionales del nivel medio en actividades culturales y artísticas' => '3435- Otros técnicos y profesionales del nivel medio en actividades culturales y artísticas',
								'3511- Técnicos en operaciones de tecnología de la información y las comunicaciones' => '3511- Técnicos en operaciones de tecnología de la información y las comunicaciones',
								'3512- Técnicos en asistencia y soporte al usuario de tecnología de la información y las comunicaciones' => '3512- Técnicos en asistencia y soporte al usuario de tecnología de la información y las comunicaciones',
								'3513- Técnicos en redes y sistemas de computación' => '3513- Técnicos en redes y sistemas de computación',
								'3514- Técnicos de la Web' => '3514- Técnicos de la Web',
								'3521- Técnicos de radiodifusión y grabación audio visual' => '3521- Técnicos de radiodifusión y grabación audio visual',
								'3522- Técnicos de ingeniería de las telecomunicaciones' => '3522- Técnicos de ingeniería de las telecomunicaciones',
								'4110- Oficinistas generales' => '4110- Oficinistas generales',
								'4120- Secretarios generales' => '4120- Secretarios generales',
								'4131- Operadores de máquinas de procesamiento de texto y mecanógrafos' => '4131- Operadores de máquinas de procesamiento de texto y mecanógrafos',
								'4132- Grabadores de datos' => '4132- Grabadores de datos',
								'4211- Cajeros de bancos y afines' => '4211- Cajeros de bancos y afines',
								'4212- Receptores de apuestas y afines' => '4212- Receptores de apuestas y afines',
								'4213- Prestamistas' => '4213- Prestamistas',
								'4214- Cobradores y afines' => '4214- Cobradores y afines',
								'4221- Empleados y consultores de viajes' => '4221- Empleados y consultores de viajes',
								'4222- Empleados de centros de llamadas' => '4222- Empleados de centros de llamadas',
								'4223- Telefonistas' => '4223- Telefonistas',
								'4224- Recepcionistas de hoteles' => '4224- Recepcionistas de hoteles',
								'4225- Empleados de ventanillas de informaciones' => '4225- Empleados de ventanillas de informaciones',
								'4226- Recepcionistas generales' => '4226- Recepcionistas generales',
								'4227- Entrevistadores de encuestas y de investigaciones de mercados' => '4227- Entrevistadores de encuestas y de investigaciones de mercados',
								'4229- Otros empleados de servicios de información al cliente no clasificados en otros grupos primarios' => '4229- Otros empleados de servicios de información al cliente no clasificados en otros grupos primarios',
								'4311- Auxiliares de contabilidad y cálculo de costos' => '4311- Auxiliares de contabilidad y cálculo de costos',
								'4312- Auxiliares de servicios estadísticos, financieros y de seguros' => '4312- Auxiliares de servicios estadísticos, financieros y de seguros',
								'4313- Auxiliares encargados de las nóminas' => '4313- Auxiliares encargados de las nóminas',
								'4321- Empleados de control de abastecimientos e inventario' => '4321- Empleados de control de abastecimientos e inventario',
								'4322- Empleados de servicios de apoyo a la producción' => '4322- Empleados de servicios de apoyo a la producción',
								'4323- Empleados de servicios de transporte' => '4323- Empleados de servicios de transporte',
								'4411- Empleados de bibliotecas' => '4411- Empleados de bibliotecas',
								'4412- Empleados de servicios de correos' => '4412- Empleados de servicios de correos',
								'4413- Codificadores de datos, correctores de pruebas de imprenta y afines' => '4413- Codificadores de datos, correctores de pruebas de imprenta y afines',
								'4414- Escribientes públicos y afines' => '4414- Escribientes públicos y afines',
								'4415- Empleados de archivos' => '4415- Empleados de archivos',
								'4416- Empleados del servicio de personal' => '4416- Empleados del servicio de personal',
								'4419- Otro personal de apoyo administrativo no clasificados en otros grupos primarios' => '4419- Otro personal de apoyo administrativo no clasificados en otros grupos primarios',
								'5111- Personal de servicio a pasajeros' => '5111- Personal de servicio a pasajeros',
								'5112- Revisores y cobradores de los transportes públicos' => '5112- Revisores y cobradores de los transportes públicos',
								'5113- Guías' => '5113- Guías',
								'5120- Cocineros' => '5120- Cocineros',
								'5131- Meseros' => '5131- Meseros',
								'5132- Bármanes' => '5132- Bármanes',
								'5141- Peluqueros' => '5141- Peluqueros',
								'5142- Especialistas en tratamientos de belleza y afines' => '5142- Especialistas en tratamientos de belleza y afines',
								'5151- Supervisores de mantenimiento y limpieza en oficinas, hoteles y otros establecimientos' => '5151- Supervisores de mantenimiento y limpieza en oficinas, hoteles y otros establecimientos',
								'5152- Mayordomos domésticos' => '5152- Mayordomos domésticos',
								'5153- Conserjes y afines' => '5153- Conserjes y afines',
								'5161- Astrólogos, adivinos y trabajadores afines' => '5161- Astrólogos, adivinos y trabajadores afines',
								'5162- Acompañantes' => '5162- Acompañantes',
								'5163- Personal de servicios funerarios y embalsamadores' => '5163- Personal de servicios funerarios y embalsamadores',
								'5164- Cuidadores de animales' => '5164- Cuidadores de animales',
								'5165- Instructores de conducción' => '5165- Instructores de conducción',
								'5169- Otros trabajadores de servicios personales no clasificados en otros grupos primarios' => '5169- Otros trabajadores de servicios personales no clasificados en otros grupos primarios',
								'5211- Vendedores de quioscos y de puestos de mercado' => '5211- Vendedores de quioscos y de puestos de mercado',
								'5212- Vendedores ambulantes de alimentos preparados para consumo inmediato' => '5212- Vendedores ambulantes de alimentos preparados para consumo inmediato',
								'5221- Comerciantes de tiendas' => '5221- Comerciantes de tiendas',
								'5222- Supervisores de tiendas y almacenes' => '5222- Supervisores de tiendas y almacenes',
								'5223- Vendedores y auxiliares de venta en tiendas, almacenes y afines' => '5223- Vendedores y auxiliares de venta en tiendas, almacenes y afines',
								'5230- Cajeros de comercio, taquilleros y expendedores de boletas' => '5230- Cajeros de comercio, taquilleros y expendedores de boletas',
								'5241- Modelos de moda, arte y publicidad' => '5241- Modelos de moda, arte y publicidad',
								'5242- Demostradores de tiendas, almacenes y afines' => '5242- Demostradores de tiendas, almacenes y afines',
								'5243- Vendedores puerta a puerta' => '5243- Vendedores puerta a puerta',
								'5244- Vendedores a través de medios tecnológicos' => '5244- Vendedores a través de medios tecnológicos',
								'5245- Expendedores de combustibles para vehículos' => '5245- Expendedores de combustibles para vehículos',
								'5246- Vendedores de comidas al mostrador' => '5246- Vendedores de comidas al mostrador',
								'5249- Otros vendedores no clasificados en otros grupos primarios' => '5249- Otros vendedores no clasificados en otros grupos primarios',
								'5311- Cuidadores de niños' => '5311- Cuidadores de niños',
								'5312- Auxiliares de maestros' => '5312- Auxiliares de maestros',
								'5321- Trabajadores de los cuidados personales en instituciones' => '5321- Trabajadores de los cuidados personales en instituciones',
								'5322- Trabajadores de los cuidados personales a domicilio' => '5322- Trabajadores de los cuidados personales a domicilio',
								'5329- Trabajadores de los cuidados personales en servicios de salud no clasificados en otros grupos primarios' => '5329- Trabajadores de los cuidados personales en servicios de salud no clasificados en otros grupos primarios',
								'5411- Bomberos y rescatistas' => '5411- Bomberos y rescatistas',
								'5412- Policías' => '5412- Policías',
								'5413- Guardianes de prisión' => '5413- Guardianes de prisión',
								'5414- Guardias de seguridad' => '5414- Guardias de seguridad',
								'5419- Personal de los servicios de protección no clasificadosen otros grupos primarios' => '5419- Personal de los servicios de protección no clasificadosen otros grupos primarios',
								'6111- Agricultores y trabajadores calificados de cultivos extensivos' => '6111- Agricultores y trabajadores calificados de cultivos extensivos',
								'6112- Agricultores y trabajadores calificados de plantaciones de árboles y arbustos' => '6112- Agricultores y trabajadores calificados de plantaciones de árboles y arbustos',
								'6113- Agricultores y trabajadores calificados de huertas, invernaderos, viveros y jardines' => '6113- Agricultores y trabajadores calificados de huertas, invernaderos, viveros y jardines',
								'6114- Agricultores y trabajadores calificados de cultivos mixtos' => '6114- Agricultores y trabajadores calificados de cultivos mixtos',
								'6121- Criadores de ganado y trabajadores de la cría de animales domésticos (excepto aves de corral)' => '6121- Criadores de ganado y trabajadores de la cría de animales domésticos (excepto aves de corral)',
								'6122- Avicultores y trabajadores calificados de la avicultura' => '6122- Avicultores y trabajadores calificados de la avicultura',
								'6123- Criadores y trabajadores calificados de la apicultura y la sericicultura' => '6123- Criadores y trabajadores calificados de la apicultura y la sericicultura',
								'6129- Criadores y trabajadores pecuarios calificados, avicultores y criadores de insectos no clasificados en otros grupos primarios' => '6129- Criadores y trabajadores pecuarios calificados, avicultores y criadores de insectos no clasificados en otros grupos primarios',
								'6130- Productores y trabajadores calificados de explotaciones agropecuarias mixtas cuya producción se destina al mercado' => '6130- Productores y trabajadores calificados de explotaciones agropecuarias mixtas cuya producción se destina al mercado',
								'6210- Trabajadores forestales calificados y afines' => '6210- Trabajadores forestales calificados y afines',
								'6221- Trabajadores de explotaciones de acuicultura' => '6221- Trabajadores de explotaciones de acuicultura',
								'6222- Pescadores de agua dulce y en aguas costeras' => '6222- Pescadores de agua dulce y en aguas costeras',
								'6223- Pescadores de alta mar' => '6223- Pescadores de alta mar',
								'6224- Cazadores y tramperos' => '6224- Cazadores y tramperos',
								'6310- Trabajadores agrícolas de subsistencia' => '6310- Trabajadores agrícolas de subsistencia',
								'6320- Trabajadores pecuarios de subsistencia' => '6320- Trabajadores pecuarios de subsistencia',
								'6330- Trabajadores agropecuarios de subsistencia' => '6330- Trabajadores agropecuarios de subsistencia',
								'6340- Pescadores, cazadores, tramperos y recolectores de subsistencia' => '6340- Pescadores, cazadores, tramperos y recolectores de subsistencia',
								'7111- Constructores de casas' => '7111- Constructores de casas',
								'7112- Albañiles' => '7112- Albañiles',
								'7113- Labrantes, tronzadores y grabadores de piedra' => '7113- Labrantes, tronzadores y grabadores de piedra',
								'7114- Operarios en cemento armado, enfoscadores y afines' => '7114- Operarios en cemento armado, enfoscadores y afines',
								'7115- Carpinteros de armar y de obra blanca' => '7115- Carpinteros de armar y de obra blanca',
								'7119- Oficiales y operarios de la construcción de obra gruesa y afines no clasificados en otros grupos primarios' => '7119- Oficiales y operarios de la construcción de obra gruesa y afines no clasificados en otros grupos primarios',
								'7121- Techadores' => '7121- Techadores',
								'7122- Enchapadores, parqueteros y colocadores de suelos' => '7122- Enchapadores, parqueteros y colocadores de suelos',
								'7123- Revocadores' => '7123- Revocadores',
								'7124- Instaladores de material aislante y de insonorización' => '7124- Instaladores de material aislante y de insonorización',
								'7125- Cristaleros' => '7125- Cristaleros',
								'7126- Fontaneros e instaladores de tuberías' => '7126- Fontaneros e instaladores de tuberías',
								'7127- Mecánicos montadores de aire acondicionado y refrigeración' => '7127- Mecánicos montadores de aire acondicionado y refrigeración',
								'7131- Pintores y empapeladores' => '7131- Pintores y empapeladores',
								'7132- Barnizadores y afines' => '7132- Barnizadores y afines',
								'7133- Limpiadores de fachadas y deshollinadores' => '7133- Limpiadores de fachadas y deshollinadores',
								'7211- Moldeadores y macheros' => '7211- Moldeadores y macheros',
								'7212- Soldadores y oxicortadores' => '7212- Soldadores y oxicortadores',
								'7213- Chapistas y caldereros' => '7213- Chapistas y caldereros',
								'7214- Montadores de estructuras metálicas' => '7214- Montadores de estructuras metálicas',
								'7215- Aparejadores y empalmadores de cables' => '7215- Aparejadores y empalmadores de cables',
								'7221- Herreros y forjadores' => '7221- Herreros y forjadores',
								'7222- Herramentistas y afines' => '7222- Herramentistas y afines',
								'7223- Ajustadores y operadores de máquinas herramientas' => '7223- Ajustadores y operadores de máquinas herramientas',
								'7224- Pulidores de metales y afiladores de herramientas' => '7224- Pulidores de metales y afiladores de herramientas',
								'7231- Mecánicos y reparadores de vehículos de motor' => '7231- Mecánicos y reparadores de vehículos de motor',
								'7232- Mecánicos y reparadores de sistemas y motores de aeronaves' => '7232- Mecánicos y reparadores de sistemas y motores de aeronaves',
								'7233- Mecánicos y reparadores de máquinas agrícolas e industriales' => '7233- Mecánicos y reparadores de máquinas agrícolas e industriales',
								'7234- Reparadores de bicicletas y afines' => '7234- Reparadores de bicicletas y afines',
								'7311- Mecánicos y reparadores de instrumentos de precisión' => '7311- Mecánicos y reparadores de instrumentos de precisión',
								'7312- Fabricantes y afinadores de instrumentos musicales' => '7312- Fabricantes y afinadores de instrumentos musicales',
								'7314- Alfareros y ceramistas (barro y arcilla)' => '7314- Alfareros y ceramistas (barro y arcilla)',
								'7315- Sopladores, modeladores, laminadores, cortadores y pulidores de vidrio' => '7315- Sopladores, modeladores, laminadores, cortadores y pulidores de vidrio',
								'7316- Rotulistas, pintores decorativos y grabadores' => '7316- Rotulistas, pintores decorativos y grabadores',
								'7321- Preimpresores y afines' => '7321- Preimpresores y afines',
								'7322- Impresores' => '7322- Impresores',
								'7323- Encuadernadores y afines' => '7323- Encuadernadores y afines',
								'7331- Tejedores con telares' => '7331- Tejedores con telares',
								'7332- Tejedores con agujas' => '7332- Tejedores con agujas',
								'7333- Otros tejedores' => '7333- Otros tejedores',
								'7341- Cesteros y mimbreros' => '7341- Cesteros y mimbreros',
								'7342- Sombrereros artesanales' => '7342- Sombrereros artesanales',
								'7351- Talladores piezas artesanales de madera' => '7351- Talladores piezas artesanales de madera',
								'7352- Decoradores de piezas artesanales en madera' => '7352- Decoradores de piezas artesanales en madera',
								'7361- Joyeros' => '7361- Joyeros',
								'7362- Orfebres y plateros' => '7362- Orfebres y plateros',
								'7363- Bisuteros' => '7363- Bisuteros',
								'7370- Artesanos del cuero' => '7370- Artesanos del cuero',
								'7391- Artesanos de papel' => '7391- Artesanos de papel',
								'7392- Artesanos del hierro y otros metales' => '7392- Artesanos del hierro y otros metales',
								'7393- Artesanos de las semillas y cortezas vegetales' => '7393- Artesanos de las semillas y cortezas vegetales',
								'7399- Artesanos de otros materiales no clasificados en otros grupos primarios' => '7399- Artesanos de otros materiales no clasificados en otros grupos primarios',
								'7411- Electricistas de obras y afines' => '7411- Electricistas de obras y afines',
								'7412- Mecánicos y ajustadores electricistas' => '7412- Mecánicos y ajustadores electricistas',
								'7413- Instaladores y reparadores de líneas eléctricas' => '7413- Instaladores y reparadores de líneas eléctricas',
								'7421- Mecánicos y reparadores en electrónica' => '7421- Mecánicos y reparadores en electrónica',
								'7422- Instaladores y reparadores en tecnología de la información y las comunicaciones' => '7422- Instaladores y reparadores en tecnología de la información y las comunicaciones',
								'7511- Carniceros, pescaderos y afines' => '7511- Carniceros, pescaderos y afines',
								'7512- Panaderos, pasteleros y confiteros' => '7512- Panaderos, pasteleros y confiteros',
								'7513- Operarios de la elaboración de productos lácteos' => '7513- Operarios de la elaboración de productos lácteos',
								'7514- Operarios de la conservación de frutas, legumbres, verduras y afines' => '7514- Operarios de la conservación de frutas, legumbres, verduras y afines',
								'7515- Catadores y clasificadores de alimentos y bebidas' => '7515- Catadores y clasificadores de alimentos y bebidas',
								'7516- Preparadores y elaboradores de tabaco y sus productos' => '7516- Preparadores y elaboradores de tabaco y sus productos',
								'7521- Operarios del tratamiento de la madera' => '7521- Operarios del tratamiento de la madera',
								'7522- Ebanistas y carpinteros (excluye carpinteros de armar y de obra blanca)' => '7522- Ebanistas y carpinteros (excluye carpinteros de armar y de obra blanca)',
								'7523- Ajustadores y operadores de máquinas para trabajar madera' => '7523- Ajustadores y operadores de máquinas para trabajar madera',
								'7531- Sastres, modistos, peleteros y sombrereros' => '7531- Sastres, modistos, peleteros y sombrereros',
								'7532- Patronistas y cortadores de tela, cuero y afines' => '7532- Patronistas y cortadores de tela, cuero y afines',
								'7533- Costureros, bordadores y afines' => '7533- Costureros, bordadores y afines',
								'7534- Tapiceros, colchoneros y afines' => '7534- Tapiceros, colchoneros y afines',
								'7535- Apelambradores, pellejeros y curtidores' => '7535- Apelambradores, pellejeros y curtidores',
								'7536- Zapateros y afines' => '7536- Zapateros y afines',
								'7541- Buzos' => '7541- Buzos',
								'7542- Dinamiteros y pegadores' => '7542- Dinamiteros y pegadores',
								'7543- Clasificadores y probadores de productos (excluyendo alimentos y bebidas)' => '7543- Clasificadores y probadores de productos (excluyendo alimentos y bebidas)',
								'7544- Fumigadores y otros controladores de plagas y malas hierbas' => '7544- Fumigadores y otros controladores de plagas y malas hierbas',
								'7549- Otros oficiales, operarios y oficios relacionados no clasificados en otros grupos primarios' => '7549- Otros oficiales, operarios y oficios relacionados no clasificados en otros grupos primarios',
								'8111- Mineros y operadores de instalaciones mineras' => '8111- Mineros y operadores de instalaciones mineras',
								'8112- Operadores de instalaciones de procesamiento de minerales y rocas' => '8112- Operadores de instalaciones de procesamiento de minerales y rocas',
								'8113- Perforadores y sondistas de pozos y afines' => '8113- Perforadores y sondistas de pozos y afines',
								'8114- Operadores de máquinas para fabricar cemento y otros productos minerales' => '8114- Operadores de máquinas para fabricar cemento y otros productos minerales',
								'8121- Operadores de instalaciones de procesamiento de metales' => '8121- Operadores de instalaciones de procesamiento de metales',
								'8122- Operadores de máquinas pulidoras, galvanizadoras y recubridoras de metales' => '8122- Operadores de máquinas pulidoras, galvanizadoras y recubridoras de metales',
								'8131- Operadores de plantas y máquinas de productos químicos' => '8131- Operadores de plantas y máquinas de productos químicos',
								'8132- Operadores de máquinas para fabricar productos fotográficos' => '8132- Operadores de máquinas para fabricar productos fotográficos',
								'8141- Operadores de máquinas para fabricar productos de caucho' => '8141- Operadores de máquinas para fabricar productos de caucho',
								'8142- Operadores de máquinas para fabricar productos de material plástico' => '8142- Operadores de máquinas para fabricar productos de material plástico',
								'8143- Operadores de máquinas para fabricar productos de papel' => '8143- Operadores de máquinas para fabricar productos de papel',
								'8151- Operadores de máquinas de preparación de fibras, hilado y devanado' => '8151- Operadores de máquinas de preparación de fibras, hilado y devanado',
								'8152- Operadores de telares y otras máquinas tejedoras' => '8152- Operadores de telares y otras máquinas tejedoras',
								'8153- Operadores de máquinas de coser' => '8153- Operadores de máquinas de coser',
								'8154- Operadores de máquinas de blanqueamiento, teñido y limpieza de tejidos' => '8154- Operadores de máquinas de blanqueamiento, teñido y limpieza de tejidos',
								'8155- Operadores de máquinas de tratamiento de pieles y cueros' => '8155- Operadores de máquinas de tratamiento de pieles y cueros',
								'8156- Operadores de máquinas para la fabricación de calzado y afines' => '8156- Operadores de máquinas para la fabricación de calzado y afines',
								'8157- Operadores de máquinas de lavandería' => '8157- Operadores de máquinas de lavandería',
								'8159- Operadores de máquinas para fabricar productos textiles y artículos de piel y cuero no clasificados en otros grupos primarios' => '8159- Operadores de máquinas para fabricar productos textiles y artículos de piel y cuero no clasificados en otros grupos primarios',
								'8160- Operadores de máquinas para elaborar alimentos y productos afines' => '8160- Operadores de máquinas para elaborar alimentos y productos afines',
								'8171- Operadores de instalaciones para la preparación de pasta para papel y papel' => '8171- Operadores de instalaciones para la preparación de pasta para papel y papel',
								'8172- Operadores de instalaciones de procesamiento de la madera' => '8172- Operadores de instalaciones de procesamiento de la madera',
								'8181- Operadores de máquinas y de instalaciones para elaborar productos de vidrio y cerámica' => '8181- Operadores de máquinas y de instalaciones para elaborar productos de vidrio y cerámica',
								'8182- Operadores de máquinas de vapor y calderas' => '8182- Operadores de máquinas de vapor y calderas',
								'8183- Operadores de máquinas de embalaje, embotellamiento y etiquetado' => '8183- Operadores de máquinas de embalaje, embotellamiento y etiquetado',
								'8189- Otros operadores de máquinas y de instalaciones fijas no clasificados en otros grupos primarios' => '8189- Otros operadores de máquinas y de instalaciones fijas no clasificados en otros grupos primarios',
								'8211- Ensambladores de maquinaria mecánica' => '8211- Ensambladores de maquinaria mecánica',
								'8212- Ensambladores de equipos eléctricos y electrónicos' => '8212- Ensambladores de equipos eléctricos y electrónicos',
								'8219- Ensambladores no clasificados bajo otros grupos primarios' => '8219- Ensambladores no clasificados bajo otros grupos primarios',
								'8311- Maquinistas de locomotoras' => '8311- Maquinistas de locomotoras',
								'8312- Guardafrenos, guardagujas y agentes de maniobras' => '8312- Guardafrenos, guardagujas y agentes de maniobras',
								'8321- Conductores de motocicletas' => '8321- Conductores de motocicletas',
								'8323- Conductores de camionetas y vehículos livianos' => '8323- Conductores de camionetas y vehículos livianos',
								'8324- Conductores de taxis' => '8324- Conductores de taxis',
								'8331- Conductores de buses, microbuses y tranvías' => '8331- Conductores de buses, microbuses y tranvías',
								'8332- Conductores de camiones y vehículos pesados' => '8332- Conductores de camiones y vehículos pesados',
								'8341- Operadores de maquinaria agrícola y forestal móvil' => '8341- Operadores de maquinaria agrícola y forestal móvil',
								'8342- Operadores de máquinas de movimiento de tierras, construcción de vías y afines' => '8342- Operadores de máquinas de movimiento de tierras, construcción de vías y afines',
								'8343- Operadores de grúas, aparatos elevadores y afines' => '8343- Operadores de grúas, aparatos elevadores y afines',
								'8344- Operadores de montacargas' => '8344- Operadores de montacargas',
								'8350- Marineros de cubierta y afines' => '8350- Marineros de cubierta y afines',
								'9111- Personal doméstico' => '9111- Personal doméstico',
								'9112- Aseadores de oficinas, hoteles y otros establecimientos' => '9112- Aseadores de oficinas, hoteles y otros establecimientos',
								'9121- Lavanderos y planchadores manuales' => '9121- Lavanderos y planchadores manuales',
								'9122- Lavadores de vehículos' => '9122- Lavadores de vehículos',
								'9123- Lavadores de ventanas' => '9123- Lavadores de ventanas',
								'9129- Otro personal de limpieza no clasificados bajo otros grupos primarios' => '9129- Otro personal de limpieza no clasificados bajo otros grupos primarios',
								'9211- Obreros y peones de explotaciones agrícolas' => '9211- Obreros y peones de explotaciones agrícolas',
								'9212- Obreros y peones de explotaciones ganaderas' => '9212- Obreros y peones de explotaciones ganaderas',
								'9213- Obreros y peones de explotaciones agropecuarias' => '9213- Obreros y peones de explotaciones agropecuarias',
								'9214- Obreros y peones de jardinería y horticultura' => '9214- Obreros y peones de jardinería y horticultura',
								'9215- Obreros y peones forestales' => '9215- Obreros y peones forestales',
								'9216- Obreros y peones de pesca y acuicultura' => '9216- Obreros y peones de pesca y acuicultura',
								'9311- Obreros y peones de minas y canteras' => '9311- Obreros y peones de minas y canteras',
								'9312- Obreros y peones de obras públicas y mantenimiento' => '9312- Obreros y peones de obras públicas y mantenimiento',
								'9313- Obreros y peones de la construcción de edificios' => '9313- Obreros y peones de la construcción de edificios',
								'9321- Empacadores manuales' => '9321- Empacadores manuales',
								'9329- Obreros y peones de la industria manufacturera no clasificados en otros grupos primarios' => '9329- Obreros y peones de la industria manufacturera no clasificados en otros grupos primarios',
								'9331- Conductores de vehículos accionados a pedal o a brazo' => '9331- Conductores de vehículos accionados a pedal o a brazo',
								'9332- Conductores de vehículos y máquinas de tracción animal' => '9332- Conductores de vehículos y máquinas de tracción animal',
								'9333- Obreros y peones de carga' => '9333- Obreros y peones de carga',
								'9334- Surtidores de estanterías' => '9334- Surtidores de estanterías',
								'9411- Cocineros de comidas rápidas' => '9411- Cocineros de comidas rápidas',
								'9412- Ayudantes de cocina' => '9412- Ayudantes de cocina',
								'9510- Trabajadores ambulantes de servicios y afines' => '9510- Trabajadores ambulantes de servicios y afines',
								'9520- Vendedores ambulantes (excluyendo comidas de preparación inmediata)' => '9520- Vendedores ambulantes (excluyendo comidas de preparación inmediata)',
								'9611- Recolectores de basura y material reciclable' => '9611- Recolectores de basura y material reciclable',
								'9612- Clasificadores de desechos' => '9612- Clasificadores de desechos',
								'9613- Barrenderos y afines' => '9613- Barrenderos y afines',
								'9621- Mensajeros, mandaderos, maleteros y repartidores' => '9621- Mensajeros, mandaderos, maleteros y repartidores',
								'9622- Personas que realizan trabajos varios' => '9622- Personas que realizan trabajos varios',
								'9624- Acarreadores de agua y recolectores de leña' => '9624- Acarreadores de agua y recolectores de leña',
								'9625- Recolectores de dinero y surtidores de máquinas de venta automática' => '9625- Recolectores de dinero y surtidores de máquinas de venta automática',
								'9626- Lectores de medidores' => '9626- Lectores de medidores',
								'9629- Otras ocupaciones elementales no clasificadas en otros grupos primarios' => '9629- Otras ocupaciones elementales no clasificadas en otros grupos primarios',
								'9998- Jubilado, desempleado, ama de casa, estudiante, dedicación al hogar, menor de edad' => '9998- Jubilado, desempleado, ama de casa, estudiante, dedicación al hogar, menor de edad',
								'9999- En los casos en que no se tiene esta información registrar' => '9999- En los casos en que no se tiene esta información registrar',

								'SD' => 'Sin dato'
							];
							echo $this->Form->input('ocupacion', array(
								'label' => '¿Cúal es la ocupación actual?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionOcupacion,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'class' => 'form-control select-search'
							));
							?></div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionConsumospa = [
								'No aplica ' =>  'Elegir',
								'No' => 'No',
								'Cigarrillo' => 'Cigarrillo',
								'Licor' => 'Licor',
								'Licor_cigarrillo' => 'Licor/Cigarrillo',
								'Sustancias Psicoactivas' => 'Marihuana, basuco, otras',
								'Uso indebido de Medicamentos' => 'Medicamentos sin prescripción médica(Opioides,Depresores,Estimulantes)',
								'SD' => 'Sin dato',
								'No aplica' => 'No aplica',

							];

							echo $this->Form->input('consumospa', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionConsumospa,
								'placeholder' => '',
								'id' => 'consumospa',
								'onChange' => 'spa(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							)); ?>
						</div>
						<div id="Consumospa" class="form-group col-md-6">
							<?php
							echo $this->Form->input('consumospa1', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionConsumospa,
								'placeholder' => '',
								'id' => 'consumospa1'

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionConflictos = [
								'No aplica ' => 'Elegir',
								'No' => 'No refiere',
								'Difucultades Economicas' => 'Dificultad económica para suplir necesidades básicas',
								'Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
								'Conflictos entre hermanos' => 'Conflictos entre hermanos',
								'Conflictos entre Familia' => 'Conflictos entre Familia',
								'Violencias de género' => 'Violencias de género',
								'Problemas o Transtornos mentales diagnosticados' => 'Problemas o Transtornos mentales diagnosticados',
								'Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('riesgopsicosocial', [
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el último mes?',
								'class' => 'form-control',
								'type' => 'select',
								'options' => $optionConflictos,

								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'riesgopsicosocial',
								'onChange' => 'psicosocial(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							]);
							?>
						</div>
						<div id="Psicosocial" class="form-group col-md-6">
							<p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
								'No refiere' </p>
							<?php
							echo $this->Form->input('riesgopsicosocial1', array(
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el ultimo mes?',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionConflictos,
								'placeholder' => '',
								'id' => 'riesgopsicosocial1'
							)); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionTiposViolencia = [
								'' => 'Elegir',
								'No' => 'No se identifica',
								'Sospecha Violencia Fisica' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
								'Sospecha Violencia Emocional' => 'Persona retraida, timida o agresiva',
								'sospecha Violencia Sexual' => 'Tocamientos de personas, relaciones sexuales sin consentimiento ',
								'Sospecha Abondono_Negligencia' => 'Falta de atención a necesidades básicas(alimentación, salud, educación)',
								'No informa' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('sopechamaltrato', array(
								'label' => '¿Sospecha de algún tipo de vulneración o violencia?',
								'class' => 'form-control',
								'placeholder' => '',

								'options' => $optionTiposViolencia,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'sopechamaltrato'


							)); ?>
						</div>
					</div>
				</div>
			</div>


			<h2 class="subtitle-general-forms ">APGAR Familiar</h2>
			<hr style=" border:0.1px solid rgba(0,0,0,.125);">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

					<div class="form-group row">
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionApgar = [
								'' =>  'Elegir',
								'4' => 'Siempre',
								'3' => 'La mayoría de veces',
								'2' => 'Algunas veces',
								'1' => 'Muy pocas veces',
								'0' => 'Nunca',
								'0' => 'No informa',
								'0' => 'Sin dato',

							];
							echo $this->Form->input('ayudafamiliar', array(
								'label' => 'Me satisface la ayuda que recibo de mi familia cuando tengo algún problema o necesidad',
								'class' => 'form-control sumar',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',
								'id' => 'opcion1'

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('participacionfamiliar', array(
								'label' => 'Me satisface la participación que mi
								familia brinda y permite
								Me satisface cómo mi',
								'class' => 'form-control sumar',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',
								'id' => 'opcion2'

							)); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('aceptacionapoyo', array(
								'label' => 'Me satisface cómo mi familia
								acepta y apoya mis deseos de
								emprender nuevas actividades',
								'class' => 'form-control sumar',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',
								'id' => 'opcion3'

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('afectoemociones', array(
								'label' => 'Me satisface cómo mi familia
								expresa afectos y responde a mis
								emociones como rabia, tristeza y
								amor',
								'class' => 'form-control sumar',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',
								'id' => 'opcion4'

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('compartirfamilia', array(
								'label' => 'Me satisface cómo compartimos en
								familia:
								El tiempo para estar juntos.
								Los espacios en casa
								El dinero',
								'class' => 'form-control sumar',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',
								'id' => 'opcion5'

							)); ?>
						</div>
					</div>

					<div class="form-group col-md-6" style="margin-top: -10px;">
						<?php
						echo $this->Form->input('calculoapgar', array(
							'label' => 'Resultado Apgar',
							'class' => 'form-control',
							'style' => 'height:30px; font-size: 15px; width:100%',
							'placeholder' => '',
							'id' => 'resultado-input' // Cambiado el ID a 'resultado-input'
						));
						?>
					</div>

				</div>
			</div>


			<h2 class="subtitle-general-forms ">Plan de
				Atención integral</h2>
			<hr style=" border:0.1px solid rgba(0,0,0,.125);">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

					<div class="form-group row">

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionCanlizacion = [
								'No aplica ' => 'Elegir',
								'No' => 'No',
								'Vacunacion ' => 'Vacunación ',
								'Atencion de PyM Medico' => 'Atención en salud de promoción y mantenimiento por médico',
								'Atencion medicina general' => ' Atención en salud por medicina general',
								'Atencion  Urgencias ' => 'Atención en salud en un servicio de Urgencias ',
								'Salud oral' => 'profilaxis y remoción de placa bacteriana y/o detartraje supragingival.',
								'Activacion de ruta por sospecha de violencias' => 'Activación de ruta por sospecha de violencias',
								'Prueba rapida treponemica' => 'Prueba rápida treponémica',
								'Prueba rapida para VIH' => 'Prueba rápida para VIH',
								'Asesoria pre y post test VIH' => 'Asesoría pre y post test VIH',
								'Prueba rápida hepatitis B' => 'Prueba rápida de hepatitis B',
								'Prueba rápida hepatitis C' => 'Prueba rápida de hepatitis C',
								'Prueba de embarazo' => 'Prueba de embarazo',
								'Asesoría en anticoncepcion' => 'Asesoría en anticoncepción por médico o enfermera',
								'Tamizaje de riesgo cardiovascular' => 'Tamizaje de riesgo cardiovascular',
								'Citologia' => 'Tamizaje de cáncer de cuello uterino (citología)',
								'Suministro de anticonceptivos  ' => 'Suministro de anticonceptivos  ',
								'Suministro de preservativos' => 'Suministro de preservativos',
								'Asesoria en anticoncepcion' => 'Asesoría en anticoncepción',
								'Tamizaje para cancer de mama' => 'Tamizaje para cáncer de mama',
								'Tamizaje para cancer de prostata ' => 'Tamizaje para cáncer de próstata (PSA)',
								'Tamizaje para cancer de colon' => 'Tamizaje para cáncer de colon',

							];

							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'canalizacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							)); ?>
						</div>


					</div>
					<div id="Canalizacion" class="form-group row">
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',


							));
							?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php

							echo $this->Form->input('canalizaciontres', array(
								'label' => 'Canalización',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							$optionEducacion = [
								'No aplica ' => 'Elegir',
								'No aplica' => 'No aplica',
								'Educacion individual' => 'Educación para la salud individual',
								'Educacion familiar' => 'Educación para la salud familiar',
								'Educacion grupal' => 'Educación para la salud grupal',

							];
							echo $this->Form->input('educacion', array(
								'label' => 'Refiera el tipo de Educación a desarrollar',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'options' => $optionEducacion,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
						</div>


						<?php
						echo $this->Form->input('fechaRegistro', array(
							'type' => 'hidden',
						)); ?>

					</div>

					<div class="form-group col-md-6" style="margin-top: 20px;">
						<?php
						echo $this->Form->input('canalizacion_id', array(
							'label' => 'Enlace de canalización',
							'class' => 'form-control',
							'style' => 'height:30px;  font-size: 15px ; width:100%',
							'class' => 'form-control select-search',
							'placeholder' => '',
							'type' => 'select',
							'style' => 'height:30px;  font-size: 15px ; width:100%',

						)); ?>
					</div>


				</div>

				<button class="my-button">
					Guardar<?php echo $this->Form->end(); ?>
				</button>
			</div>
	</div>

	</fieldset>

</body>




<!--div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('List Juventudadultos'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
			</li>
			<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
			</li>
			<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
			</li>
			<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>
			</li>
		</ul>
	</div-->



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
		function calcularSuma() {
			suma = 0;

			// Obtener el valor seleccionado de cada opción y sumarlo
			$('select.sumar').each(function() {
				suma += parseInt($(this).val()) || 0;
			});

			// Mostrar el resultado en el campo de entrada con id 'resultado-input'
			$('#resultado-input').val(suma);
			var imcField = document.getElementById('resultado-input');
			switch (true) {
				case suma <= 9:
					imcField.style.color = 'red';
					break;
				case suma >= 10 && suma <= 13:
					imcField.style.color = 'orange';
					break;
				case suma >= 14 && suma <= 17:
					imcField.style.color = '#FAA80D';
					break;
				case suma >= 18:
					imcField.style.color = 'green';
					break;
				default:
					imcField.style.color = 'black';
			}

		}

		// Llamar a la función al cargar la página
		calcularSuma();

		// Vincular la función al evento change de los elementos select
		$('select.sumar').on('change', function() {
			calcularSuma();
		});


		$('.select-search').select2();
		agregarOpcionSeleccion();
	});



	document.addEventListener('DOMContentLoaded', function() {
		var aseguradoraSelect = document.getElementById('aseguradora');
		var otraAseguradoraDiv = document.getElementById('otraAseguradoraDiv');

		aseguradoraSelect.addEventListener('change', function() {
			var selectedOption = aseguradoraSelect.value;

			if (selectedOption === 'otra') {
				otraAseguradoraDiv.style.display = 'block';
				document.getElementById('otraAseguradora').removeAttribute('disabled');
			} else {
				otraAseguradoraDiv.style.display = 'none';
				document.getElementById('otraAseguradora').setAttribute('disabled', 'disabled');
			}
		});

		// Verifica el estado inicial
		if (aseguradoraSelect.value === 'otra') {
			otraAseguradoraDiv.style.display = 'block';
			document.getElementById('otraAseguradora').removeAttribute('disabled');
		} else {
			otraAseguradoraDiv.style.display = 'none';
			document.getElementById('otraAseguradora').setAttribute('disabled', 'disabled');
		}

	});


	function agregarOpcionSeleccion() {



		$("#JuventudadultoCanalizacionId").prepend(
			"<option value='' selected='selected'>Seleccione</option>");


	}


	/*function gestacion(id) {
	    if (id == "yes") {
	        $("#yes").show();
	        $("#not").hide();


	    } else if (id == "not") {
	        $("#yes").hide();
	        $("#not").show();


	    }
	}*/


	document.getElementById('calcularIMC').addEventListener('click', function() {
		var peso = parseFloat(document.getElementById('peso').value);
		var talla = parseFloat(document.getElementById('talla').value);

		if (!isNaN(peso) && !isNaN(talla) && talla > 0) {
			var altura = talla / 100; // Convertir de cm a m
			var imc = peso / (altura * altura);

			// Mostrar el IMC calculado en el campo indicemasacorporal
			var imcField = document.getElementById('indicemasacorporal');
			imcField.value = imc.toFixed(2); // Redondear a 2 decimales

			// Determinar el mensaje y el color según el rango del IMC
			var mensaje = '';
			if (imc < 18.5) {
				mensaje = 'Peso insuficiente';
				imcField.style.color = 'red'; // Cambiar el color del texto a rojo
			} else if (imc >= 18.5 && imc <= 24.9) {
				mensaje = 'Peso normal o saludable';
				imcField.style.color = 'green'; // Cambiar el color del texto a verde
			} else if (imc >= 25.0 && imc <= 29.9) {
				mensaje = 'Sobrepeso';
				imcField.style.color = 'orange'; // Cambiar el color del texto a naranja
			} else {
				mensaje = 'Obesidad';
				imcField.style.color = 'red'; // Cambiar el color del texto a rojo
			}

			// Mostrar el mensaje en el elemento mensajeIMC
			var mensajeIMC = document.getElementById('mensajeIMC');
			mensajeIMC.textContent = mensaje;
		} else {
			alert('Por favor, ingrese valores válidos para peso y talla.');
		}
	});
	$(function() {
		$('#ayudaButton').popover();
	});
</script>