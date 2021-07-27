<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/controller/controller_client.php");

	$action = $_POST['action'];

	@$id     = $_POST['id'];
	@$name   = $_POST['name'];
	@$age    = $_POST['age'];
	@$genderId    = $_POST['gender'];
	@$cityId   = $_POST['city'];
	@$stateId  = $_POST['state'];
	@$countryId = $_POST['country'];

	if($action == "list")
	{
		$_SESSION['input'] = $_POST['input'];
		
	}else if($action == "insert")
	{
		
		$client = new Client();
		$client->insert($name,$age,$genderId,$cityId,$stateId,$countryId);
		
	}else if($action == "delete")
	{
		$client = new Client();
		
		$client->delete($id);
	}else if($action == "update")
	{
		
		
		$client = new Client();
		$client->update($id,$name,$age,$genderId,$cityId,$stateId,$countryId);
		
	}
?>