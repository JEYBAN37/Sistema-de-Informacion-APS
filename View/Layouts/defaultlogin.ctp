<?php $cakeDescription = 'Ciudad Bienestar: Sistema de Información'; ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Sistema Auditoria Salud Pública</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>

    <?php

    echo $this->Html->meta('icon');
    echo $this->Form->create("User");
    echo $this->Session->flash();

    echo $this->Html->css(array('login.css'));
    //echo $this->Html->script(array('jquery.min',  'bootstrap.min', 'jquery.dataTables.min'));
    //echo $this->fetch('css');
    //echo $this->fetch('script');

    ?>


</head>


<body>
    <section style=" margin-top: 30px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 style="color: white; font-size: 50px;"></h1>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 170px;">
                <div class="col-md-12">
                    <div class="wrap d-md-flex">

                        <div class="login-wrap p-4 p-md-5">

                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Usuario</label>
                                    <input name="data[User][username]" type="text" class="form-control"
                                        name="UserUsername" placeholder="Usuario" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Contraseña</label>
                                    <input name="data[User][password]" id="UserPassword" type="password"
                                        id="UserUsername" name="UserUsername" class="form-control"
                                        placeholder="Contraseña" required>
                                </div>
                                
                                <div class="form-group" style="margin-top: 10px;">
                                    <button onfocus="verCod()" value="Entrar" type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Ingresar</button>
                                </div>

                            </form>

                        </div>

                        <div class="login-wrap p-4 p-md-5"
                            style=" display: flex; justify-content: center; align-items: center;">
                            <img class="imagenbig" src="../img/EBS.jpg" alt="">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div id="wrapper">


        <!-- Navigation -->


        <!-- /.navbar-header -->


        <!-- /.navbar-top-links -->


        <!-- /.sidebar-collapse -->
    </div>