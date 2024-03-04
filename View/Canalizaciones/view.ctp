<div class="canalizaciones view">
    <h2><?php echo __('Canalizacion'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipo'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['tipo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nombre'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['nombre']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sede'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['sede']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('TelefonoInstitucional'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['telefonoInstitucional']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Enlaceuno'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['enlaceuno']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cargouno'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['cargouno']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Telefono1'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['telefono1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Correo1'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['correo1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Enlacedos'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['enlacedos']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cargodos'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['cargodos']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Telefono2'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['telefono2']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Correo2'); ?></dt>
        <dd>
            <?php echo h($canalizacion['Canalizacion']['correo2']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Canalizacion'), array('action' => 'edit', $canalizacion['Canalizacion']['id'])); ?>
        </li>
        <li><?php echo $this->Form->postLink(__('Delete Canalizacion'), array('action' => 'delete', $canalizacion['Canalizacion']['id']), array(), __('Are you sure you want to delete # %s?', $canalizacion['Canalizacion']['id'])); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Canalizaciones'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Canalizacion'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Adolescencias'), array('controller' => 'adolescencias', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Adolescencia'), array('controller' => 'adolescencias', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Infantils'), array('controller' => 'infantils', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Infantil'), array('controller' => 'infantils', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Juventudadultos'), array('controller' => 'juventudadultos', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Juventudadulto'), array('controller' => 'juventudadultos', 'action' => 'add')); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?>
        </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Adolescencias'); ?></h3>
    <?php if (!empty($canalizacion['Adolescencia'])) : ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Familia Id'); ?></th>
            <th><?php echo __('Persona Id'); ?></th>
            <th><?php echo __('Tipodocumento'); ?></th>
            <th><?php echo __('Numerodoc'); ?></th>
            <th><?php echo __('Primerapellido'); ?></th>
            <th><?php echo __('Segundoapellido'); ?></th>
            <th><?php echo __('Primernombre'); ?></th>
            <th><?php echo __('Segundonombre'); ?></th>
            <th><?php echo __('Fechanac'); ?></th>
            <th><?php echo __('Edad'); ?></th>
            <th><?php echo __('Sexo'); ?></th>
            <th><?php echo __('Genero'); ?></th>
            <th><?php echo __('Aseguradora'); ?></th>
            <th><?php echo __('Regimen'); ?></th>
            <th><?php echo __('Estadoafiliacion'); ?></th>
            <th><?php echo __('Telefono'); ?></th>
            <th><?php echo __('Email'); ?></th>
            <th><?php echo __('Discapacidad'); ?></th>
            <th><?php echo __('Peso'); ?></th>
            <th><?php echo __('Talla'); ?></th>
            <th><?php echo __('Indicemasacorporal'); ?></th>
            <th><?php echo __('Tensionarterial'); ?></th>
            <th><?php echo __('Condicioncronica'); ?></th>
            <th><?php echo __('Esquemavacunacion'); ?></th>
            <th><?php echo __('Desparasitacion'); ?></th>
            <th><?php echo __('Valoracionmedica'); ?></th>
            <th><?php echo __('Saludoral'); ?></th>
            <th><?php echo __('Iniciovidasexual'); ?></th>
            <th><?php echo __('Metodosanticonceptivos'); ?></th>
            <th><?php echo __('Infeccionestransmisionsexual'); ?></th>
            <th><?php echo __('Gestacion'); ?></th>
            <th><?php echo __('Consumospa'); ?></th>
            <th><?php echo __('Consumospa1'); ?></th>
            <th><?php echo __('Riesgopsicosocial'); ?></th>
            <th><?php echo __('Riesgopsicosocial1'); ?></th>
            <th><?php echo __('Estudio'); ?></th>
            <th><?php echo __('Rendimientoescolar'); ?></th>
            <th><?php echo __('Sopechamaltrato'); ?></th>
            <th><?php echo __('Ayudafamiliar'); ?></th>
            <th><?php echo __('Participacionfamiliar'); ?></th>
            <th><?php echo __('Aceptacionapoyo'); ?></th>
            <th><?php echo __('Afectoemociones'); ?></th>
            <th><?php echo __('Compartirfamilia'); ?></th>
            <th><?php echo __('Canalizacionuno'); ?></th>
            <th><?php echo __('Canalizaciondos'); ?></th>
            <th><?php echo __('Canalizaciontres'); ?></th>
            <th><?php echo __('Canalizacion Id'); ?></th>
            <th><?php echo __('Educacion'); ?></th>
            <th><?php echo __('FechaRegistro'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($canalizacion['Adolescencia'] as $adolescencia) : ?>
        <tr>
            <td><?php echo $adolescencia['id']; ?></td>
            <td><?php echo $adolescencia['familia_id']; ?></td>
            <td><?php echo $adolescencia['persona_id']; ?></td>
            <td><?php echo $adolescencia['tipodocumento']; ?></td>
            <td><?php echo $adolescencia['numerodoc']; ?></td>
            <td><?php echo $adolescencia['primerapellido']; ?></td>
            <td><?php echo $adolescencia['segundoapellido']; ?></td>
            <td><?php echo $adolescencia['primernombre']; ?></td>
            <td><?php echo $adolescencia['segundonombre']; ?></td>
            <td><?php echo $adolescencia['fechanac']; ?></td>
            <td><?php echo $adolescencia['edad']; ?></td>
            <td><?php echo $adolescencia['sexo']; ?></td>
            <td><?php echo $adolescencia['genero']; ?></td>
            <td><?php echo $adolescencia['aseguradora']; ?></td>
            <td><?php echo $adolescencia['regimen']; ?></td>
            <td><?php echo $adolescencia['estadoafiliacion']; ?></td>
            <td><?php echo $adolescencia['telefono']; ?></td>
            <td><?php echo $adolescencia['email']; ?></td>
            <td><?php echo $adolescencia['discapacidad']; ?></td>
            <td><?php echo $adolescencia['peso']; ?></td>
            <td><?php echo $adolescencia['talla']; ?></td>
            <td><?php echo $adolescencia['indicemasacorporal']; ?></td>
            <td><?php echo $adolescencia['tensionarterial']; ?></td>
            <td><?php echo $adolescencia['condicioncronica']; ?></td>
            <td><?php echo $adolescencia['esquemavacunacion']; ?></td>
            <td><?php echo $adolescencia['desparasitacion']; ?></td>
            <td><?php echo $adolescencia['valoracionmedica']; ?></td>
            <td><?php echo $adolescencia['saludoral']; ?></td>
            <td><?php echo $adolescencia['iniciovidasexual']; ?></td>
            <td><?php echo $adolescencia['metodosanticonceptivos']; ?></td>
            <td><?php echo $adolescencia['infeccionestransmisionsexual']; ?></td>
            <td><?php echo $adolescencia['gestacion']; ?></td>
            <td><?php echo $adolescencia['consumospa']; ?></td>
            <td><?php echo $adolescencia['consumospa1']; ?></td>
            <td><?php echo $adolescencia['riesgopsicosocial']; ?></td>
            <td><?php echo $adolescencia['riesgopsicosocial1']; ?></td>
            <td><?php echo $adolescencia['estudio']; ?></td>
            <td><?php echo $adolescencia['rendimientoescolar']; ?></td>
            <td><?php echo $adolescencia['sopechamaltrato']; ?></td>
            <td><?php echo $adolescencia['ayudafamiliar']; ?></td>
            <td><?php echo $adolescencia['participacionfamiliar']; ?></td>
            <td><?php echo $adolescencia['aceptacionapoyo']; ?></td>
            <td><?php echo $adolescencia['afectoemociones']; ?></td>
            <td><?php echo $adolescencia['compartirfamilia']; ?></td>
            <td><?php echo $adolescencia['canalizacionuno']; ?></td>
            <td><?php echo $adolescencia['canalizaciondos']; ?></td>
            <td><?php echo $adolescencia['canalizaciontres']; ?></td>
            <td><?php echo $adolescencia['canalizacion_id']; ?></td>
            <td><?php echo $adolescencia['educacion']; ?></td>
            <td><?php echo $adolescencia['fechaRegistro']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'adolescencias', 'action' => 'view', $adolescencia['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'adolescencias', 'action' => 'edit', $adolescencia['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'adolescencias', 'action' => 'delete', $adolescencia['id']), array(), __('Are you sure you want to delete # %s?', $adolescencia['id'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Adolescencia'), array('controller' => 'adolescencias', 'action' => 'add')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Infantils'); ?></h3>
    <?php if (!empty($canalizacion['Infantil'])) : ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Familia Id'); ?></th>
            <th><?php echo __('Persona Id'); ?></th>
            <th><?php echo __('Tipodocumento'); ?></th>
            <th><?php echo __('Numerodoc'); ?></th>
            <th><?php echo __('Primerapellido'); ?></th>
            <th><?php echo __('Segundoapellido'); ?></th>
            <th><?php echo __('Primernombre'); ?></th>
            <th><?php echo __('Segundonombre'); ?></th>
            <th><?php echo __('Fechanac'); ?></th>
            <th><?php echo __('Edad'); ?></th>
            <th><?php echo __('Sexo'); ?></th>
            <th><?php echo __('Aseguradora'); ?></th>
            <th><?php echo __('Regimen'); ?></th>
            <th><?php echo __('Estadoafiliacion'); ?></th>
            <th><?php echo __('Telefono'); ?></th>
            <th><?php echo __('Email'); ?></th>
            <th><?php echo __('Discapacidad'); ?></th>
            <th><?php echo __('Peso'); ?></th>
            <th><?php echo __('Talla'); ?></th>
            <th><?php echo __('Indicemasacorporal'); ?></th>
            <th><?php echo __('Tensionarterial'); ?></th>
            <th><?php echo __('Condicioncronica'); ?></th>
            <th><?php echo __('Esquemavacunacion'); ?></th>
            <th><?php echo __('Desparasitacion'); ?></th>
            <th><?php echo __('Crecimientoydesarrollo'); ?></th>
            <th><?php echo __('Desnutricion'); ?></th>
            <th><?php echo __('Era'); ?></th>
            <th><?php echo __('Eda'); ?></th>
            <th><?php echo __('Cuidador'); ?></th>
            <th><?php echo __('Padresconsumo'); ?></th>
            <th><?php echo __('Higieneoral'); ?></th>
            <th><?php echo __('Desarrolloinfantil'); ?></th>
            <th><?php echo __('Estudio'); ?></th>
            <th><?php echo __('Rendimientoescolar'); ?></th>
            <th><?php echo __('Sopechamaltrato'); ?></th>
            <th><?php echo __('Ayudafamiliar'); ?></th>
            <th><?php echo __('Participacionfamiliar'); ?></th>
            <th><?php echo __('Aceptacionapoyo'); ?></th>
            <th><?php echo __('Afectoemociones'); ?></th>
            <th><?php echo __('Compartirfamilia'); ?></th>
            <th><?php echo __('Canalizacionuno'); ?></th>
            <th><?php echo __('Canalizaciondos'); ?></th>
            <th><?php echo __('Canalizaciontres'); ?></th>
            <th><?php echo __('Canalizacion Id'); ?></th>
            <th><?php echo __('Educacionuno'); ?></th>
            <th><?php echo __('FechaRegistro'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($canalizacion['Infantil'] as $infantil) : ?>
        <tr>
            <td><?php echo $infantil['id']; ?></td>
            <td><?php echo $infantil['familia_id']; ?></td>
            <td><?php echo $infantil['persona_id']; ?></td>
            <td><?php echo $infantil['tipodocumento']; ?></td>
            <td><?php echo $infantil['numerodoc']; ?></td>
            <td><?php echo $infantil['primerapellido']; ?></td>
            <td><?php echo $infantil['segundoapellido']; ?></td>
            <td><?php echo $infantil['primernombre']; ?></td>
            <td><?php echo $infantil['segundonombre']; ?></td>
            <td><?php echo $infantil['fechanac']; ?></td>
            <td><?php echo $infantil['edad']; ?></td>
            <td><?php echo $infantil['sexo']; ?></td>
            <td><?php echo $infantil['aseguradora']; ?></td>
            <td><?php echo $infantil['regimen']; ?></td>
            <td><?php echo $infantil['estadoafiliacion']; ?></td>
            <td><?php echo $infantil['telefono']; ?></td>
            <td><?php echo $infantil['email']; ?></td>
            <td><?php echo $infantil['discapacidad']; ?></td>
            <td><?php echo $infantil['peso']; ?></td>
            <td><?php echo $infantil['talla']; ?></td>
            <td><?php echo $infantil['indicemasacorporal']; ?></td>
            <td><?php echo $infantil['tensionarterial']; ?></td>
            <td><?php echo $infantil['condicioncronica']; ?></td>
            <td><?php echo $infantil['esquemavacunacion']; ?></td>
            <td><?php echo $infantil['desparasitacion']; ?></td>
            <td><?php echo $infantil['crecimientoydesarrollo']; ?></td>
            <td><?php echo $infantil['desnutricion']; ?></td>
            <td><?php echo $infantil['era']; ?></td>
            <td><?php echo $infantil['eda']; ?></td>
            <td><?php echo $infantil['cuidador']; ?></td>
            <td><?php echo $infantil['padresconsumo']; ?></td>
            <td><?php echo $infantil['higieneoral']; ?></td>
            <td><?php echo $infantil['desarrolloinfantil']; ?></td>
            <td><?php echo $infantil['estudio']; ?></td>
            <td><?php echo $infantil['rendimientoescolar']; ?></td>
            <td><?php echo $infantil['sopechamaltrato']; ?></td>
            <td><?php echo $infantil['ayudafamiliar']; ?></td>
            <td><?php echo $infantil['participacionfamiliar']; ?></td>
            <td><?php echo $infantil['aceptacionapoyo']; ?></td>
            <td><?php echo $infantil['afectoemociones']; ?></td>
            <td><?php echo $infantil['compartirfamilia']; ?></td>
            <td><?php echo $infantil['canalizacionuno']; ?></td>
            <td><?php echo $infantil['canalizaciondos']; ?></td>
            <td><?php echo $infantil['canalizaciontres']; ?></td>
            <td><?php echo $infantil['canalizacion_id']; ?></td>
            <td><?php echo $infantil['educacionuno']; ?></td>
            <td><?php echo $infantil['fechaRegistro']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'infantils', 'action' => 'view', $infantil['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'infantils', 'action' => 'edit', $infantil['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'infantils', 'action' => 'delete', $infantil['id']), array(), __('Are you sure you want to delete # %s?', $infantil['id'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Infantil'), array('controller' => 'infantils', 'action' => 'add')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Juventudadultos'); ?></h3>
    <?php if (!empty($canalizacion['Juventudadulto'])) : ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Familia Id'); ?></th>
            <th><?php echo __('Persona Id'); ?></th>
            <th><?php echo __('Tipodocumento'); ?></th>
            <th><?php echo __('Numerodoc'); ?></th>
            <th><?php echo __('Primerapellido'); ?></th>
            <th><?php echo __('Segundoapellido'); ?></th>
            <th><?php echo __('Primernombre'); ?></th>
            <th><?php echo __('Segundonombre'); ?></th>
            <th><?php echo __('Fechanac'); ?></th>
            <th><?php echo __('Edad'); ?></th>
            <th><?php echo __('Sexo'); ?></th>
            <th><?php echo __('Genero'); ?></th>
            <th><?php echo __('Aseguradora'); ?></th>
            <th><?php echo __('Regimen'); ?></th>
            <th><?php echo __('Estadoafiliacion'); ?></th>
            <th><?php echo __('Telefono'); ?></th>
            <th><?php echo __('Email'); ?></th>
            <th><?php echo __('Discapacidad'); ?></th>
            <th><?php echo __('Peso'); ?></th>
            <th><?php echo __('Talla'); ?></th>
            <th><?php echo __('Indicemasacorporal'); ?></th>
            <th><?php echo __('Tensionarterial'); ?></th>
            <th><?php echo __('Condicioncronica'); ?></th>
            <th><?php echo __('Condicioncronica1'); ?></th>
            <th><?php echo __('Esquemavacunacion'); ?></th>
            <th><?php echo __('Desparasitacion'); ?></th>
            <th><?php echo __('Valoracionmedica'); ?></th>
            <th><?php echo __('Tomacitologia'); ?></th>
            <th><?php echo __('Saludoral'); ?></th>
            <th><?php echo __('Iniciovidasexual'); ?></th>
            <th><?php echo __('Metodosanticonceptivos'); ?></th>
            <th><?php echo __('Infeccionestransmisionsexual'); ?></th>
            <th><?php echo __('Mamografia'); ?></th>
            <th><?php echo __('Antecedenteginecologico'); ?></th>
            <th><?php echo __('Ancedenteginecologico1'); ?></th>
            <th><?php echo __('Gestacion'); ?></th>
            <th><?php echo __('Controlprenatal'); ?></th>
            <th><?php echo __('Riesgoembarazo'); ?></th>
            <th><?php echo __('SignoAlarma'); ?></th>
            <th><?php echo __('Saludalternativa'); ?></th>
            <th><?php echo __('Cursovida'); ?></th>
            <th><?php echo __('Ocupacion'); ?></th>
            <th><?php echo __('Estudio'); ?></th>
            <th><?php echo __('Consumospa'); ?></th>
            <th><?php echo __('Consumospa1'); ?></th>
            <th><?php echo __('Riesgopsicosocial'); ?></th>
            <th><?php echo __('Riesgopsicosocial1'); ?></th>
            <th><?php echo __('Sopechamaltrato'); ?></th>
            <th><?php echo __('Ayudafamiliar'); ?></th>
            <th><?php echo __('Participacionfamiliar'); ?></th>
            <th><?php echo __('Aceptacionapoyo'); ?></th>
            <th><?php echo __('Afectoemociones'); ?></th>
            <th><?php echo __('Compartirfamilia'); ?></th>
            <th><?php echo __('Canalizacionuno'); ?></th>
            <th><?php echo __('Canalizaciondos'); ?></th>
            <th><?php echo __('Canalizaciontres'); ?></th>
            <th><?php echo __('Canalizacion Id'); ?></th>
            <th><?php echo __('Educacion'); ?></th>
            <th><?php echo __('FechaRegistro'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($canalizacion['Juventudadulto'] as $juventudadulto) : ?>
        <tr>
            <td><?php echo $juventudadulto['id']; ?></td>
            <td><?php echo $juventudadulto['familia_id']; ?></td>
            <td><?php echo $juventudadulto['persona_id']; ?></td>
            <td><?php echo $juventudadulto['tipodocumento']; ?></td>
            <td><?php echo $juventudadulto['numerodoc']; ?></td>
            <td><?php echo $juventudadulto['primerapellido']; ?></td>
            <td><?php echo $juventudadulto['segundoapellido']; ?></td>
            <td><?php echo $juventudadulto['primernombre']; ?></td>
            <td><?php echo $juventudadulto['segundonombre']; ?></td>
            <td><?php echo $juventudadulto['fechanac']; ?></td>
            <td><?php echo $juventudadulto['edad']; ?></td>
            <td><?php echo $juventudadulto['sexo']; ?></td>
            <td><?php echo $juventudadulto['genero']; ?></td>
            <td><?php echo $juventudadulto['aseguradora']; ?></td>
            <td><?php echo $juventudadulto['regimen']; ?></td>
            <td><?php echo $juventudadulto['estadoafiliacion']; ?></td>
            <td><?php echo $juventudadulto['telefono']; ?></td>
            <td><?php echo $juventudadulto['email']; ?></td>
            <td><?php echo $juventudadulto['discapacidad']; ?></td>
            <td><?php echo $juventudadulto['peso']; ?></td>
            <td><?php echo $juventudadulto['talla']; ?></td>
            <td><?php echo $juventudadulto['indicemasacorporal']; ?></td>
            <td><?php echo $juventudadulto['tensionarterial']; ?></td>
            <td><?php echo $juventudadulto['condicioncronica']; ?></td>
            <td><?php echo $juventudadulto['condicioncronica1']; ?></td>
            <td><?php echo $juventudadulto['esquemavacunacion']; ?></td>
            <td><?php echo $juventudadulto['desparasitacion']; ?></td>
            <td><?php echo $juventudadulto['valoracionmedica']; ?></td>
            <td><?php echo $juventudadulto['tomacitologia']; ?></td>
            <td><?php echo $juventudadulto['saludoral']; ?></td>
            <td><?php echo $juventudadulto['iniciovidasexual']; ?></td>
            <td><?php echo $juventudadulto['metodosanticonceptivos']; ?></td>
            <td><?php echo $juventudadulto['infeccionestransmisionsexual']; ?></td>
            <td><?php echo $juventudadulto['mamografia']; ?></td>
            <td><?php echo $juventudadulto['antecedenteginecologico']; ?></td>
            <td><?php echo $juventudadulto['ancedenteginecologico1']; ?></td>
            <td><?php echo $juventudadulto['gestacion']; ?></td>
            <td><?php echo $juventudadulto['controlprenatal']; ?></td>
            <td><?php echo $juventudadulto['riesgoembarazo']; ?></td>
            <td><?php echo $juventudadulto['signoAlarma']; ?></td>
            <td><?php echo $juventudadulto['saludalternativa']; ?></td>
            <td><?php echo $juventudadulto['cursovida']; ?></td>
            <td><?php echo $juventudadulto['ocupacion']; ?></td>
            <td><?php echo $juventudadulto['estudio']; ?></td>
            <td><?php echo $juventudadulto['consumospa']; ?></td>
            <td><?php echo $juventudadulto['consumospa1']; ?></td>
            <td><?php echo $juventudadulto['riesgopsicosocial']; ?></td>
            <td><?php echo $juventudadulto['riesgopsicosocial1']; ?></td>
            <td><?php echo $juventudadulto['sopechamaltrato']; ?></td>
            <td><?php echo $juventudadulto['ayudafamiliar']; ?></td>
            <td><?php echo $juventudadulto['participacionfamiliar']; ?></td>
            <td><?php echo $juventudadulto['aceptacionapoyo']; ?></td>
            <td><?php echo $juventudadulto['afectoemociones']; ?></td>
            <td><?php echo $juventudadulto['compartirfamilia']; ?></td>
            <td><?php echo $juventudadulto['canalizacionuno']; ?></td>
            <td><?php echo $juventudadulto['canalizaciondos']; ?></td>
            <td><?php echo $juventudadulto['canalizaciontres']; ?></td>
            <td><?php echo $juventudadulto['canalizacion_id']; ?></td>
            <td><?php echo $juventudadulto['educacion']; ?></td>
            <td><?php echo $juventudadulto['fechaRegistro']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'juventudadultos', 'action' => 'view', $juventudadulto['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'juventudadultos', 'action' => 'edit', $juventudadulto['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'juventudadultos', 'action' => 'delete', $juventudadulto['id']), array(), __('Are you sure you want to delete # %s?', $juventudadulto['id'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Juventudadulto'), array('controller' => 'juventudadultos', 'action' => 'add')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Primerainfancias'); ?></h3>
    <?php if (!empty($canalizacion['Primerainfancia'])) : ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Persona Id'); ?></th>
            <th><?php echo __('Familia Id'); ?></th>
            <th><?php echo __('Tipodocumento'); ?></th>
            <th><?php echo __('Numerodoc'); ?></th>
            <th><?php echo __('Primerapellido'); ?></th>
            <th><?php echo __('Segundoapellido'); ?></th>
            <th><?php echo __('Primernombre'); ?></th>
            <th><?php echo __('Segundonombre'); ?></th>
            <th><?php echo __('Fechanac'); ?></th>
            <th><?php echo __('Edad'); ?></th>
            <th><?php echo __('Sexo'); ?></th>
            <th><?php echo __('Aseguradora'); ?></th>
            <th><?php echo __('Regimen'); ?></th>
            <th><?php echo __('Estadoafiliacion'); ?></th>
            <th><?php echo __('Telefono'); ?></th>
            <th><?php echo __('Email'); ?></th>
            <th><?php echo __('Prematuro'); ?></th>
            <th><?php echo __('Discapacidad'); ?></th>
            <th><?php echo __('Peso'); ?></th>
            <th><?php echo __('Talla'); ?></th>
            <th><?php echo __('Bajopeso'); ?></th>
            <th><?php echo __('Perimetrocefalico'); ?></th>
            <th><?php echo __('Perimetrobraquial'); ?></th>
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
            <th><?php echo __('Sospechamaltrato'); ?></th>
            <th><?php echo __('Padresconsumo'); ?></th>
            <th><?php echo __('Cuidador'); ?></th>
            <th><?php echo __('Educacion'); ?></th>
            <th><?php echo __('Higieneoral'); ?></th>
            <th><?php echo __('Desarrolloinfantil'); ?></th>
            <th><?php echo __('Eda'); ?></th>
            <th><?php echo __('Era'); ?></th>
            <th><?php echo __('Canalizacionuno'); ?></th>
            <th><?php echo __('Canalizaciondos'); ?></th>
            <th><?php echo __('Educacionuno'); ?></th>
            <th><?php echo __('Canalizacion Id'); ?></th>
            <th><?php echo __('Canalizaciontres'); ?></th>
            <th><?php echo __('FechaRegistro'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($canalizacion['Primerainfancia'] as $primerainfancia) : ?>
        <tr>
            <td><?php echo $primerainfancia['id']; ?></td>
            <td><?php echo $primerainfancia['persona_id']; ?></td>
            <td><?php echo $primerainfancia['familia_id']; ?></td>
            <td><?php echo $primerainfancia['tipodocumento']; ?></td>
            <td><?php echo $primerainfancia['numerodoc']; ?></td>
            <td><?php echo $primerainfancia['primerapellido']; ?></td>
            <td><?php echo $primerainfancia['segundoapellido']; ?></td>
            <td><?php echo $primerainfancia['primernombre']; ?></td>
            <td><?php echo $primerainfancia['segundonombre']; ?></td>
            <td><?php echo $primerainfancia['fechanac']; ?></td>
            <td><?php echo $primerainfancia['edad']; ?></td>
            <td><?php echo $primerainfancia['sexo']; ?></td>
            <td><?php echo $primerainfancia['aseguradora']; ?></td>
            <td><?php echo $primerainfancia['regimen']; ?></td>
            <td><?php echo $primerainfancia['estadoafiliacion']; ?></td>
            <td><?php echo $primerainfancia['telefono']; ?></td>
            <td><?php echo $primerainfancia['email']; ?></td>
            <td><?php echo $primerainfancia['prematuro']; ?></td>
            <td><?php echo $primerainfancia['discapacidad']; ?></td>
            <td><?php echo $primerainfancia['peso']; ?></td>
            <td><?php echo $primerainfancia['talla']; ?></td>
            <td><?php echo $primerainfancia['bajopeso']; ?></td>
            <td><?php echo $primerainfancia['perimetrocefalico']; ?></td>
            <td><?php echo $primerainfancia['perimetrobraquial']; ?></td>
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
            <td><?php echo $primerainfancia['sospechamaltrato']; ?></td>
            <td><?php echo $primerainfancia['padresconsumo']; ?></td>
            <td><?php echo $primerainfancia['cuidador']; ?></td>
            <td><?php echo $primerainfancia['educacion']; ?></td>
            <td><?php echo $primerainfancia['higieneoral']; ?></td>
            <td><?php echo $primerainfancia['desarrolloinfantil']; ?></td>
            <td><?php echo $primerainfancia['eda']; ?></td>
            <td><?php echo $primerainfancia['era']; ?></td>
            <td><?php echo $primerainfancia['canalizacionuno']; ?></td>
            <td><?php echo $primerainfancia['canalizaciondos']; ?></td>
            <td><?php echo $primerainfancia['educacionuno']; ?></td>
            <td><?php echo $primerainfancia['canalizacion_id']; ?></td>
            <td><?php echo $primerainfancia['canalizaciontres']; ?></td>
            <td><?php echo $primerainfancia['fechaRegistro']; ?></td>
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
            <li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?>
            </li>
        </ul>
    </div>
</div>