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
    <div class="form-group col-sm-12">
        <?php echo $this->Form->create('Observacion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
        <fieldset>
            <div class="col-12 text-center">
                <h1 class="title-general-forms">Modulo de Observaciones
                </h1>
            </div>

            <h2 class="subtitle-general-forms">Detalles</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                    <div class="form-group row">


                        <?php $idAux = $_GET['observaciones'];
                        echo $this->Form->input('familia_id', array('value' => ''
                            . $idAux, 'type' => 'hidden'));
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
                            $canalizacion = [
                                '' => 'Elegir',
                                'No aplica ' => 'No aplica',
                                'Bienestar social' => 'Bienestar social',
                                'Certificación de Discapacidad' => 'Certificación de Discapacidad',
                                'Proyecto Bien nacer' => 'Proyecto Bien nacer',
                                'Aseguramiento' => 'Aseguramiento',
                                'Renta ciudana' => 'Renta ciudana',
                                'Jovenes en acción' => 'Jovenes en acción',
                                'Adulto mayor' => 'Adulto mayor',
                                'CDI NIDOS NUTRIR' => 'CDI NIDOS NUTRIR',
                                'Comedores solidarios' =>    'Comedores solidarios',
                                'Programa minimo vital' => 'Programa minimo vital',
                                'INVIYA' => 'INVIYA',
                                'SISBEN' => 'SISBEN',
                                'FONDO EMPRENDER' => 'FONDO EMPRENDER',
                                'Protección Migrantes' => 'Protección Migrantes',
                                'Otro' => 'Otro'
                            ];
                            echo $this->Form->input('canalizacionuno', array(
                                'label' => 'Canalización a programa social',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $canalizacion,
                                'placeholder' => ''
                            ));
                            ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('canalizaciondos', array(
                                'label' => 'Canalización a programa social',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $canalizacion,
                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('canalizaciontres', array(
                                'label' => 'Canalización a programa social',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $canalizacion,
                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $estado = [
                                '' => 'Elegir',
                                'Se brinda orientación' => 'Se birnda orientación correpondiente',
                                'Se consultará información' => 'Se consultará Infomación',
                                'No aplica' => 'No aplica',
                            ];
                            echo $this->Form->input('estado', array(
                                'label' => 'Estado de canalizaciones',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $estado,
                            ));
                            ?>
                        </div>

                        <?php
                        echo $this->Form->input('fechaseguimiento', array(
                            'label' => 'Fecha de seguimiento de canalizaciones',
                            'class' => 'form-control',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',
                            'placeholder' => '',
                            'type' => 'hidden',
                        ));
                        ?>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('responsable_id', array(
                                'label' => 'Responsable de seguimiento',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'placeholder' => ''
                            ));
                            ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            echo $this->Form->input('observacion', array(
                                'label' => 'Observación general',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'placeholder' => ''
                            ));
                            ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $optionEcomapa = [
                                '' => 'Elegir',
                                '1.Positivo' => '1.Positivo',
                                '2.Tenue' => '2.Tenue',
                                '3.Estresante' => '3.Estresante',
                                '4.Fluye' => '4.Fluye',
                                '5.Intenso' => '5.Intenso',
                            ];
                            echo $this->Form->input('resultadoEcomapa', array(
                                'label' => 'Interrelaciones de la familia con el contexto socio cultural(Ecomapa)',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $optionEcomapa,
                                'placeholder' => ''
                            ));
                            ?>
                        </div>



                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

                            echo $this->Form->input('resultadoFamiliograma', array(
                                'label' => 'Riesgo identificado Familiograma',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'value' => 'Elegir',
                                'id' => 'opcionesSeleccionadas', 'readonly', 'onclick' => 'mostrarModal()'
                            ));
                            ?>
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
                        <?php echo $this->Form->input('date', array(
                            'label' => 'Fecha de visita : ',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',
                            'type' => 'hidden',
                        ));
                        ?>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <p class="help-block">Adjuntar anexo ' NOTA: Cargar un archivo tipo imagen o en pdf
                                extensión ".jpg, png" o
                                ".pdf" Nomenclatura de archivo: IdHogar_Apellidofamilia'</p>
                            <?php
                            echo $this->Form->input('familiograma', array(
                                'label' => 'Familiograma',
                                'type' => 'file',
                                'onchange' => 'validarTamanioSoporte()',
                                'class' => 'form-control',
                                'style' => 'height:40px;  font-size: 15px ; width:100%',
                            ));
                            echo $this->Form->input(
                                'dirfamilograma',
                                array(
                                    'type' => 'hidden',
                                    'class' => 'form-control',
                                    'style' => 'height:40px;  font-size: 15px ; width:100%',
                                )
                            );
                            ?>
                        </div>


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
    });

    function agregarOpcionSeleccion() {
        $("#ObservacionResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

    function validarTamanioSoporte() {
        var auxFile = document.getElementById('ActaAnexo');
        var sizeF = auxFile.files[0].size;
        if (sizeF > 3000000) {
            alert('El archivo debe ser menor a 3 Mb');
            auxFile.value = '';
        }
    }

    function generarCheckboxes(opciones) {
        let resultHTML = '';

        opciones.forEach(opcion => {
            resultHTML +=
                `<label><input type="checkbox" value="${opcion}" onclick="actualizarInput()">${opcion}</label>`;
        });

        return resultHTML;
    }


    const opciones = opcionesfamiliograma = [
        '1.Biológicos',
        '2.Psocológicos',
        '3.Sociales',
        '0.Sin riesgo'
    ];
    // Generar los checkboxes y agregarlos al contenedor
    document.getElementById('miContenedor').innerHTML = generarCheckboxes(opcionesfamiliograma);
</script>