<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        //esta sera la ultima prueba a las 12:27 am. esperamos pasar la materia si no ya valio mad......
        <legend><?php echo __('PORTAL PRINCIPAL INGRESA TUS DATOS, esta es una prueba desde la cuenta de nestor'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('ENTRAR')); ?>
</div>
