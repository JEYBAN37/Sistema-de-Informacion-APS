<?php $this->layout = 'default_canalizacion' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<div id="consentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40"
    style="display: flex;">
    <div class="bg-white rounded-xl shadow-2xl max-w-lg w-full p-8 relative">

        <h3 class="text-2xl font-semibold mb-4 text-center text-teal-600">Consentimiento informado</h3>
        <div class="mb-6 text-gray-700 text-justify">
            <p class="text-gray-700 text-justify">
                Con el diligenciamiento del presente formulario
                <strong>autorizo libre y expresamente</strong>
                a la Secretaría de Salud de Pasto para que realice el tratamiento de los datos personales registrados y
                recolectados, de igual manera manifiesto que
                <strong>he sido informado</strong>
                sobre la finalidad de la recolección de la misma, con el propósito de implementar el modelo predictivo,
                preventivo y resolutivo basado en
                <strong>Atención Primaria en Salud</strong>
                , dando cumplimiento a la
                <strong>privacidad y protección de datos</strong>
                dispuesto en la Ley 1581 de 2012, el Decreto 1377 de 2013 y la circular externa 008 de 2020 de la
                Superintendencia de registro y comercio.
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-3 justify-center mt-6">

            <button id="aceptoBtn"
                class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg font-semibold text-center">Sí
                acepto</button>
        </div>
    </div>
</div>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Formato de Registro<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Solicitudes Ciudadanas
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Ingresar el formulario completamente de otra manera se invalidara el registro.
    </p>
</div>


<?php echo $this->Form->create('Persona', [
    'class' => 'space-y-6',
    'id' => 'formPersona'
]);
// se utiliza para llamar el id responsable donde sea necesario

echo $this->Form->hidden('aceptaformulario', array(
    'value' => 'Si acepta'
));

$TipoDeDocumentoOptions = array(
    'CC' => 'Cedula de ciudadania',
    'TI' => 'Tarjeta de identidad',
    'PPT' => 'Permiso Protección Temporal',
    'RC' => 'Registro civil',
    'MS' => 'Menor sin identificación',
    'AS' => 'Adulto sin identificación',
    'CE' => 'Cédula de extranjería',

);
$sexoOptions = array(
    'Hombre' => 'Hombre',
    'Mujer' => 'Mujer',
);



