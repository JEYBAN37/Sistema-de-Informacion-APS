<?php $this->layout = 'default_familia' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>
<?php
$option = array(
    'label' => 'Fecha',
    'dateFormat' => 'DMY',
    'minYear' => date('Y') - 0,
    'maxYear' => date('Y') + 0,
    'empty' => array(
        'day' => 'Día',
        'month' => 'Mes',
        'year' => 'Año'
    )
);

?>


<div id="consentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40"
    style="display: flex;">
    <div class="bg-white rounded-xl shadow-2xl max-w-lg w-full p-8 relative">
        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-2xl font-bold"
            onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'index']); ?>'">×</button>
        <h3 class="text-2xl font-semibold mb-4 text-center text-teal-600">Consentimiento informado</h3>
        <div class="mb-6">
            <h4 class="text-lg font-semibold mb-2">Cordial saludo.</h4>
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
            <a href="<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'index']); ?>"
                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold text-center">No
                acepto</a>
            <a href="<?php echo $this->Html->url(['controller' => 'VisitasNegadas', 'action' => 'add']); ?>"
                class="bg-white hover:bg-gray-100 text-teal-600 border border-teal-600 px-4 py-2 rounded-lg font-semibold text-center">Agregar
                novedad</a>
            <button id="aceptoBtn"
                class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg font-semibold text-center">Sí
                acepto</button>
        </div>
    </div>
</div>

<script>
function buscarCedula() {
    var ced = document.getElementById('cedula').value;
    if (ced.length < 5) return;

    fetch('./buscarCedula/' + ced)
        .then(r => r.json())
        .then(d => {
            document.getElementById('resultado').innerHTML = JSON.stringify(d);
        });
}
</script>


<!-- Choices.js -->
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

<?php

echo $this->Form->create('Persona',  [
    'class' => 'space-y-6',
    'novalidate' => true
]);

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
	'Otra' => 'Otra',
	
];


$grupoPoblacional = [
	'1.Niñas, niños y adolescentes' => 'Niñas, niños y adolescentes',
	'2.Gestantes' => 'Gestantes',
	'3.Persona adulta mayor' => 'Persona adulta mayor',
	'4.Persona con condición de discapacidad' => 'Persona con condición de discapacidad',
	'5.Personas con orientación sexual diversa' => 'Personas con orientación sexual diversa',
	'6.Víctimas de violencia' => 'Víctimas de violencia',
	'8.Grupo Étnico'=>'Grupo Étnico',
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
     '0.No |0' => 'No se requiere canalización',
	'1.Zonas Orientación Escolar' => 'Zonas Orientación Escolar',
	'2.Centro de Escucha' => 'Centro de Escucha',
	'3.Curso virtual' => 'Curso virtual',
	'4.Caracterización por EBS' => 'Caracterización por EBS',
	
];



