<?php $this->layout = 'default_familia' ?>


<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validationSocioAmbiental'); // 'validation' es el nombre del archivo sin la extensión .js
?>

<body style="font-size: 14px;">


    <div>
        <?php echo $this->Form->create(); ?>
        <div class="form-group col-sm-12 center">




            <fieldset>

                <div class="col-12 text-center">
                    <h1 class="title-general-forms">Módulo Socioambiental
                    </h1>
                </div>

                <h2 style="color: #3366CC;  font-size:30px ; margin-top: 25px; ">Datos Básicos</h2>
                <hr style=" border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                    <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                        <div class="form-group row">

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('id');
                                echo $this->Form->input('responsable_id', array(
                                    'label' => 'Responsable diligenciamiento Encuesta',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select', 'disabled',
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
                                    'NA' => 'No aplica',
                                    '101S' => '101Sub',
                                    '102S' => '102Sub',
                                    '103S' => '103Sub',
                                    '104S' => '104Sub',
                                    '101' => '101',
                                    '102' => '102',
                                    '103' => '103',
                                    '104' => '104',
                                    '105' => '105',
                                    '106' => '106',
                                    '107' => '107',
                                    '108' => '108',
                                    '201' => '201',
                                    '202' => '202',
                                    '203' => '203',
                                    '204' => '204',
                                    '205' => '205',
                                    '206' => '206',
                                    '207' => '207',
                                    '208' => '208',
                                    '301' => '301',
                                    '302' => '302',
                                    '303' => '303',
                                    '304' => '304',
                                    '305' => '305',
                                    '306' => '306',
                                    '307' => '307',
                                    '308' => '308',
                                    '401' => '401',
                                    '402' => '402',
                                    '403' => '403',
                                    '404' => '404',
                                    '405' => '405',
                                    '406' => '406',
                                    '407' => '407',
                                    '408' => '408',
                                    '501' => '501',
                                    '502' => '502',
                                    '503' => '503',
                                    '504' => '504',
                                    '505' => '505',
                                    '506' => '506',
                                    '507' => '507',
                                    '508' => '508'

                                );

                                echo $this->Form->input('apartamento', array(
                                    'label' => 'Num. Apartamento',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'options' => $numapartamento,
                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('direccion', array(
                                    'label' => 'Dirección',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('apellidosfamilia', array(
                                    'label' => 'Apellidos de la familia',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $viviendaOptions = array(
                                    '' => 'Elegir',
                                    'Casa' => 'Casa',
                                    'Apartamento' => 'Apartamento',
                                    'Pieza' => 'Pieza',
                                    'Cuarto improvisado' => 'Cuarto improvisado',
                                    'Cuarto en inquilinato' => 'Cuarto en inquilinato',
                                    'Cuevas' => 'Cuevas',
                                    'En calle' => 'En calle',
                                );
                                echo $this->Form->input('vivienda', array(
                                    'label' => 'Tipo de vivienda:',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'options' => $viviendaOptions
                                ));
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $estratoOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4');
                                echo $this->Form->input('estrato', array(
                                    'label' => 'Estrato:',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'options' => $estratoOptions
                                ));
                                ?>
                                <p class="help-block">Se sugiere revisar recibo de agua o luz de la residencia</p>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $numhabitantesOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => 'Mas de 7');
                                echo $this->Form->input('numerohabitantes', array(
                                    'label' => '¿Cuántas personas habitan en la vivienda?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '',
                                    'options' => $numhabitantesOptions,
                                ));
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $numhogaresOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
                                echo $this->Form->input('numerohogares', array(
                                    'label' => 'No. Hogares en la residencia',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'options' => $numhogaresOptions
                                ));
                                ?>
                                <p class="help-block">Si todos comen de la misma olla se considera una sola
                                    familia/hogar</p>
                            </div>

                        </div>
                    </div>
                </div>


                <h2 style="color: #3366CC; font-size:30px ; margin-top: 20px; ">Habitabilidad</h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionMaterialPared = array(
                                    '' => 'Elegir',
                                    'Bloque, cemento, ladrillo' => 'Bloque, cemento, ladrillo',
                                    'Tierra, arena, barro' => 'Tierra, arena, barro',
                                    'Madera' => 'Madera',
                                    'Material plastico ' => 'Material plástico ',
                                    'Material Reciclado ' => 'Material reciclado',
                                    'Lata, Lamina metal ' => 'Lata, Lamina metal',

                                );
                                echo $this->Form->input('pared', array(
                                    'label' => '¿Cuál es el material predominante de las paredes?',
                                    'options' => $optionMaterialPared,
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'placeholder' => ""
                                ));
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">

                                <?php $optionParedes = array(
                                    '' => 'Elegir',
                                    'Buen estado' => 'Buen estado',
                                    'Descascaramiento, humedad' => 'Descascaramiento, humedad',
                                    'Estructura inestable' => 'Estructura inestable',
                                    'SD' => 'Sin dato'
                                );
                                echo $this->Form->input('estadoparedes', array(
                                    'label' => '¿El estado de las paredes es?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionParedes,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionPiso = array(
                                    '' => 'Elegir',
                                    'Cemento, gravilla' => 'Cemento, gravilla',
                                    'Ceramica' => 'Ceramica',
                                    'Piso flotante' => 'Piso flotante',
                                    'Tierra' => 'Tierra',
                                    'Madera burda, tabla' => 'Madera burda, tabla',
                                    'Baldosa, ladrillo' => 'baldosa, ladrillo',
                                    'Piso flotante' => 'Piso flotante',
                                    'Piso flotante' => 'Piso flotante',
                                    'SD' => 'Sin dato'
                                );
                                echo $this->Form->input('piso', array(
                                    'label' => '¿Cuál es el material predominante del piso de la vivienda?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionPiso,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionTecho = array(
                                    '' => 'Elegir',
                                    'Concreto' => 'Concreto',
                                    'Eternit' => 'Eternit',
                                    'Tejas de barro' => 'Tejas de barro',
                                    'Zinc' => 'Zinc',
                                    'Plastico' => 'Plástico',
                                    'Desecho' => 'Eternit',
                                    'Eternit' => 'Desechos (cartón, lata, tela, sacos, etc)',
                                    'SD' => 'Sin dato'

                                );
                                echo $this->Form->input('techo', array(
                                    'label' => '¿Cuál es el material predominante del techo?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionTecho,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionEstadoTecho = array(
                                    '' => 'Elegir',
                                    'Buen estado' => 'Buen estado',
                                    'Agrietamiento, goteras o fisuras' => 'Agrietamiento, goteras o fisuras',
                                    'SD' => 'Sin dato'
                                );
                                echo $this->Form->input('estadotecho', array(
                                    'label' => '¿Cuál es el estado en general del techo?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionEstadoTecho,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionDormitorio = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', 'SD' => 'Sin dato');
                                echo $this->Form->input('dormitorios', array(
                                    'label' => '¿Cuantos cuartos se utilizan para dormir?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionDormitorio,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px; margin-bottom: 30px;">
                                <?php $optionHacinamiento = array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No', 'SD' => 'Sin dato');
                                echo $this->Form->input('hacinamiento', array(
                                    'label' => '¿En algunos de los dormitorios de la vivienda duermen tres o mas personas?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionHacinamiento,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'hacinamiento'
                                ));
                                ?>
                            </div>

                        </div>
                    </div>
                </div>


                <h2 style="color: #3366CC; font-size:30px; margin-top: 20px; ">Servicios y Riesgos de la vivienda </h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $externalRiskOptions = [
                                    '' => 'Elegir',
                                    'No se identifica' => 'No se identifica',
                                    'Malos olores' => 'Malos olores',
                                    'Iluminacion inadecuada' => 'Iluminación inadecuada',
                                    'Ventilación inadecuada' => 'Ventilación inadecuada',
                                    'Porquerizas' => 'Porquerizas',
                                    'Galpones' => 'Galpones',
                                    'Terrenos baldíos' => 'Terrenos baldíos',
                                    'Ruido' => 'Ruido',
                                    'Rellenos sanitarios, botaderos' => 'Rellenos sanitarios/botaderos',
                                    'Excesivo trafico' => 'Excesivo trafico',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('riesgoexterno', [
                                    'label' => 'Identifique en el entorno si hay:',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $externalRiskOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                                <p class="help-block">Refiera el riesgo más evidente</p>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('otroriesgo', [
                                    'label' => 'Registre otro riesgo interno o externo si considera',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $yesNoOptions = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('actividad', [
                                    'label' => '¿Hay Actividad productiva en la vivienda?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $yesNoOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $accessOptions = [
                                    '' => 'Elegir',
                                    'No' => 'No hay dificultdad',
                                    'Transporte' => 'Transporte',
                                    'Espacios deportivos' => 'Espacios deportivos',
                                    'Servicios Educativos' => 'Servicios Educativos',
                                    'Servicios Salud' => 'Servicios Salud',
                                    'Ninguno' => 'Ninguno'
                                ];
                                echo $this->Form->input('acceso', [
                                    'label' => '¿En su sector es difícil acceder a?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $accessOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                                <p class="help-block"> Relacione el más importante
                                </p>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php

                                echo $this->Form->input('accesoDos', [
                                    'label' => 'Agregue otra asepecto de dificil acceso',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $accessOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                                <p class="help-block">Relacione el más importante
                                </p>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $transportOptions = [
                                    '' => 'Elegir',
                                    'Moto' => 'Moto',
                                    'Carro' => 'Carro',
                                    'Transporte publico' => 'Transporte publico',
                                    'Bicicleta' => 'Bicicleta',
                                    'Caminar' => 'Caminar'
                                ];
                                echo $this->Form->input('transporte', [
                                    'label' => '¿El Medio de transporte principal que utiliza su familia es?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $transportOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $accidentRiskOptions = [
                                    '' => 'Elegir',
                                    'Ninguno' => 'Ninguno',
                                    'Objetos cortantes ' => 'Objetos cortantes ',
                                    'Sustancias químicas_aseo a la vista' => 'Sustancias químicas_aseo a la vista',
                                    'Medicamentos a la vista' => 'Medicamentos a la vista',
                                    'Uso de Velas' => 'Uso de Velas',
                                    'Conexiones Electricas inadecuadas' => 'Conexiones Electricas inadecuadas',
                                    'Superficies resbaladizas' => 'Superficies resbaladizas',
                                    'Escaleras sin proteccion' => 'Escaleras sin protección',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('riesgo', [
                                    'label' => 'Identifique en el entorno si hay riesgo de accidente en la vivienda',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $accidentRiskOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('otroriesgohogar', [
                                    'label' => 'Registre otro riesgo interno o externo si considera',
                                    'class' => 'form-control',
                                    'style' => 'font-size: 12px'
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $waterSupplyOptions = [
                                    '' => 'Elegir',
                                    'Acueducto Empopasto' => 'Acueducto Empopasto',
                                    'Acueducto Comunitario' => 'Acueducto Comunitario',
                                    'agua envasada ' => 'agua envasada',
                                    'Carro tanque ' => 'Carro tanque',
                                    'Pozo sin bomba, aljibe, jagüey o barreno' => 'Pozo sin bomba, aljibe, jagüey o barreno',
                                    'Río, quebrada, manantial o nacimiento' => 'Río, quebrada, manantial o nacimiento',
                                    'Aguas lluvias' => 'Aguas lluvias',
                                ];
                                echo $this->Form->input('aguaservicio', [
                                    'label' => '¿Cuál es la principal fuente de abastecimiento de agua para consumo?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $waterSupplyOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $waterTreatmentOptions = [
                                    '' => 'Elegir',
                                    'Directamente del grifo' => 'Directamente del grifo',
                                    'Hirve' => 'Hierve',
                                    'Filta' => 'Filtra',
                                    'Ozonifica' => 'Ozonifica',
                                    'Desinfección con cloro' => 'Desinfección con cloro ',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('aguatratamiento', [
                                    'label' => '¿Realiza algún tratamiento al agua para su consumo?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $waterTreatmentOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $waterSupplyStatusOptions = [
                                    '' => 'Elegir',
                                    'Continuo' => 'Continuo',
                                    'Intermitente' => 'Intermitente',
                                    'Razonamientos prolongados' => 'Razonamientos prolongados',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('aguasiministro', [
                                    'label' => '¿El suministro de agua es?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $waterSupplyStatusOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $tankCleaningOptions = [
                                    '' => 'Elegir',
                                    'Sin tanque' => 'No tiene tanque',
                                    'Mensual' => 'Mensual',
                                    'Semestral' => 'Semestral',
                                    'No realiza lavado' => 'No realiza lavado',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('aguaalmacenamiento', [
                                    'label' => '¿Lavado del tanque de almacenamiento de agua?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $tankCleaningOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $excretaDisposalOptions = [
                                    '' => 'Elegir',
                                    'Inodoro conectado a alcantarillado' => 'Inodoro conectado a alcantarillado',
                                    'Campo abierto' => 'Campo abierto',
                                    'Basenilla, bolsas' => 'Basenilla, Bolsas',

                                ];
                                echo $this->Form->input('diposicionexcretas', [
                                    'label' => 'Disposición de excretas en la vivienda',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $excretaDisposalOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $domesticWaterOptions = [
                                    '' => 'Elegir',
                                    'Conexión alcantarillado' => 'Conexión alcantarillado',
                                    'Campo Abierto ' => 'Campo Abierto',

                                ];
                                echo $this->Form->input('aguaresiduales', [
                                    'label' => 'Aguas residuales domésticas',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $domesticWaterOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $garbageDisposalOptions = [
                                    '' => 'Elegir',
                                    'Recolección por Emas' => 'Recolección por Empresa de aseo',
                                    'Disposición a campo abierto' => 'Disposición a campo abierto'
                                ];
                                echo $this->Form->input('basura', [
                                    'label' => 'Disposición final de basura',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $garbageDisposalOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $recyclingOptions = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                    'ocasionalmente' => 'Ocasionalmente',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('reciclaje', [
                                    'label' => '¿Se realiza el proceso de separación de los residuos en la fuente?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $recyclingOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px; margin-bottom: 30px;">
                                <?php
                                $vectoresOption = [
                                    '' => 'Elegir',
                                    'No' => 'No',
                                    'Mosicos' => 'Moscos',
                                    'Zancudos' => 'Zancudos',
                                    'Pulgas' => 'Pulgas',
                                    'Piojos' => 'Piojos',
                                    'Ratones' => 'Ratones',
                                    'Cucarachas' => 'Cucarachas',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('vector', [
                                    'label' => 'Hay presencia vectores transmisores de enfermedades en la vivienda o en su entorno inmediato?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $vectoresOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>





                <h2 style="color: #3366CC; font-size:30px; margin-top: 20px; ">Mascotas o
                    animales de crianza en el hogar </h2>



                <div class="col-sm-12" style="margin-top: 20px; ">
                    <div id="status" class="switch-button">
                        <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
                        <label for="switch-label" class="switch-button__label"></label>
                    </div>


                </div>
                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div id="si" class="panel panel-default form-group col-md-12" style="font-size:15px; display: none;">

                        <div class="form-group row">

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $numMascotaOption = [
                                    'No aplica' => 'Elegir',
                                    '0' => '0',
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5 y mas',

                                ];
                                echo $this->Form->input('numeroGatos', [
                                    'label' => '¿Cuantos Gatos tiene?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $numMascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('numeroPerros', [
                                    'label' => '¿Cuantos Perros tiene?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $numMascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $cuidadoMascotaOptions = [
                                    'No aplica' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                    'SD' => 'Sin dato'
                                ];
                                echo $this->Form->input('desparasitamascotas', [
                                    'label' => '¿Se desparasita a perros o gatos?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'desparasitacion'
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('vacunamascotas', [
                                    'label' => '¿Se ha vacunado a perros o gatos en el ultimo año?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' =>  $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'vacunacion',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $mascotaOption = [
                                    'No aplica ' => 'Elegir',
                                    'No' => 'No',
                                    'Aves' => 'Aves',
                                    'Cerdos' => 'Cerdos',
                                    'Cuyes_conejos' => 'Cuyes/conejos',
                                    'Otro' => 'Otro'
                                ];
                                echo $this->Form->input('mascotas', [
                                    'label' => '¿Tienen animales de producción?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $mascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('otramascota', [
                                    'label' => 'Agregue animales de producción si requiere',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $mascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>


                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('cuidadomascotas', [
                                    'label' => '¿Las excretas de los animales de compañía se recogen y disponen adecuadamente? ',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100% ;margin-bottom: 30px;',
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>


            <button class="my-button" style="">
                Guardar<?php echo $this->Form->end(); ?>
            </button>




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
        //  $("#SociambientalUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");

    }

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