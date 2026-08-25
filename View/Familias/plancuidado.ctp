<?php $this->layout = 'default_familia' ?>


<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Formato de Plan de Cuidado<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Modulo Novedades
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Formato de visualización e impresion de Plan de Cuidado.
    </p>
</div>


<div class="flex max-w-6xl mx-auto text-center mb-8 gap-4">
    <button title="Regresar a la familia" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'view', $familia['Familia']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="m12 19-7-7 7-7" />
            <path d="M19 12H5" />
        </svg>
    </button>




    <button title="Editar Plan de Cuidado" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'Observacions', 'action' => 'findByFamiliaId', $familia['Familia']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
            <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
        </svg>
    </button>

    <button title="Imprimir" type="button" id="btn-print" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
            <rect x="6" y="14" width="12" height="8" rx="1" />
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
                        <td colspan="9" class="border border-gray-300 font-bold text-center p-2">
                            PROCESO SALUD PÚBLICA
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            NOMBRE DEL FORMATO: PLAN DE CUIDADO
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2025</td>
                        <td colspan="2" class="border border-gray-300 p-2">VERSIÓN: </td>
                        <td colspan="2" class="border border-gray-300 p-2">CÓDIGO: </td>
                        <td colspan="2" class="border border-gray-300 py-2 pr-12 pl-2"> <span class="font-semibold">Página:</span></td>
                    </tr>

                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            INFORMACION GENERAL
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 text-center">OBJETIVO</td>
                        <td colspan="6" class="border border-gray-300 p-2"> Gestionar el estado de salud de la familia de acuerdo a lo Definido en el decreto 1599 art. 2.11.3 y en el lineamiento Para la conformación, operación y seguimiento de los Equipos básicos de salud, en cumplimiento de la resolución 3280 Rutas integrales de atención.</td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('ID'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['id']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Familia'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['apellidosfamilia']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Representante'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2">CC<?php echo h($familia['Familia']['numerodocumento']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Territorio'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Ubicacion']['cod_microterritorio']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Microterriotio'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Ubicacion']['microterritorio']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('direccion'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['direccion']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Celular'); ?></td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['celular']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Correo'); ?></td>
                        <td colspan="4" class="border border-gray-300 p-2">No Aplica</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Num Hogares'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['numerohogares']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Num Integrantes'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['numeropersonas']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Población Vulnerable'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo is_array($familia['Familia']['poblacionvulnerable']) ? implode(', ', $familia['Familia']['poblacionvulnerable']) : h($familia['Familia']['poblacionvulnerable']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            VIVIENDA
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Tipo de Vivienda'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['vivienda']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Tenencia'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['tenencia']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Tiempo de residencia'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['tiemporesidencia']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Combustible'); ?></td>
                        <td colspan="6" class="border border-gray-300 p-2"><?php echo is_array($familia['Familia']['combustible']) ? implode(', ', $familia['Familia']['combustible']) : h($familia['Familia']['combustible']); ?></td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Actividad economica'); ?></td>
                        <td colspan="1" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['actividad']); ?></td>
                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            HABITABILIDAD
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Paredes'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['estadoparedes']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Techo'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['estadotecho']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Hacinamiento'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['hacinamiento']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Riesgo Externo'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['riesgoexterno']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Riesgo Hogar'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['riesgo']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Facil Acceso'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['acceso']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Servicio de Agua'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['aguaservicio']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Higiene Hogar'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['higiene']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Aseo Cocina'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['aseococina']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Tratamiento de Agua'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['aguatratamiento']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Limpieza del Tanque de agua'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['aguasiministro']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Disposición de Residuos'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['diposicionexcretas']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Agua Residual'); ?></td>
                        <td colspan="5" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['aguaresiduales']); ?></td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Reciclaje'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['reciclaje']); ?></td>
                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            MASCOTAS EN EL HOGAR
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Numero de Animales'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['numeroPerros']); ?> </td>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Tipós de Animales'); ?></td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['numeroGatos']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Desparasitacion'); ?></td>
                        <td colspan="8" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['desparasitamascotas']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Vacunacion'); ?></td>
                        <td colspan="8" class="border border-gray-300 p-2"><?php echo h($familia['Sociambiental']['vacunamascotas']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            CARACTERISTICAS DE LA FAMILIA
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Tipo de Familia'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['tipofamilia']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Curso de vida'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['cursovidafamilia']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Estilo de vida'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['estilodevidapredominante']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Poblacion Etnica'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['poblacionetnica']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Resguardo'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['resguardo']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Salud alternativa'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['saludalternativa']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Antecedentes Enfermedad'); ?></td>
                        <td colspan="8" class="border border-gray-300 p-2"><?php echo is_array($familia['Familia']['antecedenteenfermedad']) ? implode(', ', $familia['Familia']['antecedenteenfermedad']) : h($familia['Familia']['antecedenteenfermedad']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Lavado de Manos'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['lavadomanos']); ?> </td>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Cultura de Cepillado de dientes'); ?></td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['cepilladodientes']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Riesgo Psicosocial'); ?></td>
                        <td colspan="8" class="border border-gray-300 p-2"><?php echo is_array($familia['Familia']['riesgopsicosocial']) ? implode(', ', $familia['Familia']['riesgopsicosocial']) : h($familia['Familia']['riesgopsicosocial']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Programa social'); ?></td>
                        <td colspan="8" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['programasocial']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Calculo Apgar'); ?></td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['calculoapgar']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Resultado Apgar'); ?></td>
                        <td colspan="4" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['apgarFuncionalidad']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Familiograma'); ?></td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($familia['Observacion'][0]['resultadoFamiliograma']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Ecomapa'); ?></td>
                        <td colspan="4" class="border border-gray-300 p-2"><?php echo h($familia['Observacion'][0]['resultadoEcomapa']); ?> </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Cuidador permanente'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['cuidadorpermante']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Calculo ZARIT'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['calculozarit']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Resultado ZARIT'); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo h($familia['Familia']['zaritFuncionalidad']); ?> </td>
                    </tr>
                </tbody>
            </table>

            <table class="w-full border border-gray-300 text-sm text-gray-800 mt-12">
                <tbody>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            PERSONAS QUE CONFORMAN LA FAMILIA
                        </td>
                    </tr>
                    <?php foreach ($familia['Juventudadulto'] as $integrante) : ?>
                        <tr>
                            <td colspan="9">-</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Nombre'); ?></td>
                            <td colspan="3" class="border border-gray-300 p-2"><?php echo h($integrante['primernombre'] . ' ' . $integrante['segundonombre']); ?> </td>
                            <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Apellido'); ?></td>
                            <td colspan="4" class="border border-gray-300 p-2"><?php echo h($integrante['primerapellido'] . ' ' . $integrante['segundoapellido']); ?> </td>
                        </tr>
                        <tr>
                            <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Edad'); ?></td>
                            <td colspan="2" class="border border-gray-300 p-2"><?php echo h($this->Time->format($integrante['fechanac'], 'Y') ? date_diff(date_create($integrante['fechanac']), date_create('now'))->y : ''); ?> </td>
                            <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Sexo'); ?></td>
                            <td colspan="2" class="border border-gray-300 p-2"><?php echo h($integrante['sexo']); ?> </td>
                            <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Aseguradora'); ?></td>
                            <td colspan="2" class="border border-gray-300 p-2"><?php echo h($integrante['aseguradora']); ?> </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Canalizacion'); ?></td>
                            <td colspan="3" class="border border-gray-300 p-2">
                                <?php
                                $canalizacionRaw = $integrante['canalizacionuno'];

                                if ($canalizacionRaw) {
                                    $partes = array_filter(array_map('trim', explode(',', $canalizacionRaw)));
                                    if (!empty($partes)) {
                                        echo '<ul class="list-disc list-inside space-y-1">';
                                        foreach ($partes as $parte) {
                                            echo '<li>' . h($parte) . '</li>';
                                        }
                                        echo '</ul>';
                                    } else {
                                        echo h($canalizacionRaw);
                                    }
                                } else {
                                    echo h($canalizacionRaw);
                                }
                                ?>
                            </td>
                            <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Condicion cronica'); ?></td>
                            <td colspan="4" class="border border-gray-300 p-2"><?php echo h($integrante['condicioncronica']); ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <!-- Encabezado con logo y datos -->
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            RESUMEN DE FICHA FAMILIAR
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Resultado Ecomapa</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($familia['Observacion'][0]['resultadoEcomapa']); ?></td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Resultado Familiograma</td>
                        <td colspan="4" class="border border-gray-300 p-2"><?php echo h($familia['Observacion'][0]['resultadoFamiliograma']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Se identificó riesgos en salud</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php

                            $canalizacionRaw = $familia['Observacion'][0]['menoresriegosalud'];

                            $riesgosalud = [
                                '0.1' => 'Ninguno',
                                '5.1' => 'Menor con Riesgo desnutrición',
                                '5.2' => 'Menor sin esquema de vacunación completo',
                                '3.3' => 'Menor con Signos de peligro EDA o IRA',
                                '2.1' => 'Menor sin valoraciones de PYM',
                                '1' => 'Persona joven/adulto sin valoraciones de PYM',
                                '5.4' => 'Gestante sin control',
                                '4.5' => 'Embarazo de alto riesgo',
                                '1.01' => 'Persona con enfermedad crónica con control',
                                '5.6' => 'Persona con enfermedad crónica sin control',
                                '4.1' => 'Persona Sintomatico respiratorio o de piel',
                                '3' => 'Persona con enferemedad sin manejo',
                                '3.4' => 'Persona con afectación de salud mental',

                            ];

                            $items = !empty($canalizacionRaw)
                                ? array_filter(array_map('trim', explode(',', $canalizacionRaw)))
                                : [];

                            if (!empty($items)) {
                                echo '<ul class="list-disc list-inside space-y-1">';
                                foreach ($items as $parte) {
                                    // Buscamos la etiqueta, si no existe mostramos el código original
                                    $label = isset($riesgosalud[$parte]) ? $riesgosalud[$parte] : "Actualizar Campo";

                                    echo '<li>' . h($label) . '</li>';
                                }
                                echo '</ul>';
                            } else {
                                // 3. Caso para cuando no hay datos o la cadena solo tenía comas/espacios
                                echo '<span class="text-gray-500 italic">' . h('Sin registros de vulnerabilidad') . '</span>';
                            }
                            ?>

                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Se identificó algún riesgo de vulnerabilidad</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php

                            $canalizacionRaw = $familia['Observacion'][0]['riesgovulnerabilidad'];
                            // 1. Convertimos a array, limpiamos espacios y eliminamos elementos vacíos de una vez
                            $items = !empty($canalizacionRaw) ? array_filter(array_map('trim', explode(',', $canalizacionRaw))) : [];

                            $riesgovulnerabilidad = [
                                '0.1'  => 'Ninguna',
                                '2.0'  => 'Persona con discapacidad sin cuidador',
                                '2.1'  => 'Menor sin estudiar',
                                '1.3'  => 'Población Especial en riesgo',
                                '2.4'  => 'Persona sin afiliación a salud',
                                '1.2'  => 'Persona con consumo SPA',
                                '2.01' => 'Sospecha de violencia intrafamiliar',
                                '1.02' => 'Vivienda precaria',
                                '1.03' => 'Cuidador con sobrecarga',
                                '1.04' => 'Disfunción famliliar',
                                '1.05' => 'Relaciones familiares tensas o estresantes'
                            ];

                            // 2. Verificamos si el array final tiene datos
                            if (!empty($items)) {
                                echo '<ul class="list-disc list-inside space-y-1">';
                                foreach ($items as $parte) {
                                    // Buscamos la etiqueta, si no existe mostramos el código original
                                    $label = isset($riesgovulnerabilidad[$parte]) ? $riesgovulnerabilidad[$parte] : "Actualizar Campo";

                                    echo '<li>' . h($label) . '</li>';
                                }
                                echo '</ul>';
                            } else {
                                // 3. Caso para cuando no hay datos o la cadena solo tenía comas/espacios
                                echo '<span class="text-gray-500 italic">' . h('Sin registros de vulnerabilidad') . '</span>';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Valoración de riesgo familia</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php
                            $puntuacionFamilia = isset($familia['Observacion'][0]['puntuacionfamilia'])
                                ? $familia['Observacion'][0]['puntuacionfamilia']
                                : '';
                            echo h($puntuacionFamilia !== '' ? $puntuacionFamilia : 'Campo vacío');
                            ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Clasificación de la familia</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php
                            $puntuacionFamilia = isset($familia['Observacion'][0]['valoracionfamilia'])
                                ? $familia['Observacion'][0]['valoracionfamilia']
                                : '';
                            echo h($puntuacionFamilia !== '' ? $puntuacionFamilia : 'Campo vacío');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Fortalezas de la familia</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php
                            $canalizacionRaw = $familia['Observacion'][0]['fortalezas'];

                            $fortalezas = [
                                'Vivienda adecuada y segura' => 'Vivienda adecuada y segura',
                                'Acceso a servicios básicos (agua alcantarillado luz gas)' => 'Acceso a servicios básicos (agua alcantarillado luz gas)',
                                'Buena salud física y mental de los miembros' => 'Buena salud física y mental de los miembros',
                                'Relaciones familiares afectuosas y respetuosas' => 'Relaciones familiares afectuosas y respetuosas',
                                'Apoyo emocional entre los miembros' => 'Apoyo emocional entre los miembros',
                                'Participación activa en la comunidad' => 'Participación activa en la comunidad',
                                'Estabilidad económica' => 'Estabilidad económica',
                                'Acceso a educación y formación' => 'Acceso a educación y formación',
                                'Habilidades de resolución de conflictos' => 'Habilidades de resolución de conflictos',
                                'Red de apoyo social sólida' => 'Red de apoyo social sólida',
                                'Prácticas saludables de alimentación y ejercicio' => 'Prácticas saludables de alimentación y ejercicio',
                                'Entorno familiar seguro y libre de violencia' => 'Entorno familiar seguro y libre de violencia',
                            ];

                            $items = !empty($canalizacionRaw)
                                ? array_filter(array_map('trim', explode(',', $canalizacionRaw)))
                                : [];

                            if (!empty($items)) {
                                echo '<ul class="list-disc list-inside space-y-1">';
                                foreach ($items as $parte) {
                                    // Buscamos la etiqueta, si no existe mostramos el código original
                                    $label = isset($fortalezas[$parte]) ? $fortalezas[$parte] : "Actualizar Campo";

                                    echo '<li>' . h($label) . '</li>';
                                }
                                echo '</ul>';
                            } else {
                                // 3. Caso para cuando no hay datos o la cadena solo tenía comas/espacios
                                echo '<span class="text-gray-500 italic">' . h('Sin registros de vulnerabilidad') . '</span>';
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="w-full border border-gray-300 text-sm text-gray-800 mt-12">
                <tbody>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            OBJETIVOS DEL PLAN DE CUIDADO
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Objetivo a corto plazo</td>
                        <td colspan="7" class="border border-gray-300 p-2">
                            <?php
                            echo $this->Html->div('observacionplancuidado-tema', $familia['Observacion'][0]['objetivocortoplazo'], ['escape' => false]);
                            ?>

                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Objetivo a largo plazo</td>
                        <td colspan="7" class="border border-gray-300 p-2">
                            <?php
                            echo $this->Html->div('observacionplancuidado-tema', $familia['Observacion'][0]['objetivolargoplazo'], ['escape' => false]);
                            ?>
                        </td>
                    </tr>


                    <tr class="bg-gray-100">
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Entorno de Intervencion'); ?></td>
                        <td colspan="7" class="border border-gray-300 p-2"><?php echo h($familia['Observacion'][0]['entornoafectado']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Actividades a desarrollar'); ?></td>
                        <td colspan="7" class="border border-gray-300 p-2"><?php echo h($familia['Observacion'][0]['indicadorria']); ?> </td>
                    </tr>

                    <?php
                    // Procesar responsables para mostrarlos en filas separadas
                    $responsablesArray = array();
                    if (!empty($familia['Observacion'][0]['responsables']) && is_array($familia['Observacion'][0]['responsables'])) {
                        $responsablesArray = $familia['Observacion'][0]['responsables'];
                    }
                    ?>

                    <?php if (!empty($responsablesArray)): ?>
                        <?php foreach ($responsablesArray as $index => $responsable): ?>
                            <tr class="<?php echo ($index % 2 == 0) ? 'bg-gray-100' : ''; ?>">
                                <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">
                                    <?php echo ($index == 0) ? __('Responsables EBS') : ''; ?>
                                </td>
                                <td colspan="5" class="border border-gray-300 p-2">
                                    <?php echo h($responsable['nombre']); ?>
                                </td>
                                <td colspan="2" class="border border-gray-300 p-2 text-sm text-gray-600">
                                    <?php echo h($responsable['profesion']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr class="bg-gray-100">
                            <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Responsables EBS'); ?></td>
                            <td colspan="7" class="border border-gray-300 p-2">No asignado</td>
                        </tr>
                    <?php endif; ?>

                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            DESCRIPCIÓN DE PLAN DE CUIDADO INTEGRAL PRIMARIO FAMILIAR
                        </td>
                    </tr>

                    <?php
                    // Decodificar el JSON de actividaddesarrollar
                    $actividades = [];
                    if (!empty($familia['Observacion'][0]['actividaddesarrollar'])) {
                        $actividadesJson = $familia['Observacion'][0]['actividaddesarrollar'];
                        $actividades = json_decode($actividadesJson, true);
                        if (json_last_error() !== JSON_ERROR_NONE) {
                            $actividades = [];
                        }
                    }

                    // Crear un array con los nombres de las personas
                    $personasNombres = [];
                    foreach ($familia['Juventudadulto'] as $persona) {
                        $nombreCompleto = trim($persona['primernombre'] . ' ' . $persona['segundonombre'] . ' ' . $persona['primerapellido'] . ' ' . $persona['segundoapellido']);
                        $personasNombres[$persona['id']] = $nombreCompleto;
                    }

                    // Definir estados
                    $estadosLabels = [
                        'pendiente' => 'Pendiente',
                        'en-proceso' => 'En Proceso',
                        'alcanzado' => 'Logro Alcanzado'
                    ];
                    ?>

                    <?php if (!empty($actividades) && is_array($actividades)): ?>
                        <?php foreach ($actividades as $index => $actividad): ?>
                            <?php if ($index > 0): ?>
                                <tr>
                                    <td colspan="9" class="p-1"></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td colspan="9">-</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td colspan="2" class="border border-gray-300 font-semibold p-2">Situaciones Priorizadas</td>
                                <td colspan="7" class="border border-gray-300 p-2">
                                    <?php echo $this->Html->div(null, $actividad['situacionesPriorizadas'], ['escape' => false]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border border-gray-300 font-semibold p-2">Logros por Alcanzar</td>
                                <td colspan="7" class="border border-gray-300 p-2">
                                    <?php echo $this->Html->div(null, $actividad['logrosAlcanzados'], ['escape' => false]); ?>
                                </td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td colspan="2" class="border border-gray-300 font-semibold p-2">Responsable Familiar</td>
                                <td colspan="3" class="border border-gray-300 p-2">
                                    <?php
                                    $responsableId = $actividad['responsableFamilia'];
                                    echo isset($personasNombres[$responsableId]) ? h($personasNombres[$responsableId]) : h($responsableId);
                                    ?>
                                </td>
                                <td colspan="1" class="border border-gray-300 font-semibold p-2">Estado</td>
                                <td colspan="3" class="border border-gray-300 p-2">
                                    <?php
                                    $estado = isset($actividad['estado']) ? $actividad['estado'] : 'pendiente';
                                    echo isset($estadosLabels[$estado]) ? h($estadosLabels[$estado]) : h($estado);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border border-gray-300 font-semibold p-2">Fecha Compromiso</td>
                                <td colspan="3" class="border border-gray-300 p-2"><?php echo h($actividad['fechaCompromiso']); ?></td>
                                <td colspan="1" class="border border-gray-300 font-semibold p-2">Fecha Seguimiento</td>
                                <td colspan="3" class="border border-gray-300 p-2"><?php echo h($actividad['fechaSeguimiento']); ?></td>
                            </tr>

                            <tr>
                                <td colspan="2" class="border border-gray-300 font-semibold p-2">Indicadores</td>
                                <td colspan="7" class="border border-gray-300 p-2">
                                    <?php
                                    if (!empty($actividad['objetivoCortoPlazo']) && is_array($actividad['objetivoCortoPlazo'])) {
                                        echo '<ul class="list-disc list-inside space-y-1">';
                                        foreach ($actividad['objetivoCortoPlazo'] as $objetivo) {
                                            echo '<li>' . h($objetivo) . '</li>';
                                        }
                                        echo '</ul>';
                                    } else {
                                        echo h($actividad['objetivoCortoPlazo']);
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border border-gray-300 font-semibold p-2">Resultados Esperados</td>
                                <td colspan="7" class="border border-gray-300 p-2">
                                    <?php
                                    if (!empty($actividad['resultadosEsperados']) && is_array($actividad['resultadosEsperados'])) {
                                        echo '<ul class="list-disc list-inside space-y-1">';
                                        $resultadosUnicos = array_unique($actividad['resultadosEsperados']);
                                        foreach ($resultadosUnicos as $resultado) {
                                            echo '<li>' . h($resultado) . '</li>';
                                        }
                                        echo '</ul>';
                                    } else {
                                        echo h($actividad['resultadosEsperados']);
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="border border-gray-300 p-2 text-center text-gray-500">No hay actividades registradas</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>

            <table class="w-full border border-gray-300 text-sm text-gray-800 mt-12">
                <tbody>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            OBSERVACIONES Y RECOMENDACIONES
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 text-center">Observacion del desarrollo del plan</td>
                        <td colspan="6" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('observacionplancuidado-tema', $familia['Observacion'][0]['observacionesplancuidado'], ['escape' => false]); ?>
                        </td>
                    </tr>

                </tbody>
            </table>

            <table class="w-full border border-gray-300 text-sm text-gray-800 mt-12">
                <tbody>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            CONSENTIMIENTO Y COMPROMISO FAMILIAR
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="9" class="border border-gray-300 p-2">
                            Yo, <strong><?php echo h($familia['Observacion'][0]['firmaplancuidado']); ?></strong>,
                            confirmo que he recibido información adecuada sobre el Plan de Cuidado Integral Primario Familiar,
                            comprendo los objetivos y las intervenciones propuestas, consiento y me comprometo a la
                            implementación del plan con mi familia, y junto a las Institución Prestadora de Servicios
                            de Salud PASTO SALUD ESE, con el MINISTERIO DE SALUD Y PROTECCIÓN SOCIAL Y CON COLOMBIA.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 p-2">
                            Nombres / apellidos Representante de Familia:
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="9" class="border border-gray-300 px-2 py-8">
                            Firma del representante:
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 p-2">
                            No. Identificación de Representante Familia:
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td colspan="9" class="border border-gray-300 p-2">
                            Fecha de firma de consentimiento informado: Dia: _____ Mes: ______ Año: ________
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="w-full border border-gray-300 text-sm text-gray-800 mt-12">
                <tbody>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            DISENTIMIENTO INFORMADO
                        </td>
                    </tr>

                    <?php
                    // Decodificar el JSON de actividaddesarrollar
                    $actividades = [];
                    if (!empty($familia['Observacion'][0]['disentimiento'])) {
                        $actividadesJson = $familia['Observacion'][0]['disentimiento'];
                        $actividades = json_decode($actividadesJson, true);
                        if (json_last_error() !== JSON_ERROR_NONE) {
                            $actividades = [];
                        }
                    }
                    ?>

                    <?php if (!empty($actividades) && is_array($actividades)): ?>
                        <?php foreach ($actividades as $index => $actividad): ?>
                            <?php if ($index > 0): ?>
                                <tr>
                                    <td colspan="9" class="p-1"></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td colspan="9"> - </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border border-gray-300 font-semibold p-2">Nombres y Apellidos</td>
                                <td colspan="4" class="border border-gray-300 p-2"><?php echo h($actividad['nombre']); ?></td>
                                <td colspan="1" class="border border-gray-300 font-semibold p-2">Documento</td>
                                <td colspan="2" class="border border-gray-300 p-2"><?php echo h($actividad['documento']); ?></td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td colspan="1" class="border border-gray-300 font-semibold p-2">Rol</td>
                                <td colspan="8" class="border border-gray-300 p-2">
                                    <?php echo h($actividad['rol']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1" class="border border-gray-300 font-semibold p-2">Motivo</td>
                                <td colspan="8" class="border border-gray-300 p-2">

                                    <?php echo h($actividad['motivo']); ?>

                                </td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td colspan="9" class="border border-gray-300 font-semibold px-2 py-8">Firma</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="border border-gray-300 p-2 text-center text-gray-500">No hay actividades registradas</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>

            <table class="w-full border border-gray-300 text-sm text-gray-800 mt-12">
                <tbody>
                    <tr>
                        <td colspan="9" class="border border-gray-300 font-semibold text-center p-2">
                            FORMALIZACIÓN DE IMPLEMENTACIÓN DE PLAN DE CUIDADO INTEGRAL PRIMARIO FAMILIAR
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="9" class="border border-gray-300 font-semibold p-2 text-center">
                            Responsables EBS
                        </td>
                    </tr>

                    <?php
                    // Procesar responsables para mostrarlos en filas de disentimiento
                    $responsablesArrayFirma = array();
                    if (!empty($familia['Observacion'][0]['responsables']) && is_array($familia['Observacion'][0]['responsables'])) {
                        $responsablesArrayFirma = $familia['Observacion'][0]['responsables'];
                    }
                    ?>

                    <?php if (!empty($responsablesArrayFirma)): ?>
                        <?php foreach ($responsablesArrayFirma as $index => $responsable): ?>
                            <tr class="<?php echo ($index % 2 == 0) ? 'bg-gray-100' : ''; ?>">
                                <td colspan="1" class="border border-gray-300 p-2">
                                    Nombre:
                                </td>
                                <td colspan="2" class="border border-gray-300 p-2">
                                    <?php echo h($responsable['nombre']); ?>
                                </td>
                                <td colspan="1" class="border border-gray-300 p-2">
                                    Profesión:
                                </td>
                                <td colspan="2" class="border border-gray-300 p-2 text-sm text-gray-600">
                                    <?php echo h($responsable['profesion']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="9" class="border border-gray-300 px-2 py-8">Firma</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr class="bg-gray-100">
                            <td colspan="3" class="border border-gray-300 p-2">No hay responsables asignados</td>
                            <td colspan="6" class="border border-gray-300 px-2 py-8">Firma</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="flex max-w-6xl mx-auto text-center mb-8 gap-4 mt-8">
    <button title="Regresar a la familia" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'view', $familia['Familia']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="m12 19-7-7 7-7" />
            <path d="M19 12H5" />
        </svg>
    </button>


    <button title="Editar Plan de Cuidado" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'familias', 'action' => 'view', $familia['Familia']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
            <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
        </svg>
    </button>

    <button title="Imprimir" type="button" id="btn-print" class="flex items-center space-x-2 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
            <rect x="6" y="14" width="12" height="8" rx="1" />
        </svg>
    </button>

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