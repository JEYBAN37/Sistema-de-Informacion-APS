<div class="juventudadultos view">
<h2><?php echo __('Juventudadulto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juventudadulto['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juventudadulto['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $juventudadulto['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodocumento'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['tipodocumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerodoc'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['numerodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primerapellido'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['primerapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundoapellido'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['segundoapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primernombre'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['primernombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundonombre'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['segundonombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanac'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['fechanac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseguradora'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['aseguradora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['regimen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadoafiliacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['estadoafiliacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicemasacorporal'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['indicemasacorporal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensionarterial'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['tensionarterial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['condicioncronica1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esquemavacunacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['esquemavacunacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['desparasitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracionmedica'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['valoracionmedica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tomacitologia'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['tomacitologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saludoral'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['saludoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iniciovidasexual'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['iniciovidasexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metodosanticonceptivos'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infeccionestransmisionsexual'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mamografia'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['mamografia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Antecedenteginecologico'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['antecedenteginecologico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ancedenteginecologico1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['ancedenteginecologico1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['gestacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controlprenatal'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['controlprenatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgoembarazo'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['riesgoembarazo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SignoAlarma'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['signoAlarma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saludalternativa'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['saludalternativa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursovida'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['cursovida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ocupacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['ocupacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudio'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['estudio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumospa'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['consumospa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumospa1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['consumospa1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sopechamaltrato'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['sopechamaltrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ayudafamiliar'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['ayudafamiliar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participacionfamiliar'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['participacionfamiliar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aceptacionapoyo'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['aceptacionapoyo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afectoemociones'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['afectoemociones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compartirfamilia'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['compartirfamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calculoapgar'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['calculoapgar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciontres'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['canalizaciontres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juventudadulto['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $juventudadulto['Canalizacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['educacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadocanalizacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['estadocanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacioncanalizacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['observacioncanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaRegistro'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['fechaRegistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegistroCanalizacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['registroCanalizacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Juventudadulto'), array('action' => 'edit', $juventudadulto['Juventudadulto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Juventudadulto'), array('action' => 'delete', $juventudadulto['Juventudadulto']['id']), array(), __('Are you sure you want to delete # %s?', $juventudadulto['Juventudadulto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Juventudadultos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juventudadulto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
