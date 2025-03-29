<div class="juventudadultos index">
	<h2><?php echo __('Juventudadultos'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('condicioncronica1'); ?></th>
			<th><?php echo $this->Paginator->sort('esquemavacunacion'); ?></th>
			<th><?php echo $this->Paginator->sort('desparasitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('valoracionmedica'); ?></th>
			<th><?php echo $this->Paginator->sort('tomacitologia'); ?></th>
			<th><?php echo $this->Paginator->sort('saludoral'); ?></th>
			<th><?php echo $this->Paginator->sort('iniciovidasexual'); ?></th>
			<th><?php echo $this->Paginator->sort('metodosanticonceptivos'); ?></th>
			<th><?php echo $this->Paginator->sort('infeccionestransmisionsexual'); ?></th>
			<th><?php echo $this->Paginator->sort('mamografia'); ?></th>
			<th><?php echo $this->Paginator->sort('antecedenteginecologico'); ?></th>
			<th><?php echo $this->Paginator->sort('ancedenteginecologico1'); ?></th>
			<th><?php echo $this->Paginator->sort('gestacion'); ?></th>
			<th><?php echo $this->Paginator->sort('controlprenatal'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgoembarazo'); ?></th>
			<th><?php echo $this->Paginator->sort('signoAlarma'); ?></th>
			<th><?php echo $this->Paginator->sort('saludalternativa'); ?></th>
			<th><?php echo $this->Paginator->sort('cursovida'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupacion'); ?></th>
			<th><?php echo $this->Paginator->sort('estudio'); ?></th>
			<th><?php echo $this->Paginator->sort('consumospa'); ?></th>
			<th><?php echo $this->Paginator->sort('consumospa1'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgopsicosocial1'); ?></th>
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
	<?php foreach ($juventudadultos as $juventudadulto): ?>
	<tr>
		<td><?php echo h($juventudadulto['Juventudadulto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juventudadulto['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($juventudadulto['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $juventudadulto['Persona']['id'])); ?>
		</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['tipodocumento']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['numerodoc']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['primerapellido']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['segundoapellido']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['primernombre']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['segundonombre']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['fechanac']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['edad']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['genero']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['aseguradora']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['regimen']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['estadoafiliacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['email']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['discapacidad']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['peso']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['talla']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['indicemasacorporal']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['tensionarterial']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['condicioncronica']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['condicioncronica1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['esquemavacunacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['desparasitacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['valoracionmedica']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['tomacitologia']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['saludoral']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['iniciovidasexual']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['mamografia']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['antecedenteginecologico']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['ancedenteginecologico1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['gestacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['controlprenatal']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['riesgoembarazo']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['signoAlarma']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['saludalternativa']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['cursovida']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['ocupacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['estudio']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['consumospa']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['consumospa1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['sopechamaltrato']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['ayudafamiliar']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['participacionfamiliar']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['aceptacionapoyo']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['afectoemociones']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['compartirfamilia']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['calculoapgar']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['canalizacionuno']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['canalizaciondos']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['canalizaciontres']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juventudadulto['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $juventudadulto['Canalizacion']['id'])); ?>
		</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['educacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['estadocanalizacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['observacioncanalizacion']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['fechaRegistro']); ?>&nbsp;</td>
		<td><?php echo h($juventudadulto['Juventudadulto']['registroCanalizacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $juventudadulto['Juventudadulto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $juventudadulto['Juventudadulto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $juventudadulto['Juventudadulto']['id']), array(), __('Are you sure you want to delete # %s?', $juventudadulto['Juventudadulto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Juventudadulto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
