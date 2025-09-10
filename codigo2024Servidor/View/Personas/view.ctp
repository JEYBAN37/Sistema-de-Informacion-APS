<div class="personas view">
<h2><?php echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
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
		<dt><?php echo __('Fechanac'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['fechanac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseguradora'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['aseguradora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['regimen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadoafiliacion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['estadoafiliacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['barrio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['email']); ?>
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
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Primerainfancias'); ?></h3>
	<?php if (!empty($persona['Primerainfancia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Familia Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Prematuro'); ?></th>
		<th><?php echo __('Discapacidad'); ?></th>
		<th><?php echo __('Peso'); ?></th>
		<th><?php echo __('Talla'); ?></th>
		<th><?php echo __('Bajopeso'); ?></th>
		<th><?php echo __('Perímetrocefalico'); ?></th>
		<th><?php echo __('Perímetrobraquial'); ?></th>
		<th><?php echo __('Perimetrocintura'); ?></th>
		<th><?php echo __('Perimetrocadera'); ?></th>
		<th><?php echo __('Tensionarterial'); ?></th>
		<th><?php echo __('Lactanciamaterna'); ?></th>
		<th><?php echo __('Condicioncronica'); ?></th>
		<th><?php echo __('Anomaliacongenita'); ?></th>
		<th><?php echo __('Esquemavacunacion'); ?></th>
		<th><?php echo __('Desparasitacion'); ?></th>
		<th><?php echo __('Crecimientoydesarrollo'); ?></th>
		<th><?php echo __('Desnutricion'); ?></th>
		<th><?php echo __('Higieneoral'); ?></th>
		<th><?php echo __('Desarrolloinfantil'); ?></th>
		<th><?php echo __('Eda'); ?></th>
		<th><?php echo __('Era'); ?></th>
		<th><?php echo __('Riesgodetbc'); ?></th>
		<th><?php echo __('Saludalternativa'); ?></th>
		<th><?php echo __('Padresconsumo'); ?></th>
		<th><?php echo __('Sospechaviolencia'); ?></th>
		<th><?php echo __('Cudadorpermanente'); ?></th>
		<th><?php echo __('Canalizacionuno'); ?></th>
		<th><?php echo __('Canalizaciondos'); ?></th>
		<th><?php echo __('Eduacionuno'); ?></th>
		<th><?php echo __('Educaciondos'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Primerainfancia'] as $primerainfancia): ?>
		<tr>
			<td><?php echo $primerainfancia['id']; ?></td>
			<td><?php echo $primerainfancia['familia_id']; ?></td>
			<td><?php echo $primerainfancia['persona_id']; ?></td>
			<td><?php echo $primerainfancia['prematuro']; ?></td>
			<td><?php echo $primerainfancia['discapacidad']; ?></td>
			<td><?php echo $primerainfancia['peso']; ?></td>
			<td><?php echo $primerainfancia['talla']; ?></td>
			<td><?php echo $primerainfancia['bajopeso']; ?></td>
			<td><?php echo $primerainfancia['perímetrocefalico']; ?></td>
			<td><?php echo $primerainfancia['perímetrobraquial']; ?></td>
			<td><?php echo $primerainfancia['perimetrocintura']; ?></td>
			<td><?php echo $primerainfancia['perimetrocadera']; ?></td>
			<td><?php echo $primerainfancia['tensionarterial']; ?></td>
			<td><?php echo $primerainfancia['lactanciamaterna']; ?></td>
			<td><?php echo $primerainfancia['condicioncronica']; ?></td>
			<td><?php echo $primerainfancia['anomaliacongenita']; ?></td>
			<td><?php echo $primerainfancia['esquemavacunacion']; ?></td>
			<td><?php echo $primerainfancia['desparasitacion']; ?></td>
			<td><?php echo $primerainfancia['crecimientoydesarrollo']; ?></td>
			<td><?php echo $primerainfancia['desnutricion']; ?></td>
			<td><?php echo $primerainfancia['higieneoral']; ?></td>
			<td><?php echo $primerainfancia['desarrolloinfantil']; ?></td>
			<td><?php echo $primerainfancia['eda']; ?></td>
			<td><?php echo $primerainfancia['era']; ?></td>
			<td><?php echo $primerainfancia['riesgodetbc']; ?></td>
			<td><?php echo $primerainfancia['saludalternativa']; ?></td>
			<td><?php echo $primerainfancia['padresconsumo']; ?></td>
			<td><?php echo $primerainfancia['sospechaviolencia']; ?></td>
			<td><?php echo $primerainfancia['cudadorpermanente']; ?></td>
			<td><?php echo $primerainfancia['canalizacionuno']; ?></td>
			<td><?php echo $primerainfancia['canalizaciondos']; ?></td>
			<td><?php echo $primerainfancia['eduacionuno']; ?></td>
			<td><?php echo $primerainfancia['educaciondos']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'primerainfancias', 'action' => 'view', $primerainfancia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'primerainfancias', 'action' => 'edit', $primerainfancia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'primerainfancias', 'action' => 'delete', $primerainfancia['id']), array(), __('Are you sure you want to delete # %s?', $primerainfancia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
