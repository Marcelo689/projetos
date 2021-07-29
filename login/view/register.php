<?php
include("controller/check_login.php");
include("../controller/controller_client.php");

$client = new Client();
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
	<div class="form-group" style="max-width:400px;
								   margin:auto;
								   ">
		<h1 style="text-align:center;">Register</h1>
		<form id="form">
		<label for="name">Name</label><input id="name"class="form-control" type="text">
		<label for="age">Age</label><input id="age" class="form-control" type="text">
		<label for="gender">Gender</label>
		<br>
		<select class="custom-select" id="gender">
			<option value="" selected></option>
			<?php
				$result =$client->selectAllGender();
				
				for($i=0;$i < count($result);$i++)
				{
					echo "<option value='".$result[$i]["idGender"]."'>".$result[$i]["descriptionGender"]."</option>";	
				}
				?>
				
			</select>
		<br><label for="city">City</label>
			<select class="custom-select" id="city" onChange="autoCompleteSelect();">
				<option value="" selected></option>
				<?php
				$result =$client->selectAllCitys();
				
				for($i=0;$i < count($result);$i++)
				{
					echo "<option value='".$result[$i]["idCity"]."'>".$result[$i]["nameCity"]."</option>";	
				}
				?>
			</select>
		
		<br><label for="state">State</label>
			<select class="custom-select" id="state">
				<option value="" selected></option>
				<?php
				$result =$client->selectAllStates();
				
				for($i=0;$i < count($result);$i++)
				{
					echo "<option value='".$result[$i]["idState"]."'>".$result[$i]["nameState"]."</option>";	
				}
				?>
			</select>
		<br><label for="country">Country</label>
			
			
			
			<select class="custom-select" id="country">
				
				<option value="" selected></option>
				<?php
				$result =$client->selectAllCountrys();
				
				for($i=0;$i < count($result);$i++)
				{
					echo "<option value='".$result[$i]["idCountry"]."'>".$result[$i]["nameCountry"]."</option>";	
				}
				?>
			</select>
		<div style="display:flex;
					justify-content:center;
					align-items:center;
					margin-top:30px;"
			 		>
			</form>
		<input class="btn btn-success"type="button" onclick="registerClient();" value="Register">
			<input style="margin-left:40px;" class="btn btn-danger"type="button" onclick="resetForm();" value="Clear">
		</div>
	</div>
	
</body>
</html>