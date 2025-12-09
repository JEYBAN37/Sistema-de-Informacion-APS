<?php $this->layout = 'default_familia' ?>
<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco"
        style="color: #3366CC;margin-top: 20px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Atención Primaria en Salud
    </h1>
</div>



<div style="margin: 20px;">

    <!-- Formulario para filtrar registros -->
    <?php echo $this->Form->create('Sociambiental', array('url' => array('action' => 'viewFilter' ))); ?>

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


<?php echo $this->Form->end(); ?>

    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <!--div class="panel-heading">
                <p>Anexo tecnico PIC-2020</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?>
                        </li>
                        <li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:window.print();"> Imprimir</a> </li>
                        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
                        < <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> >
            </ul>
            </div>

         </div-->

            </ul>
            <!-- /.panel-heading -->
            <div class="table-responsive">
                <div style="margin: 20px;">
                    <div class="row">
                        <div class="col-sm-12">
                        <table width="100%" class="table table-striped table-bordered " id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="sorting_1">id</th>
                                        <th>Opciones</th>
                                        <th>Territorio</th>
                                        <th>Direccion</th>
                                        <th>Apellidos de la Familia</th>
                                        <th>Encuestador</th>
                                        <th>N° de Hogares</th>
                                        <th>N° de habitantes</th>
                                        <th>Fecha de Encuesta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sociambientals as $sociambiental) : ?>
                                        <tr class="gradeA odd">

                                            <td><?php echo ($sociambiental['Sociambiental']['id']); ?>&nbsp;</td>
                                            <td class="actions">
                                                <div class="btn-group">
                                                    <button type="button" class="my-button" data-toggle="dropdown">
                                                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">

                                                        <li><?php echo $this->Html->link(('Registro Familias'),
                                                                    array('action' => 'view', $sociambiental['Sociambiental']['id']),
                                                                    array(
                                                                        'style' => 'font-size: 14px;'
                                                                    )
                                                                ); ?>
														</li>
                                                        <li><?php echo $this->Html->link(('Editar Datos Vivienda'),
                                                                array('action' => 'edit',  $sociambiental['Sociambiental']['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                        </li>
                                                        <li><?php echo $this->Html->link(('Agregar Familia'),
                                                                array('controller' => 'familias', 'action' => 'add?hogar=' . $sociambiental['Sociambiental']['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><?php echo ($sociambiental['Ubicacion']['microterritorio']); ?>&nbsp;</td>
                                            <td><?php echo ($sociambiental['Sociambiental']['direccion']); ?>&nbsp;</td>
                                            <td><?php echo ($sociambiental['Sociambiental']['apellidosfamilia']); ?>&nbsp;
                                            </td>
                                            <td><?php echo ($sociambiental['Responsable']['nombres']); ?>&nbsp;</td>



                                            <td><?php echo ($sociambiental['Sociambiental']['numerohogares']); ?>&nbsp;
                                            </td>
                                            <td><?php echo ($sociambiental['Sociambiental']['numerohabitantes']); ?>&nbsp;
                                            </td>
                                            <td><?php echo $this->Time->format('d-m-Y h:i A', ($sociambiental['Sociambiental']['fecha'])); ?>
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
    <!-- /.col-lg-12 -->
</div>

<script>
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