<?php $this->layout = 'default_familia' ?>

<style>
    .btn-group {
        position: relative;
        display: inline-block;
    }

    .my-buttonOne {
        background-color: #3366CC;
        display: flex;
        justify-items: center;
        align-items: center;
        color: white;
        padding: 8px;
        font-size: 16px;
        border: #3366CC;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    .caret {
        border-top: 5px solid white;
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        margin-left: 5px;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-menu li {
        padding: 5px;
        text-decoration: none;
        display: block;
    }

    .dropdown-menu li a {
        color: black;
        text-decoration: none;
        font-size: 14px;
    }

    .dropdown-menu li:hover {
        background-color: #f1f1f1;
    }

    .btn-group.show .dropdown-menu {
        display: block;
    }
</style>
<?php
?>
<div class="col-12" style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco" style=" text-align:center; color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Viviendas sin visita
    </h1>

    <div style="margin: 20px;">

        <!-- Formulario para filtrar registros -->
        <?php echo $this->Form->create('Visitasnegada', array('url' => array('action' => 'index'))); ?>

        <div class="d-flex row">
            <div class="col-md-6" style="margin-bottom: -2px;">
                <?php echo $this->Form->label('encuestador_id', 'Nombre del Encuestador', ['class' => 'form-label']); ?>
                <?php echo $this->Form->select('encuestador_id', $responsablesList, [
                    'class' => 'form-control select-search',
                    'style' => 'height: 30px; font-size: 15px; width: 100%',
                    'placeholder' => 'Seleccionar...',
                ]); ?>
            </div>

            <div class="col-md-6" style="margin-bottom: -2px;">
                <?php echo $this->Form->label('ubicacion_id', 'Microterritorio', ['class' => 'form-label']); ?>
                <?php echo $this->Form->select('ubicacion_id', $ubicacionesList, [
                    'class' => 'form-control select-search',
                    'style' => 'height: 50px; font-size: 15px; width: 100%;',
                ]); ?>
            </div>

            <div class="col-md-12 text-md-end" style="margin-bottom: -20px;">
                <button type="submit" class="my-button">Buscar</button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>

    <div class="row" style="margin: 5px;">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="table-responsive" style="margin-top: 10px; ">
                    <div style="margin: 20px;">
                        <div>
                            <div>
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Opciones</th>
                                            <th>Dirección</th>
                                            <th>Observación</th>
                                            <th>Estado Visita</th>
                                            <th>Nombre habitante</th>
                                            <th>Microterritorio</th>
                                            <th>Responsable</th>
                                            <th>fecha</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($visitasNegadas as $visitasnegada) : ?>
                                            <tr class="gradeA odd">

                                                <td><?php echo ($visitasnegada['Visitasnegada']['id']) ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="my-buttonOne" onclick="toggleDropdown(event)">
                                                            Acciones <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><?php echo $this->Html->link('Ver', array('action' => 'view', $visitasnegada['Visitasnegada']['id'])); ?></li>
                                                            <li><?php echo $this->Html->link('Editar', array('action' => 'edit', $visitasnegada['Visitasnegada']['id'])); ?></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><?php echo ($visitasnegada['Visitasnegada']['direccion']); ?></td>
                                                <td><?php echo ($visitasnegada['Visitasnegada']['observacion']); ?></td>
                                                <td><?php echo ($visitasnegada['Visitasnegada']['estadocasa']); ?></td>
                                                <td><?php echo ($visitasnegada['Visitasnegada']['nombreshabitante']); ?></td>
                                                <td> <?php echo ($visitasnegada['Ubicacion']['microterritorio']); ?></td>
                                                <td><?php echo ($visitasnegada['Responsable']['nombres']); ?></td>
                                                <td><?php echo ($visitasnegada['Visitasnegada']['fecha']); ?></td>
                                            </tr>


                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <script>
            function toggleDropdown(event) {
                event.stopPropagation();
                var dropdown = event.currentTarget.parentElement;
                dropdown.classList.toggle('show');
            }

            window.onclick = function(event) {
                if (!event.target.matches('.my-button')) {
                    var dropdowns = document.getElementsByClassName('btn-group');
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
            $(document).ready(function() {
                // Inicializar Select2
                $('.select-search').select2();

                // Agregar opciones iniciales y cargar selección desde localStorage
                agregarOpcionSeleccion();
                cargarSeleccionDesdeLocalStorage();

                // Agregar evento para guardar selección en localStorage cuando cambia el valor
                $('.select-search').on('change', function() {
                    guardarSeleccionLocalStorage();
                });

                $('#dataTables-example').DataTable({
                    "pagingType": "simple",
                    "pageLength": 10,
                    responsive: true,
                    dom: 'Bfrtip',
                    language: {
                        searchBuilder: {
                            button: 'Filter',
                        }
                    },
                    buttons: [
                        'pageLength',
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'colvis',
                        'searchBuilder'
                    ]

                });

            });

            function fnExcelReport() {
                var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
                var textRange;
                var j = 0;
                tab = document.getElementById('dataTables-example'); // id of table

                for (j = 0; j < tab.rows.length; j++) {
                    tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
                }

                tab_text = tab_text + "</table>";

                tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
                tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
                tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

                var ua = window.navigator.userAgent;
                var msie = ua.indexOf("MSIE ");

                if (msie > 0 || !!navigator.userAgent.matc(/Trident.*rv\:11\./)) // If Internet Explorer
                {
                    txtArea1.document.open("txt/html", "replace");
                    txtArea1.document.write(tab_text);
                    txtArea1.document.close();
                    txtArea1.focus();
                    sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
                } else
                    sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

                //return (sa);
            }

            function agregarOpcionSeleccion() {
                // Para el select con id FamiliaEncuestadorId
                var familiaEncuestadorId = $("#FamiliaEncuestadorId");
                if (!familiaEncuestadorId.find("option[value='0']").length) {
                    familiaEncuestadorId.prepend("<option value='0'>Selecciona una opción</option>");
                }

                // Para el select con id SociambientalResponsableId
                var sociambientalResponsableId = $("#SociambientalResponsableId");
                if (!sociambientalResponsableId.find("option[value='']").length) {
                    sociambientalResponsableId.prepend("<option value=''>Selecciona una opción</option>");
                }
            }

            function cargarSeleccionDesdeLocalStorage() {
                // Obtener valores guardados en localStorage
                var familiaEncuestadorIdValue = localStorage.getItem('familiaEncuestadorId');
                var sociambientalResponsableIdValue = localStorage.getItem('sociambientalResponsableId');

                // Establecer la selección en los selectores si hay valores en localStorage
                if (familiaEncuestadorIdValue !== null) {
                    $("#FamiliaEncuestadorId").val(familiaEncuestadorIdValue).trigger('change');
                }
                if (sociambientalResponsableIdValue !== null) {
                    $("#SociambientalResponsableId").val(sociambientalResponsableIdValue).trigger('change');
                }
            }

            function guardarSeleccionLocalStorage() {
                // Obtener valor seleccionado de FamiliaEncuestadorId y SociambientalResponsableId
                var familiaEncuestadorIdValue = $("#FamiliaEncuestadorId").val();
                var sociambientalResponsableIdValue = $("#SociambientalResponsableId").val();
                console.log(familiaEncuestadorIdValue)
                // Guardar en localStorage
                localStorage.setItem('familiaEncuestadorId', familiaEncuestadorIdValue);
                localStorage.setItem('sociambientalResponsableId', sociambientalResponsableIdValue);
            }
        </script>


        <?php
        $this->Html->css([
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',

        ], ['block' => 'css']);
        $this->Html->script([
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
            'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']);
        ?>

        <style>
            /* Personaliza el botón desplegable en DataTables Responsive */
            table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control:before,
            table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control:before {

                left: 15px;
            }
        </style>