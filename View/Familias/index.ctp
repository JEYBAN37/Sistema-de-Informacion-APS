<?php $this->layout = 'default_familia' ?>
<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco"
        style="color: #3366CC;margin-top: 20px;font-size: 3.5rem ;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Atención Primaria en Salud
    </h1>
</div>



<div class="row" style="margin: 5px;">
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
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                                <thead>
                                    <tr>

                                        <th>id</th>
                                        <th>Encuestador</th>
                                        <th>Familia</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Rol famliar</th>
                                        <th>celular</th>
                                        <!--Dato de tabla sociambiental junto con direccion , apellidos familia,encuestador,fecha y numero familia :) -->
                                        <th>Ubicacion</th>
                                        <th>Direccion</th>
                                        <th>Apartamento</th>
                                        <th>N° de hogar</th>
                                        <th>fecha</th>
                                        <th>Opciones</th>
                                        <th>id_Socioambiental</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Asumiendo que ambos arrays tienen la misma longitud
                                    $numFamilias = count($familias);
                                    for ($i = 0; $i < $numFamilias; $i++) :
                                        $familia = $familias[$i];
                                        $responsable = $responsables[$i];
                                        $socioambiental = $sociambientals[$i];
                                        $ubicacion = $ubicaciones[$i];
                                    ?>
                                    <tr>

                                        <td><?php echo $familia['Familia']['id']; ?></td>
                                        <td><?php echo $responsable['Responsable']['nombres']; ?></td>
                                        <td><?php echo $this->Html->link($socioambiental['Sociambiental']['apellidosfamilia'], array('controller' => 'sociambientals', 'action' => 'view', $socioambiental['Sociambiental']['id'])); ?>
                                        <td><?php echo $familia['Familia']['nombres']; ?></td>
                                        <td><?php echo $familia['Familia']['apellidos']; ?></td>
                                        <td><?php echo $familia['Familia']['rol']; ?></td>
                                        <td><?php echo $familia['Familia']['celular']; ?></td>
                                        <td><?php echo $ubicacion['Ubicacion']['microterritorio']; ?></td>
                                        <td><?php echo $socioambiental['Sociambiental']['direccion']; ?></td>
                                        <td><?php echo $socioambiental['Sociambiental']['apartamento']; ?></td>

                                        <td><?php echo $familia['Familia']['hogar']; ?></td>

                                        <td><?php echo $this->Time->format('d-m-Y h:i A', ($socioambiental['Sociambiental']['fecha'])); ?>
                                        <td class="actions">
                                            <div class="btn-group">
                                                <button type="button" class="my-button" data-toggle="dropdown">
                                                    <?php echo ('Acciones'); ?> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><?php echo $this->Html->link(('Ver famlia'),
                                                                array('action' => 'view', $familia['Familia']['id']),
                                                                array(
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Editar hogar'),
                                                                array('action' => 'edit',  $familia['Familia']['id']),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro que deseas editar la información del hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Agregar hogar'),
                                                                array('controller' => 'familias', 'action' => 'add?hogar=' . $socioambiental['Sociambiental']['id']),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un nuevo hogar en la familia " . $socioambiental['Sociambiental']['apellidosfamilia'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li>
                                                        <?php
                                                            echo $this->Html->link(('Agregar menor de 2 años'),
                                                                array(
                                                                    'controller' => 'Primerainfancias',
                                                                    'action' => 'add?primerainfancia=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                    </li>



                                                    <li><?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
                                                                array(
                                                                    'controller' => 'Primerainfancias',
                                                                    'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )

                                                            ); ?>
                                                    </li>
                                                    <li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
                                                                array(
                                                                    'controller' => 'Infantils',
                                                                    'action' => 'add?infantils=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li>
                                                        <?php echo $this->Html->link(('Agregar menor de 12 a 17 años'),
                                                                array(
                                                                    'controller' => 'Adolescencias',
                                                                    'action' => 'add?adolescencias=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] . " " .   $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>

                                                    <li><?php echo $this->Html->link(('Agregar adulto mayor de 18 años'),
                                                                array(
                                                                    'controller' => 'Juventudadultos',
                                                                    'action' => 'add?juventudadultos=' . $familia['Familia']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de agregar un adulto mayor de 18 en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            ); ?>
                                                    </li>
                                                    <li>
                                                        <?php
                                                            echo $this->Html->link(
                                                                'Editar inf.sociambiental',
                                                                array(
                                                                    'controller' => 'sociambientals',
                                                                    'action' => 'edit',
                                                                    $socioambiental['Sociambiental']['id']
                                                                ),
                                                                array(
                                                                    'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $socioambiental['Sociambiental']['apellidosfamilia'] . "?');",
                                                                    'style' => 'font-size: 14px;'
                                                                )
                                                            );
                                                            ?>
                                                    </li>


                                                </ul>
                                            </div>
                                        </td>
                                        <td><?php echo $familia['Sociambiental']['id']; ?></td>
                                    </tr>
                                    <?php endfor; ?>


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

    left: 15px;
}
</style>