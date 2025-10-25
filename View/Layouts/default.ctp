<?php

/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Ciudad Bienestar: Sistema de Información');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SICB PIC 2025</title>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    // 🚫 No cargamos Bootstrap
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

    <!-- JS -->
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


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
</head>

<!--body class="bs-docs-home"-->

<body id="app" class="bg-white">

    <!-- Navbar -->

    <nav class="w-full h-[65px] fixed top-0 left-0 z-50 shadow p-2 bg-white border-b border-gray-200">
        <div class="flex items-center justify-between h-full px-4">

            <!-- Logo + Title -->
            <div class="flex items-center gap-2">
                <img class="w-8 h-[50px] object-cover" alt="dataHome.alt"
                    src="<?php echo $this->webroot; ?>/img/update/logoPic.png">
                <a href="/react/#/homePage">
                    <h2
                        class="text-[#155dfc] text-2xl md:text-[28px] font-bold whitespace-nowrap hover:text-green-600 transition-colors">
                        {{ dataHome.title }}
                    </h2>
                </a>
            </div>

            <!-- Mobile button -->
            <button class="md:hidden p-2" @click="isSidebarOpen = !isSidebarOpen">
                <div class="w-6 h-6 flex flex-col justify-center items-center">
                    <span
                        :class="['bg-gray-600 block transition-all duration-300 ease-out h-0.5 w-6 rounded-sm', isSidebarOpen ? 'rotate-45 translate-y-1' : '-translate-y-0.5']"></span>
                    <span
                        :class="['bg-gray-600 block transition-all duration-300 ease-out h-0.5 w-6 rounded-sm my-0.5', isSidebarOpen ? 'opacity-0' : 'opacity-100']"></span>
                    <span
                        :class="['bg-gray-600 block transition-all duration-300 ease-out h-0.5 w-6 rounded-sm', isSidebarOpen ? '-rotate-45 -translate-y-1' : 'translate-y-0.5']"></span>
                </div>
            </button>

            <!-- Desktop Icons -->
            <div class="hidden p-6 md:flex items-center gap-8">

                <!-- Botón admin solo si grupoUsuario == 1 -->
                <button v-if="grupoUsuario === '1'" type="button" class="p-0 bg-transparent border-none"
                    @click="goTo('/homePage/userAdmin')" aria-label="Ir a Administrador">
                    <img class="w-4 h-4 object-cover cursor-pointer" :alt="dataHome.alt"
                        :src="dataHome.adminIcon.default">
                </button>

                <!-- Icons dinámicos -->
                <button v-for="icon in dataHome.icons" :key="icon.key" type="button"
                    class="p-0 bg-transparent border-none" @click="icon.action" aria-label="Ir a {{ icon.key }}">
                    <img class="w-4 h-4 object-cover cursor-pointer" :alt="dataHome.alt" :src="icon.default">
                </button>
            </div>
        </div>
    </nav>


    <div class="flex pt-[65px]">
        <!-- Botón para abrir/cerrar en mobile (ejemplo) -->
        <div class="md:hidden fixed top-3 left-3 z-50">
            <button id="toggleSidebar" class="px-3 py-2 rounded-lg border bg-white shadow text-gray-700">
                Menú
            </button>
        </div>

        



        <!-- Contenido principal -->
        <main id="mainContent" class="flex-1 p-6 md:ml-[280px] transition-all duration-300 ">
            <?php echo $this->Session->flash(); ?>
            <div class="relative z-10">
                <?php echo $this->fetch('content'); ?>
            </div>
        </main>
    </div>


    <script>
        const URLCAKE = "http://localhost/aplicacioncakephp/appservidor/";
        const {
            createApp
        } = Vue;

        createApp({
            data() {
                return {
                    isSidebarOpen: false,
                    grupoUsuario: "1",
                    nombreUsuario: "Usuario",
                    rolUsuario: "Administrador",
                    dataHome: {
                        alt: "Logo",
                        img: "https://via.placeholder.com/40x50",
                        href: "/",
                        title: "SICB",
                        adminIcon: {
                            default: "<?php echo $this->webroot; ?>/img/update/adminHover.png",
                        },
                        icons: [{
                                key: "Home",
                                default: "<?php echo $this->webroot; ?>/img/update/hogar.png",
                                action: () => {
                                    window.location.href = `/react/#/homePage`;
                                }
                            },
                            {
                                key: "Ayuda",
                                default: "<?php echo $this->webroot; ?>/img/update/ayuda.png",
                                action: () => {
                                    window.location.href = `${URLCAKE}/users/home`;
                                }
                            },
                            {
                                key: "Salir",
                                default: "<?php echo $this->webroot; ?>/img/update/cerrarSesion.png",
                                action: () => {
                                    window.location.href = `${URLCAKE}/users/salir`;
                                }
                            }
                        ]
                    }
                }
            },
            methods: {
                goTo(path) {
                    window.location.href = path;
                }
            },
            mounted() {
                <?php
                $grupoUsuario = $_SESSION['Auth']['User']['group_id'];
                $nombreUsuario = isset($_SESSION['Auth']['User']['nombre']) ? $_SESSION['Auth']['User']['nombre'] : '';
                ?>
                this.grupoUsuario = "<?php echo $grupoUsuario; ?>";
                this.nombreUsuario = "<?php echo $nombreUsuario; ?>";
                let rol = "";
                switch ("<?php echo $grupoUsuario; ?>") {
                    case "1":
                        rol = "Administrador";
                        break;
                    case "2":
                        rol = "Referente";
                        break;
                    case "3":
                        rol = "Operador PIC";
                        break;
                    default:
                        rol = "Invitado";
                }
                this.rolUsuario = rol;
            }
        }).mount('#app');

        // ----- Estado de sidebar (mobile) -----
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleSidebar');
        const mainContent = document.getElementById('mainContent');
        let isSidebarOpen = false;

        const applySidebarTransform = () => {
            if (window.matchMedia('(min-width: 888px)').matches) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('md:translate-x-0');
            } else {
                sidebar.classList.toggle('-translate-x-full', !isSidebarOpen);
            }
        };

        toggleBtn?.addEventListener('click', () => {
            isSidebarOpen = !isSidebarOpen;
            applySidebarTransform();
        });

        window.addEventListener('resize', applySidebarTransform);
        applySidebarTransform();

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
                if (label) label.classList.remove('text-[#155dfc]');
                if (icon) {
                    const def = icon.getAttribute('data-src-default');
                    if (def) icon.src = def;
                }
            });
            activeItemId = id;
            const label = container.querySelector('.label');
            const icon = container.querySelector('.icon');
            if (label) label.classList.add('text-[#155dfc]');
            if (icon) {
                const hov = icon.getAttribute('data-src-hover');
                if (hov) icon.src = hov;
            }
        }
        // ...existing code...
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const arrow = document.getElementById('arrow');
            const sidebarContainer = document.getElementById('sidebarContainer');
            const mainContent = document.getElementById('mainContent');

            sidebar.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');

            // Quita o pone el margen izquierdo al main
            if (sidebar.classList.contains('hidden')) {
                mainContent.classList.remove('md:ml-[280px]');
                sidebarContainer.classList.remove('w-[300px]');
            } else {
                mainContent.classList.add('md:ml-[280px]');
                sidebarContainer.classList.add('w-[300px]');
            }
        }
        // ...existing code...
    </script>
</body>     