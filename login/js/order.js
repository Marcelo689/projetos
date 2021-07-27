function order()
{
	var product = $("#product").val();
	
	$.ajax({
		type:"POST",
		url:"controller/controller_order.php",
		data:{action:"insert",product:product},
		success:function(data){
			console.log(data);
			
			

			$("#barcode").load("barcode.php");
			alert("Order successfully placed!");
		}
	});
	$("#index").empty();
	$("#index").load("products.php");
			
	
}

function orderAmount()
{
	var amount = $("#amount").val();
	var idProduct = $("#product").val();
	
	$.ajax({
		type:"POST",
		url:"controller/controller_order.php",
		data:{action:"update",amount:amount,product:idProduct},
		success:function(data)
		{
			window.location.replace("mainPage.php");
			console.log(data);
		}
	});
}