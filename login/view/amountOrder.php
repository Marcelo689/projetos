<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<h1 style="text-align: center;">Products Amount</h1>
	
	<div style="max-width: 500px;
				display:block;
				align-items:center;
				justify-content: center;
				margin:200px auto;">
		<label>Product</label>
	<select id="product" class="custom-select">
		<option value="" selected></option>
		<option value="1">Banana</option>
		<option value="2">Memory Ram</option>
		<option value="3">Knife</option>
		<option value="4">PS5</option>
		<option value="5">Keyboard</option>
		<option value="6">Mouse Gamer</option>
		<option value="7">Notebook Gamer</option>
		<option value="8">MP5</option>
	</select>
		<label style="margin-top:20px;" for="amount">Amount</label>
	<input placeholder="1"  type="text" id="amount" class="form-control">
		<div style="margin:30px auto;
					display:flex;
					align-items:center;
					justify-content: center;">
			<input type="button"  class="btn btn-success" value="Order Products" onclick="orderAmount();">
		</div>
	</div>
</body>
</html>