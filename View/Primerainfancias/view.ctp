<div class="primerainfancias view">
<h2><?php echo __('Primerainfancia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($primerainfancia['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $primerainfancia['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($primerainfancia['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $primerainfancia['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodocumento'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['tipodocumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerodoc'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['numerodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primerapellido'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['primerapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundoapellido'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['segundoapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primernombre'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['primernombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundonombre'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['segundonombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanac'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['fechanac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseguradora'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['aseguradora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otraseguradora'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['otraseguradora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['regimen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadoafiliacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['estadoafiliacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prematuro'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['prematuro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bajopeso'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['bajopeso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perimetrocefalico'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perimetrocefalico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perimetrobraquial'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perimetrobraquial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perimetrocintura'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perimetrocintura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perimetrocadera'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perimetrocadera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensionarterial'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['tensionarterial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lactanciamaterna'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['lactanciamaterna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anomaliacongenita'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['anomaliacongenita']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esquemavacunacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['esquemavacunacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['desparasitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crecimientoydesarrollo'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['crecimientoydesarrollo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desnutricion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['desnutricion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sospechamaltrato'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['sospechamaltrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Padresconsumo'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['padresconsumo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuidador'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['cuidador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['educacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higieneoral'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['higieneoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desarrolloinfantil'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['desarrolloinfantil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eda'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['eda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Era'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['era']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educacionuno'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['educacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($primerainfancia['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $primerainfancia['Canalizacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciontres'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['canalizaciontres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadocanalizacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['estadocanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacioncanalizacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['observacioncanalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaRegistro'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['fechaRegistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegistroCanalizacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['registroCanalizacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Primerainfancia'), array('action' => 'edit', $primerainfancia['Primerainfancia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Primerainfancia'), array('action' => 'delete', $primerainfancia['Primerainfancia']['id']), array(), __('Are you sure you want to delete # %s?', $primerainfancia['Primerainfancia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Primerainfancia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
