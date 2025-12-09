<?php $this->layout = 'default_familia';

$hasPlan = false;
$hasObservation = false;
if (!empty($familia['Observacion']) && is_array($familia['Observacion'])) {
    $hasObservation = true;
    foreach ($familia['Observacion'] as $obs) {
        if (!empty($obs['dirplancuidado'])) {
            $hasPlan = true;
            break;
        }
    }
}

$planUrl = $this->Html->url(['controller' => 'Familias', 'action' => 'plancuidado', $familia['Familia']['id']]);
?>
<link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- JS de Leaflet -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>


<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Información de la Familia<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Ficha Familiar
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Visualización de la información de la familia.
    </p>
</div>

<body class="bg-gray-50 p-2 sm:p-4">
    <div class="flex max-w-6xl mx-auto text-center mb-4 gap-4">
        <button title="Editar Vivienda" type="button" id="btn-print" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'Sociambientals', 'action' => 'edit', $familia['Sociambiental']['id']]); ?>'">
            <i class="fa-solid fa-house-flag text-xl"></i>
        </button>

        <button title="Editar Familia" type="button" onclick="window.location.href='<?php echo $this->Html->url(['action' => 'edit', $familia['Familia']['id']]); ?>'"
            class="flex items-center w-38 space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                <path d="m15 5 4 4" />
            </svg>
        </button>

        <button title="Ver detalles de familia" type="button" onclick="window.location.href='<?php echo $this->Html->url(['action' => 'plancuidado', $familia['Familia']['id']]); ?>'"
            class="flex items-center w-38 space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
            <i class="fa-solid fa-info text-2xl px-2"></i>
        </button>

        <button title="Agregar Integrante" type="button" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'Juventudadultos', 'action' => 'add?juventudadultos=' . $familia['Familia']['id']]); ?>'"
            class="flex items-center w-38 space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
            <i class="fa-solid fa-person text-2xl px-2"></i>
        </button>

        <?php
        if (empty($familia['Observacion'])) :
        ?>
            <button
                title="Agregar Observaciones" type="button"
                onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'Observacions', 'action' => 'add?observacions=' . $familia['Familia']['id']]); ?>'"
                class=" flex items-center w-38 space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
                <i class="fa-solid fa-book-medical text-xl px-2"></i>
            </button>
        <?php
        endif;
        ?>


        <button title="Generar Plan de Cuidado" type="button"
            id="btn-plancuidado"
            data-has-plan="<?php echo $hasPlan ? '1' : '0'; ?>"
            data-url="<?php echo h($planUrl); ?>"
            class="flex items-center w-38 space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700"
            onclick="if (this.dataset.hasPlan === '1') { window.location.href = this.dataset.url; } else { alert('No hay plan de cuidado asociado a esta familia. Por favor, agregue una observación con plan de cuidado primero.'); }">
            <i class="fa-solid fa-hands-holding-child text-xl px-2"></i>
        </button>
    </div>

    <!-- Document Container -->
    <div class="max-w-6xl mx-auto bg-white overflow-hidden mt-4 sm:mt-4 p-4 shadow-2xl rounded-xl">
        <div class="p-2 md:p-8">
            <div class="flex items-center mb-4">
                <i class="fas fa-users text-2xl text-teal-600 p-4 bg-teal-100 rounded-lg"></i>

                <div class="ml-4">
                    <h1 class="text-lg md:text-xl font-semibold flex">
                        Información General de la Familia
                    </h1>
                    <p class="text-sm md:text-base text-gray-500">Aqui se mostraran detalles importantes para la familia seleccionada.</p>
                </div>

            </div>
            <!-- Header Section -->
            <table class="w-full  border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <!-- Encabezado con logo y datos -->
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center px-8 py-2 text-slate-800 w-full uppercase" colspan="2">
                            Caracterizacion Familiar
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            ID
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800 font-bold">
                            <?php echo h($familia['Familia']['id']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            ID Vivienda
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-teal-600 font-bold hover:underline">
                            <?php echo $this->Html->link($familia['Sociambiental']['id'], ['controller' => 'Sociambientals', 'action' => 'view', $familia['Sociambiental']['id']]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Encuestador
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php echo h($familia['Responsable']['nombres']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Fecha
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php echo h(!empty($familia['Sociambiental']['fecha']) ? date('Y-m-d', strtotime($familia['Sociambiental']['fecha'])) : '') ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Apellidos de la Familia
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php echo h(!empty($familia['Sociambiental']['apellidosfamilia']) ? $familia['Sociambiental']['apellidosfamilia'] : '') ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            N° de Familias en vivienda
                        </td>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            N° de Personas
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-gray-800">
                            <?php echo h($familia['Sociambiental']['numerohogares']) ?>
                        </td>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-gray-800">
                            <?php echo h($familia['Familia']['numeropersonas']) ?>
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
                            <?php echo h(!empty($familia['Sociambiental']['direccion']) ? $familia['Sociambiental']['direccion'] : '') ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Numero de Celular
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php if (!empty($familia['Familia']['celular'])): ?>
                                <a href="tel:<?php echo h($familia['Familia']['celular']); ?>" class="text-teal-600 hover:underline"><?php echo h($familia['Familia']['celular']); ?></a>
                            <?php else: ?>
                                <?php echo h(''); ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Microterritorio
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php echo ($familia['Ubicacion']['microterritorio']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Barrio / Vereda
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php echo ($familia['Sociambiental']['barriovereda']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Población Vulnerable
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php echo ($familia['Familia']['poblacionvulnerable']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 font-semibold text-center p-2 text-teal-600">
                            Curso de Vida
                        </td>
                        <td class="border border-gray-300 text-center p-2 text-gray-800">
                            <?php echo ($familia['Familia']['cursovidafamilia']) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="max-w-6xl mx-auto bg-white overflow-hidden mt-4 sm:mt-8 p-4 shadow-2xl rounded-xl  mb-12">
        <div class="p-2 md:p-8">
            <!-- Contenido a imprimir -->
            <div class="flex items-center mb-2">
                <i class="fas fa-users text-2xl text-teal-600 p-4 bg-teal-100 rounded-lg"></i>

                <div class="ml-4">
                    <h1 class="text-lg md:text-xl font-semibold flex">
                        Integrantes Caracterizados
                    </h1>
                    <p class="text-sm md:text-base text-gray-500">Aqui se mostraran los integrantes caracterizadas de la vivienda.</p>
                </div>

            </div>
            <?php if (!empty($familia['Integrantes'])) : ?>
                <div class="w-[350px] md:w-full md:mt-6 mb-4">
                    <table id="integrantesTabla" style="width:100%;" class="stripe hover text-sm text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-200 font-medium border-b border-gray-300">
                            <tr class="text-gray-900 font-light">
                                <th class="px-2 w-6"></th> <!-- control (+) -->
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID</th>
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Nombres</th>
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Edad</th>
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Sexo</th>
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Aseguradora</th>
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Condición Crónica</th>
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Canalización</th>
                                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            <?php foreach ($familia['Integrantes'] as $integrante) :
                                if (!empty($integrante['id'])) {
                            ?>
                                    <tr>
                                        <td></td>
                                        <td class="text-center text-black font-bold"><?php echo $integrante['id']; ?></td>
                                        <td class="text-center"><?php echo $integrante['primernombre'] . ' ' . $integrante['primerapellido']; ?></td>
                                        <td class="text-center"><?php echo $integrante['edad']; ?></td>
                                        <td class="text-center"><?php echo $integrante['sexo']; ?></td>
                                        <td class="text-center"><?php echo $integrante['aseguradora']; ?></td>
                                        <td class="text-center"><?php echo $integrante['condicioncronica']; ?></td>
                                        <td class="text-center">
                                            <?php echo $integrante['canalizacionuno'] ?>
                                        <td>
                                            <div class="relative inline-block text-left">
                                                <?php echo $this->Html->link('Ver', ["controller" => "juventudadultos", "action" => "view", $integrante['id']], ["class" => "block px-4 py-2 text-sm hover:bg-gray-100"]); ?>
                                                <?php echo $this->Html->link('Editar', ["controller" => "juventudadultos", "action" => "edit", $integrante['id']], ["class" => "block px-4 py-2 text-sm hover:bg-gray-100"]); ?>
                                                <hr class="my-1 border-gray-200">
                                                <?php echo $this->Form->postLink('Borrar', ["controller" => "juventudadultos", "action" => "delete", $integrante['id']], ["class" => "block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100"], __('¿Seguro que quieres borrar #%s?', $integrante['id'])); ?>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#integrantesTabla').DataTable({
                            responsive: true,
                            pageLength: 5,
                            dom: '<"flex flex-col md:flex-row items-center justify-between"<"w-full md:w-2/3 flex"<"flex flex-row w-full custom-search-container">><"flex items-center custom-pagination">>rt',
                            order: [
                                [1, 'asc']
                            ],
                        });
                    });
                </script>
            <?php else: ?>
                <div class="text-center text-gray-500 py-8">
                    <span class="font-semibold text-lg">No hay Integrantes agregados</span>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="max-w-6xl mx-auto bg-white overflow-hidden mt-4 sm:mt-4 p-4 shadow-2xl rounded-xl  mb-8">
        <div class="p-2 md:p-8">
            <!-- Contenido a imprimir -->
            <div class="flex items-center mb-4">
                <i class="fas fa-users text-2xl text-teal-600 p-4 bg-teal-100 rounded-lg"></i>

                <div class="ml-4">
                    <h1 class="text-lg md:text-xl font-semibold flex">
                        Observaciones de la Familia
                    </h1>
                    <p class="text-sm md:text-base text-gray-500">Aqui se mostraran las familias caracterizadas de la vivienda.</p>
                </div>

            </div>

            <div class="overflow-x-auto">
                <?php if (!empty($familia['Observacion'])) : ?>
                    <?php foreach ($familia['Observacion'] as $observacion) : ?>
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
                                                    <a href="<?php echo $this->Html->url(['controller' => 'Observacions', 'action' => 'add_plancuidado/' . $observacion['id']]); ?>" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Agregar Plan de Cuidado</a>
                                                    <a href="<?php echo $this->Html->url(['controller' => 'Observacions', 'action' => 'view', $observacion['id']]); ?>" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Ver</a>
                                                    <a href="<?php echo $this->Html->url(['controller' => 'Observacions', 'action' => 'edit', $observacion['id']]); ?>"
                                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Editar</a>
                                                    <form method="post" action="<?php echo $this->Html->url(['controller' => 'Observacions', 'action' => 'delete', $observacion['id'], $observacion['id']]); ?>" onsubmit="return confirm('<?php echo __('¿Está seguro/a de eliminar el registro con ID# %s?', $observacion['id']); ?>');">
                                                        <?php echo $this->Form->hidden('_method', ['value' => 'POST']); ?>
                                                        <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 text-sm">Borrar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="mt-4 bg-gray-100 ">
                                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700"> ID </td>
                                        <td colspan="7" class="border border-gray-300 p-2 font-semibold text-teal-600 text-sm hover:underline">
                                            <?php echo $this->Html->link(strtoupper($observacion['id']), array('controller' => 'Observacions', 'action' => 'view', $observacion['id'])); ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Observacion</td>
                                        <td colspan="2" class="border border-gray-300 p-2 font-semibold text-sm"><?php echo $observacion['observacion']; ?></td>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Valoracion de la Familia</td>
                                        <td colspan="3" class="border border-gray-300 p-2 text-sm text-gray-700"><?php echo $observacion['valoracionfamilia']; ?></td>
                                    </tr>
                                    <tr class="mt-4 bg-gray-100 ">
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Canalizaciones</td>
                                        <td colspan="2" class="border border-gray-300 p-2 font-bold text-sm">
                                            <?php echo $observacion['canalizacionuno']; ?>
                                        </td>
                                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700"> Fecha </td>
                                        <td colspan="7" class="border border-gray-300 p-2 font-semibold text-teal-600 text-sm hover:underline">
                                            <?php echo $observacion['fecha'] ?>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Familiograma</td>
                                        <td colspan="2" class="border border-gray-300 p-2 font-bold text-sm"><?php if (!empty($observacion['dirfamiliograma'])) {
                                                                                                                    echo $this->Html->link(
                                                                                                                        h($observacion['resultadoFamiliograma']),
                                                                                                                        '../files/observacion/familiograma/' . $observacion['dirfamiliograma'] . '/' . $observacion['familiograma'],
                                                                                                                        ['target' => '_blank', 'class' => 'underline text-blue-700 hover:text-blue-900']
                                                                                                                    );
                                                                                                                } else {
                                                                                                                    echo '<span class="text-gray-400 italic">Sin familiograma</span>';
                                                                                                                } ?></td>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Resultado Ecomapa</td>
                                        <td colspan="3" class="border border-gray-300 p-2 text-sm text-gray-700"><?php echo $observacion['resultadoEcomapa']; ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Plan de Cuidado</td>
                                        <td colspan="6" class="border border-gray-300 p-2 text-sm text-gray-700"><?php
                                                                                                                    if (!empty($observacion['dirplancuidado'])) {
                                                                                                                        echo $this->Html->link(
                                                                                                                            h($observacion['resultadoPlanCuidado']),
                                                                                                                            '../files/observacion/plancuidado/' . $observacion['dirplancuidado'] . '/' . $observacion['plancuidado'],
                                                                                                                            ['target' => '_blank', 'class' => 'underline text-blue-700 hover:text-blue-900']
                                                                                                                        );
                                                                                                                    } else {
                                                                                                                        echo '<span class="text-gray-400 italic">Sin plan de cuidado</span>';
                                                                                                                    }
                                                                                                                    ?></td>
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
        // Inicialización de la primera tabla

        const $miTabla = $('#miTabla');

        const table = $miTabla.DataTable({
            responsive: true,
            createdRow: function(row, data, dataIndex) {
                // Aplica clases a cada celda del body
                $('td', row).each(function(index) {
                    $(this).addClass('px-4 py-3 align-center-left');
                    if (index === 1) $(this).addClass(
                        'text-center text-black font-bold'); // ID

                    if (index === 2) $(this).addClass('text-center'); // idproducto

                    // Para columnas de texto largo (por ejemplo, nombreproducto, objactividad)
                    if (index === 3 || index === 4) {
                        const maxLength = 200;
                        const cellText = $(this).text();
                        if (cellText.length > maxLength) {
                            const truncated = cellText.substring(0, maxLength) + '...';
                            $(this).html(
                                `<span class="texto-truncado">${truncated}</span>
                                     <span class="texto-completo hidden">${cellText}</span>
                                     <a href="#" class="ver-mas text-blue-500 underline ml-2">Ver más</a>
                                     <a href="#" class="ver-menos text-blue-500 underline ml-2 hidden">Ver menos</a>`
                            );
                        }
                    }

                    if (index === 5) $(this).addClass(
                        'text-center font-bold text-black text-xs'); // responsable
                    if (index === 6) $(this).addClass('text-center'); // conCat
                });
                // Aplica clase a la fila completa si quieres
                $(row).addClass('hover:bg-gray-50 transition ');
            },
            dom: 'rt',
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
                searchBuilder: {
                    button: 'Filter',
                }
            },

        });
        $miTabla.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
        table.on('draw');


    });

    function setupDropdowns() {

        localStorage.removeItem('consentAccepted');

        const buttons = document.querySelectorAll('[id^="menu-button-"]');

        buttons.forEach(button => {
            button.addEventListener('click', (event) => {
                const buttonId = event.currentTarget.id;

                const recordId = buttonId.split('-')[2];
                const menu = document.getElementById(`menu-options-${recordId}`);

                // Oculta todos los menús desplegables
                document.querySelectorAll('[id^="menu-options-"]').forEach(m => {
                    if (m.id !== menu.id) {
                        m.classList.add('hidden');
                    }
                });

                // Muestra o esconde el menú actual
                menu.classList.toggle('hidden');
            });
        });

        // Oculta los menús si se hace clic fuera de ellos
        window.addEventListener('click', function(event) {
            if (!event.target.matches('[id^="menu-button-"]')) {
                document.querySelectorAll('[id^="menu-options-"]').forEach(menu => {
                    if (!menu.classList.contains('hidden')) {
                        menu.classList.add('hidden');
                    }
                });
            }
        });

        document.querySelectorAll('.ver-mas').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const td = link.closest('td');
                td.querySelector('.texto-truncado').classList.add('hidden');
                td.querySelector('.texto-completo').classList.remove('hidden');
                td.querySelector('.ver-mas').classList.add('hidden');
                td.querySelector('.ver-menos').classList.remove('hidden');
            });
        });

        document.querySelectorAll('.ver-menos').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const td = link.closest('td');
                td.querySelector('.texto-truncado').classList.remove('hidden');
                td.querySelector('.texto-completo').classList.add('hidden');
                td.querySelector('.ver-mas').classList.remove('hidden');
                td.querySelector('.ver-menos').classList.add('hidden');
            });
        });


        const menu = document.getElementById('miTabla_processing');
        if (menu) {
            menu.classList.remove('dataTables_processing');
            menu.classList.add('hidden');
        }


    }

    document.addEventListener("DOMContentLoaded", function() {
        setupDropdowns();
        const lat = parseFloat("<?php echo $familia['Sociambiental']['latitud']; ?>");
        const lng = parseFloat("<?php echo $familia['Sociambiental']['longitud']; ?>");
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