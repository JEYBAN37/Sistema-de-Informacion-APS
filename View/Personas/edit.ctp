<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Edit Persona'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('primernombre');
		echo $this->Form->input('segundonombre');
		echo $this->Form->input('primerapellido');
		echo $this->Form->input('segundoapellido');
		echo $this->Form->input('tipodocumento');
		echo $this->Form->input('numerodoc');
		echo $this->Form->input('fechanac');
		echo $this->Form->input('regimen');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('condicioncronica');
		echo $this->Form->input('canalizacionuno');
		echo $this->Form->input('sociambiental_id');
		echo $this->Form->input('familia_id');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('sexo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
	</ul>
</div>
