<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validation'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<div>
    <div class="form-group col-sm-12">
        <?php echo $this->Form->create('Juventudadulto'); ?>
        <fieldset>


            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Juventud Adultos
                </h1>

            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">
                        <?php echo $this->Form->input('id'); ?>

                        <?php
                        echo $this->Form->input('familia_id', [
                            'label' => 'ID_Familia/N° Hogar/Nombres',
                            'class' => 'form-control',
                            'placeholder' => '',
                            'style' => 'font-size: 12px',

                        ]);
                        ?>


                        <!--div class="form-group col-md-6">
							<?php
                            echo $this->Form->input('persona_id', [
                                'label' => 'Docuemento/Nombre/Edad',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'class' => 'form-control select-search',
                                'style' => 'font-size: 12px',
                                'disabled' => 'disabled'

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

                    </div>
                </div>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-6  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
                Valoración de Salud</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <?php
                            $optionYesNo = [

                                'Si' => 'Si',
                                'No' => 'No',
                                'No informa' => 'No informa',
                                'No aplica' => 'No aplica',
                                'SD' => 'Sin dato',

                            ];
                            $optionDiscapacidad = array(

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

                        <div class="form-group col-md-6">
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
                                'label' => 'Indice de masa corporal',
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

                                'No' => 'No',
                                'Hipertension' => 'Hipertensión',
                                'Diabetes' => 'Diabetes',
                                'Hipertiroidismo' => 'Hipertiroidismo',
                                'Hiportiroidismo' => 'Hiportiroidismo',
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
                                'style' => 'font-size: 12px',
                                'id' => 'condicioncronica',

                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
                                'No ' </p>
                            <?php
                            echo $this->Form->input('condicioncronica1', array(
                                'label' => '¿Presenta alguna de las siguientes enfermedades crónicas?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $optionCronica,
                                'style' => 'font-size: 12px',
                                'id' => 'condicioncronica1',


                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optionVacuna = array(

                                'No' => 'No',
                                'Toxoide tetanico' => 'Toxoide tétanico',
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
                                'style' => 'font-size: 12px',
                                'id' => 'esquemavacunacion'

                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('desparasitacion', array(
                                'label' => '¿Se ha desparasitado en los últimos seis meses?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'options' => $optionYesNo,
                                'placeholder' => ''
                            )); ?> </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optionValoracionMedica = array(

                                'Consulta Morbilidad' => 'Consulta de Morbilidad',
                                'Consulta Cronicos' => 'Consulta de Crónicos',
                                'Consulta PYP' => 'Consulta Promoción y prevención',
                                'Consulta Urgencias' => 'Consulta Urgencias',
                                'No asistido' => 'No asisitido',
                                'No informa' => 'No informa',
                                'SD' => 'Sin Dato',

                            );
                            echo $this->Form->input('valoracionmedica', array(
                                'label' => '¿Ha asistido a Valoración Médica en el ultimo año?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'placeholder' => '',
                                'options' => $optionValoracionMedica,
                            )); ?>
                        </div>

                        <!--div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('valoracionrias', array(
                                'label' => 'valoracionrias',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'placeholder' => ''
                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('valoracionrias1', array(
                                'label' => 'valoracionrias',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'placeholder' => ''
                            )); ?>
                        </div-->



                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('saludoral', array(
                                'label' => '¿Asistió a consulta de odontología en el último año?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'options' => $optionYesNo,
                                'placeholder' => '',
                                'id' => 'saludoral',
                            )); ?>
                        </div>
                    </div>
                </div>
            </div>





            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Salud
                Sexual y Reproductiva</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

                    <div class="form-group row">
                        <div class="form-group col-md-6">

                            <?php
                            $optionVidaSexual = [

                                'No' => 'No inicio vida sexual',
                                'Consentido' => 'Si, Consentido',
                                'No Consentido' => 'Si, No consentido',
                                'No informa' => 'No informa',
                                'SD' => 'Sin dato',

                            ];
                            echo $this->Form->input('iniciovidasexual', array(
                                'label' => '¿Usted ha iniciado su vida sexual?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'options' => $optionVidaSexual,
                                'placeholder' => ''
                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optionAnticonceptivos = [

                                'No' => 'No',
                                'Sin pareja' => 'No tiene pareja en el momento',
                                'Si control' => 'Si, con supervisión',
                                'Si No control' => 'Si, sin supervisión',
                                'Responsabilidad Pareja' => 'Deja la responsabilidad a la pareja',
                                'No informa' => 'No informa',
                                'No aplica' => 'No aplica',
                                'SD' => 'Sin dato',

                            ];
                            echo $this->Form->input('metodosanticonceptivos', array(
                                'label' => '¿Utiliza algún método de planificación familiar?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'options' => $optionAnticonceptivos,
                                'placeholder' => '',
                                'id' => 'metodosanticonceptivos'

                            )); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('infeccionestransmisionsexual', array(
                                'label' => '¿Le han diganosticado alguna Infección de transmición Sexual?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'options' => $optionYesNo,
                                'placeholder' => '',
                                'id' => 'infeccionestransmisionsexual'

                            )); ?>
                        </div>


                    </div>
                </div>
            </div>



            <div id="si" class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

                    <h2 class="titulo-general-pwa-govco col-md-12  "
                        style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Salud de la Mujer</h2>
                    <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <?php
                            $optionCitologia = [

                                'No' => 'No',
                                'Citologia VPH' => 'Si, Citología VPH',
                                'Citologia convencional' => 'Si, Citología convencional',
                                'No informa' => 'No informa',
                                'No aplica' => 'No aplica',
                                'SD' => 'Sin dato',


                            ];
                            echo $this->Form->input('tomacitologia', array(
                                'label' => '¿Se ha realizado el examen citología de acuedo a esquema?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionCitologia,
                                'placeholder' => '',
                                'id' => 'tomacitologia'
                            )); ?>
                            <p class="help-block"> Esquema: Citología convencional esquema 1-3-3 edad 25 a 29 años y
                                Citología VPH
                                1-5-5 edad de 30 a 65 años, Esquemas ante resultado negativo</p>
                        </div>

                        <div class="form-group col-md-6">

                            <?php
                            $optionYesNo1 = [

                                'Si' => 'Si',
                                'No' => 'No',
                                'No informa' => 'No informa',
                                'No aplica' => 'No aplica',
                                'SD' => 'Sin dato',

                            ];

                            echo $this->Form->input('mamografia', array(
                                'label' => 'Le han realizado Mamografía en 5 últimos años (Mujer de 50 y más años)',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionYesNo1,
                                'placeholder' => ''
                            )); ?>
                        </div>


                        <h2 class="titulo-general-pwa-govco col-md-12  "
                            style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Antecedentes
                            ginecológicos/obsetétricos</h2>


                        <div class="form-group col-md-6">
                            <?php

                            echo $this->Form->input('antecedenteginecologico', array(
                                'label' => '¿Le han realizado alguna cirugia ginecológica?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionYesNo1,
                                'placeholder' => ''
                            )); ?>
                            <p class="help-block"> Procedimientos en el sistema reproductivo, ovarios, útero, trompas de
                                Falopio, cuello uterino </p>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $optionGinecologico = [

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
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionGinecologico,
                                'placeholder' => ''
                            )); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
                                'No ' </p>
                            <?php
                            echo $this->Form->input('ancedenteginecologico1', array(
                                'label' => '¿Ha presentado alguna de las siguientes situaciones en el embarazo? ',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionGinecologico,
                                'placeholder' => ''
                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status">¿Mujer en embarazo?</label>

                            <select id="status" name="status" required onChange="gestacion(this.value);" required
                                class="form-control" style="font-size: 12px;">
                                <option value="not">Elegir</option>
                                <option value="not">No</option>
                                <option value="yes">Si</option>
                            </select>
                            <p class="help-block"> Registre infomración de mujer en gestación o puerperio</p>
                        </div>

                    </div>

                    <div id="yes" class="form-group row">
                        <h2 class="titulo-general-pwa-govco col-md-12  "
                            style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Gestación</h2>

                        <div class="form-group col-md-6">
                            <?php
                            $optionControlPrenatal = [

                                'No inscrita' => 'No inscrita en control de embarazo',
                                'Asistente CPN' => 'Si, Control al dia',
                                'Inasistente CPN' => 'Si, inasistente a ultimo control',
                                'Puerperio' => 'En etapa de puerperio',
                                'No informa' => 'No sabe/No informa',
                                'SD' => 'Sin dato',
                            ];
                            echo $this->Form->input('controlprenatal', array(
                                'label' => '¿Esta inscrita en control prenatal?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionControlPrenatal,
                                'placeholder' => '',

                            )); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $optionRiesgoEmbarazo = [

                                'Bajo' => 'Bajo',
                                'Alto' => 'Alto',
                                'No informa' => 'No informa',
                                'SD' => 'Sin dato',


                            ];
                            echo $this->Form->input('riesgoembarazo', array(
                                'label' => '¿El riesgo del embarazo es?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionRiesgoEmbarazo,
                                'placeholder' => '',


                            )); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $optionAlarmaEmbarazo = [


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
                                'label' => '¿En el momento presenta alguno de los siguientes signo o síntoma de alarma?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionAlarmaEmbarazo,
                                'placeholder' => '',
                                'id' => 'riesgoembarazo'

                            )); ?>

                        </div>

                        <div class="form-group col-md-6">

                            <?php
                            $optionCursoVida = [

                                'Juventud' => 'Juventud',
                                'Adultez' => 'adultez',
                            ];

                            echo $this->Form->input('cursovida', array(
                                'label' => '¿El curso de vida de la gestante es?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'type' => 'select',
                                'options' => $optionCursoVida,
                                'placeholder' => ''
                            )); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optionAlternativa = [

                                'Medicina indigena' => 'Medicina Tradicional/indigena',
                                'Homeopatía' => 'Homeopatía',
                                'Medicina tradicional china' => 'Medicina tradicional china',
                                'Acupuntura' => 'Acupuntura',
                                'Quiropraxia' => 'Quiropraxia',
                                'Otro' => 'Otro',
                                'No refiere' => 'No refiere',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('saludalternativa', [
                                'label' => '¿Hacen uso de otras opciones para el cuidado de su salud durante su embarazo?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionAlternativa,
                                'style' => 'font-size: 12px',
                            ]);
                            ?>
                        </div>


                    </div>
                </div>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Riesgo
                Psicosocial</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

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
                                '9998.Estudia' => 'Estudia',
                                '9998.Oficios Hogar y cuidado' => 'Oficios del hogar y/o de cuidado',
                                '5169.Trabajo formal' => 'Trabajo formal',
                                '9510.Trabajo informal' => 'Trabajo informal',
                                '9622.Independiente' => 'Independiente/microempresario',
                                'Sin ocupación' => 'Sin ocupación',
                                '9999.No informa' => 'No informa',
                                '9999.No aplica' => 'No aplica',
                                '9999.SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('ocupacion', array(
                                'label' => '¿Cúal es la ocupación actual?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $optionOcupacion,
                                'style' => 'height:30px; font-size: 15px; width:100%',
                                'id' => 'ocupacion'
                            ));
                            ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px; display: none;" id="otraOcupacionDiv">
                            <?php
                            echo $this->Form->input('ocupacion', [
                                'label' => 'Descripción específica de ocupación',
                                'class' => 'form-control',
                                'style' => 'height:30px; font-size: 15px; width:100%',
                                'id' => 'otraOcupacion'
                            ]);
                            ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionConsumospa = [

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
                                'placeholder' => '',
                                'id' => 'consumospa'
                            )); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('consumospa1', array(
                                'label' => 'Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos ',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'options' => $optionConsumospa,
                                'placeholder' => '',
                                'id' => 'consumospa1'
                            )); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $optionConflictos = [

                                'Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
                                'Conflictos entre hermanos' => 'Conflictos entre hermanos',
                                'Conflictos entre Familia' => 'Conflictos entre Familia',
                                'Violencias de género' => 'Violencias de género',
                                'Problemas o Transtornos mentales diangnosticados' => 'Problemas o Transtornos mentales diangnosticados',
                                'Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
                                'No' => 'No refiere',
                                'SD' => 'Sin dato'
                            ];

                            echo $this->Form->input('riesgopsicosocial', [
                                'label' => '¿Ha presentado alguna de las siguientes situaciones en el ultimo mes?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionConflictos,

                                'style' => 'font-size: 12px',
                                'id' => 'riesgopsicosocial'
                            ]);
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="help-block">Selecione otra respuesta si requiere, de lo contrario elija la opción
                                'No refiere' </p>
                            <?php
                            echo $this->Form->input('riesgopsicosocial1', array(
                                'label' => '¿Ha presentado alguna de las siguientes situaciones en el ultimo mes?',
                                'class' => 'form-control',
                                'style' => 'font-size: 12px',
                                'options' => $optionConflictos,
                                'placeholder' => '',
                                'id' => 'riesgopsicosocial1'
                            )); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            $optionEstudio = [

                                'Institucion educativa' => 'Institución educativa',
                                'Educacion por ciclos' => 'Educación por ciclos',
                                'Instituto tecnico' => 'Instituto técnico',
                                'Centro Dia' => 'Centro Día',
                                'Centro Vida' => 'Centro Vida',
                                'SENA' => 'SENA',
                                'Universidad' => 'Universidad',
                                'No' => 'No estudia',
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
                        <!--div class="form-group col-md-6">
                                <?php
                                $optionRendimientoEstudio = [

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
                                ?></div-->
                        <div class="form-group col-md-6">
                            <?php
                            $optionTiposViolencia = [

                                'No' => 'No se identifica',
                                'Sospecha Violencia Fisica' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
                                'Sospecha Violencia Emocional' => 'Persona retarida, timida o agresiva',
                                'sospecha Violencia Sexual' => 'Tocamientos de personas, relaciones sexuales sin consentimiento ',
                                'Sospecha Abondono_Negligencia' => 'Falta de atencion a necesidades básicas(alimentación, salud, educación)',
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

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
                APGAR Familiar</h2>
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
                                'style' => 'height:40px;  font-size: 15px ; width:100%',
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
                                'style' => 'height:40px;  font-size: 15px ; width:100%',
                                'options' => $optionApgar,
                                'placeholder' => '',
                                'type' => 'select',

                            )); ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionCanlizacion = [
                                'No aplica ' => 'Elegir',
                                'No' => 'No',
                                'Tramite de autorización de servicios de salud' => 'Tramite de autorización de servicios de salud',
                                'Vacunacion' => 'Vacunación ',
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
                                    'label' => 'Canalización',
                                    'class' => 'form-control',
                                    'style' => 'font-size: 12px',
                                    'placeholder' => '',
                                    'class' => 'form-control select-search',
                                    'options' => $optionCanlizacion,
                                    'type' => 'select',
                                    'style' => 'font-size: 12px'
                                ));
                                ?>
                            </div>

                            <div class="form-group col-md-6">
                                <?php
                                $optionEducacion = [
                                    'Educacion individual' => 'Educación para la salud individual',
                                    'Educacion familiar' => 'Educación para la salud familiar',
                                    'Educacion grupal' => 'Educación para la salud grupal',
                                ];
                                echo $this->Form->input('canalizaciontres', array(
                                    'label' => 'Canalización',
                                    'class' => 'form-control',
                                    'style' => 'font-size: 12px',
                                    'placeholder' => '',
                                    'class' => 'form-control select-search',
                                    'options' => $optionCanlizacion,
                                    'type' => 'select',
                                    'style' => 'font-size: 12px',
                                )); ?>
                            </div>

                            <div class="form-group col-md-6">
                                <?php
                                echo $this->Form->input('educacion', array(
                                    'label' => 'Educación',
                                    'class' => 'form-control',
                                    'style' => 'font-size: 12px',
                                    'placeholder' => '',
                                    'options' => $optionEducacion,
                                    'type' => 'select',
                                    'style' => 'font-size: 12px',
                                )); ?>
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
                                    'value' => 'Elegir',
                                    'id' => 'opcionesSeleccionadas',
                                    'readonly',
                                    'onclick' => 'mostrarModal()'

                                )); ?>

                            </div>

                            <!-- Fondo oscuro y cuadro modal -->
                            <div id="overlay" class="overlay">
                                <div class="form-group col-md-12" style="margin-top: 5px;">
                                    <div id="modal" class="modal">
                                        <div class="modal-header-native" style="text-align: center;">
                                            <button type="button" class="close"
                                                onclick="cerrarModal('overlay','modal')">
                                                <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                                            </button>
                                        </div>
                                        <div id="miContenedor" class="form-group col-md-12" style="margin-top: 20px;">

                                        </div>
                                        <div class="d-flex justify-content-center vh-100">
                                            <button class=" my-button" type="button"
                                                onclick="cerrarModal('overlay','modal')">Cerrar</button>
                                        </div>


                                    </div>
                                </div>
                            </div>



                            <!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->






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
                </div>

        </fieldset>
        <?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
    </div>

</div>




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




    $(document).ready(function() {
        $('.select-search').select2();
        agregarOpcionSeleccion();

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


    });








    function agregarOpcionSeleccion() {
        function agregarOpcionSeleccion() {


            $("#JuventudadultoCanalizacionId").prepend(
                "<option value='' selected='selected'>Seleccione</option>");



        }
    }


    function gestacion(id) {
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
    $(function() {
        $('#ayudaButton1').popover();
    });
    $(function() {
        $('#ayudaButton2').popover();
    });
    $(function() {
        $('#ayudaButton3').popover();
    });

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

        'Gestantes	Influenza Gestacional 	1 dosis a partir de la Semana 14 de Gestación ',
        'Gestantes	TdaP (Tetanos, Difteria, Tosferina Acelular)	Dosis Única a partir de semana 26 de gestación',
        'Adultos de 60 ños y mas 	Vacuna de influenza estacional	una dosis cada año ',

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

    document.getElementById('ocupacion').addEventListener('change', function() {
        var otraOcupacionDiv = document.getElementById('otraOcupacionDiv');
        var otraOcupacion = document.getElementById('otraOcupacion');

        if (this.value === '9510.Trabajo informal') {
            otraOcupacionDiv.style.display = 'block';
            otraOcupacion.disabled = false;
        } else {
            otraOcupacionDiv.style.display = 'none';
            otraOcupacion.disabled = true;
            otraOcupacion.value = '';
        }
    });

    document.getElementById('otraOcupacion').addEventListener('input', function() {
        var ocupacion = document.getElementById('ocupacion');
        if (ocupacion.value === '9510.Trabajo informal') {
            ocupacion.value = ocupacion.value.split('.')[0] + '.' + this.value;
        }
    });
</script>