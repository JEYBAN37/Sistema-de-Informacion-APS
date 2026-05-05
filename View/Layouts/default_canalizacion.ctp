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

    // ✅ Tailwind CSS (solo una vez)
    echo $this->Html->css("https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css");

    // ✅ DataTables CSS
    echo $this->Html->css("https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css");
    echo $this->Html->css("https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css");
    echo $this->Html->css("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");

    // ✅ CKEditor
    echo $this->Html->script('ckeditor/ckeditor');
    ?>

    <!-- 🧩 Tailwind (JS) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 🧩 Choices.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- 🧩 jQuery (SOLO UNA VEZ, al inicio de scripts que dependen de él) -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- 🧩 Moment + Daterangepicker (orden correcto) -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- 🧩 DataTables y extensiones -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

    <!-- 🧩 Dependencias para exportar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
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
                            APS
                        </h2>
                    </a>
                </div>

                <img class="md:hidden w-50 h-10 object-cover cursor-pointer" alt="Logo Colombia"
                    src="<?php echo $this->webroot; ?>/img/aps_v2025/logo_colombia.png" />
            </div>

            <!-- Mobile button removed - solo usar el botón de flecha -->

            <!-- Desktop Icons -->
            <div class="hidden p-6 md:flex items-center gap-8">

                <!-- Botón admin solo si grupoUsuario == 1 -->
                <button v-if="grupoUsuario === '1'" type="button" class="p-0 bg-transparent border-none"
                    aria-label="Ir a Administrador"
                    href="<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'index']); ?>">
                    <img class="w-50 h-10 object-cover cursor-pointer" alt="Logo Colombia"
                        src="<?php echo $this->webroot; ?>/img/aps_v2025/logo_colombia.png" />
                </button>
            </div>
        </div>
    </nav>


    <div class="flex pt-[65px]">
        <!-- Botón de menú para móvil - posicionado independientemente -->
        <button id="mobileMenuBtn" class="fixed top-[75px] left-3 z-50 md:hidden
                       w-10 h-10 flex items-center justify-center
                       bg-white shadow-lg rounded-lg border
                       text-gray-700 hover:bg-gray-100 
                       transition-all duration-300">
            <svg id="mobileMenuIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" x2="20" y1="12" y2="12" />
                <line x1="4" x2="20" y1="6" y2="6" />
                <line x1="4" x2="20" y1="18" y2="18" />
            </svg>
        </button>

        <!-- Overlay para móvil cuando el sidebar está abierto -->
        <div id="mobileOverlay"
            class="fixed inset-0 bg-black bg-opacity-50 z-30 md:hidden hidden transition-opacity duration-300"></div>



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