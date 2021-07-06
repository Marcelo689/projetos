<?php
//Carregar modelo
include($_SERVER["DOCUMENT_ROOT"]."/models/conexaoBD.php");

class Cliente{
		
	function select(){
	
	$con = new Database();
	$conectar = $con->conectar();
		
	$sql= "SELECT * FROM cliente";
	
	//executando comando
	$sqlResult = mysqli_query($conectar,$sql);
		
	$resultado = $sqlResult->fetch_all(MYSQLI_ASSOC);
		
		return $resultado;
	}
	
	function selectId($id)
	{
	$con = new Database();
	$conectar = $con->conectar();
		
	$sql= "SELECT * FROM cliente WHERE idCliente = ".$id.";";
	
	//executando comando
	$sqlResult = mysqli_query($conectar,$sql);
		
	$resultado = $sqlResult->fetch_all(MYSQLI_ASSOC);
		
		return $resultado;
	}
	
	function insert($nome,$idade)
	{
		$con = new Database();
		$conectar = $con->conectar();
		
		$sql= "INSERT INTO cliente(
		nomeCliente,idadeCliente
		) VALUES(
		'".$nome."',
		".$idade.")";
	
		//executando comando
		$resultado = mysqli_query($conectar,$sql);
	}
	
	function update($id,$nome,$idade)
	{
		$con = new Database();
		$conectar = $con->conectar();
		
		$sql= "UPDATE cliente SET nomeCliente = '".$nome."' ,idadeCliente = '".$idade."' WHERE idCliente = ".$id.";";
	
		//executando comando
		mysqli_query($conectar,$sql) or die(mysqli_error($conectar));
	}
	
	function delete($id)
	{
		$con = new Database();
		$conectar = $con->conectar();
		
		$sql= "DELETE FROM cliente WHERE idCliente = ".$id.";";
		//executando comando
		mysqli_query($conectar,$sql) or die(mysqli_error());
	}
}
?>