$aseguradoraOption = [
    'Sanitas' => 'Sanitas',
    'Emssanar' => 'Emssanar',
    'Nueva EPS' => 'Nueva EPS',
    'Mallamas' => 'Mallamas',
    'Famisanar' => 'Famisanar',
    'Asmet Salud' => 'Asmet Salud',
    'Sanidad PONAL' => 'Sanidad PONAL',
    'PROINSALUD' => 'PROINSALUD',
    'Fondo UDENAR' => 'Fondo UDENAR',
    'Medicina Prepagada' => 'Medicina Prepagada',
    'Sin afiliación' => 'Sin afiliación',

    'COMFAMILIAR CAMACOL' => 'COMFAMILIAR CAMACOL',
    'COMFAMA' => 'COMFAMA',
    'COMFAMILIAR CARTAGENA' => 'COMFAMILIAR CARTAGENA',
    'COMFABOY' => 'COMFABOY',
    'COMFACOR' => 'COMFACOR',
    'CAFAM' => 'CAFAM',
    'COMFAMILIAR DE LA GUAJIRA' => 'COMFAMILIAR DE LA GUAJIRA',
    'COMFAMILIAR HUILA' => 'COMFAMILIAR HUILA',
    'COMFAMILIAR NARIÑO' => 'COMFAMILIAR NARIÑO',
    'COMFENALCO QUINDIO' => 'COMFENALCO QUINDIO',
    'COMFAMILIAR RISARALDA' => 'COMFAMILIAR RISARALDA',
    'CAJASAI' => 'CAJASAI',
    'CAJASAN' => 'CAJASAN',
    'COMFENALCO SANTANDER' => 'COMFENALCO SANTANDER',
    'COMFASUCRE' => 'COMFASUCRE',
    'CAFABA' => 'CAFABA',
    'COMFENALCO TOLIMA' => 'COMFENALCO TOLIMA',
    'EPSS COMFACARTAGO' => 'EPSS COMFACARTAGO',
    'COMFANORTE' => 'COMFANORTE',
    'COMFAORIENTE' => 'COMFAORIENTE',
    'CCF050 COMFAORIENTE' => 'CCF050 COMFAORIENTE',
    'COMFACUNDI' => 'COMFACUNDI',
    'EPSS COMFENALCO CUNDINAMARCA' => 'EPSS COMFENALCO CUNDINAMARCA',
    'CAJACOPI ATLANTICO' => 'CAJACOPI ATLANTICO',
    'COLSUBSIDIO' => 'COLSUBSIDIO',
    'COMFACHOCO' => 'COMFACHOCO',
    'COMFACA' => 'COMFACA',
    'C.C.F. COMFACHOCO' => 'C.C.F. COMFACHOCO',
    'COMFAMILIAR GUAJIRA' => 'COMFAMILIAR GUAJIRA',
    'CCF de Sucre COMFASUCRE' => 'CCF de Sucre COMFASUCRE',
    'CCFC50 COMFAORIENTE Régimen por efecto de Movilidad' => 'CCFC50 COMFAORIENTE Régimen por efecto de Movilidad',
    'EPM MEDELLIN' => 'EPM MEDELLIN',
    'FONDO DE PASIVO SOCIAL FERROCARRILES' => 'FONDO DE PASIVO SOCIAL FERROCARRILES',
    'ALIANSALUD' => 'ALIANSALUD',
    'SALUD TOTAL' => 'SALUD TOTAL',
    'CAFESALUD' => 'CAFESALUD',
    'ISS' => 'ISS',
    'UNIMEC' => 'UNIMEC',
    'COMPENSAR' => 'COMPENSAR',
    'COMFENALCO ANTIOQUIA' => 'COMFENALCO ANTIOQUIA',
    'SURA - Compania Suramericana de Servicios de Salud SA' => 'SURA - Compania Suramericana de Servicios de Salud SA',
    'COLSEGUROS E.P.S. EN LIQUIDACION' => 'COLSEGUROS E.P.S. EN LIQUIDACION',
    'COMFENALCO VALLE' => 'COMFENALCO VALLE',
    'SALUDCOOP' => 'SALUDCOOP',
    'HUMANA VIVIR' => 'HUMANA VIVIR',
    'SALUD COLPATRIA' => 'SALUD COLPATRIA',
    'COOMEVA' => 'COOMEVA',
    'FAMISANAR' => 'FAMISANAR',
    'SERVICIO OCCIDENTAL DE SALUD SOS' => 'SERVICIO OCCIDENTAL DE SALUD SOS',
    'CAPRECOM' => 'CAPRECOM',
    'ARS CONVIDA' => 'ARS CONVIDA',
    'CRUZ BLANCA' => 'CRUZ BLANCA',
    'CAPRESOCA EPS' => 'CAPRESOCA EPS',
    'SOLSALUD' => 'SOLSALUD',
    'CALISALUD' => 'CALISALUD',
    'EPS SALUD CONDOR' => 'EPS SALUD CONDOR',
    'SELVASALUD SA' => 'SELVASALUD SA',
    'SALUD VIDA' => 'SALUD VIDA',
    'SALUD COLOMBIA' => 'SALUD COLOMBIA',
    'RED SALUD' => 'RED SALUD',
    'MULTIMEDICAS' => 'MULTIMEDICAS',
    'GOLDEN GROUP' => 'GOLDEN GROUP',
    'SAVIA SALUD' => 'SAVIA SALUD',
    'COOSALUD' => 'COOSALUD',
    'Medimas EPS S.A.S' => 'Medimas EPS S.A.S',
    'Fundación Salud MIA EPS' => 'Fundación Salud MIA EPS',
    'SALUD BOLIVAR EPS' => 'SALUD BOLIVAR EPS',
    'MUTUAL SER' => 'MUTUAL SER',
    'EPS La Guaitara' => 'EPS La Guaitara',
    'CONVIDA' => 'CONVIDA',
    'CAPRESOCA' => 'CAPRESOCA',
    'SALUDVIDA S.A.' => 'SALUDVIDA S.A.',
    'CAPITAL SALUD' => 'CAPITAL SALUD',
    'DUSAKAWI' => 'DUSAKAWI',
    'MANEXKA' => 'MANEXKA',
    'ASOCIACION INDIGENA DEL CAUCA AIC' => 'ASOCIACION INDIGENA DEL CAUCA AIC',
    'ANASWAYU' => 'ANASWAYU',
    'PIJAOSALUD' => 'PIJAOSALUD',
    'AIC' => 'AIC',
    'ANAS WAYUU' => 'ANAS WAYUU',
    'PIJAOS' => 'PIJAOS',

    'ESS EMDISALUD' => 'ESS EMDISALUD',
    'COMCAJA' => 'COMCAJA',
    'ESS COOSALUD' => 'ESS COOSALUD',
    'ESS ASMET SALUD' => 'ESS ASMET SALUD',
    'ASOCIACION SOLIDARIA DE SALUD DE ASTREA' => 'ASOCIACION SOLIDARIA DE SALUD DE ASTREA',
    'ESS AMBUQ' => 'ESS AMBUQ',
    'ESS ECOOPSOS' => 'ESS ECOOPSOS',
    'ESS COMPARTA' => 'ESS COMPARTA',
    'EMDISALUD ESS' => 'EMDISALUD ESS',
    'MUTUALSER' => 'MUTUALSER',
    'AMBUQ' => 'AMBUQ',
    'COOSALUD E.S.S.' => 'COOSALUD E.S.S.',
    'COMPARTA' => 'COMPARTA',
    'ASMETSALUD' => 'ASMETSALUD',
    'ECOOPSOS' => 'ECOOPSOS',

    'FONDO DE SOLIDARIDAD PENSIONAL' => 'FONDO DE SOLIDARIDAD PENSIONAL',
    'ECOPETROL' => 'ECOPETROL',
    'FUERZAS MILITARES' => 'FUERZAS MILITARES',
    'FONDO DE PRESTACIONES SOCIALES DEL MAGISTERIO' => 'FONDO DE PRESTACIONES SOCIALES DEL MAGISTERIO',
    'UNIDAD DE SALUD UNIVERSIDAD DEL ATLANTICO' => 'UNIDAD DE SALUD UNIVERSIDAD DEL ATLANTICO',
    'CAJA DE PREVISION SOCIAL DE LA U DE SANTANDER CAPRUIS' => 'CAJA DE PREVISION SOCIAL DE LA U DE SANTANDER CAPRUIS',
    'SERVICIO MEDICO DE LA UNIVERSIDAD DEL VALLE' => 'SERVICIO MEDICO DE LA UNIVERSIDAD DEL VALLE',
    'UNIDAD DE SALUD UNIVERSIDAD NACIONAL' => 'UNIDAD DE SALUD UNIVERSIDAD NACIONAL',
    'UNIDAD DE SALUD UNIVERSIDAD DEL CAUCA' => 'UNIDAD DE SALUD UNIVERSIDAD DEL CAUCA',
    'UNIDAD DE SALUD UNIVERSIDAD DEL CARTAGENA' => 'UNIDAD DE SALUD UNIVERSIDAD DEL CARTAGENA',
    'PROGRAMA DE SALUD UNIVERSIDAD DE ANTIOQUIA' => 'PROGRAMA DE SALUD UNIVERSIDAD DE ANTIOQUIA',
    'UNIDAD DE SALUD UNIVERSIDAD DEL CORDOBA' => 'UNIDAD DE SALUD UNIVERSIDAD DEL CORDOBA',
    'UNIDAD DE SALUD UPTC' => 'UNIDAD DE SALUD UPTC',

    'REUE02' => 'REUE02',
    'REUE03' => 'REUE03',
    'REUE04' => 'REUE04',
    'REUE05' => 'REUE05',
    'REUE06' => 'REUE06',
    'REUE07' => 'REUE07',
    'REUE09' => 'REUE09',

    'CAJASALUD EPSS UT' => 'CAJASALUD EPSS UT',
    'COMFAMILIARES EN SALUD UT' => 'COMFAMILIARES EN SALUD UT',
    'CONVENIO COMFENALCO UT' => 'CONVENIO COMFENALCO UT',
    'CONVENIO CAMACOL COMFAMA UT' => 'CONVENIO CAMACOL COMFAMA UT',
];


$grupoPoblacional = [
    '1.Niñas, niños y adolescentes' => 'Niñas, niños y adolescentes',
    '2.Gestantes' => 'Gestantes',
    '3.Persona adulta mayor' => 'Persona adulta mayor',
    '4.Persona con condición de discapacidad' => 'Persona con condición de discapacidad',
    '5.Personas con orientación sexual diversa' => 'Personas con orientación sexual diversa',
    '6.Víctimas de violencia' => 'Víctimas de violencia',
    '7.Ninguno' => 'Ninguno'
];

