<?php $this->layout = 'default_familia';  ?>
<div id="consentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40" style="display: flex;">
    <div class="bg-white rounded-xl shadow-2xl max-w-lg w-full p-8 relative">
        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-2xl font-bold" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'index']); ?>'">×</button>
        <h3 class="text-2xl font-semibold mb-4 text-center text-teal-600">Consentimiento informado</h3>
        <div class="mb-6">
            <h4 class="text-lg font-semibold mb-2">Cordial saludo.</h4>
            <p class="text-gray-700 text-justify">
                Con el diligenciamiento del presente formulario
                <strong>autorizo libre y expresamente</strong>
                a la Secretaría de Salud de Pasto para que realice el tratamiento de los datos personales registrados y recolectados, de igual manera manifiesto que
                <strong>he sido informado</strong>
                sobre la finalidad de la recolección de la misma, con el propósito de implementar el modelo predictivo, preventivo y resolutivo basado en
                <strong>Atención Primaria en Salud</strong>
                , dando cumplimiento a la
                <strong>privacidad y protección de datos</strong>
                dispuesto en la Ley 1581 de 2012, el Decreto 1377 de 2013 y la circular externa 008 de 2020 de la Superintendencia de registro y comercio.
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-3 justify-center mt-6">
            <a href="<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'index']); ?>" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold text-center">No acepto</a>
            <a href="<?php echo $this->Html->url(['controller' => 'VisitasNegadas', 'action' => 'add']); ?>" class="bg-white hover:bg-gray-100 text-teal-600 border border-teal-600 px-4 py-2 rounded-lg font-semibold text-center">Agregar novedad</a>
            <button id="aceptoBtn" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg font-semibold text-center">Sí acepto</button>
        </div>
    </div>
</div>

<script>
    function buscarCedula() {
        var ced = document.getElementById('cedula').value;
        if (ced.length < 5) return;

        fetch('./buscarCedula/' + ced)
            .then(r => r.json())
            .then(d => {
                document.getElementById('resultado').innerHTML = JSON.stringify(d);
            });
    }
</script>


<!-- Choices.js -->
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
    'novalidate' => true
]);

// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['responsable_id']) ? $_SESSION['Auth']['User']['responsable_id'] : '';
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));
echo $this->Form->hidden('aceptaformulario', array(
    'value' => 'Si acepta'
));


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

