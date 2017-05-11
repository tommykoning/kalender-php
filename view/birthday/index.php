<div class="container">
	<table border="1">
		<tr>
			<th>naam</th>
			<th>maand</th>
			<th>dag</th>
			<th>jaar</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($birthdays as $birthday) { 

			?>
		<tr>
			<td><?= $birthday['person']; ?></td>
			<td><?= $birthday['month']; ?></td>
			<td><?= $birthday['day']; ?></td>
			<td><?= $birthday['year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">Toevoegen</a>
</div>