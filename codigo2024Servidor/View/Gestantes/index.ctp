<?php $this->layout = 'default_familia' ?>


<!--h3><a><img src="../../img/ciudad.png" width="40" height="auto"></a> Atención Primaria en Salud </h3-->
<div class="col-12 text-center " style="margin: 20px; margin-top: 40px;">
	<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 25px;font-size: 3.5rem ;font-family: 'MiFuenteBold','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Listado de Infantes
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
										<th>id</th>
										<th>apellidos familia</th>
										<th>Nombres y Apellidos</th>
										<th>Curso de Vida</th>
										<th>Control prenatal</th>
										<th>Riesgo Materno</th>
										<!--Dato de tabla sociambiental junto con direccion , apellidos familia,encuestador,fecha y numero familia :) -->
										<th>Valoracion Medica</th>
										<th>Paraclinicos</th>
										<th>Riesgo Psicosocial</th>
										<th>Canalizacion N°1 </th>
										<th>Canalizacion N°2 </th>
										<th>Educacion N°1 </th>
										<th>Educacion N°2 </th>
										<th>Opciones</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($gestantes as $gestante) : ?>
										<tr class="gradeA odd">
											<td class="sorting_1"><?php echo ($gestante['Gestante']['id']); ?>&nbsp;</td>
											<td>
												<?php echo $this->Html->link($gestante['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $gestante['Familia']['id'])); ?>
											</td>
											<td>
												<?php echo $this->Html->link($gestante['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $gestante['Persona']['id'])); ?>
											</td>
											<td><?php echo ($gestante['Gestante']['cursovida']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['controprenatal']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['riesgomaterno']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['valoracionmedica']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['paraclinicos']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['riesgopsicosocial']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['canalizacionuno']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['canalizaciondos']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['eduacionuno']); ?>&nbsp;</td>
											<td><?php echo ($gestante['Gestante']['educaciondos']); ?>&nbsp;</td>
											<td class="actions">
												<div class="btn-group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<?php echo ('Acciones'); ?> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><?php echo $this->Html->link(('Ver famlia'),
																array('action' => 'view', $familia['Familia']['id']),
																array(
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>
														<li><?php echo $this->Html->link(('Editar hogar'),
																array('action' => 'edit',  $familia['Familia']['id']),
																array(
																	'onclick' => "return confirm('¿Estás seguro que deseas editar la información del hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>
														<li><?php echo $this->Html->link(('Agregar hogar'),
																array('controller' => 'familias', 'action' => 'add?hogar=' . $familia['Sociambiental']['id']),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un nuevo hogar en la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
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
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] .  $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>
														</li>



														<li><?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
																array(
																	'controller' => 'Primerainfancias',
																	'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)

															); ?>
														</li>
														<li><?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
																array(
																	'controller' => 'Infantils',
																	'action' => 'add?infantils=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
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
																	'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															); ?>

														<li><?php echo $this->Html->link(('Agregar adulto de 18 a 28 años'),
																array(
																	'controller' => 'Juventudadultos',
																	'action' => 'add?juventudadultos=' . $familia['Familia']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de agregar un adulto de 18 a 28 años en el hogar de " .  $familia['Familia']['nombres'] .   $familia['Familia']['apellidos'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
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
																	$familia['Sociambiental']['id']
																),
																array(
																	'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
																	'style' => 'color: blue; font-size: 16px; font-weight: bold;'
																)
															);
															?>
														</li>


													</ul>
												</div>
											</td>
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