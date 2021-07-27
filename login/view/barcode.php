
<!DOCTYPE html>
<html>
<head></head>
	
<body>
<?php 
	session_start();
	echo "<h3 style='text-align:center;'>".$_SESSION['nameProduct']."</h3>";
	echo "<h1 style='text-align:center;'>".$_SESSION['barcode']."</h1>";

?>
</body>
</html>