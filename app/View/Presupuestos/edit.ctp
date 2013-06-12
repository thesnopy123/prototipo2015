<div class="presupuestos form">
<?php echo $this->Form->create('Presupuesto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Presupuesto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('año');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('proceso_id');
		echo $this->Form->input('partida_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Presupuesto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Presupuesto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
	</ul>
</div>
