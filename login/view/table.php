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
	<div style="display:flex;
						   justify-content: center;
						   align-items:center;" class="table-responsive">
		<?php
			$input = $_SESSION['input'];
			
			include("../controller/controller_client.php");

			$client = new Client();
			$result = $client->autoComplete($input);
			
			
		?>
		<br><table class="table" style="max-width:1000px;
			text-align:center;">
			<thead style="text-align: center;" class="thead-dark">
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
				<input style="margin-left:10px;" type="button" class="btn btn-warning" value="Edit" onclick="editClient(<?php echo "{id:".$result[$i]['idClient']."}"?>);" >
				<input style="margin-left:30px;" type="button" class="btn btn-danger" value="Delete" onclick="deleteClient(<?php echo $result[$i]['idClient']?>);" >
			</td>
				<?php
		   		echo"</tr>";
			}
			?>
		</table>
		</div>
</body>
</html>