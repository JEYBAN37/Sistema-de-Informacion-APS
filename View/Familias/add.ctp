<?php $this->layout = 'default_familia';


// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('familia'); // 'validation' es el nombre del archivo sin la extensión .js



?>
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

                    <div class="form-group col-md-6" style="margin-top: 20px;">

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
                            $option = [
                                '' => 'Elegir',
                                '1.Electricidad' => 'Electricidad',
                                '2.Cilindro de Gas' => 'Cilindro de Gas',
                                '3.Gas domiciliario' => 'Gas domiciliario',
                                '4.Carbon, leña' => 'Carbon, leña',
                                '5.Gasolina' => 'Gasolina,Petroleo',
                                '7.Material_Desecho' => 'Material de Desecho',
                                '8.Otro' => 'Otro'

                            ];
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
                                '1.Nuclear biparental' => 'Nuclear',
                                '2.Nuclear monoparental' => 'Nuclear monoparental',
                                '7.Unipersonal' => 'Unipersonal',
                                '4.Extensa' => 'Extensa', 
                                'Mixta o ampliada' => 'Mixta o ampliada'
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

                            <button type="button" id="ayudaButton1" class="btn btn-success rounded-circle"
                                style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 2px; margin-left: 10px;">
                                ?
                            </button>

                            <div id="popover-content" class="popover-content">
                                <p> <strong>Nuclear:</strong> constituida por los progenitores y los hijos. <br>
                                    <strong>Nuclear monoparental: </strong>constituida por un solo progenitor y sus
                                    hijos. <br>
                                    <strong> Unipersonal:</strong> no tiene núcleo familiar y sólo consta de una
                                    persona. <br>
                                    <strong>Extensa:</strong> Compuesta por persona como Tios, Primos, abuelos.
                                </p>
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
                                '2.No' => 'No',
                                '1.Familia con niñas, niños y adolescentes' => 'Familia con niñas, niños y adolescentes',
                                '1.Gestante' => 'Mujer en embarazo',
                                '1.AdultosMayores' => 'Personas Adulto Mayores',
                                '1.Víctima conflicto' => 'Víctima del conflicto',
                                '1.Discapacidad' => 'Discapacidad',
                                '1.Personas con enferemedades cronicas' => 'Personas con enferemedades cronicas',
                                '1.Personas con enferemedades huerfanas/terminales' => 'Personas con enferemedades huerfanas/terminales',
                                '1.Personas con enferemedades tranmisibles' => 'Personas con enferemedades tranmisibles(TBC,Lepra,Varicela)',
                                'Indígena' => 'Indígena',
                                'Afrocolombiano' => 'Afrocolombiano',
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
                            <button type="button" id="ayudaButton" class="btn btn-success rounded-circle"
                                style="width: 30px; height: 30px; padding: 0; font-size: 18px; margin-top: 5px; margin-left: 15px;">
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
                                    Separación o divorcio de la pareja.
                                </p>
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
                                '2.No' => 'No refiere',
                                '1.Alteraciones mentales : Esquizofrenia, TAB, depresión.' => 'Alteraciones mentales : Esquizofrenia, TAB, depresión.',
                                '1.Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.' => 'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.',
                                '1.Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)' => 'Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)',
                                '1.Enfermedad renal ' => 'Enfermedad renal y/o cronica',
                                '1.Enfermedad respiratoria: Asma/EPOC' => 'Enfermedad respiratoria: Asma/EPOC',
                                '1.Diabetes' => 'Diabetes',
                                '1.Obesidad' => 'Obesidad',
                                '1.Enfermedades huérfanas' => 'Enfermedades huérfanas',
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
                                '1.Sedentarismo' => 'Sedentarismo',
                                '2.Actividad física' => 'Actividad física',
                                '1.Consumo de cigarrillo' => 'Consumo de cigarrillo',
                                '1.Consumo de Acohol' => 'Consumo de Acohol',
                                '1.Consumo de otras SPA' => 'Consumo de otras SPA',
                                '1.Inadecuadas Prácticas alimentarias y nutricionales' => 'Prácticas alimentarias y nutricionales (consumo sal, grasas, carbohidratos, azúcares refinados)'
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
                                '2.No' => 'No refiere',
                                '1.Conflictos conyugales' => 'Conflictos conyugales',
                                '1.Conflictos entre padres e hijos' => 'Conflictos entre padres e hijos',
                                '1.Conflictos entre hermanos' => 'Conflictos entre hermanos',
                                '1.Conflictos entre Familia' => 'Conflictos entre Familia',
                                '1.Violencia Intrafamiliar y maltrato' => 'Violencia Intrafamiliar y maltrato',
                                '1.Violencia Intrafamiliar y maltrato contra NNA' => 'Violencia Intrafamiliar y maltrato contra NNA',
                                '1.Violencias de género' => 'Violencias de género',
                                '1.Problemas o Transtornos mentales diangnosticados' => 'Problemas o Transtornos mentales diangnosticados',
                                '1.Consumo de alcohol o psicoactivos' => 'Consumo de alcohol o psicoactivos',
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
                                '4.No' => 'No refiere',
                                '1.Medicina indigena' => 'Medicina Tradicional/indigena',
                                '4.Homeopatía' => 'Homeopatía',
                                '4.Medicina tradicional china' => 'Medicina tradicional china',
                                '4.Acupuntura' => 'Acupuntura',
                                '4.Quiropraxia' => 'Quiropraxia',
                                '4.Otro' => 'Otro',
                                '4.SD' => 'Sin dato'
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
                                    'label' => '¿Se sienten satisfechos con la ayuda familiar cuando algun mimebro de la familia tiene algún problema o necesidad?',
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
                                    'label' => '¿Conversan entre ustedes los problemas que tienen en casa?',
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
                                    'label' => '¿Las decisiones importantes se toman juntos en famlia?',
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
                                    'label' => '¿Siente que su familia expresa afectos de amor, comprension, y respeto?',
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
                                    'label' => '¿Se procura compartir tiempo en familia? - El tiempo para estar juntos, los espacios en casa, salir a pasear',
                                    'class' => 'form-control sumar',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionApgar,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion5'

                                )); ?>
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

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php



                                echo $this->Form->input('apgarFuncionalidad', [
                                    'label' => 'Funcionalidad de la familia',
                                    'class' => 'form-control',
                                    'style' => 'height:30px; font-size: 15px; width:100%',
                                    'placeholder' => '',
                                    'readonly',
                                    'id' => 'result'

                                ]); ?>
                            </div>
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

                <h2 class="subtitle-general-forms ">Encuesta a cuidadores ZARIT</h2>

                <hr style=" border:0.1px solid rgba(0,0,0,.125);">

                <div class="col-sm-12" style="margin-top: 20px; ">
                    <div id="status" class="switch-button">
                        <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
                        <label for="switch-label" class="switch-button__label"></label>
                        <p class="help-block">El Objetivo de la Escala Zarit es medir la sobrecarga del cuidador
                            evaluando
                            dimensiones como calidad de vida, capacidad de autocuidado, red de apoyo
                            social y competencias para afrontar problemas conductuales y clínicos del paciente cuidad.
                            Las preguntas de la escala sin tipo Likert de 5 opciones:</p>
                    </div>


                </div>

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div id="si" class="panel panel-default form-group col-md-12"
                        style="font-size:15px; display: none;">
                        <div class="form-group row">

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $yesNoCuidador = [
                                    '' => 'Elegir',
                                    '1.Si' => 'Si',

                                ];
                                echo $this->Form->input('cuidadorpermanente', [
                                    'label' => '¿En la familia se identifica un cuidador principal de niños, niñas, persona con discapacidad, adulto mayor o enfermedad?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $yesNoCuidador,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionZarit = [
                                    'No aplica' =>  'Elegir',
                                    '1' => 'Nunca',
                                    '2' => 'Rara vez',
                                    '3' => 'Algunas veces',
                                    '4' => 'Bastantes veces',
                                    '5' => 'Casi siempre',
                                    '0' => 'No informa',
                                    '0' => 'Sin dato',

                                ];
                                echo $this->Form->input('1', array(
                                    'label' => '¿Piensa que su familiar solicita más ayuda de la que realmente necesita?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion1'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('2', array(
                                    'label' => '¿Piensa que debido al tiempo que dedica a su familiar ya no
                                    dispone de tiempo suficiente para usted?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion2'

                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('3', array(
                                    'label' => '¿Se siente agobiado por intentar compatibilizar el cuidado de su familiar
                                    con otras resposabilidades (trabajo, familia)?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion3'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('4', array(
                                    'label' => '¿Se siente vergüenza por la conducta de su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion4'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('5', array(
                                    'label' => '¿Se siente enfadado cuando está cerca de su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion5'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('6', array(
                                    'label' => '¿Cree que la situación actual afecta negativamente la relación que Ud
                                    tiene con otros miembros de su familia?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion6'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('7', array(
                                    'label' => '¿Tiene miedo por el futuro de su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion7'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('8', array(
                                    'label' => '¿Piensa que su familiar depende de usted?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion8'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('9', array(
                                    'label' => '¿Piensa que su salud ha empeorado debido a tener que cuidar a su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion9'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('10', array(
                                    'label' => '¿Se siente tenso cuanto está cerca de su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion10'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('11', array(
                                    'label' => '¿Piensa que no tiene tanta intimidad como le gustaria debido a tener
                                    que cuidar a su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion11'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('12', array(
                                    'label' => '¿Siente que su vida social se ha visto afectada negativamente por tener
                                    que cuidar a su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion12'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('13', array(
                                    'label' => '¿Se siente incómodo por distanciarse de sus amistades debido a tener
                                    que cuidar de su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion13'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('14', array(
                                    'label' => '¿Piensa que su familiar le considera a usted la única persona que le
                                    puede cuidar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion14'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('15', array(
                                    'label' => '¿Piensa que no tiene suficientes ingresos económicos para los gastos
                                    de cuidar a su familiar, además de sus otros gastos?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion15'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('16', array(
                                    'label' => '¿Piensa que no será capaz de cuidar a su familiar por mucho más tiempo?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion16'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('17', array(
                                    'label' => '¿Siente que ha perdido el control de su vida desde que comenzó la
                                    enfermedad de su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion17'
                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('18', array(
                                    'label' => '¿Desearía poder dejar el cuidado de su familiar a otra persona?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion18'
                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('19', array(
                                    'label' => '¿Se siente indeciso sobre qué hacer con su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion19'
                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('20', array(
                                    'label' => '¿Piensa que debería hacer más por su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion20'
                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('21', array(
                                    'label' => '¿Piensa que podría cuidar mejor a su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion21'

                                )); ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                echo $this->Form->input('22', array(
                                    'label' => 'Globalmente ¿Qué grado de “carga” experimenta por el hecho de cuidar a su familiar?',
                                    'class' => 'form-control sumar2',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'options' => $optionZarit,
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'id' => 'opcion22'
                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: -10px;">
                                <?php
                                echo $this->Form->input('calculozarit', array(
                                    'label' => 'Resultado zarit',
                                    'class' => 'form-control',
                                    'style' => 'height:30px; font-size: 15px; width:100%',
                                    'placeholder' => '',
                                    'id' => 'Zarit-input' // Cambiado el ID a 'resultado-input'
                                ));
                                ?>
                            </div>


                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionZaritResultado = [
                                    '' =>  'Elegir',
                                    '1.Ausencia de sobrecarga' => '1',
                                    '2.Sobrecarga ligera' => '2',
                                    '3.Sobrecarga intensa' => '3',
                                    '0' => 'No informa',
                                    '-1' => 'Sin dato',
                                ];
                                echo $this->Form->input('zaritFuncionalidad', [
                                    'label' => 'Sobrecarga del cuidador',
                                    'class' => 'form-control',
                                    //'options' => $optionZaritResultado,
                                    'style' => 'height:30px; font-size: 15px; width:100%',
                                    'placeholder' => '',
                                    'readonly',
                                    'id' => 'result2'
                                ]); ?>
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


$(document).ready(function() {
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
    });
});
</script>