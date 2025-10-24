<?php $this->layout = 'default_familia' ?>

<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 max-w-6xl">

        <!-- Title Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
                Familias Registradas<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
                    a tu Nombre
                </span>
            </h1>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
                Aquí puedes ver las familias que has caracterizado a lo largo de tu recorrido como profesional en atención primaria en salud.
            </p>
        </div>

        <!-- Action Cards -->
        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <!-- Agregar Vivienda Card -->
            <button onclick="toSociambiental()" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-teal-500 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center gap-4">
                    <div class="bg-gradient-to-br from-teal-100 to-cyan-100 p-6 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-home text-teal-600 text-5xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 group-hover:text-teal-600 transition-colors">
                        Agregar Vivienda
                    </h3>
                    <p class="text-slate-600 text-sm">
                        Registra una nueva vivienda en el sistema
                    </p>
                    <div class="mt-2 flex items-center gap-2 text-teal-600 font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        <span>Comenzar</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </button>

            <!-- Agregar Familia Card -->
            <button onclick="toFamilia()" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-cyan-500 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center gap-4">
                    <div class="bg-gradient-to-br from-cyan-100 to-blue-100 p-6 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-users text-cyan-600 text-5xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 group-hover:text-cyan-600 transition-colors">
                        Agregar Familia
                    </h3>
                    <p class="text-slate-600 text-sm">
                        Registra una nueva familia en el sistema
                    </p>
                    <div class="mt-2 flex items-center gap-2 text-cyan-600 font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        <span>Comenzar</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </button>
        </div>

        <!-- Stats Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-2">
                <i class="fas fa-chart-line text-teal-600"></i>
                Resumen de Registros
            </h3>
            <div class="grid grid-cols-3 gap-4">
                <div class="text-center p-4 bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl">
                    <p class="text-3xl font-bold text-teal-600"><?php echo isset($estadisticas['total_familias']) ? $estadisticas['total_familias'] : 0; ?></p>
                    <p class="text-sm text-slate-600 mt-1">Familias</p>
                </div>
                <div class="text-center p-4 bg-gradient-to-br from-cyan-50 to-blue-50 rounded-xl">
                    <p class="text-3xl font-bold text-cyan-600"><?php echo isset($estadisticas['total_sociambiental']) ? $estadisticas['total_sociambiental'] : 0; ?></p>
                    <p class="text-sm text-slate-600 mt-1">Viviendas</p>
                </div>
                <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl">
                    <p class="text-3xl font-bold text-blue-600"><?php echo isset($estadisticas['total_personas']) ? $estadisticas['total_personas'] : 0; ?></p>
                    <p class="text-sm text-slate-600 mt-1">Personas</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 rounded-t-2xl shadow-lg p-6 text-white">
            <h3 class="text-2xl font-bold  flex items-center gap-2 mb-6">
                <i class="fas fa-table"></i>
                Consulta de Familias Registradas
            </h3>
            <div class="grid md:grid-cols-3 gap-3">
                <div class="flex flex-col bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-lg p-3 transition-all flex items-center gap-2 text-sm font-semibold">
                    <label class="block text-sm font-semibold text-white mb-2">
                        <i class="fas fa-map-marker-alt"></i> Microterritorio
                    </label>
                    <select id="territorioSelect" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent bg-white text-slate-800">
                        <option value="">Seleccione el microterritorio</option>
                        <?php foreach ($territorios as $id => $nombre): ?>
                            <option value="<?php echo $id; ?>"><?php echo h($nombre); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="flex flex-col bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-lg p-3 transition-all flex items-center gap-2 text-sm font-semibold">
                    <label class="block text-sm font-semibold text-white mb-2">
                        <i class="fa-solid fa-people-arrows"></i> Responsable
                    </label>
                    <select id="filterMunicipio" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                        <option value="">Todos</option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Cundinamarca">Cundinamarca</option>
                        <option value="Valle del Cauca">Valle del Cauca</option>
                        <option value="Atlántico">Atlántico</option>
                        <option value="Santander">Santander</option>
                    </select>
                </div>
                <div class="flex flex-col bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-lg p-3 transition-all flex items-center gap-2 text-sm font-semibold">
                    <label class="block text-sm font-semibold text-white mb-2">
                        <i class="fas fa-calendar"></i> fecha de registro
                    </label>
                    <select id="filterMunicipio" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                        <option value="">Todos</option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Cundinamarca">Cundinamarca</option>
                        <option value="Valle del Cauca">Valle del Cauca</option>
                        <option value="Atlántico">Atlántico</option>
                        <option value="Santander">Santander</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Search and Filter Section -->
        <div class="bg-white rounded-b-2xl shadow-lg p-6 mb-8">
            <!-- Tabulator Table -->
            <!-- DataTable -->
            <div class="overflow-x-auto">
                <table id="familiasTable" class="display w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Familia</th>
                            <th>Numero celular</th>
                            <th>Fecha</th>
                            <th>Microterritorio</th>
                            <th>Sociambiental</th>
                            <th>Responsable</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-12">
        <div class="container mx-auto px-4 py-6">
            <div class="text-center text-slate-600 text-sm">
                <p class="mb-2">© 2025 Gobierno de Colombia - Atención Primaria en Salud</p>
                <p class="text-xs text-slate-500">Sistema de Gestión de Familias y Viviendas</p>
            </div>
        </div>
    </footer>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.5s ease-out;
        }

        /* Added custom DataTables styling */
        #familiasTable {
            border-collapse: separate;
            border-spacing: 0;
        }

        #familiasTable thead th {
            background: linear-gradient(to right, #0d9488, #0891b2);
            color: white;
            padding: 12px;
            font-weight: 600;
            text-align: left;
            border: none;
        }

        #familiasTable thead th:first-child {
            border-top-left-radius: 8px;
        }

        #familiasTable thead th:last-child {
            border-top-right-radius: 8px;
        }

        #familiasTable tbody td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
        }

        #familiasTable tbody tr:hover {
            background-color: #f8fafc;
        }

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            margin: 10px 0;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 5px 12px;
            margin: 0 2px;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            background: white;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: linear-gradient(to right, #0d9488, #0891b2);
            color: white !important;
            border: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 6px 12px;
            margin-left: 8px;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const choices = new Choices("#territorioSelect", { // Botón para eliminar seleccionados
                searchEnabled: true, // 🔎 activa búsqueda
                searchChoices: true, // 🔎 filtra opciones
                removeItemButton: false, // ❌ no mostrar botón de eliminar
                itemSelectText: '', // 🚫 quita el "Press to select"
                shouldSort: false, // 📌 mantiene el orden original
                searchPlaceholderValue: "Escriba para filtrar...", // placeholder búsqueda
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
                dropdown.classList.add('z-50', 'bg-white', 'shadow-lg', 'rounded-lg', 'border', 'border-gray-200', 'text-gray-700');
            }
        });

        function toSociambiental() {
            if (confirm('¿Está seguro de realizar esta acción?')) {
                window.location.href = '<?php echo $this->Html->url(['controller' => 'Sociambientals', 'action' => 'add']); ?>';
            }
        }

        function toFamilia() {
            if (confirm('¿Está seguro de realizar esta acción?')) {
                window.location.href = '<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'add']); ?>';
            }
        }

        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#familiasTable').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
                },
                serverSide: true,
                ajax: {
                    url: "<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'familiasResponsablesIndex')); ?>",
                    type: "GET",
                    error: function(xhr, error, code) {
                        console.log('Error:', error);
                        console.log('Code:', code);
                        console.log('Response:', xhr.responseText);
                    }
                },
                order: [
                    [0, 'asc']
                ],
                columns: [{
                        data: "id",
                        name: "id"
                    },
                    {
                        data: "apellidos",
                        name: "apellidos"
                    },
                    {
                        data: "celular",
                        name: "celular"
                    },
                    {
                        data: "fecha",
                        name: "fecha"
                    },
                    {
                        data: "microterritorio",
                        name: "microterritorio"
                    },
                    {
                        data: "sociambiental_id",
                        name: "sociambiental_id"
                    },
                    {
                        data: "nombre_responsable",
                        name: "nombre_responsable"
                    },
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return '<a href="<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'view')); ?>/' + row.id + '" class="btn btn-sm btn-primary">Ver</a> ' +
                                '<a href="<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'edit')); ?>/' + row.id + '" class="btn btn-sm btn-warning">Editar</a>';
                        }
                    }
                ],
                order: [
                    [3, "desc"]
                ], // Ordenar por fecha (columna 4) descendente
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 25],
                    [5, 10, 25]
                ],
                searching: true,
                search: {
                    regex: false
                }
            });

            // Custom filter functions
            $('#filterDepartamento, #filterMunicipio, #filterEstado, #filterAno').on('change', function() {
                var departamento = $('#filterDepartamento').val();
                var municipio = $('#filterMunicipio').val();
                var estado = $('#filterEstado').val();
                var ano = $('#filterAno').val();

                // Apply filters
                table.columns(1).search(departamento).draw();
                table.columns(2).search(municipio).draw();
                table.columns(5).search(estado).draw();

                if (ano) {
                    table.column(7).search(ano).draw();
                } else {
                    table.column(7).search('').draw();
                }
            });
        });
    </script>
</body>