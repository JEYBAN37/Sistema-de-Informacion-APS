<div class="reportes form">
<?php echo $this->Form->create('Reporte'); ?>
	<fieldset>
		<legend><?php echo __('Add Reporte'); ?></legend>
	<?php
		echo $this->Form->input('familia_id');
		echo $this->Form->input('primerainfancia_id');
		echo $this->Form->input('infantil_id');
		echo $this->Form->input('adolescencia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reportes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Infantils'), array('controller' => 'infantils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infantil'), array('controller' => 'infantils', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adolescencias'), array('controller' => 'adolescencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adolescencia'), array('controller' => 'adolescencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
