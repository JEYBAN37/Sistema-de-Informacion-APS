<?php $this->layout = 'default_familia';  ?>

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
                    '0.0' => 'Ninguno',
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
                    '0.0' => 'Ninguna',
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
                echo $this->Form->input('objetivocortoplazo', [
                    'label' => false,
                    'type' => 'textarea', // Cambiado a 'textarea'
                    'id' => 'objetivocortoplazo',
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

                // Configurar el almacenamiento de los datos seleccionados en la base de datos como un arreglo
                $this->Form->unlockField('indicadorria'); // Desbloquear el campo para que CakePHP lo procese como un arreglo
                ?>
            </div>


            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
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


        </div>
    </div>
</div>


<script type="text/javascript">
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





    document.addEventListener("DOMContentLoaded", () => {
        const riesgosVulnerabilidad = document.getElementById('riesgovulnerabilidad');
        const riesgosSalud = document.getElementById('riesgosalud');
        const puntuacionFamilia = document.getElementById('puntuacionfamilia');
        const valoracionFamilia = document.getElementById('valoracionfamilia');

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
        row.innerHTML = '' +
            '<td class="p-2">' +
            '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][situacion]" class="form-control border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700" style="resize:vertical;"></textarea>' +
            '</td>' +
            '<td class="p-2">' +
            '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][logro]" class="form-control border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700" style="resize:vertical;"></textarea>' +
            '</td>' +
            '<td class="p-2">' +
            '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][responsable]" class="form-control border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700" style="resize:vertical;"></textarea>' +
            '</td>' +
            '<td class="p-2">' +
            '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][fecha]" class="form-control border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700" style="resize:vertical;"></textarea>' +
            '</td>' +
            '<td class="p-2">' +
            '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][fechaSeguimiento]" class="form-control border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700" style="resize:vertical;"></textarea>' +
            '</td>' +
            '<td class="p-2">' +
            '<textarea name="data[Observacion][actividaddesarrollar][' + index + '][observacion]" class="form-control border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700" style="resize:vertical;"></textarea>' +
            '</td>' +
            '<td class="p-2">' +
            '<select name="data[Observacion][actividaddesarrollar][' + index + '][estado]" class="form-control border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 bg-white hover:bg-gray-50">' +
            '<option value="" class="text-gray-500">En Proceso</option>' +
            '<option value="Logro alcanzado" class="text-green-600">Logro alcanzado</option>' +
            '<option value="Logro no alcanzado" class="text-red-600">Logro no alcanzado</option>' +
            '</select>' +
            '<div class="mt-2">' +
            '<button type="button" class="btn btn-danger btn-sm bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="removeRow(this)">Eliminar</button>' +
            '</div>' +
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