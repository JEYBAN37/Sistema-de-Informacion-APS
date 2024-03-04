s<div>

	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Observacion'); ?>
		<fieldset>
			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo de Observaciones</h1>
			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Detalles</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
					<div class="form-group row">


						<?php $idAux = $_GET['Adolecencias'];
						echo $this->Form->input('familia_id', array('value' => '' . $idAux, 'type' => 'hidden'));
						?>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',
							]);
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgovivienda', array(
								'label' => 'Riesgo en la vivienda',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgoprimerainfancia', array(
								'label' => 'Riesgos en primera infancia',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgoenfermedadcronica', array(
								'label' => 'Riesgo de Enfermadades cronicas',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgogestante', array(
								'label' => 'Riesgos en Gestantes',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgosicosocial', array(
								'label' => 'Riesgos Psicosociales',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgofamilia', array(
								'label' => 'Riesgos en la Familia',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->
							<?php echo $this->Form->input('date', array(
								'label' => 'Fecha de visita : ',
								'style' => 'font-size: 12px'
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('observacion', array(
								'label' => 'Observacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('dir', array(
								'label' => 'Direccion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('anexo', array(
								'label' => 'Anexo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

					</div>
				</div>
			</div>

		</fieldset>
		<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
	</div>
</div>

<div class="actions">
	<h3><?php echo ('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('List Observaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>

<?php
$this->Html->css([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.select-search').select2();
		agregarOpcionSeleccion();
	});