$optionTecho = array(
    '' => 'Elegir',
    '1.Concreto' => 'Concreto',
    '4.Eternit' => 'Eternit',
    '2.Tejas de barro' => 'Tejas de barro',
    '4.Zinc' => 'Zinc',
    '6.Plastico' => 'Plástico',
    '7.Desecho' => 'Desechos (cartón, lata, tela, sacos, etc)',
    '8.Otro' => 'Otro',
    'SD' => 'Sin dato'

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

$animalesOptions = [
    '1.Perros' => 'Perros',
    '2.Gato' => 'Gato',
    '3.Porcinos' => 'Porcinos',
    '4.Bóvidos: Búfalos, vacas, toros' => 'Bóvidos: Búfalos, vacas, toros',
    '5.Equidos: Asnos, mulas, caballos, burros' => 'Equidos: Asnos, mulas, caballos, burros',
    '6.Ovinos / caprino' => 'Ovinos / caprino',
    '7.Aves de producción' => 'Aves de producción',
    '8.Aves ornamentales' => 'Aves ornamentales',
    '9.Peces ornamentales, hamster' => 'Peces ornamentales, hamster',
    '10.Cobayos, conejos' => 'Cobayos, conejos',
    '11.Animales silvestres' => 'Animales silvestres',
    '12.Otro' => 'Otro',
];
?>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-laptop text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Consultar Cedula Caracterizada</h1>
                <p class="text-gray-500">Ingresa el numero de cedula para verificar la caracterizacion.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Fecha de visita -->
            <div class="col-span-2 md:col-span-2 text-md font-semibold my-4 sm:mr-4">
                <div class="flex items-center">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">1</span>
                    <label for="resultadoEcomapa" class="font-semibold">Verifica Caracterizacion</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <input
                            type="text"
                            id="cedula"
                            onkeyup="buscarCedula()"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Ingresa número de documento" />
                        <span class="text-sm text-red-600 ">
                            <?= $this->Form->error('fecha') ?>
                        </span>
                    </div>

                </div>
            </div>

            <div class="col-span-2 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">R</span>
                    <label for="proactividad_id" class="font-semibold">Resultado</label>
                    <p class="text-red-600">*</p>

                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <pre
                            id="resultado"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full h-40 relative cursor-pointer overflow-auto whitespace-pre-wrap font-mono text-sm">
                        </pre>
                    </div>
                </div>

                <script>
                    // Sobrescribe/actualiza la función buscarCedula para mostrar JSON ordenado (pretty)
                    function buscarCedula() {
                        var ced = document.getElementById('cedula').value;
                        if (ced.length < 5) return;

                        fetch('./buscarCedula/' + ced)
                            .then(response => response.json())
                            .then(data => {
                                try {
                                    // formatear JSON con indentación de 2 espacios
                                    const pretty = JSON.stringify(data, null, 2);
                                    document.getElementById('resultado').textContent = pretty;
                                } catch (e) {
                                    // en caso de error, mostrar fallback
                                    document.getElementById('resultado').textContent = typeof data === 'string' ? data : JSON.stringify(data);
                                }
                            })
                            .catch(err => {
                                document.getElementById('resultado').textContent = 'Error: ' + err.message;
                            });
                    }
                </script>
            </div>
        </div>
    </div>
</div>


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
                        <input
                            type="text"
                            name="data[Sociambiental][fecha]"
                            id="fecha"
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

            <div class="col-span-2 md:col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="familiograma" class="font-semibold">Ubicacion Geoespacial</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="flex flex-col md:flex-row w-full">

                    <div class="w-full md:w-1/2" id="coords">

                        <input type="text"
                            id='latitud' ,
                            name='data[Sociambiental][latitud]' ,
                            label=false,
                            class='border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900' ,
                            error=false>
                        <?php

                        if (!empty($this->Form->error('latitud'))) {
                            echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('latitud') . '</div>';
                        }
                        ?>
                        <p class="text-gray-400 text-xs mt-2">Coordenada de latitud en la ubicación geográfica . Ejemplo:
                            3.451646
                            Valor numérico con decimales, separador punto. Acepta valores negativos
                        </p>

                        <?php
                        echo $this->Form->input('longitud', [
                            'type' => 'text',
                            'id' => 'longitud',
                            'name' => 'data[Sociambiental][longitud]',
                            'label' => false,
                            'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                            'error' => false
                        ]);

                        if (!empty($this->Form->error('longitud'))) {
                            echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('longitud') . '</div>';
                        }
                        ?>
                        <p class="text-gray-400 text-xs mt-2">Coordenada de longitud en la ubicación geográfica . Ejemplo:
                            -70.240149
                            Valor numérico con decimales, separador punto. Acepta valores negativos
                        </p>
                    </div>

                    <button class="flex w-full md:w-1/2  items-center justify-center mt-6" type="button" id="getLocation">
                        <i class="w-32 fa-solid fa-location-crosshairs text-white bg-teal-600 p-3 rounded-lg hover:bg-blue-700"></i>
                    </button>
                </div>



            </div>

            <!-- Barrio / Vereda -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6 sm:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">10</span>
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
                    'options' => $optionTecho,
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
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'options' => $externalRiskOptions,
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
                    'multiple' => true,
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
                    'multiple' => true,
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
                    'error' => false,
                    'options' => $vectoresOption,
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'class' => 'w-full',
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
            <i class="fa-solid fa-dog text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
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
                            name="data[Sociambiental][cuidadomascotas]"
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
                            name="data[Sociambiental][cuidadomascotas]"
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
            <div id="mascotas" class="grid grid-cols-2 gap-4 col-span-2 md:col-span-2 text-md font-semibold">

                <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                    <div class="flex items-center mb-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                        <label for="numeroAnimales" class="font-semibold">¿Cuales animales hay en el hogar?</label>
                    </div>
                    <?php
                    echo $this->Form->input('numeroGatos', [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => true,
                        'empty' => false,
                        'options' => $animalesOptions,
                        'class' => 'w-full',
                        'id' => 'numeroGatos',
                        'error' => false,
                        'label' => false,

                    ]);
                    if (!empty($this->Form->error('numeroGatos'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numeroGatos') . '</div>';
                    }
                    ?>
                </div>

                <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                    <div class="flex items-center mb-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                        <label for="numeroAnimales" class="font-semibold">¿Cuantos animales hay en el hogar?</label>
                    </div>
                    <?php
                    echo $this->Form->input('numeroPerros', [
                        'type' => 'number',
                        'label' => false,
                        'empty' => false,
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                        'error' => false,
                        'label' => '',
                        'default' => 0,

                    ]);
                    if (!empty($this->Form->error('numeroPerros'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numeroPerros') . '</div>';
                    }
                    ?>
                </div>

                <!-- de mascotas -->
                <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                    <div class="flex items-center mb-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                        <label for="desparasitamascotas" class="font-semibold">¿Se desparasita a perros o gatos?</label>
                    </div>

                    <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                        <!-- Botón NO -->
                        <div>
                            <input type="radio"
                                name="data[Sociambiental][desparasitamascotas]"
                                id="desparasitamascotas-no"
                                value="0"
                                class="hidden peer"
                                data-target="desparasitamascotas"
                                data-show="false"
                                checked /> <!-- 👈 Por defecto NO -->
                            <label for="desparasitamascotas-no"
                                class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                                -
                            </label>
                        </div>

                        <!-- Botón SÍ -->
                        <div>
                            <input type="radio"
                                name="data[Sociambiental][desparasitamascotas]"
                                id="desparasitamascotas-si"
                                value="1"
                                data-target="desparasitamascotas"
                                data-show="true"
                                class="hidden peer cursor-pointer" />
                            <label for="desparasitamascotas-si"
                                class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                                X
                            </label>
                        </div>
                    </div>
                </div>

                <!-- vacunacion -->
                <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                    <div class="flex items-center mb-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                        <label for="vacunacionmascotas" class="font-semibold">¿Se ha vacunado a perros o gatos en el ultimo año?</label>
                    </div>

                    <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                        <!-- Botón NO -->
                        <div>
                            <input type="radio"
                                name="data[Sociambiental][vacunamascotas]"
                                id="vacunacionmascotas-no"
                                value="0"
                                class="hidden peer"
                                data-target="vacunacionmascotas"
                                data-show="false"
                                checked /> <!-- 👈 Por defecto NO -->
                            <label for="vacunacionmascotas-no"
                                class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                                -
                            </label>
                        </div>

                        <!-- Botón SÍ -->
                        <div>
                            <input type="radio"
                                name="data[Sociambiental][vacunamascotas]"
                                id="vacunacionmascotas-si"
                                value="1"
                                data-target="vacunacionmascotas"
                                data-show="true"
                                class="hidden peer cursor-pointer" />
                            <label for="vacunacionmascotas-si"
                                class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                                X
                            </label>
                        </div>
                    </div>
                </div>

                <!-- cuidado excretas -->
                <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                    <div class="flex items-center mb-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                        <label for="vacunacionmascotas" class="font-semibold">¿Las excretas de los animales de compañía se recogen y disponen adecuadamente</label>
                    </div>

                    <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                        <!-- Botón NO -->
                        <div>
                            <input type="radio"
                                name="data[Sociambiental][otramascota]"
                                id="cuidadoexcretas-no"
                                value="0"
                                class="hidden peer"
                                data-target="cuidadoexcretas"
                                data-show="false"
                                checked /> <!-- 👈 Por defecto NO -->
                            <label for="cuidadoexcretas-no"
                                class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                                -
                            </label>
                        </div>

                        <!-- Botón SÍ -->
                        <div>
                            <input type="radio"
                                name="data[Sociambiental][otramascota]"
                                id="cuidadoexcretas-si"
                                value="1"
                                data-target="cuidadoexcretas"
                                data-show="true"
                                class="hidden peer cursor-pointer" />
                            <label for="cuidadoexcretas-si"
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
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-upload text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Carga de información</h1>
                <p class="text-gray-500">Realiza la consolidacion del archivo segun tu disponibilidad de Internet recuerda asignar un id manual para la vivienda si lo exportas como JSON.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3">

            <!-- Botón -->
            <div class="w-full p-2">
                <button name="btn" value="Guardar y continuar" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                            <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                            <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                        </svg>
                    </span>
                    Guardar y continuar
                </button>
            </div>



            <!-- Botón -->
            <div class="w-full  p-2">
                <button name="btn" value="Guardar y Salir" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            <circle cx="12" cy="12" r="1" />
                            <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                        </svg>

                    </span>
                    Guardar y Salir
                </button>
            </div>



            <!-- Botón -->
            <div class="w-full p-2">
                <button type="button" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2" onclick="cargarEnStorage()">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                            <path d="M10 12a1 1 0 0 0-1 1v1a1 1 0 0 1-1 1 1 1 0 0 1 1 1v1a1 1 0 0 0 1 1" />
                            <path d="M14 18a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1 1 1 0 0 1-1-1v-1a1 1 0 0 0-1-1" />

                        </svg>

                    </span>
                    JSON
                </button>
            </div>

            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>



<script type="text/javascript">
    // Mostrar el modal al cargar la página
    $(function() {
        $('#fecha').daterangepicker({
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

    document.addEventListener("DOMContentLoaded", function() {
        if (!localStorage.getItem('consentAccepted')) {
            document.getElementById('consentModal').style.display = 'flex';
            document.body.classList.add('overflow-hidden');
        } else {
            document.getElementById('consentModal').style.display = 'none';
            document.body.classList.remove('overflow-hidden');
        }

        document.getElementById('aceptoBtn').onclick = function() {
            document.getElementById('consentModal').style.display = 'none';
            document.body.classList.remove('overflow-hidden');
            localStorage.setItem('consentAccepted', 'true');
        };


        // Busca todos los radios con data-target
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
        const btn = document.getElementById('getLocation');
        const lat = document.getElementById('latitud');
        const lon = document.getElementById('longitud');

        btn.addEventListener('click', () => {
            btn.disabled = true;
            btn.textContent = "📡 Obteniendo ubicación...";

            if (!navigator.geolocation) {
                alert("❌ La geolocalización no es soportada en este navegador.");
                btn.disabled = false;
                btn.textContent = "Obtener ubicación actual manualmente";
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (pos) => {
                    const {
                        latitude,
                        longitude
                    } = pos.coords;
                    // Asignar valores directamente a los campos del formulario
                    lat.value = latitude.toFixed(6);
                    lon.value = longitude.toFixed(6);

                    btn.textContent = "Ubicación capturada";
                    btn.classList.add("bg-teal-500", "text-white", "rounded-lg", "px-3", "md:mx-8", "md:mb-8");
                },
                (err) => {
                    alert("⚠️ Error al obtener ubicación: " + err.message);
                    btn.disabled = false;
                    btn.textContent = "Obtener ubicación actual";
                }, {
                    enableHighAccuracy: true,
                    timeout: 10000,
                    maximumAge: 0
                }
            );
        });

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

        const choices_animales = new Choices("#numeroGatos", {
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
            placeholderValue: "Seleccione animales..."
        });

        const choices_vector = new Choices("#vector", {
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

        const choices_riesgoexterno = new Choices("#riesgoexterno", {
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

        const choices_acceso = new Choices("#acceso", {
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

        const choices_riesgo = new Choices("#riesgo", {
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

    (function() {
        const resultado = document.getElementById('resultado');

        function escapeHtml(str) {
            return String(str)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        function render(text) {
            const safe = escapeHtml(text || '').trim() || 'Resultado aquí';
            // desconectar observer antes de reescribir para evitar bucles
            if (observer) observer.disconnect();

            resultado.innerHTML = `
                                        <pre id="resultadoText" class="whitespace-pre-wrap break-words text-sm">${safe}</pre>
                                        <button type="button" id="copyBtn" class="absolute top-2 right-2 bg-teal-600 text-white px-2 py-1 rounded text-xs">Copiar</button>
                                    `;

            attachCopy();
            if (observer) observer.observe(resultado, {
                childList: true,
                subtree: true,
                characterData: true
            });
        }

        function attachCopy() {
            const btn = document.getElementById('copyBtn');
            const pre = document.getElementById('resultadoText');
            if (!btn || !pre) return;

            btn.onclick = copyText;
            // click en el cuadro también copia
            resultado.onclick = function(e) {
                if (e.target && e.target.id === 'copyBtn') return; // ya lo maneja el botón
                copyText();
            };

            function copyText() {
                const text = pre.textContent.trim();
                if (!text) {
                    alert('No hay información para copiar');
                    return;
                }
                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(text).then(() => {
                        const original = btn.textContent;
                        btn.textContent = 'Copiado';
                        setTimeout(() => btn.textContent = original, 1400);
                    }).catch(() => alert('No se pudo copiar al portapapeles'));
                } else {
                    // fallback
                    const ta = document.createElement('textarea');
                    ta.value = text;
                    document.body.appendChild(ta);
                    ta.select();
                    try {
                        document.execCommand('copy');
                        const original = btn.textContent;
                        btn.textContent = 'Copiado';
                        setTimeout(() => btn.textContent = original, 1400);
                    } catch (e) {
                        alert('No se pudo copiar al portapapeles');
                    }
                    document.body.removeChild(ta);
                }
            }
        }

        // Observador para detectar cuando tu fetch (buscarCedula) escribe en #resultado
        const observer = new MutationObserver(function(mutations) {
            // leer el texto actual y re-renderizar con nuestro control (pre + boton)
            const text = resultado.textContent || '';
            render(text);
        });

        // inicializar contenido vacío controlado
        render('');
        // arrancar observador (para que cuando buscarCedula haga innerHTML, lo capture)
        observer.observe(resultado, {
            childList: true,
            subtree: true,
            characterData: true
        });
    })();

    function saveVivienda(data) {
        let viviendas = JSON.parse(localStorage.getItem("viviendas")) || [];
        viviendas.push(data);
        localStorage.setItem("viviendas", JSON.stringify(viviendas));
    }

    cargarEnStorage = function() {
        const form = document.querySelector('form');
        const formData = new FormData(form);
        const dataObject = {};

        formData.forEach((value, key) => {
            // Manejar múltiples selecciones (arrays)
            if (dataObject[key]) {
                if (Array.isArray(dataObject[key])) {
                    dataObject[key].push(value);
                } else {
                    dataObject[key] = [dataObject[key], value];
                }
            } else {
                dataObject[key] = value;
            }
        });
        
        // un mensaje para ponerle un id temporal y esribr un numero de vivienda
        const input = prompt('Ingrese el ID de vivienda para crear la familia (ej: 123):');
        if (input === null) return; // usuario canceló

        const idVivienda = input.trim();
        if (idVivienda === '') {
            alert('Debe ingresar un ID de vivienda para continuar.');
            return;
        }

        // Validación básica: permitir solo números, pero dar opción si no es numérico
        if (!/^\d+$/.test(idVivienda)) {
            if (!confirm('El ID ingresado no parece numérico. ¿Desea continuar de todos modos?')) {
                return;
            }
        }

        if (confirm('¿Está seguro de crear la familia con ID de vivienda ' + idVivienda + '?')) {
            // Redirige a la acción add pasando el ID como segmento de URL
            dataObject['data[Sociambiental][id_sociambiental_temporal]'] = idVivienda;
            saveVivienda(dataObject);
            alert('✅ Datos guardados en el almacenamiento local como JSON.');
            window.location.href = 'http://localhost/APS_DEMO/offline.html';
        }
    };
</script>