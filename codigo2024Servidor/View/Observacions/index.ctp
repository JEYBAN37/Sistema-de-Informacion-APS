<?php $this->layout = 'default_familia' ?>


<!--h3><a><img src="../../img/ciudad.png" width="40" height="auto"></a> Atención Primaria en Salud </h3-->
<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
    <h1 class="titulo-general-pwa-govco"
        style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family: 'MiFuenteBold','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Listado de Observaciones
    </h1>
</div>


<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <?php echo ('Acciones'); ?> <span class="caret"></span>
            <?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?>

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
                                        <th>id</th>
                                        <th>Familia</th>
                                        <th>Canalización Social</th>
                                        <th>Canalización Social</th>
                                        <th>Canalización Social</th>
                                        <th>Estado</th>
                                        <th>Fecha seguimiento</th>
                                        <th>Responsable</th>
                                        <th>Observacion</th>
                                        <th>Fecha</th>
                                        <th>Ecomapa</th>
                                        <th>Familiograma</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($observacions as $observacion) : ?>
                                    <tr class="gradeA odd">
                                        <td class="sorting_1">
                                            <?php echo ($observacion['Observacion']['id']); ?>&nbsp;
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($observacion['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $observacion['Familia']['id'])); ?>
                                        </td>
                                        <td><?php echo ($observacion['Observacion']['canalizacionuno']); ?>&nbsp;</td>
                                        <td><?php echo ($observacion['Observacion']['canalizaciondos']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($observacion['Observacion']['canalizaciontres']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($observacion['Observacion']['estado']); ?>&nbsp;</td>
                                        <td><?php echo ($observacion['Observacion']['fechaseguimiento']); ?>&nbsp;</td>

                                        <td><?php echo ($observacion['Responsable']['encuestador']); ?>&nbsp;
                                        </td>
                                        <td><?php echo ($observacion['Observacion']['observacion']); ?>&nbsp;</td>
                                        <td><?php echo ($observacion['Observacion']['date']); ?>&nbsp;</td>
                                        <td><?php echo ($observacion['Observacion']['ecomapa']); ?>&nbsp;</td>
                                        <td><?php echo ($observacion['Observacion']['familiograma']); ?>&nbsp;</td>

                                        <td class="actions">
                                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $observacion['Observacion']['id'])); ?>
                                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $observacion['Observacion']['id'])); ?>
                                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $observacion['Observacion']['id']), array(), __('Are you sure you want to delete # %s?', $observacion['Observacion']['id'])); ?>
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
    <!-- /.col-lg-12 -->
</div>
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        "pagingType": "simple",
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

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
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










































<!--div class="observaciones index">
	<h2><?php echo __('Observaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgovivienda'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgoprimerainfancia'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgoenfermedadcronica'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgogestante'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgosicosocial'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgofamilia'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('anexo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($observaciones as $observacion) : ?>
			<tr>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td><?php echo h(); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $observacion['Observacion']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $observacion['Observacion']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $observacion['Observacion']['id']), array(), __('Are you sure you want to delete # %s?', $observacion['Observacion']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<p>
		<?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?> </p>
	<div class="paging">
		<?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Observacion'), array('action' => 'add')); ?></li>
	</ul>
</div-->