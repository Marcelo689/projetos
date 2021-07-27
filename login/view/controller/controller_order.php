<?php
	include("../../controller/controller_order.php");
	session_start();
@$action 	    =	$_POST['action'];
@$idProduct     =	$_POST['product'];
@$amount		=	$_POST['amount'];
	$order = new Order();

if($action == "insert")
{
	$order->insertOrder($idProduct,$_SESSION['email']);
	$result = $order->selectProduct($idProduct);
	
	$_SESSION['nameProduct'] = $result['nameProduct'];
	$_SESSION['barcode'] = $result['barcode'];
	
}
else if($action == "update")
{
	$order->updateOrder($idProduct,$amount);
}
?>