<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>birthday/editSave" method="post">
	
		<input type="text" name="name">
		<input type="text" name="day">
		<input type="text" name="month">
		<input type="text" name="year">

		<input type="hidden" name="id" value="<?= $student['student_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
