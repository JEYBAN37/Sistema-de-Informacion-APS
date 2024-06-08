<?php $this->layout = 'default_familia' ?>

<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Listado Registros Socioambientales
    </h1>
</div>

<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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

                                                        <!--li><?php echo $this->Html->link(('Ver datos Socioambientales'),
                                                                    array('action' => 'view', $sociambiental['Sociambiental']['id']),
                                                                    array(
                                                                        'style' => 'font-size: 14px;'
                                                                    )
                                                                ); ?>
														</li-->
                                                        <li><?php echo $this->Html->link(('Editar datos Socioambientales'),
                                                                array('action' => 'edit',  $sociambiental['Sociambiental']['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                        </li>
                                                        <li><?php echo $this->Html->link(('Agregar Hogar'),
                                                                array('controller' => 'familias', 'action' => 'add?hogar=' . $sociambiental['Sociambiental']['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><?php echo h($sociambiental['Ubicacion']['microterritorio']); ?>&nbsp;</td>
                                            <td><?php echo h($sociambiental['Sociambiental']['direccion']); ?>&nbsp;</td>
                                            <td><?php echo h($sociambiental['Sociambiental']['apellidosfamilia']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($sociambiental['Responsable']['nombres']); ?>&nbsp;</td>



                                            <td><?php echo h($sociambiental['Sociambiental']['numerohogares']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($sociambiental['Sociambiental']['numerohabitantes']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($sociambiental['Sociambiental']['fecha']); ?>&nbsp;</td>
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
        $(document).ready(function() {
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
    </script>

    <style>
        /* Personaliza el botón desplegable en DataTables Responsive */
        table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control:before {

            left: 14px;
        }
    </style>