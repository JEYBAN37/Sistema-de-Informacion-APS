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
          <a class="navbar-brand" href="#">Sistema de Información</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php $usr = $this->Session->read("usr");                   
                   
                        echo $this->Html->link("Inicio", "/users/bienvenida", array(                          
                        ));
                   
                    ?></li>
            <li><?php $usuarios = $this->Session->read("usuarios");                   
                   
                        echo $this->Html->link("Consulta", "/usuarios/nuebus", array(                          
                        ));
                   
                    ?></li>
            <li><?php              
                   
                        echo $this->Html->link("Nuevo ingreso", "/usuarios/add", array(                          
                        ));
                   
                    ?></li>
            <li><a href="#contact">Contact</a></li>
            <li><?php $usr = $this->Session->read("usr");                   
                   
                        echo $this->Html->link("Cerrar Sesión", "/users/salir", array(                          
                        ));
                   
                    ?></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div class="actions">
  <h3><?php echo __('Opciones'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?></li>          
    <li><?php echo $this->Html->link(__('Lista Agentes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Nuevo Agente'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('Lista Registros'), array('controller' => 'usuariosactividades', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Nuevo Registro'), array('controller' => 'usuariosactividades', 'action' => 'add')); ?> </li>
  </ul>
</div>
