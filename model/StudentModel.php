<?php

function getStudent($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM kalender WHERE cal_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllEvents() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM kalender";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editStudent() 
{
	$calDate = isset($_POST['calDate']) ? $_POST['calDate'] : null;
	$location = isset($_POST['location']) ? $_POST['location'] : null;
	$event = isset($_POST['event']) ? $_POST['event'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($calDate) == 0 || strlen($location) == 0 || strlen($event) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE kalender SET cal_date = :calDate, cal_location = :location, cal_event = :event WHERE cal_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':calDate' => $calDate,
		':location' => $location,
		':event' => $event,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteStudent($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM students WHERE student_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createStudent() 
{
	$calDate = isset($_POST['calDate']) ? $_POST['calDate'] : null;
	$location = isset($_POST['location']) ? $_POST['location'] : null;
	$event = isset($_POST['event']) ? $_POST['event'] : null;
	
	if (strlen($calDate) == 0 || strlen($location) == 0 || strlen($event) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO kalender(cal_date, cal_location, cal_event) VALUES (:calDate, :location, :event)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':calDate' => $date,
		':location' => $location,
		':event' => $event));

	$db = null;
	
	return true;
}
