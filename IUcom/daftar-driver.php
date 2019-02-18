<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
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
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav> -->

<form method="post" enctype="multipart/form-data">
	<br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Nama Lengkap" name="namalengkap">
  </div>
  <div class="form-group">
    <label for="inputAddress">Kota</label>
    <input type="text" class="form-control" placeholder="Kota saat ini" name="kota">
  </div>
  <div class="form-group">
    <label for="inputAddress">Kecamatan</label>
    <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Alamat</label>
    <input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamatlengkap">
  </div>
  <div class="form-group">
    <label>Foto Profil</label>
    <input type="file" class="form-control" name="foto_sopir" required>
  </div>
  <div class="form-group">
    <label>Foto SIM yang dimiliki</label>
    <input type="file" class="form-control" name="foto_sim_sopir" required>
  </div>
  <div class="form-group">
    <label >Nomor INduk Kependudukan</label>
    <input type="number" class="form-control" placeholder="Nomor Induk Kependudukan" name="nik">
  </div>
  <div class="form-group">
    <label >Nomor Hp</label>
    <input type="number" class="form-control" placeholder="Nomor Handphone Anda" name="nohp">
  </div>
  <div class="form-group">
    <label for="inputAddress">Penyakit (jika tidak ada kosongi)</label>
    <input type="text" class="form-control" placeholder="Penyakit yang dimiliki" name="penyakit">
  </div>
  <div class="form-group">
    <label for="inputAddress">Pengalaman</label>
    <input type="number" class="form-control" placeholder="Pengalaman menyetir berapa tahun" name="pengalaman">
  </div>
  
  <button type="submit" class="btn btn-primary" name="daftar">Sign in</button>
</form>
<?php 

if(isset($_POST["daftar"])){

  $namafotosopir = $_FILES["foto_sopir"]["name"];
  $lokasifotosopir = $_FILES["foto_sopir"]["tmp_name"];
  $namasopirfiks = date("YmdHis").$namafotosopir;
  move_uploaded_file($lokasifotosopir, "foto_sopir/$namasopirfiks");
}
if (isset($_POST["daftar"])) {
  $namafotosim = $_FILES["foto_sim_sopir"]["name"];
  $lokasifotosim = $_FILES["foto_sim_sopir"]["tmp_name"];
  $namasimfiks = date("YmdHis").$namafotosim;
  move_uploaded_file($lokasifotosim, "foto_sim/$namasimfiks");


  $username = $_POST["username"];
  $password = $_POST["password"];
  $namalengkap = $_POST["namalengkap"];
  $kota = $_POST["kota"];
  $kecamatan = $_POST["kecamatan"];
  $alamatlengkap = $_POST["alamatlengkap"];
  $nik = $_POST["nik"];
  $nohp = $_POST["nohp"];
  $penyakit = $_POST["penyakit"];
  $pengalaman = $_POST["pengalaman"];



  $koneksi->query("INSERT INTO sopir(username_sopir,password_sopir,nama_sopir,kota_sopir,kecamatan_sopir,alamat_sopir,foto_sopir,foto_sim_sopir,nik_sopir,nohp_sopir,penyakit_yang_dimiliki,pengalaman_berkendara) VALUES ('$username','$password','$namalengkap','$kota','$kecamatan','$alamatlengkap','$namasopirfiks','$namasimfiks','$nik','$nohp','$penyakit','$pengalaman')");

  echo "<script>alert('berkas telah dikirim');</script>";

  echo "<script>location='index-driver.php';</script>";


}



 ?>

</body>
</html>




<!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->