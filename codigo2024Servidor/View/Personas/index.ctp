<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipodocumento'); ?></th>
			<th><?php echo $this->Paginator->sort('numerodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('primerapellido'); ?></th>
			<th><?php echo $this->Paginator->sort('segundoapellido'); ?></th>
			<th><?php echo $this->Paginator->sort('primernombre'); ?></th>
			<th><?php echo $this->Paginator->sort('segundonombre'); ?></th>
			<th><?php echo $this->Paginator->sort('fechanac'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('aseguradora'); ?></th>
			<th><?php echo $this->Paginator->sort('regimen'); ?></th>
			<th><?php echo $this->Paginator->sort('estadoafiliacion'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($personas as $persona) :


		?>

			<tr>

				<td><?php echo ($persona['Persona']['id']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['tipodocumento']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['numerodoc']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['primerapellido']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['segundoapellido']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['primernombre']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['segundonombre']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['fechanac']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['edad']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['sexo']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['aseguradora']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['regimen']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['estadoafiliacion']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['barrio']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['direccion']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['telefono']); ?>&nbsp;</td>
				<td><?php echo ($persona['Persona']['email']); ?>&nbsp;</td>
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
		?> </p>
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
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?>
		</li>
	</ul>
</div>