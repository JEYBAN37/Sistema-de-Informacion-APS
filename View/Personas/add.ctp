<?php $this->layout = 'default_familia' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>


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
    'class' => 'space-y-6', 'id' => 'formPersona']); 
    // se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['responsable_id']) ? $_SESSION['Auth']['User']['responsable_id'] : '';
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));
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
		'25.Ninguno |0' => 'Ninguno',
		'25.Tramite de autorización de servicios de salud |0.3' => 'Tramite de autorización de servicios de salud',

		'18.Atención para el cuidado preconcepcional |0.1' => 'Atención para el cuidado preconcepcional',
		'19.Atención para el cuidado prenatal – Controles prenatales |1' => 'Atención para el cuidado prenatal – Controles prenatales',
		'20.Preparación para la maternidad y paternidad |0.3' => 'Preparación para la maternidad y paternidad',
		'21.Interrupción Voluntaria del Embarazo |1' => 'Interrupción Voluntaria del Embarazo',
		'22.Atención del puerperio |1' => 'Atención del puerperio',
		'23.Atención para el seguimiento del recién nacido |1' => 'Atención para el seguimiento del recién nacido',
	];

    $optionPic = [
    '0.No |0' => '0.No se requiere canalización',
	'1.Zonas Orientación Escolar' => '1.Zonas Orientación Escolar',
	'2.Centro de Escucha' => '2.Centro de Escucha',
	'3.Curso virtual DSDR' => '3.Curso virtual Salud Sexual y repoductiva',
    '4.Curso virtual Salud Mental' => '4.Curso virtual Salud Mental',
    '5.Curso virtual Vacunación' => '5.Curso virtual Vacunación',
    '6.Veeduria PIC-APS' => '6.Veeduria PIC-APS',
		
];

    
    ?>
<?php
echo $this->Form->input('fechaRegistro', [
	'type' => 'hidden',
	'value' => date('Y-m-d')
]);
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

