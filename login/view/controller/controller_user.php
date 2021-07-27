<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/controller/controller_user.php");

	$action = $_POST['action'];
	$user 	 = new User();
	
	@$email	  = $_POST['email'];
	@$password = $_POST['password'];
		
	if($action == "login")
	{
		
		
		$content = $user->checkUser($email,$password);
		
		
		$userE = isset($content[0]['emailUser']);
		$userP = isset($content[0]['passwordUser']);
		
		if($userE && $userP)
		{
			$idUser = $content[0]['idUser'];
			$_SESSION['email']=$email;
			$_SESSION['password']=$password;
			$user->dateLogin($idUser,true);
			$_SESSION['login'] = true;
		}
		else
		{
			unset($_SESSION['email']);
			unset($_SESSION['password']);
			$_SESSION['login'] = false;
		}
			
	}else if($action == "loginOff")
	{
		$content = $user->checkUser($_SESSION['email'],$_SESSION['password']);
		$idUser = $content[0]['idUser'];
		
		$user->dateLogin($idUser,false);
		$_SESION['login'] = false;
		unset($_SESION['login']);
	}
	