
<!DOCTYPE html>
<html>
<head></head>
	
<body>
<h1 style="text-align: center;
			   margin-top:200px
				   margin-bottom:100px;">Products</h1>
	<div style="max-width: 500px;
				display:block;
				align-items:center;
				justify-content: center;
				margin:200px auto;">
		
	<select id="product" class="custom-select">
		<option value="" selected></option>
		<?php 
			include("../controller/controller_order.php");
		
			$order = new Order();
			$idProducts = $order->selectIdProducts();
		
			for($i=0;$i<count($idProducts); $i++)
			{
			$nameProduct =$order->selectProduct($idProducts[$i]['idProduct']);
			echo "<option value='".$idProducts[$i]['idProduct']."'>".$nameProduct['nameProduct']."</option>";
			}
		
		?>
		
	</select>
		<div style="max-width: 500px;
				display:flex;
				align-items:center;
				justify-content: center;
				margin:30px auto;">
		<input type="button" class="btn btn-success" onclick="order();" value="Order">
		</div>
		
	</div>
	<div id='barcode'>
		
		</div>
</body>
</html>