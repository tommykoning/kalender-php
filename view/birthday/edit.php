<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>birthday/editSave" method="post">
	
		<input type="text" name="name" placeholder=" naam">
		<input type="text" name="day" placeholder=" dag">
		<input type="text" name="month" placeholder=" maand">
		<input type="text" name="year" placeholder=" jaar">

		<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