$optionCanalizacion =
    [
        '0.No |0' => 'No se requiere canalización',
        '1.Valoración Integral para la PYMS |0.5' => 'Valoración Integral para la PYMS',
        '2.Valoración integral por profesional en odontología para la PYMS |0.3' => 'Odontología P Y M',
        '3.Promoción y apoyo a lactancia materna |0.5' => 'Promoción y apoyo a lactancia materna',
        '4.Aplicación de flúor |0.1' => 'Aplicación de flúor',
        '5.Profilaxis y remoción de placa bacteriana |0.1' => 'Profilaxis y remoción de placa bacteriana',
        '0.Odontología general |0.2' => 'Odontología general',
        '6.Vacunación |1' => 'Vacunación',
        '12.Tamizaje de riesgo cardiovascular |0.5' => 'Tamizaje de riesgo cardiovascular',
        '14.Tamizaje cáncer cuello uterino |1' => 'Citologia',
        '15.Tamizaje de cáncer de mama |0.5' => 'Tamizaje para cancer de mama',
        '16.Tamizaje de cáncer de próstata |1' => 'Tamizaje para cancer de prostata',
        '17.Tamizaje de cáncer de colon |0.5' => 'Tamizaje para cancer de colon',
        // Planificación familiar

        '11.Planificación familiar |0.5' => 'Asesoría en anticoncepcion',
        '11.Planificación familiar |0' => 'Suministro de anticonceptivos',
        '11.Planificación familiar |0' => 'Suministro de preservativos',
        '11.Planificación familiar |0.3' => 'Prueba de embarazo',
        // ITS
        '13.Tamizaje de ITS | Prueba rapida treponemica |0.3' => 'Prueba rapida treponemica',
        '13.Tamizaje de ITS | Prueba rapida para VIH |0.3' => 'Prueba rapida para VIH',
        '13.Tamizaje de ITS | Asesoria pre y post test VIH |0.3' => 'Asesoria pre y post test VIH',
        '13.Tamizaje de ITS | Prueba rápida hepatitis B |0.3' => 'Prueba rápida hepatitis B',
        '13.Tamizaje de ITS | Prueba rápida hepatitis C |0.3' => 'Prueba rápida hepatitis C',
        // Educación
        '24.Educación para la salud | Primeros auxilios psicologicos |0.5' => 'Primeros auxilios psicologicos',
        '24.Educación para la salud | Activacion de ruta por sospecha de violencias |1' => 'Activacion de ruta por sospecha de violencias',
        '25.Tramite de autorización de servicios de salud |0.3' => 'Tramite de autorización de servicios de salud',

        '18.Atención para el cuidado preconcepcional |0.1' => 'Atención para el cuidado preconcepcional',
        '19.Atención para el cuidado prenatal – Controles prenatales |1' => 'Atención para el cuidado prenatal – Controles prenatales',
        '20.Preparación para la maternidad y paternidad |0.3' => 'Preparación para la maternidad y paternidad',
        '21.Interrupción Voluntaria del Embarazo |1' => 'Interrupción Voluntaria del Embarazo',
        '22.Atención del puerperio |1' => 'Atención del puerperio',
        '23.Atención para el seguimiento del recién nacido |1' => 'Atención para el seguimiento del recién nacido',
    ];

$optionPic = [
    '0.No |0' => '0.No aplica',
    '1.Zonas Orientación Escolar' => '1.Zonas Orientación Escolar',
    '2.Centro de Escucha' => '2.Centro de Escucha',
    '3.Curso virtual DSDR' => '3.Curso virtual Salud Sexual y repoductiva',
    '4.Curso virtual Salud Mental' => '4.Curso virtual Salud Mental',
    '5.Curso virtual Vacunación' => '5.Curso virtual Vacunación',
    '6.Veeduria PIC-APS' => '6.Veeduria PIC-APS',

];

$estadoOption = [
    '' => 'Elegir',
    'Tramite' => 'Tramite',
    'Resuelta por IPS' => 'Resuelta por IPS',
    'Resuelta por EPS' => 'Resuelta por EPS',
    'Resuelta por equipo EBS' => 'Resuelta por equipo EBS',
    'Resuelta por equipo PIC' => 'Resuelta por equipo PIC',
    'No Efectiva' => 'No efectiva',
    'No se logra Comunicación'=>'No se logra Comunicación',
    'Se birnda orientación de otros servicios'=>'Se birnda orientación de otros servicios',
    'Canalización no aplica'=>'Canalización no aplica',
    'Personas al dia con RPYM' => 'Pesonas al dia con RPYM',
    'Persona sin interes de asistir'=>'Persona sin interes de asistir'

];


?>


<div class="max-w-6xl mx-auto px-4">
    <div class="bg-slate-50 border-2 border-teal-100 rounded-xl p-6 shadow-sm">
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-search text-teal-600 text-2xl bg-white p-2 rounded-lg shadow-sm"></i>
            <div class="ml-4">
                <h2 class="text-lg font-bold text-slate-700">Verificar Usuario</h2>
                <p class="text-sm text-slate-500">Busca por documento para actualizar o registrar uno nuevo.</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-4">
            <input type="text" id="doc_search"
                class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-teal-500 outline-none"
                placeholder="Ingrese número de documento">
            <button type="button" id="btn_ejecutar_busqueda"
                class="bg-teal-600 text-white px-8 py-2 rounded-lg font-bold hover:bg-teal-700 transition">
                Consultar
            </button>
        </div>
        <div id="status_msg" class="mt-3 text-sm font-medium"></div>
    </div>
</div>

<?php
echo $this->Form->input('fecharegistro', [
    'type' => 'hidden',
    'value' => date('Y-m-d H:i:s'),
]);
?>

