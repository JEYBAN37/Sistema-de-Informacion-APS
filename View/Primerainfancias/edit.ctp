<?php $this->layout = 'default_familia' ?>
<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation2'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<style>
.popover-content {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 999;
    /* Valor alto para colocar el popover encima de otros elementos */
    font-size: 12px;
    /* Ajusta el tamaño de la fuente según tus preferencias */
    text-align: justify;


}

/* Estilo para el fondo oscuro cuando se muestra el modal */
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

/* Estilo para el cuadro modal */
.modal {
    overflow: auto;




    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    /* Ajusta el ancho del modal según tus necesidades */

    /* Ancho máximo para pantallas más grandes */

    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    z-index: 1;
}

.button-one {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
    -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    text-align: left;
    height: 35px;
    font-size: 15px;
    width: 100%;
    margin-top: 10px;
    font-weight: 700;
}

/* Estilo para el texto y checkboxes dentro del modal */
.modal p {
    text-align: left;
}

.modal label {
    display: block;
    margin-bottom: 10px;
}

input[type="checkbox"] {
    margin-right: 10px;
}
</style>

<body style="font-size: 14px;">

    <?php echo $this->Form->create('Primerainfancia'); ?>
    <div class="form-group col-sm-12">

        <fieldset>
            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Primera Infancia
                    menor de 5 años
                </h1>

            </div>
            <h2 class="subtitle-general-forms ">Datos Personales</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">


                    <div class="form-group row">


                        <?php echo $this->Form->input('id'); ?>

                        <?php
						echo $this->Form->input('familia_id', [
							'label' => 'ID_Familia/N° Hogar/Nombres',
							'class' => 'form-control',
							'placeholder' => '',
							'style' => 'font-size: 12px',
							'type' => 'hidden'
						]);
						?>



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
								'minYear' => date('Y') - 6,
								'maxYear' => date('Y'),
								'style' => 'height:30px;  font-size: 15px ;',
								'id' => 'fechanac', // Agrega este identificador al campo de fecha de nacimiento
								'empty' => true, // Establecer el campo como vacío
							]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <!-- Campo de edad calculada (se llenará automáticamente con JavaScript) -->
                            <?php echo $this->Form->input('edad', [
								'label' => 'Edad en meses',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
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
							]); ?>
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

                        <div class="form-group col-md-6">
                            <?php
							$regimenOption = [
								' ' => 'Elegir',
								'Subsidiado' => 'Subsidiado',
								'Contributivo' => 'Contributivo',
								'Regimen especial' => 'Regimen especial',
								'Regimen execpción' => 'Regimen excepción',
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
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('telefono', [
								'label' => 'Número de teléfono acudiente',
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
								'SD' => 'Sin dato',

							];
							echo $this->Form->input('prematuro', array(
								'label' => '¿El/la menor nació prematuro?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							));
							?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionDiscapacidad = array(
								'' => 'Elegir',
								'No' => 'No presenta',
								'Fisica' => 'Fisica',
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
                                style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 5px; margin-left: 15px;">
                                ?
                            </button>

                            <div id="popover" class="popover-content">
                                <p><strong>Auditivas:</strong>
                                    Dificultades o limitaciones en la capacidad de escuchar o procesar el sonido.
                                    <br>
                                    <strong>Visuales:</strong>
                                    Limitaciones o dificultades en la visión.
                                    <br>
                                    <strong>Sordoceguera:</strong>
                                    Enfocarse en criar y educar a los hijos.
                                    <br>
                                    <strong>Cognitivas o intelectuales:</strong>
                                    Condición en la que una persona tiene tanto discapacidad auditiva como
                                    discapacidad visual.<br>
                                    <strong>Mentales:</strong>
                                    Limitaciones en el funcionamiento del cerebro que afectan el
                                    procesamiento, comprensión, aprendizaje y memoria de la información.
                                </p>
                            </div>

                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('anomaliacongenita', array(
								'label' => 'Presenta una anomalía congénita',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

							echo $this->Form->input('bajopeso', array(
								'label' => 'Antecedente de bajo peso al nacer',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							));
							?>
                        </div>



                        <div class="col-sm-12" style="margin-top: 20px; ">
                            <p class="help-block"> Encuestador: ¿Cuenta con elementos antropométricos para tomar
                                datos </p>
                            <div id="status" class="switch-button">
                                <input type="checkbox" name="switch-button" id="switch-label"
                                    class="switch-button__checkbox">
                                <label for="switch-label" class="switch-button__label"></label>
                            </div>
                        </div>

                        <div id="si" class="form-group row" style="display: none;">

                            <div class="form-group col-md-6" style="margin-top: 5px;">
                                <?php
								echo $this->Form->input('peso', array(
									'label' => 'Registre su Peso en Kg.',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => ''
								));
								?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
								echo $this->Form->input('talla', array(
									'label' => 'Registre su talla en cm',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => ''
								));
								?>
                            </div>



                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('perimetrocefalico', array(
									'label' => 'Registre su perímetro cefálico (cm)',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => ''
								)); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('perimetrobraquial', array(
									'label' => 'Registre su perímetro braquial (cm)',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => ''
								)); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('perimetrocintura', array(
									'label' => 'Registre perímetro cintura (cm)',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => ''
								)); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('perimetrocadera', array(
									'label' => 'Registre perímetro cadera (cm)',
									'class' => 'form-control',
									'style' => 'height:30px;  font-size: 15px ; width:100%',
									'placeholder' => ''
								)); ?>
                            </div>

                        </div>



                        <div class="form-group col-md-6">
                            <?php
							$optionLactancia = array(
								'' => 'Elegir',
								'Lactancia materna exclusiva' => 'Solo Leche materna',
								'Lactancia materna y Alimentacion complementaria' => 'Lactancia materna Alimentación complementaria',
								'Leche de formula y Alimentacion complementaria' => 'Leche de formula Alimentación complementaria',
								'Leche materna y leche de formula' => 'Leche materna y leche de formula',
								'Leche materna y otros liquidos' => 'Leche materna y otros liquidos(jugos, agua, aromatica, colada)',
								'Solo Leche de formula' => 'Solo Leche de formula',
								'leche de formula y alimentos solidos' => 'leche de formula y alimentos solidos',
								'Leche materna y canasta básica familiar' => 'Leche materna y alimentos solidos(huevo, arroz, pollo, carne)',
								'Alimentación de la canasta básica familiar' => 'Alimentación de la canasta básica familiar',
								'Alimentacion nutritiva' => 'Alimentación balaceada(Frutas, Verduras, Proteina)',
								'Alimentación no nutritiva' => 'Alimentación No balenceada(Empaquedados, Dulces, gaseosa, Harinas)',

								'Alimentación mixta' => 'Alimentación frutas,verduras, empaquertados, bebidas azucaradas ',
							);



							echo $this->Form->input('lactanciamaterna', array(
								'label' => '¿El alimento en El/La menor es: ?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionLactancia,
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                            <p class="help-block"> NOTA: Tener encuenta la edad del menor</p>

                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionCronica = array(
								'' => 'Elegir',
								'No' => 'No presenta',
								'Neurológica' => 'Neurológica',
								'Epilepsia' => 'Epilepsia',
								'Cardiovascular' => 'Cardiovascular',
								'Respiratoria' => 'Respiratoria',
								'Metabolica' => 'Metabólica',
								'Enfermedad huérfana' => 'Enfermedad huérfana',
								'Endocrinologica' => 'Endocrinológica',
								'Gastrointestinal' => 'Gastrointestinal',
								'Endocrinologica' => 'Endocrinológica',
								'Renal, otras enferemdades crónicas' => 'renal otras enferemdades crónicas',
								'SD' => 'Sin dato',


							);

							echo $this->Form->input('condicioncronica', array(
								'label' => 'Presenta alguna de las siguientes enfermedades crónicas',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionCronica,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'condicioncronica',

							)); ?>
                        </div>


                    </div>

                </div>
            </div>

            <h2 class="subtitle-general-forms">Atención en Salud</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                    <div class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionVacuna = array(
								'' => 'Elegir',
								'Incompleto' => 'Esquema incompleto a su edad',
								'Completo' => 'Esquema al día a su edad',
								'No informa' => 'Desconoce la información/no presenta carnet de vacuanas',
								'SD' => 'Sin dato',

							);
							echo $this->Form->input('esquemavacunacion', array(
								'label' => '¿Le han aplicado las vacunas correspondientes a la edad de menor? ',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionVacuna,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'esquemavacunacion'

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('desparasitacion', array(
								'label' => 'Desparasitado en los últimos seis meses',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'desparasitacion',


							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
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
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'crecimientoydesarrollo'



							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionMalnutricion = array(
								'' => 'Elegir',
								'No informa' => 'Desconoce la información/no presenta carnet de CYD',
								'Peso adecuado para la talla' => ' Peso adecuado para la talla',
								'Talla adecuada para la edad' => ' Talla adecuada para la edad',
								'Desnutricion Aguda' => 'Bajo peso para la edad',
								'Desnutricion Cronica' => 'Baja talla para la edad',
								'Desnutricion Aguda' => 'Bajo peso para la edad',
								'Desnutricion Cronica' => 'Baja talla para la edad',
								'Sobrepeso' => 'Sobrepeso',
								'Obesidad' => 'Obesidad',
								'SD' => 'Sin dato'
							);

							echo $this->Form->input('desnutricion', array(
								'label' => '¿Le han informado el estado de nutirción del menor?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionMalnutricion,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'desnutricion',

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('higieneoral', array(
								'label' => '¿Asistió a consulta de odontología en los últimos seis meses?',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'id' => 'saludoral',

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('desarrolloinfantil', array(
								'label' => 'Informa sobre alguna dificultad del desarrollo',
								'class' => 'form-control',
								'placeholder' => '',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                            <p class="help-block"> NOTA:Registre alguna situación adicional que la persona refiera
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <h2 class="subtitle-general-forms">
                Condiciones de vulnerabilidad</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">


            <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('era', array(
								'label' => 'En el momento presenta algún signo de Enfermedad respiratoria Aguda',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                            <p class="help-block"> NOTA:Tener en cuenta signos y síntomas de alarma AIEPI
                            </p>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('eda', array(
								'label' => 'En el momento presenta algún signo de Enfermedad diárreica Aguda',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'options' => $optionYesNo,
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                            <p class="help-block"> NOTA:Tener en cuenta signos y síntomas de alarma AIEPI
                            </p>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
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
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionEstudio = [
								'' => 'Elegir',
								'Jardín Infantil' => 'Jardín Infantil',
								'Hogar Comuitario' => 'Hogar Comunitario',
								'CDI' => 'CDI',
								'Institucion educativa publica' => 'Escuela publica',
								'Institucion educativa privada' => 'Escuela privada',
								'No estudia' => 'No estudia',
								'Pronico' => 'Proinco',
								'Descercion escolar ' => 'Se retiro de estudiar',
								'No' => 'Mantiene en casa',
								'No refiere' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('educacion', array(
								'label' => '¿El menor asiste a una institución educativa o de cuidado?',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionEstudio,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('padresconsumo', array(
								'label' => 'Hijo de padres (especialmente la madre) con consumo de sustancias psicoactivas',
								'class' => 'form-control',
								'placeholder' => '',
								'options' => $optionYesNo,
								'type' => 'select',
								'style' => 'height:30px;  font-size: 15px ; width:100%',

							)); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionTiposViolencia = [
								'' => 'Elegir',
								'No' => 'No se identifica',
								'Violencia Fisica' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
								'Violencia Emocional' => 'Menor retraido, timido o agresivo',
								'Violencia Sexual' => 'Tocamientos de personas adultas, relaciones sexuales ',
								'Abondono_Negligencia' => 'Falta de atención a necesidades básicas(alimentación, salud, educación)',
								'No informa' => 'No informa',
								'SD' => 'Sin dato'
							];

							echo $this->Form->input('sospechamaltrato', array(
								'label' => 'Indicios de menor víctima de vulneración o violencia',
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



            <h2 class="subtitle-general-forms">Plan de
                Atención integral</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">
            <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php

						echo $this->Form->input('observacioncanalizacion', array(
							'label' => 'Obseracion de la atención',
							'style' => 'height:30px;  font-size: 15px ; width:100%',
							'placeholder' => '',

							'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
							'onChange' => 'canalizacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
						)); ?>
                    </div>


                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
						$optionCanlizacion = [
							'No aplica ' => 'Elegir',
							'No' => 'No',
							'Tramite de autorización de servicios de salud' => 'Tramite de autorización de servicios de salud',
							'Vacunacion' => 'Vacunación',
							'Atención en salud del recién nacido ' => 'Atención en salud del recién nacido',
							'Atención en salud de promoción y mantenimiento por médico o enfermera ' => 'Atención en salud de promoción y mantenimiento por médico o enfermera',
							'Odontología P Y M' => 'Odontología P Y M',
							'Odontología general' => 'Odontología general',
							'Odontología Urgencias' => 'Odontología Urgencias',
							'Atención medicina general ' => 'Atención en salud por medicina general',
							'Atención Urgencias ' => 'Atención en salud en un servicio de Urgencias',							
							'Asesoría en Lactancia Materna ' => 'Asesoría en Lactancia Materna',
							'Activación de ruta por sospecha de violencias ' => 'Activación de ruta por sospecha de violencias',


						];

						echo $this->Form->input('canalizacionuno', array(
							'label' => 'Canalización 1',
							'style' => 'height:30px; font-size: 15px; width:100%',
							'placeholder' => '',
							'class' => 'select-search',
							'options' => $optionCanlizacion,
							'type' => 'select',
							'id' => 'canalizacionuno', // Cambiado de 'status' a 'canalizacionuno'
							'onChange' => 'capturarValorSeleccionado();' // Llama a la función 'capturarValorSeleccionado()' cuando cambia el valor
						));
						?>
                    </div>


                    <!-- Fondo oscuro y cuadro modal -->
                    <div id="canalizationSpecific" class="overlay">
                        <div class="form-group col-md-12" style="margin-top: 5px;">
                            <div id="modalvacunancion" class="modal">
                                <div class="d-flex  justify-content-end vh-100">
                                    <button type="button" class="close"
                                        onclick="cerrarModal('modalvacunancion','canalizationSpecific')">
                                        <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                                    </button>
                                </div>
                                <ul id="dataTuning" class="list-group">
                                </ul>
                                <div class="d-flex justify-content-center vh-100 ">
                                    <button class=" my-button" type="button"
                                        onclick="cerrarModal('modalvacunancion','canalizationSpecific')">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Canalizacion">
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'Canalización 2',
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
								'label' => 'Canalización 3',
								'class' => 'form-control',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => 'form-control select-search',
								'options' => $optionCanlizacion,
								'type' => 'select',

							)); ?>

                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
							$optionEstadoCanalizacion = [
								'No aplica' => 'Elegir',
								'No aplica ' => 'No aplica',
								'En proceso ' => 'En proceso',
								'Pendiente' => 'Pendiente',
								'Efectiva' => 'Efectiva',
								'No Efectiva' => 'No efectiva',

							];

							echo $this->Form->input('estadocanalizacion', array(
								'label' => 'Estado canalización',
								'style' => 'height:30px;  font-size: 15px ; width:100%',
								'placeholder' => '',
								'class' => ' select-search',
								'options' => $optionEstadoCanalizacion,
								'type' => 'select',
								'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
								'onChange' => 'canalizacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
							)); ?>
                        </div>
                    </div>

                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
						echo $this->Form->input('remisionEspecifica', array(
							'label' => 'Canalizaciones Especificas',
							'type' => 'textarea', // Cambiado a 'textarea'
							'class' => 'form-control',
							'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
							'id' => 'remisionEspecifica',
							'readonly' => true // Utilizando '=> true' en lugar de solo 'readonly'
						));
						?>


                    </div>


                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
						echo $this->Form->input('educacionuno', array(
							'label' => 'Refiera el tipo de actividad desarrollada',
							'class' => 'form-control',
							'style' => 'height:30px;  font-size: 15px ; width:100%',
							'id' => 'opcionesSeleccionadas', 'readonly', 'onclick' => 'mostrarModal()'

						)); ?>

                    </div>

                    <!-- Fondo oscuro y cuadro modal -->
                    <div id="overlay" class="overlay">
                        <div class="form-group col-md-12" style="margin-top: 5px;">
                            <div id="modal" class="modal">
                                <div class="modal-header-native" style="text-align: center;">
                                    <button type="button" class="close" onclick="cerrarModal('overlay','modal')">
                                        <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                                    </button>
                                </div>
                                <div id="miContenedor" class="form-group col-md-12" style="margin-top: 20px;">

                                </div>
                                <div class="d-flex justify-content-center vh-100">
                                    <button class=" my-button" type="button"
                                        onclick="cerrarModal('overlay','modal')">Cerrar</button>
                                </div>

                                <button class="my-button" type="button" onclick="cerrarModal()">Cerrar</button>
                            </div>
                        </div>
                    </div>



                    <!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->



                    <?php
					echo $this->Form->input('fechaRegistro', array(

						'hidden',
					)); ?>
                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
						echo $this->Form->input('canalizacion_id', array(
							'label' => 'Enlace de canalizacion',
							'style' => 'height:30px;  font-size: 15px ; width:100%',
							'class' => 'form-control select-search',
							'type' => 'select',

						)); ?>
                    </div>
                </div>
            </div>

        </fieldset>
        <button class="my-button">
            Guardar<?php echo $this->Form->end(); ?>
        </button>

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
// Función para mostrar el Box
function mostrarModal() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("modal").style.display = "block";
}


// Función para cerrar el modal
function cerrarModal(divaleatory, divSecond) {
    document.getElementById(divaleatory).style.display = "none";
    document.getElementById(divSecond).style.display = "none ";
}

// Función para actualizar el campo de entrada con las opciones seleccionadas
function actualizarInput() {
    var checkboxes = document.querySelectorAll('#modal input[type="checkbox"]');
    var opcionesSeleccionadas = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value)
        .join(', ');

    document.getElementById("opcionesSeleccionadas").value = opcionesSeleccionadas;
    document.getElementById("ponerOpcion").value = opcionesSeleccionadas;
}
$(document).ready(function() {
    $('.select-search').select2();
    agregarOpcionSeleccion();

    $('#ayudaButton').on('click', function() {
        $('#popover').toggle();
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest('#ayudaButton, #popover').length) {
            $('#popover').hide();
        }
    });
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


    $("#PrimerainfanciaCanalizacionId").prepend(
        "<option value='' selected='selected'>Seleccione</option>");
}

$(function() {
    $('#ayudaButton').popover();
});

$("#switch-label").change(function() {
    var switchValue = this.checked ? "si" : "no";
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
}

function generarCheckboxes(opciones, id, result) {
    let resultHTML = ''

    opciones.forEach(opcion => {
        resultHTML +=
            `<li class="list-group-item d-flex  align-items-center h-100" style="margin-bottom: 0em;">
            <input type="checkbox" value="${opcion}" onclick="actualizarInput('${id}', '${result}')" class="d-flex justify-content-center">
            <label>${opcion}</label>
        </li>`;
    });

    return resultHTML;
}


const opciones = opcionesActividades = [
    'Elegir',
    'No',
    'Educación para la salud individual',
    'Educación para la salud familiar',
    'Educación para la salud grupal',
    'Valoración medíca',
    'Valoración odontológica',
    'Valoración Nutricional',
    'Valoración Piscologica',
    'Valoración Integral',
    'Remision a urgencias',
];
// Generar los checkboxes y agregarlos al contenedor
document.getElementById('miContenedor').innerHTML = generarCheckboxes(opciones, 'modal', 'opcionesSeleccionadas');



const dataGuardada = ''
const opcionesVacunancion = opcionesActividades = [
    'RN Antituberculosa - BCG Única',
    'RN Hepatitis B recién nacido',
    '2 meses PENTAVALENTE Primera',
    '2 meses Vacuna inactivada de polio - VIP Primera',
    '2 meses Vacuna oral de rotavirus Primera',
    '2 meses Vacuna contra el neumococo Primera',
    '4 meses PENTAVALENTE Segunda',
    '5 meses Vacuna inactivada de polio - VIP Segunda',
    '6 meses Vacuna oral de rotavirus Segunda',
    '7 meses Vacuna contra el neumococo Segunda',
    '6 meses PENTAVALENTE Tercera',
    '7 meses Vacuna inactivada de polio - VIP Tercera',
    '8 meses Vacuna de influenza estacional Primera',
    '9 meses Vacuna contra COVID 19 Primera',
    '7 meses Vacuna de influenza estacional Segunda',
    '12 meses Sarampión Rubeola Paperas(SRP) Unica',
    '13 meses Antihepatitis A Unica',
    '14 meses Neumococo Refuerzo',
    '15 meses Varicela Unica',
    '18 meses PENTAVALENTE(1 R) 1 Refuerzo',
    '19 meses dosis Difteria - tosferina - tétanos(DPT) 1 Refuerzo',
    '20 meses Haemophilus influenzae tipo b 1 Refuerzo',
    '21 meses Hepatitis B 1 Refuerzo',
    '22 meses Vacuna inactivada de polio - VIP 1 Refuerzo',
    '23 meses Fiebre amarilla(FA) Unica',
    '24 meses Sarampión Rubeola Paperas(SRP) Refuerzo',
];

// Función para actualizar el campo de entrada con las opciones selecciona
function actualizarInput(elementId, result) {
    var checkboxes = document.querySelectorAll('#' + elementId + ' input[type="checkbox"]');
    var opcionesSeleccionadas = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value)
        .join(', ');

    document.getElementById(result).value = opcionesSeleccionadas;
}
//Optienen el valor de los campos del checkbox solo llama
//el array que quieres mostrar introduce el id de la etiqueta que hiciste
//para vizualizar la checkbox y el result es en la variable que guardara

function generarCheckboxes(opciones, id, result) {
    let resultHTML = ''

    opciones.forEach(opcion => {
        resultHTML +=
            `<li class="list-group-item d-flex  align-items-center h-100" style="margin-bottom: 0em;">
            <input type="checkbox" value="${opcion}" onclick="actualizarInput('${id}', '${result}')" class="d-flex justify-content-center">
            <label>${opcion}</label>
        </li>`;
    });

    return resultHTML;
}

//Captura el valor igresar los casos encesarion en el switch
function capturarValorSeleccionado() {
    var valorSeleccionado = document.getElementById("canalizacionuno").value; //Obtener el valor de la canalizacion
    var otraAseguradoraDiv = document.getElementById('overlay');


    switch (valorSeleccionado) {
        case "Vacunacion":
            console.log(valorSeleccionado)
            document.getElementById('dataTuning').innerHTML = generarCheckboxes(opcionesActividades, 'modalvacunancion',
                'remisionEspecifica');
            document.getElementById("canalizationSpecific").style.display = "block";
            document.getElementById("modalvacunancion").style.display = "block";
            break;


    }
}
</script>