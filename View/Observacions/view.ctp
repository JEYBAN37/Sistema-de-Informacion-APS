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
                                            <td colspan="6">Nombre de Formato : Observaciones</td>
                                        </tr>
                                        <td>Vigencia 00-00-2023</td>
                                        <td>Version 1.0</td>
                                        <td>Codigo ID Gestante</td>
                                        <td><?php echo ($observacion['Observacion']['id']); ?></td>


                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="row" style="justify-content: center;">
                                <div class="col-sm-12">

                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <td colspan="6" class="title">Familia Asociada</td>
                                            <td colspan="6">
                                                <?php echo ($observacion['Observacion']['familia_id']); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="12" style="text-align: center;" class="title">Canalizaciones</td>

                                        </tr>
                                        <tr>
                                            <td colspan="2" class="title">Primera</td>
                                            <td colspan="10">
                                                <?php echo ($observacion['Observacion']['canalizacionuno']); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="title">Segunda</td>
                                            <td colspan="10"> <?php echo ($observacion['Observacion']['canalizaciondos']); ?>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td colspan="2" class="title">Tercera</td>
                                            <td colspan="10">
                                                <?php echo ($observacion['Observacion']['canalizaciontres']); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="title">Estado</td>
                                            <td colspan="3">
                                                <?php echo ($observacion['Observacion']['estado']); ?>
                                            </td>
                                            <td colspan="3" class="title">Fecha de Seguimiento</td>
                                            <td colspan="3">
                                                <?php echo ($observacion['Observacion']['fechaseguimiento']); ?>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td colspan="3" class="title">Responsable</td>
                                            <td colspan="3">
                                                <?php echo ($observacion['Observacion']['responsable_id']); ?>
                                            </td>
                                            <td colspan="3" class="title">date</td>
                                            <td colspan="3">
                                                <?php echo ($observacion['Observacion']['date']); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="title">Observacion</td>
                                            <td colspan="12">
                                                <?php echo ($observacion['Observacion']['observacion']); ?>
                                            </td>


                                        </tr>

                                        <tr>
                                            <td colspan="3" class="title">Direccion</td>
                                            <td colspan="3">
                                                <?php echo ($observacion['Observacion']['direcomapa']); ?></td>
                                            <td colspan="3" class="title">Ecomapa</td>
                                            <td colspan="3">
                                                <?php echo ($observacion['Observacion']['ecomapa']); ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="title">Familiograma</td>
                                            <td colspan="4">
                                                <?php echo ($observacion['Observacion']['familiograma']); ?>
                                            </td>
                                            <td colspan="2" class="title">link</td>
                                            <td colspan="4">
                                                <?php echo ($observacion['Observacion']['dirfamiliograma']); ?>
                                            </td>
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

