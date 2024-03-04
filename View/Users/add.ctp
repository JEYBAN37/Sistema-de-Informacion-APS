
<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="users form">
<?php echo $this->Form->create('User'); ?>

    <fieldset>
        <legend><?php echo __('agregar usuario del sistema'); ?></legend>
   
      <div class="row">
         


          <div class="form-group col-md-6">
        <?php echo $this->Form->input('nombre', array('label'=>'Nomnbres y apellidos')); ?>
            </div>  


          <div class="form-group col-md-6">
        <?php echo $this->Form->input('username', array('label'=>'Correo electronico')); ?>
            </div>

        <div class="form-group col-md-6">
        <?php echo $this->Form->input('password', array('label'=>'Contraseña')); ?>
            </div>    


         <div class="form-group col-md-6"></div>     
        <div class="form-group col-md-6">
        <?php echo $this->Form->input('nivel', array('label'=>'Tipo de usuario', 'type'=>'select','options'  => array('' => 'Elegir','D'=>'Integrante PIC' ))); ?>
            </div> 


          <div class="form-group col-md-6">
        <?php echo $this->Form->input('group_id', array('label'=>'Nivel de usuario', 'type'=>'select','options'  => array('' => 'Elegir','3'=>'Sistematizador' ))); ?>
            </div> 

   
              
             </div>

   
             </fieldset>
    <?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'admin')); ?></li>
        
        
    </ul>
</div>

<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.select-search').select2();
        agregarOpcionSeleccion();
    });


    function validarTamanioSoporte(){
        var auxFile = document.getElementById('ActaAnexo');
        var sizeF = auxFile.files[0].size;
        if(sizeF > 3000000)
        {
            alert('El archivo debe ser menor a 3 Mb');
            auxFile.value = '';
        }
    }

    function agregarOpcionSeleccion(){
        $("#ActaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ActaProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ActaResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }
</script>