<div class="canalizaciones form">
<?php echo $this->Form->create('Canalizacion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Canalizacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('sede');
		echo $this->Form->input('telefonoInstitucional');
		echo $this->Form->input('enlaceuno');
		echo $this->Form->input('cargouno');
		echo $this->Form->input('telefono1');
		echo $this->Form->input('correo1');
		echo $this->Form->input('enlacedos');
		echo $this->Form->input('cargodos');
		echo $this->Form->input('telefono2');
		echo $this->Form->input('correo2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Canalizacion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Canalizacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
