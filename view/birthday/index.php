<?php
	$month = array('jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'oct',  'nov', 'dec');
	$currentMonth = null; 
	$currentDay = null;

	foreach ($birthdays as $birthday ) {
		if ($currentMonth == null || $currentMonth != $birthday['month']) {
?>	
		<h1><?= $month[$birthday['month'] - 1]; ?></h1>
<?php 
			$currentMonth = $birthday['month'];
		}

		if ($currentDay == null || $currentDay != $birthday['day']) {
?>
		<h2><?= $birthday['day']; ?></h2>

<?php 
			$currentDay = $birthday['day'];
		}
?>
		<p>
			<a href="<?= URL ?>birthday/edit/<?= $birthday['id'] ?>">
				<span> <?= $birthday['person']; ?> </span>
			</a>
				<span> (<?= $birthday['year']; ?> )</span>
			<a href="<?= URL ?>birthday/delete/<?= $birthday['id'] ?>"> [X] </a>
		</p>
		

<?php } ?>
<p><a href="<?= URL ?>birthday/create">Toevoegen</a></p>