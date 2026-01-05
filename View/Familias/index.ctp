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

        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <!-- Agregar Vivienda Card -->
            <button onclick="toNovedad()" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-teal-500 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center gap-4">
                    <div class="bg-gradient-to-br from-green-100 to-green-100 p-6 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-house-medical-circle-xmark text-green-600 text-5xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 group-hover:text-teal-600 transition-colors">
                        Agregar Novedad
                    </h3>
                    <p class="text-slate-600 text-sm">
                        Registra una nueva novedad en el sistema
                    </p>
                    <div class="mt-2 flex items-center gap-2 text-teal-600 font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        <span>Comenzar</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </button>


            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border-2 border-transparent hover:border-teal-500 transform hover:-translate-y-1">
                <iframe width="100%" height="100%" src="https://lookerstudio.google.com/embed/reporting/f70581e1-168b-41e5-b9c5-33a679e40b3c/page/p_gwatai39xd" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
            </div>
        </div>


        <!-- Stats Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-2">
                <i class="fas fa-chart-line text-teal-600"></i>
                Resumen de Registros
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
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
                <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl">
                    <p class="text-3xl font-bold text-blue-600"><?php echo isset($estadisticas['total_novedades']) ? $estadisticas['total_novedades'] : 0; ?></p>
                    <p class="text-sm text-slate-600 mt-1">Novedades</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 rounded-t-2xl shadow-lg p-6 text-white">
            <h3 class="text-2xl font-bold  flex items-center gap-2 mb-4">
                <i class="fas fa-table"></i>
                Consulta de Familias Registradas
            </h3>

        </div>
        <!-- Search and Filter Section -->
        <div class="w-[350px] md:w-full md:mt-6 mb-4">
            <table id="miTabla" style="width:100%;" class="stripe hover text-sm text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-200 font-medium border-b border-gray-300">
                    <tr class=" text-gray-900 font-light">
                        <th class="px-2 w-6"></th> <!-- control (+) -->
                        <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID</th>
                        <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Apellidos</th>
                        <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">Integrantes</th>
                        <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Celular</th>
                        <th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Fecha</th>
                        <th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Microterritorio</th>
                        <th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">ID Vivienda</th>
                        <th class="px-2 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                    <!-- DataTables llenará esta sección -->
                </tbody>
            </table>

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
    </style>

    <script>
        function deleteFamilia(id) {
            if (!confirm(`¿Seguro que deseas eliminar la familia #${id}?`)) {
                return;
            }

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = "<?php echo $this->Html->url(['action' => 'delete']); ?>/" + id;

            // Token CSRF si lo usas
            <?php if ($this->Session->check('_Token')): ?>
                const token = document.createElement('input');
                token.type = 'hidden';
                token.name = '_Token[key]';
                token.value = '<?php echo $this->Session->read('_Token.key'); ?>';
                form.appendChild(token);
            <?php endif; ?>

            document.body.appendChild(form);
            form.submit();
        }

        function normalizarVivienda(raw) {
            const viv = {};

            Object.keys(raw).forEach((key) => {
                if (key.startsWith("data[Sociambiental][")) {
                    let campo = key
                        .replace("data[Sociambiental][", "")
                        .replace("]", "");
                    viv[campo] = raw[key];
                }
            });

            return viv;
        }

        function normalizarFamilia(raw) {
            const viv = {};

            Object.keys(raw).forEach((key) => {
                if (key.startsWith("data[Familia][")) {
                    let campo = key.replace("data[Familia][", "").replace("]", "");
                    viv[campo] = raw[key];
                }
            });

            return viv;
        }

        function normalizarPersona(raw) {
            const viv = {};

            Object.keys(raw).forEach((key) => {
                if (key.startsWith("data[Juventudadulto][")) {
                    let campo = key
                        .replace("data[Juventudadulto][", "")
                        .replace("]", "");
                    viv[campo] = raw[key];
                }
            });

            return viv;
        }

        // listar los id de familias en localstorage

        async function enviarA_Drive(dataObject) {
            const url = "https://script.google.com/macros/s/AKfycbwb_4lBMeWjOESJ7Fq7fcL96JYkGAMuHM3KAuolFL_vxlZq3a2jp8ZLXGVi5eh-GcWxJA/exec";

            try {
                const dataStr = JSON.stringify(dataObject, null, 2);
                const blob = new Blob([dataStr], {
                    type: "application/json"
                });
                const downloadUrl = URL.createObjectURL(blob);
                const a = document.createElement("a");
                const filename = `fichas_${new Date().toISOString().slice(0,19).replace(/[:T]/g, "-")}.json`;
                a.href = downloadUrl;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                a.remove();
                URL.revokeObjectURL(downloadUrl);

                // Simula una respuesta para mantener el flujo existente
                const resp = {
                    json: async () => ({
                        status: "ok",
                        msg: "Descargado localmente",
                        filename
                    })
                };

                const json = await resp.json();

                if (json.status === "ok") {
                    alert("Datos guardados ");
                    localStorage.clear();
                } else {
                    alert("Error: " + json.msg);
                }
            } catch (err) {
                alert("Fallo la conexión");
                console.error(err);
            }
        }

        function uploadData() {
            const viviendas = JSON.parse(localStorage.getItem("viviendas")) || [];
            const familias = JSON.parse(localStorage.getItem("familias")) || [];
            const personas = JSON.parse(localStorage.getItem("personas")) || [];
            const novedades = JSON.parse(localStorage.getItem("novedades")) || [];

            viviendas_data = viviendas.map((v) => {
                return normalizarVivienda(v);
            });

            familias_data = familias.map((f) => {
                return normalizarFamilia(f);
            });

            personas_data = personas.map((p) => {
                return normalizarPersona(p);
            });

            fichas = viviendas_data.map((vivienda) => {
                const familiasDeVivienda = familias_data.filter(
                    (f) =>
                    f.id_sociambiental_temporal == vivienda.id_sociambiental_temporal
                );

                const familiasConPersonas = familiasDeVivienda.map((fam) => {
                    const personasDeFamilia = personas_data.filter(
                        (p) => p.id_familia_temporal == fam.id_familia_temporal
                    );
                    return {
                        ...fam,
                        personas: personasDeFamilia,
                    };
                });

                return {
                    ...vivienda,
                    familias: familiasConPersonas,
                };
            });

            enviarA_Drive({
                fichas
            });

            enviarA_Drive({
                novedades
            });


        }

        function toSociambiental() {
            if (confirm('¿Está seguro de realizar esta acción?')) {
                window.location.href = '<?php echo $this->Html->url(['controller' => 'Sociambientals', 'action' => 'add']); ?>';
            }
        }

        function toFamilia() {
            // Solicita al usuario el ID de vivienda
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
                window.location.href = '<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'add']); ?>/' + idVivienda;
            }
        }

        function toNovedad() {
            if (confirm('¿Está seguro de realizar esta acción?')) {
                window.location.href = '<?php echo $this->Html->url(['controller' => 'visitasnegadas', 'action' => 'add']); ?>';
            }
        }

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

                }
            }, function(start) {
                let fecha = start.format('YYYY-MM-DD');

                // Si necesitas guardarlos en campos ocultos para enviarlos al backend:
                if (!$("#fecha").length) {
                    $("form").append('<?php echo $this->Form->hidden('fecha', ['id' => 'fecha']); ?>');
                }
                $("#fecha").val(fecha);
            });
        });

        const URL_view = "<?php echo $this->Html->url(['action' => 'view', '__ID__']); ?>";
        <?php if (!isset($tipoUsuario)) {
            $tipoUsuario = null;
        } ?>
        const URL_edit = "<?php
                            echo $this->Html->url(['action' => 'edit', '__ID__']);
                            ?>";
        const URL_delete = "<?php echo $this->Html->url(['action' => 'delete', '__ID__']); ?>";


        $(document).ready(function() {
            const $miTabla = $('#miTabla');

            // Inicializar DataTable
            const table = $miTabla.DataTable({
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
                responsive: {
                    details: {
                        type: 'column',
                        target: 'td.dtr-control',
                        renderer: function(api, rowIdx, columns) {
                            // Construye el contenido del child row
                            let data = api.row(rowIdx).data();
                            return `
                    <div class="bg-white rounded-xl shadow-lg p-4 mt-2 w-full max-w-md mx-auto">
                        <h4 class="text-lg font-semibold text-teal-700 mb-2">Detalles de la Familia</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li><strong>ID:</strong> ${data.id}</li>
                            <li><strong>Apellidos:</strong> ${data.apellidos}</li>
                            <li><strong>Integrantes:</strong> ${data.integrantes}</li>
                            <li><a class="text-teal-600" href="tel:${data.celular}"><strong >Celular:</strong> ${data.celular}</a></li>
                            <li><strong>Microterritorio:</strong> ${data.microterritorio}</li>
                            <li><strong>ID Vivienda:</strong> ${data.sociambiental_id}</li>
                            <li><strong>Fecha:</strong> ${(() => {
                                const f = data.fecha;
                                if (!f) return '';
                                // Intentar parsear como fecha válida
                                const dObj = new Date(f);
                                if (!isNaN(dObj.getTime())) {
                                    const y = dObj.getFullYear();
                                    const m = ('0' + (dObj.getMonth() + 1)).slice(-2);
                                    const d = ('0' + dObj.getDate()).slice(-2);
                                    return `${y}-${m}-${d}`;
                                }
                                // Formatos dd/mm/yyyy o dd-mm-yyyy -> yyyy-mm-dd
                                const m1 = f.match(/^(\d{2})[\/\-](\d{2})[\/\-](\d{4})$/);
                                if (m1) return `
                            $ {
                                m1[3]
                            } - $ {
                                m1[2]
                            } - $ {
                                m1[1]
                            }
                            `;
                                // Normalizar yyyy/mm/dd o yyyy-mm-dd
                                const m2 = f.match(/^(\d{4})[\/\-](\d{2})[\/\-](\d{2})$/);
                                if (m2) return `
                            $ {
                                m2[1]
                            } - $ {
                                m2[2]
                            } - $ {
                                m2[3]
                            }
                            `;
                                // Fallback: devolver original
                                return f;
                            })()}</li>
                            <li><strong>Microterritorio:</strong> ${data.microterritorio}</li>
                        </ul>
                        <div class="flex gap-2 mt-4">
                            <a href="${URL_view.replace('__ID__', data.id)}" class="bg-gray-200 hover:bg-blue-600 text-teal-700 px-3 py-1 rounded text-sm">Ver</a>
                            <a href="${URL_edit.replace('__ID__', data.id)}" class="bg-gray-200 hover:bg-amber-600 text-teal-700 px-3 py-1 rounded text-sm">Actualizar</a>
                            <button onclick="deleteFamilia(${data.id})" class="text-red-600 hover:underline">
                             Borrar Familia
                            </button>
                        </div>
                    </div>
                `;
                        }
                    }
                },
                dom: '<"flex flex-col md:flex-row items-center justify-between py-8"<"w-full md:w-2/3 flex"<"flex flex-row w-full mb-4 custom-search-container">><"flex items-center custom-pagination"p>>rt',
                pageLength: 3,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'familiasResponsablesIndex')); ?>",
                    type: "GET",
                    error: function(xhr, error, code) {
                        console.error("Error al cargar los datos:", error, code);
                        alert("Error al cargar los datos. Por favor, inténtalo de nuevo más tarde.");
                    }
                },
                order: [
                    [0, 'asc']
                ],
                columns: [
                    // Columna control (+)
                    {
                        data: null,
                        className: 'dtr-control',
                        orderable: false,
                        searchable: false,
                        defaultContent: '',
                        render: function() {
                            return '<span class="text-gray-400">+</span>';
                        }
                    },
                    {
                        data: "id",
                        name: "id"
                    },
                    {
                        data: "apellidos",
                        name: "apellidos"
                    },
                    {
                        data: "integrantes",
                        name: "integrantes"
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
                        data: "id",
                        orderable: false,
                        searchable: false,
                        render: function(data) {
                            const viewUrl = URL_view.replace('__ID__', data);
                            const editUrl = URL_edit.replace('__ID__', data);
                            const deleteUrl = URL_delete.replace('__ID__', data);
                            return `
          <div class="relative inline-block text-left">
            <a href="${viewUrl}" class="block px-4 py-2 text-sm hover:bg-gray-100">Ver</a>
            <a href="${editUrl}" class="block px-4 py-2 text-sm hover:bg-gray-100">Actualizar</a>
            <button onclick="deleteFamilia(${data.id})" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                Borrar Familia
            </button>
          </div>`;
                        }
                    }
                ],
                // Opcional: prioridades de columnas (qué esconder primero)
                columnDefs: [{
                        responsivePriority: 1,
                        targets: 2
                    }, // nombreproducto
                    {
                        responsivePriority: 2,
                        targets: 3
                    }, // objactividad
                    {
                        responsivePriority: 3,
                        targets: 1
                    } // created
                ]
            });
            $miTabla.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");

            // Reemplazar el input original por uno custom
            $('.custom-search-container').html(`
        <div class="relative w-full md:w-2/3">
            <svg class="absolute left-2 top-2.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-search-icon lucide-scan-search"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path d="m16 16-1.9-1.9"/></svg>
            <input 
                type="search" 
                id="customSearch" 
                class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm 
                       focus:ring-2 focus:ring-blue-500 focus:outline-none w-full" 
                placeholder="Buscar registros..."
            >
        </div>
        `);

            // Función para estilizar la paginación
            $('.custom-pagination').html(`
            <div class="pagination-container flex items-center space-x-2">
                <button class="first-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Primera página" id="first-page">&laquo;&laquo;</button>
                <button class="previous-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Página anterior" id="previous-page">&laquo;</button>
                <span class="page-info text-gray-700 text-sm"></span>
                <button class="next-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Página siguiente" id="next-page">&raquo;</button>
                <button class="last-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Última página" id="last-page">&raquo;&raquo;</button>
            </div>
        `);

            $('.custom-table-length').html(`
        <table>
           <tbody>
               <tr>
                   <td>
                       <div class="flex items-center space-x-2">
                           <label for="table-length" class="text-gray-700 text-sm">Mostrar</label>
                           <select id="table-length" class="border border-gray-300 rounded px-2 py-1 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                               <option value="5">5</option>
                               <option value="7" selected>7</option>
                               <option value="10">10</option>
                               <option value="25">25</option>
                               <option value="50">50</option>
                               <option value="100">100</option>
                           </select>
                           <span class="text-gray-700 text-sm">registros</span>
                       </div>
                   </td>
               </tr>
           </tbody>
        </table>
        `);

            // Conectar botones de paginación personalizados
            $(document).on("click", ".first-page", function() {
                table.page("first").draw("page");
            });

            $(document).on("click", ".previous-page", function() {
                table.page("previous").draw("page");
            });

            $(document).on("click", ".next-page", function() {
                table.page("next").draw("page");
            });

            $(document).on("click", ".last-page", function() {
                table.page("last").draw("page");
            });

            // Actualizar info de la página actual
            function updatePageInfo() {
                let info = table.page.info();
                $(".page-info").text(`Página ${info.page + 1} de ${info.pages}`);
            }

            // Llamar en cada cambio de página
            table.on("draw", function() {
                updatePageInfo();
                setupDropdowns(); // <-- Vuelve a conectar los eventos cada vez que se dibuja la tabla
            });
            updatePageInfo();


            // Conectar el nuevo input con DataTables
            $('#customSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            table.on('draw');
        });


        // Función para manejar el despliegue de los menús
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

        // Función para la confirmación de borrado
        function confirmarBorrado(id) {
            if (confirm('¿Estás seguro de que quieres eliminar este registro?')) {
                // Si el usuario confirma, redirige o envía una solicitud a la ruta de borrado.
                // Aquí debes reemplazar '/ruta/borrar/' con tu URL real.
                window.location.href = '/ruta/borrar/' + id;
            }
        }

        // Llama a la función de configuración cuando el DOM esté cargado
        document.addEventListener('DOMContentLoaded', setupDropdowns);
    </script>
</body>