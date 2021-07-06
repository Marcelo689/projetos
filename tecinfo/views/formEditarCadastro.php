<?php
	include("../controllers/controle_cliente.php");
	$cliente = new Cliente();
	
	$id = $_POST['id'];
	$resultado = $cliente->selectId($id);

	$id   = $resultado[0]['idCliente'];
	$nome = $resultado[0]['nomeCliente'];
	$idade= $resultado[0]['idadeCliente'];
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualizar Cliente</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
	<script src="../jquery/jquery.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
<body>
	<div style="padding:40px" >
		
				<input type="hidden" id="id" name="id" value="<?php echo $id ?>">

			<div class="form-group">
				<label for='nome'>Nome:</label><input style="max-width:400px" id='nome' class="form-control" type='text' name='nome' value="<?php echo $nome ?>"><br>
			</div>		
			<div class="form-group">
				<label for='idade'>Idade :</label><input style="max-width:400px"class="form-control" type="text" id="idade" name="idade" value="<?php echo $idade ?>"><br>
			</div>	
			<input id='btn' class="btn btn-warning" type="button" onClick="editar();" value="Atualizar">
	
	</div>
	<button style="margin:40px" class="btn btn-success" onclick="telaListar();">Listar</button>
		
</body>
</html>