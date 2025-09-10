<div class="adolescencias view">
<h2><?php echo __('Adolescencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adolescencia['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $adolescencia['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adolescencia['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $adolescencia['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodocumento'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['tipodocumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerodoc'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['numerodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primerapellido'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['primerapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundoapellido'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['segundoapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primernombre'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['primernombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundonombre'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['segundonombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanac'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['fechanac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseguradora'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['aseguradora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['regimen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadoafiliacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['estadoafiliacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicemasacorporal'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['indicemasacorporal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensionarterial'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['tensionarterial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esquemavacunacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['esquemavacunacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['desparasitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracionmedica'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['valoracionmedica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saludoral'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['saludoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iniciovidasexual'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['iniciovidasexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metodosanticonceptivos'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['metodosanticonceptivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infeccionestransmisionsexual'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['infeccionestransmisionsexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['gestacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumospa'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['consumospa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumospa1'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['consumospa1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['riesgopsicosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial1'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['riesgopsicosocial1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudio'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['estudio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rendimientoescolar'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['rendimientoescolar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sopechamaltrato'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['sopechamaltrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ayudafamiliar'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['ayudafamiliar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participacionfamiliar'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['participacionfamiliar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aceptacionapoyo'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['aceptacionapoyo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afectoemociones'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['afectoemociones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compartirfamilia'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['compartirfamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calculoapgar'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['calculoapgar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciontres'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['canalizaciontres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adolescencia['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $adolescencia['Canalizacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['educacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadocanalizacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['estadocanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacioncanalizacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['observacioncanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaRegistro'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['fechaRegistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegistroCanalizacion'); ?></dt>
		<dd>
			<?php echo h($adolescencia['Adolescencia']['registroCanalizacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adolescencia'), array('action' => 'edit', $adolescencia['Adolescencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adolescencia'), array('action' => 'delete', $adolescencia['Adolescencia']['id']), array(), __('Are you sure you want to delete # %s?', $adolescencia['Adolescencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Adolescencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adolescencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
