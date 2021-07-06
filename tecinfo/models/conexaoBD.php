<?php
	
	class Database{
		
		function conectar(){
		
		$conectar = new mysqli("localhost","root","","mvc");
		
		return $conectar;
			
		}
		
	}
	

?>