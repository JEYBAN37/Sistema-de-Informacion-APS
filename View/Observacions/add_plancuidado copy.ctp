<?php $this->layout = 'default_familia';

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
    <div class="form-group col-sm-12">
        <?php echo $this->Form->create('Observacion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
        <fieldset>
            <div class="col-12 text-center">
                <h2 class="subtitle-general-forms">Plan cuidado familiar
                </h2>
            </div>

            <h3 class="subtitle-general-forms">Identificación del riesgo familiar</h3>
            <hr style=" border:0.1px solid rgba(0,0,0,.125);">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                    <div class="form-group row">


                        <?php
                        echo $this->Form->input('id');
                        ?>

                        <?php
                        echo $this->Form->input('familia_id', [
                            'label' => 'ID_Familia/N° Hogar/Nombres',

                            'type' => 'hidden',

                        ]);
                        ?>



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

                        
                         <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            
                            
                            echo $this->Form->input('resultadoEcomapa', array(
                                'label' => 'Interrelaciones de la familia con el contexto socio cultural(Ecomapa)',
                                'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'placeholder' => '',
                                'id' => 'resultadoEcomapa',
                                'readonly' => 'readonly'
                            ));
                            ?>
                        </div>



                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

                            echo $this->Form->input('resultadoFamiliograma', array(
                                'label' => 'Riesgo identificado Familiograma',
                                 'class' => 'form-control',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'placeholder' => '',
                                'id' => 'resultadoEcomapa',
                                'readonly' => 'readonly'
                            ));
                            ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php $menorriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '12' => 'Riesgo desnutrición',
                                '8' => 'Menor sin vacunación',
                                '3' => 'Sin valoraciones de PYM',
                                '8' => 'Signos de peligro EDA- IRA',
                            ];


                            echo $this->Form->input('menoresriegosalud', array(
                                'label' => 'Menores cinco años con algún riesgo en salud',
                                'class' => 'form-control sumar',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $menorriesgosalud,
                                'id' => 'opcion1',
                                'placeholder' => ''


                            )); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $mujerriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '12' => 'Embarazo sin control',
                                '8' => 'Enferemedad crónica sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',

                            ];
                            echo $this->Form->input('mujerriesgosalud', array(
                                'label' => 'Mujeres con algún riesgo en salud',
                                'class' => 'form-control sumar',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $mujerriesgosalud,
                                'id' => 'opcion2',
                                'placeholder' => ''


                            )); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $personamayorriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '8' => 'Enferemedad crónica sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',
                            ];

                            echo $this->Form->input('personamayorriesgosalud', array(
                                'label' => 'Personas mayores con algún riesgo en salud',
                                'class' => 'form-control sumar',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $personamayorriesgosalud,
                                'id' => 'opcion3',
                                'placeholder' => ''
                            )); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php

                            $adolescenteriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '12' => 'Embarazo sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',
                            ];

                            echo $this->Form->input('adolescenteriesgosalud', array(
                                'label' => 'Adolescentes con algún riesgo en salud',
                                'class' => 'form-control sumar',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $adolescenteriesgosalud,
                                'id' => 'opcion4',
                                'placeholder' => ''
                            )); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $jovenriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '8' => 'Enferemedad crónica sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',
                            ];

                            echo $this->Form->input('jovenriesgosalud', array(
                                'label' => 'Jovenes o adultos con algún riesgo en salud',

                                'class' => 'form-control sumar',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $jovenriesgosalud,
                                'id' => 'opcion5',
                                'placeholder' => ''
                            )); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $riesgovulnerabilidad = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '3.0' => 'Persona con discapacidad sin cuidador',
                                '2.3' => 'Poblacion Especial',
                                '1' => 'Cuidador con sobrecarga',
                                '3' => 'Menor sin estudiar',
                                '2.1' => 'Persona si afiliacion a salud',
                                '2.2' => 'Persona con consumo SPA',
                                '2.3' => 'Sospecha de violencia intrafamiliar',
                                '2.3' => 'Vivienda precaria',

                            ];
                            echo $this->Form->input('riesgovulnerabilidad', array(
                                'label' => 'Se identifico algnún riesgo de vulnerabilidad',
                                'class' => 'form-control sumar',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $riesgovulnerabilidad,
                                'id' => 'opcion6',
                                'placeholder' => ''
                            )); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $tamizajeriesgo = [
                                '' => 'Elegir',
                                '0' => 'No se identifica',
                                '1' => 'APGAR NO favorable',
                                '1.1' => 'Familiograma NO favorable',
                                '1.2' => 'Ecomapa NO favorable',
                            ];
                            echo $this->Form->input('tamizajeriesgo', array(
                                'label' => 'Tamizajes con resultado negativo',
                                'class' => 'form-control sumar',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'options' => $tamizajeriesgo,
                                'id' => 'opcion7',
                                'placeholder' => ''
                            )); ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('puntuacionfamilia', array(
                                'label' => 'Valoración de riesgo familia',
                                'class' => 'form-control',
                                'style' => 'height:30px; font-size: 15px; width:100%',
                                'placeholder' => '',
                                'id' => 'resultadoprioridad-input', // Cambiado el ID a 'resultado-input'
                                'readonly'



                            )); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('valoracionfamilia', array(
                                'label' => 'Valoración de la famlia',
                                'class' => 'form-control',
                                'style' => 'height:30px; font-size: 15px; width:100%',
                                'placeholder' => '',
                                'id' => 'resultprioridad',
                                'readonly',
                            )); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">

                            <?php
                            echo $this->Form->input('observacion', array(
                                'label' => 'Fortalezas de la familia',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                            ));
                            ?>
                        </div>



                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('objetivocortoplazo', array(
                                'label' => 'Objetivo plan de cuidado corto plazo',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                            )); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('objetivolargoplazo', array(
                                'label' => 'Objetivo  plan de cuidado largo plazo',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                            )); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php
                            $entornoAfectado = [
                                'Hogar'   => 'Hogar',
                                'Comunitario'   => 'Comunitario',
                                'Educativo' => 'Educativo'                                
                            ];

                            // Usando FormHelper para generar checkboxes (CakePHP 2.x)
                            echo $this->Form->input('entornoafectado', [
                                'label' => 'Entorno de intervención',
                                'type' => 'select',
                                'multiple' => 'checkbox',
                                'options' => $entornoAfectado,
                                'id' => 'entornoafectado',
                                'class' => 'form-control'
                            ]);
                            ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php 
                            
                               $actividadesDesarrollar = [
                                'Atenciones,intervenciones individuales'   => 'Atenciones/intervenciones individuales',
                                //'Atención Salud adaptado'   => 'Atención Salud adaptado',
                                'Derivación servicios salud espcializados'   => 'Derivación servicios salud especializados',
                                'Apoyo Psicosocial' => 'Apoyo Psicosocial',
                                'Acompañamiento familiar' => 'Acompañamiento familiar',
                                'Gestión recursos comunitarios' => 'Gestión recursos comunitarios',
                                'Educación en Salud'=> 'Educación en Salud',
                                'Información en Salud'=> 'Información en Salud',
                                'Intervenciones Colectivas'=> 'Intervenciones Colectivas',
                                 ];

                            
                            echo $this->Form->input('indicadorria', array(
                                'label' => 'Actividades a desarrollar',
                              'type' => 'select',
                                'multiple' => 'checkbox',
                                'options' => $actividadesDesarrollar,
                                'id' => 'entornoafectado',
                                'class' => 'form-control'
                            )); ?>
                        </div>


                        <div class="form-group col-md-12" style="margin-top: 20px;">
                            <label for="actividaddesarrollar_table">Definición de logros concertados con la familia</label>
                            <table id="	actividaddesarrollar_table" class="table table-bordered" style="width:100%; font-size:14px;">
                                <thead>
                                    <tr>
                                        <th>Situación identificada</th>
                                        <th>Logro en salud</th>
                                        <th>Responsable familia</th>
                                        <th>Fecha</th>
                                        <th>Fecha Segimiento</th>
                                        <th>Observación</th> 
                                        <th>Estado</th>    
                                    </tr>
                                </thead>
                            <tbody id="actividaddesarrollar_tbody" data-index="<?php $initialRows = 1; echo $initialRows; ?>">
                                <?php for ($i = 0; $i < $initialRows; $i++): ?>
                                <tr>
                                    <td style="max-width:250px; word-wrap:break-word; white-space:normal;">
                                        <textarea name="data[Observacion][actividaddesarrollar][<?php echo $i;?>][situacion]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                    </td>
                                    <td style="max-width:180px; word-wrap:break-word; white-space:normal;">
                                        <textarea name="data[Observacion][actividaddesarrollar][<?php echo $i;?>][logro]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                    </td>
                                    <td style="max-width:200px; word-wrap:break-word; white-space:normal;">
                                        <textarea name="data[Observacion][actividaddesarrollar][<?php echo $i;?>][responsable]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                    </td>
                                    <td style="max-width:300px; word-wrap:break-word; white-space:normal;">
                                        <textarea name="data[Observacion][actividaddesarrollar][<?php echo $i;?>][fecha]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                    </td>
                                    <td style="max-width:300px; word-wrap:break-word; white-space:normal;">
                                        <textarea name="data[Observacion][actividaddesarrollar][<?php echo $i;?>][fechaSeguimiento]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                    </td>
                                    <td style="max-width:300px; word-wrap:break-word; white-space:normal;">
                                        <textarea name="data[Observacion][actividaddesarrollar][<?php echo $i;?>][observacion]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                    </td>
                                    <td style="max-width:300px; word-wrap:break-word; white-space:normal;">
                                        <select name="data[Observacion][actividaddesarrollar][<?php echo $i;?>][estado]" class="form-control" style="width:100%; height:40px;">
                                            <option value="">En Proceso</option>
                                            <option value="Logro alcanzado">Logro alcanzado</option>
                                            <option value="Logro no alcanzado">Logro no alcanzado</option>
                                        </select>
                                        <div style="margin-top:6px;">
                                            <button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Eliminar</button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7" style="text-align:left;">
                                        <button type="button" class="btn btn-primary" onclick="addRow()">Agregar fila</button>
                                        <button type="button" class="btn btn-secondary" onclick="removeLastRow()">Quitar última fila</button>
                                    </td>
                                </tr>
                            </tfoot>

                            <script type="text/javascript">
                                function addRow() {
                                    var tbody = document.getElementById('actividaddesarrollar_tbody');
                                    var index = parseInt(tbody.getAttribute('data-index'), 10);
                                    var row = document.createElement('tr');
                                    row.innerHTML = '' +
                                        '<td style="max-width:250px; word-wrap:break-word; white-space:normal;">' +
                                        '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][situacion]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>' +
                                        '</td>' +
                                        '<td style="max-width:180px; word-wrap:break-word; white-space:normal;">' +
                                        '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][logro]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>' +
                                        '</td>' +
                                        '<td style="max-width:200px; word-wrap:break-word; white-space:normal;">' +
                                        '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][responsable]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>' +
                                        '</td>' +
                                        '<td style="max-width:300px; word-wrap:break-word; white-space:normal;">' +
                                        '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][fecha]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>' +
                                        '</td>' +
                                        '<td style="max-width:300px; word-wrap:break-word; white-space:normal;">' +
                                        '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][fechaSeguimiento]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>' +
                                        '</td>' +
                                        '<td style="max-width:300px; word-wrap:break-word; white-space:normal;">' +
                                        '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][observacion]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>' +
                                        '</td>' +
                                        '<td style="max-width:300px; word-wrap:break-word; white-space:normal;">' +
                                        '<select name="data[Observacion][actividaddesarrollar][' + index + '][estado]" class="form-control" style="width:100%; height:40px;">' +
                                        '<option value="">Elegir</option>' +
                                        '<option value="Logro alcanzado">Logro alcanzado</option>' +
                                        '<option value="Logro no alcanzado">Logro no alcanzado</option>' +
                                        '</select>' +
                                        '<div style="margin-top:6px;"><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Eliminar</button></div>' +
                                        '</td>';
                                    tbody.appendChild(row);
                                    tbody.setAttribute('data-index', index + 1);
                                }

                                function removeRow(button) {
                                    var tr = button.closest('tr');
                                    if (!tr) return;
                                    var tbody = document.getElementById('actividaddesarrollar_tbody');
                                    // Evitar eliminar la última fila si se desea mantener al menos una fila
                                    if (tbody.rows.length <= 1) {
                                        // si se quiere permitir eliminar todas, comentar la siguiente línea
                                        alert('Debe quedar al menos una fila.');
                                        return;
                                    }
                                    tr.parentNode.removeChild(tr);
                                }

                                function removeLastRow() {
                                    var tbody = document.getElementById('actividaddesarrollar_tbody');
                                    if (tbody.rows.length > 1) {
                                        tbody.deleteRow(tbody.rows.length - 1);
                                    } else {
                                        alert('Debe quedar al menos una fila.');
                                    }
                                }
                            </script>
                            </table>
                        </div>

                      
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('recursoscomunitarios', array(
                                'label' => 'Recursos comuntarios',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                            )); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('apoyofamiliar', array(
                                'label' => 'Apoyo familiar',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                            )); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('apoyosocial', array(
                                'label' => 'Apoyo Social',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande


                            )); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('asistenciafinanciera', array(
                                'label' => 'Apoyo o asistencia financiera',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande


                            )); ?>
                        </div>




                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('observacionesplancuidado', array(
                                'label' => 'Observación plan de cuidado',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande


                            )); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('firmaplancuidado', array(
                                'label' => 'Nombres de representante familia',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',

                            )); ?>
                        </div>
                        <div class="form-group col-md-12" style="margin-top: 20px;">
                            <label for="disentimiento_table">Registre personas que no desean participar en el plan de cuidado familiar</label>
                            <table id="disentimiento_table" class="table table-bordered" style="width:100%; font-size:14px;">
                                <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>N. Documento</th>
                                        <th>Rol</th>
                                        <th>Motivo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 3; $i++): // 3 filas preseteadas ?>
                                    <tr>
                                        <td style="max-width:250px; word-wrap:break-word; white-space:normal;">
                                            <textarea name="data[Observacion][disentimiento][<?php echo $i;?>][nombre]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                        </td>
                                        <td style="max-width:180px; word-wrap:break-word; white-space:normal;">
                                            <textarea name="data[Observacion][disentimiento][<?php echo $i;?>][documento]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                        </td>
                                        <td style="max-width:200px; word-wrap:break-word; white-space:normal;">
                                            <textarea name="data[Observacion][disentimiento][<?php echo $i;?>][rol]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                        </td>
                                        <td style="max-width:300px; word-wrap:break-word; white-space:normal;">
                                            <textarea name="data[Observacion][disentimiento][<?php echo $i;?>][motivo]" class="form-control" style="width:100%; height:40px; resize:vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
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
                            echo $this->Form->input('plancuidado', array(
                                'label' => 'Plan cuidado firmado',
                                'type' => 'file',
                                'onchange' => 'validarTamanioSoporte()',
                                'class' => 'form-control',
                                'style' => 'height:40px;  font-size: 15px ; width:100%',
                            ));
                            echo $this->Form->input(
                                'dirplancuidado',
                                array(
                                    'type' => 'hidden',
                                    'class' => 'form-control',
                                    'style' => 'height:40px;  font-size: 15px ; width:100%',
                                )
                            );
                            ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('responsable_id', array(
                                'label' => 'Responsable de seguimiento',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'type' => 'select',
                                'class' => 'select-search'
                            )); ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('fecha', array(
                                'label' => 'Fecha de registro: ',
                                'type' => 'date',
                                'minYear' => date('Y'),
                                'maxYear' => date('Y'),
                                'style' => 'height:30px;  font-size: 15px ;',
                                'empty' => false, // Establecer el campo como vacío

                            )); ?>
                        </div>



                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('fecha1', array(
                                'label' => 'Fecha de visita 1: ',
                                'type' => 'date',
                                'minYear' => date('Y'),
                                'maxYear' => date('Y'),
                                'style' => 'height:30px;  font-size: 15px ;',
                                'empty' => true, // Establecer el campo como vacío

                            ));
                            ?> </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('fecha2', array(
                                'label' => 'Fecha de visita 2: ',
                                'type' => 'date',
                                'minYear' => date('Y'),
                                'maxYear' => date('Y'),
                                'style' => 'height:30px;  font-size: 15px ;',
                                'empty' => true, // Establecer el campo como vacío

                            ));

                            ?> </div>
                        <div class="form-group col-md-6" style="margin-top: 20px;">
                            <?php echo $this->Form->input('fecha3', array(
                                'label' => 'Fecha de visita 3: ',
                                'type' => 'date',
                                'minYear' => date('Y'),
                                'maxYear' => date('Y'),
                                'style' => 'height:30px;  font-size: 15px ;',
                                'empty' => true, // Establecer el campo como vacío

                            ));
                            ?> </div>
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
    $('document').ready(function() {

        function calcularprioridad() {

            let sumaPrioridad = 0;

            $('select.sumar').each(function() {
                sumaPrioridad += parseInt($(this).val()) || 0;
            });

            $('#resultadoprioridad-input').val(sumaPrioridad);


            var prioridadField = document.getElementById('resultadoprioridad-input');
            var resultPrioridad = document.getElementById('resultprioridad');

            switch (true) {
                case sumaPrioridad === 0:
                    prioridadField.style.color = 'green';
                    resultPrioridad.value = 'Con Gestion del riesgo salud';
                    break;
                case sumaPrioridad >= 12: //puntaje max 17 posibles, puntos 12 corresponde al 70%
                    prioridadField.style.color = 'red';
                    resultPrioridad.value = 'Prioridad alta';
                    break;

                case sumaPrioridad >= 8 && sumaPrioridad <= 11:
                    prioridadField.style.color = 'orange';
                    resultPrioridad.value = 'Prioridad media';
                    break;

                case sumaPrioridad > 0 && sumaPrioridad <= 7:
                    prioridadField.style.color = '#FAA80D';
                    resultPrioridad.value = 'Prioridad baja';
                    break;
                default:
                    prioridadField.style.color = 'black';
                    resultPrioridad.value = '';
            }

            var prioridadField = document.getElementById('valoracionfamiliina');

        }

        $('select.sumar').on('change', calcularprioridad);
        calcularprioridad();


    });


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

  <!-- Editor WYSIWYG básico (TinyMCE CDN) -->
                        <!-- Opción sin registro: CKEditor -->
                        <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
                        <script>
                            if (typeof CKEDITOR !== 'undefined') {
                                CKEDITOR.replace('indicadorria-editor', { height: 200, removeButtons: '' });
                                CKEDITOR.replace('disentimiento-editor', { height: 200, removeButtons: '' });
                            }
                        </script>
                        <script>
                            if (typeof tinymce !== 'undefined') {
                                tinymce.init({
                                    selector: '#indicadorria-editor, #disentimiento-editor',
                                    menubar: false,
                                    plugins: 'lists advlist link paste',
                                    toolbar: 'undo redo | formatselect | bold italic underline | bullist numlist | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter alignright | removeformat | link',
                                    fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
                                    font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva',
                                    branding: false,
                                    height: 200,
                                    paste_as_text: true
                                });
                            }
                        </script>