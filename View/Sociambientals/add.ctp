<?php $this->layout = 'default_familia';  ?>

<!-- Choices.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Información de la Vivienda<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Modulo Socioambiental
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Ingresar el formulario completamente de otra manera se invalidara la ficha.
    </p>
</div>

<?php

echo $this->Form->create('Sociambiental',  [
    'class' => 'space-y-6',
]);

// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));

$viviendaOptions = array(
    '' => 'Elegir',
    '1.Casa' => 'Casa',
    '4.Apartamento' => 'Apartamento',
    '5.Pieza' => 'Pieza',
    '3.Cuarto improvisado' => 'Cuarto improvisado',
    '5.Cuarto en inquilinato' => 'Cuarto en inquilinato',
    '10.Cuevas' => 'Cuevas',
    '11.En calle' => 'En calle, puente, rio, parque',
);

$estratoOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');

$optionMaterialPared = array(
    '' => 'Elegir',
    '1.Bloque, cemento, ladrillo' => 'Bloque, cemento, ladrillo',
    '2.Tierra, arena, barro' => 'Tierra, arena, barro',
    '5.Madera' => 'Madera',
    '7.Material plastico' => 'Material plástico ',
    '7.Material Reciclado' => 'Material reciclado',
    '7.Lata, Lamina metal' => 'Lata, Lamina metal',

);

$optionParedes = array(
    '' => 'Elegir',
    'Buen estado' => 'Buen estado',
    'Descascaramiento, humedad' => 'Descascaramiento, humedad',
    'Estructura inestable' => 'Estructura inestable',

);

$optionPiso = array(
    '' => 'Elegir',
    '3.Cemento, gravilla' => 'Cemento, gravilla',
    '3.Ceramica' => 'Ceramica',
    '1.Piso flotante' => 'Piso flotante',
    '5.Tierra' => 'Tierra',
    '4.Madera burda, tabla' => 'Madera burda, tabla',
    '3.Baldosa, ladrillo' => 'baldosa, ladrillo',
);

$optionEstadoTecho = array(
    '' => 'Elegir',
    'Buen estado' => 'Buen estado',
    'Agrietamiento, goteras o fisuras' => 'Agrietamiento, goteras o fisuras',

);
$numhabitantesOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => 'Mas de 7');

$numhogaresOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
$optionHacinamiento = array('' => 'Elegir', '1.Si' => 'Si', '2.No' => 'No');
$externalRiskOptions = [
    '20.No se identifica' => 'No se identifica',
    '8.Malos olores' => 'Malos olores',
    '19.Iluminacion inadecuada' => 'Iluminación inadecuada',
    '8.Ventilación inadecuada' => 'Ventilación inadecuada',
    '3.Porquerizas' => 'Porquerizas',
    '4.Galpones' => 'Galpones',
    '5.Terrenos baldíos' => 'Terrenos baldíos',
    '7.Ruido' => 'Ruido',
    '10.Rellenos sanitarios, botaderos' => 'Rellenos sanitarios/botaderos',
    '17.Excesivo trafico' => 'Excesivo trafico',
];

$accessOptions = [
    '1.Transporte' => 'Transporte',
    '2.Espacios deportivos' => 'Espacios deportivos, recretativos',
    '3.Servicios Educativos' => 'Servicios Educativos',
    '4.Servicios Salud' => 'Servicios Salud',
    '5.Ninguno' => 'Ninguno'
];

$accidentRiskOptions = [
    '11.Ninguno' => 'Ninguno',
    '1.Objetos cortantes ' => 'Objetos cortantes ',
    '2.Sustancias químicas_aseo a la vista' => 'Sustancias químicas_aseo a la vista',
    '3.Medicamentos a la vista' => 'Medicamentos a la vista',
    '4.Uso de Velas' => 'Uso de Velas',
    '5.Conexiones Electricas inadecuadas' => 'Conexiones Electricas inadecuadas',
    '8.Superficies resbaladizas' => 'Superficies resbaladizas',
    '10.Escaleras sin proteccion' => 'Escaleras sin protección',
];

$waterSupplyOptions = [
    '' => 'Elegir',
    '1.Acueducto Empopasto' => 'Acueducto Empopasto',
    '3.Acueducto Comunitario' => 'Acueducto Comunitario',
    '2.Agua envasada ' => 'agua envasada',
    '5.Carro tanque ' => 'Carro tanque',
    '8.Pozo sin bomba, aljibe, jagüey o barreno' => 'Pozo sin bomba, aljibe, jagüey o barreno',
    '10.Río, quebrada, manantial o nacimiento' => 'Río, quebrada, manantial o nacimiento',
    '11.Aguas lluvias' => 'Aguas lluvias',

];

