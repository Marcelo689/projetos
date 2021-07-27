<?php
include("controller/check_login.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List of clients</title>
</head>

<body>
	<h1 style="text-align:center;">List</h1>
	<div id='table' style="display:flex;
					justify-content:center;
					align-items:center;
					margin-top:30px;" class="table-responsive">
		
		<?php
			
			include("../controller/controller_client.php");

			$client = new Client();
			$result = $client->listTable();
			
			
		?>
		<table style="max-width: 1000px;
					  text-align:center;
					  align-items:center;" class="table">
			<thead style="text-align:center;" class='thead-dark'>
				<tr>
				<th scope="col">Name</th>
				<th scope="col">Action</th>
				</tr>
			</thead>
			
			<?php
			for($i=0; $i<count($result);$i++)
			{
				echo "<tr><td>".$result[$i]['nameClient']."</td>";
				?>
			<td style="display:flex;
					   align-items:center;
					   justify-content:center;">
				<input style="margin-left:30px;"type="button" class="btn btn-warning"value="Edit" onclick="editClient(<?php echo "{id:".$result[$i]['idClient']."}"?>);">
				<input style="margin-left:30px;" type="button" class="btn btn-danger" value="Delete" onclick="deleteClientList(<?php echo $result[$i]['idClient']?>);" >
			</td>
				<?php
		   		echo"</tr>";
			}
			?>
		</table>
		</div>
</body>
</html>