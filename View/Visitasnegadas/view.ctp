<?php $this->layout = 'default_familia' ?>
<div class="row" style="margin:1px;">
    <div class="dataTable_wrapper">
        <div class="row" style="justify-content: center;">
            <div class=" col-sm-12">
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <div class="dataTable_wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                        <tr>
                                        <tr>
                                            <td rowspan="4"><img src="../../img/escudosms.png" width="100" height="auto"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Atencion Primaria En Salud</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">Nombre de Formato : No Encuestados</td>
                                        </tr>
                                        <td>Vigencia 00-00-2023</td>
                                        <td>Version 1.0</td>
                                        <td>Codigo ID No Encuestados </td>
                                        <td><?php echo ($visitasnegada['Visitasnegada']['id']); ?></td>


                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="row" style="justify-content: center;">
                                <div class="col-sm-12">

                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <td colspan="6" class="title">Responsable</td>
                                            <td colspan="6">
											<?php echo $this->Html->link($visitasnegada['Responsable']['encuestador'], array('controller' => 'responsables', 'action' => 'view', $visitasnegada['Responsable']['id'])); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="12" style="text-align: center;" class="title">Datos Generales</td>

                                        </tr>
                                        <tr>
                                            <td colspan="3" class="title">Ubicacion</td>
                                            <td colspan="3">
											<?php echo $this->Html->link($visitasnegada['Ubicacion']['microterritorio'], array('controller' => 'ubicaciones', 'action' => 'view', $visitasnegada['Ubicacion']['id'])); ?>
                                            </td>
											<td colspan="3" class="title">Direccion</td>
                                            <td colspan="3"> <?php echo ($visitasnegada['Visitasnegada']['direccion']); ?>
											</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="title">Nombre de la Persona Presente</td>
                                            <td colspan="10"> <?php echo ($visitasnegada['Visitasnegada']['nombreshabitante']); ?>

                                            </td>

                                        </tr>

                                        <tr>
                                            <td colspan="3" class="title">Tipo de Documento</td>
                                            <td colspan="3">
											<?php echo ($visitasnegada['Visitasnegada']['tipodocumento']); ?>
                                            </td>
                                            <td colspan="3" class="title">Numero de Documento</td>
                                            <td colspan="3">
											<?php echo ($visitasnegada['Visitasnegada']['numerodocumento']); ?>

                                            </td>

                                        </tr>

                                        <tr>
                                            <td colspan="3" class="title">Numero de Telefono</td>
                                            <td colspan="3">
											<?php echo ($visitasnegada['Visitasnegada']['telefono']); ?>
                                            </td>
                                            <td colspan="3" class="title">Fecha de Registro</td>
                                            <td colspan="3">
											<?php echo ($visitasnegada['Visitasnegada']['fecha']); ?>                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="title">Observacion</td>
                                            <td colspan="12">
											<?php echo ($visitasnegada['Visitasnegada']['observacion']); ?>                                            </td>


                                        </tr>

                                
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                        <button class="my-button" onclick="window.print();">Imprimir</button>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
            <thead>
                </table>
        </div>
    </div>
</div>




</div>



<?php
/*$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://code.jquery.com/jquery-3.2.1.min.js',
    'https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);*/
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('textarea').eac(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });
</script>


