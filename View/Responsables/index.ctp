<?php $this->layout = 'default_familia' ?>


<!--h3><a><img src="../../img/ciudad.png" width="40" height="auto"></a> Atención Primaria en Salud </h3-->
<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
	<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family: 'MiFuenteBold','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
		Listado de Responsables
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
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th><?php echo $this->Paginator->sort('id'); ?></th>
										<th><?php echo $this->Paginator->sort('tipodoc'); ?></th>
										<th><?php echo $this->Paginator->sort('numero'); ?></th>
										<th><?php echo $this->Paginator->sort('nombres'); ?></th>
										<th><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
										<th><?php echo $this->Paginator->sort('celular'); ?></th>
										<th><?php echo $this->Paginator->sort('telefono'); ?></th>
										<th><?php echo $this->Paginator->sort('correo'); ?></th>
										<th><?php echo $this->Paginator->sort('profesion'); ?></th>
										<th><?php echo $this->Paginator->sort('cargo'); ?></th>
										<th><?php echo $this->Paginator->sort('familiar'); ?></th>
										<th><?php echo $this->Paginator->sort('parentesco'); ?></th>
										<th><?php echo $this->Paginator->sort('tel_familiar'); ?></th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($responsables as $responsable) : ?>
										<tr class="gradeA odd">
											<td class="sorting_1">
												<?php echo ($responsable['Responsable']['id']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['tipodoc']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['numero']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['nombres']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['fecha_nac']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['celular']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['telefono']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['correo']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['profesion']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['cargo']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['familiar']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['parentesco']); ?>&nbsp;</td>
											<td><?php echo ($responsable['Responsable']['tel_familiar']); ?>&nbsp;</td>
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