<?php $this->layout = 'default_familia';
echo $this->Html->script('validationFamilia'); ?>

<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 's1189.mex9.mysecurecloudhost.com';
$port = '';
$userS = 'agsolutic_fichafamiliar';
$passS = 'FichaFamiliar2023*';
$bd = 'agsolutic_fichafamiliar';
?>

<style>
.negrilla {
    font-size: small;
    font-weight: bold;
}

.my-button {
    padding: 10px 20px;
    background-color: #3366CC;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;


}

.my-button:hover {
    background-color: #337CCF;
}

.my-button:active {
    background-color: #337CCF;
}
</style>


<div class="form-group col-sm-12">

    <div class="col-12 text-center">
        <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px;">Seguimiento a
            Canalizaciones</h1>
    </div>

    <div class="panel-body">
        <div class="dataTable_wrapper">

            <div class="row">
                <div class="col-lg-12">

                    <table width="100%" class="table table-responsive table-striped table-bordered  ">
                        <tr>
                            <td>
                                <strong>ID:</strong>
                                <?php
                                echo ($canalizacion['Canalizacion']['id']); ?>
                            </td>



                            <td><strong>Tipo de entidad:</strong>
                                <?php
                                echo ($canalizacion['Canalizacion']['tipo']);
                                ?>
                            </td>
                            <td>
                                <strong>Nombre entidad:</strong>
                                <?php echo ($canalizacion['Canalizacion']['nombre']); ?>
                            </td>

                        </tr>
                        <tr>
                            <td><strong>Sede:</strong>
                                <?php echo ($canalizacion['Canalizacion']['sede']); ?>
                            </td>
                            <td colspan="2"> <strong> Tel. Institucional:</strong>
                                <?php echo ($canalizacion['Canalizacion']['telefonoInstitucional']); ?>
                            </td>


                        <tr>

                            <td><strong>Enlace Canalización:</strong>
                                <?php echo ($canalizacion['Canalizacion']['enlaceuno']); ?>
                            </td>
                            <td colspan="2"><strong>Cargo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['cargouno']); ?></td>


                        </tr>

                        <tr>
                            <td><strong>Teléfono:</strong>
                                <?php echo ($canalizacion['Canalizacion']['telefono1']); ?>
                            </td>
                            <td colspan="6"><strong>Correo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['correo1']); ?>
                            </td>
                        </tr>

                        <tr>

                            <td><strong>Enlace Canalización::</strong>
                                <?php echo ($canalizacion['Canalizacion']['enlacedos']); ?>
                            </td>
                            <td colspan="6"><strong>Cargo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['cargodos']); ?></td>


                        </tr>

                        <tr>
                            <td><strong>Teléfono:</strong>
                                <?php echo ($canalizacion['Canalizacion']['telefono2']); ?>
                            </td>
                            <td colspan="6"><strong>Correo:</strong>
                                <?php echo ($canalizacion['Canalizacion']['correo2']); ?>
                            </td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>

</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Primera infancia</h3>

