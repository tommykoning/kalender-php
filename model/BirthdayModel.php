<?php

function getBirthday($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month, day, year";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editBirthday() 
{
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($year) == 0 || strlen($day) == 0 || strlen($month) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPyear kalender SET person = :person, day = :day, month = :month WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':month' => $month,
		':day' => $day,
		':year' => $year,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteBirthday($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays WHERE id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createBirthday() 
{
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	
	if (strlen($person) == 0 ||strlen($year) == 0 || strlen($day) == 0 || strlen($month) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthdays(person, day, month, year) VALUES (:person, :day, :year, :month)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':year' => $year,
		':day' => $day,
		':month' => $month));

	$db = null;
	
	return true;
}
