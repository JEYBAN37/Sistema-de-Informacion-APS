<!-- Fixed navbar -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="http://ciudadbienestar.gov.co/">
             <?php 
              $enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              $auxDsr = strrpos($enlace_actual, 'page');              
              if ($auxDsr === false) { 
                echo '<img src="../img/logo.png" alt="Imagen de marcador genérico" width="100px" height="50px">';
              } else {
                echo '<img src="../../img/logo.png" alt="Imagen de marcador genérico" width="100px" height="50px">';
              }
             ?>
              

            </a>
            <a>
              <?php
              if ($auxDsr === false) { 
                echo '<img src="../img/logotipo-Sitema-de-Informacion-fin.png" alt="Imagen de marcador genérico" width="125px" height="65px">';
              } else {
                echo '<img src="../../img/logotipo-Sitema-de-Informacion-fin.png" alt="Imagen de marcador genérico" width="125px" height="65px">';
              }              
              ?>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><?php $usr = $this->Session->read("usr");                   
                     
                          echo $this->Html->link("Inicio", "/users/bienvenida", array( ));
                          ?>
              </li>      
                    
              <li><a href="http://138.0.91.230:8081/SICB/app2018/users/login" target="_blank">PIC_2018</a></li>
              <li><a href="https://ciudadbienestar.freshdesk.com/support/home" target="_blank">Mesa de Ayuda</a></li>
              
              <li> 
                  <div class="form-group" style="position: relative;display: block;padding: 15px 10px;"> 
                  <?php
                    if ($auxDsr === false) { 
                      echo '<img src="../img/salir.png " alt="Imagen de marcador genérico">';
                    } else {
                      echo '<img src="../../img/salir.png " alt="Imagen de marcador genérico">';
                    }              
                    $usr = $this->Session->read("usr");
                    echo $this->Html->link("Salir", "/users/salir" , array( ));?> 
                   </div>
                 </li>

                <li> <a> 
                  <?php
                  if ($auxDsr === false) { 
                    echo '<img src="../img/usuarios.png " alt="Imagen de marcador genérico" >';
                  } else {
                    echo '<img src="../../img/usuarios.png " alt="Imagen de marcador genérico" >';
                  }              
                  ?>                      
                  <?php echo $usr."  ";?> 
                </a></li>

            
            </ul>
            
             <!--a href="http://ciudadbienestar.gov.co/"><img src="../img/escudo_colombia_pasto.png" alt="Imagen de marcador genérico" width="189px" height="49px"></a!-->


          </div><!--/.nav-collapse -->
        </div>
      </nav>


