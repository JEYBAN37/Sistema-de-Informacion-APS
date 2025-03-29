<div class="primerainfancias index">
    <h2><?php echo __('Primerainfancias'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('persona_id'); ?></th>
            <th><?php echo $this->Paginator->sort('familia_id'); ?></th>
            <th><?php echo $this->Paginator->sort('tipodocumento'); ?></th>
            <th><?php echo $this->Paginator->sort('numerodoc'); ?></th>
            <th><?php echo $this->Paginator->sort('primerapellido'); ?></th>
            <th><?php echo $this->Paginator->sort('segundoapellido'); ?></th>
            <th><?php echo $this->Paginator->sort('primernombre'); ?></th>
            <th><?php echo $this->Paginator->sort('segundonombre'); ?></th>
            <th><?php echo $this->Paginator->sort('fechanac'); ?></th>
            <th><?php echo $this->Paginator->sort('edad'); ?></th>
            <th><?php echo $this->Paginator->sort('sexo'); ?></th>
            <th><?php echo $this->Paginator->sort('aseguradora'); ?></th>
            <th><?php echo $this->Paginator->sort('otraseguradora'); ?></th>
            <th><?php echo $this->Paginator->sort('regimen'); ?></th>
            <th><?php echo $this->Paginator->sort('estadoafiliacion'); ?></th>
            <th><?php echo $this->Paginator->sort('telefono'); ?></th>
            <th><?php echo $this->Paginator->sort('email'); ?></th>
            <th><?php echo $this->Paginator->sort('prematuro'); ?></th>
            <th><?php echo $this->Paginator->sort('discapacidad'); ?></th>
            <th><?php echo $this->Paginator->sort('peso'); ?></th>
            <th><?php echo $this->Paginator->sort('talla'); ?></th>
            <th><?php echo $this->Paginator->sort('bajopeso'); ?></th>
            <th><?php echo $this->Paginator->sort('perimetrocefalico'); ?></th>
            <th><?php echo $this->Paginator->sort('perimetrobraquial'); ?></th>
            <th><?php echo $this->Paginator->sort('perimetrocintura'); ?></th>
            <th><?php echo $this->Paginator->sort('perimetrocadera'); ?></th>
            <th><?php echo $this->Paginator->sort('tensionarterial'); ?></th>
            <th><?php echo $this->Paginator->sort('lactanciamaterna'); ?></th>
            <th><?php echo $this->Paginator->sort('condicioncronica'); ?></th>
            <th><?php echo $this->Paginator->sort('anomaliacongenita'); ?></th>
            <th><?php echo $this->Paginator->sort('esquemavacunacion'); ?></th>
            <th><?php echo $this->Paginator->sort('desparasitacion'); ?></th>
            <th><?php echo $this->Paginator->sort('crecimientoydesarrollo'); ?></th>
            <th><?php echo $this->Paginator->sort('desnutricion'); ?></th>
            <th><?php echo $this->Paginator->sort('sospechamaltrato'); ?></th>
            <th><?php echo $this->Paginator->sort('padresconsumo'); ?></th>
            <th><?php echo $this->Paginator->sort('cuidador'); ?></th>
            <th><?php echo $this->Paginator->sort('educacion'); ?></th>
            <th><?php echo $this->Paginator->sort('higieneoral'); ?></th>
            <th><?php echo $this->Paginator->sort('desarrolloinfantil'); ?></th>
            <th><?php echo $this->Paginator->sort('eda'); ?></th>
            <th><?php echo $this->Paginator->sort('era'); ?></th>
            <th><?php echo $this->Paginator->sort('canalizacionuno'); ?></th>
            <th><?php echo $this->Paginator->sort('canalizaciondos'); ?></th>
            <th><?php echo $this->Paginator->sort('educacionuno'); ?></th>
            <th><?php echo $this->Paginator->sort('canalizacion_id'); ?></th>
            <th><?php echo $this->Paginator->sort('canalizaciontres'); ?></th>
            <th><?php echo $this->Paginator->sort('estadocanalizacion'); ?></th>
            <th><?php echo $this->Paginator->sort('observacioncanalizacion'); ?></th>
            <th><?php echo $this->Paginator->sort('fechaRegistro'); ?></th>
            <th><?php echo $this->Paginator->sort('registroCanalizacion'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($primerainfancias as $primerainfancia): ?>
        <tr>
            <td><?php echo h($primerainfancia['Primerainfancia']['id']); ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($primerainfancia['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $primerainfancia['Persona']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Html->link($primerainfancia['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $primerainfancia['Familia']['id'])); ?>
            </td>
            <td><?php echo h($primerainfancia['Primerainfancia']['tipodocumento']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['numerodoc']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['primerapellido']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['segundoapellido']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['primernombre']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['segundonombre']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['fechanac']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['edad']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['sexo']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['aseguradora']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['otraseguradora']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['regimen']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['estadoafiliacion']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['telefono']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['email']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['prematuro']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['discapacidad']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['peso']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['talla']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['bajopeso']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['perimetrocefalico']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['perimetrobraquial']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['perimetrocintura']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['perimetrocadera']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['tensionarterial']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['lactanciamaterna']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['condicioncronica']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['anomaliacongenita']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['esquemavacunacion']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['desparasitacion']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['crecimientoydesarrollo']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['desnutricion']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['sospechamaltrato']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['padresconsumo']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['cuidador']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['educacion']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['higieneoral']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['desarrolloinfantil']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['eda']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['era']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['canalizacionuno']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['canalizaciondos']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['educacionuno']); ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($primerainfancia['Canalizacion']['enlace'], array('controller' => 'canalizaciones', 'action' => 'view', $primerainfancia['Canalizacion']['id'])); ?>
            </td>
            <td><?php echo h($primerainfancia['Primerainfancia']['canalizaciontres']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['estadocanalizacion']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['observacioncanalizacion']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['fechaRegistro']); ?>&nbsp;</td>
            <td><?php echo h($primerainfancia['Primerainfancia']['registroCanalizacion']); ?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $primerainfancia['Primerainfancia']['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $primerainfancia['Primerainfancia']['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $primerainfancia['Primerainfancia']['id']), array(), __('Are you sure you want to delete # %s?', $primerainfancia['Primerainfancia']['id'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?> </p>
    <div class="paging">
        <?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Primerainfancia'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Canalizacion'), array('controller' => 'canalizaciones', 'action' => 'add')); ?>
        </li>
    </ul>
</div>