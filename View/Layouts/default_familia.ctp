<?php
$cakeDescription = __d('cake_dev', 'Aplicativo APS - Pasto');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->charset(); ?>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>APS - Ficha Familiar</title>
    <?php

    echo $this->Html->meta('icon');

    // ✅ Tailwind CDN
    echo $this->Html->css("https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css");

    // ✅ DataTables CSS
    echo $this->Html->css("https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css");

    // jQuery y DataTables
    echo $this->Html->script("https://code.jquery.com/jquery-3.6.0.min.js");
    echo $this->Html->script("https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js");
    echo $this->Html->script('ckeditor/ckeditor');
    ?>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Choices.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>
    <!-- Incluye DataTables y Buttons -->

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script> <!-- 👈 necesario -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- JS -->
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
</head>
<style>
    /* transición suave para submenús */
    .submenu {
        overflow: hidden;
        transition: max-height 0.25s ease-in-out, opacity 0.25s ease-in-out;
        max-height: 0;
        opacity: 0;
    }

    .submenu.open {
        max-height: 600px;
        /* suficiente para su contenido */
        opacity: 1;
    }

    /* rotación de flecha (por defecto 270° como en tu TSX) */
    .arrow {
        transform: rotate(270deg);
        transition: transform .2s ease;
    }

    .arrow.open {
        transform: rotate(0deg);
    }
</style>

