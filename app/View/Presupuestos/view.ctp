<div class="presupuestos view">
<h2><?php  echo __('Presupuesto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Año'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['año']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $presupuesto['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proceso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Proceso']['nombre'], array('controller' => 'procesos', 'action' => 'view', $presupuesto['Proceso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partida Id'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['partida_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Presupuesto'), array('action' => 'edit', $presupuesto['Presupuesto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Presupuesto'), array('action' => 'delete', $presupuesto['Presupuesto']['id']), null, __('Are you sure you want to delete # %s?', $presupuesto['Presupuesto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Partidas'); ?></h3>
	<?php if (!empty($presupuesto['Partida'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Catalogo Id'); ?></th>
		<th><?php echo __('Enero Monto'); ?></th>
		<th><?php echo __('Enero Federal'); ?></th>
		<th><?php echo __('Enero Estatal'); ?></th>
		<th><?php echo __('Enero Propio'); ?></th>
		<th><?php echo __('Febrero Monto'); ?></th>
		<th><?php echo __('Febrero Federal'); ?></th>
		<th><?php echo __('Febrero Estatal'); ?></th>
		<th><?php echo __('Febrero Propio'); ?></th>
		<th><?php echo __('Marzo Monto'); ?></th>
		<th><?php echo __('Marzo Federal'); ?></th>
		<th><?php echo __('Marzo Estatal'); ?></th>
		<th><?php echo __('Marzo Propio'); ?></th>
		<th><?php echo __('Abril Monto'); ?></th>
		<th><?php echo __('Abril Federal'); ?></th>
		<th><?php echo __('Abril Estatal'); ?></th>
		<th><?php echo __('Abril Propio'); ?></th>
		<th><?php echo __('Mayo Monto'); ?></th>
		<th><?php echo __('Mayo Federal'); ?></th>
		<th><?php echo __('Mayo Estatal'); ?></th>
		<th><?php echo __('Mayo Propio'); ?></th>
		<th><?php echo __('Junio Monto'); ?></th>
		<th><?php echo __('Junio Federal'); ?></th>
		<th><?php echo __('Junio Estatal'); ?></th>
		<th><?php echo __('Junio Propio'); ?></th>
		<th><?php echo __('Julio Monto'); ?></th>
		<th><?php echo __('Julio Federal'); ?></th>
		<th><?php echo __('Julio Estatal'); ?></th>
		<th><?php echo __('Julio Propio'); ?></th>
		<th><?php echo __('Agosto Monto'); ?></th>
		<th><?php echo __('Agosto Federal'); ?></th>
		<th><?php echo __('Agosto Estatal'); ?></th>
		<th><?php echo __('Agosto Propio'); ?></th>
		<th><?php echo __('Septiembre Monto'); ?></th>
		<th><?php echo __('Septiembre Federal'); ?></th>
		<th><?php echo __('Septiembre Estatal'); ?></th>
		<th><?php echo __('Septiembre Propio'); ?></th>
		<th><?php echo __('Octubre Monto'); ?></th>
		<th><?php echo __('Octubre Federal'); ?></th>
		<th><?php echo __('Octubre Estatal'); ?></th>
		<th><?php echo __('Octubre Propio'); ?></th>
		<th><?php echo __('Noviembre Monto'); ?></th>
		<th><?php echo __('Noviembre Federal'); ?></th>
		<th><?php echo __('Noviembre Estatal'); ?></th>
		<th><?php echo __('Noviembre Propio'); ?></th>
		<th><?php echo __('Diciembre Monto'); ?></th>
		<th><?php echo __('Diciembre Federal'); ?></th>
		<th><?php echo __('Diciembre Estatal'); ?></th>
		<th><?php echo __('Diciembre Propio'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($presupuesto['Partida'] as $partida): ?>
		<tr>
			<td><?php echo $partida['id']; ?></td>
			<td><?php echo $partida['catalogo_id']; ?></td>
			<td><?php echo $partida['enero_monto']; ?></td>
			<td><?php echo $partida['enero_federal']; ?></td>
			<td><?php echo $partida['enero_estatal']; ?></td>
			<td><?php echo $partida['enero_propio']; ?></td>
			<td><?php echo $partida['febrero_monto']; ?></td>
			<td><?php echo $partida['febrero_federal']; ?></td>
			<td><?php echo $partida['febrero_estatal']; ?></td>
			<td><?php echo $partida['febrero_propio']; ?></td>
			<td><?php echo $partida['marzo_monto']; ?></td>
			<td><?php echo $partida['marzo_federal']; ?></td>
			<td><?php echo $partida['marzo_estatal']; ?></td>
			<td><?php echo $partida['marzo_propio']; ?></td>
			<td><?php echo $partida['abril_monto']; ?></td>
			<td><?php echo $partida['abril_federal']; ?></td>
			<td><?php echo $partida['abril_estatal']; ?></td>
			<td><?php echo $partida['abril_propio']; ?></td>
			<td><?php echo $partida['mayo_monto']; ?></td>
			<td><?php echo $partida['mayo_federal']; ?></td>
			<td><?php echo $partida['mayo_estatal']; ?></td>
			<td><?php echo $partida['mayo_propio']; ?></td>
			<td><?php echo $partida['junio_monto']; ?></td>
			<td><?php echo $partida['junio_federal']; ?></td>
			<td><?php echo $partida['junio_estatal']; ?></td>
			<td><?php echo $partida['junio_propio']; ?></td>
			<td><?php echo $partida['julio_monto']; ?></td>
			<td><?php echo $partida['julio_federal']; ?></td>
			<td><?php echo $partida['julio_estatal']; ?></td>
			<td><?php echo $partida['julio_propio']; ?></td>
			<td><?php echo $partida['agosto_monto']; ?></td>
			<td><?php echo $partida['agosto_federal']; ?></td>
			<td><?php echo $partida['agosto_estatal']; ?></td>
			<td><?php echo $partida['agosto_propio']; ?></td>
			<td><?php echo $partida['septiembre_monto']; ?></td>
			<td><?php echo $partida['septiembre_federal']; ?></td>
			<td><?php echo $partida['septiembre_estatal']; ?></td>
			<td><?php echo $partida['septiembre_propio']; ?></td>
			<td><?php echo $partida['octubre_monto']; ?></td>
			<td><?php echo $partida['octubre_federal']; ?></td>
			<td><?php echo $partida['octubre_estatal']; ?></td>
			<td><?php echo $partida['octubre_propio']; ?></td>
			<td><?php echo $partida['noviembre_monto']; ?></td>
			<td><?php echo $partida['noviembre_federal']; ?></td>
			<td><?php echo $partida['noviembre_estatal']; ?></td>
			<td><?php echo $partida['noviembre_propio']; ?></td>
			<td><?php echo $partida['diciembre_monto']; ?></td>
			<td><?php echo $partida['diciembre_federal']; ?></td>
			<td><?php echo $partida['diciembre_estatal']; ?></td>
			<td><?php echo $partida['diciembre_propio']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'partidas', 'action' => 'view', $partida['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'partidas', 'action' => 'edit', $partida['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'partidas', 'action' => 'delete', $partida['id']), null, __('Are you sure you want to delete # %s?', $partida['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
