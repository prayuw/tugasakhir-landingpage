<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil User - ExploreNesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">ExploreNesia</div>

    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="logout.php" class="login-btn">Logout</a></li>
    </ul>
</nav>

<section class="profile">
    <div class="profile-box">
        <h1>Selamat Datang!</h1>
        <h2><?= $_SESSION['name']; ?></h2>

        <p>
            Kamu berhasil login ke website ExploreNesia Travel.
            Di halaman ini, pengguna dapat melihat informasi akun dan
            mulai menjelajahi destinasi wisata yang tersedia.
        </p>

        <div class="profile-info">
            <p><b>Username:</b> <?= $_SESSION['username']; ?></p>
            <p><b>Status:</b> Login berhasil</p>
            <p><b>Website:</b> ExploreNesia Travel</p>
        </div>

        <a href="index.php" class="btn">Kembali ke Beranda</a>
    </div>
</section>

</body>
</html>