<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                                <?php if (!empty($canalizacion['Primerainfancia'])) : ?>
                                <thead>
                                    <tr>
                                        <th><?php echo __('Id'); ?></th>
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
                                        <th><?php echo __('Telefono'); ?></th>
                                        <th><?php echo __('Telefono1'); ?></th>
                                        <th><?php echo __('Email'); ?></th>
                                        <th><?php echo __('Prematuro'); ?></th>
                                        <th><?php echo __('Discapacidad'); ?></th>
                                        <th><?php echo __('Canalizacionuno'); ?></th>
                                        <th><?php echo __('Canalizaciondos'); ?></th>
                                        <th><?php echo __('Educacionuno'); ?></th>
                                        <th><?php echo __('Canalizacion Id'); ?></th>
                                        <th><?php echo __('Canalizaciontres'); ?></th>
                                        <th><?php echo __('Estado'); ?></th>
                                        <th><?php echo __('FechaRegistro'); ?></th>


                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Primerainfancia'] as $primerainfancia) : ?>
                                    <tr class="gradeA odd">
                                        <td class="sorting_1"><?php echo $primerainfancia['id']; ?></td>
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
                                        <td><?php echo $primerainfancia['telefono']; ?></td>
                                        <td>
                                            <?php

                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                    mysqli_select_db($link, $bd);
                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                    $result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $primerainfancia['familia_id']);
                                                    while ($fila = mysqli_fetch_array($result)) {
                                                        echo $fila['celular'];

                                                        mysqli_close($link);
                                                    }
                                                    ?>
                                        </td>
                                        <td><?php echo $primerainfancia['email']; ?></td>
                                        <td><?php echo $primerainfancia['prematuro']; ?></td>
                                        <td><?php echo $primerainfancia['discapacidad']; ?></td>
                                        <td><?php echo $primerainfancia['canalizacionuno']; ?></td>
                                        <td><?php echo $primerainfancia['canalizaciondos']; ?></td>
                                        <td><?php echo $primerainfancia['educacionuno']; ?></td>
                                        <td><?php echo $primerainfancia['canalizacion_id']; ?></td>
                                        <td><?php echo $primerainfancia['canalizaciontres']; ?></td>
                                        <td><?php echo $primerainfancia['estadocanalizacion']; ?></td>
                                        <td><?php echo $primerainfancia['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('Ver'), array('controller' => 'primerainfancias', 'action' => 'view', $primerainfancia['id'])); ?>
                                            <?php echo $this->Html->link(__('Seguimiento'), array('controller' => 'primerainfancias', 'action' => 'seguimiento', $primerainfancia['id'])); ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>


<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Infancia</h3>

<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-f">
                                <?php if (!empty($canalizacion['Infantil'])) : ?>
                                <thead>
                                    <tr>
                                        <th><?php echo __('Id'); ?></th>
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
                                        <th><?php echo __('Telefono'); ?></th>
                                        <!--th><?php echo __('Telefono1'); ?></th-->
                                        <th><?php echo __('Email'); ?></th>
                                        <th><?php echo __('Discapacidad'); ?></th>
                                        <th><?php echo __('Canalizacionuno'); ?></th>
                                        <th><?php echo __('Canalizaciondos'); ?></th>
                                        <th><?php echo __('Canalizaciontres'); ?></th>
                                        <th><?php echo __('Canalizacion Id'); ?></th>
                                        <th><?php echo __('Educacionuno'); ?></th>
                                        <th><?php echo __('Estado'); ?></th>
                                        <th><?php echo __('FechaRegistro'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Infantil'] as $infantil) : ?>
                                    <tr class="gradeA odd">
                                        <td class="sorting_1"><?php echo $infantil['id']; ?></td>
                                        <td><?php echo $infantil['familia_id']; ?></td>
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

                                        <td><?php echo $infantil['telefono']; ?></td>
                                        <!--td>
                                            <?php

                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                    mysqli_select_db($link, $bd);
                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                    $result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $infantil['familia_id']);
                                                    while ($fila = mysqli_fetch_array($result)) {
                                                        echo $fila['celular'];

                                                        mysqli_close($link);
                                                    }
                                                    ?>
                                        </td-->
                                        <td><?php echo $infantil['email']; ?></td>
                                        <td><?php echo $infantil['discapacidad']; ?></td>
                                        <td><?php echo $infantil['canalizacionuno']; ?></td>
                                        <td><?php echo $infantil['canalizaciondos']; ?></td>
                                        <td><?php echo $infantil['canalizaciontres']; ?></td>
                                        <td><?php echo $infantil['canalizacion_id']; ?></td>
                                        <td><?php echo $infantil['educacionuno']; ?></td>
                                        <td><?php echo $infantil['estadocanalizacion']; ?></td>
                                        <td><?php echo $infantil['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('Ver'), array('controller' => 'infantils', 'action' => 'view', $infantil['id'])); ?>
                                            <?php echo $this->Html->link(__('Seguimiento'), array('controller' => 'infantils', 'action' => 'seguimiento', $infantil['id'])); ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Adolescencia</h3>

<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-a">
                                <?php if (!empty($canalizacion['Adolescencia'])) : ?>
                                <thead>
                                    <tr>
                                        <th><?php echo __('Id'); ?></th>
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
                                        <th><?php echo __('Genero'); ?></th>
                                        <th><?php echo __('Aseguradora'); ?></th>
                                        <th><?php echo __('Regimen'); ?></th>

                                        <th><?php echo __('Telefono'); ?></th>
                                        <!--th><?php echo __('Telefono1'); ?></th-->
                                        <th><?php echo __('Email'); ?></th>
                                        <th><?php echo __('Discapacidad'); ?></th>
                                        <th><?php echo __('Canalizacionuno'); ?></th>
                                        <th><?php echo __('Canalizaciondos'); ?></th>
                                        <th><?php echo __('Canalizaciontres'); ?></th>
                                        <th><?php echo __('Canalizacion Id'); ?></th>
                                        <th><?php echo __('Educacion'); ?></th>
                                        <th><?php echo __('Estado'); ?></th>
                                        <th><?php echo __('FechaRegistro'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Adolescencia'] as $adolescencia) : ?>
                                    <tr class="gradeA odd">
                                        <td class="sorting_1"><?php echo $adolescencia['id']; ?></td>
                                        <td><?php echo $adolescencia['familia_id']; ?></td>
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

                                        <td><?php echo $adolescencia['telefono']; ?></td>
                                        <!--td>
                                            <?php

                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                    mysqli_select_db($link, $bd);
                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                    $result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $adolescencia['familia_id']);
                                                    while ($fila = mysqli_fetch_array($result)) {
                                                        echo $fila['celular'];

                                                        mysqli_close($link);
                                                    }
                                                    ?>
                                        </td-->
                                        <td><?php echo $adolescencia['email']; ?></td>
                                        <td><?php echo $adolescencia['discapacidad']; ?></td>
                                        <td><?php echo $adolescencia['canalizacionuno']; ?></td>
                                        <td><?php echo $adolescencia['canalizaciondos']; ?></td>
                                        <td><?php echo $adolescencia['canalizaciontres']; ?></td>
                                        <td><?php echo $adolescencia['canalizacion_id']; ?></td>
                                        <td><?php echo $adolescencia['educacion']; ?></td>
                                        <td><?php echo $adolescencia['estadocanalizacion']; ?></td>
                                        <td><?php echo $adolescencia['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('View'), array('controller' => 'adolescencias', 'action' => 'view', $adolescencia['id'])); ?>
                                            <?php echo $this->Html->link(__('Seguimiento'), array('controller' => 'adolescencias', 'action' => 'seguimiento', $adolescencia['id'])); ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<h3 class="titulo-general-pwa-govco col-md-12  " style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">
    Canalización Curso de vida Juventud Adulto</h3>

<div class="row" style="margin: 5px;">
    <div class="col-lg-12" style="justify-items: center; ">
        <div class="panel panel-default">
            <div class="table-responsive" style="justify-items: center; margin-top: 10px; ">
                <div class="row col-sm-12 JustifyCenter " style="margin: 20px; ">
                    <div class=" row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover"
                                id="dataTables-j">
                                <?php if (!empty($canalizacion['Juventudadulto'])) : ?>
                                <thead>
                                    <tr>
                                        <th><?php echo __('Id'); ?></th>
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
                                        <th><?php echo __('Genero'); ?></th>
                                        <th><?php echo __('Aseguradora'); ?></th>
                                        <th><?php echo __('Regimen'); ?></th>
                                        <th><?php echo __('Telefono'); ?></th>
                                        <!--th><?php echo __('Telefono1'); ?></th-->
                                        <th><?php echo __('Email'); ?></th>
                                        <th><?php echo __('Discapacidad'); ?></th>
                                        <th><?php echo __('Canalizacionuno'); ?></th>
                                        <th><?php echo __('Canalizaciondos'); ?></th>
                                        <th><?php echo __('Canalizaciontres'); ?></th>
                                        <th><?php echo __('Canalizacion Id'); ?></th>
                                        <th><?php echo __('Educacion'); ?></th>
                                        <th><?php echo __('Estado'); ?></th>
                                        <th><?php echo __('FechaRegistro'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($canalizacion['Juventudadulto'] as $juventudadulto) : ?>
                                    <tr class="gradeA odd">
                                        <td class="sorting_1"><?php echo $juventudadulto['id']; ?></td>
                                        <td><?php echo $juventudadulto['familia_id']; ?></td>
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

                                        <td><?php echo $juventudadulto['telefono']; ?></td>
                                        <!--td>
                                            <?php

                                                    $link = mysqli_connect($serv, $userS, $passS);
                                                    mysqli_select_db($link, $bd);
                                                    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                    $result = mysqli_query($link, "SELECT celular FROM Familias WHERE id = " . $juventudadulto['familia_id']);
                                                    while ($fila = mysqli_fetch_array($result)) {
                                                        echo $fila['celular'];

                                                        mysqli_close($link);
                                                    }
                                                    ?>
                                        </td-->
                                        <td><?php echo $juventudadulto['email']; ?></td>
                                        <td><?php echo $juventudadulto['discapacidad']; ?></td>

                                        <td><?php echo $juventudadulto['canalizacionuno']; ?></td>
                                        <td><?php echo $juventudadulto['canalizaciondos']; ?></td>
                                        <td><?php echo $juventudadulto['canalizaciontres']; ?></td>
                                        <td><?php echo $juventudadulto['canalizacion_id']; ?></td>
                                        <td><?php echo $juventudadulto['educacion']; ?></td>
                                        <td><?php echo $juventudadulto['estadocanalizacion']; ?></td>
                                        <td><?php echo $juventudadulto['fechaRegistro']; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('View'), array('controller' => 'juventudadultos', 'action' => 'view', $juventudadulto['id'])); ?>
                                            <?php echo $this->Html->link(__('Seguimiento'), array('controller' => 'juventudadultos', 'action' => 'seguimiento', $juventudadulto['id'])); ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>




<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        "pagingType": "simple",
        "pageLength": 4,
        responsive: true,
        dom: 'Bfrtip',
        language: {
            searchBuilder: {
                button: 'Filter',
            }
        },
        buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'colvis',
            'searchBuilder'
        ]
    });



});

