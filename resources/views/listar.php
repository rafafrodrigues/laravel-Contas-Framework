<h1>Lista de Contas a Pagar</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Descrição</th>
		<th>Valor</th>
	</tr>
	<?php foreach ($contas_pagar as $value) { ?>
    <tr>
		<td><?php echo $value->id; ?></td>
		<td><?php echo $value->descricao; ?></td>
		<td><?php echo $value->valor; ?></td>
	</tr>

    <?php } ?>		
</table>	 
 