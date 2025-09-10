<div class="ubicaciones view">
<h2><?php echo __('Ubicacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['zona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo1'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['tipo1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['comuna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo2'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['tipo2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['barrio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estrato'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['estrato']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ubicacion'), array('action' => 'edit', $ubicacion['Ubicacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ubicacion'), array('action' => 'delete', $ubicacion['Ubicacion']['id']), array(), __('Are you sure you want to delete # %s?', $ubicacion['Ubicacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociambientals'), array('controller' => 'sociambientals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociambientalscompleta'), array('controller' => 'sociambientalscompleta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociambientalscompletum'), array('controller' => 'sociambientalscompleta', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sociambientals'); ?></h3>
	<?php if (!empty($ubicacion['Sociambiental'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Apellidosfamilia'); ?></th>
		<th><?php echo __('Vivienda'); ?></th>
		<th><?php echo __('Estrato'); ?></th>
		<th><?php echo __('Numerohogares'); ?></th>
		<th><?php echo __('Pared'); ?></th>
		<th><?php echo __('Estadoparedes'); ?></th>
		<th><?php echo __('Piso'); ?></th>
		<th><?php echo __('Techo'); ?></th>
		<th><?php echo __('Estadotecho'); ?></th>
		<th><?php echo __('Dormitorios'); ?></th>
		<th><?php echo __('Hacinamiento'); ?></th>
		<th><?php echo __('Riesgoexterno'); ?></th>
		<th><?php echo __('Otroriesgo'); ?></th>
		<th><?php echo __('Actividad'); ?></th>
		<th><?php echo __('Acceso'); ?></th>
		<th><?php echo __('Transporte'); ?></th>
		<th><?php echo __('Riesgo'); ?></th>
		<th><?php echo __('Otroriesgohogar'); ?></th>
		<th><?php echo __('Aguaservicio'); ?></th>
		<th><?php echo __('Aguatratamiento'); ?></th>
		<th><?php echo __('Aguasiministro'); ?></th>
		<th><?php echo __('Aguaalmacenamiento'); ?></th>
		<th><?php echo __('Diposicionexcretas'); ?></th>
		<th><?php echo __('Aguaresiduales'); ?></th>
		<th><?php echo __('Basura'); ?></th>
		<th><?php echo __('Reciclaje'); ?></th>
		<th><?php echo __('Mascotas'); ?></th>
		<th><?php echo __('Otramascota'); ?></th>
		<th><?php echo __('Desparasitamascotas'); ?></th>
		<th><?php echo __('Vacunamascotas'); ?></th>
		<th><?php echo __('Cuidadomascotas'); ?></th>
		<th><?php echo __('Vector'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ubicacion['Sociambiental'] as $sociambiental): ?>
		<tr>
			<td><?php echo $sociambiental['id']; ?></td>
			<td><?php echo $sociambiental['fecha']; ?></td>
			<td><?php echo $sociambiental['responsable_id']; ?></td>
			<td><?php echo $sociambiental['ubicacion_id']; ?></td>
			<td><?php echo $sociambiental['direccion']; ?></td>
			<td><?php echo $sociambiental['apellidosfamilia']; ?></td>
			<td><?php echo $sociambiental['vivienda']; ?></td>
			<td><?php echo $sociambiental['estrato']; ?></td>
			<td><?php echo $sociambiental['numerohogares']; ?></td>
			<td><?php echo $sociambiental['pared']; ?></td>
			<td><?php echo $sociambiental['estadoparedes']; ?></td>
			<td><?php echo $sociambiental['piso']; ?></td>
			<td><?php echo $sociambiental['techo']; ?></td>
			<td><?php echo $sociambiental['estadotecho']; ?></td>
			<td><?php echo $sociambiental['dormitorios']; ?></td>
			<td><?php echo $sociambiental['hacinamiento']; ?></td>
			<td><?php echo $sociambiental['riesgoexterno']; ?></td>
			<td><?php echo $sociambiental['otroriesgo']; ?></td>
			<td><?php echo $sociambiental['actividad']; ?></td>
			<td><?php echo $sociambiental['acceso']; ?></td>
			<td><?php echo $sociambiental['transporte']; ?></td>
			<td><?php echo $sociambiental['riesgo']; ?></td>
			<td><?php echo $sociambiental['otroriesgohogar']; ?></td>
			<td><?php echo $sociambiental['aguaservicio']; ?></td>
			<td><?php echo $sociambiental['aguatratamiento']; ?></td>
			<td><?php echo $sociambiental['aguasiministro']; ?></td>
			<td><?php echo $sociambiental['aguaalmacenamiento']; ?></td>
			<td><?php echo $sociambiental['diposicionexcretas']; ?></td>
			<td><?php echo $sociambiental['aguaresiduales']; ?></td>
			<td><?php echo $sociambiental['basura']; ?></td>
			<td><?php echo $sociambiental['reciclaje']; ?></td>
			<td><?php echo $sociambiental['mascotas']; ?></td>
			<td><?php echo $sociambiental['otramascota']; ?></td>
			<td><?php echo $sociambiental['desparasitamascotas']; ?></td>
			<td><?php echo $sociambiental['vacunamascotas']; ?></td>
			<td><?php echo $sociambiental['cuidadomascotas']; ?></td>
			<td><?php echo $sociambiental['vector']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sociambientals', 'action' => 'view', $sociambiental['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sociambientals', 'action' => 'edit', $sociambiental['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sociambientals', 'action' => 'delete', $sociambiental['id']), array(), __('Are you sure you want to delete # %s?', $sociambiental['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sociambiental'), array('controller' => 'sociambientals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sociambientalscompleta'); ?></h3>
	<?php if (!empty($ubicacion['Sociambientalscompletum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Apellidosfamilia'); ?></th>
		<th><?php echo __('Vivienda'); ?></th>
		<th><?php echo __('Tenencia'); ?></th>
		<th><?php echo __('Estrato'); ?></th>
		<th><?php echo __('Numerohabitantes'); ?></th>
		<th><?php echo __('Numerohogares'); ?></th>
		<th><?php echo __('Pared'); ?></th>
		<th><?php echo __('Estadoparedes'); ?></th>
		<th><?php echo __('Piso'); ?></th>
		<th><?php echo __('Techo'); ?></th>
		<th><?php echo __('Estadotecho'); ?></th>
		<th><?php echo __('Dormitorios'); ?></th>
		<th><?php echo __('Hacinamiento'); ?></th>
		<th><?php echo __('Riesgoexterno'); ?></th>
		<th><?php echo __('Otroriesgo'); ?></th>
		<th><?php echo __('Actividad'); ?></th>
		<th><?php echo __('Acceso'); ?></th>
		<th><?php echo __('Transporte'); ?></th>
		<th><?php echo __('Riesgo'); ?></th>
		<th><?php echo __('Otroriesgohogar'); ?></th>
		<th><?php echo __('Aguaservicio'); ?></th>
		<th><?php echo __('Aguatratamiento'); ?></th>
		<th><?php echo __('Aguasiministro'); ?></th>
		<th><?php echo __('Aguaalmacenamiento'); ?></th>
		<th><?php echo __('Diposicionexcretas'); ?></th>
		<th><?php echo __('Aguaresiduales'); ?></th>
		<th><?php echo __('Basura'); ?></th>
		<th><?php echo __('Reciclaje'); ?></th>
		<th><?php echo __('Higiene'); ?></th>
		<th><?php echo __('Lavadomanos'); ?></th>
		<th><?php echo __('Elementoshigiene'); ?></th>
		<th><?php echo __('Otroelementohigiene'); ?></th>
		<th><?php echo __('Cepilladodientes'); ?></th>
		<th><?php echo __('Combustible'); ?></th>
		<th><?php echo __('Otrocombustible'); ?></th>
		<th><?php echo __('Mascotas'); ?></th>
		<th><?php echo __('Otramascota'); ?></th>
		<th><?php echo __('Desparasitamascotas'); ?></th>
		<th><?php echo __('Vacunamascotas'); ?></th>
		<th><?php echo __('Cuidadomascotas'); ?></th>
		<th><?php echo __('Vector'); ?></th>
		<th><?php echo __('Enferemedadmenor'); ?></th>
		<th><?php echo __('Otraenfermedadmenor'); ?></th>
		<th><?php echo __('Enferemedadmayo'); ?></th>
		<th><?php echo __('Otraenferemedmayor'); ?></th>
		<th><?php echo __('Hienealimentos'); ?></th>
		<th><?php echo __('Aseococina'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ubicacion['Sociambientalscompletum'] as $sociambientalscompletum): ?>
		<tr>
			<td><?php echo $sociambientalscompletum['id']; ?></td>
			<td><?php echo $sociambientalscompletum['fecha']; ?></td>
			<td><?php echo $sociambientalscompletum['responsable_id']; ?></td>
			<td><?php echo $sociambientalscompletum['ubicacion_id']; ?></td>
			<td><?php echo $sociambientalscompletum['direccion']; ?></td>
			<td><?php echo $sociambientalscompletum['apellidosfamilia']; ?></td>
			<td><?php echo $sociambientalscompletum['vivienda']; ?></td>
			<td><?php echo $sociambientalscompletum['tenencia']; ?></td>
			<td><?php echo $sociambientalscompletum['estrato']; ?></td>
			<td><?php echo $sociambientalscompletum['numerohabitantes']; ?></td>
			<td><?php echo $sociambientalscompletum['numerohogares']; ?></td>
			<td><?php echo $sociambientalscompletum['pared']; ?></td>
			<td><?php echo $sociambientalscompletum['estadoparedes']; ?></td>
			<td><?php echo $sociambientalscompletum['piso']; ?></td>
			<td><?php echo $sociambientalscompletum['techo']; ?></td>
			<td><?php echo $sociambientalscompletum['estadotecho']; ?></td>
			<td><?php echo $sociambientalscompletum['dormitorios']; ?></td>
			<td><?php echo $sociambientalscompletum['hacinamiento']; ?></td>
			<td><?php echo $sociambientalscompletum['riesgoexterno']; ?></td>
			<td><?php echo $sociambientalscompletum['otroriesgo']; ?></td>
			<td><?php echo $sociambientalscompletum['actividad']; ?></td>
			<td><?php echo $sociambientalscompletum['acceso']; ?></td>
			<td><?php echo $sociambientalscompletum['transporte']; ?></td>
			<td><?php echo $sociambientalscompletum['riesgo']; ?></td>
			<td><?php echo $sociambientalscompletum['otroriesgohogar']; ?></td>
			<td><?php echo $sociambientalscompletum['aguaservicio']; ?></td>
			<td><?php echo $sociambientalscompletum['aguatratamiento']; ?></td>
			<td><?php echo $sociambientalscompletum['aguasiministro']; ?></td>
			<td><?php echo $sociambientalscompletum['aguaalmacenamiento']; ?></td>
			<td><?php echo $sociambientalscompletum['diposicionexcretas']; ?></td>
			<td><?php echo $sociambientalscompletum['aguaresiduales']; ?></td>
			<td><?php echo $sociambientalscompletum['basura']; ?></td>
			<td><?php echo $sociambientalscompletum['reciclaje']; ?></td>
			<td><?php echo $sociambientalscompletum['higiene']; ?></td>
			<td><?php echo $sociambientalscompletum['lavadomanos']; ?></td>
			<td><?php echo $sociambientalscompletum['elementoshigiene']; ?></td>
			<td><?php echo $sociambientalscompletum['otroelementohigiene']; ?></td>
			<td><?php echo $sociambientalscompletum['cepilladodientes']; ?></td>
			<td><?php echo $sociambientalscompletum['combustible']; ?></td>
			<td><?php echo $sociambientalscompletum['otrocombustible']; ?></td>
			<td><?php echo $sociambientalscompletum['mascotas']; ?></td>
			<td><?php echo $sociambientalscompletum['otramascota']; ?></td>
			<td><?php echo $sociambientalscompletum['desparasitamascotas']; ?></td>
			<td><?php echo $sociambientalscompletum['vacunamascotas']; ?></td>
			<td><?php echo $sociambientalscompletum['cuidadomascotas']; ?></td>
			<td><?php echo $sociambientalscompletum['vector']; ?></td>
			<td><?php echo $sociambientalscompletum['enferemedadmenor']; ?></td>
			<td><?php echo $sociambientalscompletum['otraenfermedadmenor']; ?></td>
			<td><?php echo $sociambientalscompletum['enferemedadmayo']; ?></td>
			<td><?php echo $sociambientalscompletum['otraenferemedmayor']; ?></td>
			<td><?php echo $sociambientalscompletum['hienealimentos']; ?></td>
			<td><?php echo $sociambientalscompletum['aseococina']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sociambientalscompleta', 'action' => 'view', $sociambientalscompletum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sociambientalscompleta', 'action' => 'edit', $sociambientalscompletum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sociambientalscompleta', 'action' => 'delete', $sociambientalscompletum['id']), array(), __('Are you sure you want to delete # %s?', $sociambientalscompletum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sociambientalscompletum'), array('controller' => 'sociambientalscompleta', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
