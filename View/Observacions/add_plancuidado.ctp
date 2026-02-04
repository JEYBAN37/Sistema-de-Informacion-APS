<?php $this->layout = 'default_familia';  ?>
<style>
    .card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .card-header {
        padding: 1rem;
        border-bottom: 1px solid #e5e7eb;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        padding: 0.25rem 0.75rem;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 9999px;
        border: 1px solid;
    }

    .badge-outline {
        background: transparent;
        border-color: #d1d5db;
        color: #6b7280;
    }

    .badge-alcanzado {
        background: rgba(34, 197, 94, 0.1);
        color: #15803d;
        border-color: rgba(34, 197, 94, 0.2);
    }

    .badge-pendiente {
        background: rgba(234, 179, 8, 0.1);
        color: #a16207;
        border-color: rgba(234, 179, 8, 0.2);
    }

    .badge-en-proceso {
        background: rgba(59, 130, 246, 0.1);
        color: #1e40af;
        border-color: rgba(59, 130, 246, 0.2);
    }

    .btn-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        height: 2rem;
        padding: 0;
        border: none;
        background: transparent;
        cursor: pointer;
        border-radius: 0.375rem;
        transition: background-color 0.2s;
    }

    .btn-icon:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .btn-icon:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .btn-icon.destructive {
        color: #dc2626;
    }

    .btn-icon.destructive:hover {
        background: rgba(220, 38, 38, 0.1);
    }

    textarea,
    input,
    select {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        transition: border-color 0.2s;
    }

    textarea:focus,
    input:focus,
    select:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    textarea {
        resize: none;
        font-family: inherit;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: #374151;
    }

    .collapsed {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .expanded {
        max-height: 2000px;
        transition: max-height 0.3s ease-in;
    }
</style>



<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Plan de cuidado <br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Primario Familiar
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Registre informacion del plan de cuidado familiar individual. </p>
</div>


<?php

echo $this->Form->create('Observacion',  [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);

// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';
$idAux = $this->request->data['Observacion']['familia_id'];
?>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fas fa-home text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>

            <div class="ml-4">
                <h1 class="text-xl font-semibold">Análisis del riesgo familiar</h1>
                <p class="text-gray-500">Complementa la información segun la necesidad.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">


            <?php echo $this->Form->hidden('id'); ?>
            <?php echo $this->Form->hidden('familia_id'); ?>
            <?php echo $this->Form->hidden('responsable_id'); ?>
            <?php echo $this->Form->hidden('disentimiento'); ?>
            <?php echo $this->Form->hidden('actividaddesarrollar'); ?>


            <!-- Resultados de ficha familiar-->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">1</span>
                    <label for="resultadoEcomapa" class="font-semibold">Resultado Ecomapa</label>
                </div>

                <?php
                echo $this->Form->input('resultadoEcomapa', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'resultadoEcomapa',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none text-sm text-gray-700',
                    'readonly' => 'readonly'
                ]);
                ?>

            </div>

            <!-- Resultado famliograma -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">2</span>
                    <label for="familiograma" class="font-semibold">Resultado Familiograma</label>
                </div>

                <?php
                echo $this->Form->input('resultadoFamiliograma', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'resultadoFamiliograma',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none text-sm text-gray-700',
                    'readonly' => 'readonly',
                ]);
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="actividad" class="font-semibold">Fecha de registro de plan cuidado</label>
                </div>
                <?php echo $this->Form->input('date', array(
                    'label' => false,
                    'type' => 'text',
                    'id' => 'fechaRegistro',
                    'style' => 'height:40px; font-size:16px; width:100%; border:1px solid #d1d5db; border-radius:0.375rem; padding:0.5rem; color:#374151; background-color:#ffffff;',
                    'class' => 'focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500',
                    'empty' => false, // Establecer el campo como vacío
                ));

                if (!empty($this->Form->error('date'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('date') . '</div>';
                }

                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="riesgosalud" class="font-semibold">Se identificó riesgos en salud</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $riesgosalud = [
                    '0.1' => 'Ninguno',
                    '5.1' => 'Menor con Riesgo desnutrición',
                    '5.2' => 'Menor sin esquema de vacunación completo',
                    '3.3' => 'Menor con Signos de peligro EDA o IRA',
                    '2.1' => 'Menor sin valoraciones de PYM',
                    '1' => 'Persona joven/adulto sin valoraciones de PYM',
                    '5.4' => 'Gestante sin control',
                    '4.5' => 'Embarazo de alto riesgo',
                    '1.01' => 'Persona con enfermedad crónica con control',
                    '5.6' => 'Persona con enfermedad crónica sin control',
                    '4.1' => 'Persona Sintomatico respiratorio o de piel',
                    '3' => 'Persona con enferemedad sin manejo',
                    '3.4' => 'Persona con afectación de salud mental',

                ];


                echo $this->Form->input('menoresriegosalud', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => 'multiple',
                    'id' => 'riesgosalud',
                    'class' => 'w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'empty' => false,
                    'options' => $riesgosalud,
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('menoresriegosalud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('menoresriegosalud') . '</div>';
                }
                ?>
            </div>



            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="riesgovulnerabilidad" class="font-semibold">Se identificó algún riesgo de vulnerabilidad</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $riesgovulnerabilidad = [
                    '0.1' => 'Ninguna',
                    '2.0' => 'Persona con discapacidad sin cuidador',
                    '2.1' => 'Menor sin estudiar',
                    '1.3' => 'Población Especial en riesgo',
                    '2.4' => 'Persona sin afiliación a salud',
                    '1.2' => 'Persona con consumo SPA',
                    '2.01' => 'Sospecha de violencia intrafamiliar',
                    '1.02' => 'Vivienda precaria',
                    '1.03' => 'Cuidador con sobrecarga',
                    '1.04' => 'Disfunción famliliar',
                    '1.05' => 'Relaciones familiares tensas o estresantes'
                ];

                echo $this->Form->input(
                    'riesgovulnerabilidad',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => 'multiple',
                        'id' => 'riesgovulnerabilidad',
                        'class' => 'w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'empty' => false,
                        'options' => $riesgovulnerabilidad,
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('riesgovulnerabilidad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgovulnerabilidad') . '</div>';
                }
                ?>
            </div>



            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="direccion" class="font-semibold">Valoración de riesgo familia</label>
                </div>

                <?php
                echo $this->Form->input('puntuacionfamilia', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'puntuacionfamilia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'readonly' => 'readonly', // Hacer el campo de solo lectura
                ]);

                if (!empty($this->Form->error('puntuacionfamilia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('puntuacionfamilia') . '</div>';
                }
                ?>
            </div>



            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="direccion" class="font-semibold">Clasificación de la familia</label>
                </div>

                <?php
                echo $this->Form->input('valoracionfamilia', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'valoracionfamilia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',

                ]);

                if (!empty($this->Form->error('valoracionfamilia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('valoracionfamilia') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="fortalezas" class="font-semibold">Fortalezas de la familia</label>
                </div>

                <?php

                $fortalezas = [
                    'Vivienda adecuada y segura' => 'Vivienda adecuada y segura',
                    'Acceso a servicios básicos (agua,alcantarillado, luz, gas)' => 'Acceso a servicios básicos (agua, luz, gas)',
                    'Buena salud física y mental de los miembros' => 'Buena salud física y mental de los miembros',
                    'Relaciones familiares afectuosas y respetuosas' => 'Relaciones familiares afectuosas y respetuosas',
                    'Apoyo emocional entre los miembros' => 'Apoyo emocional entre los miembros',
                    'Participación activa en la comunidad' => 'Participación activa en la comunidad',
                    'Estabilidad económica' => 'Estabilidad económica',
                    'Acceso a educación y formación' => 'Acceso a educación y formación',
                    'Habilidades de resolución de conflictos' => 'Habilidades de resolución de conflictos',
                    'Red de apoyo social sólida' => 'Red de apoyo social sólida',
                    'Prácticas saludables de alimentación y ejercicio' => 'Prácticas saludables de alimentación y ejercicio',
                    'Entorno familiar seguro y libre de violencia' => 'Entorno familiar seguro y libre de violencia',
                ];

                echo $this->Form->input('fortalezas', [
                    'label' => false,
                    'type' => 'select',
                    'multiple' => 'multiple',
                    'options' => $fortalezas,
                    'id' => 'fortalezas',
                    'class' => 'w-full',
                    'empty' => false,
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('fortalezas'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('fortalezas') . '</div>';
                }
                ?>
            </div>

        </div>
    </div>



    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12 mt-16">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-person-dots-from-line text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Necedidades / Problemas / Determinantes</h1>
                <p class="text-gray-500">Complementa la información segun los logros concertados con la familia</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">


            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="direccion" class="font-semibold">Definicion de Necesidades / Problemas / Determinantes </label>
                </div>

                <div class="p-2">

                    <!-- Desktop: Table Layout -->
                    <div id="desktopView" class="block overflow-x-auto">
                        <table class="w-full border-collapse">
                            <tbody id="tableBody" class="divide-y divide-gray-200">
                                <!-- Table rows will be rendered here by JavaScript -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-200">
                        <button type="button" id="addRowBtn" class="flex items-center justify-center gap-2 px-6 py-3 bg-teal-600 text-white rounded-lg hover:bg-green-700 transition-colors font-medium">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Agregar fila
                        </button>
                        <button type="button" id="removeLastBtn" class="flex items-center justify-center gap-2 px-6 py-3 bg-white text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors font-medium cursor-pointer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Quitar última fila
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="direccion" class="font-semibold">Registre opersonas que no desean participar en el Plan</label>
                </div>

                <div class="p-2">

                    <!-- Desktop: Table Layout -->
                    <!-- Campo oculto para almacenar los datos de disentimiento serializados -->
                    <textarea
                        name="data[Observacion][disentimiento]"
                        id="disentimiento_hidden"
                        style="display:none;"><?php echo isset($this->request->data['Observacion']['disentimiento']) ? h($this->request->data['Observacion']['disentimiento']) : ''; ?></textarea>

                    <!-- Desktop: Table Layout para disentimiento -->
                    <div id="desktopViewdisentimiento" class="block overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="p-2 font-medium">Nombre</th>
                                    <th class="p-2 font-medium">Documento</th>
                                    <th class="p-2 font-medium">Rol</th>
                                    <th class="p-2 font-medium">Motivo</th>
                                    <th class="p-2 font-medium">Acción</th>
                                </tr>
                            </thead>
                            <tbody id="tableBodyDisentimiento" class="divide-y divide-gray-200">
                                <!-- Table rows will be rendered here by JavaScript -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Action Buttons para disentimiento -->
                    <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-200 mt-4">
                        <button type="button" id="addRowBtnDisentimiento" class="flex items-center justify-center gap-2 px-6 py-3 bg-teal-600 text-white rounded-lg hover:bg-green-700 transition-colors font-medium">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Agregar fila
                        </button>
                        <button type="button" id="removeLastBtnDisentimiento" class="flex items-center justify-center gap-2 px-6 py-3 bg-white text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors font-medium cursor-pointer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Quitar última fila
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12 mt-16">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-handshake-angle text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Concertacion plan de cuidado primario</h1>
                <p class="text-gray-500">Complementa la información segun la necesidad.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="direccion" class="font-semibold">Objetivo corto plazo de plan de cuidado</label>
                </div>

                <?php
                $parametrosDisplay = [];
                foreach ($parametros as $key => $value) {
                    $parametrosDisplay[$key] = $value; // $key = indicador, $value = resultado esperado
                }

                echo $this->Form->input('objetivocortoplazo', [
                    'label' => false,
                    'type' => 'textarea', // Cambiado a 'textarea'
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí                 
                ]);

                if (!empty($this->Form->error('objetivocortoplazo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivocortoplazo') . '</div>';
                }
                ?>

            </div>



            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="direccion" class="font-semibold">Objetivo plan de cuidado largo plazo</label>
                </div>

                <?php
                echo $this->Form->input('objetivolargoplazo', [
                    'label' => false,
                    'type' => 'textarea', // Cambiado a 'textarea'
                    'id' => 'objetivolargoplazo',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí                 
                ]);

                if (!empty($this->Form->error('objetivolargoplazo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivolargoplazo') . '</div>';
                }
                ?>

            </div>



            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="entornoafectado" class="font-semibold">Entorno de intervención</label>
                </div>

                <?php

                $entornoAfectado = [
                    'Hogar'   => 'Hogar',
                    'Comunitario'   => 'Comunitario',
                    'Educativo' => 'Educativo'
                ];

                // Usando FormHelper para generar checkboxes (CakePHP 2.x)
                echo $this->Form->input('entornoafectado', [
                    'label' => false,
                    'type' => 'select',
                    'multiple' => 'multiple',
                    'options' => $entornoAfectado,
                    'id' => 'entornoafectado',
                    'class' => 'w-full',
                    'empty' => false,
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('entornoafectado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('entornoafectado') . '</div>';
                }
                ?>

            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="ria" class="font-semibold">Actividades a desarrollar</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                $actividadesDesarrollar = [
                    'manejo y seguimiento a riesgos en salud' => 'Manejo y seguimiento a riesgos en salud',
                    'Atenciones,intervenciones individuales RIAS' => 'Atenciones/intervenciones individuales RIAS',
                    'Derivación servicios salud especializados' => 'Derivación servicios salud especializados',
                    'Apoyo Psicosocial' => 'Apoyo Psicosocial',
                    'AcompañamientoAJUSTAR familiar' => 'Acompañamiento familiar',
                    'Gestión recursos comunitarios' => 'Gestión recursos comunitarios',
                    'Educación para la Salud' => 'Educación en Salud',
                    'Información en Salud' => 'Información en Salud',
                    'Intervenciones Colectivas' => 'Intervenciones Colectivas',
                ];

                echo $this->Form->input(
                    'indicadorria',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => 'multiple', // Permitir selección múltiple
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

        </div>
    </div>

    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12 mt-16">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-suitcase-medical text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Observaciones Finales</h1>
                <p class="text-gray-500">Completa la información según la necesidad.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="actividad" class="font-semibold">Observación del desarrollo de plan de cuidado primario</label>
                </div>
                <?php echo $this->Form->input('observacionesplancuidado', array(
                    'label' => false,
                    'type' => 'textarea', // Cambiado a 'textarea'
                    'class' => 'form-control',
                    'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí    

                ));

                if (!empty($this->Form->error('observacionesplancuidado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacionesplancuidado') . '</div>';
                }

                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="actividad" class="font-semibold">Nombres de representante familia que concerta plan de cuidado primario</label>
                </div>
                <?php echo $this->Form->input('firmaplancuidado', array(
                    'label' => false,
                    'type' => 'text',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'style' => 'height:40px; font-size:16px;',
                    'error' => false // No mostrar error aquí

                ));

                if (!empty($this->Form->error('firmaplancuidado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('firmaplancuidado') . '</div>';
                }

                ?>
            </div>


            <?php echo $this->Form->hidden('date'); ?>


            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="responsables" class="font-semibold">Responsable EBS</label>
                </div>
                <?php echo $this->Form->input(
                    'responsables',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => 'multiple', // Permitir selección múltiple
                        'id' => 'responsables',
                        'class' => 'w-full',
                        'empty' => false,
                        'options' => $responsables,
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('responsables'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('responsables') . '</div>';
                }

                ?>
            </div>


            <div class="pt-2 flex gap-4">
                <!-- Botón -->
                <div class="w-full p-2">
                    <button name="btn" value="Guardar Plan" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                                <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                                <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                            </svg>
                        </span>
                        Guardar Plan
                    </button>
                </div>

                <div class="w-full p-2">
                    <button onclick="preventBackNavigation()" name="btn" value="volver" type="button" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                        <span>
                            <i class="fa-solid fa-person-walking-arrow-loop-left "></i>
                        </span>
                        Volver a Familia
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    // Definir parametrosMap GLOBALMENTE antes de cualquier evento
    const parametrosMapData = <?= json_encode($parametrosDisplay) ?>;
    window.parametrosMap = parametrosMapData;
    window.parametrosKeys = Object.keys(parametrosMapData);
    console.log('parametrosMap inicializado globalmente:', window.parametrosMap);
    console.log('parametrosKeys inicializado globalmente:', window.parametrosKeys);
    console.log('¿parametrosMap está vacío?', Object.keys(window.parametrosMap).length === 0);

    document.addEventListener("DOMContentLoaded", () => {

        const choices_riesgosalud = new Choices("#riesgosalud", {
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
            placeholderValue: "Seleccione riesgos en salud identificados",
        });


        const choices_ria = new Choices("#ria", {
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
            placeholderValue: "Seleccione las actividades a desarrollar",
        });

        const choices_entornoafectado = new Choices("#entornoafectado", {
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
            placeholderValue: "Seleccione los entornos a intervenir",
        });

        const choices_riesgovulnerabilidad = new Choices("#riesgovulnerabilidad", {
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
            placeholderValue: "Seleccione riesgos o vulnerabilidad identificados",
        });


        const choices_fortalezas = new Choices("#fortalezas", {
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
            placeholderValue: "Seleccione las fortalezas de la familia",
        });
        const choices_responsables = new Choices("#responsables", {
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
            placeholderValue: "Seleccione los responsables EBS",
        });

        // parametrosMap ya está definido globalmente arriba



        const choices_indicadores = new Choices("#indicadores", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            searchResultLimit: -1, // Sin límite en resultados
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            minMatchCharLength: 1,
            placeholderValue: "Seleccione indicadores",
        });

        // Sincronizar selección de indicadores con valores
        const indicadoresSelect = document.getElementById('indicadores');
        const valoresInput = document.getElementById('indicadores_valores');

        if (indicadoresSelect && valoresInput) {
            indicadoresSelect.addEventListener('change', function() {
                const selectedOptions = Array.from(indicadoresSelect.selectedOptions);
                const valores = selectedOptions.map(option => window.parametrosMap[option.value]);
                valoresInput.value = JSON.stringify(valores);
                console.log('Valores sincronizados:', valores);
            });
        }




        // Aplicar estilos con Tailwind
        const inner = document.querySelector('.choices__inner');
        if (inner) {
            inner.classList.add(
                'bg-white', 'border', 'border-gray-300', 'rounded-lg',
                'px-3', 'py-2', 'focus:ring', 'focus:ring-blue-200', 'text-gray-700'
            );
        }

        const dropdown = document.querySelector('.choices__list--dropdown');
        if (dropdown) {
            dropdown.classList.add('bg-white', 'shadow-lg', 'rounded-lg', 'border', 'border-gray-200');
        }
    });



    $(function() {
        $('#fechaRegistro').daterangepicker({
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
            $("#fechaRegistro").val(fecha);
        });
    });

    function preventBackNavigation() {
        if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            window.location.href = '<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'view', $idAux]); ?>';
        }
    }



    document.addEventListener("DOMContentLoaded", () => {
        const riesgosVulnerabilidad = document.getElementById('riesgovulnerabilidad');
        const riesgosSalud = document.getElementById('riesgosalud');
        const puntuacionFamilia = document.getElementById('puntuacionfamilia');
        const valoracionFamilia = document.getElementById('valoracionfamilia');
        const opcionesResponsableFamilia = <?= json_encode($opciones) ?>;
        console.log(row.responsableFamilia);

        function calculateSum() {
            let sum = 0;

            // Sumar valores seleccionados en riesgos de vulnerabilidad
            if (riesgosVulnerabilidad) {
                const selectedOptions = Array.from(riesgosVulnerabilidad.selectedOptions);
                sum += selectedOptions.reduce((acc, option) => acc + parseInt(option.value || 0, 10), 0);
            }

            // Sumar valores seleccionados en riesgos de salud
            if (riesgosSalud) {
                const selectedOptions = Array.from(riesgosSalud.selectedOptions);
                sum += selectedOptions.reduce((acc, option) => acc + parseInt(option.value || 0, 10), 0);
            }

            // Actualizar el campo de puntuación
            if (puntuacionFamilia) {
                puntuacionFamilia.value = sum;
            }

            if (valoracionFamilia) {
                // Actualizar la valoración basada en la puntuación
                if (sum < 3) {
                    valoracionFamilia.value = 'Riesgo Bajo';
                } else if (sum >= 3 && sum < 5) {
                    valoracionFamilia.value = 'Riesgo Medio';
                } else if (sum >= 5) {
                    valoracionFamilia.value = 'Riesgo Alto';
                } else {
                    valoracionFamilia.value = '';
                }
            }
        }

        // Escuchar cambios en ambos selectores
        if (riesgosVulnerabilidad) {
            riesgosVulnerabilidad.addEventListener('change', calculateSum);
        }
        if (riesgosSalud) {
            riesgosSalud.addEventListener('change', calculateSum);
        }
    });
    // Configuración Fecha
    document.addEventListener("DOMContentLoaded", () => {
        const fechaInput = document.getElementById('fechaRegistro');
        if (fechaInput) {
            fechaInput.addEventListener('focus', () => {
                fechaInput.type = 'date';
            });
            fechaInput.addEventListener('blur', () => {
                if (!fechaInput.value) {
                    fechaInput.type = 'text';
                }
            });
        }
    });


    document.addEventListener("DOMContentLoaded", () => {
        const puntuacionFamilia = document.getElementById('puntuacionfamilia');



        function updateValoracionFamilia() {
            if (puntuacionFamilia && valoracionFamilia) {
                const puntuacion = parseFloat(puntuacionFamilia.value) || 0;

                if (puntuacion < 3) {
                    valoracionFamilia.value = 'Riesgo Bajo';
                } else if (puntuacion >= 3 && puntuacion < 5) {
                    valoracionFamilia.value = 'Riesgo Medio';
                } else if (puntuacion >= 5) {
                    valoracionFamilia.value = 'Riesgo Alto';
                } else {
                    valoracionFamilia.value = '';
                }
            }
        }

        // Escuchar cambios en el campo de puntuación
        if (puntuacionFamilia) {
            puntuacionFamilia.addEventListener('input', updateValoracionFamilia); // Use 'input' for real-time updates
        }

        // Llamar la función al cargar la página para inicializar el valor
        updateValoracionFamilia();
    });


    function addRow() {
        var tbody = document.getElementById('actividaddesarrollar_tbody');
        var index = parseInt(tbody.getAttribute('data-index'), 10);
        var row = document.createElement('tr');
        row.innerHTML = ''

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

    let rows = [];
    let expandedRows = new Set();
    let rowChoicesInstances = {}; // Almacenar instancias de Choices.js por fila

    function guardarRowsEnObservacion() {
        const obsField = document.querySelector('[name="data[Observacion][actividaddesarrollar]"]');
        if (obsField) {
            obsField.value = JSON.stringify(rows);
        }
    }

    function inicializarRowsDesdeObservacion() {
        const obsField = document.querySelector('[name="data[Observacion][actividaddesarrollar]"]');
        console.log('Campo actividaddesarrollar encontrado:', obsField);
        console.log('Valor del campo:', obsField ? obsField.value : 'No existe el campo');

        let deserializados = [];
        if (obsField && obsField.value && obsField.value.trim() !== '') {
            try {
                const datos = JSON.parse(obsField.value);
                console.log('Datos parseados:', datos);
                if (Array.isArray(datos) && datos.length > 0) {
                    deserializados = datos;
                    console.log('Datos cargados correctamente:', deserializados);
                }
            } catch (e) {
                console.error('Error al parsear actividaddesarrollar:', e);
            }
        }

        // SIEMPRE crear una fila vacía al inicio para que el usuario llene
        const filaVacia = {
            id: Date.now().toString(),
            situacionesPriorizadas: "",
            logrosAlcanzados: "",
            responsableFamilia: "",
            fechaCompromiso: "",
            fechaSeguimiento: "",
            seguimientoCompromiso: "",
            objetivoCortoPlazo: [], // Array de keys
            resultadosEsperados: [], // Array de values
            estado: "pendiente",
        };

        // Si hay datos guardados, agregarlos DESPUÉS de la fila vacía (colapsados)
        if (deserializados.length > 0) {
            rows = [filaVacia, ...deserializados];
            // Solo expandir la fila vacía (la primera)
            expandedRows = new Set([filaVacia.id]);
            console.log('Fila vacía creada + datos existentes colapsados. Total filas:', rows.length);
        } else {
            // Si no hay datos, solo la fila vacía
            rows = [filaVacia];
            expandedRows = new Set([filaVacia.id]);
            console.log('Solo fila vacía creada.');
        }
    }

    // Utility functions
    function getEstadoColor(estado) {
        switch (estado) {
            case "alcanzado":
                return "badge-alcanzado"
            case "pendiente":
                return "badge-pendiente"
            case "en-proceso":
                return "badge-en-proceso"
            default:
                return ""
        }
    }

    function getEstadoText(estado) {
        switch (estado) {
            case "alcanzado":
                return "Logro alcanzado"
            case "pendiente":
                return "Pendiente"
            case "en-proceso":
                return "En proceso"
            default:
                return estado
        }
    }

    // Row operations
    function addRow() {
        const newRow = {
            id: Date.now().toString(),
            situacionesPriorizadas: "",
            logrosAlcanzados: "",
            responsableFamilia: "",
            fechaCompromiso: "",
            fechaSeguimiento: "",
            seguimientoCompromiso: "",
            objetivoCortoPlazo: [], // Array de keys
            resultadosEsperados: [], // Array de values
            estado: "pendiente",
        }
        rows.push(newRow)
        expandedRows = new Set([newRow.id])
        guardarRowsEnObservacion()
        render()
    }

    function removeRow(id) {
        if (rows.length > 1) {
            rows = rows.filter((row) => row.id !== id)
            expandedRows.delete(id)
            guardarRowsEnObservacion()
            render()
        }
    }

    function removeLastRow() {
        if (rows.length > 1) {
            const lastId = rows[rows.length - 1].id
            expandedRows.delete(lastId)
            rows = rows.slice(0, -1)
            guardarRowsEnObservacion()
            render()
        }
    }

    function toggleRow(id) {
        if (expandedRows.has(id)) {
            expandedRows.delete(id)
        } else {
            expandedRows.add(id)
        }
        render()
    }

    function updateRow(id, field, value) {
        const row = rows.find((r) => r.id === id)
        if (row) {
            row[field] = value
        }
        guardarRowsEnObservacion();
    }

    const opcionesResponsableFamilia = <?= json_encode($opciones) ?>;

    function renderOpciones(selectedId = '') {
        let html = `<option value="">Seleccione una persona</option>`;

        for (const id in opcionesResponsableFamilia) {
            const selected = id == selectedId ? 'selected' : '';
            html += `<option value="${id}" ${selected}>
                    ${opcionesResponsableFamilia[id]}
                 </option>`;
        }

        return html;
    }

    // Opciones para indicadores: muestra KEYS, guarda KEYS
    function renderIndicadoresOptions(selected = []) {
        const map = window.parametrosMap || {};
        console.log('renderIndicadoresOptions - map completo:', map);
        console.log('renderIndicadoresOptions - seleccionados (keys):', selected);
        let html = "";

        // Iterar sobre el map para obtener key-value pairs
        Object.entries(map).forEach(([key, value]) => {
            // Comparar con las KEYS seleccionadas
            const sel = (Array.isArray(selected) && selected.includes(key)) ? 'selected' : '';
            // Mostrar KEY en texto, guardar KEY en value
            html += `<option value="${key}" ${sel}>${key}</option>`;
        });

        console.log('HTML generado:', html.substring(0, 200));
        return html;
    }

    // Maneja cambio en indicadores por fila: extrae KEYS y mapea a VALUES
    function handleIndicadoresChange(rowId, selectEl) {
        const map = window.parametrosMap || {};

        // Obtener las KEYS seleccionadas (están en option.value)
        const keys = Array.from(selectEl.selectedOptions).map(o => o.value);

        // Mapear las KEYS a sus VALUES correspondientes
        const valores = keys.map(k => map[k]);

        console.log('handleIndicadoresChange - map:', map);
        console.log('handleIndicadoresChange - keys seleccionadas:', keys);
        console.log('handleIndicadoresChange - values mapeados:', valores);

        // Guardar keys en objetivoCortoPlazo y values en resultadosEsperados
        updateRow(rowId, 'objetivoCortoPlazo', keys);
        updateRow(rowId, 'resultadosEsperados', valores);
        render();
    }

    // Inicializar Choices.js en los selects de indicadores por fila
    function initializeRowChoices() {
        // Destruir instancias previas
        Object.values(rowChoicesInstances).forEach(instance => {
            if (instance && instance.destroy) {
                instance.destroy();
            }
        });
        rowChoicesInstances = {};

        // Crear nuevas instancias para cada fila expandida
        rows.forEach(row => {
            const selectId = `indicadores_row_${row.id}`;
            const selectEl = document.getElementById(selectId);

            if (selectEl && expandedRows.has(row.id)) {
                console.log('Inicializando Choices para:', selectId);
                try {
                    rowChoicesInstances[row.id] = new Choices(selectEl, {
                        searchEnabled: true,
                        searchChoices: true,
                        removeItemButton: true,
                        itemSelectText: '',
                        shouldSort: false,
                        searchPlaceholderValue: "Escriba para filtrar...",
                        maxItemCount: -1,
                        removeItems: true,
                        duplicateItemsAllowed: false,
                        placeholder: true,
                        placeholderValue: "Seleccione objetivos corto plazo",
                    });

                    // Agregar evento para sincronizar cambios
                    selectEl.addEventListener('change', function() {
                        handleIndicadoresChange(row.id, this);
                    });
                } catch (e) {
                    console.error('Error al inicializar Choices:', e);
                }
            }
        });
    }


    function renderDesktopView() {
        const tableBody = document.getElementById("tableBody")
        tableBody.innerHTML = ""


        rows.forEach((row, index) => {
            const isExpanded = expandedRows.has(row.id)
            const tr = document.createElement("tr")
            tr.className = "hover:bg-gray-50 transition-colors"

            const cargados_personas = <?= json_encode($opciones) ?>;
            let convetir = JSON.stringify(cargados_personas);
            convetir = JSON.parse(convetir);
            console.log(convetir[0]);

            if (isExpanded) {
                tr.innerHTML = `
            <div class="w-full border border-gray-300 rounded-lg my-4">
                <div class="px-3 py-3 text-center bg-teal-100 rounded-t-lg flex items-center justify-center ">
                    <button type="button" class="btn-icon" onclick="toggleRow('${row.id}')">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
                        </svg>
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 pb-4">

                    <div class="col-span-2 text-md font-semibold my-2 px-4">
                        <div class="flex items-center mb-2">
                            <label for="direccion" class="font-semibold">Situaciones Priorizadas</label>
                        </div>
                        <textarea 
                        rows="3" 
                        placeholder="Describe las situaciones priorizadas..." 
                        onchange="updateRow('${row.id}', 'situacionesPriorizadas', this.value)" 
                        class="ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 text-gray-700" 
                        style="height:100px; font-size: 15px; width:100%">${row.situacionesPriorizadas}</textarea>

                    </div>

                    <div class="col-span-2 text-md font-semibold my-2 px-4">
                        <div class="flex items-center mb-2">
                            <label for="direccion" class="font-semibold">Logros Alcanzados</label>
                        </div>
                        <textarea 
                        rows="3" 
                        placeholder="Describe los logros alcanzados..." 
                        onchange="updateRow('${row.id}', 'logrosAlcanzados', this.value)" 
                        class="ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 text-gray-700" 
                        style="height:100px; font-size: 15px; width:100%">${row.logrosAlcanzados}</textarea>

                    </div>

                    <div class="col-span-2 text-md font-semibold my-2 px-4">
                        <div class="flex items-center mb-4">
                            <label class="font-semibold">Responsable de la familia</label>
                        </div>

                    <select
                        onchange="updateRow('${row.id}', 'responsableFamilia', this.value)"
                        class="border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 text-sm text-gray-700">
                        ${renderOpciones(row.responsableFamilia)}
                    </select>
                    </div>
                
                    <div class="col-span-2 sm:col-span-1 text-md font-semibold my-2 px-4">
                        <div class="flex items-center mb-4">
                            <label for="actividad" class="font-semibold">Fecha de compromiso</label>
                        </div>
                        <input type="date" 
                            value="${row.fechaCompromiso}" 
                            onchange="updateRow('${row.id}', 'fechaCompromiso', this.value)" 
                            class="border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 text-sm text-gray-700"/>
                    </div>

                    <div class="col-span-2 sm:col-span-1 text-md font-semibold my-2 px-4">
                        <div class="flex items-center mb-4">
                            <label for="actividad" class="font-semibold">Seguimiento al compromiso</label>
                        </div>
                        <input type="date" 
                            value="${row.fechaSeguimiento}" 
                            onchange="updateRow('${row.id}', 'fechaSeguimiento', this.value)" 
                            class="border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 text-sm text-gray-700"/>
                    </div>

                    <div class="col-span-2 sm:col-span-2 text-md font-semibold my-2 px-4">
                        <div class="flex items-center mb-4">
                            <label for="actividad" class="font-semibold">Indicadores</label>
                        </div>
                        <select multiple
                            id="indicadores_row_${row.id}"
                            onchange="handleIndicadoresChange('${row.id}', this)"
                            class="border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 text-sm text-gray-700">
                            ${renderIndicadoresOptions(row.objetivoCortoPlazo || [])}
                        </select>
                    </div>

                    <div class="col-span-2 text-md font-semibold my-2 px-4">
                        <div class="flex items-center mb-2">
                            <label class="font-semibold">Estado</label>
                        </div>
                    <select
                        onchange="updateRow('${row.id}', 'estado', this.value)"
                        class="border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 text-sm text-gray-700">
                        <option value="pendiente" ${row.estado === "pendiente" ? "selected" : ""}>Pendiente</option>
                        <option value="en-proceso" ${row.estado === "en-proceso" ? "selected" : ""}>En proceso</option>
                        <option value="alcanzado" ${row.estado === "alcanzado" ? "selected" : ""}>Logro alcanzado</option>
                    </select>
                    </div>
            
                </div>
            </div>
            `
            } else {
                tr.innerHTML = `
                <div class="w-full border border-gray-300 rounded-lg flex items-center justify-between px-4 py-3 my-4">
                  <button type="button" class="btn-icon" onclick="toggleRow('${row.id}')">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                     <div class="flex items-center gap-3">
                        <span class="badge badge-outline">#${index + 1}</span>
                        <span class="badge ${getEstadoColor(row.estado)}">${getEstadoText(row.estado)}</span>
                        <span class="text-sm text-gray-600 truncate flex-1">${row.situacionesPriorizadas || "Sin información"}</span>
                        ${row.responsableFamilia ? `<span class="text-sm font-medium">${opcionesResponsableFamilia[row.responsableFamilia]}</span>` : ""}
                    </div>
                     <button class="btn-icon destructive" onclick="removeRow('${row.id}')" ${rows.length === 1 ? "disabled" : ""}>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </button>
                </div>
            `
            }

            tableBody.appendChild(tr)
        })
    }

    function render() {
        renderDesktopView()

        // Update button states
        document.getElementById("removeLastBtn").disabled = rows.length === 1
        // Inicializar Choices.js en los selects dinámicos después de un pequeño delay
        setTimeout(() => {
            initializeRowChoices();
        }, 100);
    }

    // Inicializar datos al cargar
    inicializarRowsDesdeObservacion();

    // Event listeners
    document.getElementById("addRowBtn").addEventListener("click", addRow)
    document.getElementById("removeLastBtn").addEventListener("click", removeLastRow)

    // Initial render
    render()

    // --- Disentimiento Table Logic ---
    let disentRows = [];
    let disentIdCounter = 1;

    function renderDesktopViewDisentimiento() {
        const tableBody = document.getElementById("tableBodyDisentimiento");
        console.log('Renderizando tabla disentimiento. tableBody encontrado:', tableBody);
        console.log('Número de filas a renderizar:', disentRows.length);

        if (!tableBody) {
            console.error('No se encontró el elemento tableBodyDisentimiento');
            return;
        }

        tableBody.innerHTML = "";

        disentRows.forEach((row, index) => {
            console.log('Renderizando fila disentimiento:', index, row);
            const tr = document.createElement("tr");
            tr.className = "hover:bg-gray-50 transition-colors";
            tr.innerHTML = `
                            <td class="p-2">
                                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm" placeholder="Nombre" value="${row.nombre || ''}" onchange="updateDisentRow(${row.id}, 'nombre', this.value)">
                            </td>
                            <td class="p-2">
                                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm" placeholder="Documento" value="${row.documento || ''}" onchange="updateDisentRow(${row.id}, 'documento', this.value)">
                            </td>
                            <td class="p-2">
                                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm" placeholder="Rol" value="${row.rol || ''}" onchange="updateDisentRow(${row.id}, 'rol', this.value)">
                            </td>
                            <td class="p-2">
                                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm" placeholder="Motivo" value="${row.motivo || ''}" onchange="updateDisentRow(${row.id}, 'motivo', this.value)">
                            </td>
                            <td class="p-2 text-center">
                                <button type="button" class="btn-icon destructive" onclick="removeDisentRow(${row.id})" ${disentRows.length === 1 ? "disabled" : ""} title="Eliminar fila">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </td>
                        `;
            tableBody.appendChild(tr);
        });

        console.log('Tabla disentimiento renderizada. Filas en DOM:', tableBody.children.length);
    }

    function addDisentRow() {
        disentRows.push({
            id: disentIdCounter++,
            nombre: '',
            documento: '',
            rol: '',
            motivo: ''
        });
        renderDesktopViewDisentimiento();
        guardarDisentimientoEnHidden();
    }

    function removeDisentRow(id) {
        if (disentRows.length === 1) return;
        disentRows = disentRows.filter(row => row.id !== id);
        renderDesktopViewDisentimiento();
        guardarDisentimientoEnHidden();
    }

    function updateDisentRow(id, field, value) {
        const idx = disentRows.findIndex(row => row.id === id);
        if (idx !== -1) {
            disentRows[idx][field] = value;
            guardarDisentimientoEnHidden();
        }
    }

    function guardarDisentimientoEnHidden() {
        const hidden = document.getElementById('disentimiento_hidden');
        if (hidden) {
            // Guardar todas las filas excepto las completamente vacías (excepto la primera fila)
            const toSave = disentRows
                .filter((row, idx) => {
                    // La primera fila siempre se mantiene para el formulario, pero no se guarda si está vacía
                    if (idx === 0 && !row.nombre && !row.documento && !row.rol && !row.motivo) {
                        return false;
                    }
                    // El resto de filas se guardan si tienen algún dato
                    return row.nombre || row.documento || row.rol || row.motivo;
                })
                .map(row => ({
                    nombre: row.nombre || '',
                    documento: row.documento || '',
                    rol: row.rol || '',
                    motivo: row.motivo || ''
                }));

            hidden.value = JSON.stringify(toSave);
            console.log('Disentimiento guardado:', toSave);
        }
    }

    function inicializarDisentimientoDesdeHidden() {
        const hidden = document.getElementById('disentimiento_hidden');
        console.log('Campo disentimiento encontrado:', hidden);
        console.log('Valor del campo:', hidden ? hidden.value : 'No existe el campo');

        let deserializados = [];
        if (hidden && hidden.value && hidden.value.trim() !== '') {
            try {
                const datos = JSON.parse(hidden.value);
                console.log('Datos disentimiento parseados:', datos);
                if (Array.isArray(datos) && datos.length > 0) {
                    deserializados = datos.map(row => ({
                        ...row,
                        id: disentIdCounter++
                    }));
                    console.log('Datos disentimiento cargados correctamente:', deserializados);
                }
            } catch (e) {
                console.error('Error al parsear disentimiento:', e);
            }
        }

        // SIEMPRE crear una fila vacía al inicio para que el usuario llene
        const filaVacia = {
            id: disentIdCounter++,
            nombre: '',
            documento: '',
            rol: '',
            motivo: ''
        };

        // Si hay datos guardados, agregarlos DESPUÉS de la fila vacía
        if (deserializados.length > 0) {
            disentRows = [filaVacia, ...deserializados];
            console.log('Fila vacía disentimiento creada + datos existentes. Total filas:', disentRows.length);
        } else {
            // Si no hay datos, solo la fila vacía
            disentRows = [filaVacia];
            console.log('Solo fila vacía disentimiento creada.');
        }

        renderDesktopViewDisentimiento();
    }

    // Inicializar tabla disentimiento al cargar la página
    inicializarDisentimientoDesdeHidden();

    // Configurar event listeners para botones de disentimiento
    const addBtnDisent = document.getElementById('addRowBtnDisentimiento');
    if (addBtnDisent) {
        addBtnDisent.addEventListener('click', addDisentRow);
    }

    const removeBtnDisent = document.getElementById('removeLastBtnDisentimiento');
    if (removeBtnDisent) {
        removeBtnDisent.addEventListener('click', () => {
            if (disentRows.length > 1) {
                disentRows.pop();
                renderDesktopViewDisentimiento();
                guardarDisentimientoEnHidden();
            }
        });
    }
</script>