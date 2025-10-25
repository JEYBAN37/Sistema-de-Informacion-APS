<?php $this->layout = 'default_familia' ?>


<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Modulo Socioambiental
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre preliminarmente los campos relacionados con la sistematización.
        Tenga en cuenta que podrá editar y complementar los demás campos posteriormente.
    </p>
</div>




<style>
    .modal-header-native {
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
        border-top-left-radius: .3rem;
        border-top-right-radius: .3rem;
    }
</style>





<body style="font-size: 14px;">

    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header-native" style="text-align: center;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="myModalLabel">Consentimiento informado</h3>
                </div>
                <div class="modal-body">
                    <!--div>
                        <img src="../img/logoescudopasto.jpg" alt="Imagen de marcador genérico" width="199px" height="auto">
                    </div-->
                    <h4 style=" text-align: justify; margin: 20px;">Cordial saludo.</h4>

                    <p style=" text-align: justify; margin: 20px;"> Con el diligenciamiento del presente formulario
                        <strong>autorizo libre y expresamente</strong> a
                        la Secretaría de
                        Salud de Pasto para que realice el tratamiento de los datos personales registrados y
                        recolectados, de igual manera manifiesto que <strong>he sido informado</strong> sobre la
                        finalidad de la
                        recolección de la misma, con el propósito de implementar el modelo predictivo,
                        preventivo y
                        resolutivo basado en <strong>Atención Primaria en Salud</strong>, dando cumplimiento a la
                        <strong>privacidad y
                            protección
                            de datos</strong> dispuesto en la Ley 1581 de 2012, el Decreto 1377 de 2013 y la circular
                        externa
                        008 de
                        2020 de la Super intendencia de registro y comercio.
                    </p>

                    <!--p><?php echo $this->Html->link(('Si acepto'),  array('controller' => 'sociambientals', 'action' => 'add')); ?>
                    </p-->

                </div>
                <div class="modal-footer">
                    <a href="#" style="margin-top:-5px; background-color: #449D45;" data-dismiss="modal"
                        class="my-button">Si acepto</a>
                </div>
            </div>
        </div>
    </div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <rect width="8" height="4" x="8" y="2" rx="1" />
                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-5.5" />
                <path d="M4 13.5V6a2 2 0 0 1 2-2h2" />
                <path d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
            </svg>

            <div class="ml-4">
                <h1 class="text-xl font-semibold">Detalles Específicos</h1>
                <p class="text-gray-500">Complete los datos específicos del acta.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Objetivo General -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="objactividad" class="font-semibold">Geopunto latitud</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('latitud', [
                    'label' => 'Geopunto latitud',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '0.000000 7 números',
                                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('latitud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objactividad') . '</div>';
                }
                ?>
            </div>

            <!-- grupo u Organización -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="objactividad" class="font-semibold">Geopunto longitud</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Geopunto latitud</p>

                <?php
                echo $this->Form->input('longitud', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('longitud'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('grupo') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="ordendia" class="font-semibold">Orden del día</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('ordendia', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 600, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('ordendia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('ordendia') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">


                <div class="mt-4 w-full flex">
                    <p class="font-medium text-sm text-gray-600 pr-4">¿Esta acta es resultado a compromisos de encuentros previos programados?</p>
                    <label class=" relative inline-flex  cursor-pointer">
                        <input type="checkbox" name="status" id="status" value="si" class="sr-only peer" onchange="mostrar(this.checked)">
                        <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-400 rounded-lg   peer peer-checked:bg-green-600 transition-colors"></div>
                        <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-lg transition-transform peer-checked:translate-x-5"></div>
                    </label>
                </div>




                <div id="si" class="" style="display: none;">

                    <div class="flex items-center mb-4 mt-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">?</span>
                        <label for="desarrollo" class="font-semibold">Verificación de compromisos previos (si hubo una reunion previa relacionada a esta)</label>
                    </div>

                    <?php
                    echo $this->Form->input('compromisosprevios', [
                        'label' => '',
                        'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                        'error' => false, // No mostrar error aquí
                        'data-maxlength' => 500, // <-- aquí defines el límite de caracteres

                    ]);
                    if (!empty($this->Form->error('compromisosprevios'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('compromisosprevios') . '</div>';
                    }
                    ?>
                </div>
            </div>




            <!-- Desarrollo -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="desarrollo" class="font-semibold">Desarrollo</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Registre los momentos más importantes desarrollados durante la actividad (máximo 4000 caracteres).</p>

                <?php
                echo $this->Form->input('desarrollo', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 4000, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('desarrollo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('desarrollo') . '</div>';
                }
                ?>
            </div>

            <!-- Compromisos -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="compromiso" class="font-semibold">Compromisos y tareas</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Registre los compromisos y tareas de la reunión</p>

                <?php
                echo $this->Form->input('compromiso', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'data-maxlength' => 2000, // <-- aquí defines el límite de caracteres
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('compromiso'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('compromiso') . '</div>';
                }
                ?>
            </div>

        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="../img/update/historicoHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg w-[60px]">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Cierre de Acta</h1>
                <p class="text-gray-500">Complete los datos finales del acta.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Alcance de la reunión</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $alcancereunion = array(
                    '' => 'Elegir',
                    'planeacion operativa administrativa' => 'Planenación operativa/administrativa',
                    'ejcucion operativa administrativa' => 'Ejecución operativa/administrativa',
                    'planeacion pedagogica' => 'Planeación pedagógica',
                    'articulacion interinstitucional' => 'Apoyo interinstitucional',
                    'acompañamiento a organizaciones' => 'Acompañamiento a organizaciones',
                    'Ejecucion de eventos o actividades' => 'Ejecución de eventos o actividades',
                    'participacion escenarios externos' => 'participación escenarios externos'
                );

                echo $this->Form->input('alcancereunion', [
                    'type' => 'select',
                    'options' => $alcancereunion,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('alcancereunion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('alcancereunion') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="ordendia" class="font-semibold">Proxima convocatoria</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('convocatoria', [
                    'label' => '',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 600, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('convocatoria'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('convocatoria') . '</div>';
                }
                ?>
                <p class="help-block text-gray-500 text-xs mt-2">Favor registrar fecha y lugar de la proxima convocatoria</p>

            </div>
        </div>

        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                <label for="proactividad_id" class="font-semibold">Soportes</label>
            </div>

            <div class="flex flex-col gap-2">
                <label for="ProcesoregistroAnexo" class="block text-gray-700 font-semibold text-sm mb-2">
                    Adjuntar archivo comprimido (.zip o .rar)
                </label>
                <div class="relative w-full">
                    <?php
                    echo $this->Form->input('anexo', [
                        'label' => false,
                        'type' => 'file',
                        'class' => 'block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 p-3 file:mr-4 file:py-6 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100',
                        'onchange' => 'validarTamanioSoporte()',
                        'id' => 'ProcesoregistroAnexo',
                        'error' => false
                    ]);
                    if (!empty($this->Form->error('anexo'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('anexo') . '</div>';
                    }

                    echo $this->Form->input('dir', array('type' => 'hidden', 'class' => 'form-control'));
                    ?>
                </div>
                <span class="text-xs text-gray-500 mt-1">
                    NOTA:
                    * Cargar en archivo comprimido extensión ".zip" o ".rar" <br>
                    * listado asistencia.pdf (meet o físico), registro excel participantes <br>
                    * tres (3) pantallazos o fotos resolución 600px * 600px <br>
                    El nombre del archivo no debe tener tildes o diéresis.
                </span>
            </div>
        </div>
        <div class="pt-2 flex gap-4">
            <button type="submit" name="btn" value="Guardar Acta" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                        <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                        <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                        <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                    </svg>
                </span>
                Guardar Acta
            </button>
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

    function mostrarBarrio(id) {
        if (id == "2")
            $("#divActualizarBarrio").show();
        else
            $("#divActualizarBarrio").hide();
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

    function agregarOpcionSeleccion() {
        $("#ProcesoregistroUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProcesoregistroProactividadId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProcesoregistroPlsesionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        // $("#status").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

    document.addEventListener("DOMContentLoaded", () => {

        const options = {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: false,
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
        };

        const choices_ubicacion = new Choices("#ubicacion_id", options);
        const choices_producto = new Choices("#producto_id", options);


    });


    $(function() {
        $('#datetime_range').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 1,
            autoApply: true,
            locale: {
                format: 'YYYY-MM-DD HH:mm',
                separator: ' a ',
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                fromLabel: "Desde",
                toLabel: "Hasta",
                daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                monthNames: [
                    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                ],
                firstDay: 1
            }
        }, function(start, end) {
            // 👇 Extraer fecha y horas
            let fecha = start.format('YYYY-MM-DD');
            let hora_inicio = start.format('HH:mm');
            let hora_fin = end.format('HH:mm');

            console.log("Fecha:", fecha);
            console.log("Hora inicio:", hora_inicio);
            console.log("Hora fin:", hora_fin);

            // Si necesitas guardarlos en campos ocultos para enviarlos al backend:
            if (!$("#fecha").length) {
                $("form").append('<?php echo $this->Form->hidden('fecha', ['id' => 'fecha']); ?>');
                $("form").append('<?php echo $this->Form->hidden('hora_inicio', ['id' => 'hora_inicio']); ?>');
                $("form").append('<?php echo $this->Form->hidden('hora_fin', ['id' => 'hora_fin']); ?>');
            }
            $("#fecha").val(fecha);
            $("#hora_inicio").val(hora_inicio);
            $("#hora_fin").val(hora_fin);
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
<body style="font-size: 14px;">
    <div>
        <?php echo $this->Form->create('Sociambiental'); ?>
        <div class="form-group col-sm-12 center">

            <fieldset>

                <div class="col-12 text-center">
                    <h1 class="title-general-forms">Módulo Socioambiental
                    </h1>
                </div>

                <h2 style="color: #3366CC;  font-size:30px ; margin-top: 25px; ">Datos Básicos</h2>
                <hr style=" border:0.1px solid rgba(0,0,0,.125);">
                <div class="grow justify-content-center" display="none" style="margin-top:20px; ">
                    <div class="card " style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">
                        <div class="form-group row">
                            <?php
                            echo $this->Form->hidden('aceptaformulario', array(
                                'value' => 'Si acepta'
                            ));
                            ?>


                            <!-- Fecha de sesión realizada -->
                            <div class="form-group col-md-6" style="margin-top: 20px;">



                                <?php echo $this->Form->label('fecha', 'Fecha de visita', [
                                    'class' => 'text-gray-700 font-semibold text-sm mb-2'
                                ]); ?>
                                <input type="text" name="datetime_range" id="datetime_range"
                                    class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                                    placeholder="Selecciona rango de fecha y hora" />

                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('responsable_id', array(
                                    'label' => 'Responsable diligenciamiento Encuesta',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'class' => 'select-search'
                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('ubicacion_id', array(
                                    'label' => 'Micro-Territorio',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'class' => 'select-search col-md-12'
                                )); ?>

                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('barriovereda', array(
                                    'label' => 'Barrio/corregimiento/sector/vereda',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',


                                )); ?>


                                </p>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('direccion', array(
                                    'label' => 'Nomenclatura de la Dirección',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                )); ?>

                                <p class="help-block">Colocar la nomenclatura de un recibo de servicio publico del
                                    domicilio
                                </p>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('latitud', array(
                                    'label' => 'Geopunto latitud',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '0.000000 7 números'
                                )); ?>
                                <p class="help-block">Coordenada de latitud en la ubicación geográfica. Ej.:
                                    1.670348
                                    Valor numérico con decimales, separador punto. Acepta valores negativos
                                </p>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('longitud', array(
                                    'label' => 'Geopunto longitud',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '-00.000000 8 números'
                                )); ?>
                                <p class="help-block">Coordenada de longitud en la ubicación geográfica . Ejemplo:
                                    -70.240149
                                    Valor numérico con decimales, separador punto. Acepta valores negativos
                                </p>
                            </div>


                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php echo $this->Form->input('apellidosfamilia', array(
                                    'label' => 'Apellidos de la familia',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                )); ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $viviendaOptions = array(
                                    '' => 'Elegir',
                                    '1.Casa' => 'Casa',
                                    '4.Apartamento' => 'Apartamento',
                                    '5.Pieza' => 'Pieza',
                                    '3.Cuarto improvisado' => 'Cuarto improvisado',
                                    '5.Cuarto en inquilinato' => 'Cuarto en inquilinato',
                                    '10.Cuevas' => 'Cuevas',
                                    '11.En calle' => 'En calle, puente, rio, parque',
                                );
                                echo $this->Form->input('vivienda', array(
                                    'label' => 'Tipo de vivienda:',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'options' => $viviendaOptions
                                ));
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $estratoOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
                                echo $this->Form->input('estrato', array(
                                    'label' => 'Estrato:',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '',
                                    'type' => 'select',
                                    'options' => $estratoOptions
                                ));
                                ?>
                                <p class="help-block">Se sugiere revisar recibo de agua o luz de la residencia</p>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $numhabitantesOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => 'Mas de 7');
                                echo $this->Form->input('numerohabitantes', array(
                                    'label' => '¿Cuantas personas habitan en la vivienda?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'placeholder' => '',
                                    'options' => $numhabitantesOptions,
                                ));
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $numhogaresOptions = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6');
                                echo $this->Form->input('numerohogares', array(
                                    'label' => 'No. familias en la vivienda',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px',
                                    'options' => $numhogaresOptions
                                ));
                                ?>
                                <p class="help-block">Si todos comen de la misma olla se considera una sola
                                    familia</p>
                            </div>
                        </div>
                    </div>
                </div>


                <h2 class="subtitle-general-forms">Habitabilidad</h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">

                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionMaterialPared = array(
                                    '' => 'Elegir',
                                    '1.Bloque, cemento, ladrillo' => 'Bloque, cemento, ladrillo',
                                    '2.Tierra, arena, barro' => 'Tierra, arena, barro',
                                    '5.Madera' => 'Madera',
                                    '7.Material plastico' => 'Material plástico ',
                                    '7.Material Reciclado' => 'Material reciclado',
                                    '7.Lata, Lamina metal' => 'Lata, Lamina metal',

                                );
                                echo $this->Form->input('pared', array(
                                    'label' => '¿Cuál es el material predominante de las paredes?',
                                    'options' => $optionMaterialPared,
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'placeholder' => ""
                                ));
                                ?>
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 20px;">

                                <?php $optionParedes = array(
                                    '' => 'Elegir',
                                    'Buen estado' => 'Buen estado',
                                    'Descascaramiento, humedad' => 'Descascaramiento, humedad',
                                    'Estructura inestable' => 'Estructura inestable',

                                );
                                echo $this->Form->input('estadoparedes', array(
                                    'label' => '¿El estado de las paredes es?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionParedes,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionPiso = array(
                                    '' => 'Elegir',
                                    '3.Cemento, gravilla' => 'Cemento, gravilla',
                                    '3.Ceramica' => 'Ceramica',
                                    '1.Piso flotante' => 'Piso flotante',
                                    '5.Tierra' => 'Tierra',
                                    '4.Madera burda, tabla' => 'Madera burda, tabla',
                                    '3.Baldosa, ladrillo' => 'baldosa, ladrillo',

                                );
                                echo $this->Form->input('piso', array(
                                    'label' => '¿Cuál es el material predominante del piso de la vivienda?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionPiso,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionTecho = array(
                                    '' => 'Elegir',
                                    '1.Concreto' => 'Concreto',
                                    '4.Eternit' => 'Eternit',
                                    '2.Tejas de barro' => 'Tejas de barro',
                                    '4.Zinc' => 'Zinc',
                                    '6.Plastico' => 'Plástico',
                                    '7.Desecho' => 'Desechos (cartón, lata, tela, sacos, etc)',


                                );
                                echo $this->Form->input('techo', array(
                                    'label' => '¿Cuál es el material predominante del techo?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionTecho,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionEstadoTecho = array(
                                    '' => 'Elegir',
                                    'Buen estado' => 'Buen estado',
                                    'Agrietamiento, goteras o fisuras' => 'Agrietamiento, goteras o fisuras',

                                );
                                echo $this->Form->input('estadotecho', array(
                                    'label' => '¿Cuál es el estado en general del techo?',
                                    'class' => 'form-control',
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'type' => 'select',
                                    'options' => $optionEstadoTecho,

                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px;">
                                <?php
                                $optionDormitorio = array('' => 'Elegir', '1' => '1', '2' => '2', '3' => '3', '4' => '4');
                                echo $this->Form->input('dormitorios', array(
                                    'label' => '¿Cuantos cuartos se utilizan para dormir?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionDormitorio,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ));
                                ?>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 20px; margin-bottom: 30px;">
                                <?php $optionHacinamiento = array('' => 'Elegir', '1.Si' => 'Si', '2.No' => 'No');
                                echo $this->Form->input('hacinamiento', array(
                                    'label' => '¿En algunos de los dormitorios de la vivienda duermen tres o mas personas?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $optionHacinamiento,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'hacinamiento'
                                ));
                                ?>
                            </div>

                        </div>
                    </div>
                </div>


                <h2 class="subtitle-general-forms">Servicios y Riesgos de la vivienda </h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">

                            <div class="col-md-6" style="margin-top: 30px;">

                                <div>
                                    <span ></span>
                                    <label for="tipopoblacion" >Riesgos externos cerca a la
                                        vivienda</label>
                                    <p >*</p>

                                </div>
                                <?php
                                $externalRiskOptions = [
                                    '20.No se identifica' => 'No se identifica',
                                    '8.Malos olores' => 'Malos olores',
                                    '19.Iluminacion inadecuada' => 'Iluminación inadecuada',
                                    '8.Ventilación inadecuada' => 'Ventilación inadecuada',
                                    '3.Porquerizas' => 'Porquerizas',
                                    '4.Galpones' => 'Galpones',
                                    '5.Terrenos baldíos' => 'Terrenos baldíos',
                                    '7.Ruido' => 'Ruido',
                                    '10.Rellenos sanitarios, botaderos' => 'Rellenos sanitarios/botaderos',
                                    '17.Excesivo trafico' => 'Excesivo trafico',
                                ];
                                echo $this->Form->input('riesgoexterno', [
                                    'type' => 'select',
                                    'label' => false,
                                    'multiple' => true,
                                    'id' => 'riesgoexterno',
                                    'empty' => false,
                                    'error' => false, // No mostrar error aquí
                                    'options' => $externalRiskOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%'
                                ]);

                                if ($this->Form->error('riesgoexterno')) {
                                    echo  $this->Form->error('riesgoexterno');
                                }
                                ?>

                                
                            </div>


                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $yesNoOptions = [
                                    '' => 'Elegir',
                                    '1.Si' => 'Si',
                                    '2.No' => 'No',
                                ];
                                echo $this->Form->input('actividad', [
                                    'label' => '¿Hay Actividad productiva en la vivienda?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $yesNoOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>


                            <!-- Tipo de poblacion participante -->
                            <div class="col-md-6" style="margin-top: 30px;">
                                <div class="flex items-center mb-4">
                                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold"></span>
                                    <label for="tipopoblacion" class="font-semibold">Sitios de interés de fácil acceso
                                        desde vivienda</label>
                                    <p class="text-red-600">*</p>

                                </div>
                                <?php

                                $accessOptions = [
                                    '1.Transporte' => 'Transporte',
                                    '2.Espacios deportivos' => 'Espacios deportivos, recretativos',
                                    '3.Servicios Educativos' => 'Servicios Educativos',
                                    '4.Servicios Salud' => 'Servicios Salud',
                                    '5.Ninguno' => 'Ninguno'
                                ];

                                echo $this->Form->input(
                                    'acceso',
                                    [
                                        'type' => 'select',
                                        'label' => false,
                                        'multiple' => true,
                                        'id' => 'acceso',
                                        'class' => 'w-full',
                                        'empty' => false,
                                        'options' => $accessOptions,
                                        
                                        'style' => 'height:30px;  font-size: 15px ; width:100%' // No mostrar error aquí
                                    ]
                                );
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <div class="flex items-center mb-4">
                                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold"></span>
                                    <label for="tipopoblacion" class="font-semibold">Riesgo de accidente en la
                                        vivienda</label>
                                    <p class="text-red-600">*</p>

                                </div>
                                <?php
                                $accidentRiskOptions = [
                                    '11.Ninguno' => 'Ninguno',
                                    '1.Objetos cortantes ' => 'Objetos cortantes ',
                                    '2.Sustancias químicas_aseo a la vista' => 'Sustancias químicas_aseo a la vista',
                                    '3.Medicamentos a la vista' => 'Medicamentos a la vista',
                                    '4.Uso de Velas' => 'Uso de Velas',
                                    '5.Conexiones Electricas inadecuadas' => 'Conexiones Electricas inadecuadas',
                                    '8.Superficies resbaladizas' => 'Superficies resbaladizas',
                                    '10.Escaleras sin proteccion' => 'Escaleras sin protección',
                                ];
                                echo $this->Form->input('riesgo', [
                                    'type' => 'select',
                                    'label' => false,
                                    'multiple' => true,
                                    'id' => 'riesgo',
                                    'class' => 'w-full',
                                    'empty' => false,
                                    'options' => $accidentRiskOptions,
                                     // No mostrar error aquí
                                    'style' => 'height:30px;  font-size: 15px ; width:100%'
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $waterSupplyOptions = [
                                    '' => 'Elegir',
                                    '1.Acueducto Empopasto' => 'Acueducto Empopasto',
                                    '3.Acueducto Comunitario' => 'Acueducto Comunitario',
                                    '2.Agua envasada ' => 'agua envasada',
                                    '5.Carro tanque ' => 'Carro tanque',
                                    '8.Pozo sin bomba, aljibe, jagüey o barreno' => 'Pozo sin bomba, aljibe, jagüey o barreno',
                                    '10.Río, quebrada, manantial o nacimiento' => 'Río, quebrada, manantial o nacimiento',
                                    '11.Aguas lluvias' => 'Aguas lluvias',

                                ];
                                echo $this->Form->input('aguaservicio', [
                                    'label' => '¿Cuál es la principal fuente de abastecimiento de agua para consumo?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $waterSupplyOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $excretaDisposalOptions = [
                                    '' => 'Elegir',
                                    '1.Inodoro conectado a alcantarillado' => 'Inodoro conectado a alcantarillado',
                                    '2.Inodoro sin conexion a alcantarillado' => 'Inodoro sin conexion a alcantarillado',
                                    '2.Pozo séptico' => 'Pozo séptico',
                                    '7.Campo abierto' => 'Campo abierto',
                                    '8.Basenilla, bolsas' => 'Basenilla, Bolsas',
                                ];
                                echo $this->Form->input('diposicionexcretas', [
                                    'label' => 'Disposición de excretas en la vivienda',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $excretaDisposalOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $domesticWaterOptions = [
                                    '' => 'Elegir',
                                    '1.Conexión alcantarillado' => 'Conexión alcantarillado',
                                    '5.Fuente hídrica ' => 'Fuente hídrica',
                                    '6.Campo Abierto ' => 'Campo Abierto',
                                ];
                                echo $this->Form->input('aguaresiduales', [
                                    'label' => 'Aguas residuales domésticas',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $domesticWaterOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $garbageDisposalOptions = [
                                    '' => 'Elegir',
                                    '1.Recolección por Emas' => 'Recolección por Empresa de aseo',
                                    '3.Quema a campo abierto' => 'Quema a campo abierto',
                                    '5.Disposición a campo abierto' => 'Disposición a campo abierto',
                                ];
                                echo $this->Form->input('basura', [
                                    'label' => 'Disposición final de basura',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $garbageDisposalOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $recyclingOptions = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                    'ocasionalmente' => 'Ocasionalmente',

                                ];
                                echo $this->Form->input('reciclaje', [
                                    'label' => '¿Se realiza el proceso de separación de los residuos en la fuente?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $recyclingOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px; margin-bottom: 30px;">

                                <div class="flex items-center mb-4">
                                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold"></span>
                                    <label for="tipopoblacion" class="font-semibold">Presencia de vectores en la
                                        vivienda</label>
                                    <p class="text-red-600">*</p>

                                </div>
                                <?php
                                $vectoresOption = [
                                    '2.No' => 'No',
                                    '1.Moscos' => 'Moscos',
                                    '1.Zancudos' => 'Zancudos',
                                    '1.Pulgas' => 'Pulgas',
                                    '1.Piojos' => 'Piojos',
                                    '1.Ratones' => 'Ratones',
                                    '1.Cucarachas' => 'Cucarachas',
                                ];
                                echo $this->Form->input('vector', [
                                    'type' => 'select',
                                    'label' => false,
                                    'multiple' => true,
                                    'id' => 'vector',
                                    'class' => 'w-full',
                                    'empty' => false,
                                    'options' => $vectoresOption,
                                     // No mostrar error aquí
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="subtitle-general-forms">Mascotas o
                    animales de crianza en el hogar </h2>
                <hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125);">

                <div class="grow justify-content-center" display="none" style="margin-top:20px">
                    <div class="card col-sm-12" style=" font-size:15px;  border:1.5px solid rgba(0,0,0,.125);">

                        <div class="form-group row">

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                $numMascotaOption = [
                                    '' => 'Elegir',
                                    '0' => '0',
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5 y mas',

                                ];
                                echo $this->Form->input('numeroGatos', [
                                    'label' => '¿Cuantos Gatos tiene?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $numMascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('numeroPerros', [
                                    'label' => '¿Cuantos Perros tiene?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $numMascotaOption,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">

                                <?php
                                $cuidadoMascotaOptions = [
                                    '' => 'Elegir',
                                    'Si' => 'Si',
                                    'No' => 'No',
                                ];
                                echo $this->Form->input('desparasitamascotas', [
                                    'label' => '¿Se desparasita a perros o gatos?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'desparasitacion'
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('vacunamascotas', [
                                    'label' => '¿Se ha vacunado a perros o gatos en el ultimo año?',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' =>  $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100%',
                                    'id' => 'vacunacion',
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                <div class="flex items-center mb-4">
                                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold"></span>
                                    <label for="tipopoblacion" class="font-semibold">¿Tienen animales de
                                        producción?</label>
                                    <p class="text-red-600">*</p>

                                </div>
                                <?php
                                $mascotaOption = [
                                    'No' => 'No',
                                    'Aves' => 'Aves',
                                    'Cerdos' => 'Cerdos',
                                    'Cuyes_conejos' => 'Cuyes/conejos'
                                ];
                                echo $this->Form->input('mascotas', [
                                    'type' => 'select',
                                    'label' => false,
                                    'multiple' => true,
                                    'id' => 'mascotas',
                                    'class' => 'w-full',
                                    'empty' => false,
                                    'options' => $mascotaOption,
                                     // No mostrar error aquí
                                    'style' => 'height:30px;  font-size: 15px ; width:100%'
                                ]);
                                ?>
                            </div>

                            <div class="col-md-6" style="margin-top: 30px;">
                                <?php
                                echo $this->Form->input('cuidadomascotas', [
                                    'label' => '¿Las excretas de los animales de compañía se recogen y disponen adecuadamente? ',
                                    'class' => 'form-control',
                                    'type' => 'select',
                                    'options' => $cuidadoMascotaOptions,
                                    'style' => 'height:30px;  font-size: 15px ; width:100% ;margin-bottom: 30px;',
                                ]);
                                ?>
                            </div>

                        </div>
                    </div>


                    <?php //echo $this->Form->end(__('Guardar y Listar')); 
                    ?>
                    <?php echo $this->Form->submit('Guardar y continuar', [
                        'name' => 'btn',
                        'class' => 'my-button',
                    ]); ?>
                    <?php echo $this->Form->submit('Guardar y finalizar', [
                        'name' => 'btn',
                        'class' => 'my-button',
                        'style' => 'width:185px'
                    ]); ?>







            </fieldset>
        </div>
    </div>



    <script type="text/javascript">
    // Mostrar el modal al cargar la página
   

    document.addEventListener("DOMContentLoaded", () => {
       
        const choices_tipopoblacion = new Choices("#acceso", {
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
            placeholderValue: "Seleccione los sitios de facil acceso",
        });

        const choices_riesgoexterno = new Choices("#riesgoexterno", {
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
            placeholderValue: "Seleccione los riesgos externos",
        });
        const choices_riesgo = new Choices("#riesgo", {
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
            placeholderValue: "Seleccione los riesgos en la vivienda",
        });

        const choices_mascotas = new Choices("#mascotas", {
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
            placeholderValue: "Otros animales de crianza",
        });

        const choices_vector = new Choices("#vector", {
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
            placeholderValue: "Seleccione los vectores presentes en la vivienda",

        });
        // Aplicar estilos con Tailwind
        const inner = document.querySelector('.choices__inner');
        if (inner) {
            inner.classList.add(
                'bg-white', 'border', 'bordelr-gray-300', 'rounded-lg',
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





    function agregarOpcionSeleccion() {
        $("#SociambientalUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");

    }


    $("#switch-label").change(function() {
        var switchValue = this.checked ? "si" : "no";
        mostrar(switchValue);
    });

    $("#switch-label-initial").change(function() {
        var switchValue = this.checked ? "yes" : "nope";
        mostrar(switchValue);
    });


    function mostrar(id) {
        if (id == "si") {
            $("#si").show();
            $("#no").hide();

        } else if (id == "no") {
            $("#si").hide();
            $("#no").show();

        }

        if (id == "yes") {
            $("#yes").show();
            $("#nope").hide();
            $("#validacion").val("si acepto");

        } else if (id == "nope") {
            $("#yes").hide();
            $("#nope").show();
            $("#validacion").val(" ");

        }
        }

    </script>