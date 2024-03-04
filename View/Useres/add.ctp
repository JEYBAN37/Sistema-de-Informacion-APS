<div class="useres form">
	<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
		<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('nivel');
		echo $this->Form->input('nombre');
		echo $this->Form->input('group_id');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Useres'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mnuuseres'), array('controller' => 'mnuuseres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mnuuser'), array('controller' => 'mnuuseres', 'action' => 'add')); ?> </li>
	</ul>
</div>