<div class="useres view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($user['User']['nivel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Useres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mnuuseres'), array('controller' => 'mnuuseres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mnuuser'), array('controller' => 'mnuuseres', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mnuuseres'); ?></h3>
	<?php if (!empty($user['Mnuuser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Orden'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Mnuuser'] as $mnuuser): ?>
		<tr>
			<td><?php echo $mnuuser['id']; ?></td>
			<td><?php echo $mnuuser['menu_id']; ?></td>
			<td><?php echo $mnuuser['user_id']; ?></td>
			<td><?php echo $mnuuser['estado']; ?></td>
			<td><?php echo $mnuuser['orden']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mnuuseres', 'action' => 'view', $mnuuser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mnuuseres', 'action' => 'edit', $mnuuser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mnuuseres', 'action' => 'delete', $mnuuser['id']), array(), __('Are you sure you want to delete # %s?', $mnuuser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mnuuser'), array('controller' => 'mnuuseres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
