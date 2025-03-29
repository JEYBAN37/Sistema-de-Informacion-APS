<div class="juventudadultos form">
<?php echo $this->Form->create('Juventudadulto'); ?>
	<fieldset>
		<legend><?php echo __('Add Juventudadulto'); ?></legend>
	<?php
		echo $this->Form->input('familia_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('tipodocumento');
		echo $this->Form->input('numerodoc');
		echo $this->Form->input('primerapellido');
		echo $this->Form->input('segundoapellido');
		echo $this->Form->input('primernombre');
		echo $this->Form->input('segundonombre');
		echo $this->Form->input('fechanac');
		echo $this->Form->input('edad');
		echo $this->Form->input('sexo');
		echo $this->Form->input('genero');
		echo $this->Form->input('aseguradora');
		echo $this->Form->input('regimen');
		echo $this->Form->input('estadoafiliacion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('peso');
		echo $this->Form->input('talla');
		echo $this->Form->input('indicemasacorporal');
		echo $this->Form->input('tensionarterial');
		echo $this->Form->input('condicioncronica');
		echo $this->Form->input('condicioncronica1');
		echo $this->Form->input('esquemavacunacion');
		echo $this->Form->input('desparasitacion');
		echo $this->Form->input('valoracionmedica');
		echo $this->Form->input('tomacitologia');
		echo $this->Form->input('saludoral');
		echo $this->Form->input('iniciovidasexual');
		echo $this->Form->input('metodosanticonceptivos');
		echo $this->Form->input('infeccionestransmisionsexual');
		echo $this->Form->input('mamografia');
		echo $this->Form->input('antecedenteginecologico');
		echo $this->Form->input('ancedenteginecologico1');
		echo $this->Form->input('gestacion');
		echo $this->Form->input('controlprenatal');
		echo $this->Form->input('riesgoembarazo');
		echo $this->Form->input('signoAlarma');
		echo $this->Form->input('saludalternativa');
		echo $this->Form->input('cursovida');
		echo $this->Form->input('ocupacion');
		echo $this->Form->input('estudio');
		echo $this->Form->input('consumospa');
		echo $this->Form->input('consumospa1');
		echo $this->Form->input('riesgopsicosocial');
		echo $this->Form->input('riesgopsicosocial1');
		echo $this->Form->input('sopechamaltrato');
		echo $this->Form->input('ayudafamiliar');
		echo $this->Form->input('participacionfamiliar');
		echo $this->Form->input('aceptacionapoyo');
		echo $this->Form->input('afectoemociones');
		echo $this->Form->input('compartirfamilia');
		echo $this->Form->input('calculoapgar');
		echo $this->Form->input('canalizacionuno');
		echo $this->Form->input('canalizaciondos');
		echo $this->Form->input('canalizaciontres');
		echo $this->Form->input('canalizacion_id');
		echo $this->Form->input('educacion');
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

		<li><?php echo $this->Html->link(__('List Juventudadultos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
