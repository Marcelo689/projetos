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
include("../controller/controller_client.php");
$client = new Client();

$userData = $client->collectUserData($id);
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
		<label for="name">Name</label><input id="name"class="form-control" type="text" value="<?php echo $userData['nameClient']?>">
		<label for="age">Age</label><input id="age" class="form-control" type="text" value="<?php echo $userData['ageClient']?>">
		<label for="gender">Gender</label>
		<br>
		<select class="custom-select" id="gender">
				<option value="" ></option>
				<?php
				$result =$client->selectAllGender();
				
				for($i=0;$i < count($result);$i++)
				{
					if($userData['idGender'] == $result[$i]['idGender'])
					{
						echo "<option selected value='".$result[$i]["idGender"]."'>".$result[$i]["descriptionGender"]."</option>";
					}else{
						echo "<option value='".$result[$i]["idGender"]."'>".$result[$i]["descriptionGender"]."</option>";	
					}
				}
				?>
			</select>
		<br><label for="city">City</label>
			<select class="custom-select" id="city" onChange="autoCompleteSelect();">
				<option value="" ></option>
				<?php
				$result =$client->selectAllCitys();
				
				for($i=0;$i < count($result);$i++)
				{
					if($userData['idCity'] == $result[$i]['idCity'])
					{
						echo "<option selected value='".$result[$i]["idCity"]."'>".$result[$i]["nameCity"]."</option>";	
					}else{
					echo "<option value='".$result[$i]["idCity"]."'>".$result[$i]["nameCity"]."</option>";
					}
				}
				?>
			</select>
		
		<br><label for="state">State</label>
			<select class="custom-select" id="state">
				<option value="" ></option>
				<?php
				$result =$client->selectAllStates();
				
				for($i=0;$i < count($result);$i++)
				{
					if($userData['idState'] == $result[$i]['idState'])
					{
					echo "<option selected value='".$result[$i]["idState"]."'>".$result[$i]["nameState"]."</option>";	
					
					}else{
					echo "<option value='".$result[$i]["idState"]."'>".$result[$i]["nameState"]."</option>";	
					}
				}
				?>
			</select>
		<br><label for="country">Country</label>
			<select class="custom-select" id="country">
				<option value="" ></option>
				<?php
				$result =$client->selectAllCountrys();
				
				for($i=0;$i < count($result);$i++)
				{
					if($userData['idCountry'] == $result[$i]['idCountry'])
					{
					echo "<option selected value='".$result[$i]["idCountry"]."'>".$result[$i]["nameCountry"]."</option>";	
						
					}else{
					echo "<option value='".$result[$i]["idCountry"]."'>".$result[$i]["nameCountry"]."</option>";	
					}
				}
				?>
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