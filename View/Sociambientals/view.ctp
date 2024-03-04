<div class="sociambientals view">
<h2><?php echo __('Sociambiental'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sociambiental['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $sociambiental['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sociambiental['Ubicacion']['id'], array('controller' => 'ubicaciones', 'action' => 'view', $sociambiental['Ubicacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vivienda'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['vivienda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenencia'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['tenencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estrato'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['estrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerohabitantes'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['numerohabitantes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerohogares'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['numerohogares']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pared'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['pared']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadoparedes'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['estadoparedes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piso'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['piso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Techo'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['techo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadotecho'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['estadotecho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dormitorios'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['dormitorios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hacinamiento'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['hacinamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgoexterno'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['riesgoexterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otroriesgo'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['otroriesgo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acceso'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['acceso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidosfamilia'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['apellidosfamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transporte'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['transporte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgo'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['riesgo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otroriesgohogar'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['otroriesgohogar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aguaservicio'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['aguaservicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aguatratamiento'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['aguatratamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aguasiministro'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['aguasiministro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aguaalmacenamiento'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['aguaalmacenamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diposicionexcretas'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['diposicionexcretas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aguaresiduales'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['aguaresiduales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basura'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['basura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reciclaje'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['reciclaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higiene'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['higiene']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lavadomanos'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['lavadomanos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Elementoshigiene'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['elementoshigiene']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otroelementohigiene'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['otroelementohigiene']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cepilladodientes'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['cepilladodientes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combustible'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['combustible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otrocombustible'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['otrocombustible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mascotas'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['mascotas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otramascota'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['otramascota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitamascotas'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['desparasitamascotas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vacunamascotas'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['vacunamascotas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuidadomascotas'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['cuidadomascotas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vector'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['vector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enferemedadmenor'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['enferemedadmenor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otraenfermedadmenor'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['otraenfermedadmenor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enferemedadmayo'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['enferemedadmayo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otraenferemedmayor'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['otraenferemedmayor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hienealimentos'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['hienealimentos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseococina'); ?></dt>
		<dd>
			<?php echo h($sociambiental['Sociambiental']['aseococina']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sociambiental'), array('action' => 'edit', $sociambiental['Sociambiental']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sociambiental'), array('action' => 'delete', $sociambiental['Sociambiental']['id']), array(), __('Are you sure you want to delete # %s?', $sociambiental['Sociambiental']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
