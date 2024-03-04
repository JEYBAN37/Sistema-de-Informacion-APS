<?php $this->layout = 'default_familia' ?>
<?php
echo $this->Html->script('validationFamilia'); // 'validation' es el nombre del archivo sin la extensión .js
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


    .negrilla {
        font-size: small;
        font-weight: bold;
    }
</style>

<body style="font-size: 14px;">
    <?php echo $this->Form->create('Familia'); ?>
    <div class="form-group col-sm-12 ">
        <fieldset>

            <div class="col-12 text-center">
                <h1 class="title-general-forms ">Módulo Familia Hogar
                </h1>
            </div>

            <h2 class="subtitle-general-forms">Datos del Encuestado</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">


            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">


                    <div class="form-group row">
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('nombres', [
                                'label' => 'Nombres',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('apellidos', [
                                'label' => 'Apellidos',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

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
                            <?php echo $this->Form->input('numerodocumento', [
                                'label' => 'N° de documento',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);  ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $generoOption = [
                                ' ' => 'Elegir',
                                'Masculino' => 'Masculino',
                                'Femenino' => 'Femenino',
                                'No binanrio' => 'No binario',
                                'Prefiere no informar' => 'Prefiere no informar',

                            ];
                            echo $this->Form->input('genero', [
                                'label' => '¿Cúal es tu género?',
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


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $rolOption = [
                                ' ' => 'Elegir',
                                'Padre' => 'Padre',
                                'Madre' => 'Madre',
                                'Esposo_a' => 'Esposo/Esposa/Pareja',
                                'Hijo_a' => 'Hijo/Hija',
                                'Abuelo_a' => 'Abuelo/Abuela',
                                'Otro familiar' => 'Otro familiar'
                            ];
                            echo $this->Form->input('rol', [
                                'label' => 'Quién atiende la visita es',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $rolOption,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('celular', [
                                'label' => 'Número celular de contacto',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('correo', [
                                'label' => 'Correo electrónico',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>

                            <p class="help-block"> Agregar la estructura de correo electronico nombre@proveedor.com</p>

                        </div>

                    </div>

                </div>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-12" style="color: #3366CC;  font-size:30px ; margin-top: 25px; ">
                Vivienda</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">


            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">

                        <?php

                        $idAux = $_GET['hogar'];
                        echo $this->Form->input('sociambiental_id', array('value' => '' . $idAux, 'type' => 'hidden'));

                        ?>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
                                '' => 'Elegir', '1' => '1',
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',
                                '5' => '5',
                                '6' => '6'
                            ];
                            echo $this->Form->input('hogar', [
                                'label' => 'Número de hogar encuestado en la vivienda',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $viviendaOptions = [
                                '' => 'Elegir',
                                'Casa' => 'Toda la Casa',
                                'Apartamento' => 'En un Apartamento',
                                'Pieza' => 'En una Pieza',
                                'Cuarto improvisado' => 'En un Cuarto improvisado',
                                'Cuarto en inquilinato' => 'En Cuarto del inquilinato',
                                'Espacion improvisado' => 'En un Espacio improvisado',
                                'No aplica' => 'No Aplica',
                            ];
                            echo $this->Form->input('vivienda', [
                                'label' => '¿Su núcleo familiar dentro de la vivienda habita en: ?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $viviendaOptions,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
                                '' => 'Elegir',
                                'Propia pagando' => 'Propia pagando',
                                'Propia pagada' => 'Propia pagada',
                                'anticresis' => 'anticresis',
                                'Arriendo' => 'Arriendo',
                                'Subarriendo' => 'Subarriendo',
                                'Prestada' => 'Prestada sin costo'
                            ];
                            echo $this->Form->input('tenencia', [
                                'label' => '¿Tenencia de la Vivienda es?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $option,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
                                '' => 'Elegir',
                                'Permante' => 'Permanente',
                                'Permanecen fuera de Pasto' => 'Permanecen fuera de la ciudad',
                                'Sin Dato' => 'Sin Dato'
                            ];
                            echo $this->Form->input('permanenciaresidencia', [
                                'label' => '¿La permanencia de las personas en el hogar es?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $option,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
                                '' => 'Elegir', 'Menos de un 1 mes' => 'Menos de un 1mes',
                                'Entre 2 meses y 1 anio ' => 'Entre 2 meses y 1 año',
                                'Entre 1 anio y 2 anio ' => 'Entre 1 año y 2 año',
                                'Mas de 2 anio ' => 'Mas de 2 años', 'Sin Dato' => 'Sin Dato'
                            ];
                            echo $this->Form->input('tiemporesidencia', [
                                'label' => '¿Hace cuanto tiempo vive en barrio/sector?',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = ['' => 'Elegir', 'Electricidad' => 'Electricidad', 'Cilindro de Gas' => 'Cilindro de Gas', 'Gas domiciliario' => 'Gas domiciliario', 'Gas domiciliario' => 'Gas domiciliario', 'Carbon, leña' => 'Carbon, leña', 'Gasolina' => 'Gasolina'];
                            echo $this->Form->input('combustible', [
                                'label' => '¿Cuál fuente principal de energía o combustible que usa para cocinar?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;margin-bottom: 30px;">
                            <?php
                            $option = ['' => 'Elegir', 'No aplica' => 'No aplica', 'Electricidad' => 'Electricidad', 'Cilindro de Gas' => 'Cilindro de Gas', 'Gas domiciliario' => 'Gas domiciliario', 'Gas domiciliario' => 'Gas domiciliario', 'Carbon, leña' => 'Carbon, leña', 'Gasolina' => 'Gasolina'];
                            echo $this->Form->input('otrocombustible', [
                                'label' => 'Registre otra fuente de combustible si requiere',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]); ?>
                        </div>
                    </div>

                </div>
            </div>

            <h2 class="subtitle-general-forms">Composición
                Familiar</h2>
            <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
                                '' => 'Elegir',
                                'Unipersonal' => 'Unipersonal',
                                'Nuclear' => 'Nuclear',
                                'Nuclear monoparental' => 'Nuclear monoparental',
                                'Extensa' => 'Extensa', 'Mixta o ampliada' => 'Mixta o ampliada'
                            ];
                            echo $this->Form->input('tipofamilia', [
                                'label' => '¿Cómo está compuesta la familia?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>

                            <!-- Botón de ayuda -->

                            <button type="button" id="ayudaButton1" class="btn btn-success rounded-circle" style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 2px; margin-left: 10px;">
                                ?
                            </button>

                            <div id="popover-content" class="popover-content">
                                <p> <strong>Nuclear:</strong> constituida por los progenitores y los hijos. <br>
                                    <strong>Nuclear monoparental: </strong>constituida por un solo progenitor y sus hijos. <br>
                                    <strong> Unipersonal:</strong> no tiene núcleo familiar y sólo consta de una persona. <br>
                                    <strong>Extensa:</strong> Compuesta por persona como Tios, Primos, abuelos.</p>
                            </div>


                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
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
                                '10' => 'Más de 10'
                            ];
                            echo $this->Form->input('numeropersonas', [
                                'label' => '¿De cuántas personas está compuesto el hogar?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionEtnia = [
                                '' => 'Elegir',
                                'No' => 'No',
                                'Indígena' => 'Indígena',
                                'Afrocolombiano' => 'Afrocolombiano',
                                'Víctima conflicto' => 'Víctima del conflicto',
                                'Discapacidad' => 'Discapacidad',
                                'Migrante irregular' => 'Migrante irregular',
                                'Migrante regular' => 'Migrante regular',
                                'Habitante de calle' => 'Habitante de calle',
                                'Otro' => 'Otro',
                                'No informa' => 'No informa',
                                'Sin Dato' => 'Sin Dato'
                            ];
                            echo $this->Form->input('poblacionvulnerable', [
                                'label' => '¿Hay personas dentro del hogar que pertenecen a población vulnerable?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionEtnia,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                'onChange' => 'vulnerable(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript

                            ]);
                            ?>
                        </div>

                        <div id="yes" class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

                            echo $this->Form->input('poblacionvulnerable1', [
                                'label' => 'Registre otra población con la cual se identifique si es necesario',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $optionEtnia,
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
                                '' => 'Elegir',
                                'Formación' => 'Formación',
                                'Expansión' => 'Expansión',
                                'Consolidación' => 'Consolidación',
                                'Apertura' => 'Apertura',
                                'Nido vacío' => 'Nido vacío',
                                'Disolución' => 'Disolución',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('cursovidafamilia', [
                                'label' => 'Curso de vida en el que se encuentra el hogar',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                            <button type="button" id="ayudaButton" class="btn btn-success rounded-circle" style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 5px; margin-left: 15px;">
                                ?
                            </button>

                            <div id="popover" class="popover-content">
                                <p><strong>Formación:</strong>
                                    Inicio de una nueva unidad familiar y formación de la identidad de pareja.
                                    <br>
                                    <strong>Expansión:</strong>
                                    Añadir miembros adicionales a la familia, generalmente hijos.
                                    <br>
                                    <strong>Consolidación:</strong>
                                    Enfocarse en criar y educar a los hijos.
                                    <br>
                                    <strong>Apertura:</strong>
                                    <br>
                                    Los hijos crecen y comienzan a independizarse. <br>
                                    <strong> Nido vacío:</strong>
                                    <br>
                                    Los hijos abandonan el hogar familiar para vivir de forma independiente.
                                    <br>
                                    <strong> Disolución:</strong>
                                    Separación o divorcio de la pareja.</p>
                            </div>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;margin-bottom: 30px;">
                            <?php
                            $option = ['' => 'Elegir', 'Si' => 'Si', 'No' => 'No', 'SD' => 'No sabe', 'No sabe' => 'Sin Dato'];
                            echo $this->Form->input('lgtbi', [
                                'label' => '¿En el hogar hay integrantes que pertenezcan a la comunidad LGBTI?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>



            <h2 class="subtitle-general-forms">Riesgos de salud
            </h2>
            <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionEnferemedadAntecedentes = [
                                '' => 'Elegir',
                                'No' => 'No refiere',
                                'Alteraciones mentales : Esquizofrenia, TAB, depresión.' => 'Alteraciones mentales : Esquizofrenia, TAB, depresión.',
                                'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.' => 'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.',
                                'Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)' => 'Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)',
                                'Enfermedad renal ' => 'Enfermedad renal y/o cronica',
                                'Enfermedad respiratoria: Asma/EPOC' => 'Enfermedad respiratoria: Asma/EPOC',
                                'Diabetes' => 'Diabetes',
                                'Obesidad' => 'Obesidad',
                                'Enfermedades huérfanas' => 'Enfermedades huérfanas',
                                'SD' => 'Sin dato',


                            ];

                            echo $this->Form->input('antecedenteenfermedad', [
                                'label' => 'Antecedentes familiares de enfermedad',
                                'type' => 'select',
                                'options' => $optionEnferemedadAntecedentes,
                                'class' => 'form-control select-search',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                'onChange' => 'cronica(this.value);', // Ag
                            ]);
                            ?>
                        </div>



                        <div id="Cronica" class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('antecedenteenfermedad1', [
                                'label' => 'Agregue otro Antecedente enfermedad si requiere',
                                'type' => 'select',
                                'options' => $optionEnferemedadAntecedentes,
                                'class' => 'form-control select-search',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('antecedenteenfermedad2', [
                                'label' => 'Agregue otro Antecedentes enfermedad si requiere',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionEnferemedadAntecedentes,
                                'class' => 'form-control select-search',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $option = [
                                '' => 'Elegir',
                                'Sedentarismo' => 'Sedentarismo',
                                'Actividad física' => 'Actividad física',
                                'Consumo de cigarrillo' => 'Consumo de cigarrillo',
                                'Consumo de Acohol' => 'Consumo de Acohol',
                                'Consumo de otras SPA' => 'Consumo de otras SPA',
                                'Inadecuadas Prácticas alimentarias y nutricionales' => 'Prácticas alimentarias y nutricionales (consumo sal, grasas, carbohidratos, azúcares refinados)'
                            ];

                            echo $this->Form->input('estilodevidapredominante', [
                                'label' => 'Identifique el Estilo de Vida predominante en el hogar',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $option,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionTranmisibles = [
                                '' => 'Elegir',
                                'No' => 'No',
                                'SD' => 'Sin dato',
                                'Sintomatico respiratorio' => 'Tos crónica ',
                                'Sudoracion nocturna' => 'sudoración Nocturna ',
                                'Brotes en la piel' => 'Brotes en la piel/salpullido',
                                'Lesiones en piel' => 'lesiones en la piel sin dolor',
                            ];

                            echo $this->Form->input('enfermedadtransmible', [
                                'label' => 'En los últimos 15 dias algún miembro del hogar a presentado',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionTranmisibles,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                'onChange' => 'sintomatico(this.value);', // Ag
                            ]);
                            ?>
                        </div>
                        <div id="Sintomatico" class="form-group col-md-6" style="margin-top: 20px;margin-bottom: 30px;">
                            <p class="help-block">Agregue otra situación si se requiere</p>

                            <?php
                            echo $this->Form->input('enfermedadtransmible1', [
                                'label' => 'En los últimos 15 dias algún miembro del hogar a presentado',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionTranmisibles,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>

                        </div>


                    </div>

                </div>
            </div>

            <h2 class="subtitle-general-forms">Dinamica
                Familiar</h2>
            <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group row">
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionConflictos = [
                                '' => 'Elegir',
                                'No' => 'No refiere',
                                'Conflictos conyugales' => 'Conflictos conyugales',
                                'Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
                                'Conflictos entre hermanos' => 'Conflictos entre hermanos',
                                'Conflictos entre Familia' => 'Conflictos entre Familia',
                                'Violencia Intrafamiliar y maltrato' => 'Violencia Intrafamiliar y maltrato',
                                'Violencia Intrafamiliar y maltrato contra NNA' => 'Violencia Intrafamiliar y maltrato contra NNA',
                                'Violencias de género' => 'Violencias de género',
                                'Problemas o Transtornos mentales diangnosticados' => 'Problemas o Transtornos mentales diangnosticados',
                                'Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
                                'SD' => 'Sin dato'
                            ];

                            echo $this->Form->input('riesgopsicosocial', [
                                'label' => '¿En su hogar se ha presentado alguna de las siguientes situaciones en el ultimo mes?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionConflictos,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                'onChange' => 'psicosocial(this.value);', // Ag
                            ]);
                            ?>
                        </div>



                        <div id="Psicosocial" class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('riesgopsicosocial1', [
                                'label' => '¿En su hogar se ha presentado alguna de las siguientes situaciones en el ultimo mes?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionConflictos,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                            <p class="help-block">Agregue otra situación si se requiere</p>

                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('riesgopsicosocial2', [
                                'label' => '¿En su hogar se ha presentado alguna de las siguientes situaciones en el ultimo mes?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionConflictos,

                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                            <p class="help-block">Agregue otra situación si se requiere</p>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionAlternativa = [
                                '' => 'Elegir',
                                'No' => 'No refiere',
                                'Medicina indigena' => 'Medicina Tradicional/indigena',
                                'Homeopatía' => 'Homeopatía',
                                'Medicina tradicional china' => 'Medicina tradicional china',
                                'Acupuntura' => 'Acupuntura',
                                'Quiropraxia' => 'Quiropraxia',
                                'Otro' => 'Otro',
                                'SD' => 'Sin dato'
                            ];
                            echo $this->Form->input('saludalternativa', [
                                'label' => '¿Hacen uso de otras opciones para el cuidado de su salud?',
                                'class' => 'form-control',
                                'type' => 'select',
                                'options' => $optionAlternativa,
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                            ]);
                            ?>
                        </div>




                    </div>
                </div>

                <h2 class="subtitle-general-forms">Apoyo Social
                </h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionProgramaSocial = [
                                    '' => 'Elegir',
                                    'No aplica' => 'No aplica',
                                    'No' => 'No recibe',
                                    'Adulto mayor' => 'Bono - Adulto mayor',
                                    'Bien Nacer' => 'Bien nacer',
                                    'Familias en acción' => 'Familias en acción',
                                    'Banco de leche humana' => 'Banco de leche humana',
                                    'Otro' => 'Otro',
                                    'No sabe' => 'No sabe',
                                    'SD' => 'Sin dato'

                                ];

                                echo $this->Form->input('programasocial', [
                                    'label' => '¿ Alguien de su hogar recibe algún subsidio o aporte de programas sociales o de salud?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionProgramaSocial,

                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                    'onChange' => 'programaSocial(this.value);', // Ag
                                ]);
                                ?>
                            </div>




                            <div id="Social" class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('programasocial1', [
                                    'label' => 'Agregue otro subsidio o aporte de programas sociales si requiere',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionProgramaSocial,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;margin-bottom: 30px;">
                                <?php
                                echo $this->Form->input('programasocial2', [
                                    'label' => 'Agregue otro subsidio o aporte de programas sociales si requiere',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionProgramaSocial,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>



                        </div>



                    </div>
                </div>

                <h2 class="subtitle-general-forms">Aseo e Higiene
                </h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionYesNo = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                    'SD' => 'Sin dato'
                                ];

                                echo $this->Form->input('higiene', [
                                    'label' => '¿Se observan adecuadas condiciones de higiene en el hogar?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionYesNo,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('higienealimentos', [
                                    'label' => '¿Disponen de Almacenamiento y conservación adecuada de alimentos?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionYesNo,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('aseococina', [
                                    'label' => '¿Procuran mantener limpia de la cocina?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionYesNo,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>



                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionLavadoManos = [
                                    '' => 'Elegir',
                                    'Con agua y jabon' => 'Si,Con agua y jabon',
                                    'Solo agua' => 'Si, Solo Agua',
                                    'No' => 'No hay hábito de lavado de manos'
                                ];

                                echo $this->Form->input('lavadomanos', [
                                    'label' => '¿Es frecuente el hábito del lavado de manos durante el día?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionLavadoManos,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionelementosHigiene = [
                                    '' => 'Elegir',
                                    'Cepillo de dientes' => 'Cepillo de dientes',
                                    'Máquina de afeitar' => 'Máquina de afeitar',
                                    'Toallas' => 'Toallas',
                                    'No' => 'No se comparte',
                                    'No refiere' => 'No refiere',
                                    'SD' => 'Sin dato'
                                ];

                                echo $this->Form->input('elementoshigiene', [
                                    'label' => '¿Se comparte algun implemento de higiene personal?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionelementosHigiene,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('otroelementohigiene', [
                                    'label' => 'Agregue otros implementos de higiene que se comparta si requiere',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionCepilladoDientes = [
                                    '' => 'Elegir',
                                    'Cepillo y crema dental' => 'Si, con cepillo y crema dental',
                                    'Ademas Ceda dental' => 'Si, Ademas el uso de Ceda dental',
                                    'No' => 'No hay hábito de cepillado de dientes',
                                    'No refiere' => 'No refiere',
                                    'SD' => 'Sin dato'
                                ];

                                echo $this->Form->input('cepilladodientes', [
                                    'label' => '¿Existe el hábito de cepillarse los dientes?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionCepilladoDientes,

                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                        </div>
        </fieldset>

        <button class="my-button" style="">
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
    $(document).ready(function() {
        $('#ayudaButton1').on('click', function() {
            $('#popover-content').toggle();
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#ayudaButton1, #popover-content').length) {
                $('#popover-content').hide();
            }
        });

    });

    $(document).ready(function() {
        $('#ayudaButton').on('click', function() {
            $('#popover').toggle();
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#ayudaButton, #popover').length) {
                $('#popover').hide();
            }
        });

    });
</script>