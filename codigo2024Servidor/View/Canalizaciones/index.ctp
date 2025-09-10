<div class="canalizaciones index">
	<h2><?php echo __('Canalizaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('sede'); ?></th>
			<th><?php echo $this->Paginator->sort('telefonoInstitucional'); ?></th>
			<th><?php echo $this->Paginator->sort('enlaceuno'); ?></th>
			<th><?php echo $this->Paginator->sort('cargouno'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono1'); ?></th>
			<th><?php echo $this->Paginator->sort('correo1'); ?></th>
			<th><?php echo $this->Paginator->sort('enlacedos'); ?></th>
			<th><?php echo $this->Paginator->sort('cargodos'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono2'); ?></th>
			<th><?php echo $this->Paginator->sort('correo2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($canalizaciones as $canalizacion): ?>
	<tr>
		<td><?php echo h($canalizacion['Canalizacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['sede']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['telefonoInstitucional']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['enlaceuno']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['cargouno']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['telefono1']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['correo1']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['enlacedos']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['cargodos']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['telefono2']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['correo2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $canalizacion['Canalizacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $canalizacion['Canalizacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $canalizacion['Canalizacion']['id']), array(), __('Are you sure you want to delete # %s?', $canalizacion['Canalizacion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('action' => 'add')); ?></li>
	</ul>
</div>
