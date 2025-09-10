<?php $this->layout = 'default_familia';
echo $this->Html->script('validationFamilia'); ?>

<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '3306';
$userS = 'root';
$passS = '';
$bd = 'fichafamiliar20241709';
?>

<style>
    .negrilla {
        font-size: small;
        font-weight: bold;
    }
</style>

<div>
    <div class="form-group col-sm-12">
        <fieldset>
            <div class="col-12 text-center">
                <h1 class="title-general-forms">Ficha Familiar</h1>
            </div>

            <div>

                <div class="dataTable_wrapper">


                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>DATOS
                                        GENERALES</strong>
                                    <tr>
                                        <td>
                                            <strong>Fecha Registro:</strong>
                                            <?php
                                            echo ($familia['Sociambiental']['fecha']); ?>
                                        </td>



                                        <td><strong>Encuestador:</strong>
                                            <?php
                                            $link = mysqli_connect($serv, $userS, $passS, $bd);
                                            $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                            $result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $familia['Sociambiental']['responsable_id']);
                                            if ($fila = mysqli_fetch_array($result)) {
                                                echo $fila['nombres'];
                                            }
                                            mysqli_free_result($result);
                                            mysqli_close($link);
                                            ?>
                                        </td>
                                        <td>
                                            <strong>ID:</strong>
                                            <?php echo ($familia['Familia']['id']); ?>
                                        </td>
                                        <!--td>N° Hogares:
                                        <?php echo ($familia['Sociambiental']['numerohogares']); ?></td-->
                                    </tr>
                                    <tr>
                                        <td><strong>Familia:</strong>
                                            <?php echo ($familia['Sociambiental']['apellidosfamilia']); ?>
                                        </td>
                                        <td> <strong> Representante:</strong>

                                            <?php echo '<strong>' . $familia['Familia']['nombres'] . '</strong> <strong>' . $familia['Familia']['apellidos'] . '</strong>'; ?>
                                        </td>
                                        <td colspan="2"> <strong>Curso de Vida:</strong>
                                            <?php echo ($familia['Familia']['cursovidafamilia']); ?></td>
                                    </tr>

                                    <tr>

                                        <td><strong>Ubicación:</strong>
                                            <?php
                                            $link = mysqli_connect($serv, $userS, $passS, $bd);
                                            $tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente
                                            $result = mysqli_query($link, "SELECT microterritorio FROM Ubicaciones WHERE id = " . $familia['Sociambiental']['ubicacion_id']);
                                            if ($fila = mysqli_fetch_array($result)) {
                                                echo $fila['microterritorio'];
                                            }
                                            mysqli_free_result($result);
                                            mysqli_close($link);
                                            ?>
                                        </td>
                                        <td><strong>Dirección:</strong>
                                            <?php echo ($familia['Sociambiental']['direccion']); ?></td>
                                        <td><strong>Num Hogares:</strong>
                                            <?php echo ($familia['Sociambiental']['numerohogares']); ?>
                                        </td>

                                    </tr>


                                    <tr>


                                        <td><strong>Num. celular:</strong>
                                            <?php echo ($familia['Familia']['celular']); ?></td>
                                        <td colspan="2"><strong>Email:</strong>
                                            <?php echo ($familia['Familia']['correo']); ?></td>

                                    </tr>
                                    <tr>
                                        <td colspan=""><strong>Num. integrantes:</strong>
                                            <?php echo ($familia['Familia']['numeropersonas']); ?>
                                        </td>

                                        <td colspan="2"><strong>Población vulnerable:</strong>
                                            <?php echo ($familia['Familia']['poblacionvulnerable']); ?>
                                        </td>
                                    </tr>

                                <td colspan="12" style="text-align: center;">
                                    <button id="verMasButton" class="my-button" onclick="toggleTableVisibility()">
                                        <?php $imageUrl = $this->Html->url('/img/flecha-correcta.png', true);
                                        ?>
                                        <img src="<?= $imageUrl ?>" style=" transform: rotate(90deg);"
                                            alt="Imagen de marcador genérico" width="100%" height="auto">

                                    </button>
                                </td>


                            </table>



                            <table id="miTabla" style="display: none; margin-top: 20px;" width="100%"
                                class="table table-responsive table-striped table-bordered  ">
                                <tr>
                                    <td colspan="6" style="text-align: center; color: #3366CC;">
                                        <strong>VIVIENDA</strong>

                                    </td>

                                </tr>

                                <tr>

                                    <td><strong>vivienda:</strong>
                                        <?php echo ($familia['Familia']['vivienda']); ?></td>
                                    <td><strong>Tenencia:</strong>
                                        <?php echo ($familia['Familia']['tenencia']); ?></td>
                                    <td><strong>Tiempo de residencia:</strong>
                                        <?php echo '<span>' . $familia['Familia']['tiemporesidencia'] . '</span>'; ?>
                                    </td>
                                </tr>

                                <tr>

                                    <td><strong>combustible:</strong>
                                        <?php echo ($familia['Familia']['combustible']); ?></td>
                                    <td><strong>otrocombustible:</strong>
                                        <?php echo ($familia['Familia']['otrocombustible']); ?></td>
                                    <td><strong>Actividad económica:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['actividad'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center; color: #3366CC;">
                                        <strong>CARACTERISTICAS DE LA FAMILIA</strong>
                                    </td>



                                </tr>

                                <tr>

                                    <td><strong>Tipo familia:</strong>
                                        <?php echo ($familia['Familia']['tipofamilia']); ?></td>
                                    <td><strong>Curso vida familia:</strong>
                                        <?php echo ($familia['Familia']['cursovidafamilia']); ?></td>
                                    <td><strong>Personas LGTBIQ+:</strong>
                                        <?php echo '<span>' . $familia['Familia']['lgtbi'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Estilo de vida:</strong>
                                        <?php echo ($familia['Familia']['estilodevidapredominante']); ?></td>
                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo ($familia['Familia']['antecedenteenfermedad']); ?></td>
                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo '<span>' . $familia['Familia']['antecedenteenfermedad1'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo ($familia['Familia']['antecedenteenfermedad2']); ?></td>
                                    <td><strong>Enfermedad transmible::</strong>
                                        <?php echo ($familia['Familia']['enfermedadtransmible']); ?></td>
                                    <td><strong>Enfermedad transmible:</strong>
                                        <?php echo '<span>' . $familia['Familia']['enfermedadtransmible1'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Lavado de manos:</strong>
                                        <?php echo ($familia['Familia']['lavadomanos']); ?></td>
                                    <td><strong>Comparte elementos aseo personal:</strong>
                                        <?php echo ($familia['Familia']['elementoshigiene']); ?></td>
                                    <td><strong>Cultura de cepillado de dientes:</strong>
                                        <?php echo '<span>' . $familia['Familia']['cepilladodientes'] . '</span>'; ?>
                                    </td>
                                </tr>

                                <tr>

                                    <td><strong>Riesgo Psicosocial:</strong>
                                        <?php echo ($familia['Familia']['riesgopsicosocial']); ?></td>
                                    <td><strong>Riesgo Psicosocial:</strong>
                                        <?php echo ($familia['Familia']['riesgopsicosocial1']); ?></td>
                                    <td><strong>Riesgo Psicosocial:</strong>
                                        <?php echo '<span>' . $familia['Familia']['riesgopsicosocial2'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td><strong>Salud alternativa:</strong>
                                        <?php echo ($familia['Familia']['saludalternativa']); ?></td>
                                    <td><strong>Cuidador permante:</strong>
                                        <?php echo ($familia['Familia']['cuidadorpermante']); ?></td>
                                    <td><strong>Programa social:</strong>
                                        <?php echo '<span>' . $familia['Familia']['programasocial'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="2"><strong>Programa social:</strong>
                                        <?php echo ($familia['Familia']['programasocial1']); ?></td>
                                    <td colspan=""><strong>Programa social:</strong>
                                        <?php echo ($familia['Familia']['programasocial2']); ?></td>
                                </tr>


                                <tr>
                                    <td colspan="6" style="text-align: center; color: #3366CC;">
                                        <strong>HABITABILIDAD</strong>

                                    </td>



                                </tr>

                                <tr>

                                    <td><strong>Paredes:</strong>
                                        <?php echo ($familia['Sociambiental']['estadoparedes']); ?></td>
                                    <td><strong>Techo:</strong>
                                        <?php echo ($familia['Sociambiental']['estadotecho']); ?></td>
                                    <td id="hacinamiento"><strong>Hacinamiento:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['hacinamiento'] . '</span>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Riesgo externo:</strong>
                                        <?php echo ($familia['Sociambiental']['riesgoexterno']); ?>
                                    </td>
                                    <td><strong>Riesgo externo:</strong>
                                        <?php echo ($familia['Sociambiental']['otroriesgo']); ?>
                                    </td>
                                    <td><strong>Riesgo hogar:</strong>
                                        <?php echo ($familia['Sociambiental']['riesgo']); ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td><strong>Riesgo hogar:</strong>
                                        <?php echo ($familia['Sociambiental']['otroriesgohogar']); ?></td>
                                    <td><strong>Dificil acceso a:</strong>
                                        <?php echo ($familia['Sociambiental']['acceso']); ?> -
                                        <?php echo ($familia['Sociambiental']['accesoDos']); ?></td>
                                    <td><strong>Servicio de agua:</strong>
                                        <?php echo ($familia['Sociambiental']['aguaservicio']); ?></td>
                                    </td>
                                </tr>
                                <tr>


                                    <td><strong>Higiene en el hogar:</strong>
                                        <?php echo '<span>' . $familia['Familia']['higiene'] . '</span>'; ?>
                                    </td>
                                    <td><strong>Aseo cocina:</strong>
                                        <?php echo ($familia['Familia']['aseococina']); ?></td>
                                    <td><strong>Higiene alimentos:</strong>
                                        <?php echo ($familia['Familia']['higienealimentos']); ?></td>

                                </tr>

                                <tr>
                                    <td><strong>Tratamiento agua:</strong>
                                        <?php echo ($familia['Sociambiental']['aguatratamiento']); ?></td>
                                    <td><strong>Limpieza Tanque se agua:</strong>
                                        <?php echo ($familia['Sociambiental']['aguaalmacenamiento']); ?></td>

                                    <td><strong>Diposicion excretas:</strong>
                                        <?php echo ($familia['Sociambiental']['diposicionexcretas']); ?></td>

                                </tr>
                                <tr>
                                    <td><strong>agua residual:</strong>
                                        <?php echo ($familia['Sociambiental']['aguaresiduales']); ?></td>
                                    <td><strong>Limpieza Tanque se agua:</strong>
                                        <?php echo ($familia['Sociambiental']['basura']); ?></td>

                                    <td><strong>Reciclaje:</strong>
                                        <?php echo ($familia['Sociambiental']['reciclaje']); ?></td>

                                </tr>

                                <tr>
                                    <td colspan="6" style="text-align: center; color: #3366CC;"><strong>MASCOTAS EN EL
                                            HOGAR</strong>

                                    </td>



                                </tr>
                                <tr>

                                    <td><strong>Num. Perros:</strong>
                                        <?php echo ($familia['Sociambiental']['numeroPerros']); ?></td>
                                    <td><strong>Num.Gatos:</strong>
                                        <?php echo ($familia['Sociambiental']['numeroGatos']); ?></td>
                                    <td><strong>Num. otras mascotas:</strong>
                                        <?php echo ($familia['Sociambiental']['otramascota']); ?></td>
                                </tr>
                                <tr>

                                    <td><strong>Perros:</strong>
                                        <?php echo ($familia['Sociambiental']['numeroPerros']); ?></td>
                                    <td id="desparasitacion"><strong>desparasitación:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['desparasitamascotas'] . '</span>'; ?>
                                    </td>
                                    <td id="vacunacion"><strong>Vacunacion:</strong>
                                        <?php echo '<span>' . $familia['Sociambiental']['vacunamascotas'] . '</span>'; ?>
                                    </td>

                                </tr>


                                <td colspan="12" style="text-align: center;">
                                    <button class="my-button" onclick="toggleTableVisibility()">
                                        <img src="<?= $imageUrl ?>" style=" transform: rotate(-90deg);"
                                            alt="Imagen de marcador genérico" width="100%" height="auto"> </button>
                                    </button>
                                </td>



                            </table>

                            <td class="actions">
                                <div class="btn-group">
                                    <button type="button" class="my-button" data-toggle="dropdown">
                                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">

                                        <li> <?php
                                                echo $this->Html->link(
                                                    'Editar inf.sociambiental',
                                                    array(
                                                        'controller' => 'sociambientals',
                                                        'action' => 'edit',
                                                        $familia['Sociambiental']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de que deseas editar la información sociambiental de la familia " . $familia['Sociambiental']['apellidosfamilia'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                );
                                                ?>

                                        </li>
                                        <li> <?php echo $this->Html->link(
                                                    __('Editar información Familiar'),
                                                    array('action' => 'edit', $familia['Familia']['id']),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de editar la información del hogar de " .  $familia['Familia']['nombres'] . ' ' . $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                ); ?>

                                        </li>
                                        <li> <?php
                                                echo $this->Html->link(('Agregar menor de 2 años'),
                                                    array(
                                                        'controller' => 'Primerainfancias',
                                                        'action' => 'add?primerainfancia=' . $familia['Familia']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                ); ?>

                                        </li>
                                        <li> <?php echo $this->Html->link(('Agregar menor de 2 a 5 años'),
                                                    array(
                                                        'controller' => 'Primerainfancias',
                                                        'action' => 'add2_5?primerainfancia=' . $familia['Familia']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de agregar un menor de 2 a 5 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )

                                                ); ?>
                                        </li>
                                        <li> <?php echo $this->Html->link(('Agregar menor de 6 a 11 años'),
                                                    array(
                                                        'controller' => 'Infantils',
                                                        'action' => 'add?infantils=' . $familia['Familia']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de agregar un menor de 6 a 11 años en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                ); ?>
                                        </li>
                                        <li> <?php echo $this->Html->link(('Agregar menor de 12 a 17 años'),
                                                    array(
                                                        'controller' => 'Adolescencias',
                                                        'action' => 'add?adolescencias=' . $familia['Familia']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de agregar un menor de 12 a 17 años en el hogar de " .  $familia['Familia']['nombres'] . " " .   $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                ); ?>
                                        </li>
                                        <li> <?php echo $this->Html->link(('Agregar adulto mayor de 18 años'),
                                                    array(
                                                        'controller' => 'Juventudadultos',
                                                        'action' => 'add?juventudadultos=' . $familia['Familia']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de agregar un adulto mayor de 18 en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                ); ?>
                                        </li>
                                        <li> <?php echo $this->Html->link(('Agregar Observación '),
                                                    array(
                                                        'controller' => 'Observacions',
                                                        'action' => 'add?observaciones=' . $familia['Familia']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de agregar una observación en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                ); ?>
                                        </li>

                                        <li> <?php echo $this->Html->link(('Generar plan cuidado '),
                                                    array(
                                                        'controller' => 'familias',
                                                        'action' => 'plancuidado' . '/' . $familia['Familia']['id']
                                                    ),
                                                    array(
                                                        'onclick' => "return confirm('¿Estás seguro de agregar una observación en el hogar de " .  $familia['Familia']['nombres'] . " " .  $familia['Familia']['apellidos'] . "?');",
                                                        'style' => 'color: blue; font-size: 16px; font-weight: bold;'
                                                    )
                                                ); ?>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                        </div>
                    </div>
                </div>
            </div>





            <h2 class="subtitle-general-forms" style=" margin-top: 40px;">Personas en la Familia</h2>
            <hr style=" background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-top: 1px;">

            <div class="dataTable_wrapper">
                <div class="row" style="margin: 5px;">
                    <div class="col-lg-12">


                        <div class="panel-body">
                            <!-- Nav tabs -->

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="card-body" style="margin-top: 20px;">
                                    <?php if (!empty($familia['Primerainfancia'])) : ?>

                                        <div>
                                            <div style="margin: 20px; ">
                                                <div class=" row">

                                                    <div class="col-sm-12">
                                                        <table id="dataTables-example" class="display responsive nowrap"
                                                            style="width:100%">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Opciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Condicioncronica </th>
                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Primerainfancia'] as $primerainfancia) :
                                                                    if (!empty($primerainfancia['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">


                                                                            <td class="sorting_1">
                                                                                <?php echo $primerainfancia['id']; ?></td>

                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="my-button"
                                                                                        style="margin-top: -2px;"
                                                                                        data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li>
                                                                                            <?php echo $this->Html->link(
                                                                                                "Ver",
                                                                                                "../primerainfancias/view/" . $primerainfancia['id'],
                                                                                                array(
                                                                                                    'style' => 'font-size: 14px;'
                                                                                                )
                                                                                            ); ?>
                                                                                        </li>
                                                                                        <li>

                                                                                            <?php echo $this->Html->link(('Editar'),
                                                                                                "../primerainfancias/edit/" . $primerainfancia['id'],
                                                                                                array('action' => 'edit', $primerainfancia['id']),
                                                                                                array(
                                                                                                    'style' => 'font-size: 14px;'
                                                                                                )
                                                                                            ); ?>


                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'primerainfancias',
                                                                                                    'action' => 'delete',
                                                                                                    $primerainfancia['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 14px; '),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $primerainfancia['id'] . ' ' . $primerainfancia['primernombre'] . ' ' . $primerainfancia['primerapellido'] . ' de la familia de con id # ' .  $primerainfancia['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>



                                                                            <td><?php echo $primerainfancia['primernombre'] ?>
                                                                                <?php echo $primerainfancia['primerapellido'] ?>
                                                                            </td>

                                                                            <td>
                                                                                <?php echo $primerainfancia['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $primerainfancia['canalizacionuno']; ?>,
                                                                                <?php echo $primerainfancia['canalizaciondos']; ?>,
                                                                                <?php echo $primerainfancia['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td><?php echo $primerainfancia['condicioncronica']; ?>
                                                                            </td>

                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($familia['Infantil'])) : ?>

                                        <div>
                                            <div style="margin: 20px; ">
                                                <div class=" row">

                                                    <div class="col-sm-12">
                                                        <table id="dataTables-infantil" class="display responsive nowrap"
                                                            style="width:100%">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Opciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Condición Crónica</th>

                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Infantil'] as $infantil) :
                                                                    if (!empty($infantil['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">
                                                                            <td class="sorting_1">
                                                                                <?php echo $infantil['id']; ?>
                                                                            </td>
                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="my-button"
                                                                                        style="margin-top: -2px;"
                                                                                        data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../infantils/view/" . $infantil['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../infantils/edit/" . $infantil['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'infantils',
                                                                                                    'action' => 'delete',
                                                                                                    $infantil['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $infantil['id'] . ' ' . $infantil['primernombre'] . ' ' . $infantil['primerapellido'] . ' de la familia de con id # ' .  $infantil['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>

                                                                            <td><?php echo $infantil['primernombre'] ?>
                                                                                <?php echo $infantil['primerapellido'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $infantil['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['canalizacionuno']; ?>,
                                                                                <?php echo $infantil['canalizaciondos']; ?>,
                                                                                <?php echo $infantil['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td> <?php echo $infantil['condicioncronica']; ?>
                                                                            </td>


                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="card-body" style="margin-top: 20px;">
                                    <?php if (!empty($familia['Adolescencia'])) : ?>
                                        <div>
                                            <div style="margin: 20px; ">

                                                <div class=" row">


                                                    <div class="col-sm-12">
                                                        <table id="dataTables-Adolescencia"
                                                            class="display responsive nowrap" style="width:100%">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Acciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Condición Crónica</th>
                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Adolescencia'] as $adolescencia) :
                                                                    if (!empty($adolescencia['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">
                                                                            <td class="sorting_1">
                                                                                <?php echo $adolescencia['id']; ?></td>

                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="my-button"
                                                                                        style="margin-top: -2px;"
                                                                                        data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../adolescencias/view/" . $adolescencia['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../adolescencias/edit/" . $adolescencia['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'adolescencias',
                                                                                                    'action' => 'delete',
                                                                                                    $adolescencia['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $adolescencia['id'] . ' ' . $adolescencia['primernombre'] . ' ' . $adolescencia['primerapellido'] . ' de la familia de con id # ' .  $adolescencia['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>

                                                                            <td><?php echo $adolescencia['primernombre'] ?>
                                                                                <?php echo $adolescencia['primerapellido'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $adolescencia['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['canalizacionuno']; ?>,<?php echo $adolescencia['canalizaciondos']; ?>,
                                                                                <?php echo $adolescencia['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td> <?php echo $adolescencia['condicioncronica']; ?>
                                                                            </td>
                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="card-body" style="margin-top: 20px;">

                                    <?php if (!empty($familia['Juventudadulto'])) : ?>
                                        <div>
                                            <div style="margin: 20px; ">
                                                <div class=" row">

                                                    <div class="col-sm-12">
                                                        <table id="dataTables-juventudAdulto"
                                                            class="display responsive nowrap" style="width:100%">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Opciones</th>
                                                                    <th>Nombres</th>
                                                                    <th>Edad</th>
                                                                    <th>Sexo</th>
                                                                    <th>Aseguradora</th>
                                                                    <th>Canalización</th>
                                                                    <th>Condición Crónica</th>


                                                                </tr>

                                                            <tbody>
                                                                <?php foreach ($familia['Juventudadulto'] as $juventudadulto) :
                                                                    if (!empty($juventudadulto['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">

                                                                            <td class="sorting_1">
                                                                                <?php echo $juventudadulto['id']; ?></td>
                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="my-button"
                                                                                        style="margin-top: -2px;"
                                                                                        data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../juventudadultos/view/" . $juventudadulto['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../juventudadultos/edit/" . $juventudadulto['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'juventudadultos',
                                                                                                    'action' => 'delete',
                                                                                                    $juventudadulto['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $juventudadulto['id'] . ' ' . $juventudadulto['primernombre'] . ' ' . $juventudadulto['primerapellido'] . ' de la familia de con id # ' .  $juventudadulto['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>

                                                                            <td><?php echo $juventudadulto['primernombre'] ?>
                                                                                <?php echo $juventudadulto['primerapellido'] ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $juventudadulto['edad']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['sexo']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['aseguradora']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['canalizacionuno']; ?>,<?php echo $juventudadulto['canalizaciondos']; ?>,<?php echo $juventudadulto['canalizaciontres']; ?>
                                                                            </td>
                                                                            <td> <?php echo $juventudadulto['condicioncronica']; ?>
                                                                            </td>



                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                                </div>
                                <div class="card-body" style="margin-top: 20px;">


                                    <?php if (!empty($familia['Observacion'])) : ?>
                                        <div>
                                            <div style="margin: 20px; ">
                                                <div class=" row">

                                                    <div class="col-sm-12">
                                                        <table id="dataTables-Observacion" class="display responsive nowrap"
                                                            style="width:100%">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>id</th>
                                                                    <th>Opciones</th>
                                                                    <th>Prioridad</th>
                                                                    <th>Canalización</th>
                                                                    <th>Familiograma</th>
                                                                    <th>Ecomapa</th>
                                                                    <th>Observacion</th>
                                                                    <th>Fecha</th>
                                                                </tr>

                                                            <tbody>

                                                                <?php foreach ($familia['Observacion'] as $observacion) :
                                                                    if (!empty($observacion['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">

                                                                            <td class="sorting_1">
                                                                                <?php echo $observacion['id']; ?></td>

                                                                            <td class="actions">

                                                                                <div class="btn-group">
                                                                                    <button type="button" class="my-button"
                                                                                        style="margin-top: -2px;"
                                                                                        data-toggle="dropdown">
                                                                                        Opciones
                                                                                    </button>
                                                                                    <ul class="dropdown-menu" role="menu">
                                                                                        <li><?php echo $this->Html->link("Ver", "../observacions/view/" . $observacion['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Editar ", "../observacions/edit/" . $observacion['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Html->link("Cargar Plan Cuidado ", "../observacions/add_plancuidado/" . $observacion['id'], array('target' => '_blank')); ?>
                                                                                        </li>
                                                                                        <li><?php echo $this->Form->postLink(
                                                                                                __('Borrar'),
                                                                                                array(
                                                                                                    'controller' => 'observacions',
                                                                                                    'action' => 'delete',
                                                                                                    $observacion['id']
                                                                                                ),
                                                                                                array('style' => 'color: red; font-size: 16px; font-weight: bold;'),
                                                                                                __('Esta seguro de eliminar el registro # %s?', $observacion['id'] . ' ' . ' de la familia de con id # ' .  $observacion['familia_id'])
                                                                                            ); ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </td>
                                                                            <td><?php echo ($observacion['valoracionfamilia']); ?>
                                                                            </td>
                                                                            <td><?php echo ($observacion['canalizacionuno']); ?>,<?php echo ($observacion['canalizaciondos']); ?>,<?php echo ($observacion['canalizaciontres']); ?>
                                                                            </td>

                                                                            <td><?php echo ($observacion['resultadoFamiliograma']); ?>&nbsp;
                                                                            </td>
                                                                            <td><?php echo ($observacion['resultadoEcomapa']); ?>&nbsp;
                                                                            </td>
                                                                            <td><?php echo ($observacion['observacion']); ?>&nbsp;
                                                                            </td>
                                                                            <td><?php echo ($observacion['fecha']); ?>&nbsp;
                                                                            </td>

                                                                        </tr>
                                                                <?php }
                                                                endforeach; ?>
                                                            </tbody>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>





        </fieldset>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Inicialización de la primera tabla
        $('#dataTables-example').DataTable({
            responsive: true,
            "pagingType": "simple",
            "pageLength": 10,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
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

        // Inicialización de la segunda tabla
        $('#dataTables-infantil').DataTable({
            responsive: true,
            "pagingType": "simple",
            "pageLength": 10,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
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

        $('#dataTables-juventudAdulto').DataTable({
            responsive: true,
            "pagingType": "simple",
            "pageLength": 10,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
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

        $('#dataTables-Adolescencia').DataTable({
            responsive: true,
            "pagingType": "simple",
            "pageLength": 10,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
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

        $('#dataTables-Observacion').DataTable({
            responsive: true,
            "pagingType": "simple",
            "pageLength": 10,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
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


        // Agrega más inicializaciones para otras tablas según sea necesario
    });

    function toggleTableVisibility() {
        var tabla = document.getElementById("miTabla");
        var boton = document.getElementById("verMasButton");

        // Cambia la visibilidad de la tabla
        if (tabla.style.display === "none") {
            tabla.style.display = "table";
            boton.style.display = "none";
            // Opcionalmente, puedes cambiar a "block" si prefieres
        } else {
            tabla.style.display = "none";
            boton.style.display = "inline-block";
        }
    }

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

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
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



    var vacunacionSpan = document.querySelector('#vacunacion span');
    var vacunacionValue = "<?php echo $familia['Sociambiental']['vacunamascotas']; ?>";

    if (vacunacionValue === "No") {
        vacunacionSpan.style.color = "red";
    } else if (vacunacionValue === "Si") {
        vacunacionSpan.style.color = "green"; // Cambiar el color a azul para "Si"
    }

    var hacinamientoSpan = document.querySelector('#hacinamiento span');
    var hacinamientoValue = "<?php echo $familia['Sociambiental']['hacinamiento']; ?>";

    if (hacinamientoValue === "Si") {
        hacinamientoSpan.style.color = "red";
    } else if (hacinamientoValue === "No") {
        hacinamientoSpan.style.color = "green"; // Cambiar el color a azul para "Si"
    }

    var desparasitacionSpan = document.querySelector('#desparasitacion span');
    var desparasitacionValue = "<?php echo $familia['Sociambiental']['desparasitamascotas']; ?>";

    if (desparasitacionValue === "No") {
        desparasitacionSpan.style.color = "red";
    } else if (desparasitacionValue === "Si") {
        desparasitacionSpan.style.color = "green"; // Cambiar el color a azul para "Si"
    }
</script>

<style>
    /* Estilos para la lista de píldoras */
    .nav-pills {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;

        border-radius: 5px;
        text-align: center;
    }

    .nav-pills li {
        margin: 0 10px;
        justify-content: center;

    }

    .nav-pills a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #3366CC;
        transition: background-color 0.3s ease;

    }





    /* Estilos para hacer que la lista de píldoras sea responsiva */
    @media (max-width: 768px) {
        .nav-pills {
            flex-wrap: wrap;
        }

        .nav-pills li {
            flex: 0 0 100%;
            margin: 10px 0;
            justify-content: center;
        }
    }

    /* Personaliza el botón desplegable en DataTables Responsive */
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control:before {

        left: 20px;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control {
        position: relative;
        padding-left: 49px;
        cursor: pointer;
    }
</style>