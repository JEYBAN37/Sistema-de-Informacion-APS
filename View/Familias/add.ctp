<?php $this->layout = 'default_familia';
$rolOption = [
    ' ' => 'Elegir',
    'Padre' => 'Padre',
    'Madre' => 'Madre',
    'Esposo_a' => 'Esposo/Esposa/Pareja',
    'Hijo_a' => 'Hijo/Hija',
    'Abuelo_a' => 'Abuelo/Abuela',
    'Otro familiar' => 'Otro familiar'
];

$option = [
    '' => 'Elegir',
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5',
    '6' => '6'
];

$viviendaOptions = [
    '' => 'Elegir',
    'Casa' => 'Toda la Casa',
    'Apartamento' => 'En un Apartamento',
    'Pieza' => 'En una Pieza',
    'Cuarto improvisado' => 'En un Cuarto improvisado',
    'Cuarto en inquilinato' => 'En Cuarto del inquilinato',
    'Espacio improvisado' => 'En un Espacio improvisado'
];

$option_tenencia = [
    '' => 'Elegir',
    'Propia pagando' => 'Propia pagando',
    'Propia pagada' => 'Propia pagada',
    'anticresis' => 'anticresis',
    'Arriendo' => 'Arriendo',
    'Subarriendo' => 'Subarriendo',
    'Prestada' => 'Prestada sin costo'
];

$option_pertenencia = [
    '' => 'Elegir',
    'Permante' => 'Permanente',
    'Temporal' => 'Temporal',

];

$option_tiempo = [
    '' => 'Elegir',
    'Menos de un 1 mes' => 'Menos de un 1mes',
    'Entre 2 meses y 1 anio ' => 'Entre 2 meses y 1 año',
    'Entre 1 anio y 2 anio ' => 'Entre 1 año y 2 año',
    'Mas de 2 anio ' => 'Mas de 2 años'
];

$option_combustible = [
    '' => 'Elegir',
    '1.Electricidad' => 'Electricidad',
    '2.Cilindro de Gas' => 'Cilindro de Gas',
    '3.Gas domiciliario' => 'Gas domiciliario',
    '4.Carbon, leña' => 'Carbon, leña',
    '5.Gasolina' => 'Gasolina,Petroleo',
    '7.Material_Desecho' => 'Material de Desecho'
];

$option_tipofamilia = [
    '' => 'Elegir',
    '1.Nuclear biparental' => 'Nuclear',
    '2.Nuclear monoparental' => 'Nuclear monoparental',
    '7.Unipersonal' => 'Unipersonal',
    '4.Extensa' => 'Extensa',
    '5.Mixta o ampliada' => 'Mixta o ampliada'
];

$optionPoblacionEtnica = [
    '' => 'Elegir',
    'No aplica' => 'No aplica',
    'Población indígena' => 'Población indígena',
    'Población Afrocolombiano' => 'Población Afrocolombiano',
    'Población Rom' => 'Población Rom',
    'Población Raizal' => 'Raizal San Andrés y Providencia',

];
?>

<!-- Choices.js -->
<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Información de la Familia<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Modulo Familiar
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Ingresar el formulario completamente de otra manera se invalidara la ficha.
    </p>
