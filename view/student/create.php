<div class="container">
	<form action="<?= URL ?>student/createSave" method="post">
	
		<input type="date" name="cal_date">
		<input type="text" name="cal_location">
		<select name="cal_event">
			<option value="birthday">verjaardag</option>
			<option value="holiday">feestdag</option>
			<option value="other">overig</option>	
		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>