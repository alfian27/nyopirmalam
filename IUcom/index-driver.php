<?php  
session_start();
if(!isset($_SESSION["sopir"])){
	echo "<script>alert('silahkan login');</script>";
	echo "<script>location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SOPIR</title>
</head>
<body>
 SOPIR
</body>
</html>