<?php $this->layout = 'default_familia'; ?>

<style>
	.negrilla {
		font-size: small;
		font-weight: bold;
	}
</style>

<div>
	<div class="form-group col-sm-12">
		<fieldset>
			<div class="col-12 text-center">
				<h1 class="title-general-forms">Registros Familias</h1>
			</div>

			<div>
				<div class="dataTable_wrapper">

					<div class="row">
						<div class="col-lg-12">

							<table width="100%" class="table table-responsive table-striped table-bordered  " style="margin-top: 30px;">
								<td colspan="6" style="text-align: center; color: #3366CC;"><strong>INFORMACION DE LA
										VIVIENDA</strong>
									<tr>
										<td>
											<strong>Fecha Registro:</strong>
											<?php
											echo ($sociambiental['Sociambiental']['fecha']); ?>
										</td>



										<td><strong>Encuestador:</strong>
											<?php echo $this->Html->link($sociambiental['Responsable']['encuestador'], array('controller' => 'responsables', 'action' => 'view', $sociambiental['Responsable']['id'])); ?>
										</td>
										<td>
											<strong>ID_Vivienda:</strong>
											<?php echo h($sociambiental['Sociambiental']['id']); ?>
										</td>
										<!--td>N° Hogares:
                                        <?php echo ($sociambiental['Sociambiental']['numerohogares']); ?></td-->
									</tr>


									<tr>

										<td><strong>Ubicación:</strong>

											<?php echo ($sociambiental['Ubicacion']['microterritorio']); ?></td>
								</td>
								<td><strong>Dirección:</strong>
									<?php echo ($sociambiental['Sociambiental']['direccion']); ?>
								</td>
								<td><strong>Num. Familias:</strong>
									<?php echo ($sociambiental['Sociambiental']['numerohogares']); ?>
								</td>

								</tr>


								<tr>


									<td><strong>Num. Apartamento:</strong>
										<?php echo h($sociambiental['Sociambiental']['apartamento']); ?> </td>
									<td><strong>Apellidos familia:</strong>
										<?php echo h($sociambiental['Sociambiental']['apellidosfamilia']); ?> </td>
									<td><strong>Num. residentes en la vivienda:</strong>
										<?php echo h($sociambiental['Sociambiental']['numerohabitantes']); ?>
									</td>

								</tr>




							</table>
						</div>

						<div style="text-align: center;">
							<button class="my-button" style="width: 250px;">
								<?php
								echo $this->Html->link(
									'Editar inf.vivienda',
									array(
										'action' => 'edit', $sociambiental['Sociambiental']['id']
									),
									array(
										'onclick' => "return confirm('¿Estás seguro de que deseas editar la información de la vivienda " . $sociambiental['Sociambiental']['apellidosfamilia'] . "?');",
										'style' => 'color: white; font-size: 16px; font-weight: bold;'
									)
								);
								?>
							</button>
							<button class="my-button" style="margin-top: 30px; width: 270px;">

								<?php echo $this->Html->link(('Agregar Familia'),
									array('controller' => 'familias', 'action' => 'add?hogar=' . $sociambiental['Sociambiental']['id']),
									array(
										'onclick' => "return confirm('¿Estás seguro de agregar una famila a la vivenda "
											. $sociambiental['Sociambiental']['apellidosfamilia'] .
											$sociambiental['Sociambiental']['direccion'] . "?');",
										'style' => 'color: white; font-size: 16px; font-weight: bold;',
									)
								); ?>

							</button>

						</div>

					</div>
				</div>
			</div>

			<div class="row" style="margin: 5px;">
				<div class="col-lg-12" style="justify-items: center; ">


					<div class="panel-body">
						<!-- Nav tabs -->

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="home-pills">

								<div class="col-12 text-center">


								</div>

								<div class="card-body" style="margin-top: 20px;">
									<?php if (!empty($sociambiental['Familia'])) : ?>
										<div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
											<div class="row col-sm-12 JustifyCenter ">
												<div class=" row">
													<div class="col-sm-12">
														<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-Familia">
															<thead>
																<tr>
																	<th><?php echo __('Familia_Id'); ?></th>
																	<th class="actions"><?php echo __('Acciones'); ?></th>
																	<th><?php echo __('Familia N'); ?></th>
																	<th><?php echo __('Nombres'); ?></th>
																	<th><?php echo __('Apellidos'); ?></th>
																	<th><?php echo __('Rol'); ?></th>
																	<th><?php echo __('Celular'); ?></th>
																	<th><?php echo __('Correo'); ?></th>
																	<th><?php echo __('No. integrantes'); ?></th>

																</tr>

															<tbody>
																<?php foreach ($sociambiental['Familia'] as $familia) :
																	if (!empty($familia['id'])) {
																?>
																		<tr class="gradeA odd">
																			<td class="sorting_1"><?php echo $familia['id']; ?></td>
																			<td class="actions">
																				<div class="btn-group">
																					<button type="button" class="my-button" data-toggle="dropdown">
																						<?php echo ('Acciones'); ?> <span class="caret"></span>
																					</button>
																					<ul class="dropdown-menu" role="menu">

																						<li> <?php echo $this->Html->link(__('Ver'), array('controller' => 'familias', 'action' => 'view', $familia['id'])); ?>
																						</li>
																						<li> <?php echo $this->Html->link(__('Editar'), array('controller' => 'familias', 'action' => 'edit', $familia['id'])); ?>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td><?php echo $familia['hogar']; ?></td>
																			<td><?php echo $familia['nombres']; ?></td>
																			<td><?php echo $familia['apellidos']; ?></td>
																			<td><?php echo $familia['rol']; ?></td>
																			<td><?php echo $familia['celular']; ?></td>
																			<td><?php echo $familia['correo']; ?></td>
																			<td><?php echo $familia['numeropersonas']; ?></td>

																		</tr>

																<?php }
																endforeach; ?>

															</tbody>

															</thead>
														</table>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>

								</div>


							</div>








						</div>
					</div>
					<!-- /.col-lg-12 -->
				</div>



			</div>
		</fieldset>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#dataTables-Familia').DataTable({
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