<?php
	include($_SERVER['DOCUMENT_ROOT']."/model/connection.php");

	class Order{
		
		public function insertOrder($product,$userEmail)
		{
			$db = new Database();
			$con = $db->connect();
			
			$sql = "INSERT INTO orderProduct(idProduct,Date,emailUser) VALUES(".$product.",Now(),'".$userEmail."');";
			
			mysqli_query($con,$sql)or die(mysqli_error($con));
			
			$sql = "UPDATE stock SET amount = amount-1 WHERE  idProduct = ".$product.";";
			
			mysqli_query($con,$sql) or die(mysqli_error($con));
		}
		
		public function selectProduct($productId)
		{
			$db = new Database();
			$con = $db->connect();
			
			$sql = "SELECT nameProduct,barcode FROM product WHERE idProduct = ".$productId.";";
			
			$result = mysqli_query($con,$sql)or die(mysqli_error($con));
			
			$result = mysqli_fetch_assoc($result);
			
			return $result;
		}
		public function selectIdProducts()
		{
			$db = new Database();
			$con = $db->connect();
			
			$sql = "SELECT idProduct,amount FROM stock WHERE amount > 1;";
			
			$result = mysqli_query($con,$sql)or die(mysqli_error($con));
			
			$result = $result->fetch_all(MYSQLI_ASSOC);
			
			return $result;
		}
		public function updateOrder($idProduct,$amount)
		{
			$db = new Database();
			$con = $db->connect();
			
			$sql = "UPDATE stock SET amount = ".$amount." WHERE  idProduct = ".$idProduct.";";
			
			mysqli_query($con,$sql) or die(mysqli_error($con));
		}
	}


?>