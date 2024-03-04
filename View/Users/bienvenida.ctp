<?php $this->layout='admin'?>



<?php
                $nvl = $this->Session->read("nvl");
                if(isset($nvl)&&($nvl=="A")){
                ?>

                <div class="container marketing">
              <div class="row">
              
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../productos/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Soportes anexo</font></font></h3>
          <p><font><font class="">Consulte resultados de las actividades desarrolladas en la Estrategia.</font></font></p>
          <p><a class="btn btn-default" href="../productos/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
        
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../actas/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Actas</font></font></h3>
          <p><font><font class="">Administrar registros de actas</font></font></p>
          <p><a class="btn btn-default" href="../actas/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
       <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../actividades/add" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Actividades</font></font></h3>
          <p><font><font class="">Menu de consulta e ingreso de actividades y/o encuentros educativos desarrollados con la comunidad.</font></font></p>
          <p><a class="btn btn-default" href="../actividades/add" role="button"><font>Sistematizaciones</font></a>
        </div><!-- /.col-lg-4 -->
        
        
        
         <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../responsables/nuebus" role="button"><img class="img-circle" src="../img/Equipo.png" width="140" height="140"></a>
          <h3><font><font>Administracion de usuarios</font></font></h3>
          <p><font><font class="">Gestione las cuentas de usuarios</font></font></p>
          <p><a class="btn btn-default" href="../users/admin" role="button"><font><font>Ver usuarios sistema</font></font></a></p>
        </div><!-- /.col-lg-4 -->


      </div>
      
      
            <div class="row">

         <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../plsesiones/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Consultar planes</font></font></h3>
         <p><font><font class="">Consulte sobre los planes de sesion y la metodologias implementadas en el PIC.</font></font></p>
          <p><a class="btn btn-default" href="../plsesiones/add" role="button"><font><font>Nuevo plan</font></font></a></p>
        </div><!-- /.col-lg-4 -->      
            
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../eventosviewtests/nuebus" role="button"><img class="img-circle" src="../img/Instituciones.png" width="140" height="140"></a>
          <h3><font><font>Informes y Eventos</font></font></h3>
          <p><font><font>Consulte informes de acciones y eventos de la Estrategia CB</font></font></p>
          <p><a class="btn btn-default" href="../infoeventos/add" role="button"><font><font>Nuevo registro</font></font></a></p>
        </div><!-- /.col-lg-4 -->

        
        
        <div class="col-lg-3">
           <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../organizaciones/nuebus" role="button"><img class="img-circle" src="../img/OrganizacionComunitaria.png" width="140" height="140"></a>
          <h3><font><font>Oganizaciones Comunitarias</font></font></h3>
           <p><font><font class="">Consulte información de contacto de las organizaciones comunitarias.</font></font></p>
          <p><a class="btn btn-default" href="../organizaciones/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../instituciones/nuebus" role="button"><img class="img-circle" src="../img/Instituciones.png" width="140" height="140"></a>
          <h3><font><font>Instituciones Públicas</font></font></h3><br>
          <p><font><font>Consulte información de contacto de las instituciones públicas.</font></font></p>
          <p><a class="btn btn-default" href="../instituciones/nuebus" role="button"><font><font>Ver detalles</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        




      </div>
       </div>


                
            
              
         
                
                <?php
                }
                if(isset($nvl)&&($nvl=="U")){
                ?>
                 <div class="container marketing">
              <div class="row">
              
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../productos/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Soportes anexo</font></font></h3>
          <p><font><font class="">Consulte resultados de las actividades desarrolladas en la Estrategia.</font></font></p>
          <p><a class="btn btn-default" href="../productos/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
        
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../actaviewtests/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Actas</font></font></h3>
          <p><font><font class="">Consulte sobre la planeación o compromisos para el desarrollo de la actividas de la Estrategia.</font></font></p>
          <p><a class="btn btn-default" href="../actaviewtests/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../actividadesviewtests/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Actividades</font></font></h3>
          <p><font><font class="">Consulte sobre las actividades y/o encuentros educativos desarrollados con la comunidad.</font></font></p>
          <p><a class="btn btn-default" href="../actividadesviewtests/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
          <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../plsesiones/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Consultar planes</font></font></h3>
         <p><font><font class="">Consulte sobre los planes de sesion y la metodologias implementadas en el PIC.</font></font></p>
          <p><a class="btn btn-default" href="../plsesiones/add" role="button"><font><font>Nuevo plan</font></font></a></p>
        </div><!-- /.col-lg-4 -->
      </div>
      
      
            <div class="row">
            
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../organizaciones/nuebus" role="button"><img class="img-circle" src="../img/OrganizacionSocial.png" width="140" height="140"></a>
          <h3><font><font>Organizaciones Sociales</font></font></h3>
          <p><font><font class="">Consulte información de contacto de las organizaciones sociales</font></font></p>
          <p><a class="btn btn-default" href="../organizaciones/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
         <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../eventosviewtests/nuebus" role="button"><img class="img-circle" src="../img/Instituciones.png" width="140" height="140"></a>
          <h3><font><font>Informes y Eventos</font></font></h3>
          <p><font><font>Consulte informes de acciones y eventos de la Estrategia CB</font></font></p>
          <p><a class="btn btn-default" href="../infoeventos/add" role="button"><font><font>Nuevo registro</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../instituciones/nuebus" role="button"><img class="img-circle" src="../img/Instituciones.png" width="140" height="140"></a>
          <h3><font><font>Instituciones Públicas</font></font></h3><br>
          <p><font><font>Consulte información de contacto de las instituciones públicas.</font></font></p>
          <p><a class="btn btn-default" href="../instituciones/nuebus" role="button"><font><font>Ver detalles</font></font></a></p>
        </div><!-- /.col-lg-4 -->
         <div class="col-lg-3">
         
         
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../personas/ver" role="button"><img class="img-circle" src="../img/Acercade.png" width="140" height="140"></a>
          <h3><font><font>Acerca de..</font></font></h3><br>
          <p><font><font>Estrategia de Movilización Social Ciudad bienestar</font></font></p>
          <p><a class="btn btn-default" href="../personas/ver" role="button"><font><font>Ver detalles</font></font></a></p>
        </div><!-- /.col-lg-4 -->
      </div>
       </div>


        <?php
                }
                if(isset($nvl)&&($nvl=="D")){
                ?>
                <div class="container marketing">
              <div class="row">
        <div class="col-lg-3">
         <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../personas/add" role="button"> <img class="img-circle" src="../img/Participantes.png" alt="Imagen de marcador genérico" width="140" height="140"></a>
          <h3><font><font>Participantes</font></font></h3>
          <p><font><font class="">Consulte información de los participantes a las diferentes actividades de la Estrategia.</font></font></p>
          <p><a class="btn btn-default" href="../personas/add" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
       <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../actaviewtests/nuebus" role="button"><img class="img-circle" src="../img/AgentesComunitarios.png" width="140" height="140"></a>
          <h3><font><font>Consultar Actas</font></font></h3>
           <p><font><font class="">Consulte información de reuniones relacionada al PIC.</font></font></p>
          <p><a class="btn btn-default" href="../actas/add" role="button"><font><font>Nueva acta</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../actividades/add" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Actividades</font></font></h3>
          <p><font><font class="">Menu de consulta e ingreso de actividades y/o encuentros educativos desarrollados con la comunidad.</font></font></p>
          <p><a class="btn btn-default" href="../actividades/add" role="button"><font>Sistematizaciones</font></a>
        </div><!-- /.col-lg-4 -->
        
        
         <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../plsesiones/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Consultar planes</font></font></h3>
         <p><font><font class="">Consulte sobre los planes de sesion y la metodologias implementadas en el PIC.</font></font></p>
          <p><a class="btn btn-default" href="../plsesiones/add" role="button"><font><font>Nuevo plan</font></font></a></p>
        </div><!-- /.col-lg-4 -->
      </div>
      
      
            <div class="row">
            
        
      
        
        
        <div class="col-lg-3">
           <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../organizaciones/nuebus" role="button"><img class="img-circle" src="../img/OrganizacionComunitaria.png" width="140" height="140"></a>
          <h3><font><font>Oganizaciones</font></font></h3>
           <p><font><font class="">Consulte información de organizaciones participantes en el PIC.</font></font></p>
          <p><a class="btn btn-default" href="../organizaciones/add" role="button"><font><font>Nuevo registro</font></font></a></p>
        </div><!-- /.col-lg-4 -->
        
        
        <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../eventosviewtests/nuebus" role="button"><img class="img-circle" src="../img/Instituciones.png" width="140" height="140"></a>
          <h3><font><font>Informes y Eventos</font></font></h3>
          <p><font><font>Consulte informes de acciones y eventos de la Estrategia CB</font></font></p>
          <p><a class="btn btn-default" href="../infoeventos/add" role="button"><font><font>Nuevo registro</font></font></a></p>
        </div><!-- /.col-lg-4 -->

         <div class="col-lg-3">
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../productos/nuebus" role="button"><img class="img-circle" src="../img/Actividades.png" width="140" height="140"></a>
          <h3><font><font>Soportes anexo</font></font></h3>
          <p><font><font class="">Consulte sobre los avances de actividades del anexo tecnico 2019</font></font></p>
          <p><a class="btn btn-default" href="../productos/nuebus" role="button"><font><font>Ver modulo</font></font></a></p>
        </div><!-- /.col-lg-4 -->
          <div class="col-lg-3">
         
         
          <a class="btn btn-default" class="img-circle" style= "border-radius: 50%; border-color: rgba(204, 204, 204, 0)"; href="../personas/ver" role="button"><img class="img-circle" src="../img/Acercade.png" width="140" height="140"></a>
          <h3><font><font>Acerca de..</font></font></h3>
          <p><font><font>Estrategia de Movilización Social Ciudad bienestar</font></font></p>
          <p><a class="btn btn-default" href="../personas/ver" role="button"><font><font>Ver detalles</font></font></a></p>
        </div><!-- /.col-lg-4 -->
      </div>
       </div>

                
                <?php
                }
                ?>
            