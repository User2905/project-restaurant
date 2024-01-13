<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Restaurant</title>

</head>

<body style="background-color: #f0f0f0;">

	<?php
	session_start();
	if ($_SESSION['status'] != "login") {
		header("location:../index.php?pesan=belum_login");
	}
	?>
	<!--Navbar Start-->
	<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="dasboard.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="../Menu/pelanggan.php" class="nav-link px-2 link-dark">Pelanggan</a></li>
        <li><a href="../Menu/menu.php" class="nav-link px-2 link-dark">Menu</a></li>
        <li><a href="../Menu/transaksi.php" class="nav-link px-2 link-dark">Transaksi</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
		<li class="dropdown">
                        <a href="#" class="nav-link px-2 link-dark" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="harga.php" class="nav-link px-2 link-dark"><i class="glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>
                            <li><a href="ganti_password.php" class="nav-link px-2 link-dark"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
                        </ul>
                    </li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-danger me-2">Logout</button>
      </div>
    </header>
  </div>

	<div class="container-fluid">
		<div class="alert text-center">
			<h4 style="margin-bottom: 0px;"><b> Hallo <?php echo $_SESSION['nama_pegawai']; ?> Selamat Datang!</b> Di Restaurant Savormie.</h4>
		</div>
	</div>
</body>

</html>