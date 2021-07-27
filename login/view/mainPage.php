<?php
	include("controller/check_login.php");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script type="application/javascript" src="../js/client.js">
	</script>
	<script type="application/javascript" src="../js/user.js"></script><script type="application/javascript" src="../js/order.js"></script>
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
		<h1 style="text-align:center;">Main Page</h1>
	</div>
	
</body>
</html>