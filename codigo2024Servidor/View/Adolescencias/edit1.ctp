<?php $this->layout = 'default_familia' ?>
<?php
// Enlaza el archivo JavaScript desde la carpeta webroot/js
echo $this->Html->script('validationAdolescencia'); // 'validation' es el nombre del archivo sin la extensión .js
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
        max-width: 400px;
        /* Ancho máximo para pantallas más grandes */
        padding: 20px;
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

    <?php echo $this->Form->create('Adolescencia'); ?>
    <div class="form-group col-sm-12 center">

        <fieldset>
            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Adolescencia de 17
                    a 17
                    años
                </h1>

            </div>



            <h2 class="subtitle-general-forms">Plan de
                Atención integral</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">
            <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">


                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
                        echo $this->Form->input('id');

                        echo $this->Form->input('observacioncanalizacion', array(
                            'label' => 'Observación de la atención',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',
                            'placeholder' => '',
                            'type' => 'textarea',

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
                            'Vacunacion ' => 'Vacunación ',
                            'Atencion de PyM Medico' => 'Atención en salud de PyM por médico',
                            'Atencion de PyM Enfermera' => 'Atención en salud de PyM por enfermeria',
                            'Atencion medicina general' => ' Atención en salud por medicina general',
                            'Atencion  Urgencias ' => 'Atención en salud en un servicio de Urgencias ',
                           'Odontología P Y M' => 'Odontología P Y M',
							'Odontología general' => 'Odontología general',
							'Odontología Urgencias' => 'Odontología Urgencias',
                            'Activacion de ruta por sospecha de violencias' => 'Activación de ruta por sospecha de violencias',
                            'Prueba rapida treponemica' => 'Prueba rápida treponémica',
                            'Prueba rapida para VIH' => 'Prueba rápida para VIH',
                            'Asesoria pre y post test VIH' => 'Asesoría pre y post test VIH',
                            'Prueba de embarazo' => 'Prueba de embarazo',
                            'Asesoría en anticoncepcion' => 'Asesoría en anticoncepción por médico o enfermera',
                            'Tamizaje de riesgo cardiovascular' => 'Tamizaje de riesgo cardiovascular',
                            'Asesoria en anticoncepcion' => 'Asesoría en anticoncepción',


                        ];

                        echo $this->Form->input('canalizacionuno', array(
                            'label' => 'Canalización 1',

                            'style' => 'height:30px;  font-size: 15px ; width:100%',
                            'placeholder' => '',
                            'class' => ' select-search',
                            'options' => $optionCanlizacion,
                            'type' => 'select',
                            'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                            'onChange' => 'canalizacion(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript
                        )); ?>
                    </div>


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
                            'type' => 'select'


                        )); ?>
                    </div>

                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
                        $optionEstadoCanalizacion = [
                            '' => 'Elegir',
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


                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php


                        echo $this->Form->input('educacion', array(
                            'label' => 'Refiera el tipo de actividad desarrollada',
                            'class' => 'form-control',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',
                            'value' => 'Elegir',
                            'id' => 'opcionesSeleccionadas', 'readonly', 'onclick' => 'mostrarModal()'

                        )); ?>

                    </div>

                    <!-- Fondo oscuro y cuadro modal -->
                    <div id="overlay" class="overlay">
                        <div class="form-group col-md-12" style="margin-top: 5px;">
                            <div id="modal" class="modal">
                                <div class="modal-header-native" style="text-align: center;">
                                    <button type="button" class="close" onclick="cerrarModal()">
                                        <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                                    </button>
                                </div>
                                <div id="miContenedor" class="form-group col-md-12" style="margin-top: 20px;">

                                </div>

                                <button class="my-button" type="button" onclick="cerrarModal()">Cerrar</button>
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
    function cerrarModal() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("modal").style.display = "none";
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




    $(function() {
        $('#ayudaButton').popover();
    });

    $("#switch-label").change(function() {
        var switchValue = this.checked ? "si" : "no";
        mostrar(switchValue);
    });



    function generarCheckboxes(opciones) {
        let resultHTML = '';

        opciones.forEach(opcion => {
            resultHTML +=
                `<label><input type="checkbox" value="${opcion}" onclick="actualizarInput()">${opcion}</label>`;
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
    document.getElementById('miContenedor').innerHTML = generarCheckboxes(opcionesActividades);
</script>