<?php /*$this->layout = 'default_familia';*/

?>


<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<!-- Choices.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
       Plan de cuidado Primario 
       </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre informacion del plan de cuidado familiar.
    </p>
</div>

<?php

echo $this->Form->create('Acta',  [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);

// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));
?>

<?php echo $this->Form->input('id');?>

                        <?php
                        echo $this->Form->input('familia_id', [
                            'label' => 'ID_Familia/N° Hogar/Nombres',

                            'type' => 'hidden',

                        ]);
                        ?>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
       
        <div class="grid grid-cols-1 md:grid-cols-2">

           
            
            <!-- Resultados de ficha familiar-->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Resultado Ecomapa</label>
                </div>
                
                <?php
                echo $this->Form->input('resultadoEcomapa', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'resultadoEcomapa',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                  'readonly' => 'readonly'
                ]);
                ?>
                
            </div>

            <!-- Resultado famliograma -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Resultado Familiograma</label>
                </div>
             
                <?php
                echo $this->Form->input('resultadoFamiliograma', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'resultadoFamiliograma',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'empty' => 'Registre la dirección de la vivienda',
                     'readonly' => 'readonly',
                ]);
                ?>               
            </div>            
            
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Menor de cinco años con algún riesgo en salud</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $menorriesgosalud = array(
                    '' => 'Elegir',
                                '0' => 'No',
                                '12' => 'Riesgo desnutrición',
                                '8' => 'Menor sin vacunación',
                                '3' => 'Sin valoraciones de PYM',
                                '8' => 'Signos de peligro EDA- IRA',
                );

                echo $this->Form->input('menoresriegosalud', [
                    'type' => 'select',
                    'options' => $menorriesgosalud,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('menoresriegosalud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('alcancereunion') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Mujer con algún riesgo en salud</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
              $mujerriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '12' => 'Embarazo sin control',
                                '8' => 'Enferemedad crónica sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',

                            ];

                echo $this->Form->input('mujerriesgosalud', [
                    'type' => 'select',
                    'options' => $menorriesgosalud,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('mujerriesgosalud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('mujerriesgosalud') . '</div>';
                }
                ?>
            </div>

          <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Persona mayor con algún riesgo en salud</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                   $personamayorriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '8' => 'Enferemedad crónica sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',
                            ];

                echo $this->Form->input('personamayorriesgosalud', [
                    'type' => 'select',
                    'options' => $personamayorriesgosalud,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('personamayorriesgosalud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('personamayorriesgosalud') . '</div>';
                }
                ?>
            </div>




          </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Persona mayor con algún riesgo en salud</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                   $adolescenteriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '12' => 'Embarazo sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',
                            ];

                echo $this->Form->input('adolescenteriesgosalud', [
                    'type' => 'select',
                    'options' => $adolescenteriesgosalud,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('adolescenteriesgosalud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('adolescenteriesgosalud') . '</div>';
                }
                ?>
            </div>      


            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Jovenes o adultos con algún riesgo en salud</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                    $jovenriesgosalud = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '8' => 'Enferemedad crónica sin control',
                                '1' => 'Sin valoraciones de PYM',
                                '3' => 'Sintomatico respiratorio o de piel',
                            ];

                echo $this->Form->input('jovenriesgosalud', [
                    'type' => 'select',
                    'options' => $jovenriesgosalud,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('jovenriesgosalud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('jovenriesgosalud') . '</div>';
                }
                ?>
            </div>
            
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Se identifico algnún riesgo de vulnerabilidad</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                      $riesgovulnerabilidad = [
                                '' => 'Elegir',
                                '0' => 'No',
                                '3.0' => 'Persona con discapacidad sin cuidador',                                                               
                                '3.0' => 'Menor sin estudiar',
                                '2.3' => 'Poblacion Especial en riesgo',
                                '2.1' => 'Persona si afiliacion a salud',
                                '2.2' => 'Persona con consumo SPA',
                                '2.3' => 'Sospecha de violencia intrafamiliar',
                                '2.3' => 'Vivienda precaria',
                                '2.3' => 'Presona no afiliada salud',
                                 '1' => 'Cuidador con sobrecarga',

                            ];

                echo $this->Form->input('riesgovulnerabilidad', [
                    'type' => 'select',
                    'options' => $riesgovulnerabilidad,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('riesgovulnerabilidad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgovulnerabilidad') . '</div>';
                }
                ?>
            </div>

             <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Tamizajes con resultado negativo</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                       $tamizajeriesgo = [
                                '' => 'Elegir',
                                '0' => 'No se identifica',
                                '1' => 'APGAR NO favorable',
                                '1.1' => 'Familiograma NO favorable',
                                '1.2' => 'Ecomapa NO favorable',
                            ];

                echo $this->Form->input('tamizajeriesgo', [
                    'type' => 'select',
                    'options' => $tamizajeriesgo,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('tamizajeriesgo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tamizajeriesgo') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Valoración de riesgo familia</label>
                </div>
                
                <?php
                echo $this->Form->input('puntuacionfamilia', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'puntuacionfamilia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                 
                ]);
                ?>
                
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Clacificación de la famlia'</label>
                </div>
                
                <?php
                echo $this->Form->input('valoracionfamilia', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'valoracionfamilia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                 
                ]);
                ?>
                
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Fortalezas de la familia</label>
                </div>
                
                <?php
                echo $this->Form->input('observacion', [
                    'label' => false,
                     'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                        'error' => false, // No mostrar error aquí
                        'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                                 
                ]);
                 if (!empty($this->Form->error('observacion'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacion') . '</div>';
                    }
                ?>
                
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Objetivos de plan de cuidado</label>
                </div>
                
                <?php
                echo $this->Form->input('objetivocortoplazo', [
                    'label' => false,
                    'type' => 'textarea', // Cambiado a 'textarea'
                    'id' => 'objetivocortoplazo',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                 
                ]);
                ?>
                
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Objetivo  plan de cuidado largo plazo</label>
                </div>
                
                <?php
                echo $this->Form->input('objetivolargoplazo', [
                    'label' => false,
                    'type' => 'textarea', // Cambiado a 'textarea'
                    'id' => 'objetivolargoplazo',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                 
                ]);
                ?>
                
            </div>

             <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Entorno de intervención</label>
                </div>
                
                <?php

                          $entornoAfectado = [
                                'Hogar'   => 'Hogar',
                                'Comunitario'   => 'Comunitario',
                                'Educativo' => 'Educativo'                                
                            ];

                 // Usando FormHelper para generar checkboxes (CakePHP 2.x)
                            echo $this->Form->input('entornoafectado', [                              
                                'type' => 'select',
                                'multiple' => 'checkbox',
                                'options' => $entornoAfectado,
                                'id' => 'entornoafectado',
                                'class' => 'form-control'
                            ]);
                ?>
                
            </div>

          

               <!-- Tipo de poblacion participante -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="ria" class="font-semibold">Actividades a desarrollar</label>
                    <p class="text-red-600">*</p>

                </div>
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

                echo $this->Form->input(
                    'indicadorria',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => true,
                        'id' => 'ria',
                        'class' => 'w-full',
                        'empty' => false,
                        'options' => $actividadesDesarrollar,
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('indicadorria'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('indicadorria') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                
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

                      <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('recursoscomunitarios', array(
                                'label' => 'Recursos comuntarios',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                            )); ?>
                        </div>
                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('apoyofamiliar', array(
                                'label' => 'Apoyo familiar',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                            )); ?>
                        </div>
                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('apoyosocial', array(
                                'label' => 'Apoyo Social',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande


                            )); ?>
                        </div>
                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('asistenciafinanciera', array(
                                'label' => 'Apoyo o asistencia financiera',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande


                            )); ?>
                        </div>




                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('observacionesplancuidado', array(
                                'label' => 'Observación plan de cuidado',
                                'type' => 'textarea', // Cambiado a 'textarea'
                                'class' => 'form-control',
                                'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande


                            )); ?>
                        </div>

                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('firmaplancuidado', array(
                                'label' => 'Nombres de representante familia',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',

                            )); ?>
                        </div>
                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
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
                    

                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('responsable_id', array(
                                'label' => 'Responsable de seguimiento',
                                'style' => 'height:30px;  font-size: 15px ; width:100%',
                                'type' => 'select',
                                'class' => 'select-search'
                            )); ?>
                        </div>


                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('fecha', array(
                                'label' => 'Fecha de registro: ',
                                'type' => 'date',
                                'minYear' => date('Y'),
                                'maxYear' => date('Y'),
                                'style' => 'height:30px;  font-size: 15px ;',
                                'empty' => false, // Establecer el campo como vacío

                            )); ?>
                        </div>



                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('fecha1', array(
                                'label' => 'Fecha de visita 1: ',
                                'type' => 'date',
                                'minYear' => date('Y'),
                                'maxYear' => date('Y'),
                                'style' => 'height:30px;  font-size: 15px ;',
                                'empty' => true, // Establecer el campo como vacío

                            ));
                            ?> </div>
                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
                            <?php echo $this->Form->input('fecha2', array(
                                'label' => 'Fecha de visita 2: ',
                                'type' => 'date',
                                'minYear' => date('Y'),
                                'maxYear' => date('Y'),
                                'style' => 'height:30px;  font-size: 15px ;',
                                'empty' => true, // Establecer el campo como vacío

                            ));

                            ?> </div>
                        <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="actividad" class="font-semibold">Actividades a desarrollar</label>
                </div>
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
 </div>
</div>


    <script type="text/javascript">
    // Mostrar el modal al cargar la página
   

    document.addEventListener("DOMContentLoaded", () => {
       
        const choices_ria= new Choices("#ria", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione los sitios de facil acceso",
        });

        

        });
        // Aplicar estilos con Tailwind
        const inner = document.querySelector('.choices__inner');
        if (inner) {
            inner.classList.add(
                'bg-white', 'border', 'bordelr-gray-300', 'rounded-lg',
                'px-3', 'py-2', 'focus:ring', 'focus:ring-blue-200', 'text-gray-700'
            );
        }

        const dropdown = document.querySelector('.choices__list--dropdown');
        if (dropdown) {
            dropdown.classList.add('bg-white', 'shadow-lg', 'rounded-lg', 'border', 'border-gray-200');
        }
    });

    

    $(function() {
        $('#datetime_range').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            locale: {
                format: 'YYYY-MM-DD',
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                monthNames: [
                    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                ],

            }
        }, function(start) {
            let fecha = start.format('YYYY-MM-DD');
            console.log("Fecha seleccionada:", fecha);

            // Si necesitas guardarlos en campos ocultos para enviarlos al backend:
            if (!$("#fecha").length) {
                $("form").append('<?php echo $this->Form->hidden('fecha', ['id' => 'fecha']); ?>');
            }
            $("#fecha").val(fecha);
        });
    });





    function agregarOpcionSeleccion() {
        $("#SociambientalUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");

    }


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

    </script>