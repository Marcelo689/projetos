<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
<body>
	<div style="padding:40px">
		<form>
			<div class="form-group" >
				<label for='nome'>Nome:</label><input style="max-width:400px" id="nome" class="form-control" type='text' name='nome'><br>
			</div>
			<div class="form-group" >	
				<label for='idade'>Idade :</label><input  style="max-width:400px" class="form-control" type="text" name="idade" id='idade'><br>
			</div>
			<div class="form-group" >
				
				<input id='btn' type="button" class="btn btn-info" onclick="cadastrar();" value="Gravar">
			</div>
		</form>
	</div>
	<button style="margin:40px" class="btn btn-success" onclick="telaListar();">Listar</button>
		
</body>
</html>