<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('primernombre'); ?></th>
			<th><?php echo $this->Paginator->sort('segundonombre'); ?></th>
			<th><?php echo $this->Paginator->sort('primerapellido'); ?></th>
			<th><?php echo $this->Paginator->sort('segundoapellido'); ?></th>
			<th><?php echo $this->Paginator->sort('tipodocumento'); ?></th>
			<th><?php echo $this->Paginator->sort('numerodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('fechanac'); ?></th>
			<th><?php echo $this->Paginator->sort('regimen'); ?></th>
			<th><?php echo $this->Paginator->sort('discapacidad'); ?></th>
			<th><?php echo $this->Paginator->sort('condicioncronica'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('sociambiental_id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['primernombre']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['segundonombre']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['primerapellido']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['segundoapellido']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['tipodocumento']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['numerodoc']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['fechanac']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['regimen']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['discapacidad']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['condicioncronica']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['canalizacionuno']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['sociambiental_id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['familia_id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['responsable_id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['sexo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $persona['Persona']['id']), array(), __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?></li>
	</ul>
</div>
