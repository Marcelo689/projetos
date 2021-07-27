
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script type="application/javascript" src="../js/client.js"></script><script type="application/javascript" src="../js/user.js"></script>
</head>

<body>
	
	<div class="form-group" style="max-width:400px;
								   margin:180px auto;
								   ">
		<h1 style="text-align:center;">Login</h1>
			<label for="email">Email</label><input class="form-control" type="email"  id="email">
			<label for="password">Password</label><input class="form-control" type="password" id="password">
			
			<div style="display:flex;
						justify-content: center;
						align-items: center;">	
				<input type="button" style="margin-top:20px;" class="btn btn-success" value="Login" onclick="login();" >
			</div>
		
	</div>
	
</body>
</html>