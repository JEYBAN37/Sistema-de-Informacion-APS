<div class="personas view">
<h2><?php echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primernombre'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['primernombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundonombre'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['segundonombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primerapellido'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['primerapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundoapellido'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['segundoapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodocumento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['tipodocumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerodoc'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['numerodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanac'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['fechanac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['regimen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sociambiental Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['sociambiental_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['familia_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['responsable_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['sexo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['id']), array(), __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
	</ul>
</div>
