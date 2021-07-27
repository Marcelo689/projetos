<?php
	include("controller/check_login.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
</head>

<body>
	<h1 style="text-align:center;">Edit</h1>
	<div style="align-text:center;
				display:flex;
				max-width:500px;
				margin:auto;">
	<label style="font-size: 25px;
				  font-weight:bold;">Search</label>
	
	<input class="form-control" style="display:flex;
									   max-width:400px;
									   margin:auto;" type="text" id="filter" onKeyUp="autoCompleteSql();">
	</div>
		<br>
	<div style="display:inline;
				margin-left:50px;" id="table">
	</div>
	
</body>
</html>