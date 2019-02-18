<?php include 'connect.php'; 
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color:">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
	<div class="container">
	<!-- 	<div class="col-md-4">
			<select name="" class="form-control" >
				<option value="">A</option>
				<option value="">B</option>
				<option value="">C</option>
				<option value="">D</option>
			</select>
		</div> -->
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Silahkan Login</div>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button class="btn btn-primary" name="login">Login</button>
						</form>

					</div>
				</div>	
			</div>
		</div>
	</div>
<?php 

// if (isset($_POST["login"])) {
// 	$username = $_POST["username"];
// 	$password = $_POST["password"];

// 	$ambilsopir = $koneksi->query("SELECT * FROM sopir WHERE username_sopir='$username' AND password_sopir='$password'");

// 	$cocoksopir = $ambilsopir->num_rows;

// 	if ($cocoksopir==1) {
// 		$akunsopir = $ambilsopir->fetch_assoc();
// 		$_SESSION["sopir"]=$akunsopir;
		
// 		echo "<script>location='sopirindex.php';</script>";
// 	}
// 	else{
// 		echo "<script>location='login.php';</script>";
// 	}

// }

if(isset($_POST["login"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$ambiladmin = $koneksi->query("SELECT * FROM admin WHERE admin_username='$username' AND password_admin='$password'");
	$cocokadmin = $ambiladmin->num_rows;

	if($cocokadmin==1){
		$akunadmin = $ambiladmin->fetch_assoc();
		$_SESSION["admin"]=$akunadmin;
		echo "<script>location='admin-index.php';</script>";
	}
	else{
		echo "<script>location='login.php';</script>";
	}
}

 ?>

</body>
</html>