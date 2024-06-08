<?php $this->layout = 'default_familia' ?>

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

    <?php echo $this->Form->create('Infantil'); ?>
    <div class="form-group col-sm-12 center">

        <fieldset>
            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo infantil de 6 a 11
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
                                    <button type="button" class="close" onclick="cerrarModal('modalvacunancion','canalizationSpecific')">
                                        <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                                    </button>
                                </div>
                                <ul id="dataTuning" class="list-group">
                                </ul>
                                <div class="d-flex justify-content-center vh-100 ">
                                    <button class=" my-button" type="button" onclick="cerrarModal('modalvacunancion','canalizationSpecific')">Aceptar</button>
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
                                    <button class=" my-button" type="button" onclick="cerrarModal('overlay','modal')">Cerrar</button>
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