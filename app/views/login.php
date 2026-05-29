<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login User - ExploreNesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login-page">

<div class="login-container">
    <h2>LOGIN</h2><br>
    <p>Masuk untuk mengakses profil pengguna <br> ExploreNesia.</p>

    <form method="POST" action="index.php?page=login">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Masuk</button>
    </form>

    <a href="index.php" class="back-link">Kembali ke Beranda</a>
</div>

</body>
</html>