<div class="max-w-6xl mx-auto px-4">
    <div class="bg-white shadow-xl rounded-xl p-6 md:p-10 border border-gray-100">


        <div class="flex items-center mb-4">
            <i class="fa-solid fa-person text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Información de Identificación</h1>
                <p class="text-gray-500">Complementa la información básica de la persona.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Tipo de Documento -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">Tipo de Documento</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tipodocumento', [
                    'type' => 'select',
                    'id' => 'tipodoc_select',
                    'options' => $TipoDeDocumentoOptions,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => '',
                    'error' => false

                ]);

                if (!empty($this->Form->error('tipodocumento'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tipodocumento') . '</div>';
                }
                ?>


            </div>


            <!-- Documento -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">N° de Documento</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('numerodoc', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'numerodoc_field',
                ]);

                if (!empty($this->Form->error('numerodoc'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numerodoc') . '</div>';
                }
                ?>
            </div>

            <!-- Primer Apellido -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">Primer Apellido</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('primerapellido', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'apellido1_field',
                ]);

                if (!empty($this->Form->error('primerapellido'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('primerapellido') . '</div>';
                }
                ?>
            </div>

            <!-- Segundo Apellido -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="nombre" class="font-semibold">Segundo Apellido</label>
                </div>
                <?php
                echo $this->Form->input('segundoapellido', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'apellido2_field',

                ]);


                ?>
            </div>

            <!-- Primer Nombre -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="nombre" class="font-semibold">Primer Nombre</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('primernombre', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'nombre1_field',
                ]);

                if (!empty($this->Form->error('primernombre'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('primernombre') . '</div>';
                }
                ?>
            </div>

            <!-- Segundo Nombre -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="nombre" class="font-semibold">Segundo Nombre</label>
                </div>
                <?php
                echo $this->Form->input('segundonombre', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'nombre2_field',
                ]);


                ?>
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="resultadoEcomapa" class="font-semibold">Fecha de nacimiento</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex items-center mb-4">
                        <input type="text" name="data[Persona][fechanac]" id="fechaNac_field" ,
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full" ""
                            placeholder="AAAA-MM-DD" autocomplete="off" />

                        <?php if (!empty($this->Form->error('fechanac'))) {
                            echo '<div class="text-red-600 text-md mt-1 font-semibold">' .
                                $this->Form->error('fechanac') . '</div>';
                        }
                        ?>
                    </div>

                </div>
            </div>

            <!-- Edad -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7.1</span>
                    <label for="edad" class="font-semibold">Edad en años</label>
                </div>
                <?php
                echo $this->Form->input('edad', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'edad_field',
                ]);


                ?>
            </div>
            <!-- Sexo -->

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="sexo" class="font-semibold">Sexo</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('sexo', [
                    'type' => 'select',
                    'id' => 'sexo_field',
                    'options' => $sexoOptions,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => '',
                    'error' => false // No mostrar error aquí
                ]);


                if (!empty($this->Form->error('sexo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('sexo') . '</div>';
                }
                ?>
            </div>


            <!-- Grupo Poblacional -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
                    <label for="nombre" class="font-semibold">Grupo Poblacional</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('grupopoblacional', [
                    'type' => 'select',
                    'id' => 'grupopoblacional_field',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $grupoPoblacional,
                    'label' => '',
                    'empty' => 'Selecciona el grupo poblacional',
                ]);

                if (!empty($this->Form->error('grupopoblacional'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('grupopoblacional') . '</div>';
                }
                ?>
            </div>

            <!-- Aseguradora -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">10</span>
                    <label for="aseguradora" class="font-semibold">Aseguradora</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('aseguradora', [
                    'type' => 'select',
                    //'id' => 'producto_id',
                    'options' => $aseguradoraOption,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => '',
                    'value' => 'Juventudultos{
                    }',
                    'empty' => 'Seleccione el aseguradora',
                    'error' => false, // No mostrar error aquí
                    'id' => 'aseguradora_field'
                ]);


                if (!empty($this->Form->error('aseguradora'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('aseguradora') . '</div>';
                }
                ?>
            </div>


            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">11</span>
                    <label for="familiograma" class="font-semibold">Institución referida</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('canalizacion_id', [
                    'type' => 'select',
                    'class' => 'w-full',
                    'label' => '',
                    //'empty' => 'Seleccione el IPS',
                    'error' => false, // No mostrar error aquí
                    'id' => 'canalizacion_id',
                ]);


                if (!empty($this->Form->error('canalizacion_id'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('canalizacion_id') . '</div>';
                }
                ?>
            </div>

            <!-- Barrio / Vereda -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6 sm:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">12</span>
                    <label for="objactividad" class="font-semibold">Barrio / Vereda</label>
                </div>
                <?php
                echo $this->Form->input('barriovereda', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'barriovereda_field'
                ]);

                if (!empty($this->Form->error('barriovereda'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('barriovereda') . '</div>';
                }
                ?>
            </div>

            <!-- direccion -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">13</span>
                <label for="direccion" class="font-semibold">Nomenclatura de la Dirección</label>
                <p class="text-red-600">*</p>

                <?php
                echo $this->Form->input('direccion', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'direccion_field'
                ]);

                if (!empty($this->Form->error('direccion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('direccion') . '</div>';
                }
                ?>
                <p class="text-gray-400 text-xs mt-2">Colocar la nomenclatura de un recibo de servicio publico del
                    domicilio
                </p>
            </div>
            <!-- Telefono -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">14</span>
                    <label for="telefono" class="font-semibold">Número de contacto</label>
                </div>
                <?php
                echo $this->Form->input('telefono', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'telefono',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 mt-2 font-semibold text-gray-700 text-sm focus:text-gray-900',
                    'error' => false,
                    'maxlength' => 10,               // menos de 11 => máximo 10 dígitos
                    'pattern' => '[0-9]{1,10}',      // sólo números, 1 a 10 dígitos
                    'inputmode' => 'numeric',
                    'title' => 'Solo números, máximo 10 dígitos',
                    'id' => 'telefono_field',
                    // limpia cualquier carácter no numérico y limita a 10 dígitos; muestra/oculta mensaje de error
                    'oninput' => "this.value = this.value.replace(/\\D/g,'').slice(0,10); document.getElementById('telefonoError').style.display = (/^[0-9]{1,10}$/.test(this.value) || this.value.length===0) ? 'none' : 'block';"
                ]);

                if (!empty($this->Form->error('telefono'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('telefono') . '</div>';
                }
                ?>
                <div id="telefonoError" class="text-red-600 text-md mt-1 font-semibold" style="display:none;">
                    Ingrese solo números (máximo 10 dígitos).
                </div>
            </div>

            <!-- Email -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">15</span>
                    <label for="nombre" class="font-semibold">Email</label>
                </div>
                <?php
                echo $this->Form->input('email', [
                    'type' => 'text',
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'email_field'
                ]);


                ?>
            </div>

            <!-- Nombre acudiente -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">16</span>
                    <label for="nombre" class="font-semibold">Nombre de acudiente</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('nombreAcudiente', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'id' => 'nombreAcudiente_field'
                ]);


                ?>
            </div>

            <!-- Telefono -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">17</span>
                    <label for="telefonoAcudiente" class="font-semibold">Telefono Acudiente</label>
                </div>
                <?php
                echo $this->Form->input('telefonoAcudiente', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'telefonoAcudiente',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 mt-2 font-semibold text-gray-700 text-sm focus:text-gray-900',
                    'error' => false,
                    'maxlength' => 10,               // menos de 11 => máximo 10 dígitos
                    'pattern' => '[0-9]{1,10}',      // sólo números, 1 a 10 dígitos
                    'inputmode' => 'numeric',
                    'title' => 'Solo números, máximo 10 dígitos',
                    'id' => 'telefonoAcudiente_field',
                    // limpia cualquier carácter no numérico y limita a 10 dígitos; muestra/oculta mensaje de error
                    'oninput' => "this.value = this.value.replace(/\\D/g,'').slice(0,10); document.getElementById('telefonoError').style.display = (/^[0-9]{1,10}$/.test(this.value) || this.value.length===0) ? 'none' : 'block';"
                ]);


                ?>
                <div id="telefonoError" class="text-red-600 text-md mt-1 font-semibold" style="display:none;">
                    Ingrese solo números (máximo 10 dígitos).
                </div>
            </div>
        </div>
    </div>
</div>


<div class="max-w-6xl mx-auto px-4 space-y-6">

    <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-teal-500">
        <h2 class="text-lg font-bold text-teal-800 mb-4">Servicios de Salud</h2>

        <div class="relative inline-block w-full">
            <button type="button" id="ayudaButtonTIPO"
                class="mt-4 bg-blue-100 text-blue-700 hover:bg-blue-200 rounded-full w-10 h-10 flex items-center justify-center"
                aria-label="Ayuda" aria-expanded="false">
                ?
            </button>
            <div id="helpContentTIPO"
                class="absolute left-0 top-16 mb-2 w-80 bg-blue-50 border border-blue-200 rounded-lg z-50 hidden shadow-lg p-4"
                role="dialog" aria-hidden="true">
                <p>
                    <!-- Aquí tu contenido de ayuda -->
                    <strong>Urgencia:</strong> atención prioritaria
                    en urgencias.<br>
                    <strong>Deteccion temprana:</strong> atención
                    por consulta médica general para identificar
                    de forma oportuna y efectiva la enfermedad
                    para su tratamiento. <br>
                    <strong>Rutas integrales de atención en salud:</strong> atenciones
                    coordinadas, complementarias y efectivas
                    para determinar el estado de salud de las
                    personas con el fin de definir las
                    intervenciones de salud que se requieran,
                    según el curso de vida. <br>

                </p>
            </div>
        </div>

        <!-- canalización  -->
        <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
            <div class="flex items-center mb-4">



                <label for="canalizacionuno" class="font-semibold">Canalización realizada por EBS</label>


            </div>
            <?php
            echo $this->Form->input('canalizacionuno', [
                'type' => 'select',
                'disabled' => true,
                'multiple' => true,
                'options' => $optionCanalizacion,
                'id' => 'canalizacionuno_select',
                'label' => false,
                'class' => 'bg-gray-100 cursor-not-allowed',


            ]);
            if (!empty($this->Form->error('canalizacionuno'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('canalizacionuno') . '</div>';
            }
            ?>
        </div>


        <div class="mt-4">
            <div class="flex items-center mb-4">

                <label for="canalizacionuno" class="font-semibold">Registre la canalización a Urgencias</label>


            </div>

            <?php echo $this->Form->input('urgencia', ['label' => false, 'class' => 'ckeditor']); ?>
        </div>
        <div class="mt-4">
            <div class="flex items-center mb-4">

                <label for="canalizacionuno" class="font-semibold">Registre la canalizacion a Detección Temprana</label>


            </div>

            <?php echo $this->Form->input('detecciontemprana', ['label' => false, 'class' => 'ckeditor']); ?>
        </div>

        <div class="mt-4">
            <div class="flex items-center mb-4">

                <label for="canalizacionuno" class="font-semibold">Seleccione la canalización a Rutas Integrales de
                    Atención -
                    RIAS</label>


            </div>


            <?php echo $this->Form->input('rias', [
                'type' => 'select',
                'multiple' => true,
                'options' => $optionCanalizacion,
                'id' => 'rias_select',
                'label' => false,


            ]);
            ?>
        </div>
    </div>

    <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-blue-500">
        <h3 class="text-lg font-bold text-blue-800 mb-4">Registre la canalización a Servicios Sociales</h3>
        <?php echo $this->Form->input('serviciosocial', ['label' => false, 'class' => 'ckeditor']); ?>
    </div>

    <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-orange-500">
        <h3 class="text-lg font-bold text-orange-800 mb-4">Acciones plan de intervenciones colectivas</h3>
        <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
            <div class="flex items-center mb-4">


                <label for="estado" class="font-semibold">Registre la canalización a oferta PIC</label>
                <p class="text-red-600">*</p>
            </div>

            <?php echo $this->Form->input('ofertapic', [
                'type' => 'select',
                'multiple' => true,
                'options' => $optionPic,
                'id' => 'pic_select',
                'label' => false,
                'empty' => false
            ]);

            if (!empty($this->Form->error('ofertapic'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('ofertapic') . '</div>';
            }
            ?>
        </div>

        <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
            <div class="flex items-center mb-4">

                <label for="estado" class="font-semibold">Observación de la oferta PIC</label>
                <p class="text-red-600">*</p>
            </div>


            <?php echo $this->Form->input('observacionpic', ['label' => false, 'class' => 'ckeditor']); ?>
        </div>

    </div>



    <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-orange-500">
        <h3 class="text-lg font-bold text-orange-800 mb-4">Gestión de canalización</h3>

        <!-- estado -->
        <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
            <div class="flex items-center mb-4">

                <label for="estado" class="font-semibold">Estado canalizacion</label>
                <p class="text-red-600">*</p>
            </div>

            <?php
            echo $this->Form->input('estado', [
                'type' => 'select',
                'id' => 'estado_field',
                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                'error' => false, // No mostrar error aquí
                'options' => $estadoOption,
                'label' => '',
                'empty' => 'Seleccione el estado de la canalización',

            ]);


            if (!empty($this->Form->error('estado'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estado') . '</div>';
            }
            ?>
        </div>

        <div class="mb-4">

            <div class="flex items-center mb-4">

                <label for="estado" class="font-semibold">Estado de Registro en APS:</label>
                <p class="text-red-600">*</p>
            </div>
            <?php
            echo $this->Form->input('caracterizacionaps', [
                'type' => 'text',
                'id' => 'caracterizacionaps_info',
                'readonly' => 'readonly',
                'label' => false,
                'class' => 'bg-gray-50 border border-gray-200 rounded p-2 w-full text-gray-500 font-mono',
                'placeholder' => 'Pendiente...'
            ]);
            ?>
        </div>

        <div class="mb-4">

            <div class="flex items-center mb-4">

                <label for="responsablecanalizacion" class="font-semibold">Número de documento responsable:</label>
                <p class="text-red-600">*</p>
            </div>
            <?php
            echo $this->Form->input('responsablecanalizacion', [
                'label' => false,
                'uppercase' => true,
                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                'error' => false,
                'id' => 'responsablecanalizacion_field',
            ]);

            if (!empty($this->Form->error('responsablecanalizacion'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('responsablecanalizacion') . '</div>';
            }
            ?>


        </div>
        <div class="mb-4">

            <div class="flex items-center mb-4">

                <label for="nombreResponsable" class="font-semibold">Nombre responsable:</label>
                <p class="text-red-600">*</p>
            </div>
            <?php
            echo $this->Form->input('nombreResponsable', [
                'label' => false,
                'uppercase' => true,
                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                'error' => false,
                'id' => 'nombreResponsable_field',
            ]);

            if (!empty($this->Form->error('nombreResponsable'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('nombreResponsable') . '</div>';
            }
            ?>


        </div>
        <div class="mb-4">

            <div class="flex items-center mb-4">

                <label for="contactoCelular" class="font-semibold">Numero contacto reponsable:</label>
                <p class="text-red-600">*</p>
            </div>
            <?php
            echo $this->Form->input('contactoCelular', [
                'label' => false,
                'uppercase' => true,
                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                'error' => false,
                'id' => 'contactoCelular_field',
            ]);

            if (!empty($this->Form->error('contactoCelular'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('contactoCelular') . '</div>';
            }
            ?>


        </div>




        <?php
        echo $this->Form->hidden('juventudadulto_id', [
            'type' => 'text',
            'id' => 'juventudadulto_id_field',
            'readonly' => 'readonly',
            'label' => false,
            'class' => 'bg-gray-50 border border-gray-200 rounded p-2 w-full text-gray-500 font-mono',
            'placeholder' => 'Pendiente...'
        ]);
        ?>


        <?php
        echo $this->Form->hidden('familia_id', [
            'type' => 'text',
            'id' => 'familia_id_field',
            'label' => false,
            'class' => 'bg-gray-50 border border-gray-200 rounded p-2 w-full text-gray-500 font-mono',
        ]);
        ?>

        <?php
        echo $this->Form->hidden('sociambiental_id', [
            'type' => 'text',
            'id' => 'sociambiental_id_field',
            'label' => false,
            'class' => 'bg-gray-50 border border-gray-200 rounded p-2 w-full text-gray-500 font-mono',

        ]);
        ?>





    </div>




    <div class="py-10">
        <button type="submit"
            class="w-full bg-teal-600 text-white py-4 rounded-xl font-bold text-xl hover:bg-teal-700 shadow-lg flex justify-center items-center gap-3 transition-all">
            <i class="fa-solid fa-save"></i> GUARDAR REGISTRO
        </button>
    </div>
</div>

<?php echo $this->Form->end(); ?>

<script>
$(document).ready(function() {


    // 3. Modal de Consentimiento
    $('#aceptoBtn').click(function() {
        $('#consentModal').fadeOut();
        localStorage.setItem('consentAccepted', 'true');
    });


    function calcularEdad(fechaNac) {

        var hoy = new Date();
        var cumple = new Date(fechaNac);
        console.log(cumple);
        var edad = hoy.getFullYear() - cumple.getFullYear();
        var m = hoy.getMonth() - cumple.getMonth();

        if (m < 0 || (m === 0 && hoy.getDate() < cumple.getDate())) {
            edad--;
        }

        return edad;
    }
    // 1. Lógica de Búsqueda AJAX
    $('#btn_ejecutar_busqueda').click(function() {
        const doc = $('#doc_search').val().trim();
        const msg = $('#status_msg');

        if (doc === "") {
            alert("Por favor ingrese un documento.");
            return;
        }

        $.ajax({
            url: '<?php echo $this->Html->url(['controller' => 'personas', 'action' => 'buscarPorDoc']); ?>/' +
                doc,
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                msg.html(
                    '<span class="text-gray-500 animate-pulse">Buscando en la base de datos...</span>'
                );
            },
            success: function(res) {
                if (res.success) {
                    const p = res.data.Persona;
                    const j = res.data.Juventudadulto || {};
                    const s = res.data.Sociambiental || {};
                    const f = res.data.Familia || {};
                    // SI EXISTE: Cargamos ID para UPDATE y llenamos campos
                    console.log(res
                        .data); // Verifica la estructura de los datos en la consola
                    msg.html(
                        '<span class="text-green-600 font-bold">✓ Usuario encontrado. Se actualizará el registro existente.</span>'
                    );
                    // --- PROCESAR RIAS ---
                    const picValues = p.ofertapic ?
                        (Array.isArray(p.ofertapic) ? p.ofertapic : p.ofertapic.split(
                                ',')
                            .map(v => v.trim())) : [];

                    if (picValues.length) {
                        choicesPic.setChoiceByValue(picValues);
                    }

                    const riaValues = p.rias ?
                        (Array.isArray(p.rias) ? p.rias : p.rias.split(',')
                            .map(v => v.trim())) : [];

                    if (riaValues.length) {
                        choicesRias.setChoiceByValue(riaValues);
                    }
                    const canalizacionvalues = p.canalizacionuno ?
                        (Array.isArray(p.canalizacionuno) ? p.canalizacionuno : p
                            .canalizacionuno
                            .split(',')
                            .map(v => v.trim())) : [];

                    if (canalizacionvalues.length) {
                        choicesCanalizacionuno.setChoiceByValue(canalizacionvalues);
                    }

                    if (j.canalizacion_id || p
                        .canalizacion_id) {
                        choices_canalizacion_id.setChoiceByValue(String(j
                            .canalizacion_id ||
                            p
                            .canalizacion_id));
                    }

                    // 2. Limpiar los valores de los selects originales
                    //$('#rias_select').val([]);
                    //$('#pic_select').val(p.ofertapic);
                    $('#juventudadulto_id_field').val(j.id);
                    $('#familia_id_field').val(f.id);

                    $('#grupopoblacional_field').val(j.grupopoblacional || p
                        .grupopoblacional);
                    $('#aseguradora_field').val(j.aseguradora || p.aseguradora);
                    $('#telefono_field').val(j.telefono || p.telefono);
                    //$('#canalizacion_id').val(j.canalizacion_id || p.canalizacion_id);
                    //$('#fechaNac_field').val(j.fechanac || p.fechanac);
                    $('#sexo_field').val(j.sexo || p.sexo);
                    $('#email_field').val(j.email || p.email);


                    $('#barriovereda_field').val(s.barriovereda || p
                        .barriovereda);
                    $('#direccion_field').val(s.direccion || p
                        .direccion);
                    $('#nombreAcudiente_field').val(f.nombres || p
                        .nombreAcudiente);
                    $('#telefonoAcudiente_field').val(f
                        .celular || p.telefonoAcudiente);
                    $(
                        '#sociambiental_id_field').val(f.sociambiental_id);
                    $(
                        '#persona_id_field').val(p.id);
                    $('#numerodoc_field').val(p
                        .numerodoc).attr(
                        'readonly',
                        true);
                    $('#tipodoc_select').val(p.tipodocumento);
                    $(
                        '#apellido1_field').val(p.primerapellido);
                    $(
                        '#apellido2_field').val(p.segundoapellido);
                    $(
                        '#nombre1_field').val(p.primernombre);
                    $(
                        '#nombre2_field').val(p.segundonombre);
                    $(
                        '#edad_field').val(p.edad);
                    $(
                        '#responsablecanalizacion_field').val(p.responsablecanalizacion);
                    $(
                        '#nombreResponsable_field').val(p.nombreResponsable);
                    $(
                        '#contactoCelular_field').val(p.contactoCelular);
                    $(
                        '#estado_field').val(p.estado);


                    if (p.fechanac) {
                        // 1. Asigna el valor al input
                        $('#fechaNac_field').val(p.fechanac);
                        var partes = p.fechanac.split("-");

                        var edad = calcularEdad(new Date(partes[0], partes[1] - 1,
                            partes[
                                2]));
                        $('#edad_field').val(edad);
                        // 2. Actualiza la instancia del calendario
                        var drp = $('#fechaNac_field').data('daterangepicker');
                        if (drp) {
                            drp.setStartDate(p.fechanac);

                        }

                    }
                    $(
                        '#canalizacionuno_field').val(p.canalizacionuno);

                    if (p.urgencia) {
                        // 1. Intentamos asignar directamente si la instancia ya existe
                        if (window.CKEDITOR && CKEDITOR.instances[
                                'PersonaUrgencia']) {
                            CKEDITOR.instances['PersonaUrgencia'].setData(p
                                .urgencia);
                        } else {
                            // 2. Si aún no está lista, esperamos al evento 'instanceReady'
                            CKEDITOR.on('instanceReady', function(evt) {
                                if (evt.editor.name === 'PersonaUrgencia') {
                                    evt.editor.setData(p.urgencia);
                                }
                            });

                            // 3. Fallback por si acaso (el textarea original)
                            $('#Urgencia_field').val(p.urgencia);
                        }
                    }

                    if (p.detecciontemprana) {
                        // 1. Intentamos asignar directamente si la instancia ya existe
                        if (window.CKEDITOR && CKEDITOR.instances[
                                'PersonaDetecciontemprana']) {
                            CKEDITOR.instances['PersonaDetecciontemprana'].setData(p
                                .detecciontemprana);
                        } else {
                            // 2. Si aún no está lista, esperamos al evento 'instanceReady'
                            CKEDITOR.on('instanceReady', function(evt) {
                                if (evt.editor.name ===
                                    'PersonaDetecciontemprana') {
                                    evt.editor.setData(p.detecciontemprana);
                                }
                            });

                            // 3. Fallback por si acaso (el textarea original)
                            $('#urgencia_field').val(p.urgencia);
                        }
                    }
                    if (p.serviciosocial) {
                        // 1. Intentamos asignar directamente si la instancia ya existe
                        if (window.CKEDITOR && CKEDITOR.instances[
                                'PersonaServiciosocial']) {
                            CKEDITOR.instances['PersonaServiciosocial'].setData(p
                                .serviciosocial);
                        } else {
                            // 2. Si aún no está lista, esperamos al evento 'instanceReady'
                            CKEDITOR.on('instanceReady', function(evt) {
                                if (evt.editor.name ===
                                    'PersonaServiciosocial') {
                                    evt.editor.setData(p.serviciosocial);
                                }
                            });

                            // 3. Fallback por si acaso (el textarea original)
                            $('#serviciosocial_field').val(p.urgencia);
                        }
                    }
                    if (p.observacionpic) {
                        // 1. Intentamos asignar directamente si la instancia ya existe
                        if (window.CKEDITOR && CKEDITOR.instances[
                                'PersonaObservacionpic']) {
                            CKEDITOR.instances['PersonaObservacionpic'].setData(p
                                .observacionpic);
                        } else {
                            // 2. Si aún no está lista, esperamos al evento 'instanceReady'
                            CKEDITOR.on('instanceReady', function(evt) {
                                if (evt.editor.name ===
                                    'PersonaObservacionpic') {
                                    evt.editor.setData(p.observacionpic);
                                }
                            });

                            // 3. Fallback por si acaso (el textarea original)
                            $('#observacionpic_field').val(p.observacionpic);
                        }
                    }
                    $('#caracterizacionaps_info').val(p.caracterizacionaps ? p
                        .caracterizacionaps :
                        'Persona Caracterizada por EBS id_familia:' + p
                        .familia_id);
                    $('#caracterizacionaps_info').attr('readonly',
                        true);
                    // --- Lógica para RIAS ---
                    if (p.rias) {
                        choices_rias.setChoiceByValue(p
                            .rias); // p.rias ya es un Array
                    }

                    if (p.ofertapic) {
                        choices_rias.setChoiceByValue(p
                            .ofertapic); // p.rias ya es un Array
                    }
                    if (p.canalizacionuno) {
                        choices_rias.setChoiceByValue(p
                            .canalizacionuno); // p.rias ya es un Array
                    }





                    // Aquí puedes llenar más campos si la respuesta los incluye
                } else {
                    // NO EXISTE: Limpiamos ID para INSERT y habilitamos edición
                    msg.html(
                        '<span class="text-blue-600 font-bold">ℹ Usuario no está en la tabla personas, por favor ingresar la información manualmente.</span>'
                    );

                    $('#persona_id_field').val('');
                    $('#numerodoc_field').val(doc).removeAttr('readonly');
                    $('#juventudadulto_id_fiel').val('');
                    $('#tipodoc_select').val('');
                    $('#apellido1_field').val('').focus();
                    $('#apellido2_field').val('');
                    $('#nombre1_field').val('');
                    $('#nombre2_field').val('');
                    $('#fechaNac_field').val('');
                    $('#sexo_field').val('');
                    $('#grupopoblacional_field').val('');
                    $('#aseguradora_field').val('');
                    $('#canalizacion_field').val('');
                    $('#barriovereda_field').val('');
                    $('#direccion_field').val('');
                    $('#telefono_field').val('');
                    $('#email_field').val('');
                    $('#familia_id_field').val('');
                    $('#sociambiental_id_field').val('');
                    $('#nombreAcudiente_field').val('');
                    $('#telefonoAcudiente_field').val('');
                    $('#canalizacionuno_field').val('');
                    $('#nombreResponsable_field').val('');
                    $('#responsablecanalizacion_field').val('');
                    $('#contactoCelular_field').val('');
                    $('#estado_field').val('');



                    // Limpieza de CKEditors
                    if (window.CKEDITOR) {
                        ['PersonaUrgencia', 'PersonaDetecciontemprana',
                            'PersonaServiciosocial', 'PersonaObservacionpic'
                        ].forEach(id => {
                            if (CKEDITOR.instances[id]) CKEDITOR.instances[id]
                                .setData('');
                        });
                    }
                    $('#caracterizacionaps_info').val('Pendiente por Caracterizar');;

                }
            },
            error: function() {
                msg.html(
                    '<span class="text-red-600">Error al conectar con el servidor.</span>'
                );
            }
        });
    });



    $(function() {
        nacimiento = null; // Aquí guardamos la fecha elegida

        $('#fechaNac_field').daterangepicker({
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
            nacimiento = start.toDate();
            evaluarCampos();
        });

        $('#fechaNac_field').val('');

        function evaluarCampos() {
            var fechaNac = $('#fechaNac_field').val();
            if (fechaNac) {

                var edad = calcularEdad(fechaNac);


                // Mostrar edad inmediatamente en el input
                $('#edad_field').val(edad);
            }
        }

        // Si hay valor en el campo fecha, inicializar nacimiento y ejecutar evaluarCampo

        var fechaInput = document.getElementById('fecha');
        if (fechaInput && fechaInput.value) {
            nacimiento = new Date(fechaInput.value);
        }
    });





    const options = {
        searchEnabled: true,
        searchChoices: true,
        removeItemButton: false,
        itemSelectText: '',
        shouldSort: false,
        renderChoiceLimit: -1, // Sin límite de renderizado
        searchResultLimit: 20, // Puedes aumentar este valor si tienes muchos resultados
        searchPlaceholderValue: "Escriba para filtrar...",
    };

    // 2. Inicialización de Choices.js para los select múltiples
    const choicesOptions = {
        removeItemButton: true,
        searchPlaceholderValue: "Escriba para filtrar...",
        itemSelectText: ''
    };
    const choicesRias = new Choices("#rias_select", choicesOptions);
    const choicesPic = new Choices("#pic_select", choicesOptions);
    const choicesCanalizacionuno = new Choices("#canalizacionuno_select", choicesOptions);



    const choices_canalizacion_id = new Choices("#canalizacion_id", {
        searchEnabled: true,
        searchChoices: true,
        removeItemButton: true, // Permite eliminar seleccionados
        itemSelectText: '',
        shouldSort: false,
        searchPlaceholderValue: "Escriba para filtrar...",
        maxItemCount: -1, // Sin límite
        removeItems: true, // Permite quitar seleccionados
        duplicateItemsAllowed: false,
        placeholder: true,
        placeholderValue: "Seleccione IPS...",
    });



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



    // 3. Modal de Consentimiento
    $('#aceptoBtn').click(function() {
        $('#consentModal').fadeOut();
        localStorage.setItem('consentAccepted', 'true');
    });

    CKEDITOR.on('instanceReady', function(ev) {
        var editor = ev.editor;
        var textarea = editor.element.$;
        var maxChars = textarea.getAttribute("data-maxlength"); // Lee el límite de cada campo
        maxChars = maxChars ? parseInt(maxChars) : 1000; // Default 300 si no se define

        // Crear un contador debajo del campo
        var counter = document.createElement("div");
        counter.className = "text-gray-600 mt-1 text-sm";
        counter.id = "charCount_" + textarea.id;
        textarea.parentNode.appendChild(counter);

        function updateCount() {
            var text = editor.getData().replace(/<[^>]*>/g, '');
            var length = text.length;
            var remaining = maxChars - length;

            counter.innerHTML = "Caracteres usados: " + length + " / " + maxChars;

            if (remaining < 0) {
                counter.style.color = "red";
                editor.setData(text.substring(0, maxChars));
            } else {
                counter.style.color = "gray";
            }
        }

        // Bloquear si excede
        editor.on('key', function(evt) {
            var text = editor.getData().replace(/<[^>]*>/g, '');
            if (text.length >= maxChars && evt.data.keyCode != 8 && evt.data.keyCode !=
                46) {
                evt.cancel();
                alert("Máximo permitido: " + maxChars + " caracteres.");
            }
        });

        // Bloquear pegar excedido
        editor.on('paste', function(evt) {
            var text = evt.data.dataValue.replace(/<[^>]*>/g, '');
            if (text.length > maxChars) {
                evt.cancel();
                alert("No puedes pegar más de " + maxChars + " caracteres.");
            }
        });

        editor.on('key', updateCount);
        editor.on('paste', updateCount);
        editor.on('change', updateCount);

        updateCount(); // inicializar contador
    });

    // Detectar si el usuario intenta retroceder con la flecha del navegador
    window.addEventListener('popstate', function(event) {
        if (confirm(
                '¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.'
            )) {
            window.location.href = 'index'; // Redirigir a la página deseada
        } else {
            history.pushState(null, null, location.href); // Mantener en la página actual
        }
    });


    // Prevenir retroceso con la flecha del navegador (mejor experiencia)
    history.pushState(null, null, location.href);



});
</script>