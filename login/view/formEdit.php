<?php
session_start();
if($_SESSION['login'] && isset($_POST['id']))
{
	$id =$_POST['id'];
}
else
{
	header("location:mainPage.php");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script type="application/javascript" src="../js/client.js"></script>
</head>

<body>
	<div style="display:flex;
					justify-content:center;
					align-items:center;
					margin-top:30px;">
	<input class="btn btn-warning" style="margin-left:20px;"type="button" value="MainPage" onclick="mainPageLink();">
	<input class="btn btn-success" style="margin-left:20px;" type="button" onclick="loadPage('products.php');" value="Products">
	<input class="btn btn-success" style="margin-left:20px;" type="button" onclick="loadPage('amountOrder.php');" value="Product Amount">
	<input class="btn btn-success" style="margin-left:20px;" type="button" onclick="loadPage('list.php');" value="List">
	<input class="btn btn-success" style="margin-left:20px;" type="button" onclick="loadPage('edit.php');" value="Edit">
	<input class="btn btn-success" style="margin-left:20px;" type="button" onclick="loadPage('register.php');" value="Register">
	<input class="btn btn-danger" style="margin-left:20px;" type="button" onclick="loginOff();" value='Logout'>
	</div>
	<div id='index' style="display:block;
					justify-content:center;
					align-items:center;
					margin-top:30px;">
	<div class="form-group" style="max-width:400px;
								   margin:20px auto;
								   
								   ">
		<h1 style="text-align:center;">Update</h1>
		<input type="hidden" id="id" value="<?php echo $id ?>">
		<label for="name">Name</label><input id="name"class="form-control" type="text">
		<label for="age">Age</label><input id="age" class="form-control" type="text">
		<label for="gender">Gender</label>
		<br>
		<select class="custom-select" id="gender">
				<option value="" selected></option>
				<option value="1">Masculino</option>
				<option value="2">Feminino</option>
				
			</select>
		<br><label for="city">City</label>
			<select class="custom-select" id="city" onChange="autoCompleteSelect();">
				<option value="" selected></option>
				<option value="1">Portão</option>
				<option value="2">Santa Cruz do Sul</option>
				<option value="3">Porto Alegre</option>
				<option value="4">São Leopoldo</option>
				<option value="5">Novo Hamburgo</option>
			</select>
		
		<br><label for="state">State</label>
			<select class="custom-select" id="state">
				<option value="" selected></option>
				<option value="1">Rio Grande do Sul</option>
				<option value="2">São Paulo</option>
				<option value="3">Bahia</option>
				<option value="4">Mato Grosso</option>
				<option value="5">Acre</option>
			</select>
		<br><label for="country">Country</label>
			<select class="custom-select" id="country">
				<option value="" selected></option>
				<option value="1">Brasil</option>
				<option value="2">Estados Unidos</option>
				<option value="3">Mexico</option>
				<option value="4">Canada</option>
				<option value="5">Africa</option>
			</select>
		
		<div style="display:flex;
					align-items:center;
					justify-content:center;
					margin-top:30px;">
		<input type="button" class="btn btn-success" onclick="formEdit(<?php echo $id ?>);" value="Update">
			<input style="margin-left:40px;" class="btn btn-danger"type="button" onclick="resetForm();" value="Clear">
			</div>
	</div>
	
</body>
</html>