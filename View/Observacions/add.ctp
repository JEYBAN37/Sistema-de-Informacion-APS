<?php $this->layout = 'default_familia';  ?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-teal-600">
        Observación general de caracterización Familiar
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre observaciones y conclusiones generales
    </p>
</div>

<?php

echo $this->Form->create('Observacion',  [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);

// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));

 $idAux = $_GET['observacions'];
echo $this->Form->input('familia_id', array('value' => ''
                            . $idAux, 'type' => 'hidden'));
                        ?>
<div class="max-w-6xl mx-auto p-18 mb-4">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-magnifying-glass-chart text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Análisis del riesgo familiar</h1>
                <p class="text-gray-500">Complementa la información segun la necesidad.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">


            <!-- Resultados de ficha familiar-->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="resultadoEcomapa" class="font-semibold">Resultado Ecomapa</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $optionEcomapa = [
                    '' => 'Elegir',
                    '1.Positivo' => '1.Positivo',
                    '2.Tenue' => '2.Tenue',
                    '3.Estresante' => '3.Estresante',
                    '4.Fluye' => '4.Fluye',
                    '5.Intenso' => '5.Intenso',
                ];

                echo $this->Form->input('resultadoEcomapa', [
                    'label' => false,
                    'type' => 'select',
                    'options' => $optionEcomapa,
                    'id' => 'resultadoEcomapa',
                    'class' => 'w-full',
                    'empty' => false,
                    'error' => false, // No mostrar error aquí                              
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none text-sm text-gray-700',
                ]);

                if (!empty($this->Form->error('resultadoEcomapa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('resultadoEcomapa') . '</div>';
                }
                ?>

            </div>

            <!-- Resultado famliograma -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="familiograma" class="font-semibold">Resultado Familiograma</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $resultadoFamiliograma = [
                    '1.Biológicos' => 'Biológicos',
                    '2.Psicológicos' => 'Psicológicos',
                    '3.Sociales' => 'Sociales',
                    '0.Sin riesgo' => 'Sin riesgo'
                ];

                echo $this->Form->input('resultadoFamiliograma', [
                    'label' => false,
                    'type' => 'select',
                    'multiple' => 'multiple',
                    'options' => $resultadoFamiliograma,
                    'id' => 'resultadoFamiliograma',
                    'class' => 'w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'empty' => false,
                    'error' => false // No mostrar error aquí
                ]);

                if (!empty($this->Form->error('resultadoFamiliograma'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('resultadoFamiliograma') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="riesgosalud" class="font-semibold">Se identificó riesgos en salud</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $riesgosalud = [
                    '0' => 'Ninguno',
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


                echo $this->Form->input('menoresriegosalud', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => 'multiple',
                    'id' => 'riesgosalud',
                    'class' => 'w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'empty' => false,
                    'options' => $riesgosalud,
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('menoresriegosalud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('menoresriegosalud') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="riesgovulnerabilidad" class="font-semibold">Se identificó algún riesgo de vulnerabilidad</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $riesgovulnerabilidad = [
                    '0' => 'Ninguna',
                    '2.0' => 'Persona con discapacidad sin cuidador',
                    '2.1' => 'Menor sin estudiar',
                    '1.3' => 'Población Especial en riesgo',
                    '2.4' => 'Persona sin afiliación a salud',
                    '1.2' => 'Persona con consumo SPA',
                    '2.01' => 'Sospecha de violencia intrafamiliar',
                    '1.02' => 'Vivienda precaria',
                    '1.03' => 'Cuidador con sobrecarga',
                    '1.04' => 'Disfunción famliliar',
                    '1.05' => 'Relaciones familiares tensas o estresantes'
                ];

                echo $this->Form->input(
                    'riesgovulnerabilidad',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => 'multiple',
                        'id' => 'riesgovulnerabilidad',
                        'class' => 'w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'empty' => false,
                        'options' => $riesgovulnerabilidad,
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('riesgovulnerabilidad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgovulnerabilidad') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">5</span>
                    <label for="direccion" class="font-semibold">Valoración de riesgo familia</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('puntuacionfamilia', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'puntuacionfamilia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'readonly' => 'readonly', // Hacer el campo de solo lectura
                    'error' => false // No mostrar error aquí
                ]);

                if (!empty($this->Form->error('puntuacionfamilia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('puntuacionfamilia') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-gray-200 text-md font-semibold">6</span>
                    <label for="direccion" class="font-semibold">Clasificación de la familia</label>
                </div>

                <?php
                echo $this->Form->input('valoracionfamilia', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'valoracionfamilia',
                    'error' => false, // No mostrar error aquí
                    'readonly' => 'readonly', // Hacer el campo de solo lectura
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',

                ]);
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="fortalezas" class="font-semibold">Fortalezas de la familia</label>
                </div>

                <?php

                $fortalezas = [
                    'Vivienda adecuada y segura' => 'Vivienda adecuada y segura',
                    'Acceso a servicios básicos (agua,alcantarillado, luz, gas)' => 'Acceso a servicios básicos (agua, luz, gas)',
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

                echo $this->Form->input('fortalezas', [
                    'label' => false,
                    'type' => 'select',
                    'multiple' => 'multiple',
                    'options' => $fortalezas,
                    'id' => 'fortalezas',
                    'class' => 'w-full',
                    'empty' => false,
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('fortalezas'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('fortalezas') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="CanalizacionOfertaSocial" class="font-semibold">Canalización Oferta Social</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php

                $CanalizacionOfertaSocial = [
                    'No' => 'No',
                    'Bienestar social' => 'Bienestar social',
                    'Certificación de Discapacidad' => 'Certificación de Discapacidad',
                    'Proyecto Bien nacer' => 'Proyecto Bien nacer',
                    'Seguridad Social en salud' => 'Seguridad Social en salud',
                    'Renta ciudana' => 'Renta ciudana',
                    'Jovenes en acción' => 'Jovenes en acción',
                    'Adulto mayor' => 'Adulto mayor',
                    'CDI NIDOS NUTRIR' => 'CDI NIDOS NUTRIR',
                    'Comedores solidarios' =>    'Comedores solidarios',
                    'Programa minimo vital' => 'Programa minimo vital',
                    'INVIYA' => 'INVIYA',
                    'SISBEN' => 'SISBEN',
                    'FONDO EMPRENDER' => 'FONDO EMPRENDER',
                    'Protección Migrantes' => 'Protección Migrantes',
                ];

                echo $this->Form->input('canalizacionuno', [
                    'label' => false,
                    'type' => 'select',
                    'multiple' => 'multiple',
                    'options' => $CanalizacionOfertaSocial,
                    'id' => 'CanalizacionOfertaSocial',
                    'class' => 'w-full',
                    'empty' => false,
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('canalizacionuno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('canalizacionuno') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
                    <label for="estado" class="font-semibold">Estado de canalización social</label>
                </div>

                <?php
                $estado = [
                    '' => 'Elegir',
                    'Se brinda orientación' => 'Se brinda orientación correspondiente',
                    'Se consultará información' => 'Se consultará información',
                    'No aplica' => 'No aplica',
                ];
                echo $this->Form->input('estado', [
                    'label' => false,
                    'type' => 'select',
                    'options' => $estado,
                    'id' => 'estado',
                    'class' => 'w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'empty' => false,
                    'error' => false // No mostrar error aquí
                ]);

                if (!empty($this->Form->error('estado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estado') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">10</span>
                    <label for="actividad" class="font-semibold">Observación</label>
                </div>
                <?php echo $this->Form->input('observacionesplancuidado', array(
                    'label' => false,
                    'type' => 'textarea', // Cambiado a 'textarea'
                    'class' => 'form-control',
                    'style' => 'height:100px;  font-size: 15px ; width:100%', // Ajustado el estilo para un área de texto más grande
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí    

                )); ?>
            </div>




            <!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->
            <?php echo $this->Form->input('date', array(
                'label' => 'Fecha de visita : ',
                'style' => 'height:30px;  font-size: 15px ; width:100%',
                'type' => 'hidden',
            ));
            ?>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-file-waveform text-teal-600 text-3xl bg-teal-100 p-4 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Cargue de Familiograma</h1>
                <p class="text-gray-500">Anexe el archivo comprimido correspondiente.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Familiograma</label>
                    <p class="text-red-600">*</p>

                </div>

                <div class="flex flex-col gap-2">
                    <label for="familiograma" class="block text-gray-700 font-semibold text-sm mb-2">
                        Adjuntar archivo con 3MB (pdf, jpg, png , jpeg)
                    </label>
                    <div class="relative w-full">
                        <?php
                        echo $this->Form->input('familiograma', [
                            'label' => false,
                            'type' => 'file',
                            'class' => 'block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 p-3 file:mr-4 file:py-6 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100',
                            'onchange' => 'validarTamanioSoporte()',
                            'id' => 'ProcesoregistroAnexo',
                            'error' => false
                        ]);
                        if (!empty($this->Form->error('familiograma'))) {
                            echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('familiograma') . '</div>';
                        }

                        echo $this->Form->input('dirfamiliograma', array('type' => 'hidden'));
                        ?>
                    </div>
                    <span class="text-xs text-gray-500 mt-1">
                        NOTA:
                        * Cargar en archivo con extension "pdf", "jpg", "png", "jpeg" <br>
                        * Familiograma Diligenciado <br>
                        * Nomenclatura recomendada IDFAMILIA_APELLIDOS <br>
                        El nombre del archivo no debe tener tildes o diéresis.
                    </span>
                </div>
            </div>





            <div class="pt-2 flex gap-4">
                <!-- Botón -->
                <div class="w-full p-2">
                    <button name="btn" value="Guardar y continuar" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                                <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                                <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                            </svg>
                        </span>
                        Guardar Observación
                    </button>
                </div>
                <div class="w-full p-2">
                    <button onclick="preventBackNavigation()" name="btn" value="volver" type="button" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                        <span>
                            <i class="fa-solid fa-person-walking-arrow-loop-left "></i>
                        </span>
                        Volver a Familia
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    async function validarTamanioSoporte() {
        const auxFile = document.getElementById('ProcesoregistroAnexo');
        if (!auxFile || !auxFile.files || !auxFile.files[0]) return;

        const file = auxFile.files[0];
        const maxBytes = 3 * 1024 * 1024; // objetivo: 3MB

        // Si no es imagen, solo validamos tamaño
        if (!file.type.startsWith('image/')) {
            if (file.size > maxBytes) {
                alert('El archivo debe ser menor a 3 MB o suba una imagen para comprimir automáticamente.');
                auxFile.value = '';
            }
            return;
        }

        // Si ya cumple el tamaño, no hacer nada
        if (file.size <= maxBytes) return;

        // Comprimir imagen en cliente
        try {
            const dataUrl = await new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onload = e => resolve(e.target.result);
                reader.onerror = reject;
                reader.readAsDataURL(file);
            });

            const img = await new Promise((resolve, reject) => {
                const i = new Image();
                i.onload = () => resolve(i);
                i.onerror = reject;
                i.src = dataUrl;
            });

            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');

            // Inicializar tamaño original
            let width = img.width;
            let height = img.height;
            canvas.width = width;
            canvas.height = height;
            ctx.drawImage(img, 0, 0, width, height);

            // Convertiremos a JPEG para poder controlar la calidad
            const outputType = 'image/jpeg';
            let quality = 0.9;
            let blob = await new Promise(res => canvas.toBlob(res, outputType, quality));

            // Reducir calidad iterativamente
            while (blob && blob.size > maxBytes && quality > 0.2) {
                quality -= 0.1;
                blob = await new Promise(res => canvas.toBlob(res, outputType, quality));
            }

            // Si aún demasiado grande, reducir dimensiones progresivamente
            while (blob && blob.size > maxBytes && (width > 800 || height > 800)) {
                width = Math.round(width * 0.9);
                height = Math.round(height * 0.9);
                canvas.width = width;
                canvas.height = height;
                ctx.drawImage(img, 0, 0, width, height);
                quality = Math.max(quality - 0.05, 0.1);
                blob = await new Promise(res => canvas.toBlob(res, outputType, quality));
            }

            if (!blob || blob.size > maxBytes) {
                alert('No fue posible reducir el tamaño por debajo de 3 MB. Intente con otra imagen o reduzca la resolución manualmente.');
                auxFile.value = '';
                return;
            }

            // Crear nuevo File y reemplazar el input
            const compressedFile = new File([blob], file.name.replace(/\.(png|jpg|jpeg|gif)$/i, '.jpg'), {
                type: outputType,
                lastModified: Date.now()
            });

            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(compressedFile);
            auxFile.files = dataTransfer.files;

            console.log('Imagen comprimida:', file.size, '->', compressedFile.size);
        } catch (err) {
            console.error(err);
            alert('Error al procesar la imagen. Intente con otro archivo.');
            auxFile.value = '';
        }
    }

    function preventBackNavigation() {
        if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            window.location.href = '<?php echo $this->Html->url(['controller' => 'Familias', 'action' => 'view', $idAux]); ?>';
        }
    }


    document.addEventListener("DOMContentLoaded", () => {

        const choices_riesgosalud = new Choices("#riesgosalud", {
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
            placeholderValue: "Seleccione riesgos en salud identificados",
        });




        const choices_riesgovulnerabilidad = new Choices("#riesgovulnerabilidad", {
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
            placeholderValue: "Seleccione riesgos o vulnerabilidad identificados",
        });

        const choices_familiograma = new Choices("#resultadoFamiliograma", {
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
            placeholderValue: "Seleccione resultados del familiograma",
        });

        const choices_fortalezas = new Choices("#fortalezas", {
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
            placeholderValue: "Seleccione las fortalezas de la familia",
        });

        const choices_CanalizacionOfertaSocial = new Choices("#CanalizacionOfertaSocial", {
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
            placeholderValue: "Seleccione opciones de canalización de oferta social",
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

            }
        }, function(start) {
            let fecha = start.format('YYYY-MM-DD');
            console.log("Fecha seleccionada:", fecha);

            // Si necesitas guardarlos en campos ocultos para enviarlos al backend:
            if (!$("#fecha").length) {
                $("form").append('<?php echo $this->Form->hidden('fecha', ['id' => 'fecha']); ?>');
            }
            $("#fecha").val(fecha);
        });
    });





    document.addEventListener("DOMContentLoaded", () => {
        const riesgosVulnerabilidad = document.getElementById('riesgovulnerabilidad');
        const riesgosSalud = document.getElementById('riesgosalud');
        const puntuacionFamilia = document.getElementById('puntuacionfamilia');
        const valoracionFamilia = document.getElementById('valoracionfamilia');

        function calculateSum() {
            let sum = 0;

            // Sumar valores seleccionados en riesgos de vulnerabilidad
            if (riesgosVulnerabilidad) {
                const selectedOptions = Array.from(riesgosVulnerabilidad.selectedOptions);
                sum += selectedOptions.reduce((acc, option) => acc + parseInt(option.value || 0, 10), 0);
            }

            // Sumar valores seleccionados en riesgos de salud
            if (riesgosSalud) {
                const selectedOptions = Array.from(riesgosSalud.selectedOptions);
                sum += selectedOptions.reduce((acc, option) => acc + parseInt(option.value || 0, 10), 0);
            }

            // Actualizar el campo de puntuación
            if (puntuacionFamilia) {
                puntuacionFamilia.value = sum;
            }

            if (valoracionFamilia) {
                // Actualizar la valoración basada en la puntuación
                if (sum < 3) {
                    valoracionFamilia.value = 'Riesgo Bajo';
                } else if (sum >= 3 && sum < 5) {
                    valoracionFamilia.value = 'Riesgo Medio';
                } else if (sum >= 5) {
                    valoracionFamilia.value = 'Riesgo Alto';
                } else {
                    valoracionFamilia.value = '';
                }
            }
        }

        // Escuchar cambios en ambos selectores
        if (riesgosVulnerabilidad) {
            riesgosVulnerabilidad.addEventListener('change', calculateSum);
        }
        if (riesgosSalud) {
            riesgosSalud.addEventListener('change', calculateSum);
        }
    });
    // Configuración Fecha
    document.addEventListener("DOMContentLoaded", () => {
        const fechaInput = document.getElementById('fechaRegistro');
        if (fechaInput) {
            fechaInput.addEventListener('focus', () => {
                fechaInput.type = 'date';
            });
            fechaInput.addEventListener('blur', () => {
                if (!fechaInput.value) {
                    fechaInput.type = 'text';
                }
            });
        }
    });


    document.addEventListener("DOMContentLoaded", () => {
        const puntuacionFamilia = document.getElementById('puntuacionfamilia');



        function updateValoracionFamilia() {
            if (puntuacionFamilia && valoracionFamilia) {
                const puntuacion = parseFloat(puntuacionFamilia.value) || 0;

                if (puntuacion < 3) {
                    valoracionFamilia.value = 'Riesgo Bajo';
                } else if (puntuacion >= 3 && puntuacion < 5) {
                    valoracionFamilia.value = 'Riesgo Medio';
                } else if (puntuacion >= 5) {
                    valoracionFamilia.value = 'Riesgo Alto';
                } else {
                    valoracionFamilia.value = '';
                }
            }
        }

        // Escuchar cambios en el campo de puntuación
        if (puntuacionFamilia) {
            puntuacionFamilia.addEventListener('input', updateValoracionFamilia); // Use 'input' for real-time updates
        }

        // Llamar la función al cargar la página para inicializar el valor
        updateValoracionFamilia();
    });
</script>