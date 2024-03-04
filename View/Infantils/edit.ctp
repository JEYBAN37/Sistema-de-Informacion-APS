<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<div>
	<div class="form-group col-sm-12">

		<?php echo $this->Form->create('Infantil'); ?>

		<fieldset>

			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Infancia 6 a 11
					años</h1>

			</div>


			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">


						<?php echo $this->Form->input('id');


						echo $this->Form->input('familia_id', array('type' => 'hidden'));
						?>
						<!--div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',
							]);
							?>
                            </div-->


						< <div class="form-group col-md-6">
							<?php
							$TipoDeDocumentoOptions = array(
								'' => 'Elegir',
								'RC' => 'Registro Civil',
								'TI' => 'Tarjeta de identidad',
								'PPT' => 'Permiso Protección Temporal',

							);
							echo $this->Form->input('tipodocumento', array(
								'label' => 'Tipo de Documento:',
								'class' => 'form-control',
								'style' => 'font-size: 12px;',
								'placeholder' => '',
								'type' => 'select',
								'options' => $TipoDeDocumentoOptions
							));
							?>
					</div>

					<div class="form-group col-md-6">
						<?php echo $this->Form->input('numerodoc', [
							'label' => 'N° de documento',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
						]);  ?>
					</div>

					<div class="form-group col-md-6">
						<?php echo $this->Form->input('primerapellido', [
							'label' => 'Primer Apellido',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
						]);  ?>
					</div>

					<div class="form-group col-md-6">
						<?php echo $this->Form->input('segundoapellido', [
							'label' => 'Segundo Apellido',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
						]);  ?>
					</div>

					<div class="form-group col-md-6">
						<?php echo $this->Form->input('primernombre', [
							'label' => 'Primer Nombre',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
						]);  ?>
					</div>

					<div class="form-group col-md-6">
						<?php echo $this->Form->input('segundonombre', [
							'label' => 'Segundo Nombre',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
						]);  ?>
					</div>

					<div class="form-group col-md-6">
						<!-- Campo de fecha de nacimiento -->
						<?php echo $this->Form->input('fechanac', [
							'label' => 'Fecha de nacimiento:',
							'type' => 'date',
							'minYear' => date('Y') - 2,
							'maxYear' => date('Y'),
							'style' => 'font-size: 16px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;',
							'id' => 'fechanac', // Agrega este identificador al campo de fecha de nacimiento
						]); ?>
					</div>

					<div class="form-group col-md-6">
						<!-- Campo de edad calculada (se llenará automáticamente con JavaScript) -->
						<?php echo $this->Form->input('edad', [
							'label' => 'Edad en meses',
							'style' => 'font-size: 16px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;',
							'id' => 'edad', // Agrega este identificador al campo de edad
							'readonly' => true, // Hace que el campo de edad sea de solo lectura
							'type' => 'number',
							'class' => 'form-control',
							'step' => '0.01'

						]); ?>
					</div>

					<div class="form-group col-md-6">
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

							'style' => 'font-size: 12px',
						]); ?>
					</div>

					<div class="form-group col-md-6">
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
							'PROINSALUD' => 'PRONISALUD',
							'Fondo UNDENAR' => 'Fondo UDENAR',
							'Medicina Prepagada' => 'Medicina Prepagada',
							'Sin afiliacion' => 'Sin afiliación',
							'SD' => 'Sin dato',

						];
						echo $this->Form->input('aseguradora', [
							'label' => 'Aseguradora',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
							'options' => $aseguradoraOption,
						]);  ?>
					</div>

					<div class="form-group col-md-6">
						<?php
						$regimenOption = [
							' ' => 'Elegir',
							'Subsidiado' => 'Subsidiado',
							'Contributivo' => 'Contributivo',
							'Regimen especial' => 'Regimen especial',
							'Regimen exepcion' => 'Regimen exepción',
							'Particular' => 'Particular',
							'SD' => 'Sin dato',

						];
						echo $this->Form->input('regimen', [
							'label' => 'Regimen',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
							'options' => $regimenOption,
						]);  ?>
					</div>

					<div class="form-group col-md-6">
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
							'style' => 'font-size: 12px',
							'options' => $estadoAfiliacionOption,
						]);  ?>
					</div>

					<!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('barrio', [
								'label' => 'Barrio',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div-->

					<!--div class="form-group col-md-6">
                            <?php echo $this->Form->input('direccion', [
								'label' => 'Direccion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div-->

					<div class="form-group col-md-6">
						<?php echo $this->Form->input('telefono', [
							'label' => 'Telefono',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
						]);  ?>
					</div>

					<div class="form-group col-md-6">
						<?php echo $this->Form->input('email', [
							'label' => 'Email',
							'class' => 'form-control',
							'style' => 'font-size: 12px',
						]);  ?>
					</div>

				</div>


			</div>
	</div>



	<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
		Valoración de Salud</h2>
	<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">
	<div class="grow justify-content-center" display="none" style="margin-top:20px">
		<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
			<div class="form-group row">
				<div class="form-group col-md-6">
					<?php
					$optionDiscapacidad = array(
						'' => 'Elegir',
						'No presenta' => 'No presenta',
						'Fisica' => 'Fisica',
						'Cognitiva' => 'Cognitiva',
						'Sensorial' => 'Sensorial'
					);
					echo $this->Form->input('discapacidad', array(
						'label' => '¿Presenta alguna de las siguientes discapacidades?',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'style' => 'font-size: 12px',
						'options' => $optionDiscapacidad
					));
					?>
				</div>
				<div class="form-group col-md-6" required onChange="mostrar(this.value)">
					<?php

					echo $this->Form->input('peso', array(
						'label' => 'Registre Peso en Kg.',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'placeholder' => '',
						'id' => 'peso',
					));
					?>
				</div>

				<div class="form-group col-md-6">
					<?php

					echo $this->Form->input('talla', array(
						'label' => 'Registre talla en cm',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'placeholder' => '',
						'id' => 'talla',
					));
					?>
				</div>
				<div class="form-group col-md-6">
					<button class="btn btn-primary" id="calcularIMC">Calcular IMC</button>
				</div>

				<div class="form-group col-md-6">
					<?php
					echo $this->Form->input('indicemasacorporal', array(
						'label' => 'Indice de mas corporal',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'placeholder' => '',
						'readonly' => 'readonly',
						'id' => 'indicemasacorporal',
					)); ?>

					<p id="mensajeIMC"></p>
				</div>
				<div class="form-group col-md-6">
					<?php
					echo $this->Form->input('tensionarterial', array(
						'label' => 'Registre Tensión arterial 0/0',
						'class' => 'form-control tension-arterial-input',
						'style' => 'font-size: 12px',
						'placeholder' => ''
					)); ?>
					<p id="mensaje-tension-arterial"></p>
				</div>
				<div class="form-group col-md-6">
					<?php
					$optionCronica = array(
						'' => 'Elegir',
						'No' => 'No',
						'Cardiovascular' => 'Cardiovascular',
						'Dislipidemia' => 'Colesterol, triglicéridos elevados',
						'Diabetes' => 'Diabetes',
						'Enfermedad huérfana' => 'Enfermedad huérfana',
						'Endocrinologica' => 'Endocrinológica',
						'Gastrointestinal' => 'Gastrointestinal',
						'Hipertiroidismo' => 'Hipertiroidismo',
						'Hipertension' => 'Hipertensión',
						'Hiportiroidismo' => 'Hiportiroidismo',
						'Metabolica' => 'Metabólica',
						'Neurologica' => 'Neurológica',
						'Epilepsia' => 'Epilepsia',
						'Respiratoria' => 'Respiratoria',
						'Renal, otras enferemdades crónicas' => 'renal otras enferemdades crónicas',
						'No informa' => 'Desconoce la información',
						'SD' => 'Sin dato',
					);

					echo $this->Form->input('condicioncronica', array(
						'label' => 'Presenta alguna de las siguientes enfermedades crónicas',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'options' => $optionCronica,
						'style' => 'font-size: 12px',

					)); ?>
				</div>
			</div>
		</div>
	</div>

	<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
		Atención en Salud</h2>
	<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

	<div class="grow justify-content-center" display="none" style="margin-top:20px">
		<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
			<div class="form-group row">
				<div class="form-group col-md-6">
					<?php
					$optionVacuna = array(
						'' => 'Elegir',
						'Incompleto' => 'Esquema incompleto a su edad',
						'Completo' => 'Esquema al día a su edad con refuerzo adicionales',
						'No informa' => 'Desconoce la información/no presenta carnet de vacuanas',
						'SD' => 'Sin dato',

					);
					echo $this->Form->input('esquemavacunacion', array(
						'label' => '¿Le han aplicado las vacunas correspondientes a la edad de menor? ',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'options' => $optionVacuna,
						'style' => 'font-size: 12px',

					)); ?>
				</div>

				<div class="form-group col-md-6">
					<?php
					$optionYesNo = [
						'' => 'Elegir',
						'Si' => 'Si',
						'No' => 'No',
						'SD' => 'Sin dato',

					];
					echo $this->Form->input('desparasitacion', array(
						'label' => 'Desparasitado en los últimos seis meses',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'options' => $optionYesNo,
						'style' => 'font-size: 12px'

					)); ?>
				</div>

				<div class="form-group col-md-6">
					<?php
					$optionCyD = array(
						'' => 'Elegir',
						'No inscrito en CYD' => 'No está inscrito en CYD',
						'Si CYD' => 'Si Asistió a último control programado',
						'Si no asistiio ulitimo ctrl. ' => 'No Asistió a último control programado',
						'No informa' => 'Desconoce la información/no presenta carnet de CYD',
						'SD' => 'Sin dato',

					);

					echo $this->Form->input('crecimientoydesarrollo', array(
						'label' => '¿Asistió al ultimo control de Crecimiento y Desarrollo?',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'options' => $optionCyD,
						'style' => 'font-size: 12px',

					)); ?>
				</div>
				<div class="form-group col-md-6">
					<?php
					$optionMalnutricion = array(
						'' => 'Elegir',
						'Desnutricion Aguda' => 'Bajo peso para la edad',
						'Desnutricion Cronica' => 'Baja talla para la edad',
						'Sobrepeso' => 'Sobrepeso',
						'Obesidad' => 'Obesidad',
						'No informa' => 'Desconoce la información/no presenta carnet de CYD',
						'SD' => 'Sin dato',

					);

					echo $this->Form->input('desnutricion', array(
						'label' => '¿Le han informado si el menor tiene un diagnóstico de Malnutrición?',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'options' => $optionMalnutricion,
						'style' => 'font-size: 12px',

					)); ?>
				</div>

				<div class="form-group col-md-6">
					<?php


					echo $this->Form->input('higieneoral', array(
						'label' => '¿Asistió a consulta de odontología en los últimos seis meses?',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'options' => $optionYesNo,
						'style' => 'font-size: 12px',

					)); ?>
				</div>

				<div class="form-group col-md-6">
					<?php echo $this->Form->input('desarrolloinfantil', array(
						'label' => 'Informa sobre alguna dificultad del desarrollo',
						'class' => 'form-control',
						'placeholder' => '',
						'style' => 'font-size: 12px',

					)); ?>
				</div>


			</div>
		</div>
	</div>

	<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
		Condiciones de vulnerabilidad</h2>
	<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

	<div class="grow justify-content-center" display="none" style="margin-top:20px">
		<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
			<div class="form-group row">
				<div class="form-group col-md-6">
					<?php
					$optionCuidado = [
						'' => 'Elegir',
						'Continuo familiar reponsable' => 'Continuo por un familiar adulto',
						'Continuo familiar vulnerable' => 'Continuo por un familiar menor/persona mayor',
						'Continuo acompañante' => 'Continuo por un acompañante no familiar',
						'Cuidado institucional' => 'Continuo en una institución o grupo',
						'Permanece solo' => 'Permanece solo',
						'No refiere' => 'No informa',
						'SD' => 'Sin dato'
					];

					echo $this->Form->input('cuidador', array(
						'label' => '¿El cuidado del menor está a cargo principalmente de?',
						'class' => 'form-control',
						'placeholder' => '',
						'options' => $optionCuidado,
						'type' => 'select',
						'style' => 'font-size: 12px',

					)); ?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('padresconsumo', array(
						'label' => 'Hijo de padres (especialmente la madre) con consumo de sustancias psicoactivas',
						'class' => 'form-control',
						'placeholder' => '',
						'options' => $optionYesNo,
						'type' => 'select',
						'style' => 'font-size: 12px',

					)); ?>
				</div>
				<div class="form-group col-md-6">
					<?php
					$optionEstudio = [
						'' => 'Elegir',
						'Jardin Infantil' => 'Jardin Infantil',
						'Institucion educativa' => 'Escuela',
						'No estudia' => 'No estudia',
						'Pronico' => 'Proinco',
						'Descercion escolar ' => 'Se retiro de estudiar',
						'No informa' => 'No informa',
						'SD' => 'Sin dato'
					];

					echo $this->Form->input('estudio', array(
						'label' => '¿El menor asiste a una institución educativa o de cuidado?',
						'class' => 'form-control',
						'placeholder' => '',
						'options' => $optionEstudio,
						'type' => 'select',
						'style' => 'font-size: 12px',

					)); ?>
				</div>

				<div class="form-group col-md-6">
					<?php
					$optionRendimientoEstudio = [
						'' => 'Elegir',
						'Alto' => 'Aprende y es dedicado en sus tareas',
						'Medio' => 'Se le dificulta comprender las tematicas ',
						'Bajo' => 'Tiene bajas notas y no hace tareas',
						'No aplica' => 'No aplica',
						'No informa' => 'No informa',
						'SD' => 'Sin dato'
					];
					echo $this->Form->input('rendimientoescolar', array(
						'label' => '¿Como es el rendiminento escolar del menor:',
						'class' => 'form-control',
						'placeholder' => '',
						'type' => 'select',
						'options' => $optionRendimientoEstudio,
						'style' => 'font-size: 12px',

					));
					?></div>

				<div class="form-group col-md-6">
					<?php
					$optionTiposViolencia = [
						'' => 'Eletgir',
						'No' => 'No se identifica',
						'Violencia Fisica' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
						'Violencia Emocional' => 'Menor retarido, timido o agresivo',
						'Violencia Sexual' => 'Tocamientos de personas adultas, relaciones sexuales ',
						'Abondono_Negligencia' => 'Falta de atencion a necesidades básicas(alimentación, salud, educación)',
						'No informa' => 'No informa',
						'SD' => 'Sin dato'
					];


					echo $this->Form->input('sopechamaltrato', array(
						'label' => '¿Sospecha de algun tipo de vulneración o violencia?',
						'class' => 'form-control',
						'placeholder' => '',
						'options' => $optionTiposViolencia,
						'type' => 'select',
						'style' => 'font-size: 12px',
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
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('participacionfamiliar', array(
								'label' => 'Me satisface la participación que mi
								familia brinda y permite
								Me satisface cómo mi',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',

							)); ?>
						</div>

						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('aceptacionapoyo', array(
								'label' => 'Me satisface cómo mi familia
								acepta y apoya mis deseos de
								emprender nuevas actividades',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',

							)); ?>
						</div>
						<div class="form-group col-md-6" style="margin-top: 20px;">
							<?php
							echo $this->Form->input('afectoemociones', array(
								'label' => 'Me satisface cómo mi familia
								expresa afectos y responde a mis
								emociones como rabia, tristeza y
								amor',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',

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
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'options' => $optionApgar,
								'placeholder' => '',
								'type' => 'select',

							)); ?>
						</div>
					</div>


				</div>
			</div>


	<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Plan de
		Atención integral</h2>
	<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">
	<div class="grow justify-content-center" display="none" style="margin-top:20px">
		<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
			<div class="form-group row">
				<div class="form-group col-md-6">
					<?php
					$optionCanlizacion = [
						'' => 'Elegir',
						'No' => 'No',
						'Vacunacion ' => 'Vacunación ',
						'Atencion de PyM Medico' => 'Atención en salud de PyM por médico',
						'Atencion de PyM Enfermera' => 'Atención en salud de PyM por enfermeria',
						'Atencion medicina general' => ' Atención en salud por medicina general',
						'Atencion  Urgencias ' => 'Atención en salud en un servicio de Urgencias ',
						'Atencion odontologia' => 'Atención en salud bucal',
						'Salud oral' => 'profilaxis y remoción de placa bacteriana y/o detartraje supragingival.',
						'Activacion de ruta por sospecha de violencias' => 'Activación de ruta por sospecha de violencias',

					];

					echo $this->Form->input('canalizacionuno', array(
						'label' => 'Canalización',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'placeholder' => '',

						'options' => $optionCanlizacion,
						'type' => 'select',



					)); ?>
				</div>
				<div class="form-group col-md-6">
					<?php
					echo $this->Form->input('canalizaciondos', array(
						'label' => 'Canalización',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'placeholder' => '',

						'options' => $optionCanlizacion,
						'type' => 'select',

					));
					?>
				</div>

				<div class="form-group col-md-6">
					<?php
					$optionEducacion = [
						'' => 'Elegir',
						'No' => 'No',
						'Educacion individual' => 'Educación para la salud individual',
						'Educacion familiar' => 'Educación para la salud familiar',
						'Educacion grupal' => 'Educación para la salud grupal',
					];
					echo $this->Form->input('canalizaciontres', array(
						'label' => 'Canalización',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'placeholder' => '',
						'options' => $optionCanlizacion,
						'type' => 'select',


					)); ?>
				</div>

				<div class="form-group col-md-6">
					<?php
					echo $this->Form->input('educacionuno', array(
						'label' => 'Educación',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'placeholder' => '',
						'options' => $optionEducacion,
						'type' => 'select',

					)); ?>
				</div>

				<div class="form-group col-md-6">
					<?php
					echo $this->Form->input('canalizacion_id', array(
						'label' => 'Enlace de canalizacion',
						'class' => 'form-control',
						'style' => 'font-size: 12px',
						'class' => 'form-control select-search',
						'placeholder' => '',
						'type' => 'select',
					)); ?>
				</div>
				<?php
				echo $this->Form->input('fechaRegistro', array(

					'type' => 'hiden',
				)); ?>
			</div>
		</div>

	</div>
	</fieldset>

	<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
</div>
</div>







<!--div class="actions">
	<h3><?php echo ('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('List Infantils'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
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
		$('.select-search').select2();
		agregarOpcionSeleccion();
	});


	function agregarOpcionSeleccion() {






	}
</script>