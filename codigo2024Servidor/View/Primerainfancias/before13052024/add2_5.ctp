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
</style>
<?php $this->layout = 'default_familia' ?>
<div>

    <div class="form-group col-sm-12">


        <?php echo $this->Form->create('Primerainfancia'); ?>


        <fieldset>


            <div class="col-12 text-center">
                <h1 class="title-general-forms">Modulo Primera Infancia
                    menores de 2 a 5 años
                </h1>


            </div>

            <h2 class="subtitle-general-forms ">Datos Personales</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">
            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">


                    <div class="form-group row">

                        <?php

                        $idAux = $_GET['primerainfancia'];
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
                                'RC' => 'Registro Civil',
                                'PPT' => 'Permiso Protección Temporal',
                                'Otro' => 'Otro documento de identificación',


                            );
                            echo $this->Form->input('tipodocumento', array(
                                'label' => 'Tipo de Documento:',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $TipoDeDocumentoOptions
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
                                'minYear' => date('Y') - 6,
                                'maxYear' => date('Y') - 2,
                                'style' => 'height:30px;  font-size: 15px ; ',
                                'id' => 'fechanac', // Agrega este identificador al campo de fecha de nacimiento
                                'empty' => true, // Establecer el campo como vacío
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <!-- Campo de edad calculada (se llenará automáticamente con JavaScript) -->
                            <?php echo $this->Form->input('edad', [
                                'label' => 'Edad en años',
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
                            ]);  ?>
                        </div>

                        <!-- Segundo campo de selección -->
                        <div class="form-group col-md-6" style="margin-top: 20px; display: none;" id="otraAseguradoraDiv">
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
                        <?php
                        $optionYesNo = [
                            '' => 'Elegir',
                            'Si' => 'Si',
                            'No' => 'No',
                            'SD' => 'Sin dato',
                        ];
                        ?>



                        <div class="form-group col-md-6">
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
                            <button type="button" id="ayudaButton" class="btn btn-success rounded-circle" style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 5px; margin-left: 15px;">
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
                        <div class="col-md-4">
                            <p class="help-block"> Encuestador: ¿Cuenta con elementos antropométricos para tomar datos
                                de peso, talla? </p>
                            <select id="status" name="status" required onChange="mostrar(this.value);" style="margin-left:20px ;font-size:12px;margin-top:auto;border:1px solid #e9ecef; height:30px;width: 200px;overflow: hidden;position:relative">

                                <option value="no">No cuenta</option>
                                <option value="si">Si cuenta</option>


                            </select>
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


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionAlimentacion = array(
                                '' => 'Elegir',

                                'Alimentacion nutritiva' => 'Alimentación balaceada(Frutas, Verduras, Proteina)',
                                'Alimentación no nutritiva' => 'Alimentación No balenceada(Empaquetados, Dulces, gaseosa, Harinas)',
                                'Alimentación mixta' => 'Alimentación frutas,verduras, empaquetados, bebidas azucaradas ',
                                'Alimentación de la canasta básica familiar' => 'Alimentación de la canasta básica familiar',
                            );
                            echo $this->Form->input('lactanciamaterna', array(
                                'label' => '¿La alimentación en El/La menor principalmente es: ?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $optionAlimentacion,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',

                            )); ?>
                        </div>
                        -+
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


                            <p class="help-block"> Registre alguna dificultad de desarollo adicional, de lo contrario
                                coloque NA</p>
                        </div>
                    </div>
                </div>
            </div>


            <h2 class="subtitle-general-forms">
                Condiciones de vulnerabilidad</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">


                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
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

                            echo $this->Form->input('estudio', array(
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


                    <div class="form-group row">

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionCanlizacion = [
                                'No aplica ' => 'Elegir',
                                'No' => 'No',
                                'Vacunación ' => 'Vacunación',
                                'Atención en salud del recién nacido ' => 'Atención en salud del recién nacido',
                                'Atención en salud de promoción y mantenimiento por médico o enfermera ' => 'Atención en salud de promoción y mantenimiento por médico o enfermera',
                                'Atención en salud bucal' => 'Atención en salud bucal',
                                'aplicación de sellantes' => 'aplicación de sellantes, fluor, barniz',
                                'Atención medicina general ' => 'Atención en salud por medicina general',
                                'Atención Urgencias ' => 'Atención en salud en un servicio de Urgencias',
                                'Asesoría en Lactancia Materna ' => 'Asesoría en Lactancia Materna',
                                'Activación de ruta por sospecha de violencias ' => 'Activación de ruta por sospecha de violencias',


                            ];

                            echo $this->Form->input('canalizacionuno', array(
                                'label' => 'Canalización',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'placeholder' => '',
                                'class' => ' select-search',
                                'options' => $optionCanlizacion,
                                'type' => 'select',
                                'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                'onChange' => 'canalizacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
                            )); ?>
                        </div>

                        <div id="Canalizacion" class="form-group row">
                            <div class=" form-group col-md-6">
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
                                $optionEducacion = [
                                    'No aplica ' => 'Elegir',
                                    'No' => 'No',
                                    'Educacion individual' => 'Educación para la salud individual',
                                    'Educacion familiar' => 'Educación para la salud familiar',
                                    'Educacion grupal' => 'Educación para la salud grupal',
                                ];
                                echo $this->Form->input('canalizaciontres', array(
                                    'label' => 'Canalización',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'placeholder' => '',
                                    'class' => 'form-control select-search',
                                    'options' => $optionCanlizacion,
                                    'type' => 'select',

                                )); ?>
                            </div>

                            <div class="form-group col-md-6">
                                <?php
                                echo $this->Form->input('educacionuno', array(
                                    'label' => 'Refiera el tipo de Educación a desarrollar',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'placeholder' => '',
                                    'options' => $optionEducacion,
                                    'type' => 'select',
                                )); ?>
                            </div>



                            <?php
                            echo $this->Form->input('fechaRegistro', array(

                                'hidden',
                            )); ?>


                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('canalizacion_id', array(
                                'label' => 'Enlace de canalizacion',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'class' => 'form-control select-search',
                                'placeholder' => '',
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









    <!--div class="actions">
    <?php echo __('Actions'); ?>



    <ul>

        <li>
            <?php echo $this->Html->link(__('List Primerainfancias'), array('action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>
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
    </script>