<div class="max-w-6xl mx-auto px-4">
    <div class="bg-white shadow-xl rounded-xl p-6 md:p-10 border border-gray-100">
        <div class="flex items-center mb-6">
            <i class="fa-solid fa-person text-teal-600 text-2xl bg-teal-50 p-3 rounded-lg"></i>
            <h2 class="text-lg font-bold text-slate-700">Información de Identificación</h2>
            <p class="text-sm text-slate-500">Complementa la información básica de la persona.</p>
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

				if (!empty($this->Form->error('segundoapellido'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('segundoapellido') . '</div>';
				}
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

				if (!empty($this->Form->error('segundonombre'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('segundonombre') . '</div>';
				}
				?>
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="col-span-2 md:col-span-2 text-md font-semibold my-4 mb-6 md:mr-4">
                <div class="flex items-center">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="resultadoEcomapa" class="font-semibold">Fecha de nacimiento</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <input type="text" name="data[Persona][fechanac]" id="fechaNac_field" ,
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full" ""
                            placeholder="Selecciona rango de fecha" />
                        <span class="text-sm text-red-600 ">
                            <?= $this->Form->error('fechanac') ?>
                        </span>
                    </div>

                </div>
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


				if (!empty($this->Form->error('aseguradora'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('aseguradora') . '</div>';
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

				if (!empty($this->Form->error('email'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('email') . '</div>';
				}
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

				if (!empty($this->Form->error('nombreAcudiente'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('nombreAcudiente') . '</div>';
				}
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

				if (!empty($this->Form->error('telefonoAcudiente'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('telefonoAcudiente') . '</div>';
				}
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
        <div class="mt-4">
            <label class="font-semibold">Registre la canalización a Urgencias</label>
            <?php echo $this->Form->input('urgencia', ['label' => false, 'class' => 'ckeditor']); ?>
        </div>
        <div class="mt-4">
            <label class="font-semibold">Registre la canalizacion a Detección Temprana</label>
            <?php echo $this->Form->input('detecciontemprana', ['label' => false, 'class' => 'ckeditor']); ?>
        </div>
        <div class="mt-4">
            <label class="font-semibold">Seleccione la canalización a Rutas Integrales de Atención -
                RIAS</label>
            <?php echo $this->Form->input('rias', ['type' => 'select', 'multiple' => true, 'options' => $optionCanalizacion, 'id' => 'rias_select', 'label' => false]); ?>
        </div>
    </div>

    <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-blue-500">
        <h3 class="text-lg font-bold text-blue-800 mb-4">Registre la canalización a Servicios Sociales</h3>
        <?php echo $this->Form->input('serviciosocial', ['label' => false, 'class' => 'ckeditor']); ?>
    </div>

    <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-orange-500">
        <h3 class="text-lg font-bold text-orange-800 mb-4">Canalización a Oferta PIC</h3>
        <?php echo $this->Form->input('ofertapic', ['type' => 'select',
         'multiple' => true,
          'options' => $optionPic, 
          'id' => 'pic_select',
           'label' => false]); 
           ?>

        <div class="mt-4">

            <label class="font-semibold">Observación de la oferta PIC</label>
            <?php echo $this->Form->input('observacionpic', ['label' => false, 'class' => 'ckeditor']); ?>
        </div>
        <!-- Canalizacion APS -->
        <div
            class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
            <div class="flex items-center mb-4">
                <label for="canalizacionaps" class="font-semibold">Realizar caracterización APS</label>
            </div>

            <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                <!-- Botón NO -->
                <div>
                    <input type="radio" name="data[Persona][caracterizacionaps]" id="canalizacionaps-no" value="0"
                        class="hidden peer" data-target="canalizacionaps" data-show="false" checked />
                    <!-- 👈 Por defecto NO -->
                    <label for="canalizacionaps-no" class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                        NO
                    </label>
                </div>

                <!-- Botón SÍ -->
                <div>
                    <input type="radio" name="data[Persona][caracterizacionaps]" id="canalizacionaps-si" value="1"
                        data-target="canalizacionaps" data-show="true" class="hidden peer cursor-pointer" />
                    <label for="canalizacionaps-si" class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                        SI
                    </label>
                </div>
            </div>
        </div>
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
                    // SI EXISTE: Cargamos ID para UPDATE y llenamos campos
                    console.log(res
                        .data); // Verifica la estructura de los datos en la consola
                    msg.html(
                        '<span class="text-green-600 font-bold">✓ Usuario encontrado. Se actualizará el registro existente.</span>'
                    );
                    $('#persona_id_field').val(res.data.id);
                    $('#numerodoc_field').val(res.data.Persona.numerodoc).attr(
                        'readonly',
                        true);
                    $('#tipodoc_select').val(res.data.Persona.tipodocumento);
                    $('#apellido1_field').val(res.data.Persona.primerapellido);
                    $('#apellido2_field').val(res.data.Persona.segundoapellido);
                    $('#nombre1_field').val(res.data.Persona.primernombre);
                    $('#nombre2_field').val(res.data.Persona.segundonombre);
                    $('#fechaNac_field').val(res.data.Persona.fechanac);
                    $('#sexo_field').val(res.data.Persona.sexo);
                    $('#grupopoblacional_field').val(res.data.Juventudadulto
                        .grupopoblacional);
                    $('#aseguradora_field').val(res.data.Juventudadulto
                        .aseguradora);
                    $('#canalizacion_id').val(res.data.Juventudadulto
                        .canalizacion_id);
                    $('#barriovereda_field').val(res.data.Sociambiental
                        .barriovereda);
                    $('#direccion_field').val(res.data.Sociambiental.direccion);
                    $('#telefono_field').val(res.data.Juventudadulto.telefono);
                    $('#email_field').val(res.data.Juventudadulto.email);
                    $('#nombreAcudiente_field').val(res.data.Familia.nombres);
                    $('#telefonoAcudiente_field').val(res.data.Familia.celular);


                    // Aquí puedes llenar más campos si la respuesta los incluye
                } else {
                    // NO EXISTE: Limpiamos ID para INSERT y habilitamos edición
                    msg.html(
                        '<span class="text-blue-600 font-bold">ℹ Usuario no está en la tabla personas, por favor ingresar la información manualmente.</span>'
                    );
                    $('#persona_id_field').val('');
                    $('#numerodoc_field').val(doc).removeAttr('readonly');
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
                    $('#nombreAcudiente_field').val('');
                    $('#telefonoAcudiente').val('');

                }
            },
            error: function() {
                msg.html(
                    '<span class="text-red-600">Error al conectar con el servidor.</span>'
                );
            }
        });
    });


    // Busca todos los radios con data-target
    document.querySelectorAll('input[type="radio"][data-target]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var targetId = radio.getAttribute('data-target');
            var show = radio.getAttribute('data-show') === 'true';
            var target = document.getElementById(targetId);
            if (target) {
                target.style.display = show ? 'block' : 'none';
            }
        });
        // Mostrar/ocultar al cargar la página según el radio seleccionado
        if (radio.checked) {
            var targetId = radio.getAttribute('data-target');
            var show = radio.getAttribute('data-show') === 'true';
            var target = document.getElementById(targetId);
            if (target) {
                target.style.display = show ? 'block' : 'none';
            }
        }
    });

    // 2. Inicialización de Choices.js para los select múltiples
    const choicesOptions = {
        removeItemButton: true,
        searchPlaceholderValue: "Escriba para filtrar...",
        itemSelectText: ''
    };
    new Choices("#rias_select", choicesOptions);
    new Choices("#pic_select", choicesOptions);

    const choices_canalizacion_id = new Choices("#canalizacion_id", {
        searchEnabled: true,
        searchChoices: true,
        removeItemButton: true, // Permite eliminar seleccionados
        itemSelectText: '',
        shouldSort: false,
        searchPlaceholderValue: "Escriba para filtrar...",
        maxItemCount: 3, // Límite a 3 items
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



    // 3. Modal de Consentimiento
    $('#aceptoBtn').click(function() {
        $('#consentModal').fadeOut();
        localStorage.setItem('consentAccepted', 'true');
    });





});
</script>