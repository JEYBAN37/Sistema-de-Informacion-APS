<?php $this->layout = 'default_familia' ?>

<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco"
        style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Listado de Infantes
    </h1>
</div>

<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <?php echo ('Acciones'); ?> <span class="caret"></span>
            <?php echo $this->Html->link(('Home'), array('controller' => 'familias', 'action' => 'index')); ?>

            <?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?>

            </ul>
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
                                        <th><?php echo $this->Paginator->sort('familia_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('familia'); ?></th>
                                        <th><?php echo $this->Paginator->sort('tipodocumento'); ?></th>
                                        <th><?php echo $this->Paginator->sort('numerodoc'); ?></th>
                                        <th><?php echo $this->Paginator->sort('primerapellido'); ?></th>
                                        <th><?php echo $this->Paginator->sort('segundoapellido'); ?></th>
                                        <th><?php echo $this->Paginator->sort('primernombre'); ?></th>
                                        <th><?php echo $this->Paginator->sort('segundonombre'); ?></th>
                                        <th><?php echo $this->Paginator->sort('fechanac'); ?></th>
                                        <th><?php echo $this->Paginator->sort('edad'); ?></th>
                                        <th><?php echo $this->Paginator->sort('sexo'); ?></th>
                                        <th><?php echo $this->Paginator->sort('aseguradora'); ?></th>
                                        <th><?php echo $this->Paginator->sort('regimen'); ?></th>
                                        <th><?php echo $this->Paginator->sort('estadoafiliacion'); ?></th>
                                        <th><?php echo $this->Paginator->sort('telefono'); ?></th>
                                        <th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
                                        <th><?php echo $this->Paginator->sort('canalizaciondos'); ?></th>
                                        <th><?php echo $this->Paginator->sort('canalizaciontres'); ?></th>
                                        <th><?php echo $this->Paginator->sort('educacion'); ?></th>
                                        <th><?php echo $this->Paginator->sort('canalizacion_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('estadocanalizacion'); ?></th>
                                        <th><?php echo $this->Paginator->sort('observacioncanalizacion'); ?></th>
                                        <th><?php echo $this->Paginator->sort('fechaRegistro'); ?></th>
                                        <th><?php echo $this->Paginator->sort('registroCanalizacion'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>

                                    </tr>
                                    < /thead>
                                <tbody>
                                    <?php foreach ($adolescencias as $adolescencia) : ?>
                                        <tr class="gradeA odd">
                                            <td class="sorting_1">
                                                <?php echo h($adolescencia['Adolescencia']['id']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Familia']['id']); ?>&nbsp;</td>

                                            <td>
                                                <?php echo $this->Html->link($adolescencia['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $adolescencia['Familia']['id'])); ?>
                                            </td>

                                            <td><?php echo h($adolescencia['Adolescencia']['tipodocumento']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['numerodoc']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['primerapellido']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['segundoapellido']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($adolescencia['Adolescencia']['primernombre']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['segundonombre']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['fechanac']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['edad']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['sexo']); ?>&nbsp;</td>

                                            <td><?php echo h($adolescencia['Adolescencia']['aseguradora']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['regimen']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['estadoafiliacion']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($adolescencia['Adolescencia']['telefono']); ?>&nbsp;</td>

                                            <td><?php echo h($adolescencia['Adolescencia']['canalizacionuno']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($adolescencia['Adolescencia']['canalizaciondos']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($adolescencia['Adolescencia']['canalizaciontres']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($adolescencia['Adolescencia']['educacion']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($adolescencia['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $adolescencia['Canalizacion']['id'])); ?>
                                            </td>

                                            <td><?php echo h($adolescencia['Adolescencia']['estadocanalizacion']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($adolescencia['Adolescencia']['observacioncanalizacion']); ?>&nbsp;
                                            </td>
                                            <td><?php echo h($adolescencia['Adolescencia']['fechaRegistro']); ?>&nbsp;</td>
                                            <td><?php echo h($adolescencia['Adolescencia']['registroCanalizacion']); ?>&nbsp;
                                            </td>
                                            <td class="actions">

                                                <div class="btn-group">
                                                    <button type="button" class="my-button" data-toggle="dropdown">
                                                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><?php echo $this->Html->link(('Ver registro'),
                                                                array('action' => 'view', $adolescencia['Adolescencia']['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>

                                                        </li>
                                                        <li><?php echo $this->Html->link(('Editar'),
                                                                array('action' => 'edit',   $adolescencia['Adolescencia']['id']),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro que deseas editar la información del menor " .   $adolescencia['Adolescencia']['primernombre'] . " " .   $adolescencia['Adolescencia']['primerapellido'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                        </li>
                                                        <li><?php echo $this->Html->link(('Obsevacion canalización'),
                                                                array('action' => 'edit1',   $adolescencia['Adolescencia']['id']),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar una observacion del menor " .   $adolescencia['Adolescencia']['primernombre'] . " " .   $adolescencia['Adolescencia']['primerapellido'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
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


            </div>

            <script>
                $(document).ready(function() {
                    $('#dataTables-example').DataTable({
                        "pagingType": "simple",
                        "pageLength": 4,
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

                $(document).ready(function() {
                    $('#dataTables-f').DataTable({
                        "pagingType": "simple",
                        "pageLength": 4,
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

                $(document).ready(function() {
                    $('#dataTables-a').DataTable({
                        "pagingType": "simple",
                        "pageLength": 4,
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

                $(document).ready(function() {
                    $('#dataTables-j').DataTable({
                        "pagingType": "simple",
                        "pageLength": 4,
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