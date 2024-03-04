<div>
	<div class="form-group col-sm-12">
		<?php echo $this->Form->create('Gestante'); ?>
		<fieldset>


			<div class="col-12 text-center">
				<h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Gestantes
				</h1>

			</div>

			<h2 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">


					<div class="form-group row">

						<?php

						$idAux = $_GET['primerainfancia'];
						echo $this->Form->input('familia_id', array('value' => '' . $idAux, 'type' => 'hidden'));

						?>
						<!--div class="form-group col-md-6">
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
                        </div-->

						<div class="form-group col-md-6">
							<h5><?php echo $this->Html->link(('Add Persona'), array('controller' => 'Personas', 'action' => 'add')); ?>
							</h5>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('persona_id', [
								'label' => 'Docuemento/Nombre del Menor/Edad',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',
							]);
							?>
						</div>
					</div>
				</div>

			</div>



			<h2 class="titulo-general-pwa-govco col-md-6  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
				Valoracion de Salud</h2>
			<hr style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

			<div class="grow justify-content-center" display="none" style="margin-top:20px">
				<div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">

					<div class="form-group row">

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('cursovida', array(
								'label' => 'Curso de Vida',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('controprenatal', array(
								'label' => 'Control prenatal',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('riesgomaterno', array(
								'label' => 'Riesgo materno',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'style' => 'font-size: 12px',

							));
							?>
						</div>

						<div class="form-group col-md-6">
							<?php

							echo $this->Form->input('valoracionmedica', array(
								'label' => 'Valoracion medica)',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('paraclinicos', array(
								'label' => 'Paraclinicos',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('riesgopsicosocial', array(
								'label' => 'Riesgo Psicosocial',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('canalizacionuno', array(
								'label' => 'canalizacionuno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('eduacionuno', array(
								'label' => 'eduacionuno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>
						<div class="form-group col-md-6">
							<?php
							echo $this->Form->input('educaciondos', array(
								'label' => 'eduacionuno',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							)); ?>
						</div>

					</div>

				</div>
			</div>


			<?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
	</div>
	</fieldset>
</div>


<div class="actions">
	<h3><?php echo ('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('List Gestantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
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