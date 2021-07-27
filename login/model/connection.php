<?php
	class Database{
		public function connect()
		{
			$connect = new mysqli("localhost","root","","crud");
			
			return $connect;
		}
	}

?>