<div class="infantils view">
<h2><?php echo __('Infantil'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($infantil['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $infantil['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($infantil['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $infantil['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodocumento'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['tipodocumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerodoc'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['numerodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primerapellido'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['primerapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundoapellido'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['segundoapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primernombre'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['primernombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundonombre'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['segundonombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanac'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['fechanac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseguradora'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['aseguradora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['regimen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadoafiliacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['estadoafiliacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicemasacorporal'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['indicemasacorporal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensionarterial'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['tensionarterial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esquemavacunacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['esquemavacunacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['desparasitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crecimientoydesarrollo'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['crecimientoydesarrollo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desnutricion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['desnutricion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Era'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['era']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eda'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['eda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuidador'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['cuidador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Padresconsumo'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['padresconsumo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higieneoral'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['higieneoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desarrolloinfantil'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['desarrolloinfantil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudio'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['estudio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rendimientoescolar'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['rendimientoescolar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sopechamaltrato'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['sopechamaltrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ayudafamiliar'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['ayudafamiliar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participacionfamiliar'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['participacionfamiliar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aceptacionapoyo'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['aceptacionapoyo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afectoemociones'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['afectoemociones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compartirfamilia'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['compartirfamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calculoapgar'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['calculoapgar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciontres'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['canalizaciontres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($infantil['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $infantil['Canalizacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educacionuno'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['educacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadocanalizacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['estadocanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacioncanalizacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['observacioncanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaRegistro'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['fechaRegistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegistroCanalizacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['registroCanalizacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Infantil'), array('action' => 'edit', $infantil['Infantil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Infantil'), array('action' => 'delete', $infantil['Infantil']['id']), array(), __('Are you sure you want to delete # %s?', $infantil['Infantil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Infantils'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infantil'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