?>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-laptop text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Consultar Cedula Caracterizada</h1>
                <p class="text-gray-500">Ingresa el numero de cedula para verificar la caracterizacion.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Fecha de visita -->
            <div class="col-span-2 md:col-span-2 text-md font-semibold my-4 sm:mr-4">
                <div class="flex items-center">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">1</span>
                    <label for="resultadoEcomapa" class="font-semibold">Verifica Caracterizacion</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6 ">
                    <div class="flex flex-col w-full">
                        <input type="text" id="cedula"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Ingresa número de documento" />
                        <span class="text-sm text-red-600 ">
                            <?= $this->Form->error('fecha') ?>
                        </span>
                    </div>
                    <div class="w-full py-4">
                        <button type="button" onclick="consultarPersona()"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            Consultar
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-span-2 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">R</span>
                    <label for="proactividad_id" class="font-semibold">Resultado</label>
                    <p class="text-red-600">*</p>

                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <pre id="resultado"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full h-40 relative cursor-pointer overflow-auto whitespace-pre-wrap font-mono text-sm">
                        </pre>
                    </div>
                </div>

                <input type="hidden" id="persona_id" name="persona_id">

                <p id="errorCedula" class="text-sm text-red-600 mt-2 hidden">
                    No se encontró la persona
                </p>


                <script>
                function consultarPersona() {
                    const cedula = document.getElementById('cedula').value.trim();


                    limpiarResultado();

                    fetch('../personas/buscarPersona?q=' + cedula)
                        .then(res => res.json())
                        .then(data => {
                            if (!data || data.length === 0) {
                                mostrarError();
                                return;
                            }

                            // Mostrar resultado bonito
                            document.getElementById('resultado').textContent =
                                JSON.stringify(data, null, 2);

                            // Tomar el primer registro
                            document.getElementById('persona_id').value = data[0].id;

                            ocultarError();
                        })
                        .catch(() => {
                            mostrarError();
                        });
                }

                function mostrarError() {
                    document.getElementById('resultado').textContent = '';
                    document.getElementById('persona_id').value = '';
                    document.getElementById('errorCedula').classList.remove('hidden');
                }

                function ocultarError() {
                    document.getElementById('errorCedula').classList.add('hidden');
                }

                function limpiarResultado() {
                    document.getElementById('resultado').textContent = '';
                    document.getElementById('persona_id').value = '';
                    ocultarError();
                }
                </script>



            </div>
        </div>
    </div>
</div>

