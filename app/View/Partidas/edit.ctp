<div class="partidas form">
<?php echo $this->Form->create('Partida'); ?>
	<fieldset>
		<legend><?php echo __('Edit Partida'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('catalogo_id');
		echo $this->Form->input('enero_monto');
		echo $this->Form->input('enero_federal');
		echo $this->Form->input('enero_estatal');
		echo $this->Form->input('enero_propio');
		echo $this->Form->input('febrero_monto');
		echo $this->Form->input('febrero_federal');
		echo $this->Form->input('febrero_estatal');
		echo $this->Form->input('febrero_propio');
		echo $this->Form->input('marzo_monto');
		echo $this->Form->input('marzo_federal');
		echo $this->Form->input('marzo_estatal');
		echo $this->Form->input('marzo_propio');
		echo $this->Form->input('abril_monto');
		echo $this->Form->input('abril_federal');
		echo $this->Form->input('abril_estatal');
		echo $this->Form->input('abril_propio');
		echo $this->Form->input('mayo_monto');
		echo $this->Form->input('mayo_federal');
		echo $this->Form->input('mayo_estatal');
		echo $this->Form->input('mayo_propio');
		echo $this->Form->input('junio_monto');
		echo $this->Form->input('junio_federal');
		echo $this->Form->input('junio_estatal');
		echo $this->Form->input('junio_propio');
		echo $this->Form->input('julio_monto');
		echo $this->Form->input('julio_federal');
		echo $this->Form->input('julio_estatal');
		echo $this->Form->input('julio_propio');
		echo $this->Form->input('agosto_monto');
		echo $this->Form->input('agosto_federal');
		echo $this->Form->input('agosto_estatal');
		echo $this->Form->input('agosto_propio');
		echo $this->Form->input('septiembre_monto');
		echo $this->Form->input('septiembre_federal');
		echo $this->Form->input('septiembre_estatal');
		echo $this->Form->input('septiembre_propio');
		echo $this->Form->input('octubre_monto');
		echo $this->Form->input('octubre_federal');
		echo $this->Form->input('octubre_estatal');
		echo $this->Form->input('octubre_propio');
		echo $this->Form->input('noviembre_monto');
		echo $this->Form->input('noviembre_federal');
		echo $this->Form->input('noviembre_estatal');
		echo $this->Form->input('noviembre_propio');
		echo $this->Form->input('diciembre_monto');
		echo $this->Form->input('diciembre_federal');
		echo $this->Form->input('diciembre_estatal');
		echo $this->Form->input('diciembre_propio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Partida.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Partida.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Partidas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Catalogo'), array('controller' => 'catalogos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
