<?php $this->layout = 'default_familia'; ?>
<link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- JS de Leaflet -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Información de la Vivienda<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Seguimiento Sociambiental
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Visualización de la información de la vivienda.
    </p>
</div>


<body class="bg-gray-50 p-2 sm:p-4">
    <div class="flex max-w-6xl mx-auto text-center mb-4 gap-4">
        <button title="Editar" type="button" id="btn-print" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'Sociambientals', 'action' => 'edit/', $sociambiental['Sociambiental']['id']]); ?>'">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                <path d="m15 5 4 4" />
            </svg>
        </button>

        <button title="Agregar Familia" type="button" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'add/', $sociambiental['Sociambiental']['id']]); ?>'"
            class="flex items-center w-38 space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
            <i class="fas fa-users text-xl"></i>
        </button>

        <button title="Ver Familias" type="button" id="btn-hide"
            class="flex items-center w-38 space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
            <svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                <path d="M12 3v17a1 1 0 0 1-1 1H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1H3" />
                <path d="m16 19 2 2 4-4" />
            </svg>
        </button>

        <?php 

        if ($responsable == $sociambiental['Sociambiental']['responsable_id'] ) : ?>
            <button title="Eliminar Ficha" type="button" onclick="if (confirm('¿Está seguro/a de eliminar este registro? Esta acción no se puede deshacer.')) { window.location.href='<?php echo $this->Html->url(['controller' => 'Sociambientals', 'action' => 'delete/', $sociambiental['Sociambiental']['id']]); ?>'; }"
                class="flex items-center w-38 space-x-2 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                <i class="fas fa-trash-alt text-xl"></i>
            </button>
        <?php endif; ?>
    </div>
    <!-- Document Container -->
    <div class="max-w-6xl mx-auto bg-white overflow-hidden mt-4 sm:mt-4 p-4 shadow-2xl rounded-xl" id="print-area">
        <!-- Header Section -->
        <table class="w-full  border border-gray-300 text-sm text-gray-800">
            <tbody>
                <!-- Encabezado con logo y datos -->
                <tr>
                    <td class="border border-gray-300 font-semibold text-center px-8 py-2 text-slate-800 w-full uppercase" colspan="2">
                        Información de la Vivienda
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        ID
                    </td>
                    <td class="border border-gray-300 text-center p-2 text-gray-800">
                        <?php echo h($sociambiental['Sociambiental']['id']) ?>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        Encuestador
                    </td>
                    <td class="border border-gray-300 text-center p-2 text-gray-800">
                        <?php echo h($sociambiental['Responsable']['nombres']) ?>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        Fecha
                    </td>
                    <td class="border border-gray-300 text-center p-2 text-gray-800">
                        <?php echo h(!empty($sociambiental['Sociambiental']['fecha']) ? date('Y m d', strtotime($sociambiental['Sociambiental']['fecha'])) : '') ?>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        Apellidos de la Familia
                    </td>
                    <td class="border border-gray-300 text-center p-2 text-gray-800">
                        <?php echo h(!empty($sociambiental['Sociambiental']['apellidosfamilia'])) ?>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        N° de Familias
                    </td>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        N° de Personas
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-gray-800">
                        <?php echo h($sociambiental['Sociambiental']['numerohogares']) ?>
                    </td>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-gray-800">
                        <?php echo h($sociambiental['Sociambiental']['numerohabitantes']) ?>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600" colspan="2">
                        Ubicación
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600" colspan="2">
                        <div id="mapContainer" style="width: 100%; height: 250px; margin-top: 10px;"></div>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        Direccion
                    </td>
                    <td class="border border-gray-300 text-center p-2 text-gray-800">
                        <?php echo h(!empty($sociambiental['Sociambiental']['direccion']) ? date('Y m d', strtotime($sociambiental['Sociambiental']['direccion'])) : '') ?>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        Microterritorio
                    </td>
                    <td class="border border-gray-300 text-center p-2 text-gray-800">
                        <?php echo ($sociambiental['Ubicacion']['microterritorio']) ?>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                        Manzana
                    </td>
                    <td class="border border-gray-300 text-center p-2 text-gray-800">
                        <?php echo ($sociambiental['Sociambiental']['barriovereda']) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="max-w-6xl mx-auto bg-white overflow-hidden mt-4 sm:mt-4 p-4 shadow-2xl rounded-xl">
        <div class="p-2 md:p-8">
            <!-- Contenido a imprimir -->
            <div class="flex items-center mb-4">
                <i class="fas fa-users text-2xl text-teal-600 p-4 bg-teal-100 rounded-lg"></i>

                <div class="ml-4">
                    <h1 class="text-lg md:text-xl font-semibold flex">
                        Familias Caracterizadas
                    </h1>
                    <p class="text-sm md:text-base text-gray-500">Aqui se mostraran las familias caracterizadas de la vivienda.</p>
                </div>

            </div>

            <div class="overflow-x-auto">
                <?php if (!empty($familias)) : ?>
                    <?php foreach ($familias as $familia) : ?>
                        <div class="mb-6">
                            <table class="w-full">
                                <tbody>
                                    <tr>
                                        <td colspan="9">
                                            <!-- Botón de menú de opciones -->
                                            <div class="relative inline-block text-left">
                                                <button type="button" class="flex items-center justify-center w-8 h-8 rounded-full hover:bg-gray-200 hover:rounded-md focus:outline-none" onclick="toggleMenu(this)">
                                                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path d="M3 5h1" />
                                                        <path d="M3 12h1" />
                                                        <path d="M3 19h1" />
                                                        <path d="M8 5h1" />
                                                        <path d="M8 12h1" />
                                                        <path d="M8 19h1" />
                                                        <path d="M13 5h8" />
                                                        <path d="M13 12h8" />
                                                        <path d="M13 19h8" />
                                                    </svg>
                                                </button>
                                                <div class="hidden absolute left-0 mt-2 w-32 bg-white border border-gray-200 rounded shadow-lg z-50 menu-options">
                                                    <a href="<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'edit', $familia['Familia']['id']]); ?>"
                                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Editar</a>
                                                    <form method="post" action="<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'delete', $familia['Familia']['id'], $familia['Familia']['id']]); ?>" onsubmit="return confirm('<?php echo __('¿Está seguro/a de eliminar el registro con ID# %s?', $familia['Familia']['id']); ?>');">
                                                        <?php echo $this->Form->hidden('_method', ['value' => 'POST']); ?>
                                                        <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 text-sm">Borrar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="mt-4 bg-gray-100 ">
                                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700"> ID Familia</td>
                                        <td colspan="7" class="border border-gray-300 p-2 font-semibold text-teal-600 text-sm hover:underline">
                                            <?php echo $this->Html->link(strtoupper($familia['Familia']['id']), array('controller' => 'Familias', 'action' => 'view', $familia['Familia']['id'])); ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Apellidos</td>
                                        <td colspan="2" class="border border-gray-300 p-2 font-semibold text-sm"><?php echo $familia['Familia']['apellidos']; ?></td>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Nombres</td>
                                        <td colspan="3" class="border border-gray-300 p-2 text-sm text-gray-700"><?php echo $familia['Familia']['nombres']; ?></td>
                                    </tr>
                                    <tr class="mt-4 bg-gray-100 ">
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Celular</td>
                                        <td colspan="2" class="border border-gray-300 p-2 font-bold text-sm">
                                            <?php
                                            $phone = !empty($familia['Familia']['celular']) ? $familia['Familia']['celular'] : '';
                                            $tel = preg_replace('/\D+/', '', $phone);
                                            ?>
                                            <?php if ($tel): ?>
                                                <a href="tel:<?php echo $tel; ?>" class="text-teal-600 hover:underline" title="Llamar"><?php echo h($phone); ?></a>
                                            <?php else: ?>
                                                <span class="text-gray-600">-</span>
                                            <?php endif; ?>
                                        </td>
                                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700"> Rol </td>
                                        <td colspan="7" class="border border-gray-300 p-2 font-semibold text-teal-600 text-sm hover:underline">
                                            <?php echo $familia['Familia']['rol'] ?>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">N° Personas</td>
                                        <td colspan="2" class="border border-gray-300 p-2 font-bold text-sm"><?php echo $familia['Familia']['numeropersonas']; ?></td>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">N° Hogar</td>
                                        <td colspan="3" class="border border-gray-300 p-2 text-sm text-gray-700"><?php echo $familia['Familia']['hogar']; ?></td>
                                    </tr>
                            </table>

                        </div>
                    <?php endforeach; ?>

                <?php else: ?>
                    <div class="text-center text-gray-500 py-8">
                        <span class="font-semibold text-lg">No hay Familias agregadas</span>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>


    <!-- Footer -->
    <div class="max-w-4xl mx-auto mt-4 text-center text-sm text-gray-600 pb-4">
        <p>Formato de Salud Pública - Sistematización de Actividades APS</p>
    </div>