<?php
echo $this->Form->input('fechaRegistro', [
	'type' => 'hidden',
	'value' => date('Y-m-d')
]);
?>
<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-person text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
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
					'id' => 'rol',
					'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
					'error' => false,
					'options' => $TipoDeDocumentoOptions,
					'label' => '',
					'empty' => 'Selecciona tipo de documento',
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
                    'readonly' => 'readonly'
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
                    'id' => 'nombre2_field',

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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="resultadoEcomapa" class="font-semibold">Fecha de nacimiento</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <input type="text" name="data[Persona][fechanac]" id="fecha" id="fechaNac_field" ,
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona rango de fecha" />
                        <span class="text-sm text-red-600 ">
                            <?= $this->Form->error('fechanac') ?>
                        </span>
                    </div>

                </div>
            </div>

            <!-- Sexo -->
            <div
                class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="sexo" class="font-semibold">¿Cúal es su sexo?</label>
                </div>

                <div
                    class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio" name="data[Persona][sexo]" id="sexo-no" value="Hombre" class="hidden peer"
                            data-target="sexo" data-show="false" checked /> <!-- 👈 Por defecto NO -->
                        <label for="sexo-no" class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            Hombre
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio" name="data[Persona][sexo]" id="sexo-si" value="Mujer" data-target="sexo"
                            data-show="true" class="hidden peer cursor-pointer" />
                        <label for="sexo-si" class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            Mujer
                        </label>
                    </div>
                </div>
            </div>



            <!-- Grupo Poblacional -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">14</span>
                    <label for="grupopoblacional" class="font-semibold">Grupo Poblacional</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
				echo $this->Form->input('grupopoblacional', [
					'type' => 'select',
					'id' => 'grupopoblacional',					
					'error' => false,
					'options' => $grupoPoblacional,
					'label' => false,					
					'multiple' => true,
					'empty' => false,
                    'class' => 'w-full',
					
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
					'id' => 'producto_id',
					'options' => $aseguradoraOption,
					'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
					'label' => '',
					'empty' => 'Seleccione el aseguradora',
					'error' => false // No mostrar error aquí
				]);


				if (!empty($this->Form->error('aseguradora'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('aseguradora') . '</div>';
				}
				?>
            </div>

            <!-- Ips de atención -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="familiograma" class="font-semibold">IPS referida</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
				echo $this->Form->input('canalizacion_id', [
					'type' => 'select',
					'id' => 'canalizacion_id',
					'class' => 'w-full',
					'label' => '',
					'empty' => 'Seleccione el IPS',
					'error' => false // No mostrar error aquí
				]);


				if (!empty($this->Form->error('canalizacion_id'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('canalizacion_id') . '</div>';
				}
				?>
            </div>

            <!-- Barrio / Vereda -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6 sm:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="objactividad" class="font-semibold">Barrio / Vereda</label>
                </div>
                <?php
                echo $this->Form->input('barriovereda', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('barriovereda'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('barriovereda') . '</div>';
                }
                ?>
            </div>

            <!-- direccion -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="direccion" class="font-semibold">Nomenclatura de la Dirección</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('direccion', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">17</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">18</span>
                    <label for="nombre" class="font-semibold">Email</label>
                </div>
                <?php
				echo $this->Form->input('email', [
					'type' => 'text',
					'label' => false,
					'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
					'error' => false
				]);

				if (!empty($this->Form->error('email'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('email') . '</div>';
				}
				?>
            </div>

            <!-- Nombre acudiente -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="nombre" class="font-semibold">Nombre de acudiente</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
				echo $this->Form->input('nombreAcudiente', [
					'label' => false,
					'uppercase' => true,
					'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
					'error' => false
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


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-laptop text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Servicios de Atención en salud</h1>
                <p class="text-gray-500">Complementa la información de acuerdo a la necesidad identificada.</p>
            </div>
        </div>
        <!-- Urgencia -->
        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                <label for="urgencia" class="font-semibold">Urgencia</label>
                <p class="text-red-600">*</p>
            </div>

            <p class="help-block text-gray-500 text-xs mb-2">Registre la situación de urgencia.</p>

            <?php
                echo $this->Form->input('urgencia', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 2500, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('urgencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('urgencia') . '</div>';
                }
            ?>
        </div>

        <!-- DetecciÓn temprana -->
        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                <label for="detecciontemprana" class="font-semibold">Deteccion Temprana</label>
                <p class="text-red-600">*</p>
            </div>

            <p class="help-block text-gray-500 text-xs mb-2">Registre servicios de detección temprana.</p>

            <?php
                echo $this->Form->input('detecciontemprana', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 2500, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('detecciontemprana'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('detecciontemprana') . '</div>';
                }
            ?>
        </div>

        <!-- Atención RIAS -->
        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                <label for="rias" class="font-semibold">Atención RIAS</label>
                <p class="text-red-600">*</p>
            </div>

            <p class="help-block text-gray-500 text-xs mb-2">Registre servicios Atención RIAS.</p>

            <?php
				echo $this->Form->input('rias', [
					'type' => 'select',
					'label' => false,
					'multiple' => true,
					'empty' => false,
					'options' => $optionCanalizacion,
					'class' => 'w-full',
					'id' => 'canalizacionuno',
					'error' => false,
					'label' => false,

				]);
				if (!empty($this->Form->error('rias'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('rias') . '</div>';
				}
				?>
        </div>


    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-laptop text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Servicios Sociales</h1>
                <p class="text-gray-500">Complementa la información de acuerdo a la necesidad identificada.</p>
            </div>



        </div>
        <!-- Servicio Social -->
        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                <label for="serviciosocial" class="font-semibold">Servicios Sociales</label>
                <p class="text-red-600">*</p>
            </div>

            <p class="help-block text-gray-500 text-xs mb-2">Registre derivación de oferta social.</p>

            <?php
                echo $this->Form->input('serviciosocial', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 2500, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('serviciosocial'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('serviciosocial') . '</div>';
                }
            ?>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-house-laptop text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Oferta PIC</h1>
                <p class="text-gray-500">Seleccione la oferta PIC que deriva a la persona</p>
            </div>
        </div>
        <!-- Lista desplegable multiselec oferta PIC -->
        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                <label for="ofertapic" class="font-semibold">Oferta PIC</label>
                <p class="text-red-600">*</p>
            </div>

            <p class="help-block text-gray-500 text-xs mb-2">Registre la derivacion a PIC.</p>

            <?php
				echo $this->Form->input('ofertapic', [
					'type' => 'select',
					'label' => false,
					'multiple' => true,
					'empty' => false,
					'options' => $optionPic,
					'class' => 'w-full',
					'id' => 'ofertaPic',
					'error' => false,
					'label' => false,

				]);
				if (!empty($this->Form->error('ofertapic'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('ofertapic') . '</div>';
				}
				?>
        </div>




    </div>
</div>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-upload text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Guardar registro</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3">


            <!-- Botón -->
            <div class="w-full p-2">
                <button name="btn" value="Guardar y Salir" type="submit"
                    class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-save">
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            <circle cx="12" cy="12" r="1" />
                            <path
                                d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                        </svg>
                    </span>
                    Guardar
                </button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
function mostrar(isChecked) {
    if (isChecked) {
        $("#si").show();
        $("#no").hide();
    } else {
        $("#si").hide();
        $("#no").show();
    }
}



function validar() {
    var todo_correcto = true;

    if (document.getElementById('status').value == '') {
        todo_correcto = false;
    }

    if (!todo_correcto) {
        alert('Algunos campos no están correctos, vuelva a revisarlos');
    }

    return todo_correcto;
}




document.addEventListener("DOMContentLoaded", () => {
    if (!localStorage.getItem('consentAccepted')) {
        document.getElementById('consentModal').style.display = 'flex';
        document.body.classList.add('overflow-hidden');
    } else {
        document.getElementById('consentModal').style.display = 'none';
        document.body.classList.remove('overflow-hidden');
    }

    document.getElementById('aceptoBtn').onclick = function() {
        document.getElementById('consentModal').style.display = 'none';
        document.body.classList.remove('overflow-hidden');
        localStorage.setItem('consentAccepted', 'true');
    };

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

    const choices_grupopoblacional = new Choices("#grupopoblacional", {
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
        placeholderValue: "Seleccione la(s) población(es)",
    });

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

    const choices_canalizacionuno = new Choices("#canalizacionuno", {
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
        placeholderValue: "Seleccione canalización...",
    });
    const choices_ofertaPic = new Choices("#ofertaPic", {
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
        placeholderValue: "Seleccione canalización...",
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


    function updateSesionField() {
        const num = document.getElementById('sesion_numero').value;
        const total = document.getElementById('sesion_total').value;
        const hidden = document.getElementById('sesion_hidden');

        console.log(`Número: ${num}, Total: ${total}`);

        if (num && total) {
            hidden.value = `${num} / ${total}`;
        } else {
            hidden.value = '';
        }
    }

    document.getElementById('sesion_numero').addEventListener('input', updateSesionField);
    document.getElementById('sesion_total').addEventListener('input', updateSesionField);

    // Inicializar por si ya vienen valores cargados
    updateSesionField();

});

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
            firstDay: 1
        }
    }, function(start) {
        let fecha = start.format('YYYY-MM-DD');
        console.log("Fecha seleccionada:", fecha);
    });
});


CKEDITOR.on('instanceReady', function(ev) {
    var editor = ev.editor;
    var textarea = editor.element.$;
    var maxChars = textarea.getAttribute("data-maxlength"); // Lee el límite de cada campo
    maxChars = maxChars ? parseInt(maxChars) : 300; // Default 300 si no se define

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
        if (text.length >= maxChars && evt.data.keyCode != 8 && evt.data.keyCode != 46) {
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


function agregarOpcionSeleccion() {
    $("#PlsesionProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
    $("#PlsesionResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
}

function validarTamanioSoporte() {
    var auxFile = document.getElementById('PlsesionAnexo');
    var sizeF = auxFile.files[0].size;
    if (sizeF > 3000000) {
        alert('El archivo debe ser menor a 3 Mb');
        auxFile.value = '';
    }
}



// Detectar si el usuario intenta retroceder con la flecha del navegador
window.addEventListener('popstate', function(event) {
    if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
        window.location.href = 'index'; // Redirigir a la página deseada
    } else {
        history.pushState(null, null, location.href); // Mantener en la página actual
    }
});

// Prevenir retroceso con la flecha del navegador (mejor experiencia)
history.pushState(null, null, location.href);
</script>