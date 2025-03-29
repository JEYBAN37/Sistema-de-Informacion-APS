<div class="primerainfancias form">
<?php echo $this->Form->create('Primerainfancia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Primerainfancia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('familia_id');
		echo $this->Form->input('tipodocumento');
		echo $this->Form->input('numerodoc');
		echo $this->Form->input('primerapellido');
		echo $this->Form->input('segundoapellido');
		echo $this->Form->input('primernombre');
		echo $this->Form->input('segundonombre');
		echo $this->Form->input('fechanac');
		echo $this->Form->input('edad');
		echo $this->Form->input('sexo');
		echo $this->Form->input('aseguradora');
		echo $this->Form->input('otraseguradora');
		echo $this->Form->input('regimen');
		echo $this->Form->input('estadoafiliacion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('prematuro');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('peso');
		echo $this->Form->input('talla');
		echo $this->Form->input('bajopeso');
		echo $this->Form->input('perimetrocefalico');
		echo $this->Form->input('perimetrobraquial');
		echo $this->Form->input('perimetrocintura');
		echo $this->Form->input('perimetrocadera');
		echo $this->Form->input('tensionarterial');
		echo $this->Form->input('lactanciamaterna');
		echo $this->Form->input('condicioncronica');
		echo $this->Form->input('anomaliacongenita');
		echo $this->Form->input('esquemavacunacion');
		echo $this->Form->input('desparasitacion');
		echo $this->Form->input('crecimientoydesarrollo');
		echo $this->Form->input('desnutricion');
		echo $this->Form->input('sospechamaltrato');
		echo $this->Form->input('padresconsumo');
		echo $this->Form->input('cuidador');
		echo $this->Form->input('educacion');
		echo $this->Form->input('higieneoral');
		echo $this->Form->input('desarrolloinfantil');
		echo $this->Form->input('eda');
		echo $this->Form->input('era');
		echo $this->Form->input('canalizacionuno');
		echo $this->Form->input('canalizaciondos');
		echo $this->Form->input('educacionuno');
		echo $this->Form->input('canalizacion_id');
		echo $this->Form->input('canalizaciontres');
		echo $this->Form->input('estadocanalizacion');
		echo $this->Form->input('observacioncanalizacion');
		echo $this->Form->input('fechaRegistro');
		echo $this->Form->input('registroCanalizacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Primerainfancia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Primerainfancia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
