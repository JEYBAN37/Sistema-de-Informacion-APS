<?php $this->layout = 'default_plancuidado';
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

            <table width="100%" class="table table-responsive table-striped table-bordered  " style="margin-top: 30px;">

                <tr>



                    <td><img src="https://www.minsalud.gov.co/LogosInstitucionales/logo-gobierno-Ministerio-de-Salud-y-Proteccion-Social-minsalud%20(1).png"
                            style="display: block; margin: 0 auto;" width="100px" height="auto"></td>

                    <td><img src="https://www.minsalud.gov.co/LogosInstitucionales/Logo-MinSalud.png"
                            style="display: block; margin: 0 auto;" width="100px" height="auto"></td>

                    <td><img src="https://ugc.production.linktr.ee/6049e7a0-65bd-4d9e-a677-347e7009ca1f_PLANTILLA-PTS-01.png?io=true&size=avatar-v3_0"
                            style="display: block; margin: 0 auto;" width="100px" height="auto"></td>

                    <td><img src=" https://platinoweb.com/media/com_jbusinessdirectory/pictures/companies/1297/Pasto_Salud_E.S.E._1666109091.jpeg"
                            style="display: block; margin: 0 auto;" width="100px" height="auto"></td>





                </tr>
            </table>

            <div class="row">
                <div class="col-sm-12">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <button class="my-button" onclick="window.print();">Imprimir</button>
                    </table>
                </div>
            </div>
            <div class="col-12 text-center">
                <h3 class="">Plan de cuidado integral primario familiar</h3>
            </div>

            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>DATOS
                                        GENERALES</strong>




                                </td>


                                <tr>
                                    <td>
                                        <strong>Objetivo:</strong>
                                    </td>

                                    <td colspan="2">
                                        Gestionar el estado de salud de la familia de acuerdo a lo
                                        Definido en el decreto 1599 art. 2.11.3 y en el lineamiento
                                        Para la conformación, operación y seguimiento de los
                                        Equipos básicos de salud, en cumplimiento de la resolución
                                        3280 Rutas integrales de atención.
                                    </td>

                                </tr>


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
                                        <strong>ID Familia:</strong>
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

                                        <?php echo  $familia['Familia']['nombres'];
                                        $familia['Familia']['apellidos']; ?>
                                    </td>
                                    <td> <strong>Genero:</strong>
                                        <?php echo ($familia['Familia']['genero']); ?></td>

                                </tr>
                                <tr>
                                    <td> <strong>Tipo documento:</strong>
                                        <?php echo ($familia['Familia']['tipodocumento']); ?></td>
                                    <td> <strong>N.documento:</strong>
                                        <?php echo ($familia['Familia']['numerodocumento']); ?></td>

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

                                    <td><strong>Población vulnerable:</strong>
                                        <?php echo ($familia['Familia']['poblacionvulnerable']); ?>,

                                    </td>
                                    <td colspan="2"><strong>Población vulnerable:</strong>

                                        <?php echo ($familia['Familia']['poblacionvulnerable1']); ?>
                                    </td>
                                </tr>



                                <tr>
                                    <td colspan="6" style="text-align: center; color: #3366CC;">
                                        <strong>VIVIENDA</strong>

                                    </td>

                                </tr>

                                <tr>

                                    <td><strong>Vivienda:</strong>
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
                                    <td><strong>Estilo de vida:</strong>
                                        <?php echo ($familia['Familia']['estilodevidapredominante']); ?></td>
                                </tr>

                                <tr>

                                    <td><strong>Poblacion etnica:</strong>
                                        <?php echo ($familia['Familia']['poblacionetnica']); ?></td>
                                    <td><strong>resguardo:</strong>
                                        <?php echo ($familia['Familia']['resguardo']); ?></td>
                                    <td><strong>Salud alternativa:</strong>
                                        <?php echo ($familia['Familia']['saludalternativa']); ?></td>
                                </tr>

                                <tr>


                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo ($familia['Familia']['antecedenteenfermedad']); ?></td>
                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo '<span>' . $familia['Familia']['antecedenteenfermedad1'] . '</span>'; ?>
                                    </td>
                                    <td><strong>Antecedente enfermedad:</strong>
                                        <?php echo ($familia['Familia']['antecedenteenfermedad2']); ?></td>
                                </tr>
                                <tr>


                                    <td colspan="2"><strong>Enfermedad transmible1:</strong>
                                        <?php echo ($familia['Familia']['enfermedadtransmible']); ?></td>
                                    <td><strong>Enfermedad transmible2:</strong>
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

                                    <td><strong>Riesgo Psicosocial1:</strong>
                                        <?php echo ($familia['Familia']['riesgopsicosocial']); ?></td>
                                    <td><strong>Riesgo Psicosocial2:</strong>
                                        <?php echo ($familia['Familia']['riesgopsicosocial1']); ?></td>
                                    <td><strong>Riesgo Psicosocial3:</strong>
                                        <?php echo '<span>' . $familia['Familia']['riesgopsicosocial2'] . '</span>'; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Programa social1:</strong>
                                        <?php echo '<span>' . $familia['Familia']['programasocial'] . '</span>'; ?>
                                    </td>

                                    <td><strong>Programa social2:</strong>
                                        <?php echo ($familia['Familia']['programasocial1']); ?></td>
                                    <td><strong>Programa social3:</strong>
                                        <?php echo ($familia['Familia']['programasocial2']); ?></td>
                                </tr>

                                <tr>

                                    <td colspan="2"><strong>Calculo APGAR:</strong>
                                        <?php echo ($familia['Familia']['calculoapgar']); ?></td>
                                    <td><strong>Resultado APGAR:</strong>
                                        <?php echo ($familia['Familia']['apgarFuncionalidad']); ?></td>




                                    <?php if (!empty($familia['Observacion'])) : ?>
                                        <?php foreach ($familia['Observacion'] as $observacion) :
                                            if (!empty($observacion['id'])) {
                                        ?>
                                <tr>
                                    <td colspan="2"><strong>Resultado
                                            Familiograma:</strong><?php echo ($observacion['resultadoFamiliograma']); ?>&nbsp;
                                    </td>
                                    <td colspan="1"><strong>Resultado
                                            Ecomapa:</strong><?php echo ($observacion['resultadoEcomapa']); ?>&nbsp;
                                    </td>
                                </tr>
                        <?php }
                                        endforeach; ?>
                    <?php endif; ?>


                    <tr>

                        <td><strong>Cuidado permanente:</strong>
                            <?php echo ($familia['Familia']['cuidadorpermante']); ?></td>
                        <td><strong>Calculo ZARIT:</strong>
                            <?php echo ($familia['Familia']['calculozarit']); ?></td>
                        <td><strong>Reultado ZARIT:</strong>
                            <?php echo ($familia['Familia']['zaritFuncionalidad']); ?></td>
                    </tr>
                            </table>
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
                                                        <table width="100%"
                                                            class="table table-striped table-bordered table-hover">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
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

                                        <div style="justify-items: center; margin-top: 10px; ">
                                            <div style="margin: 20px; ">
                                                <div class=" row">

                                                    <div class="col-sm-12">
                                                        <table width="100%"
                                                            class="table table-striped table-bordered table-hover">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>

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
                                                        <table width="100%"
                                                            class="table table-striped table-bordered table-hover">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
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
                                                        <table width="100%"
                                                            class="table table-striped table-bordered table-hover">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
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
                                                        <table width="100%"
                                                            class="table table-striped table-bordered table-hover">
                                                            <!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
                                                            <thead>
                                                                <tr>
                                                                    <th>id</th>
                                                                    <th>Prioridad</th>
                                                                    <th>canalización</th>
                                                                    <th>Observacion</th>
                                                                </tr>

                                                            <tbody>

                                                                <?php foreach ($familia['Observacion'] as $observacion) :
                                                                    if (!empty($observacion['id'])) {
                                                                ?>
                                                                        <tr class="gradeA odd">

                                                                            <td class="sorting_1">
                                                                                <?php echo $observacion['id']; ?></td>
                                                                            <td><?php echo ($observacion['valoracionfamilia']); ?>&nbsp;
                                                                            </td>
                                                                            <td><?php echo ($observacion['canalizacionuno']); ?>,<?php echo ($observacion['canalizaciondos']); ?>,<?php echo ($observacion['canalizaciontres']); ?>
                                                                            </td>
                                                                            <td><?php echo ($observacion['observacion']); ?>&nbsp;
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








                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>



                </div>
            </div>

            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>OBJETIVO DE PLAN DE
                                        CUIDADO</strong> </td>


                                <tr>
                                    <td>
                                        <strong>Objetivo</strong>
                                    </td>

                                    <td>
                                        <strong>Descripción</strong>
                                    </td>
                                    <td>
                                        <strong>Plazo</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Corto plazo</strong>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>




                                </tr>
                                <tr>
                                    <td> <strong>Largo plazo</strong>
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>




                                </tr>










                            </table>
                        </div>



                    </div>
                </div>
            </div>
            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>DESCRIPCIóN DE PLAN
                                        DE CUIDADO INTEGRAL PRIMARIO FAMILIAR</strong> </td>


                                <tr>
                                    <td>
                                        <strong>Problemática</strong>
                                    </td>

                                    <td>
                                        <strong>Entorno Afectado</strong>
                                    </td>
                                    <td>
                                        <strong>Actividad a desarollar</strong>
                                    </td>
                                    <td>
                                        <strong>Indicador RIA</strong>
                                    </td>
                                    <td>
                                        <strong>Responsable</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong></strong>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>




                                </tr>
                                <tr>
                                    <td> <strong></strong>
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>




                                </tr>
                                <tr>
                                    <td> <strong></strong>
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>




                                </tr>
                                <tr>
                                    <td> <strong></strong>
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>




                                </tr>










                            </table>
                        </div>



                    </div>
                </div>
            </div>

            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>RECURSOS
                                        DISPONIBLES</strong> </td>
                                <tr>
                                    <td>
                                        <strong>Tipo de recurso</strong>
                                    </td>

                                    <td>
                                        <strong>Descripción</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"><strong>Comunitarios</strong>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"> <strong>Apoyo familiar</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"> <strong>Apoyo Social</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"> <strong>Apoyo Financiera</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>EVALUACIÓN Y
                                        SEGUIMIENTO</strong> </td>


                                <tr>
                                    <td>
                                        <strong>Indicador RIAS</strong>
                                    </td>

                                    <td>
                                        <strong>Valor inicial</strong>
                                    </td>
                                    <td>
                                        <strong>Valor final</strong>
                                    </td>
                                    <td>
                                        <strong>Observaciones</strong>
                                    </td>

                                </tr>
                                <tr>
                                    <td><strong>*</strong>

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>





                                </tr>
                                <tr>
                                    <td> <strong>*</strong>
                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>





                                </tr>
                                <tr>
                                    <td> <strong>*</strong>
                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>





                                </tr>

                            </table>
                        </div>



                    </div>
                </div>
            </div>

            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>OBSERVACIONES Y
                                        RECOMENDACIONES</strong> </td>
                                <tr>
                                    <td>
                                        <strong>*</strong>
                                    </td>

                                    <td>
                                        <strong>*</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>*</strong>
                                    </td>

                                    <td>
                                        <strong>*</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>*</strong>
                                    </td>

                                    <td>
                                        <strong>*</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>*</strong>
                                    </td>

                                    <td>
                                        <strong>*</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>*</strong>
                                    </td>

                                    <td>
                                        <strong>*</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>CONSENTIMIENTO Y
                                        COMPROMISO FAMILIAR</strong> </td>
                                <tr>
                                    <td colspan="4">
                                        Yo, ____________________________________, confirmo que he recibido información
                                        adecuada sobre el Plan de Cuidado Integral Primario Familiar, comprendo los
                                        objetivos y las intervenciones propuestas, consiento y me comprometo a la
                                        implementación del plan con mi familia, y junto a las Institución Prestadora de
                                        Servicios de Salud PASTO SALUD ESE, con el MINISTERIO DE SALUD YPROTECCIOM
                                        SOCIAL y con COLOMBIA.

                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="4">
                                        Nombres/apellidos Representante de Familia:
                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="4">
                                        Firma del representante:
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="4">
                                        No. Identificación de Representante Familia:
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        Fecha de firma de consentimiento informado: Dia: _____. Mes: ______. Año:
                                        ________
                                    </td>


                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>DISENTIMIENTO
                                        INFORMADO (Según aplique)</strong> </td>
                                <tr>
                                    <td>
                                        <strong>Nombres y apellidos</strong>
                                    </td>

                                    <td>
                                        <strong>Num. Identificación</strong>
                                    </td>
                                    <td>
                                        <strong>Razon del disenso</strong>
                                    </td>
                                    <td>
                                        <strong>Firma</strong>
                                    </td>
                                    <td>
                                        <strong>Fecha</strong>
                                    </td>

                                </tr>
                                <tr>
                                    <td><strong>*</strong>

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>





                                </tr>
                                <tr>
                                    <td> <strong>*</strong>
                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>





                                </tr>
                                <tr>
                                    <td> <strong>*</strong>
                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>





                                </tr>



                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-lg-12">

                            <table width="100%" class="table table-responsive table-striped table-bordered  "
                                style="margin-top: 30px;">
                                <td colspan="6" style="text-align: center; color: #3366CC;"><strong>FORMALIZACIÓN DE
                                        IMPLEMENTACIÓN DE PLAN DE CUIDADO INTEGRAL PRIMARIO FAMILIAR</strong> </td>
                                <tr>
                                    <td>
                                        <strong>Nombres y apellidos EBS</strong>
                                    </td>

                                    <td>
                                        <strong>Perfil</strong>
                                    </td>
                                    <td>
                                        <strong>Fecha</strong>
                                    </td>
                                    <td>
                                        <strong>Firma</strong>
                                    </td>

                                </tr>
                                <tr>
                                    <td><strong>*</strong>

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>






                                </tr>
                                <tr>
                                    <td> <strong>*</strong>
                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>
                                    <td>*

                                    </td>






                                </tr>




                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Inicialización de la primera tabla
        $('#dataTables-example').DataTable({
            "pagingType": "simple",
            "pageLength": 5,
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

        // Inicialización de la segunda tabla
        $('#dataTables-infantil').DataTable({
            "pagingType": "simple",
            "pageLength": 5,
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

        $('#dataTables-juventudAdulto').DataTable({
            "pagingType": "simple",
            "pageLength": 5,
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

        $('#dataTables-Adolescencia').DataTable({
            "pagingType": "simple",
            "pageLength": 5,
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

        $('#dataTables-Observacion').DataTable({
            "pagingType": "simple",
            "pageLength": 5,
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

    .nav-pills a:hover {}



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