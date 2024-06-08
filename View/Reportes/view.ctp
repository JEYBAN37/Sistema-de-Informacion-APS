<div class="reportes view">
<h2><?php echo __('Reporte'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reporte['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $reporte['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primerainfancia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reporte['Primerainfancia']['id'], array('controller' => 'primerainfancias', 'action' => 'view', $reporte['Primerainfancia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infantil'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reporte['Infantil']['id'], array('controller' => 'infantils', 'action' => 'view', $reporte['Infantil']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adolescencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reporte['Adolescencia']['id'], array('controller' => 'adolescencias', 'action' => 'view', $reporte['Adolescencia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reporte'), array('action' => 'edit', $reporte['Reporte']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reporte'), array('action' => 'delete', $reporte['Reporte']['id']), array(), __('Are you sure you want to delete # %s?', $reporte['Reporte']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('action' => 'add')); ?> </li>
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
