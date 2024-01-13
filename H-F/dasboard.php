<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="container-fluid">
        <div class="alert alert-info text-center">
            <h4 style="margin-bottom: 0px;"><b> hallo <?php echo $_SESSION['nama_pegawai']; ?> Selamat datang!</b> di restaurant savormie.</h4>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <h4>Dashboard</h4>
            </div>
            <?php include 'Header.php'; ?>
            <div class="panel-body">
                restaurant savormie <?php echo $_SESSION['nama_pegawai']; ?>
            </div>
        </div>
        <li>

    </div>
</body>

</html>