<div class="presupuestos index">
	<h2><?php echo __('Presupuestos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('año'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proceso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('partida_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($presupuestos as $presupuesto): ?>
	<tr>
		<td><?php echo h($presupuesto['Presupuesto']['id']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['año']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $presupuesto['Departamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Proceso']['nombre'], array('controller' => 'procesos', 'action' => 'view', $presupuesto['Proceso']['id'])); ?>
		</td>
		<td><?php echo h($presupuesto['Presupuesto']['partida_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $presupuesto['Presupuesto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $presupuesto['Presupuesto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $presupuesto['Presupuesto']['id']), null, __('Are you sure you want to delete # %s?', $presupuesto['Presupuesto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
	</ul>
</div>
