
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
            <div id="mnu" style="width: 15%; height: 80%; margin-bottom: 50px; background: #8080FF;">
                <center><b>MENU</b></center>
                <?php
                if($this->Session->check("nvl")){
                ?>
                <div class="oMnu">
                <?php
                    foreach($this->Session->read("mnus") as $i => $v){
                        if(($v["Mnuuser"]["estado"]==1)){
                            if(!empty($v["Menu"]["url"])){
                                echo $this->Html-> link($v["Menu"]["menu"], strtolower($v["Menu"]["url"]), array("target" => strtolower($v["Menu"]["destino"])))."<br/>";
                            } else {
                                echo $v["Menu"]["menu"]."<br/>";
                            }
                        }
                    }
                ?>
                <!--?php echo $this->Html-> link('Usuarios', '/usuarios/nuebus'); ?><br />
                <?php echo $this->Html-> link('Participantes', '/participantes/index'); ?><br />
                <?php echo $this->Html-> link('Registros', '/usuariosactividades/index'); ?><br />
                <?php echo $this->Html-> link('Actividades', '/actividades/nuebus'); ?><br />
                <?php echo $this->Html-> link('Busqueda', '/usuarios/nuebus'); ?><br />
                <?php echo $this->Html-> link('Equipo CB', '/integrantes/index'); ?><br />
                 <div class="oMnu"><br />ORGANIAZACIONES<br /></div>
                <?php echo $this->Html-> link('Comunitarias', '/comunitarios/nuebus'); ?><br />
                <?php echo $this->Html-> link('Sociales', '/sociales/nuebus'); ?><br />
                <?php echo $this->Html-> link('Publicas', '/publicos/nuebus'); ?><br />                
                <?php echo $this->Html-> link('Cuentas', '/users/admin'); ?><br /-->
                </div>
                <?php
                }
                /*if(isset($nvl)&&($nvl==2)){
                ?>
                 <div class="eMnu"><br />Encuestas<br /></div>
                 <div class="eMnu"><?php echo $this->Html-> link('salud oral', '/jovenes/add'); ?><br /></div>
                
               
                
                <div class="eMnu"><br />REPORTES<br /></div>
                
                <?php
                }*/
                ?>
            </div>