<?php 
include($_SERVER['DOCUMENT_ROOT']."/model/connection.php");

	class User{
		
		public function checkUser($email,$password)
		{
			$db  = new Database();
			$con = $db->connect();
			
			$sql =" SELECT * FROM user WHERE emailUser = '".$email."'  AND passwordUser = '".$password."';";
			
			$user = mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$user = $user->fetch_all(MYSQLI_ASSOC);
			
			return $user;
		}
		public function dateLogin($idUser,$login = true)
		{
			$db = new Database();
			$con = $db->connect();
			
			if($login)
			{
			$sql = " INSERT INTO loginDate(idUser,loginDate,logoutDate) VALUES(".$idUser.",Now(),'');";
			}
			else
			{
			$sql =" UPDATE loginDate SET logoutDate = Now() WHERE idDate = (SELECT MAX(idDate) FROM loginDate);";
			}
			mysqli_query($con,$sql)or die(mysqli_error($con));
			
		}
		public function checkEmail($email)
		{
			$db  = new Database();
			$con = $db->connect();
			
			$sql =" SELECT * FROM user WHERE emailUser = '".$email."' ;";
			
			$user = mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$user = mysqli_fetch_assoc($user);
			
			
			return $user;
		}
	}
	
?>