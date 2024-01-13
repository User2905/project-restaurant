<?php 
    session_start();
    include 'koneksi.php';

    $username = $_POST['nama_pegawai'];
    $password = md5($_POST['password_pegawai']);

    $data = mysqli_query($koneksi, "SELECT * FROM pegawai where nama_pegawai='$username' and password_pegawai = '$password'");
	$cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['nama_pegawai'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/dasboard.php");
    } else {
        header("location:index.php?pesan=gagal");
    }   
?>
