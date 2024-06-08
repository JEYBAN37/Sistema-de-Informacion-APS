<?php $this->layout = 'default_familia' ?>
<?php
?>
<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco"
        style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Viviendas sin visita
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
                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Dirección'); ?></th>
                                        <th><?php echo $this->Paginator->sort('ubicación'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Dirección'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Estado Visita'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Nombre habitante'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Tipo documento'); ?></th>
                                        <th><?php echo $this->Paginator->sort('N°. documento'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Observación'); ?></th>
                                        <th><?php echo $this->Paginator->sort('Responsable'); ?></th>
                                        <th><?php echo $this->Paginator->sort('fecha'); ?></th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($visitasnegadas as $visitasnegada) : ?>
                                    <tr class="gradeA odd">

                                        <td><?php echo ($visitasnegada['Visitasnegada']['id']) ?></td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['direccion']); ?></td>
                                        <td>
                                            <?php echo ($visitasnegada['Ubicacion']['microterritorio']); ?>
                                        </td>
                                        <td>
                                            <?php echo ($visitasnegada['Visitasnegada']['direccion']); ?>
                                        </td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['estadocasa']); ?></td>



                                        <td><?php echo ($visitasnegada['Visitasnegada']['nombreshabitante']); ?></td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['tipodocumento']); ?></td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['numerodocumento']); ?></td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['telefono']); ?></td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['observacion']); ?></td>
                                        <td>
                                            <?php echo ($visitasnegada['Responsable']['encuestador']); ?>
                                        </td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['fecha']); ?></td>
                                        <td class="actions">
                                            <div class="btn-group">
                                                <button type="button" class="my-button" data-toggle="dropdown">
                                                    <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">

                                                    <li><?php echo $this->Html->link(('Ver'),
																array('action' => 'view',  $visitasnegada['Visitasnegada']['id']),
																array(
																	'style' => 'font-size: 14px;'
																)
															); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Editar'),
																array('action' => 'edit',  $visitasnegada['Visitasnegada']['id']),
																array(
																	'style' => 'font-size: 14px;'
																)
															); ?>
                                                    </li>
                                                    <li><?php echo $this->Form->postLink(
																__('Borrar'),
																array('action' => 'delete', $visitasnegada['id']),
																array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
																__('Esta seguro de eliminar el registro # %s?', $visitasnegada['id'])
															); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
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
            "pageLength": 5,
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