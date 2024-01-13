<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "restaurant");

    if (mysqli_connect_errno()){
        echo "Koneksi Gagal Ke database: ". mysqli_connect_error();
    }
?>