</div>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-people-roof text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Informacion de referencia</h1>
                <p class="text-gray-500">Complementa la información de referencia de la familia.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">Nombre del Encuestado</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('nombres', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('nombres'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('nombres') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">N° de Documento</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('numerodocumento', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('numerodocumento'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numerodocumento') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">Quién atiende la visita es</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('rol', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $rolOption,
                    'label' => '',
                    'empty' => 'Selecciona rol',
                ]);

                if (!empty($this->Form->error('rol'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('rol') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="celular" class="font-semibold">Número celular de contacto</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('celular', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('celular'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('celular') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-12">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-chimney-window text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Familia</h1>
                <p class="text-gray-500">Complementa la información de la familia.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">Número de familia encuestada en la vivienda</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('hogar', [
                    'type' => 'select',
                    'id' => 'hogar',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option,
                    'label' => '',
                    'empty' => 'Selecciona número de familia',
                ]);

                if (!empty($this->Form->error('hogar'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('hogar') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">¿Su núcleo familiar dentro de la vivienda habita en: ?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('vivienda', [
                    'type' => 'select',
                    'id' => 'vivienda',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $viviendaOptions,
                    'label' => '',
                    'empty' => 'Selecciona tipo de vivienda',
                ]);

                if (!empty($this->Form->error('vivienda'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('vivienda') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">¿Tenencia de la Vivienda es?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tenencia', [
                    'type' => 'select',
                    'id' => 'tenencia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option_tenencia,
                    'label' => '',
                    'empty' => 'Selecciona tenencia de vivienda',
                ]);

                if (!empty($this->Form->error('tenencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tenencia') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="celular" class="font-semibold">¿La permanencia de las personas en la casa es?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('permanenciaresidencia', [
                    'type' => 'select',
                    'id' => 'permanenciaresidencia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option_pertenencia,
                    'label' => '',
                    'empty' => 'Selecciona permanencia de residencia',
                ]);

                if (!empty($this->Form->error('permanenciaresidencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('permanenciaresidencia') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="celular" class="font-semibold">¿Hace cuanto tiempo vive en barrio/sector?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tiemporesidencia', [
                    'type' => 'select',
                    'id' => 'tiemporesidencia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option_tiempo,
                    'label' => '',
                    'empty' => 'Selecciona permanencia de residencia',
                ]);

                if (!empty($this->Form->error('tiemporesidencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tiemporesidencia') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="celular" class="font-semibold">¿Cuál fuente principal de energía o combustible que usa para cocinar?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('combustible', [
                    'type' => 'select',
                    'id' => 'combustible',
                    'error' => false,
                    'options' => $option_combustible,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                ]);

                if (!empty($this->Form->error('combustible'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('combustible') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-12">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-chimney-window text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Composición Familiar</h1>
                <p class="text-gray-500">Complementa la información de la composición familiar.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">¿Cómo está compuesta la familia?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tipofamilia', [
                    'type' => 'select',
                    'id' => 'tipofamilia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option_tipofamilia,
                    'label' => '',
                    'empty' => 'Selecciona tipo de familia',
                ]);

                if (!empty($this->Form->error('tipofamilia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tipofamilia') . '</div>';
                }
                ?>

                <div class="relative inline-block w-full">
                    <button type="button" id="ayudaButton1" class="mt-4 bg-blue-100 text-blue-700 hover:bg-blue-200 rounded-full w-10 h-10 flex items-center justify-center" aria-label="Ayuda" aria-expanded="false">
                        ?
                    </button>

                    <div id="helpContent1" class="absolute left-0 top-16 mb-2 w-80 bg-blue-50 border border-blue-200 rounded-lg z-50 hidden shadow-lg p-4" role="dialog" aria-hidden="true">
                        <p>
                            <strong>Nuclear:</strong> constituida por los progenitores y los hijos. <br>
                            <strong>Nuclear monoparental:</strong> constituida por un solo progenitor y sus hijos. <br>
                            <strong>Unipersonal:</strong> no tiene núcleo familiar y sólo consta de una persona. <br>
                            <strong>Extensa:</strong> Compuesta por personas como tíos, primos, abuelos.
                        </p>
                    </div>
                </div>

                <script>
                    document.getElementById('ayudaButton1').addEventListener('click', function(e) {
                        var helpContent = document.getElementById('helpContent1');
                        var expanded = this.getAttribute('aria-expanded') === 'true';
                        this.setAttribute('aria-expanded', String(!expanded));
                        helpContent.classList.toggle('hidden');
                        helpContent.setAttribute('aria-hidden', String(expanded));
                        e.stopPropagation();
                    });

                    // Cerrar al hacer clic fuera
                    document.addEventListener('click', function(e) {
                        var help = document.getElementById('helpContent1');
                        var btn = document.getElementById('ayudaButton1');
                        if (!help.classList.contains('hidden') && !help.contains(e.target) && !btn.contains(e.target)) {
                            help.classList.add('hidden');
                            btn.setAttribute('aria-expanded', 'false');
                            help.setAttribute('aria-hidden', 'true');
                        }
                    });
                </script>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">¿Hacen parte de una población étnica?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('poblacionetnica', [
                    'type' => 'select',
                    'id' => 'poblacionetnica',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionPoblacionEtnica,
                    'label' => '',
                    'empty' => 'Selecciona tipo de vivienda',
                ]);

                if (!empty($this->Form->error('poblacionetnica'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('poblacionetnica') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">¿Tenencia de la Vivienda es?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tenencia', [
                    'type' => 'select',
                    'id' => 'tenencia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option_tenencia,
                    'label' => '',
                    'empty' => 'Selecciona tenencia de vivienda',
                ]);

                if (!empty($this->Form->error('tenencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tenencia') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="celular" class="font-semibold">¿La permanencia de las personas en la casa es?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('permanenciaresidencia', [
                    'type' => 'select',
                    'id' => 'permanenciaresidencia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option_pertenencia,
                    'label' => '',
                    'empty' => 'Selecciona permanencia de residencia',
                ]);

                if (!empty($this->Form->error('permanenciaresidencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('permanenciaresidencia') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="celular" class="font-semibold">¿Hace cuanto tiempo vive en barrio/sector?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tiemporesidencia', [
                    'type' => 'select',
                    'id' => 'tiemporesidencia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $option_tiempo,
                    'label' => '',
                    'empty' => 'Selecciona permanencia de residencia',
                ]);

                if (!empty($this->Form->error('tiemporesidencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tiemporesidencia') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="celular" class="font-semibold">¿Cuál fuente principal de energía o combustible que usa para cocinar?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('combustible', [
                    'type' => 'select',
                    'id' => 'combustible',
                    'error' => false,
                    'options' => $option_combustible,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                ]);

                if (!empty($this->Form->error('combustible'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('combustible') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>



<body style="font-size: 14px;">
    <?php echo $this->Form->create('Familia'); ?>
    <div class="form-group col-sm-12 ">
        <fieldset>


            <div class="grow justify-content-center" display="none" style="margin-top:20px">


                <h2 class="subtitle-general-forms">Composición
                    Familiar</h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">
                            <div class="form-group col-md-6" style="margin-top: 20px;">


                                <!-- Botón de ayuda -->




                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionCabildo = [
                                    '' => 'Elegir',
                                    'No aplica' => 'No aplica',
                                    'Resguado indígena La Laguna Pejendino' => 'Resguado indígena La Laguna Pejendino',
                                    'Cabildo indígena de Jenoy' => 'Cabildo indígena de Jenoy',
                                    'Cabildo indígena de Obonuco' => 'Cabildo indígena de Obonuco',
                                    'Cabildo indígena de Mocondino' => 'Cabildo indígena de Mocondino',
                                    'Cabildo indígena de Catambuco' => 'Cabildo indígena de Catambuco',
                                    'Cabildo indígena de Mapachico' => 'Cabildo indígena de Mapachico',
                                    'Cabildo indígena de Botanilla' => 'Cabildo indígena de Botanilla',
                                    'Cabildo indígena de Valle de Aranda' => 'Cabildo indígena de Aranda',
                                    'Resguardo Indígena Refugio del Sol' => 'Resguardo Indígena Refugio del Sol',
                                    'Kumpania Rom Pasto' => 'Kumpania Rom Pasto',
                                ];
                                echo $this->Form->input('resguardo', [
                                    'label' => '¿A cual resguado, cabildo pertenecen?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionCabildo,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>

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
                                    'label' => '¿De cuántas personas está compuesto la famlia?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $option,

                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionVulnerable = [
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
                                    'Migrante irregular' => 'Migrante irregular',
                                    'Migrante regular' => 'Migrante regular',
                                    'Habitante de calle' => 'Habitante de calle',
                                    'Otro' => 'Otro',

                                ];
                                echo $this->Form->input('poblacionvulnerable', [
                                    'label' => 'Identifique el tipo de población que hay familia',
                                    'type' => 'select',
                                    'options' => $optionVulnerable,
                                    'class' => 'form-control select-search',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'multiple' => 'multiple', // Permite selección múltiple
                                    'id' => 'poblacionvulnerable', // Agrega el atributo id para que coincida con el select en JavaScript
                                    'onChange' => 'vulnerable(this.value);', // Agrega el atributo onChange para llamar a la función JavaScript

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

                                ];
                                echo $this->Form->input('cursovidafamilia', [
                                    'label' => 'Curso de vida en el que se encuentra la familia',
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

                                <div id="popover" class="">
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
                                        Los hijos abandonan la familia para vivir de forma independiente.
                                        <br>
                                        <strong> Disolución:</strong>
                                        Separación o divorcio de la pareja.
                                    </p>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;margin-bottom: 30px;">
                                <?php
                                $option = ['' => 'Elegir', 'Si' => 'Si', 'No' => 'No', 'No sabe' => 'No sabe'];
                                echo $this->Form->input('lgtbi', [
                                    'label' => '¿En la familia hay integrantes que pertenezcan a la comunidad LGBTI?',
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
                                    '2.No' => 'No refiere',
                                    '1.Alteraciones mentales : Esquizofrenia, TAB, depresión.' => 'Alteraciones mentales : Esquizofrenia, TAB, depresión.',
                                    '1.Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.' => 'Cánceres (Mama, cuello uterino, estómago, prostata, colon, recto, pulmonar, leucemia.',
                                    '1.Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)' => 'Enfermedad cardio- cerebro- vascular: (hipertensión, infarto agudo al miocardio)',
                                    '1.Enfermedad renal ' => 'Enfermedad renal y/o cronica',
                                    '1.Enfermedad respiratoria: Asma/EPOC' => 'Enfermedad respiratoria: Asma/EPOC',
                                    '1.Diabetes' => 'Diabetes',
                                    '1.HTA' => 'Hipertensión Arterial',
                                    '1.Obesidad' => 'Obesidad',
                                    '1.Enfermedades huérfanas' => 'Enfermedades huérfanas',
                                ];

                                echo $this->Form->input('antecedenteenfermedad', [
                                    'label' => 'Antecedentes familiares de enfermedad',
                                    'type' => 'select',
                                    'options' => $optionEnferemedadAntecedentes,
                                    'class' => 'form-control select-search',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'multiple' => 'multiple', // Permite selección múltiple
                                    'id' => 'antecedenteenfermedad', // Cambiado el id para evitar duplicados
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
                                    'label' => 'Identifique el Estilo de Vida predominante en la familia',
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
                                    'No' => 'No',
                                    'Sintomatico respiratorio' => 'Tos crónica ',
                                    'Sudoracion nocturna' => 'sudoración Nocturna ',
                                    'Brotes en la piel' => 'Brotes en la piel/salpullido',
                                    'Lesiones en piel' => 'lesiones en la piel sin dolor',
                                ];

                                echo $this->Form->input('enfermedadtransmible', [
                                    'label' => 'En los últimos 15 dias algún miembro de la familia a presentado',
                                    'type' => 'select',
                                    'options' => $optionTranmisibles,
                                    'class' => 'form-control select-search',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'multiple' => true, // Permite selección múltiple
                                    'id' => 'enfermedadtransmible', // ID único para select2
                                    'onChange' => 'sintomatico(this.value);',
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

                                ];

                                echo $this->Form->input('riesgopsicosocial', [
                                    'label' => '¿En su familia se ha presentado alguna de las siguientes situaciones en el ultimo mes?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionConflictos,

                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                    'onChange' => 'psicosocial(this.value);', // Ag
                                ]);
                                ?>
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


                                <div class="form-group col-md-6" style="margin-top: 20px;">
                                    <?php
                                    $optionProgramaSocial = [
                                        'Si' => 'Si',
                                        'No' => 'No',

                                    ];

                                    echo $this->Form->input('programasocial', [
                                        'label' => '¿Su familia hace parte de programas sociales del gobierno?',
                                        'class' => 'form-control',
                                        'type' => 'select',
                                        'options' => $optionProgramaSocial,

                                        'style' => 'height:30px;  font-size: 15px ; width:100%',
                                        'id' => 'status', // Agrega el atributo id para que coincida con el select en JavaScript
                                        'onChange' => 'programaSocial(this.value);', // Ag
                                    ]);
                                    ?>
                                </div>


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
                            social y competencias para afrontar problemas conductuales y clínicos del paciente
                            cuidad.
                            Las preguntas de la escala sin tipo Likert de 5 opciones:</p>
                    </div>


                </div>

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div id="si" class="panel panel-default form-group col-md-12" style="font-size:15px; display: none;">
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
                                $alimentos = [
                                    '1.Cultivo' => 'Cultivo',
                                    '6.Compra' => 'Compra',
                                    '7.Asistencia del Estado' => 'Ayuda gubernamental',
                                    '8.Apoyo familiar' => 'Apoyo familiar',
                                ];

                                echo $this->Form->input('poblacionvulnerable1', [
                                    'label' => '¿Como obtienten los alimientos para el consumo?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $alimentos,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionYesNo = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                ];

                                echo $this->Form->input('higiene', [
                                    'label' => '¿Se observan adecuadas condiciones de higiene en la familia?',
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
                                    'Si' => 'Si',
                                    'No' => 'No',
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
                                    'Cepillo de dientes' => 'Cepillo de dientes',
                                    'Máquina de afeitar' => 'Máquina de afeitar',
                                    'Toallas' => 'Toallas',
                                    'No' => 'No se comparte',
                                    'No refiere' => 'No refiere',
                                    'SD' => 'Sin dato'
                                ];

                                echo $this->Form->input('elementoshigiene', [
                                    'label' => '¿Se comparte algun implemento de higiene personal con otra persona?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionelementosHigiene,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>



                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionCepilladoDientes = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
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

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {

        const choices_riesgo = new Choices("#combustible", {
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
            placeholderValue: "Seleccione un vector..."
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

    history.pushState(null, null, location.href);

    window.addEventListener('popstate', function(event) {
        if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            // Permite retroceder
            history.back();
        } else {
            // Vuelve a agregar el estado para bloquear el retroceso
            history.pushState(null, null, location.href);
        }
    });
</script>