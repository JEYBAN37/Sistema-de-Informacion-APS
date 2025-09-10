<div class="personasCaracterizadas view">
<h2><?php echo __('Personas Caracterizada'); ?></h2>
	<dl>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasCaracterizada['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $personasCaracterizada['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sociambiental'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasCaracterizada['Sociambiental']['apellidosfamilia'], array('controller' => 'sociambientals', 'action' => 'view', $personasCaracterizada['Sociambiental']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apartamento'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['apartamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitud'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['latitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitud'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['longitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidosfamilia'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['apellidosfamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesional EBS'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['profesional_EBS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Microterritorio'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['microterritorio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Territorio'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['territorio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['comuna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID Persona'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['ID_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TD'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['TD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumeroDoc'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['NumeroDoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primerapellido'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['primerapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundoapellido'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['segundoapellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primernombre'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['primernombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundonombre'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['segundonombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanac'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['fechanac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseguradora'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['aseguradora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['regimen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadoafiliacion'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['estadoafiliacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($personasCaracterizada['PersonasCaracterizada']['telefono']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personas Caracterizada'), array('action' => 'edit', $personasCaracterizada['PersonasCaracterizada']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personas Caracterizada'), array('action' => 'delete', $personasCaracterizada['PersonasCaracterizada']['id']), array(), __('Are you sure you want to delete # %s?', $personasCaracterizada['PersonasCaracterizada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas Caracterizadas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personas Caracterizada'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
	</ul>
</div>
