<div class="catalogos form">
<?php echo $this->Form->create('Catalogo'); ?>
	<fieldset>
		<legend><?php echo __('Add Catalogo'); ?></legend>
	<?php
		echo $this->Form->input('catalogo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Catalogos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
	</ul>
</div>
