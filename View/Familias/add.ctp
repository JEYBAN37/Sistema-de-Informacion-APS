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
    '1.Casa' => 'Toda la Casa',
    '1.Apartamento' => 'En un Apartamento',
    '2.Pieza' => 'En una Pieza',
    '2.Cuarto improvisado' => 'En un Cuarto improvisado',
    '2.Cuarto en inquilinato' => 'En Cuarto del inquilinato',
    '3.Espacio improvisado' => 'En un Espacio improvisado'
];

$option_tenencia = [
    '' => 'Elegir',
    '1.Propia pagando' => 'Propia pagando',
    '1.Propia pagada' => 'Propia pagada',
    '2.anticresis' => 'anticresis',
    '2.Arriendo' => 'Arriendo',
    '2.Subarriendo' => 'Subarriendo',
    '2.Prestada' => 'Prestada sin costo'
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
    '7.No aplica' => 'No aplica',
    '1.Población indígena' => 'Población indígena',
    '5.Población Afrocolombiano' => 'Población Afrocolombiano',
    '2.Población Rom' => 'Población Rom',
    '3.Población Raizal' => 'Raizal San Andrés y Providencia',

];

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

$optionNumPersons = [
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

$optionVulnerable = [
    '' => 'Elegir',
    '7.No' => 'No',
    '1.Familia con niñas, niños y adolescentes' => 'Familia con niñas, niños y adolescentes',
    '1.Gestante' => 'Mujer en embarazo',
    '1.AdultosMayores' => 'Personas Adulto Mayores',
    '1.Víctima conflicto' => 'Víctima del conflicto',
    '1.Discapacidad' => 'Discapacidad',
    '1.Personas con enferemedades cronicas' => 'Personas con enferemedades cronicas',
    '1.Personas con enferemedades huerfanas/terminales' => 'Personas con enferemedades huerfanas/terminales',
    '1.Personas con enferemedades tranmisibles' => 'Personas con enferemedades tranmisibles(TBC,Lepra,Varicela)',
    '8.Migrante irregular' => 'Migrante irregular',
    '8.Migrante regular' => 'Migrante regular',
    '8.Habitante de calle' => 'Habitante de calle',

];
$optionCursoVida = [
    '' => 'Elegir',
    'Formación' => 'Formación',
    'Expansión' => 'Expansión',
    'Consolidación' => 'Consolidación',
    'Apertura' => 'Apertura',
    'Nido vacío' => 'Nido vacío',
    'Disolución' => 'Disolución',

];

$optionLgtbi = ['' => 'Elegir', 'Si' => 'Si', 'No' => 'No'];

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

$optionEstilodevidapredominante = [
    '' => 'Elegir',
    '1.Sedentarismo' => 'Sedentarismo',
    '2.Actividad física' => 'Actividad física',
    '1.Consumo de cigarrillo' => 'Consumo de cigarrillo',
    '1.Consumo de Acohol' => 'Consumo de Acohol',
    '1.Consumo de otras SPA' => 'Consumo de otras SPA',
    '1.Inadecuadas Prácticas alimentarias y nutricionales' => 'Prácticas alimentarias y nutricionales (consumo sal, grasas, carbohidratos, azúcares refinados)'
];

$optionTranmisibles = [
    '1.No' => 'No',
    '2.Sintomatico respiratorio' => 'Tos crónica ',
    '2.Sudoracion nocturna' => 'sudoración Nocturna ',
    '2.Brotes en la piel' => 'Brotes en la piel/salpullido',
    '2.Lesiones en piel' => 'lesiones en la piel sin dolor',
];

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

$optionAlternativa = [
    '' => 'Elegir',
    '2.No' => 'No',
    '1.Si' => 'Si',
];
?>
<?php echo $this->Form->create('Familia', [
    'class' => 'space-y-6',
    'novalidate' => true
]); ?>

<!-- Formulario ZARIT tipo wizard -->
<div id="zaritWizard" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40" style="display: none;">
    <div class="bg-white rounded-xl shadow-2xl max-w-lg w-full p-8 relative">
        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-2xl font-bold" onclick="cerrarZaritWizard()">×</button>
        <h3 class="text-2xl font-semibold mb-4 text-center text-teal-600">ZARIT</h3>
        <form id="zaritForm">
            <div id="zaritStepContainer">
                <!-- Las preguntas se insertan aquí por JS -->
            </div>
            <div class="flex justify-center mt-6">
                <button type="button" id="zaritNextBtn" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-2 rounded-lg font-semibold">Siguiente</button>
            </div>
        </form>
        <div id="zaritResult" class="hidden mt-6 text-center">
            <div class="mb-2">
                <span class="font-bold">Puntaje total:</span>
                <span id="zaritTotal" class="font-bold"></span>
            </div>
            <div>
                <span class="font-bold">Resultado:</span>
                <span id="zaritInterpretacion" class="font-bold"></span>
            </div>
        </div>
    </div>
</div>


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
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-teal-100 rounded-lg text-teal-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <path d="m17 18 1.956-11.468" />
                <path d="m3 8 7.82-5.615a2 2 0 0 1 2.36 0L21 8" />
                <path d="M4 18h16" />
                <path d="M7 18 5.044 6.532" />
                <circle cx="12" cy="10" r="2" />
            </svg>
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
                    <button type="button"
                        id="ayudaButtonTIPO"
                        class="mt-4 bg-blue-100 text-blue-700 hover:bg-blue-200 rounded-full w-10 h-10 flex items-center justify-center"
                        aria-label="Ayuda" aria-expanded="false">
                        ?
                    </button>
                    <div id="helpContentTIPO"
                        class="absolute left-0 top-16 mb-2 w-80 bg-blue-50 border border-blue-200 rounded-lg z-50 hidden shadow-lg p-4"
                        role="dialog" aria-hidden="true">
                        <p>
                            <!-- Aquí tu contenido de ayuda -->
                            <strong>Nuclear:</strong> constituida por los progenitores y los hijos. <br>
                            <strong>Nuclear monoparental:</strong> constituida por un solo progenitor y sus hijos. <br>
                            <strong>Unipersonal:</strong> no tiene núcleo familiar y sólo consta de una persona. <br>
                            <strong>Extensa:</strong> Compuesta por personas como tíos, primos, abuelos.
                        </p>
                    </div>
                </div>
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
                    'onchange' => 'mostrarResguardo(this.value);',
                    'label' => '',
                    'empty' => 'Selecciona tipo de vivienda',
                ]);

                if (!empty($this->Form->error('poblacionetnica'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('poblacionetnica') . '</div>';
                }
                ?>
            </div>

            <div id="resguardo" class="col-span-2 md:col-span-1 text-md font-semibold my-6 hidden mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">¿A cual resguado, cabildo pertenecen?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('resguardo', [
                    'type' => 'select',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionCabildo,
                    'label' => '',
                    'empty' => 'Selecciona tipo de vivienda',
                ]);
                if (!empty($this->Form->error('resguardo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('resguardo') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">¿De cuántas personas está compuesto la famlia?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('numeropersonas', [
                    'type' => 'select',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionNumPersons,
                    'label' => '',
                    'empty' => 'Selecciona número de personas',
                ]);

                if (!empty($this->Form->error('numeropersonas'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numeropersonas') . '</div>';
                }
                ?>
            </div>
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="nombre" class="font-semibold">Identifique el tipo de población que hay familia</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('poblacionvulnerable', [
                    'type' => 'select',
                    'options' => $optionVulnerable,
                    'id' => 'poblacionvulnerable',
                    'error' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                ]);

                if (!empty($this->Form->error('poblacionvulnerable'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('poblacionvulnerable') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="nombre" class="font-semibold">Curso de vida en el que se encuentra la familia</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('cursovidafamilia', [
                    'type' => 'select',
                    'options' => $optionCursoVida,
                    'id' => 'cursovidafamilia',
                    'error' => false,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'label' => '',
                    'empty' => 'Selecciona curso de vida',
                ]);

                if (!empty($this->Form->error('cursovidafamilia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('cursovidafamilia') . '</div>';
                }
                ?>

                <div class="relative inline-block w-full">
                    <button type="button"
                        id="ayudaButtonCURSO"
                        class="mt-4 bg-blue-100 text-blue-700 hover:bg-blue-200 rounded-full w-10 h-10 flex items-center justify-center"
                        aria-label="Ayuda" aria-expanded="false">
                        ?
                    </button>
                    <div id="helpContentCURSO"
                        class="absolute left-0 top-16 mb-2 w-80 bg-blue-50 border border-blue-200 rounded-lg z-50 hidden shadow-lg p-4"
                        role="dialog" aria-hidden="true">
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
            </div>


            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="nombre" class="font-semibold">¿En la familia hay integrantes que pertenezcan a la comunidad LGBTI?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('lgtbi', [
                    'type' => 'select',
                    'options' => $optionLgtbi,
                    'id' => 'lgtbi',
                    'error' => false,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('lgtbi'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('cursovidafamilia') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-12">
    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-teal-100 rounded-lg text-teal-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <path d="M12 16h.01" />
                <path d="M12 8v4" />
                <path d="M15.312 2a2 2 0 0 1 1.414.586l4.688 4.688A2 2 0 0 1 22 8.688v6.624a2 2 0 0 1-.586 1.414l-4.688 4.688a2 2 0 0 1-1.414.586H8.688a2 2 0 0 1-1.414-.586l-4.688-4.688A2 2 0 0 1 2 15.312V8.688a2 2 0 0 1 .586-1.414l4.688-4.688A2 2 0 0 1 8.688 2z" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Riesgos de salud</h1>
                <p class="text-gray-500">Complementa la información sobre los riesgos de salud presentes en la familia.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">Antecedentes familiares de enfermedad</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('antecedenteenfermedad', [
                    'type' => 'select',
                    'id' => 'antecedenteenfermedad',
                    'error' => false,
                    'options' => $optionEnferemedadAntecedentes,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                ]);

                if (!empty($this->Form->error('antecedenteenfermedad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('antecedenteenfermedad') . '</div>';
                }
                ?>
            </div>



            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-2">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">Identifique el Estilo de Vida predominante en la familia</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('estilodevidapredominante', [
                    'type' => 'select',
                    'id' => 'estilodevidapredominante',
                    'error' => false,
                    'options' => $optionEstilodevidapredominante,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'empty' => 'Selecciona un estilo de vida',
                ]);

                if (!empty($this->Form->error('estilodevidapredominante'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estilodevidapredominante') . '</div>';
                }
                ?>
            </div>


            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">En los últimos 15 dias algún miembro de la familia a presentado</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('enfermedadtransmible', [
                    'type' => 'select',
                    'id' => 'enfermedadtransmible',
                    'error' => false,
                    'options' => $optionTranmisibles,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('enfermedadtransmible'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('enfermedadtransmible') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-12">
    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-teal-100 rounded-lg text-teal-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <path d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z" />
                <path d="m7 16.5-4.74-2.85" />
                <path d="m7 16.5 5-3" />
                <path d="M7 16.5v5.17" />
                <path d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z" />
                <path d="m17 16.5-5-3" />
                <path d="m17 16.5 4.74-2.85" />
                <path d="M17 16.5v5.17" />
                <path d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z" />
                <path d="M12 8 7.26 5.15" />
                <path d="m12 8 4.74-2.85" />
                <path d="M12 13.5V8" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Dinamica Familiar</h1>
                <p class="text-gray-500">Complementa la información de la dinámica familiar.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">¿En su familia se ha presentado alguna de las siguientes situaciones en el ultimo mes?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('riesgopsicosocial', [
                    'type' => 'select',
                    'id' => 'riesgopsicosocial',
                    'error' => false,
                    'options' => $optionConflictos,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                ]);

                if (!empty($this->Form->error('riesgopsicosocial'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgopsicosocial') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">
                        Cuidado de la salud desde la medicina tradicional y/o alternativa</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('saludalternativa', [
                    'type' => 'select',
                    'id' => 'saludalternativa',
                    'error' => false,
                    'options' => $optionAlternativa,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => false,
                    'empty' => false,
                ]);

                if (!empty($this->Form->error('saludalternativa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('saludalternativa') . '</div>';
                }
                ?>
            </div>

        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-12">
    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-teal-100 rounded-lg text-teal-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <rect width="8" height="6" x="5" y="4" rx="1" />
                <rect width="8" height="6" x="11" y="14" rx="1" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">APGAR Familiar</h1>
                <p class="text-gray-500">Complementa la información de la evaluación familiar.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col justify-center md:flex-row md:justify-between col-span-2 text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="md:w-1/2 flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">¿Se sienten satisfechos con la ayuda familiar cuando algun miembro de la familia tiene algún problema o necesidad?
                    </label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="flex space-x-4 items-start justify-center md:justify-start pr-0 md:pr-[10%] md:mt-0 ">
                    <!-- Botón NO -->
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][ayudafamiliar]" value="4">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs">Siempre</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][ayudafamiliar]" value="3">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">La mayoría de veces</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][ayudafamiliar]" value="2">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">Algunas veces</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][ayudafamiliar]" value="1">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">Muy pocas veces</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][ayudafamiliar]" value="0">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">Nunca</label>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center md:flex-row md:justify-between col-span-2  text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="md:w-1/2 flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">¿Conversan entre ustedes los problemas que tienen en casa?</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="flex space-x-4 items-start justify-center md:justify-start pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][participacionfamiliar]" value="4">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs">Siempre</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][participacionfamiliar]" value="3">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">La mayoría de veces</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][participacionfamiliar]" value="2">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">Algunas veces</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][participacionfamiliar]" value="1">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">Muy pocas veces</label>
                    </div>

                    <div class="flex flex-col items-center justify-start">
                        <input type="radio" name="data[Familia][participacionfamiliar]" value="0">
                        <label for="ayudafamiliar_no" class="ml-2 text-xs text-center">Nunca</label>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center md:flex-row md:justify-between col-span-2  text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="md:w-1/2 flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label class="font-semibold">¿Las decisiones importantes se toman juntos en familia?</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="flex space-x-4 items-start justify-center md:justify-start pr-0 md:pr-[10%] md:mt-0">
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][aceptacionapoyo]" value="4" id="aceptacionapoyo_4">
                        <label for="aceptacionapoyo_4" class="ml-2 text-xs">Siempre</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][aceptacionapoyo]" value="3" id="aceptacionapoyo_3">
                        <label for="aceptacionapoyo_3" class="ml-2 text-xs text-center">La mayoría de veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][aceptacionapoyo]" value="2" id="aceptacionapoyo_2">
                        <label for="aceptacionapoyo_2" class="ml-2 text-xs text-center">Algunas veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][aceptacionapoyo]" value="1" id="aceptacionapoyo_1">
                        <label for="aceptacionapoyo_1" class="ml-2 text-xs">Muy pocas veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][aceptacionapoyo]" value="0" id="aceptacionapoyo_0">
                        <label for="aceptacionapoyo_0" class="ml-2 text-xs">Nunca</label>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center md:flex-row md:justify-between col-span-2  text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="md:w-1/2 flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label class="font-semibold">¿Siente que su familia expresa afectos de amor, comprensión y respeto?</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="flex space-x-4 items-start justify-center md:justify-start pr-0 md:pr-[10%] md:mt-0">
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][afectoemociones]" value="4" id="afectoemociones_4">
                        <label for="afectoemociones_4" class="ml-2 text-xs">Siempre</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][afectoemociones]" value="3" id="afectoemociones_3">
                        <label for="afectoemociones_3" class="ml-2 text-xs text-center">La mayoría de veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][afectoemociones]" value="2" id="afectoemociones_2">
                        <label for="afectoemociones_2" class="ml-2 text-xs">Algunas veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][afectoemociones]" value="1" id="afectoemociones_1">
                        <label for="afectoemociones_1" class="ml-2 text-xs">Muy pocas veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][afectoemociones]" value="0" id="afectoemociones_0">
                        <label for="afectoemociones_0" class="ml-2 text-xs">Nunca</label>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center md:flex-row md:justify-between col-span-2  text-md font-semibold mt-4 mb-2 md:mr-4">
                <div class="md:w-1/2 flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label class="font-semibold">¿Se procura compartir tiempo en familia? - El tiempo para estar juntos, los espacios en casa, salir a pasear</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="flex space-x-4 items-start justify-center md:justify-start pr-0 md:pr-[10%] md:mt-0">
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][compartirfamilia]" value="4" id="compartirfamilia_4">
                        <label for="compartirfamilia_4" class="ml-2 text-xs">Siempre</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][compartirfamilia]" value="3" id="compartirfamilia_3">
                        <label for="compartirfamilia_3" class="ml-2 text-xs">La mayoría de veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][compartirfamilia]" value="2" id="compartirfamilia_2">
                        <label for="compartirfamilia_2" class="ml-2 text-xs">Algunas veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][compartirfamilia]" value="1" id="compartirfamilia_1">
                        <label for="compartirfamilia_1" class="ml-2 text-xs">Muy pocas veces</label>
                    </div>
                    <div class="flex flex-col items-center">
                        <input type="radio" name="data[Familia][compartirfamilia]" value="0" id="compartirfamilia_0">
                        <label for="compartirfamilia_0" class="ml-2 text-xs">Nunca</label>
                    </div>
                </div>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="nombre" class="font-semibold">Resultado Apgar</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('calculoapgar', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'readonly' => 'readonly',
                    'id' => 'resultado-input' // Cambiado el ID a 'resultado-input'

                ]);

                if (!empty($this->Form->error('calculoapgar'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('calculoapgar') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="nombre" class="font-semibold">Funcionalidad de la familia</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('apgarFuncionalidad', [
                    'label' => false,
                    'readonly' => 'readonly',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'apgarFuncionalidad', // Cambiado el ID a 'resultado-input'

                ]);

                if (!empty($this->Form->error('apgarFuncionalidad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('apgarFuncionalidad') . '</div>';
                }
                ?>
            </div>

            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="md:w-1/2 flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="programasocial" class="font-semibold">¿Su familia hace parte de programas sociales del gobierno?</label>
                </div>

                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Familia][programasocial]"
                            id="programasocial-no"
                            value="0"
                            class="hidden peer"
                            data-target="programasocial"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="programasocial-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Familia][programasocial]"
                            id="programasocial-si"
                            value="1"
                            data-target="programasocial"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="programasocial-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-12">
    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-handshake-angle text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Encuesta a cuidadores ZARIT</h1>
                <p class="text-gray-500">El Objetivo de la Escala Zarit es medir la sobrecarga del cuidador evaluando dimensiones como calidad de vida, capacidad de autocuidado, red de apoyo social y competencias para afrontar problemas conductuales y clínicos del paciente cuidad. Las preguntas de la escala sin tipo Likert de 5 opciones:</p>
            </div>

        </div>

        <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6">
            <div class="md:w-1/2 flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                <label for="cuidadorpermanente" class="font-semibold">¿En la familia se identifica un cuidador principal de niños, niñas, persona con discapacidad, adulto mayor o enfermedad?</label>
                <p class="text-red-600">*</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1">
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Familia][cuidadorpermanente]"
                            id="cuidadorpermanente-no"
                            value="0"
                            class="hidden peer"
                            data-target="cuidadorpermanente"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="cuidadorpermanente-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Familia][cuidadorpermanente]"
                            id="cuidadorpermanente-si"
                            value="1"
                            data-target="cuidadorpermanente"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="cuidadorpermanente-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                <label for="nombre" class="font-semibold">Resultado zaritr</label>
                <p class="text-red-600">*</p>
            </div>
            <?php
            echo $this->Form->input('calculozarit', [
                'label' => false,
                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                'error' => false,
                'default' => '0',
                'readonly' => 'readonly',
                'id' => 'zaritTotal' // Cambiado el ID a 'resultado-input'

            ]);

            if (!empty($this->Form->error('calculozarit'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('calculozarit') . '</div>';
            }
            ?>
        </div>

        <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                <label for="nombre" class="font-semibold">Sobrecarga del cuidador</label>
                <p class="text-red-600">*</p>
            </div>
            <?php
            echo $this->Form->input('zaritFuncionalidad', [
                'label' => false,
                'readonly' => 'readonly',
                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                'error' => false,
                'default' => 'Sin sobrecarga',
                'id' => 'zaritInterpretacion', // Cambiado el ID a 'resultado-input'
            ]);

            if (!empty($this->Form->error('zaritFuncionalidad'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('zaritFuncionalidad') . '</div>';
            }
            ?>
        </div>
    </div>
</div>

<body style="font-size: 14px;">

    <div class="grow justify-content-center" display="none" style="margin-top:20px">
    </div>

    <h2 class="subtitle-general-forms ">Encuesta a cuidadores ZARIT</h2>

    <hr style=" border:0.1px solid rgba(0,0,0,.125);">


    <div class="grow justify-content-center" display="none" style="margin-top:20px">
        <div id="si" class="panel panel-default form-group col-md-12" style="font-size:15px; display: none;">
            <div class="form-group row">

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
    function mostrarResguardo(id) {
        if (id != "No aplica" && id != '')
            $("#resguardo").show();
        else
            $("#resguardo").hide();
    }

    const zaritPreguntas = [
        "¿Piensa que su familiar solicita más ayuda de la que realmente necesita?",
        "¿Piensa que debido al tiempo que dedica a su familiar ya no dispone de tiempo suficiente para usted?",
        "¿Se siente agobiado por intentar compatibilizar el cuidado de su familiar con otras responsabilidades (trabajo, familia)?",
        "¿Se siente vergüenza por la conducta de su familiar?",
        "¿Se siente enfadado cuando está cerca de su familiar?",
        "¿Cree que la situación actual afecta negativamente la relación que Ud tiene con otros miembros de su familia?",
        "¿Tiene miedo por el futuro de su familiar?",
        "¿Piensa que su familiar depende de usted?",
        "¿Piensa que su salud ha empeorado debido a tener que cuidar a su familiar?",
        "¿Se siente tenso cuanto está cerca de su familiar?",
        "¿Piensa que no tiene tanta intimidad como le gustaría debido a tener que cuidar a su familiar?",
        "¿Siente que su vida social se ha visto afectada negativamente por tener que cuidar a su familiar?",
        "¿Se siente incómodo por distanciarse de sus amistades debido a tener que cuidar de su familiar?",
        "¿Piensa que su familiar le considera a usted la única persona que le puede cuidar?",
        "¿Piensa que no tiene suficientes ingresos económicos para los gastos de cuidar a su familiar, además de sus otros gastos?",
        "¿Piensa que no será capaz de cuidar a su familiar por mucho más tiempo?",
        "¿Siente que ha perdido el control de su vida desde que comenzó la enfermedad de su familiar?",
        "¿Desearía poder dejar el cuidado de su familiar a otra persona?",
        "¿Se siente indeciso sobre qué hacer con su familiar?",
        "¿Piensa que debería hacer más por su familiar?",
        "¿Piensa que podría cuidar mejor a su familiar?",
        "Globalmente ¿Qué grado de “carga” experimenta por el hecho de cuidar a su familiar?"
    ];

    const zaritOpciones = [{
            value: 5,
            label: "Casi siempre"
        },
        {
            value: 4,
            label: "Bastantes veces"
        },
        {
            value: 3,
            label: "Algunas veces"
        },
        {
            value: 2,
            label: "Rara vez"
        },
        {
            value: 1,
            label: "Nunca"
        }
    ];

    let zaritRespuestas = [];
    let zaritStep = 0;

    function renderZaritStep() {
        const container = document.getElementById('zaritStepContainer');
        container.innerHTML = `
        <div class="mb-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">${zaritStep + 1}</span>
                <label class="font-semibold">${zaritPreguntas[zaritStep]}</label>
            </div>
            <div class="flex gap-5 items-center justify-center">
                ${zaritOpciones.map(opt => `
                    <div class="flex flex-col items-center justify-start w-1/5 h-12">
                        <input type="radio" name="zarit_pregunta" value="${opt.value}" id="zarit_${zaritStep}_${opt.value}">
                        <label for="zarit_${zaritStep}_${opt.value}" class="text-xs text-center">${opt.label}</label>
                    </div>
                `).join('')}
            </div>
        </div>
    `;
        document.getElementById('zaritNextBtn').textContent = zaritStep === zaritPreguntas.length - 1 ? 'Finalizar' : 'Siguiente';
    }

    function calcularZaritResultado(sumaZarit) {
        let color = 'black',
            texto = '';
        if (sumaZarit === 0) {
            color = 'red';
            texto = 'Sin resultado';
        } else if (sumaZarit <= 46) {
            color = 'green';
            texto = '1.Ausencia de sobrecarga';
        } else if (sumaZarit >= 47 && sumaZarit <= 55) {
            color = 'orange';
            texto = '2.Sobrecarga ligera';
        } else if (sumaZarit >= 56) {
            color = 'red';
            texto = '3.Sobrecarga intensa';
        }
        return {
            color,
            texto
        };
    }

    function cerrarZaritWizard() {
        document.getElementById('zaritWizard').style.display = 'none';
    }

    document.addEventListener("DOMContentLoaded", function() {

        renderZaritStep();

        document.getElementById('zaritNextBtn').onclick = function() {
            const seleccionada = document.querySelector('input[name="zarit_pregunta"]:checked');
            if (!seleccionada) {
                alert('Por favor seleccione una opción.');
                return;
            }
            zaritRespuestas[zaritStep] = parseInt(seleccionada.value, 10);

            if (zaritStep < zaritPreguntas.length - 1) {
                zaritStep++;
                renderZaritStep();
            } else {
                // Mostrar resultado
                let suma = zaritRespuestas.reduce((a, b) => a + b, 0);
                const {
                    color,
                    texto
                } = calcularZaritResultado(suma);
                document.getElementById('zaritStepContainer').style.display = 'none';
                document.getElementById('zaritNextBtn').style.display = 'none';
                document.getElementById('zaritResult').classList.remove('hidden');
                document.getElementById('zaritTotal').textContent = suma;
                document.getElementById('zaritTotal').style.color = color;
                document.getElementById('zaritInterpretacion').textContent = texto;
                document.getElementById('zaritInterpretacion').style.color = color;

                // Asignar resultado a los campos del formulario y color al input
                const formCalculoZarit = document.querySelector('input[name="data[Familia][calculozarit]"]');
                const formZaritFuncionalidad = document.querySelector('input[name="data[Familia][zaritFuncionalidad]"]');
                if (formCalculoZarit) {
                    formCalculoZarit.value = suma;
                    formCalculoZarit.style.color = color;
                }
                if (formZaritFuncionalidad) {
                    formZaritFuncionalidad.value = texto;
                    formZaritFuncionalidad.style.color = color;
                }
            }
        };

        var cuidadorSi = document.getElementById('cuidadorpermanente-si');
        if (cuidadorSi) {
            cuidadorSi.addEventListener('change', function() {
                if (this.checked) {
                    document.getElementById('zaritWizard').style.display = 'flex';
                    // Reiniciar wizard si es necesario
                    zaritStep = 0;
                    zaritRespuestas = [];
                    renderZaritStep();
                    document.getElementById('zaritStepContainer').style.display = '';
                    document.getElementById('zaritNextBtn').style.display = '';
                    document.getElementById('zaritResult').classList.add('hidden');
                }
            });
        }

        document.querySelectorAll('input[type="radio"][data-target]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var targetId = radio.getAttribute('data-target');
                var show = radio.getAttribute('data-show') === 'true';
                var target = document.getElementById(targetId);
                if (target) {
                    target.style.display = show ? 'block' : 'none';
                }
            });
            // Mostrar/ocultar al cargar la página según el radio seleccionado
            if (radio.checked) {
                var targetId = radio.getAttribute('data-target');
                var show = radio.getAttribute('data-show') === 'true';
                var target = document.getElementById(targetId);
                if (target) {
                    target.style.display = show ? 'block' : 'none';
                }
            }
        });

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


        const choices_poblacionvulnerable = new Choices("#poblacionvulnerable", {
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

        const antecedenteenfermedad = new Choices("#antecedenteenfermedad", {
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

        const riesgopsicosocial = new Choices("#riesgopsicosocial", {
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

        document.querySelectorAll('[id^="ayudaButton"]').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                var id = this.id.replace('ayudaButton', 'helpContent');
                var helpContent = document.getElementById(id);
                var expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', String(!expanded));
                helpContent.classList.toggle('hidden');
                helpContent.setAttribute('aria-hidden', String(expanded));
                e.stopPropagation();
            });
        });



        // Cerrar al hacer clic fuera
        document.addEventListener('click', function(e) {
            document.querySelectorAll('[id^="helpContent"]').forEach(function(help) {
                var btnId = help.id.replace('helpContent', 'ayudaButton');
                var btn = document.getElementById(btnId);
                if (!help.classList.contains('hidden') && !help.contains(e.target) && !btn.contains(e.target)) {
                    help.classList.add('hidden');
                    btn.setAttribute('aria-expanded', 'false');
                    help.setAttribute('aria-hidden', 'true');
                }
            });
        });

        function calcularApgar() {
            // IDs de los campos APGAR
            const campos = [
                'ayudafamiliar',
                'participacionfamiliar',
                'aceptacionapoyo',
                'afectoemociones',
                'compartirfamilia'
            ];
            let sumaApgar = 0;
            campos.forEach(function(campo) {
                const seleccionado = document.querySelector('input[name="data[Familia][' + campo + ']"]:checked');
                if (seleccionado) {
                    sumaApgar += parseInt(seleccionado.value, 10);
                }
            });

            // Campos de resultado
            const apgarField = document.getElementById('resultado-input');
            const resultApgar = document.getElementById('apgarFuncionalidad') || document.querySelector('input[name="data[Familia][apgarFuncionalidad]"]');

            // Mostrar resultado numérico
            if (apgarField) apgarField.value = sumaApgar;

            // Mostrar resultado textual y color
            if (resultApgar) {
                if (sumaApgar === 0) {
                    apgarField.style.color = 'red';
                    resultApgar.value = 'Sin resultado';
                } else if (sumaApgar <= 9) {
                    apgarField.style.color = 'red';
                    resultApgar.value = '4.Disfunción severa';
                } else if (sumaApgar >= 10 && sumaApgar <= 12) {
                    apgarField.style.color = 'orange';
                    resultApgar.value = '3.Disfunción moderada';
                } else if (sumaApgar >= 13 && sumaApgar <= 16) {
                    apgarField.style.color = '#FAA80D';
                    resultApgar.value = '2.Disfunción leve';
                } else if (sumaApgar >= 17) {
                    apgarField.style.color = 'green';
                    resultApgar.value = '1.Normal';
                } else {
                    apgarField.style.color = 'black';
                    resultApgar.value = '';
                }
            }
        }

        // Escuchar cambios en los radios APGAR
        ['ayudafamiliar', 'participacionfamiliar', 'aceptacionapoyo', 'afectoemociones', 'compartirfamilia'].forEach(function(campo) {
            document.querySelectorAll('input[name="data[Familia][' + campo + ']"]').forEach(function(radio) {
                radio.addEventListener('change', calcularApgar);
            });
        });

        // Inicializar al cargar
        calcularApgar();
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