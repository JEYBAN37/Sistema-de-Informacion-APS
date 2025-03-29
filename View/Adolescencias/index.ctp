<div class="adolescencias index">
	<h2><?php echo __('Adolescencias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipodocumento'); ?></th>
			<th><?php echo $this->Paginator->sort('numerodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('primerapellido'); ?></th>
			<th><?php echo $this->Paginator->sort('segundoapellido'); ?></th>
			<th><?php echo $this->Paginator->sort('primernombre'); ?></th>
			<th><?php echo $this->Paginator->sort('segundonombre'); ?></th>
			<th><?php echo $this->Paginator->sort('fechanac'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('aseguradora'); ?></th>
			<th><?php echo $this->Paginator->sort('regimen'); ?></th>
			<th><?php echo $this->Paginator->sort('estadoafiliacion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('discapacidad'); ?></th>
			<th><?php echo $this->Paginator->sort('peso'); ?></th>
			<th><?php echo $this->Paginator->sort('talla'); ?></th>
			<th><?php echo $this->Paginator->sort('indicemasacorporal'); ?></th>
			<th><?php echo $this->Paginator->sort('tensionarterial'); ?></th>
			<th><?php echo $this->Paginator->sort('condicioncronica'); ?></th>
			<th><?php echo $this->Paginator->sort('esquemavacunacion'); ?></th>
			<th><?php echo $this->Paginator->sort('desparasitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('valoracionmedica'); ?></th>
			<th><?php echo $this->Paginator->sort('saludoral'); ?></th>
			<th><?php echo $this->Paginator->sort('iniciovidasexual'); ?></th>
			<th><?php echo $this->Paginator->sort('metodosanticonceptivos'); ?></th>
			<th><?php echo $this->Paginator->sort('infeccionestransmisionsexual'); ?></th>
			<th><?php echo $this->Paginator->sort('gestacion'); ?></th>
			<th><?php echo $this->Paginator->sort('consumospa'); ?></th>
			<th><?php echo $this->Paginator->sort('consumospa1'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial1'); ?></th>
			<th><?php echo $this->Paginator->sort('estudio'); ?></th>
			<th><?php echo $this->Paginator->sort('rendimientoescolar'); ?></th>
			<th><?php echo $this->Paginator->sort('sopechamaltrato'); ?></th>
			<th><?php echo $this->Paginator->sort('ayudafamiliar'); ?></th>
			<th><?php echo $this->Paginator->sort('participacionfamiliar'); ?></th>
			<th><?php echo $this->Paginator->sort('aceptacionapoyo'); ?></th>
			<th><?php echo $this->Paginator->sort('afectoemociones'); ?></th>
			<th><?php echo $this->Paginator->sort('compartirfamilia'); ?></th>
			<th><?php echo $this->Paginator->sort('calculoapgar'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizaciondos'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizaciontres'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('educacion'); ?></th>
			<th><?php echo $this->Paginator->sort('estadocanalizacion'); ?></th>
			<th><?php echo $this->Paginator->sort('observacioncanalizacion'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaRegistro'); ?></th>
			<th><?php echo $this->Paginator->sort('registroCanalizacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($adolescencias as $adolescencia): ?>
	<tr>
		<td><?php echo h($adolescencia['Adolescencia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adolescencia['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $adolescencia['Familia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($adolescencia['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $adolescencia['Persona']['id'])); ?>
		</td>
		<td><?php echo h($adolescencia['Adolescencia']['tipodocumento']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['numerodoc']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['primerapellido']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['segundoapellido']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['primernombre']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['segundonombre']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['fechanac']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['edad']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['genero']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['aseguradora']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['regimen']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['estadoafiliacion']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['email']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['discapacidad']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['peso']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['talla']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['indicemasacorporal']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['tensionarterial']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['condicioncronica']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['esquemavacunacion']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['desparasitacion']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['valoracionmedica']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['saludoral']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['iniciovidasexual']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['metodosanticonceptivos']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['infeccionestransmisionsexual']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['gestacion']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['consumospa']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['consumospa1']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['riesgopsicosocial']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['riesgopsicosocial1']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['estudio']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['rendimientoescolar']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['sopechamaltrato']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['ayudafamiliar']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['participacionfamiliar']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['aceptacionapoyo']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['afectoemociones']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['compartirfamilia']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['calculoapgar']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['canalizacionuno']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['canalizaciondos']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['canalizaciontres']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adolescencia['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $adolescencia['Canalizacion']['id'])); ?>
		</td>
		<td><?php echo h($adolescencia['Adolescencia']['educacion']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['estadocanalizacion']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['observacioncanalizacion']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['fechaRegistro']); ?>&nbsp;</td>
		<td><?php echo h($adolescencia['Adolescencia']['registroCanalizacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adolescencia['Adolescencia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adolescencia['Adolescencia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adolescencia['Adolescencia']['id']), array(), __('Are you sure you want to delete # %s?', $adolescencia['Adolescencia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Adolescencia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
