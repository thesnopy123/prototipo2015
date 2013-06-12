<div class="partidas form">
<?php echo $this->Form->create('Partida'); ?>
	<fieldset>
		<legend><?php echo __('NUEVO CATALOGO'); ?></legend>
	<?php
		echo $this->Form->input('catalogo_id');
		echo $this->Form->input('enero_monto');
		echo $this->Form->input('febrero_monto');
		echo $this->Form->input('marzo_monto');
		echo $this->Form->input('abril_monto');
		echo $this->Form->input('mayo_monto');
		echo $this->Form->input('junio_monto');
		echo $this->Form->input('julio_monto');
		echo $this->Form->input('agosto_monto');
		echo $this->Form->input('septiembre_monto');
		echo $this->Form->input('octubre_monto');
		echo $this->Form->input('noviembre_monto');
		echo $this->Form->input('diciembre_monto');
		
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('GUARDAR')); ?>
</div>
<div class="actions">
	<h3><?php echo __('OPCIONES'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista catalogos asignados'), array('action' => 'index_user')); ?></li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
	</ul>
</div>
