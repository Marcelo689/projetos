<?php
	include($_SERVER['DOCUMENT_ROOT']."/controllers/controle_cliente.php");

	$cliente = new Cliente();
	$acao    = $_POST['acao'];

	if($acao == "atualizar")
	{
		$id    = $_POST['id'];
		$nome  = $_POST['nome'];
		$idade = $_POST['idade'];

		$cliente->update($id,$nome,$idade);
	}
	else if($acao == "inserir")
	{
		$nome  = $_POST['nome'];
		$idade = $_POST['idade'];

		$cliente->insert($nome,$idade);
		
	}
	else if($acao == "deletar")
	{
		$id    = $_POST['id'];
		$cliente->delete($id);
	}
?>