$excretaDisposalOptions = [
    '' => 'Elegir',
    '1.Inodoro conectado a alcantarillado' => 'Inodoro conectado a alcantarillado',
    '2.Inodoro sin conexion a alcantarillado' => 'Inodoro sin conexion a alcantarillado',
    '2.Pozo séptico' => 'Pozo séptico',
    '7.Campo abierto' => 'Campo abierto',
    '8.Basenilla, bolsas' => 'Basenilla, Bolsas',
];

$garbageDisposalOptions = [
    '' => 'Elegir',
    '1.Recolección por Emas' => 'Recolección por Empresa de aseo',
    '3.Quema a campo abierto' => 'Quema a campo abierto',
    '5.Disposición a campo abierto' => 'Disposición a campo abierto',
];

$recyclingOptions = [
    '' => 'Elegir',
    'Si' => 'Si',
    'No' => 'No',
    'ocasionalmente' => 'Ocasionalmente',

];
$vectoresOption = [
    '2.No' => 'No',
    '1.Moscos' => 'Moscos',
    '1.Zancudos' => 'Zancudos',
    '1.Pulgas' => 'Pulgas',
    '1.Piojos' => 'Piojos',
    '1.Ratones' => 'Ratones',
    '1.Cucarachas' => 'Cucarachas',
];

$domesticWaterOptions = [
    '' => 'Elegir',
    '1.Conexión alcantarillado' => 'Conexión alcantarillado',
    '5.Fuente hídrica ' => 'Fuente hídrica',
    '6.Campo Abierto ' => 'Campo Abierto',
];
?>





