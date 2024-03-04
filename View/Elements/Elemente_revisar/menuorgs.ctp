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
          <a href="http://ciudadbienestar.gov.co/"><img src="../img/logo.png" alt="Imagen de marcador genérico" width="125px" height="60px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php $usr = $this->Session->read("usr");                   
                   
                        echo $this->Html->link("Inicio", "/users/bienvenida", array(                          
                        ));
                   
                    ?></li>
            
            <li><a href="../sociales/nuebus">Consultar</a></li>
            <li><a href="http://ciudadbienestar.gov.co/tutorial/" target="_blank">Tutorial</a></li>
            <li><?php $usr = $this->Session->read("usr");                   
                   
                        echo $this->Html->link("Cerrar Sesión", "/users/salir" , array(                          
                        )); 
                   
                    ?></li>

                   <li> <a> Cuenta:<?php echo $usr." ";?> </a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

