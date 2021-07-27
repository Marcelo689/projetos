<?php
	session_start();
	
	$login = $_SESSION['login'];
	if($login)
	{

	}
	else
	{
		
		header("location:login.php");
	}
	
?>