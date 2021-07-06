<?php
	include("../controllers/controle_cliente.php");
	
	$cliente  = new Cliente();
	$resultado = $cliente->select();
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Clientes</title>
	<script src="../jquery/jquery.js"></script>
	<script type="application/javascript" src="../js/cliente.js">
	</script>
</head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
	
	<table class="table table-hover table-dark" style="max-width:fit-content;
    margin:auto;">
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Nome</th>
				<th scope="col">Idade</th>
				<th scope="col" style="text-align: center">Ação</th>
			</tr>
<?php

for($i=0;$i<count($resultado);$i++)
{

	echo "<tr>";


	foreach($resultado[$i] as $key => $value)
	{	

		echo "<td>".$value."</td>";

	}
?>
		<td style=" 
				   display: flex;
				  justify-content: center;
				  align-items: center;">
			<button style="margin:0px 10px;" class="btn btn-warning" onclick="telaEditar(<?php echo $resultado[$i]['idCliente']?>);">Editar</button>
			<button style="margin:0px 10px;" class="btn btn-danger"  onclick="buttonDeletar(<?php echo $resultado[$i]['idCliente']?>);">Deletar</button>
		</td>	
		
<?php
	echo "</tr>";
}
?>

	</table>
	<button class="btn btn-primary" onclick="telaCadastro();" >Cadastrar</button>

</body>
</html>