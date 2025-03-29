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
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Gestión canalización
                </h1>

            </div>


            <h2 class="subtitle-general-forms">Plan de
                Atención integral</h2>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">
            <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php echo $this->Form->input('id');
                        echo $this->Form->input('canalizacion_id');

                        echo $this->Form->input('canalizacionuno', array(
                            'label' => 'Canalización 1',
                            'class' => 'form-control',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',
                            'placeholder' => '',
                            'readonly',

                        ));
                        ?>
                    </div>

                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
                        echo $this->Form->input('canalizaciondos', array(
                            'label' => 'Canalización 2',
                            'class' => 'form-control',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',
                            'placeholder' => '',
                            'readonly',

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
                            'readonly',


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

                        )); ?>
                    </div>

                    <div class="form-group col-md-6" style="margin-top: 20px;">
                        <?php
                        echo $this->Form->input('observacionGestion', array(
                            'label' => 'Observación Gestión',
                            'type' => 'textarea', // Cambiado a 'textarea'
                            'class' => 'form-control',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',

                        ));
                        ?>

                    </div>


                    <div class="form-group col-md-6" style="margin-top:bs 20px;">
                        <?php


                        echo $this->Form->input('responsableGestion', array(
                            'label' => 'Responsable de la gestión',
                            'class' => 'form-control',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',



                        )); ?>

                    </div>

                    <div class="form-group col-md-6" style="margin-top:bs 20px;">
                        <?php


                        echo $this->Form->input('numeroContacto', array(
                            'label' => 'Numero Contacto',
                            'class' => 'form-control',
                            'style' => 'height:30px;  font-size: 15px ; width:100%',



                        )); ?>

                    </div>


                    <!-- Coloca el campo en una mitad de la pantalla en dispositivop medianos y grandes -->



                    <?php
                    echo $this->Form->input('fechaGestion', array(
                        'label' => 'Fecha Gestión: ',




                    )); ?>

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