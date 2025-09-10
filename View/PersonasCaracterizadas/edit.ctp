<div class="personasCaracterizadas form">
<?php echo $this->Form->create('PersonasCaracterizada'); ?>
	<fieldset>
		<legend><?php echo __('Edit Personas Caracterizada'); ?></legend>
	<?php
		echo $this->Form->input('familia_id');
		echo $this->Form->input('sociambiental_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('direccion');
		echo $this->Form->input('apartamento');
		echo $this->Form->input('latitud');
		echo $this->Form->input('longitud');
		echo $this->Form->input('apellidosfamilia');
		echo $this->Form->input('profesional_EBS');
		echo $this->Form->input('microterritorio');
		echo $this->Form->input('territorio');
		echo $this->Form->input('comuna');
		echo $this->Form->input('ID_persona');
		echo $this->Form->input('TD');
		echo $this->Form->input('NumeroDoc');
		echo $this->Form->input('primerapellido');
		echo $this->Form->input('segundoapellido');
		echo $this->Form->input('primernombre');
		echo $this->Form->input('segundonombre');
		echo $this->Form->input('fechanac');
		echo $this->Form->input('edad');
		echo $this->Form->input('sexo');
		echo $this->Form->input('aseguradora');
		echo $this->Form->input('regimen');
		echo $this->Form->input('estadoafiliacion');
		echo $this->Form->input('telefono');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonasCaracterizada.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PersonasCaracterizada.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas Caracterizadas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
	</ul>
</div>