<body id="app" class="bg-white">
    <!-- Navbar -->
    <nav class="w-full h-[65px] fixed top-0 left-0 z-50 shadow p-2 bg-white border-b border-gray-200">
        <div class="flex items-center justify-between h-full px-4">

            <!-- Logo + Title -->
            <div class="flex justify-between items-center w-full md:w-auto">

                <div class="flex items-center gap-2">
                    <img class=" object-cover" alt="dataHome.alt"
                        src="<?php echo $this->webroot; ?>/img/aps_v2025/logo.svg" />
                    <a href='<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'index']); ?>'>
                        <h2
                            class="text-2xl md:text-4xl font-bold text-slate-800 leading-tight text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
                            {{ dataHome.title }}
                        </h2>
                    </a>
                </div>

                <img class="md:hidden w-50 h-10 object-cover cursor-pointer" :alt="dataHome.alt"
                    :src="dataHome.adminIcon.default">
            </div>

            <!-- Mobile button removed - solo usar el botón de flecha -->

            <!-- Desktop Icons -->
            <div class="hidden p-6 md:flex items-center gap-8">

                <!-- Botón admin solo si grupoUsuario == 1 -->
                <button v-if="grupoUsuario === '1'" type="button" class="p-0 bg-transparent border-none"
                    @click="goTo('/homePage/userAdmin')" aria-label="Ir a Administrador">
                    <img class="w-50 h-10 object-cover cursor-pointer" :alt="dataHome.alt"
                        :src="dataHome.adminIcon.default">
                </button>
            </div>
        </div>
    </nav>


    <div class="flex pt-[65px]">
        <!-- Botón de menú para móvil - posicionado independientemente -->
        <button id="mobileMenuBtn"
            class="fixed top-[75px] left-3 z-50 md:hidden
                       w-10 h-10 flex items-center justify-center
                       bg-white shadow-lg rounded-lg border
                       text-gray-700 hover:bg-gray-100 
                       transition-all duration-300">
            <svg id="mobileMenuIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" x2="20" y1="12" y2="12" />
                <line x1="4" x2="20" y1="6" y2="6" />
                <line x1="4" x2="20" y1="18" y2="18" />
            </svg>
        </button>

        <!-- Overlay para móvil cuando el sidebar está abierto -->
        <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 md:hidden hidden transition-opacity duration-300"></div>

        <div id="sidebarContainer" class="flex fixed top-[65px] left-0 z-30 h-[calc(100vh-65px)] overflow-y-auto">

            <aside id="sidebar" class="w-full
         bg-white border-r shadow border-gray-200
         transform transition-transform duration-300 ease-in-out
         -translate-x-full md:translate-x-0">
                <div class="p-6 h-full relative">
                    <!-- Header / Usuario -->
                    <div class="mb-6 pl-2 mt-8  md:mt-0">
                        <h1 id="nombreUsuario" class="text-lg font-semibold">{{ nombreUsuario }}</h1>
                        <p id="rolUsuario" class="text-sm text-[#5DD395]">{{ rolUsuario }}</p>
                    </div>

                    <!-- Menú -->
                    <nav id="menu" class="space-y-1">
                        <!-- Item 1 (sin submenú) -->
                        <div class="menu-item" data-id="dashboard">
                            <button
                                type="button"
                                data-href='<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'index']); ?>'
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <svg class="text-teal-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-heart-icon lucide-book-heart">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                                        <path d="M8.62 9.8A2.25 2.25 0 1 1 12 6.836a2.25 2.25 0 1 1 3.38 2.966l-2.626 2.856a.998.998 0 0 1-1.507 0z" />
                                    </svg>
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-teal-600">
                                        Tus Caracterizaciones
                                    </span>
                                </div>
                            </button>
                        </div>

                        <!-- Item 2 (con submenú) -->
                        <div class="menu-item" data-id="reportes" data-has-arrow="true">
                            <button type="button" data-href="/react/#/homePage/reportes"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 hover:text-teal-600 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <svg class="text-teal-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-heart-icon lucide-house-heart">
                                        <path d="M8.62 13.8A2.25 2.25 0 1 1 12 10.836a2.25 2.25 0 1 1 3.38 2.966l-2.626 2.856a.998.998 0 0 1-1.507 0z" />
                                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                    </svg>
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-teal-600">
                                        Familias
                                    </span>

                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-teal-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>

                            <!-- Submenú -->
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-teal-600 hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'proactividades', 'action' => '/index']); ?>">
                                    Registros Familias
                                </button>
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-teal-600 hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'sociambientals', 'action' => 'add']); ?>">
                                    Nueva Vivienda
                                </button>
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-teal-600 hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'familias', 'action' => 'add']); ?>">
                                    Nuevo Familia
                                </button>
                            </div>
                        </div>

                        <!-- Item 3 (con submenú) -->
                        <div class="menu-item" data-id="config" data-has-arrow="true">
                            <button type="button"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <svg class="text-teal-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-library-big-icon lucide-library-big">
                                        <rect width="8" height="18" x="3" y="3" rx="1" />
                                        <path d="M7 3v18" />
                                        <path d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                                    </svg>
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-teal-600">
                                        Novedades
                                    </span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-teal-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-teal-600 hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'actas', 'action' => 'index']); ?>">
                                    Registros de Novedades
                                </button>
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-teal-600 hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'actas', 'action' => 'add']); ?>">
                                    Agregar Novedad
                                </button>

                            </div>
                        </div>

                        <div class="menu-item" data-id="config" data-has-arrow="true">
                            <button type="button"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <svg class="text-teal-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bandage-icon lucide-bandage">
                                        <path d="M10 10.01h.01" />
                                        <path d="M10 14.01h.01" />
                                        <path d="M14 10.01h.01" />
                                        <path d="M14 14.01h.01" />
                                        <path d="M18 6v11.5" />
                                        <path d="M6 6v12" />
                                        <rect x="2" y="6" width="20" height="12" rx="2" />
                                    </svg>
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-teal-600">
                                        Planes de Cuidado
                                    </span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-teal-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-teal-600 hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'productos', 'action' => 'index']); ?>">
                                    Consultar Planes de Cuidado
                                </button>
                            </div>
                        </div>

                        <div class="menu-item" data-id="dashboard">
                            <button
                                type="button"
                                data-href="/react/#/homePage"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <svg class="text-teal-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out">
                                        <path d="m16 17 5-5-5-5" />
                                        <path d="M21 12H9" />
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                    </svg>
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-teal-600">
                                        Cerra Sesión
                                    </span>
                                </div>
                            </button>
                        </div>

                    </nav>

                    <!-- Footer Logos -->
                    <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                        <img class="w-[121px] h-[68px] object-contain" alt="WhatsApp logo"
                            src="<?php echo $this->webroot; ?>/img/aps_v2025/secretaria_salud.png" />
                        <img class="w-[98px] h-[68px] object-contain" alt="Ciudad Bienestar logo"
                            src="<?php echo $this->webroot; ?>/img/aps_v2025/cb.png" />
                    </div>
                </div>
            </aside>

            <!-- Botón de toggle para desktop solamente -->
            <div class="hidden md:flex items-start">
                <button id="toggleSidebar" class="px-1 py-2 rounded-r-lg bg-white shadow text-gray-700 hover:bg-gray-300">
                    <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-to-line-icon lucide-arrow-left-to-line">
                        <path d="M3 19V5" />
                        <path d="m13 6-6 6 6 6" />
                        <path d="M7 12h14" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Contenido principal -->
        <main id="mainContent" class="flex-1 p-6 md:ml-[280px] transition-all duration-300">
            <?php echo $this->Session->flash(); ?>
            <div class="relative z-10">
                <?php echo $this->fetch('content'); ?>
            </div>
        </main>

    </div>