</body>




<script>
    $(document).ready(function() {
        $('#dataTables-Familia').DataTable({
            responsive: true,
            "pagingType": "simple",
            "pageLength": 10,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
                searchBuilder: {
                    button: 'Filter',
                }
            },
            buttons: [
                'pageLength',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'colvis',
                'searchBuilder'
            ]

        });

    });

    function fnExcelReport() {
        var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
        var textRange;
        var j = 0;
        tab = document.getElementById('dataTables-example'); // id of table

        for (j = 0; j < tab.rows.length; j++) {
            tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
        }

        tab_text = tab_text + "</table>";

        tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
        tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
        tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.matc(/Trident.*rv\:11\./)) // If Internet Explorer
        {
            txtArea1.document.open("txt/html", "replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
        } else
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

        //return (sa);
    }

    document.addEventListener("DOMContentLoaded", function() {
        const lat = parseFloat("<?php echo $sociambiental['Sociambiental']['latitud']; ?>");
        const lng = parseFloat("<?php echo $sociambiental['Sociambiental']['longitud']; ?>");
        var btnHide = document.getElementById('btn-hide');
        var printContents = document.getElementById('print-area');
        const btnIcon = document.getElementById('btn-icon');
        if (!lat || !lng) {
            alert("No hay coordenadas válidas para mostrar el mapa.");
            return;
        }

        // Crear el mapa centrado en las coordenadas
        const map = L.map("mapContainer").setView([lat, lng], 15);

        // Capa base (OpenStreetMap)
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "&copy; OpenStreetMap contributors",
        }).addTo(map);

        // Agregar marcador en la ubicación
        const marker = L.marker([lat, lng]).addTo(map);
        marker.bindPopup(`<b>Ubicación registrada</b><br>Lat: ${lat}<br>Lng: ${lng}`).openPopup();
        let isEdit = true; // estado inicial: "Editar"
        btnHide.addEventListener('click', function(e) {
            e.preventDefault();
            if (isEdit) {

                // Volver a "Editar"
                btnHide.title = 'Ver Familias';
                btnIcon.innerHTML = `
                 <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                <circle cx="12" cy="12" r="3" />
            `;
            } else {
                // Cambiar a "Guardar"

                btnHide.title = 'Ver Información General';
                btnIcon.innerHTML = `
            <path d="M12 3v17a1 1 0 0 1-1 1H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1H3" />
            <path d="m16 19 2 2 4-4" />
            `;
            }
            isEdit = !isEdit;
            printContents.classList.toggle('block');
            printContents.classList.toggle('hidden');
        });
    });

        function toggleMenu(btn) {
        // Cierra otros menús abiertos
        document.querySelectorAll('.menu-options').forEach(function(menu) {
            if (menu !== btn.nextElementSibling) menu.classList.add('hidden');
        });
        // Alterna el menú actual
        btn.nextElementSibling.classList.toggle('hidden');
    }
    // Cierra el menú si se hace clic fuera
    document.addEventListener('click', function(e) {
        document.querySelectorAll('.menu-options').forEach(function(menu) {
            if (!menu.contains(e.target) && !menu.previousElementSibling.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    });
</script>