<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-laptop text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Informacion de Referencia</h1>
                <p class="text-gray-500">Complementa la información de la vivienda.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Fecha de visita -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-4 sm:mr-4">
                <div class="flex items-center">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="resultadoEcomapa" class="font-semibold">Fecha de visita</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <?php echo $this->Form->label('fecha', []); ?>
                        <input
                            type="text"
                            name="datetime_range"
                            id="datetime_range"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona rango de fecha" />
                        <span class="text-sm text-red-600 ">
                            <?= $this->Form->error('fecha') ?>
                        </span>
                    </div>

                </div>
            </div>

            <!-- Microterritorio -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="familiograma" class="font-semibold">Microterritorio</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('ubicacion_id', [
                    'type' => 'select',
                    'id' => 'producto_id',
                    'class' => 'w-full',
                    'label' => '',
                    'empty' => 'Seleccione el microterritorio',
                    'error' => false // No mostrar error aquí
                ]);


                if (!empty($this->Form->error('ubicacion_id'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('ubicacion_id') . '</div>';
                }
                ?>
            </div>

            <!-- Barrio / Vereda -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6 sm:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="objactividad" class="font-semibold">Barrio / Vereda</label>
                </div>
                <?php
                echo $this->Form->input('barriovereda', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('barriovereda'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('barriovereda') . '</div>';
                }
                ?>
            </div>

            <!-- direccion -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="direccion" class="font-semibold">Nomenclatura de la Dirección</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('direccion', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('direccion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('direccion') . '</div>';
                }
                ?>
                <p class="text-gray-400 text-xs mt-2">Colocar la nomenclatura de un recibo de servicio publico del
                    domicilio
                </p>
            </div>

            <!-- Apellidos de la familia -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6 sm:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="apellidosfamilia" class="font-semibold">Apellidos de la familia</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('apellidosfamilia', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('apellidosfamilia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('apellidosfamilia') . '</div>';
                }
                ?>
            </div>

            <!-- Tipo de Vivienda -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="proactividad_id" class="font-semibold">Tipo de Vivienda</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('vivienda', [
                    'type' => 'select',
                    'id' => 'vivienda',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'onchange' => 'mostrarBarrio(this.value);',
                    'error' => false,
                    'options' => $viviendaOptions,
                    'label' => '',
                    'empty' => 'Seleccione tipo de vivienda',
                ]);
                if (!empty($this->Form->error('vivienda'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('vivienda') . '</div>';
                }
                ?>
            </div>

            <!-- Estrato -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="proactividad_id" class="font-semibold">Estrato</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('estrato', [
                    'type' => 'select',
                    'id' => 'estrato',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $estratoOptions,
                    'label' => '',
                    'empty' => 'Seleccione estrato',
                ]);
                if (!empty($this->Form->error('estrato'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estrato') . '</div>';
                }
                ?>
                <p class="text-gray-400 text-xs mt-2">Se sugiere revisar recibo de agua o luz de la residencia</p>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="numerohabitantes" class="font-semibold">¿Cuantas personas habitan en la vivienda?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('numerohabitantes', [
                    'type' => 'select',
                    'id' => 'numerohogares',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'label' => '',
                    'options' => $numhabitantesOptions
                ]);
                if (!empty($this->Form->error('numerohabitantes'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numerohabitantes') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
                    <label for="numerohogares" class="font-semibold">N°. familias en la vivienda</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php

                echo $this->Form->input('numerohogares', [
                    'type' => 'select',
                    'id' => 'numerohogares',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'label' => '',
                    'options' => $numhogaresOptions,
                ]);
                if (!empty($this->Form->error('numerohogares'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numerohogares') . '</div>';
                }
                ?>

                <p class="text-gray-400 text-xs mt-2">Si todos comen de la misma olla se considera una sola
                    familia</p>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-brands fa-pied-piper-hat text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Informacion de Habitabilidad</h1>
                <p class="text-gray-500">Complementa la información de la vivienda.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- predominante paredes -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">¿Cuál es el material predominante de las paredes?</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('pared', [
                    'type' => 'select',
                    'id' => 'pared',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionMaterialPared,
                    'label' => '',
                    'empty' => 'Seleccione material',
                ]);
                if (!empty($this->Form->error('pared'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('pared') . '</div>';
                }
                ?>
            </div>

            <!-- estado paredes -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">¿El estado de las paredes es?</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('estadoparedes', [
                    'type' => 'select',
                    'id' => 'estadoparedes',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionParedes,
                    'label' => '',
                    'empty' => 'Seleccione material',
                ]);
                if (!empty($this->Form->error('estadoparedes'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estadoparedes') . '</div>';
                }
                ?>
            </div>

            <!-- estado piso -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proactividad_id" class="font-semibold">¿Cuál es el material predominante del piso de la vivienda?</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('piso', [
                    'type' => 'select',
                    'id' => 'piso',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionPiso,
                    'label' => '',
                    'empty' => 'Seleccione material',
                ]);
                if (!empty($this->Form->error('piso'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('piso') . '</div>';
                }
                ?>
            </div>

            <!-- estado techo -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="proactividad_id" class="font-semibold">¿Cuál es el material predominante del techo de la vivienda?</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('techo', [
                    'type' => 'select',
                    'id' => 'techo',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionPiso,
                    'label' => '',
                    'empty' => 'Seleccione material',
                ]);
                if (!empty($this->Form->error('techo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('techo') . '</div>';
                }
                ?>
            </div>

            <!-- estado techo -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="estadotecho" class="font-semibold">¿Cuál es el estado en general del techo?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('estadotecho', [
                    'type' => 'select',
                    'id' => 'estadotecho',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionEstadoTecho,
                    'label' => '',
                    'empty' => 'Seleccione el estado',
                ]);
                if (!empty($this->Form->error('estadotecho'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estadotecho') . '</div>';
                }
                ?>
            </div>

            <!-- dormitorios -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="dormitorios" class="font-semibold">¿Cuantos cuartos se utilizan para dormir?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('dormitorios', [
                    'type' => 'select',
                    'id' => 'numerohogares',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'label' => '',
                    'options' => $numhogaresOptions

                ]);
                if (!empty($this->Form->error('dormitorios'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('dormitorios') . '</div>';
                }
                ?>
            </div>

            <!-- hacinamiento -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="cuerpoterritorio" class="font-semibold">¿En algunos de los dormitorios de la vivienda duermen tres o mas personas?</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Sociambiental][hacinamiento]"
                            id="cuerpoterritorio-no"
                            value="0"
                            class="hidden peer"
                            data-target="cuerpoterritorio"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="cuerpoterritorio-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Sociambiental][hacinamiento]"
                            id="cuerpoterritorio-si"
                            value="1"
                            data-target="cuerpoterritorio"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="cuerpoterritorio-si"
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

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-circle-exclamation text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Servicios y Riesgos de la vivienda</h1>
                <p class="text-gray-500">Complementa la información de los servicios y riesgos de la vivienda.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Riesgos externos -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="riesgoexterno" class="font-semibold">Riesgos externos cerca a la vivienda</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('riesgoexterno', [
                    'type' => 'select',
                    'id' => 'riesgoexterno',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $externalRiskOptions,
                    'label' => '',
                    'empty' => 'Seleccione riesgo',
                ]);
                if (!empty($this->Form->error('riesgoexterno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgoexterno') . '</div>';
                }
                ?>
            </div>

            <!-- Actividad productiva -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="actividad" class="font-semibold">¿Hay Actividad productiva en la vivienda?</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Sociambiental][actividad]"
                            id="actividad-no"
                            value="0"
                            class="hidden peer"
                            data-target="actividad"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="actividad-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Sociambiental][actividad]"
                            id="actividad-si"
                            value="1"
                            data-target="actividad"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="actividad-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>
            </div>

            <!-- Acceso a sitios de interes -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="riesgoexterno" class="font-semibold">Sitios de interés de fácil acceso desde vivienda</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('acceso', [
                    'type' => 'select',
                    'id' => 'acceso',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $accessOptions,
                    'label' => '',
                    'empty' => 'Seleccione acceso',
                ]);
                if (!empty($this->Form->error('acceso'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('acceso') . '</div>';
                }
                ?>
            </div>

            <!-- Riesgo de accidente en la vivienda -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="riesgoexterno" class="font-semibold">Riesgo de accidente en la vivienda</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('riesgo', [
                    'type' => 'select',
                    'id' => 'riesgo',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $accidentRiskOptions,
                    'label' => '',
                    'empty' => 'Seleccione riesgo',
                ]);
                if (!empty($this->Form->error('riesgo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgo') . '</div>';
                }
                ?>
            </div>

            <!-- Fuente de abastecimiento de agua -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="riesgoexterno" class="font-semibold">¿Cuál es la principal fuente de abastecimiento de agua para consumo?</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('aguaservicio', [
                    'type' => 'select',
                    'id' => 'aguaservicio',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $waterSupplyOptions,
                    'label' => '',
                    'empty' => 'Seleccione fuente de agua',
                ]);
                if (!empty($this->Form->error('aguaservicio'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('aguaservicio') . '</div>';
                }
                ?>
            </div>

            <!-- Disposición de excretas en la vivienda -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="diposicionexcretas" class="font-semibold">Disposición de excretas en la vivienda</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('diposicionexcretas', [
                    'type' => 'select',
                    'id' => 'diposicionexcretas',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $excretaDisposalOptions,
                    'label' => '',
                    'empty' => 'Seleccione excretas',
                ]);
                if (!empty($this->Form->error('diposicionexcretas'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('diposicionexcretas') . '</div>';
                }
                ?>
            </div>

            <!-- Disposición final de basura -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="basura" class="font-semibold">Disposición final de basura</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('basura', [
                    'type' => 'select',
                    'id' => 'basura',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $garbageDisposalOptions,
                    'label' => '',
                    'empty' => 'Seleccione disposición final de basura',
                ]);
                if (!empty($this->Form->error('basura'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('basura') . '</div>';
                }
                ?>
            </div>

            <!-- Proceso de separación de residuos -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="reciclaje" class="font-semibold">¿Se realiza el proceso de separación de los residuos en la fuente?</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('reciclaje', [
                    'type' => 'select',
                    'id' => 'reciclaje',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $recyclingOptions,
                    'label' => '',
                    'empty' => 'Seleccione reciclaje',
                ]);
                if (!empty($this->Form->error('reciclaje'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('reciclaje') . '</div>';
                }
                ?>
            </div>

            <!-- Presencia de vectores en la vivienda -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
                    <label for="vector" class="font-semibold">Presencia de vectores en la vivienda</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('vector', [
                    'type' => 'select',
                    'id' => 'vector',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $vectoresOption,
                    'label' => '',
                    'empty' => 'Seleccione vector',
                ]);
                if (!empty($this->Form->error('vector'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('vector') . '</div>';
                }
                ?>
            </div>

            <!--  -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">10</span>
                    <label for="aguaresiduales" class="font-semibold">Aguas residuales domésticas</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('aguaresiduales', [
                    'type' => 'select',
                    'id' => 'aguaresiduales',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $domesticWaterOptions,
                    'label' => '',
                    'empty' => 'Seleccione aguas residuales',
                ]);
                if (!empty($this->Form->error('aguaresiduales'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('aguaresiduales') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-circle-exclamation text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Mascotas o
                    animales de crianza en el hogar</h1>
                <p class="text-gray-500">Complementa la información sobre la tenencia de mascotas o animales de crianza en el hogar.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Mascotas -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="mascotas" class="font-semibold">¿Hay animales en el hogar?</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            id="mascotas-no"
                            value="0"
                            class="hidden peer"
                            data-target="mascotas"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="mascotas-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            id="mascotas-si"
                            value="1"
                            data-target="mascotas"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="mascotas-si"
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

<body style="font-size: 14px;">
    <div>
        <?php echo $this->Form->create('Sociambiental'); ?>
        <div class="form-group col-sm-12 center">

            <fieldset>

                <div class="col-12 text-center">
                    <h1 class="title-general-forms">Módulo Socioambiental
                    </h1>
                </div>

                <h2 style="color: #3366CC;  font-size:30px ; margin-top: 25px; ">Datos Básicos</h2>
                <hr style=" border:0.1px solid rgba(0,0,0,.125);">
                <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                    <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                        <div class="form-group row">
                            <?php
                            echo $this->Form->hidden('aceptaformulario', array(
                                'value' => 'Si acepta'
                            ));
                            ?>


                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('responsable_id', array(
                                    'label' => 'Responsable diligenciamiento Encuesta',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'class' => 'select-search'
                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('latitud', array(
                                    'label' => 'Geopunto latitud',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '0.000000 7 números'
                                )); ?>
                                <p class="help-block">Coordenada de latitud en la ubicación geográfica. Ej.:
                                    1.670348
                                    Valor numérico con decimales, separador punto. Acepta valores negativos
                                </p>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('longitud', array(
                                    'label' => 'Geopunto longitud',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '-00.000000 8 números'
                                )); ?>
                                <p class="help-block">Coordenada de longitud en la ubicación geográfica . Ejemplo:
                                    -70.240149
                                    Valor numérico con decimales, separador punto. Acepta valores negativos
                                </p>
                            </div>

                        </div>
                    </div>
                </div>



                <h2 class="subtitle-general-forms">Mascotas o
                    animales de crianza en el hogar </h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $numMascotaOption = [
                                    '' => 'Elegir',
                                    '0' => '0',
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5 y mas',

                                ];
                                echo $this->Form->input('numeroGatos', [
                                    'label' => '¿Cuantos Gatos tiene?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $numMascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('numeroPerros', [
                                    'label' => '¿Cuantos Perros tiene?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $numMascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">

                                <?php
                                $cuidadoMascotaOptions = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                ];
                                echo $this->Form->input('desparasitamascotas', [
                                    'label' => '¿Se desparasita a perros o gatos?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'desparasitacion'
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('vacunamascotas', [
                                    'label' => '¿Se ha vacunado a perros o gatos en el ultimo año?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' =>  $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'vacunacion',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <div class="flex items-center mb-4">
                                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold"></span>
                                    <label for="tipopoblacion" class="font-semibold">¿Tienen animales de
                                        producción?</label>
                                    <p class="text-red-600">*</p>

                                </div>
                                <?php
                                $mascotaOption = [
                                    'No' => 'No',
                                    'Aves' => 'Aves',
                                    'Cerdos' => 'Cerdos',
                                    'Cuyes_conejos' => 'Cuyes/conejos'
                                ];
                                echo $this->Form->input('mascotas', [
                                    'type' => 'select',
                                    'label' => false,
                                    'multiple' => true,
                                    'id' => 'mascotas',
                                    'class' => 'w-full',
                                    'empty' => false,
                                    'options' => $mascotaOption,
                                    // No mostrar error aquí
                                    'style' => 'height:30px;  font-size: 15px ; width:100%'
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('cuidadomascotas', [
                                    'label' => '¿Las excretas de los animales de compañía se recogen y disponen adecuadamente? ',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100% ;margin-bottom: 30px;',
                                ]);
                                ?>
                            </div>

                        </div>
                    </div>


                    <?php //echo $this->Form->end(__('Guardar y Listar')); 
                    ?>
                    <?php echo $this->Form->submit('Guardar y continuar', [
                        'name' => 'btn',
                        'class' => 'my-button',
                    ]); ?>
                    <?php echo $this->Form->submit('Guardar y finalizar', [
                        'name' => 'btn',
                        'class' => 'my-button',
                        'style' => 'width:185px'
                    ]); ?>







            </fieldset>
        </div>
    </div>



    <script type="text/javascript">
        // Mostrar el modal al cargar la página
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
                    firstDay: 1
                }
            }, function(start) {
                let fecha = start.format('YYYY-MM-DD');
                console.log("Fecha seleccionada:", fecha);
            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            const choices = new Choices("#producto_id", {
                searchEnabled: true,
                searchChoices: true,
                removeItemButton: false,
                itemSelectText: '',
                shouldSort: false,
                searchPlaceholderValue: "Escriba para filtrar...",
                fuseOptions: {
                    includeScore: true,
                    threshold: 0.3,
                    keys: ['label', 'value']
                },
                renderChoiceLimit: -1, // Sin límite de renderizado
                searchResultLimit: 20, // Puedes aumentar este valor si tienes muchos resultados
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
    </script>