$(document).ready(function() {
    $('#dataTables-f').DataTable({
        "pagingType": "simple",
        "pageLength": 4,
        responsive: true,
        dom: 'Bfrtip',
        language: {
            searchBuilder: {
                button: 'Filter',
            }
        },
        buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'colvis',
            'searchBuilder'
        ]
    });

});

$(document).ready(function() {
    $('#dataTables-a').DataTable({
        "pagingType": "simple",
        "pageLength": 4,
        responsive: true,
        dom: 'Bfrtip',
        language: {
            searchBuilder: {
                button: 'Filter',
            }
        },
        buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'colvis',
            'searchBuilder'
        ]
    });

});

$(document).ready(function() {
    $('#dataTables-j').DataTable({
        "pagingType": "simple",
        "pageLength": 4,
        responsive: true,
        dom: 'Bfrtip',
        language: {
            searchBuilder: {
                button: 'Filter',
            }
        },
        buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'colvis',
            'searchBuilder'
        ]
    });

});




function fnExcelReport() {
    var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange;
    var j = 0;
    tab = document.getElementById('dataTables-example'); // id of table

    for (j = 0; j < tab.rows.length; j++) {
        tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
    }

    tab_text = tab_text + "</table>";

    tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
    tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
    tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.matc(/Trident.*rv\:11\./)) // If Internet Explorer
    {
        txtArea1.document.open("txt/html", "replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus();
        sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
    } else
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

    //return (sa);
}
</script>