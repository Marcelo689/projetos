<?php
	include($_SERVER['DOCUMENT_ROOT']."/model/connection.php");

	
	class Client{
		
		public function listTable()
		{
			$db = new Database();
			
			$con = $db->connect();
			
			$sql = "SELECT * FROM client ;";
			
			$result = mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$result = $result->fetch_all(MYSQLI_ASSOC);
			
			return $result;
				
		}
		public function autoComplete($input){
			
			$db = new Database();
			
			$con = $db->connect();
			
			$array = array();
			if($input == "")
			{
				return $array;
			}
			else
			{
			
			$sql = "SELECT * FROM client WHERE nameClient LIKE '".$input."%' order by nameClient desc limit 10;";
			
			$result = mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$result = $result->fetch_all(MYSQLI_ASSOC);
			
			return $result;
			}
		}
		
		public function delete($id)
		{
			$db = new Database();
			$con = $db->connect();
			
			$sql = "DELETE FROM client WHERE idClient = ".$id.";";
			
			mysqli_query($con,$sql) or die(mysqli_error($con));
			
		}
		public function insert($name,$age,$genderId,$cityId,$stateId,$countryId)
		{
			$db  = new Database();
			
			$con = $db->connect();
			
			$sql = "INSERT INTO client(nameClient,ageClient,idGender,idCity,idState,idCountry) VALUES('".$name."',".$age.",".$genderId.",".$cityId.",".$stateId.",".$countryId.");";
			
			mysqli_query($con,$sql) or die(mysqli_error($con));
			
			
			
		}
		
		public function update($id,$name,$age,$genderId,$cityId,$stateId,$countryId)
		{
			$db  = new ClientDatabase();
			
			$con = $db->connect();
			
			$sql = "UPDATE client SET nameClient = '".$name."',ageClient = '".$age."',idGender = '".$genderId."',idCity = ".$cityId.", idState = ".$stateId." , idCountry = ".$countryId." WHERE idClient = ".$id.";";
			
			mysqli_query($con,$sql) or die(mysqli_error($con));
			
			
		}
	}
?>