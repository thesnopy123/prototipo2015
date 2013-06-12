<div class="partidas index">
	   
    <h2><?php echo __('Catalogos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('catalogo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Enero Requerido'); ?></th>
         	<th><?php echo $this->Paginator->sort('Febrero Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('marzo Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('abril Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('mayo Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('junio Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('julio Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('agosto Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('septiembre Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('octubre Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('noviembre Requerido'); ?></th>
			<th><?php echo $this->Paginator->sort('diciembre Requerido'); ?></th>

            
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($partidas as $partida): ?>
	<tr>
		<td><?php echo h($partida['Partida']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partida['Catalogo']['catalogo'], array('controller' => 'catalogos', 'action' => 'view', $partida['Catalogo']['id'])); ?>
		</td>
		<td><?php echo h($partida['Partida']['enero_monto']); ?>&nbsp;</td>
	    <td><?php echo h($partida['Partida']['febrero_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['marzo_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['abril_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['mayo_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['junio_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['julio_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['agosto_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['septiembre_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['octubre_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['noviembre_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['diciembre_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['diciembre_propio']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Form->postLink(__('BORRAR'), array('action' => 'delete', $partida['Partida']['id']), null, __('Are you sure you want to delete # %s?', $partida['Partida']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
 	</table>
   	<p>
    
  <table cellpadding="0" cellspacing="0">	
	<tr>
    <?php
// *************************************************************Calcular Totales**********************************

    $conexion = mysql_connect("127.0.0.1", "root", "");
    mysql_select_db("windows", $conexion);

	//Enero
	
	$totalEne=0;
	
	$res=mysql_query("select enero_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalEne+=$row['enero_federal'];
	
	$res=mysql_query("select enero_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalEne+=$row['enero_estatal'];
	
	$res=mysql_query("select enero_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalEne+=$row['enero_propio'];
	
	echo "<b> Enero Aprobado = $totalEne</b><br>"; //muestra la suma total de enero
	
	//Febrero
	
	$res=0;
	$totalFeb=0;
	
	$res=mysql_query("select febrero_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalFeb+=$row['febrero_federal'];
	
	$res=mysql_query("select febrero_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalFeb+=$row['febrero_estatal'];
	
	$res=mysql_query("select febrero_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalFeb+=$row['febrero_propio'];
	
	echo "<b> Febrero Aprobado = $totalFeb</b><br>"; //muestra la suma total de febrero
	
	//Marzo

	$totalMar=0;
	$res=mysql_query("select marzo_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMar+=$row['marzo_federal'];
	
	$res=mysql_query("select marzo_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMar+=$row['marzo_estatal'];
	
	$res=mysql_query("select marzo_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMar+=$row['marzo_propio'];
	
	echo "<b> Marzo Aprobado = $totalMar</b></br>"; //muestra la suma total de marzo

	//Abril

	$res=0;
	$totalAbr=0;
	$res=mysql_query("select abril_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAbr+=$row['abril_federal'];
	
	$res=mysql_query("select abril_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAbr+=$row['abril_estatal'];
	
	$res=mysql_query("select abril_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAbr+=$row['abril_propio'];
	
	echo "<b> Abril Aprobado = $totalAbr</b></br>"; //muestra la suma total de Abril

	//Mayo

	$totalMay=0;
	$res=mysql_query("select mayo_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMay+=$row['mayo_federal'];
	
	$res=mysql_query("select mayo_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMay+=$row['mayo_estatal'];
	
	$res=mysql_query("select mayo_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMay+=$row['mayo_propio'];
	
	echo "<b> Mayo Aprobado = $totalMay</b></br>"; //muestra la suma total de Mayo

	//Junio

	$totalJun=0;
	$res=mysql_query("select junio_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJun+=$row['junio_federal'];
	
	$res=mysql_query("select junio_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJun+=$row['junio_estatal'];
	
	$res=mysql_query("select junio_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJun+=$row['junio_propio'];
	
	echo "<b> Junio Aprobado = $totalJun</b></br>"; //muestra la suma total de Junio

	//Julio

	$totalJul=0;
	$res=mysql_query("select julio_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJul+=$row['julio_federal'];
	
	$res=mysql_query("select julio_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJul+=$row['julio_estatal'];
	
	$res=mysql_query("select julio_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJul+=$row['julio_propio'];
	
	echo "<b> Julio Apradobado= $totalJul</b></br>"; //muestra la suma total de Julio

	//Agosto

	$totalAgo=0;
	$res=mysql_query("select agosto_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAgo+=$row['agosto_federal'];
	
	$res=mysql_query("select agosto_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAgo+=$row['agosto_estatal'];
	
	$res=mysql_query("select agosto_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAgo+=$row['agosto_propio'];
	
	echo "<b> Agosto Aprobado = $totalAgo</b></br>"; //muestra la suma total de Agosto

	//Septiembre

	$totalSep=0;
	
	$res=mysql_query("select septiembre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalSep+=$row['septiembre_federal'];
	
	$res=mysql_query("select septiembre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalSep+=$row['septiembre_estatal'];
	
	$res=mysql_query("select septiembre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalSep+=$row['septiembre_propio'];
	
	echo "<b> Septiembre Aprobado = $totalSep</b></br>"; //muestra la suma total de Septiembre

	//Octubre

	$totalOct=0;
	
	$res=mysql_query("select octubre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalOct+=$row['octubre_federal'];
	
	$res=mysql_query("select octubre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalOct+=$row['octubre_estatal'];
	
	$res=mysql_query("select octubre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalOct+=$row['octubre_propio'];
	
	echo "<b> Octubre Aprobado = $totalOct</b></br>"; //muestra la suma total de Octubre

	//Noviembre

	$totalNov=0;
	
	$res=mysql_query("select noviembre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalNov+=$row['noviembre_federal'];
	
	$res=mysql_query("select noviembre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalNov+=$row['noviembre_estatal'];
	
	$res=mysql_query("select noviembre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalNov+=$row['noviembre_propio'];
	
	echo "<b> Noviembre aprobado = $totalNov</b></br>"; //muestra la suma total de Noviembre

	//Diciembre

	$totalDic=0;
	
	$res=mysql_query("select diciembre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalDic+=$row['diciembre_federal'];
	
	$res=mysql_query("select diciembre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalDic+=$row['diciembre_estatal'];
	
	$res=mysql_query("select diciembre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalDic+=$row['diciembre_propio'];
	
	echo "<b> Diciembre Aprobado = $totalDic</b></br>"; //muestra la suma total de Diciembre

?>
    </tr>
   </table>
	
	
	
	
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
		<li><?php echo $this->Html->link(__('Lista Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('ANEXAR OTRO CATALOGO'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>

	</ul>
</div>
