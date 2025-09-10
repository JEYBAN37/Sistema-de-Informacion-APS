<!--?php $this->layout = 'defaultmenu'?-->
<?php $this->layout = 'defaultlogin'; ?>

<?php echo $this->fetch('content'); ?>

<?php
echo $this->Form->create("User");
?>