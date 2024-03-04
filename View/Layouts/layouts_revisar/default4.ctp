<html>
    <head>
        <title>SICB - SISTEMA INFORMACI&Oacute;N CIUDAD BIENESTAR</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <div style="width: 100%; height: 100%;">
            <div style="width: 100%; height: 15%; background: #8080FF; border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 0px; border-bottom-right-radius: 20px; -moz-border-top-left-radius: 20px; -webkit-border-top-left-radius: 20px; -moz-border-top-right-radius: 20px; -webkit-border-top-right-radius: 20px; -moz-border-bottom-left-radius: 0px; -webkit-border-bottom-left-radius: 0px; -moz-border-bottom-right-radius: 20px; -webkit-border-bottom-right-radius: 20px;">
                <?php echo $this->Html->image("logo.png", array("style" => "float: left; height: 90%; top: 7%; position: relative; left: 1%;")); ?>
                <?php echo $this->Html->image("escudo.png", array("style" => "float: right; height: 90%; top: 7%; position: relative; right: 1%;")); ?>
                <strong style="position: relative; left: 3%; top: 3%;">
                    PLAN DE INTERCIONES COLECTIVAS<br/>
                    Gesti&oacute;n del Conocimiento y Sistematizaci&oacute;n<br/>
                    Estrategia de Movilizaci&oacute;n Social Ciudad Bienestar<br/>
                    SICB - SISTEMA INFORMACI&Oacute;N CIUDAD BIENESTAR
                </strong>
                <div style="position: absolute; top: 2%; left: 85%; text-align: right; font-size: 11px; text-decoration: none; font-weight: bold;">
                    <?php
                    $usr = $this->Session->read("usr");
                    if(isset($usr)){
                        echo $usr."<br/>";
                        echo $this->Html->link("Cerrar Sesión", "/users/salir", array(
                            "style" => "text-decoration:none; color:#FFFFFF;"
                        ));
                    }
                    ?>
                </div>
            </div>
            <style>
                #mnu a{
                    background-color: #A0A0FF;
                    color: #000000;
                    text-decoration: none;
                }
                
                #mnu a:hover{
                    background-color: #8080BB;
                    /*color: #FFFF00;*/
                    font-weight: bold;
                }
                
                .eMnu{
                    background-color: #8080AA;
                }
                
                .oMnu{
                    background-color: #A0A0FF;
                    font-size: 12px;
                }
            </style>
            <div id="mnu" style="width: 15%; height: 80%; margin-bottom: 50px; background: #8080FF; position: absolute; overflow: auto;">
                <center><b>MENU</b></center>
                <?php
                $nvl = $this->Session->read("nvl");
                if(isset($nvl)&&($nvl=="A")){
                ?>
                <div class="action"><br />ADMINISTRACION<br /></div>
                <div class="action">
                <?php echo $this->Html-> link('crear usuario', '/usuarios/add'); ?><br />
                <?php echo $this->Html-> link('Tipos Indicadores', '/tipos/'); ?><br />
                <?php echo $this->Html-> link('Indicadores', '/indicadores/'); ?><br />
                <?php echo $this->Html-> link('Indicadores X Proyecto', '/proinds/'); ?><br />
                <?php echo $this->Html-> link('Variables', '/variables/'); ?><br />
                <?php echo $this->Html-> link('Variables X Indicador', '/varinds/'); ?><br />
                <?php echo $this->Html-> link('Fuentes', '/fuentes/'); ?><br />
                <?php echo $this->Html-> link('Procesos', '/procesos/'); ?><br />
                <?php echo $this->Html-> link('Pasos', '/pasos/'); ?><br />
                <?php echo $this->Html-> link('Desagregaciones', '/desagregaciones/'); ?><br />
                <?php echo $this->Html-> link('Tipos de Desagregaciones', '/tipdess/'); ?><br />
                <?php echo $this->Html-> link('Limitaciones', '/limitaciones/'); ?><br />
                <?php echo $this->Html-> link('Seguimientos', '/seguimientos/'); ?><br />
                <?php echo $this->Html-> link('Usuarios', '/users/admin'); ?><br />
                </div>
                <?php
                }
                if(isset($nvl)&&($nvl=="U")){
                ?>
                <div class="eMnu"><br />CREACI&Oacute;N<br /></div>
                <div class="oMnu">
                <?php echo $this->Html-> link('Creacion proyecto', '/proyectos/addind'); ?><br />
                <?php echo $this->Html-> link('F01. Identificacion Objetivo', '/indicadores/add1'); ?><br />
                <?php echo $this->Html-> link('F02. Identificacion Contexto', '/indicadores/add1a'); ?><br />
                <?php echo $this->Html-> link('F03. Identificacion Indicador', '/indicadores/add2'); ?><br />
                <?php echo $this->Html-> link('F04. Definicion  variables', '/indicadores/add3'); ?><br />
                <?php echo $this->Html-> link('F05. Proceso del indicador', '/indicadores/add4'); ?><br />
                <?php echo $this->Html-> link('F06. Desagregaciones del indicador', '/indicadores/add5'); ?><br />
                <?php echo $this->Html-> link('F07. Periodicidad y visibilidad', '/indicadores/add6'); ?><br />
                <?php echo $this->Html-> link('F08. Documentacion del indicador', '/indicadores/add7'); ?><br />
                </div>
                <div class="eMnu"><br />UTILIZACI&Oacute;N<br /></div>
                <div class="oMnu">
                <?php echo $this->Html-> link('Seguimiento', '/indicadores/alert'); ?><br />
                </div>
                <div class="eMnu"><br />REPORTES<br /></div>
                <div class="oMnu">
                <?php echo $this->Html-> link('Ficha Indicador', '/indicadores/add8'); ?><br />
                <?php echo $this->Html-> link('Seguimiento Indicador', '/indicadores/add9'); ?><br />
                </div>
                <?php
                }
                ?>
            </div>
            <div style="width: 15%; height: 3%; background: #8080FF; position: absolute; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; -moz-border-bottom-left-radius: 20px; -webkit-border-bottom-left-radius: 20px; -moz-border-bottom-right-radius: 20px; -webkit-border-bottom-right-radius: 20px; top: 96%;">
            </div>
            <div style="width: 83%; height: 81%; background: #FFFFFF; overflow: auto; margin: 10px; position: absolute; top: 15%; left: 15%; padding: 5px;">
                <div style="border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px; background: #8080AA; padding:20px 4px; text-align:center;">
                    <div style="color: #FFFFFF; font-weight: bold; align: center; width:100%;">
                        <?php echo $this->Session->flash(); ?>
                    </div>
                    <div style="background: white; width: 99%; padding: 5px;">
                        <?php echo $content_for_layout; ?>
                        <?php echo $this->Session->flash("auth"); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>