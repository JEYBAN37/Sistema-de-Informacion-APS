<?php
//$c_name = $this->request->getParam('controller');
//$a_name = $this->request->getParam('action');

// echo $a_name;
// exit;
?>


 <nav >

 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                           <div class="input-group custom-search-form">
                                 <img src="../img/grancapital.png" alt="Imagen de marcador genérico" width="199px" height="59px">
                 <!--img src="../img/logotipo-Sitema-de-Informacion-fin.png" alt="Imagen de marcador genérico" width="160px" height="80px"-->
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=" ../users/home" ><i><img  src="../img/flecha.png" width="12" height="12"></i> Tablero control</a>
                        </li>
                        <li >
                            <a href="#"><i><img  src="../img/flecha.png" width="12" height="12">Sistematizaciones </i> <img  src="../img/flechaabajo.png" width="15" height="15"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    
                                    <?php echo $this->Html->link(__('Registros', true), array('controller' => 'sistematizacionprocesosviewtests', 'action' => 'nuebus')); ?>

                                </li>
                                <li>
                                    
                                    <?php echo $this->Html->link(__('Nuevo'), array('controller'=>'proactividades','action' => 'add'))?>

                                </li>
                                <li>
                                    
                                        <?php echo $this->Html->link(__('Agregar sesión'), array('controller'=>'proactividades','action' => 'add'))?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
             </div>
       </nav>

