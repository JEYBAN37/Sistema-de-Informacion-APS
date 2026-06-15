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

<?php echo $this->Form->hidden('id'); ?>
<?php echo $this->Form->hidden('familia_id'); ?>
<?php echo $this->Form->hidden('responsable_id'); ?>
<?php echo $this->Form->hidden('disentimiento'); ?>
<?php echo $this->Form->hidden('actividaddesarrollar'); ?>


<div class="max-w-6xl mx-auto p-18">

    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fas fa-home text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>

            <div class="ml-4">
                <h1 class="text-xl font-semibold">Análisis del riesgo familiar</h1>
                <p class="text-gray-500">Este es el resumen de la ficha familiar completado en la observacion si hay campos vacios debes actualizar <a href="<?php
                                                                                                                                                                echo $this->Html->url(['action' => 'edit', $this->request->data['Observacion']['id']]);
                                                                                                                                                                ?>" class="text-teal-600 hover:underline font-semibold">click aqui</a> </p>
            </div>

        </div>

        <!-- Contenido a imprimir -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <!-- Encabezado con logo y datos -->
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            RESUMEN DE FICHA FAMILIAR
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Resultado Ecomapa</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($this->request->data['Observacion']['resultadoEcomapa']); ?></td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Resultado Familiograma</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php
                            $canalizacionRaw = $this->request->data['Observacion']['resultadoFamiliograma'];

                            if ($canalizacionRaw) {
                                if (!empty($canalizacionRaw)) {
                                    echo '<ul class="list-disc list-inside space-y-1">';
                                    foreach ($canalizacionRaw as $parte) {
                                        $label = isset($riesgosalud[$parte]) ? $riesgosalud[$parte] : $parte;
                                        echo '<li>' . h($label) . '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    $label = isset($riesgosalud[$canalizacionRaw]) ? $riesgosalud[$canalizacionRaw] : $canalizacionRaw;
                                    echo h($label);
                                }
                            } else {
                                echo h('Campo vacío');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Se identificó riesgos en salud</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php
                            $canalizacionRaw = $this->request->data['Observacion']['menoresriegosalud'];

                            if ($canalizacionRaw) {
                                if (!empty($canalizacionRaw)) {
                                    echo '<ul class="list-disc list-inside space-y-1">';
                                    foreach ($canalizacionRaw as $parte) {
                                        $label = isset($riesgosalud[$parte]) ? $riesgosalud[$parte] : $parte;
                                        echo '<li>' . h($label) . '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo h('Campo vacío');
                                }
                            } else {
                                echo h('Campo vacío');
                            }
                            ?>

                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Se identificó algún riesgo de vulnerabilidad</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php
                            $canalizacionRaw = $this->request->data['Observacion']['riesgovulnerabilidad'];

                            if ($canalizacionRaw) {
                                if (!empty($canalizacionRaw)) {
                                    echo '<ul class="list-disc list-inside space-y-1">';
                                    foreach ($canalizacionRaw as $parte) {
                                        $label = isset($riesgovulnerabilidad[$parte]) ? $riesgovulnerabilidad[$parte] : $parte;
                                        echo '<li>' . h($label) . '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo h('Campo vacío');
                                }
                            } else {
                                echo h('Campo vacío');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Valoración de riesgo familia</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php
                            $puntuacionFamilia = isset($this->request->data['Observacion']['puntuacionfamilia'])
                                ? $this->request->data['Observacion']['puntuacionfamilia']
                                : '';
                            echo h($puntuacionFamilia !== '' ? $puntuacionFamilia : 'Campo vacío');
                            ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Clasificación de la familia</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php
                            $puntuacionFamilia = isset($this->request->data['Observacion']['valoracionfamilia'])
                                ? $this->request->data['Observacion']['valoracionfamilia']
                                : '';
                            echo h($puntuacionFamilia !== '' ? $puntuacionFamilia : 'Campo vacío');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Fortalezas de la familia</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php
                            $canalizacionRaw = $this->request->data['Observacion']['fortalezas'];

                            if ($canalizacionRaw) {
                                if (!empty($canalizacionRaw)) {
                                    echo '<ul class="list-disc list-inside space-y-1">';
                                    foreach ($canalizacionRaw as $parte) {
                                        $label = isset($fortalezas[$parte]) ? $fortalezas[$parte] : $parte;
                                        echo '<li>' . h($label) . '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo h('Campo vacío');
                                }
                            } else {
                                echo h('Campo vacío');
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                    'data-maxlength' => 1000,
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

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
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


            <div class="pt-2 gap-4 col-span-2 md:flex md:flex-row">
                <!-- Botón -->
                <div class="w-full p-2">
                    <button name="btn" value="Guardar" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
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
                    <button name="btn" value="familia" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                                <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                                <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                            </svg>
                        </span>
                        Guardar e ir a Familia
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
    /**
     * ─────────────────────────────────────────────────────────────
     *  CONFIGURACIÓN GLOBAL — inyectada desde PHP una sola vez
     * ─────────────────────────────────────────────────────────────
     *  En tu view de CakePHP reemplaza este bloque por:
     *
    const APP_CONFIG = {
     *      parametrosMap          : <?= json_encode($parametrosDisplay) ?>,
     *      opcionesResponsableFamilia : <?= json_encode($opciones) ?>,
     *      opcionesResponsables   : <?= json_encode($responsables) ?>,
     *      urlSalida              : '<?php echo $this->Html->url(["controller" => "Familias", "action" => "view", $idAux]); ?>',
     *  };
     */
    const APP_CONFIG = {
        parametrosMap: <?= json_encode($parametrosDisplay) ?>,
        opcionesResponsableFamilia: <?= json_encode($opciones) ?>,
        opcionesResponsables: <?= json_encode($responsables) ?>,
        urlSalida: '<?= $this->Html->url(["controller" => "Familias", "action" => "view", $idAux]) ?>',
    };

    // ─────────────────────────────────────────────────────────────
    //  UTILIDADES COMPARTIDAS
    // ─────────────────────────────────────────────────────────────

    /**
     * Crea un selector Choices.js con configuración estándar.
     * Se usa para todos los <select> estilizados del formulario.
     */
    function crearChoices(selector, placeholder) {
        // ← Verificar que el elemento existe antes de inicializar
        const el = typeof selector === 'string' ?
            document.querySelector(selector) :
            selector;

        if (!el) return null; // ← no lanza error, continúa normalmente

        return new Choices(el, {
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
            placeholderValue: placeholder,
        });
    }

    /**
     * Serializa un array de filas y lo guarda en un campo del DOM.
     * @param {string} selector  - Selector CSS o ID del campo hidden
     * @param {Array}  filas     - Array de objetos a guardar como JSON
     */
    function guardarEnCampo(selector, filas) {
        const campo = document.querySelector(`[name="${selector}"]`) ||
            document.getElementById(selector);
        if (campo) campo.value = JSON.stringify(filas);
    }

    /**
     * Fábrica genérica de tabla dinámica.
     * Encapsula la lógica de agregar / eliminar / actualizar filas
     * para evitar duplicar el mismo código entre tablas.
     *
     * @param {Object} config
     *   - filaVacia  {Object}   Objeto con los campos iniciales de una fila nueva
     *   - onRender   {Function} Se llama con (filas[]) después de cada cambio
     *   - onGuardar  {Function} Se llama con (filas[]) para persistir el estado
     */
    function crearTabla({
        filaVacia,
        onRender,
        onGuardar
    }) {
        let filas = [];
        let contador = 1;

        function _nuevoId() {
            return String(contador++);
        } // ← siempre string
        function _render() {
            onRender(filas);
        }

        function _guardar() {
            onGuardar(filas);
        }

        return {
            getFilas() {
                return filas;
            },

            inicializar(datos = []) {
                if (datos.length > 0) {
                    filas = datos.map(d => ({
                        ...filaVacia,
                        ...d,
                        id: _nuevoId()
                    }));
                } else {
                    filas = [{
                        ...filaVacia,
                        id: _nuevoId()
                    }];
                }
                _render();
            },

            agregar() {
                filas.push({
                    ...filaVacia,
                    id: _nuevoId()
                });
                _render();
                _guardar();
            },

            eliminar(id) {
                if (filas.length <= 1) return;
                filas = filas.filter(f => f.id !== String(id)); // ← String()
                _render();
                _guardar();
            },

            eliminarUltima() {
                if (filas.length <= 1) return;
                filas = filas.slice(0, -1);
                _render();
                _guardar();
            },

            actualizar(id, campo, valor) {
                const fila = filas.find(f => f.id === String(id)); // ← String()
                if (fila) fila[campo] = valor;
                _guardar();
            },
        };
    }

    // ─────────────────────────────────────────────────────────────
    //  HELPERS DE RENDER — generan HTML de <option>
    // ─────────────────────────────────────────────────────────────

    function renderOpciones(mapa, selectedId = '', placeholder = 'Seleccione una persona') {
        let html = `<option value="">${placeholder}</option>`;
        for (const [id, nombre] of Object.entries(mapa)) {
            html += `<option value="${id}" ${id == selectedId ? 'selected' : ''}>${nombre}</option>`;
        }
        return html;
    }

    function renderIndicadoresOptions(selected = []) {
        return Object.entries(APP_CONFIG.parametrosMap)
            .map(([key]) =>
                `<option value="${key}" ${selected.includes(key) ? 'selected' : ''}>${key}</option>`
            ).join('');
    }

    // ─────────────────────────────────────────────────────────────
    //  TABLA ACTIVIDADES
    // ─────────────────────────────────────────────────────────────

    const FILA_ACTIVIDAD_VACIA = {
        situacionesPriorizadas: "",
        logrosAlcanzados: "",
        responsableFamilia: "",
        responsableEBS: "",
        fechaCompromiso: "",
        fechaSeguimiento: "",
        seguimientoCompromiso: "",
        objetivoCortoPlazo: [],
        resultadosEsperados: [],
        estado: "pendiente",
    };

    // Estado de filas expandidas
    let expandedRows = new Set();
    let rowChoicesInstances = {};

    function getEstadoColor(estado) {
        const mapa = {
            alcanzado: "badge-alcanzado",
            pendiente: "badge-pendiente",
            "en-proceso": "badge-en-proceso"
        };
        return mapa[estado] || "";
    }

    function getEstadoText(estado) {
        const mapa = {
            alcanzado: "Logro alcanzado",
            pendiente: "Pendiente",
            "en-proceso": "En proceso"
        };
        return mapa[estado] || estado;
    }

    function handleIndicadoresChange(rowId, selectEl) {
        const map = APP_CONFIG.parametrosMap;
        const keys = Array.from(selectEl.selectedOptions).map(o => o.value);
        tablaActividades.actualizar(rowId, 'objetivoCortoPlazo', keys);
        tablaActividades.actualizar(rowId, 'resultadosEsperados', keys.map(k => map[k]));
    }

    function initializeRowChoices() {
        // Destruir instancias previas
        Object.values(rowChoicesInstances).forEach(i => i?.destroy?.());
        rowChoicesInstances = {};

        tablaActividades.getFilas().forEach(row => {
            if (!expandedRows.has(row.id)) return;

            const selIndicadores = document.getElementById(`indicadores_row_${row.id}`);
            const selResponsable = document.getElementById(`responsable_row_${row.id}`);

            if (selIndicadores) {
                rowChoicesInstances[`ind_${row.id}`] = crearChoices(selIndicadores, "Seleccione los indicadores");
                selIndicadores.addEventListener('change', function() {
                    handleIndicadoresChange(row.id, this);
                });
            }

            if (selResponsable) {
                rowChoicesInstances[`resp_${row.id}`] = crearChoices(selResponsable, "Seleccione el responsable");
                selResponsable.addEventListener('change', function() {
                    tablaActividades.actualizar(row.id, 'responsableEBS', this.value);
                });
            }
        });
    }

    function renderActividades(filas) {
        const tableBody = document.getElementById("tableBody");
        if (!tableBody) return;
        tableBody.innerHTML = "";

        // ← Destruir todos los CKEditor antes de limpiar el DOM
        filas.forEach(row => destruirCKEditorFila(row.id));

        filas.forEach((row, index) => {
            const isExpanded = expandedRows.has(row.id);
            const tr = document.createElement("tr");
            tr.className = "hover:bg-gray-50 transition-colors";
            tr.innerHTML = isExpanded ?
                renderFilaExpandida(row) :
                renderFilaColapsada(row, index, filas.length);
            tableBody.appendChild(tr);
        });

        document.getElementById("removeLastBtn").disabled = filas.length === 1;

        // ← Inicializar CKEditor y Choices después de que el DOM esté listo
        setTimeout(() => {
            filas.forEach(row => {
                if (expandedRows.has(row.id)) {
                    inicializarCKEditorFila(row.id);
                }
            });
            initializeRowChoices();
        }, 150); // ← un poco más de delay para que CKEditor cargue bien
    }

    function renderFilaExpandida(row) {
        return `
    <div class="w-full border border-gray-300 rounded-lg my-4">
        <div class="px-3 py-3 text-center bg-teal-100 rounded-t-lg flex items-center justify-center">
            <button type="button" class="btn-icon" onclick="toggleRow('${row.id}')">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 pb-4">

            <div class="col-span-2 text-md font-semibold my-2 px-4">
                <label class="font-semibold">Situacion a Priorizar</label>
                <!-- ← ID único para CKEditor -->
                <textarea id="situaciones_${row.id}" rows="3"
                    placeholder="Describe las situaciones priorizadas..."
                    class="border rounded-lg w-full p-2 text-gray-700"
                    style="height:100px; font-size:15px; width:100%">${row.situacionesPriorizadas || ''}</textarea>
            </div>

            <div class="col-span-2 text-md font-semibold my-2 px-4">
                <label class="font-semibold">Logros por Alcanzar</label>
                <!-- ← ID único para CKEditor -->
                <textarea id="logros_${row.id}" rows="3"
                    placeholder="Describe los logros por alcanzar..."
                    class="border rounded-lg w-full p-2 text-gray-700"
                    style="height:100px; font-size:15px; width:100%">${row.logrosAlcanzados || ''}</textarea>
            </div>

            <div class="col-span-2 sm:col-span-1 text-md font-semibold my-2 px-4">
                <label class="font-semibold mb-4 block">Persona a Intervenir</label>
                <select onchange="tablaActividades.actualizar('${row.id}', 'responsableFamilia', this.value)"
                    class="border border-gray-300 rounded-lg w-full p-2 text-sm text-gray-700">
                    ${renderOpciones(APP_CONFIG.opcionesResponsableFamilia, row.responsableFamilia)}
                </select>
            </div>

            <div class="col-span-2 sm:col-span-1 text-md font-semibold my-2 px-4">
                <label class="font-semibold mb-4 block">Responsable de la Intervención</label>
                <select id="responsable_row_${row.id}"
                    class="border border-gray-300 rounded-lg w-full p-2 text-sm text-gray-700">
                    ${renderOpciones(APP_CONFIG.opcionesResponsables, row.responsableEBS)}
                </select>
            </div>

            <div class="col-span-2 sm:col-span-1 text-md font-semibold my-2 px-4">
                <label class="font-semibold mb-4 block">Fecha de compromiso</label>
                <input type="date" value="${row.fechaCompromiso}"
                    onchange="tablaActividades.actualizar('${row.id}', 'fechaCompromiso', this.value)"
                    class="border border-gray-300 rounded-lg w-full p-2 text-sm text-gray-700"/>
            </div>

            <div class="col-span-2 sm:col-span-1 text-md font-semibold my-2 px-4">
                <label class="font-semibold mb-4 block">Seguimiento al compromiso</label>
                <input type="date" value="${row.fechaSeguimiento}"
                    onchange="tablaActividades.actualizar('${row.id}', 'fechaSeguimiento', this.value)"
                    class="border border-gray-300 rounded-lg w-full p-2 text-sm text-gray-700"/>
            </div>

            <div class="col-span-2 text-md font-semibold my-2 px-4">
                <label class="font-semibold mb-4 block">Indicadores</label>
                <select multiple id="indicadores_row_${row.id}"
                    class="border border-gray-300 rounded-lg w-full p-2 text-sm text-gray-700">
                    ${renderIndicadoresOptions(row.objetivoCortoPlazo || [])}
                </select>
            </div>

            <div class="col-span-2 text-md font-semibold my-2 px-4">
                <label class="font-semibold block mb-2">Estado</label>
                <select onchange="tablaActividades.actualizar('${row.id}', 'estado', this.value)"
                    class="border border-gray-300 rounded-lg w-full p-2 text-sm text-gray-700">
                    <option value="pendiente"  ${row.estado === "pendiente"  ? "selected" : ""}>Pendiente</option>
                    <option value="en-proceso" ${row.estado === "en-proceso" ? "selected" : ""}>En proceso</option>
                    <option value="alcanzado"  ${row.estado === "alcanzado"  ? "selected" : ""}>Logro alcanzado</option>
                </select>
            </div>
        </div>
    </div>`;
    }

    function renderFilaColapsada(row, index, total) {
        const nombre = APP_CONFIG.opcionesResponsableFamilia[row.responsableFamilia] || '';
        const preview = row.situacionesPriorizadas ?
            (row.situacionesPriorizadas.length > 30 ?
                row.situacionesPriorizadas.slice(0, 30) + "..." :
                row.situacionesPriorizadas) :
            "Sin información";

        return `
    <div class="w-full border border-gray-300 rounded-lg flex items-center justify-between px-4 py-3 my-4">
        <button type="button" class="btn-icon" onclick="toggleRow('${row.id}')">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div class="flex items-center gap-3">
            <span class="badge badge-outline">#${index + 1}</span>
            <span class="badge ${getEstadoColor(row.estado)}">${getEstadoText(row.estado)}</span>
            <span class="text-sm text-gray-600 truncate flex-1">${preview}</span>
            ${nombre ? `<span class="text-sm font-medium">${nombre}</span>` : ""}
        </div>
        <button class="btn-icon destructive" onclick="tablaActividades.eliminar('${row.id}')" ${total === 1 ? "disabled" : ""}>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
        </button>
    </div>`;
    }

    function toggleRow(id) {
        if (expandedRows.has(id)) {
            destruirCKEditorFila(id); // ← destruir antes de colapsar
            expandedRows.delete(id);
        } else {
            expandedRows.add(id);
        }
        renderActividades(tablaActividades.getFilas());
    }

    // ─────────────────────────────────────────────────────────────
    //  TABLA DISENTIMIENTO
    // ─────────────────────────────────────────────────────────────

    const FILA_DISENTIMIENTO_VACIA = {
        nombre: '',
        documento: '',
        rol: '',
        motivo: ''
    };

    function renderDisentimiento(filas) {
        const tableBody = document.getElementById("tableBodyDisentimiento");
        if (!tableBody) return;
        tableBody.innerHTML = "";

        filas.forEach(row => {
            const tr = document.createElement("tr");
            tr.className = "hover:bg-gray-50 transition-colors";
            tr.innerHTML = `
            <td class="p-2">
                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm"
                    placeholder="Nombre" value="${row.nombre || ''}"
                    onchange="tablaDisentimiento.actualizar(${row.id}, 'nombre', this.value)">
            </td>
            <td class="p-2">
                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm"
                    placeholder="Documento" value="${row.documento || ''}"
                    onchange="tablaDisentimiento.actualizar(${row.id}, 'documento', this.value)">
            </td>
            <td class="p-2">
                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm"
                    placeholder="Rol" value="${row.rol || ''}"
                    onchange="tablaDisentimiento.actualizar(${row.id}, 'rol', this.value)">
            </td>
            <td class="p-2">
                <input type="text" class="border border-gray-300 rounded-lg w-full p-2 text-sm"
                    placeholder="Motivo" value="${row.motivo || ''}"
                    onchange="tablaDisentimiento.actualizar(${row.id}, 'motivo', this.value)">
            </td>
            <td class="p-2 text-center">
                <button type="button" class="btn-icon destructive"
                    onclick="tablaDisentimiento.eliminar(${row.id})"
                    ${filas.length === 1 ? "disabled" : ""}>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            </td>`;
            tableBody.appendChild(tr);
        });
    }

    function guardarDisentimiento(filas) {
        const toSave = filas.filter(r => r.nombre || r.documento || r.rol || r.motivo);
        guardarEnCampo('disentimiento_hidden', toSave);
    }

    // ─────────────────────────────────────────────────────────────
    //  INSTANCIAR TABLAS con la fábrica genérica
    // ─────────────────────────────────────────────────────────────

    const tablaActividades = crearTabla({
        filaVacia: FILA_ACTIVIDAD_VACIA, // ← sin id aquí
        onRender: renderActividades,
        onGuardar: (filas) => guardarEnCampo('data[Observacion][actividaddesarrollar]', filas),
    });

    const tablaDisentimiento = crearTabla({
        filaVacia: FILA_DISENTIMIENTO_VACIA,
        onRender: renderDisentimiento,
        onGuardar: guardarDisentimiento,
    });

    // ─────────────────────────────────────────────────────────────
    //  CKEDITOR — contador de caracteres (sin cambios, ya estaba bien)
    // ─────────────────────────────────────────────────────────────

    CKEDITOR.on('instanceReady', function(ev) {
        const editor = ev.editor;
        const textarea = editor.element.$;
        const maxChars = parseInt(textarea.getAttribute("data-maxlength") || "300");

        const counter = document.createElement("div");
        counter.className = "text-gray-600 mt-1 text-sm";
        counter.id = "charCount_" + textarea.id;
        textarea.parentNode.appendChild(counter);

        let isUpdating = false; // ← bandera anti-loop

        function updateCount() {
            if (isUpdating) return; // ← corta el loop
            const text = editor.getData().replace(/<[^>]*>/g, '');
            const remaining = maxChars - text.length;
            counter.innerHTML = `Caracteres usados: ${text.length} / ${maxChars}`;
            counter.style.color = remaining < 0 ? "red" : "gray";

            if (remaining < 0) {
                isUpdating = true; // ← activa bandera
                editor.setData(text.substring(0, maxChars)); // ← no dispara loop
                isUpdating = false; // ← desactiva bandera
            }
        }

        editor.on('key', function(evt) {
            const text = editor.getData().replace(/<[^>]*>/g, '');
            if (text.length >= maxChars && evt.data.keyCode !== 8 && evt.data.keyCode !== 46) {
                evt.cancel();
                alert(`Máximo permitido: ${maxChars} caracteres.`);
            }
        });

        editor.on('paste', function(evt) {
            const text = evt.data.dataValue.replace(/<[^>]*>/g, '');
            if (text.length > maxChars) {
                evt.cancel();
                alert(`No puedes pegar más de ${maxChars} caracteres.`);
            }
        });

        editor.on('change', updateCount); // ← solo change, no key+paste+change
        updateCount();
    });

    let ckEditorInstances = {};

    function inicializarCKEditorFila(rowId) {
        const campos = [{
                id: `situaciones_${rowId}`,
                campo: 'situacionesPriorizadas'
            },
            {
                id: `logros_${rowId}`,
                campo: 'logrosAlcanzados'
            },
        ];

        campos.forEach(({
            id,
            campo
        }) => {
            // Destruir instancia previa si existe
            if (CKEDITOR.instances[id]) {
                CKEDITOR.instances[id].destroy(true);
            }

            if (!document.getElementById(id)) return;

            const editor = CKEDITOR.replace(id, {
                toolbar: [{
                        name: 'basicstyles',
                        items: ['Bold', 'Italic', 'Underline']
                    },
                    {
                        name: 'lists',
                        items: ['BulletedList', 'NumberedList']
                    },
                    {
                        name: 'undo',
                        items: ['Undo', 'Redo']
                    },
                ],
                height: 100,
                removePlugins: 'cloudservices,easyimage', // ← evita el error cloudservices
            });

            let isUpdating = false;
            editor.on('change', function() {
                if (isUpdating) return;
                const text = editor.getData().replace(/<[^>]*>/g, '');
                tablaActividades.actualizar(rowId, campo, editor.getData());
            });

            ckEditorInstances[id] = editor;
        });
    }

    function destruirCKEditorFila(rowId) {
        [`situaciones_${rowId}`, `logros_${rowId}`].forEach(id => {
            if (CKEDITOR.instances[id]) {
                CKEDITOR.instances[id].destroy(true);
                delete ckEditorInstances[id];
            }
        });
    }







    // ─────────────────────────────────────────────────────────────
    //  INICIALIZACIÓN AL CARGAR LA PÁGINA
    // ─────────────────────────────────────────────────────────────

    $(function() {
        // Choices.js — selectores del formulario principal
        crearChoices("#ria", "Seleccione las actividades a desarrollar");
        crearChoices("#entornoafectado", "Seleccione los entornos a intervenir");
        crearChoices("#responsables", "Seleccione los responsables EBS");

        // Datepicker
        $('#fechaRegistro').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            locale: {
                format: 'YYYY-MM-DD',
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                ],
            },
        });

        // ── Tabla Actividades ──────────────────────────────────────
        const campoActividades = document.querySelector('[name="data[Observacion][actividaddesarrollar]"]');
        let datosActividades = [];
        if (campoActividades?.value?.trim()) {
            try {
                datosActividades = JSON.parse(campoActividades.value);
            } catch (e) {}
        }
        tablaActividades.inicializar(datosActividades);

        // ← Expandir primera fila si no hay datos guardados
        const primeraFila = tablaActividades.getFilas()[0];
        if (primeraFila) expandedRows.add(primeraFila.id);
        renderActividades(tablaActividades.getFilas());

        // ── Tabla Disentimiento ────────────────────────────────────
        const campoDisent = document.getElementById('disentimiento_hidden');
        let datosDisent = [];
        if (campoDisent?.value?.trim()) {
            try {
                datosDisent = JSON.parse(campoDisent.value);
            } catch (e) {}
        }
        // ← Pasar datos directamente, siempre arranca con fila vacía si no hay datos
        tablaDisentimiento.inicializar(datosDisent);

        // ── Botones Actividades ────────────────────────────────────
        document.getElementById("addRowBtn")
            ?.addEventListener("click", () => tablaActividades.agregar());
        document.getElementById("removeLastBtn")
            ?.addEventListener("click", () => tablaActividades.eliminarUltima());

        // ── Botones Disentimiento ──────────────────────────────────
        document.getElementById("addRowBtnDisentimiento")
            ?.addEventListener("click", () => tablaDisentimiento.agregar());
        document.getElementById("removeLastBtnDisentimiento")
            ?.addEventListener("click", () => tablaDisentimiento.eliminarUltima());
    });

    // ─────────────────────────────────────────────────────────────
    //  NAVEGACIÓN — confirmación al salir
    // ─────────────────────────────────────────────────────────────

    function preventBackNavigation() {
        if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            window.location.href = APP_CONFIG.urlSalida;
        }
    }
</script>