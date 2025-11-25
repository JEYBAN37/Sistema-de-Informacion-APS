<?php $this->layout = 'default_familia' ?>


<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Formato de Novedades<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Modulo Novedades
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Formato de visualización e impresion de Novedades.
    </p>
</div>


<div class="flex max-w-6xl mx-auto text-center mb-8 gap-4">
    <button title="Imprimir" type="button" id="btn-print" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
            <rect x="6" y="14" width="12" height="8" rx="1" />
        </svg>
    </button>


    <button title="Editar Novedad" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'edit', $visitasnegada['Visitasnegada']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
            <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
        </svg>
    </button>
</div>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12 block" id="print-area">
        <!-- Contenido a imprimir -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <!-- Encabezado con logo y datos -->
                    <tr>
                        <td rowspan="1" colspan="3" class="p-2 text-center align-center border border-gray-300">
                            <img src="<?php echo $this->Html->url('/img/aps_v2025/logo_Pasto.png', true); ?>" alt="Logo Pasto" class="logo-pasto w-[200px] mx-auto">
                        </td>
                        <td rowspan="1" colspan="3" class="p-2 text-center align-center border border-gray-300">
                            <img src="<?php echo $this->Html->url('/img/aps_v2025/Logo_del_Ministerio.png', true); ?>" alt="Logo Ministerio" class="logo-ministerio w-[100px] mx-auto">
                        </td>
                        <td rowspan="1" colspan="3" class="p-2 text-center align-center border border-gray-300">
                            <img src="<?php echo $this->Html->url('/img/aps_v2025/logo_pst_2025.png', true); ?>" alt="Logo PST" class="logo-pst mx-auto w-[200px]">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" class="border border-gray-300 font-bold text-center p-2">
                            PROCESO SALUD PÚBLICA
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" class="border border-gray-300 font-semibold text-center p-2">
                            NOMBRE DEL FORMATO: NO ENCUESTADOS
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2025</td>
                        <td colspan="2" class="border border-gray-300 p-2">VERSIÓN: </td>
                        <td colspan="2" class="border border-gray-300 p-2">CÓDIGO: </td>
                        <td colspan="1" class="border border-gray-300 py-2 pr-12 pl-2"> <span class="font-semibold">Página:</span></td>
                    </tr>

                    <tr class="bg-gray-100">

                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Responsable'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($visitasnegada['Responsable']['nombres']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Profesión'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($visitasnegada['Responsable']['profesion']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Celular'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($visitasnegada['Responsable']['celular']); ?> </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Fecha de Registro</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php
                            $fecha = $visitasnegada['Visitasnegada']['fecha'];
                            echo h($fecha && strtotime($fecha) ? date('Y-m-d', strtotime($fecha)) : '');
                            ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Ubicacion</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($visitasnegada['Ubicacion']['microterritorio']); ?></td>
                    </tr>


                    <!-- Información general -->
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">ID Novedad:</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($visitasnegada['Visitasnegada']['id']); ?>
                        </td>
                        <td colspan="6" class="border border-gray-300 p-2">
                            <?php echo __('Ficha de sistematización de novedades, se diligencia y completa para viviendas o lugares en donde la caracterizacion de las personas no fue posible'); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Nombre de la persona presente:</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($visitasnegada['Visitasnegada']['nombreshabitante']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Numero de documento</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($visitasnegada['Visitasnegada']['numerodocumento']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Celular</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($visitasnegada['Visitasnegada']['telefono']); ?>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Direccion</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php echo h($visitasnegada['Visitasnegada']['direccion']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Puntos de referencia</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php echo h($visitasnegada['Visitasnegada']['barriovereda']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Estado de la Casa</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($visitasnegada['Visitasnegada']['estadocasa']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Observaciones</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('tarea', $visitasnegada['Visitasnegada']['observacion'], ['escape' => false]); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var btn = document.getElementById('btn-print');
        var printContents = document.getElementById('print-area');

        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (!printContents) {
                alert("El área de impresión está vacía o no existe");
                return;
            }

            // Abrir nueva ventana
            var w = window.open('', '', 'height=900,width=1200');
            w.document.write('<html><head><title>Impresión</title>');
            // Inyectar Tailwind y tu CSS
            w.document.write('<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">');
            w.document.write('<link rel="stylesheet" href="/css/app.css" />');
            // Estilos para impresión
            w.document.write(`
    <style>
        @media print {
            body { margin: 0; }
            .bg-white { box-shadow: none !important; }
            table { page-break-inside:auto; }
            tr { page-break-inside:avoid; page-break-after:auto; }
            .page-break { page-break-before:always; }
            .logo-pasto { max-width: 200px !important; }
            .logo-ministerio { max-width: 100px !important; }
            .logo-pst { max-width: 200px !important; }
            img {
                height: auto !important;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        }
        .logo-pasto { max-width: 200px !important; }
        .logo-ministerio { max-width: 100px !important; }
        .logo-pst { max-width: 200px !important; }
        img {
            height: auto !important;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
`);
            w.document.write('</head><body style="margin:0;padding:0;">');
            w.document.write('<div style="width:100vw;max-width:100%;box-sizing:border-box;">' + printContents.innerHTML + '</div>');
            w.document.write('</body></html>');
            w.document.close();


            // Esperar a que los estilos carguen antes de imprimir
            w.onload = function() {
                w.focus();
                w.print();
                // w.close(); // Descomenta si quieres cerrar la ventana después de imprimir
            };
        });
    });
</script>