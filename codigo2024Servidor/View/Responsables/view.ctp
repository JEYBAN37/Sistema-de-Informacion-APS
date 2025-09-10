<div class="row" style="justify-content: center;">
	<div class="col-lg-10">
		<div class="panel panel-default">



			<div class="panel-body">
				<div class="dataTable_wrapper">

					<div class="row" style="justify-content: center;">
						<div class=" col-sm-11">

							<table width="100%" class="table table-striped table-bordered table-hover">

								<thead>

									<div class="panel-body">
										<div class="dataTable_wrapper">

											<div class="row">
												<div class="col-sm-11">

													<table width="100%" class="table table-striped table-bordered table-hover">
														<tr>
														<tr>
															<td rowspan="4" style="text-align: center; vertical-align: middle;">

																<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWooVnP-ggyJ3x_xZOgBlBAHas5_sVFyR16boEFOv24Q&s" style="display: block; margin: 0 auto;" width="100px" height="auto">

															</td>
														</tr>
														<tr>
															<td colspan="6">Atención Primaria En Salud</td>
														</tr>
														<tr>
															<td colspan="6">Nombre de Formato : Registro Responsable
															</td>
														</tr>
														<td>Vigencia 00-00-000</td>
														<td>Version 1.0</td>
														<td>Codigo ID Primera Infancia</td>
														<td><?php echo ($responsable['Responsable']['id']); ?>
														</td>


														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>


									<div class="panel-body">
										<div class="dataTable_wrapper">

											<div class="row" style="justify-content: center;">
												<div class="col-sm-12">

													<table width="100%" class="table table-striped table-bordered table-hover">
														<tr>
															<td colspan="3"><strong>Nombre del Responsable </strong></td>
															<td colspan="3"><strong>Tipo Documento</strong> </td>
															<td colspan="3"><strong>Documento</strong> </td>
															<td colspan="3"><strong>Fecha de Nacimiento</strong></td>
														</tr>
														<tr>

															<td colspan="3">
																<?php echo ($responsable['Responsable']['nombres']); ?>

															</td>
															<td colspan="3">
																<?php echo ($responsable['Responsable']['tipodoc']); ?> </td>
															<td colspan="3">
																<?php echo ($responsable['Responsable']['numero']); ?>
															</td>
															<td colspan="3">
																<?php echo ($responsable['Responsable']['fecha_nac']); ?>
															</td>

														</tr>
														<tr>
															<td colspan="2"><strong>Celular</strong> </td>
															<td colspan="2">
																<?php echo ($responsable['Responsable']['celular']); ?>
															</td>
															<td colspan="2"><strong>Telefono</strong></td>
															<td colspan="2">
																<?php echo ($responsable['Responsable']['telefono']); ?>
															</td>
															<td colspan="2"><strong>Correo Electronico</strong></td>
															<td colspan="2">
																<?php echo ($responsable['Responsable']['correo']); ?>
															</td>



														</tr>

														<tr>
															<td colspan="2"><strong>Profesion</strong></td>
															<td colspan="2">
																<?php echo ($responsable['Responsable']['profesion']); ?>
															</td>
															<td colspan="2"><strong>Cargo</strong></td>
															<td colspan="2">
																<?php echo ($responsable['Responsable']['cargo']); ?>
															</td>
															<td colspan="2"><strong>Familiar</strong></td>
															<td colspan="2">
																<?php echo ($responsable['Responsable']['familiar']); ?>
															</td>
														</tr>

														<tr>
															<td colspan="4"><strong>Telefono Familiar</strong></td>
															<td colspan="2">
																<?php echo ($responsable['Responsable']['tel_familiar']); ?>
															</td>

															<td colspan="4"><strong>Parentesco</strong></td>
															<td colspan="2">
																<<?php echo ($responsable['Responsable']['parentesco']); ?> </td>

														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>



									<div class="panel-body">
										<div class="dataTable_wrapper">

											<div class="row" style="justify-content: center;">
												<div class="col-sm-11">

													<table width="100%" class="table table-striped table-bordered table-hover">
														<tr>
															<td style="text-align: center;"><a href=" javascript:window.print();">
																	Imprimir
																</a></td>
														</tr>
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

		</div>
	</div>
</div>


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