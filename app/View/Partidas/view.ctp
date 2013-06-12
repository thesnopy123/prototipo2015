<div class="partidas view">
<h2><?php  echo __('Partida'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Catalogo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partida['Catalogo']['catalogo'], array('controller' => 'catalogos', 'action' => 'view', $partida['Catalogo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enero Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['enero_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enero Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['enero_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enero Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['enero_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enero Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['enero_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Febrero Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['febrero_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Febrero Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['febrero_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Febrero Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['febrero_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Febrero Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['febrero_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marzo Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['marzo_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marzo Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['marzo_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marzo Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['marzo_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marzo Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['marzo_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abril Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['abril_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abril Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['abril_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abril Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['abril_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abril Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['abril_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mayo Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['mayo_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mayo Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['mayo_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mayo Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['mayo_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mayo Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['mayo_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Junio Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['junio_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Junio Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['junio_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Junio Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['junio_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Junio Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['junio_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Julio Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['julio_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Julio Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['julio_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Julio Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['julio_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Julio Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['julio_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agosto Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['agosto_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agosto Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['agosto_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agosto Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['agosto_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agosto Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['agosto_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Septiembre Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['septiembre_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Septiembre Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['septiembre_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Septiembre Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['septiembre_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Septiembre Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['septiembre_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Octubre Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['octubre_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Octubre Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['octubre_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Octubre Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['octubre_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Octubre Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['octubre_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noviembre Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['noviembre_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noviembre Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['noviembre_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noviembre Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['noviembre_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noviembre Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['noviembre_propio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diciembre Monto'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['diciembre_monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diciembre Federal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['diciembre_federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diciembre Estatal'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['diciembre_estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diciembre Propio'); ?></dt>
		<dd>
			<?php echo h($partida['Partida']['diciembre_propio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partida'), array('action' => 'edit', $partida['Partida']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partida'), array('action' => 'delete', $partida['Partida']['id']), null, __('Are you sure you want to delete # %s?', $partida['Partida']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partidas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partida'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Catalogo'), array('controller' => 'catalogos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Presupuestos'); ?></h3>
	<?php if (!empty($partida['Presupuesto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Año'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Proceso Id'); ?></th>
		<th><?php echo __('Partida Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partida['Presupuesto'] as $presupuesto): ?>
		<tr>
			<td><?php echo $presupuesto['id']; ?></td>
			<td><?php echo $presupuesto['año']; ?></td>
			<td><?php echo $presupuesto['departamento_id']; ?></td>
			<td><?php echo $presupuesto['proceso_id']; ?></td>
			<td><?php echo $presupuesto['partida_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'presupuestos', 'action' => 'view', $presupuesto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'presupuestos', 'action' => 'edit', $presupuesto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'presupuestos', 'action' => 'delete', $presupuesto['id']), null, __('Are you sure you want to delete # %s?', $presupuesto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
