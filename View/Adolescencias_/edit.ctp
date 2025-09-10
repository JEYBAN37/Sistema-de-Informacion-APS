<div>

	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Adolescencia'); ?>
		<fieldset>

			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Adolescencia</h1>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',
								'style' => 'font-size: 12px',
								'type' => 'hidden'
							]);
							?>
						</div>

						<!--div class="form-group col-md-6">
							<?php echo $this->Form->input('persona_id', array(
								'label' => 'Docuemento/Nombre del Menor/Edad',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',
								'disabled' => 'disabled'
							)); ?>
						</div-->
					</div>
				</div>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Valoracion de Salud</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							$optionYesNo = [
								'' => 'Elegir',
								'Si' => 'Si',
								'No' => 'No',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							$optionDiscapacidad = array('' => 'Elegir', 'No presenta' => 'No presenta', 'Fisica' => 'Fisica', 'Cognitiva' => 'Cognitiva', 'Sensorial' => 'Sensorial');
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
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('peso', array(
								'label' => 'Registre su Peso en Kg.',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('talla', array(
								'label' => 'Registre su talla en cm',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('indicemasacorporal', array(
								'label' => 'Indice de mas corporal',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('tensionarterial', array(
								'label' => 'Registre Tensión arterial',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
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
								'label' => '¿Le han aplicado las vacunas correspondientes a la edad? ',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionVacuna,
								'style' => 'font-size: 12px',

							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionCronica = array(
								'' => 'Elegir',
								'Neurológica' => 'Neurológica',
								'Epilepsia' => 'Epilepsia',
								'Cardiovascular' => 'Cardiovascular',
								'Respiratoria' => 'Respiratoria',
								'Metabolica' => 'Metabólica',
								'Endocrinologica' => 'Endocrinológica',
								'Gastrointestinal' => 'Gastrointestinal',
								'Endocrinologica' => 'Endocrinológica',
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
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('desparasitacion', array(
								'label' => 'Desparasitado en los últimos seis meses',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionYesNo,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionValoracionMedica = array(
								'' => 'Elegir',
								'Consulta Morbilidad' => 'Consulta de Morbilidad',
								'Consulta PYP' => 'Consulta Promoción y prevención',
								'No asistido' => 'No asisitido',
								'No informa' => 'No informa',
								'SD' => 'Sin Dato',

							);
							echo $this->Form->input('valoracionmedica', array(
								'label' => '¿Ha asistido a Valoración Medica en el ultimo año?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => '',
								'options' => $optionValoracionMedica,
							)); ?>
							l </div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('saludoral', array(
								'label' => '¿Asistió a consulta de odontología en los últimos seis meses?',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionYesNo,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('higieneoral', array(
								'label' => 'Higiene Corporal',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionVidaSexual = [
								'' =>  'Elegir',
								'No' => 'No inicio vida sexual',
								'Consentido' => 'Si, Consentido',
								'No Consentido' => 'Si, No consentido',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('iniciovidasexual', array(
								'label' => 'Inicio de vida Sexual',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionVidaSexual,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionAnticonceptivos = [
								'' =>  'Elegir',
								'No' => 'No',
								'Si control' => 'Si, con supervisión',
								'Si No control' => 'Si, sin supervisión',
								'No informa' => 'No informa',
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('metodosanticonceptivos', array(
								'label' => 'Uso de Metodo anticonceptivos',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionAnticonceptivos,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('infeccionestransmisionsexual', array(
								'label' => 'Le han diganosticado alguna Infección de transmición Sexual',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionYesNo,
								'placeholder' => ''
							)); ?>
						</div>


						<div class="form-group col-md-6">
							<?php
							$optionConsumospa = [
								'' =>  'Elegir',
								'No' => 'No',
								'Cigarrillo' => 'Cigarrillo',
								'Licor' => 'Licor',
								'Licor_cigarrillo' => 'Licor/Cigarrillo',
								'Sustancias Psicoactivas' => 'Marihuana, basuco, otras',
								'Uso indebido de Medicamentos' => 'Medicamentos sin presciprción medica(Opiodes,Depresores,Estimulantes)',
								'SD' => 'Sin dato',
								'No aplica' => 'No aplica',

							];

							echo $this->Form->input('consumospa', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionConsumospa,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('consumospa', array(
								'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionConsumospa,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionConflictos = [
								'' => 'Elegir',
								'Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
								'Conflictos entre hermanos' => 'Conflictos entre hermanos',
								'Conflictos entre Familia' => 'Conflictos entre Familia',
								'Violencias de género' => 'Violencias de género',
								'Problemas o Transtornos mentales diangnosticados' => 'Problemas o Transtornos mentales diangnosticados',
								'Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
								'No refiere' => 'No refiere',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('riesgopsicosocial', [
								'label' => '¿Ha presentado alguna de las siguientes situaciones en el ultimo mes?',
								'class' => 'form-control',
								'type' => 'select',
								'options' => $optionConflictos,

								'style' => 'font-size: 12px',
							]);
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgopsicosocial1', array(
								'label' => 'riesgopsicosocial l',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $optionConflictos,
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							$optionEstudio = [
								'' => 'Elegir',
								'Institucion educativa' => 'Institución educativa',
								'Educacion ciclos' => 'Educacion ciclos',
								'Instituto tecnico' => 'Instituto técnico',
								'SENA' => 'SENA',
								'Universidad' => 'Universidad',
								'No estudia' => 'No estudia',
								'Pronico' => 'Proinco',
								'ICBF' => 'ICBF',
								'Descercion escolar ' => 'Se retiro de estudiar',
								'No informa' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('estudio', array(
								'label' => '¿Asiste a una institución educativa o de cuidado?',
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
								'No informa' => 'No informa',
								'No aplica' => 'No aplica',
								'SD' => 'Sin dato'
							];
							echo $this->Form->input('rendimientoescolar', array(
								'label' => '¿Como es el rendiminento escolar?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionRendimientoEstudio,
								'style' => 'font-size: 12px',
								'class' => 'form-control select-search'
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

							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalizacion Uno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'canalizaciondos',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('eduacionuno', array(
								'label' => 'eduacionuno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('educaciondos', array(
								'label' => 'eduacionuno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
					</div>
				</div>
			</div>

		</fieldset>
		<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
	</div>
</div>

<?php echo $this->Html->link(('List Adolescencias'), array('action' => 'index')); ?>
<?php echo $this->Html->link(('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
<?php echo $this->Html->link(('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
<?php echo $this->Html->link(('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
<?php echo $this->Html->link(('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>

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