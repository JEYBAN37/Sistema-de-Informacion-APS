<?php $this->layout = 'default_familia';
echo $this->Html->script('ckeditor/ckeditor');
?>
<!-- Choices.js -->
<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Novedad<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Modulo Novedades
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Ingresar el formulario completamente de otra manera se invalidara la novedad.
    </p>
</div>
<?php

echo $this->Form->create('Visitasnegada',  [
    'class' => 'space-y-6',
    'novalidate' => true
]);
// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['responsable_id']) ? $_SESSION['Auth']['User']['responsable_id'] : '';
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));
$TipoDeDocumentoOptions = array(
    '' => 'Elegir',
    'CC' => 'Cedula de ciudadania',
    'TI' => 'Tarjeta de identidad',
    'PPT' => 'Permiso Protección Temporal',
    'SD' => 'Sin Dato',

);

$EstateHome = array(
    '' => 'Elegir',
    'Cerrada' => 'Cerrada',
    'Vacia' => 'Vacia',
    'No aceptó ficha' => 'No aceptó ficha',
    'Renuente' => 'Renuente',
    'Local Comercial' => 'Local Comercial',

);
?>

<?php echo $this->Form->input('id') ?>

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
                            name="data[Visitasnegada][fecha]"
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

                        <?php
                        echo $this->Form->input('latitud', [
                            'type' => 'text',
                            'id' => 'latitud',
                            'name' => 'data[Visitasnegada][latitud]',
                            'label' => false,
                            'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                            'error' => false
                        ]);
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
                            'name' => 'data[Visitasnegada][longitud]',
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
                <p class="text-gray-400 text-xs mt-2">Colocar la nomenclatura o referencia para proxima visita
                </p>
            </div>

            <!-- Apellidos de la familia -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6 sm:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="nombreshabitante" class="font-semibold">Nombre de la Persona Presente</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('nombreshabitante', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('nombreshabitante'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('nombreshabitante') . '</div>';
                }
                ?>
            </div>

            <!-- Tipo de Vivienda -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="proactividad_id" class="font-semibold">Tipo de Documento</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('tipodocumento', [
                    'type' => 'select',
                    'id' => 'tipodocumento',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $TipoDeDocumentoOptions,
                    'label' => '',
                    'empty' => 'Seleccione tipo de documento',
                ]);
                if (!empty($this->Form->error('tipodocumento'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tipodocumento') . '</div>';
                }
                ?>
            </div>

            <!-- Estrato -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="proactividad_id" class="font-semibold">Numero de documento</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('numerodocumento', [
                    'type' => 'text',
                    'id' => 'numerodocumento',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => '',
                    'error' => false,
                    'maxlength' => 20,
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*',
                    // client-side: strip any non-digit characters as the user types
                    'oninput' => "this.value = this.value.replace(/[^0-9]/g, '')"
                ]);
                if (!empty($this->Form->error('numerodocumento'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numerodocumento') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
                    <label for="telefono" class="font-semibold">Telefono</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('telefono', [
                    'type' => 'text',
                    'id' => 'telefono',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => '',
                    'error' => false,
                    'maxlength' => 20,
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*',
                    // client-side: strip any non-digit characters as the user types
                    'oninput' => "this.value = this.value.replace(/[^0-9]/g, '')"
                ]);
                if (!empty($this->Form->error('telefono'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('telefono') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">10</span>
                    <label for="estadocasa" class="font-semibold">Estado de la casa</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php

                echo $this->Form->input('estadocasa', [
                    'type' => 'select',
                    'id' => 'estadocasa',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'label' => '',
                    'options' => $EstateHome,
                ]);
                if (!empty($this->Form->error('estadocasa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estadocasa') . '</div>';
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
                            <strong>Cerrada:</strong> No atienden pero se reconoce que si habitan en la residencia. <br>
                            <strong>Vacia:</strong> La residencia esta desocupada o no habita nadie. <br>
                            <strong>No aceptó ficha:</strong> La persona manifiesta que no desea participar. <br>
                            <strong>Local Comercial:</strong> Vivienda de uso comercial(Taller, tienda, bodega) donde no habitan famlias.
                        </p>
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
            <i class="fa-solid fa-house-laptop text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Observacion</h1>
                <p class="text-gray-500">Describe tu Observacion de manera clara para anexar a la novedad</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Objetivos específicos -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Observacion general</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('observacion', [
                    'label' => '',
                    'type' => 'textarea',
                    'id' => 'VisitasnegadaObservacion',
                    'data-maxlength' => 800,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('observacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacion') . '</div>';
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
                    Actualizar
                </button>
            </div>
            <!-- Botón -->
            <div class="w-full p-2">
                <button type="button" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2" onclick="preventBackNavigation()">
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

        if (typeof CKEDITOR !== "undefined" && document.getElementById("VisitasnegadaObservacion")) {
            CKEDITOR.replace("VisitasnegadaObservacion");
        }
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