</body>

<script>
    const URLCAKE = "http://localhost/PIC";
    const {
        createApp
    } = Vue;
    createApp({
        data() {
            return {
                grupoUsuario: "1",
                nombreUsuario: "Usuario",
                rolUsuario: "EBS001",
                dataHome: {
                    alt: "Logo",
                    img: "https://via.placeholder.com/40x50",
                    href: "/",
                    title: "APS",
                    adminIcon: {
                        default: "<?php echo $this->webroot; ?>/img/aps_v2025/logo_colombia.png",
                    },
                    icons: [{
                        key: "Home",
                        default: "",
                        action: () => {
                            window.location.href = `/react/#/homePage`;
                        }
                    }, ]
                }
            }
        },
        methods: {
            goTo(path) {
                window.location.href = path;
            }
        },
        mounted() {

        }
    }).mount('#app');

    // ----- Control del Sidebar -----
    const sidebar = document.getElementById('sidebar');
    const sidebarContainer = document.getElementById('sidebarContainer');
    const mainContent = document.getElementById('mainContent');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuIcon = document.getElementById('mobileMenuIcon');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const desktopToggleBtn = document.getElementById('toggleSidebar');
    const desktopArrow = document.getElementById('arrow');
    window.addEventListener('DOMContentLoaded', function() {
        document.getElementById('mobileOverlay')?.classList.add('hidden');
    });
    // Función para toggle del sidebar
    function toggleSidebar() {
        const isMobile = window.matchMedia('(max-width: 768px)').matches;

        if (isMobile) {
            // Lógica para móvil
            if (sidebar.classList.contains('-translate-x-full')) {
                // Mostrar sidebar
                sidebar.classList.remove('-translate-x-full');
                sidebarContainer.classList.remove('hidden')
                mobileOverlay.classList.remove('hidden');
                // Cambiar icono a X
                mobileMenuIcon.innerHTML = `
                    <path d="m18 6-12 12"/>
                    <path d="m6 6 12 12"/>
                `;
            } else {
                // Ocultar sidebar
                sidebar.classList.add('-translate-x-full');
                mobileOverlay.classList.add('hidden');
                sidebarContainer.classList.add('hidden')

                // Cambiar icono a hamburguesa
                mobileMenuIcon.innerHTML = `
                    <line x1="4" x2="20" y1="12" y2="12"/>
                    <line x1="4" x2="20" y1="6" y2="6"/>
                    <line x1="4" x2="20" y1="18" y2="18"/>
                `;
            }
        } else {
            // Lógica para desktop
            if (sidebar.classList.contains('hidden')) {
                // Mostrar sidebar
                sidebar.classList.remove('hidden');
                mainContent.classList.add('md:ml-[280px]');
                sidebar.classList.remove('hidden');
                sidebarContainer.classList.remove('w-[50px]');
                sidebarContainer.classList.add('w-[300px]');
                desktopArrow.style.transform = 'rotate(0deg)';
            } else {
                // Ocultar sidebar
                sidebar.classList.add('hidden');
                mainContent.classList.remove('md:ml-[280px]');
                sidebarContainer.classList.remove('w-[300px]');
                sidebarContainer.classList.add('w-[10px]');
                desktopArrow.style.transform = 'rotate(180deg)';
            }
        }
    }

    // Event listeners para ambos botones
    mobileMenuBtn?.addEventListener('click', toggleSidebar);
    desktopToggleBtn?.addEventListener('click', toggleSidebar);

    // Cerrar sidebar al hacer clic en el overlay
    mobileOverlay?.addEventListener('click', () => {
        if (window.matchMedia('(max-width: 768px)').matches) {
            toggleSidebar();
        }
    });

    // Inicializar estado al cargar la página
    window.addEventListener('load', () => {
        if (window.matchMedia('(min-width: 769px)').matches) {
            // Desktop: mostrar sidebar por defecto
            sidebar.classList.remove('hidden', '-translate-x-full');
            sidebar.classList.add('md:translate-x-0');
            mainContent.classList.add('md:ml-[280px]');
            sidebarContainer.classList.add('md:w-[300px]');
            mobileOverlay.classList.add('hidden');
        } else {
            // Mobile: ocultar sidebar por defecto
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('hidden');
            mainContent.classList.remove('md:ml-[280px]');
            sidebarContainer.classList.remove('md:w-[300px]');
            sidebarContainer.classList.add('hidden');
            sidebarContainer.classList.add('w-[250px]');
            mobileOverlay.classList.add('hidden');
        }
    });

    // Manejar cambios de tamaño de ventana
    window.addEventListener('resize', () => {
        if (window.matchMedia('(min-width: 769px)').matches) {
            // Cambio a desktop
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('md:translate-x-0');
            mobileOverlay.classList.add('hidden');
            if (!sidebar.classList.contains('hidden')) {
                mainContent.classList.add('md:ml-[280px]');
                sidebarContainer.classList.add('md:w-[300px]');
            }
            // Resetear icono móvil
            mobileMenuIcon.innerHTML = `
                <line x1="4" x2="20" y1="12" y2="12"/>
                <line x1="4" x2="20" y1="6" y2="6"/>
                <line x1="4" x2="20" y1="18" y2="18"/>
            `;
        } else {
            // Cambio a móvil
            sidebar.classList.remove('hidden');
            if (!sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.add('-translate-x-full');
                mobileOverlay.classList.add('hidden');
            }
            mainContent.classList.remove('md:ml-[280px]');
            sidebarContainer.classList.add('w-[300px]');
        }
    });

    // ----- Lógica de menú -----
    const menu = document.getElementById('menu');
    let activeItemId = null;

    menu.addEventListener('click', (e) => {
        const btn = e.target.closest('button');
        if (!btn) return;

        const container = btn.closest('.menu-item');
        const isSubitem = btn.classList.contains('subitem');

        if (isSubitem) {
            const href = btn.getAttribute('data-href');
            if (href) {
                window.location.href = href;
                return;
            }
        }

        if (!container) return;

        const id = container.getAttribute('data-id');
        const hasArrow = container.hasAttribute('data-has-arrow');

        setActiveItem(container, id);

        // Si no tiene submenú, redirige directamente
        if (!hasArrow) {
            const href = btn.getAttribute('data-href');
            if (href) {
                window.location.href = href;
                return;
            }
        }

        // Solo permitir un submenú abierto a la vez
        if (hasArrow) {
            // Cerrar todos los submenús excepto el actual
            document.querySelectorAll('.menu-item[data-has-arrow="true"]').forEach(mi => {
                const submenu = mi.querySelector('.submenu');
                const arrow = mi.querySelector('.arrow');
                if (mi !== container) {
                    submenu?.classList.remove('open');
                    arrow?.classList.remove('open');
                }
            });

            const submenu = container.querySelector('.submenu');
            const arrow = container.querySelector('.arrow');
            const isOpen = submenu.classList.contains('open');
            submenu.classList.toggle('open', !isOpen);
            arrow.classList.toggle('open', !isOpen);
        }
    });

    menu.addEventListener('mouseover', (e) => {
        const item = e.target.closest('.menu-item');
        if (!item) return;
        const icon = item.querySelector('.icon');
        if (!icon) return;
        const id = item.getAttribute('data-id');
        if (activeItemId === id) return;
        const hoverSrc = icon.getAttribute('data-src-hover');
        if (hoverSrc) icon.src = hoverSrc;
    });

    menu.addEventListener('mouseout', (e) => {
        const item = e.target.closest('.menu-item');
        if (!item) return;
        const icon = item.querySelector('.icon');
        if (!icon) return;
        const id = item.getAttribute('data-id');
        if (activeItemId === id) return;
        const defSrc = icon.getAttribute('data-src-default');
        if (defSrc) icon.src = defSrc;
    });

    function setActiveItem(container, id) {
        document.querySelectorAll('.menu-item').forEach(mi => {
            const label = mi.querySelector('.label');
            const icon = mi.querySelector('.icon');
            if (label) label.classList.remove('text-teal-600');
            if (icon) {
                const def = icon.getAttribute('data-src-default');
                if (def) icon.src = def;
            }
        });
        activeItemId = id;
        const label = container.querySelector('.label');
        const icon = container.querySelector('.icon');
        if (label) label.classList.add('text-teal-600');
        if (icon) {
            const hov = icon.getAttribute('data-src-hover');
            if (hov) icon.src = hov;
        }
    }
</script>