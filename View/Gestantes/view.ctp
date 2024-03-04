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
															<td rowspan="4"><img src="../../img/escudosms.png" width="100" height="auto"></td>
														</tr>
														<tr>
															<td colspan="6">Atencion Primaria En Salud</td>
														</tr>
														<tr>
															<td colspan="6">Nombre de Formato : Datos de Gestantes</td>
														</tr>
														<td>Vigencia 00-00-000</td>
														<td>Version 1.0</td>
														<td>Codigo ID Gestante</td>
														<td><?php echo ($observacion['Observacion']['id']); ?></td>


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
															<td colspan="6">Familia Asociada</td>
															<td colspan="6"><?php echo ($observacion['Observacion']['familia_id']); ?></td>
														</tr>
														<tr>
															<td colspan="6"><?php echo ($observacion['Observacion']['familia_id']); ?></td>
															<td colspan="6"><?php echo ($observacion['Observacion']['riesgovivienda']); ?></td>
														</tr>
														<tr>
															<td colspan="12" style="text-align: center;">Valoracion En Salud</td>

														</tr>

														<tr>
															<td colspan="3"> Curso de Vida</td>
															<td colspan="3"><?php echo ($gestante['Gestante']['cursovida']); ?></td>
															<td colspan="3">Control Prenatal</td>
															<td colspan="3"><?php echo ($gestante['Gestante']['controprenatal']); ?></td>
														</tr>

														<tr>
															<td colspan="3">Riesgo Materno</td>
															<td colspan="3"><?php echo ($gestante['Gestante']['riesgomaterno']); ?></td>
															<td colspan="3">Riesgo Psicosocial</td>
															<td colspan="3"><?php echo ($gestante['Gestante']['riesgopsicosocial']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Valoracion Medica</td>
															<td colspan="12"><?php echo ($gestante['Gestante']['valoracionmedica']); ?></td>


														</tr>
														<tr>
															<td colspan="2">Paraclinicos</td>
															<td colspan="10"> <?php echo ($gestante['Gestante']['paraclinicos']); ?></td>
														</tr>

														<tr>
															<td colspan="3">Canalizacion</td>
															<td colspan="3"><?php echo ($gestante['Gestante']['canalizacionuno']); ?></td>
															<td colspan="3">otro..</td>
															<td colspan="3"><?php echo ($gestante['Gestante']['canalizaciondos']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Educacion</td>
															<td colspan="10"><?php echo ($gestante['Gestante']['eduacionuno']); ?></td>
														</tr>

														<tr>
															<td colspan="2">Otro...</td>
															<td colspan="10"><?php echo ($gestante['Gestante']['educaciondos']); ?></td>
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