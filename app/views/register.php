<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register User</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section class="login-section">
    <div class="login-box">
        <h2>REGISTER</h2>

        <form method="POST">
            <input type="text"
                   name="username"
                   placeholder="Username"
                   required>

            <input type="password"
                   name="password"
                   placeholder="Password"
                   required>

            <button type="submit" name="register">
                Daftar
            </button>
        </form>
        <br><br>
        <a href="index.php?page=login">
            Sudah punya akun? Login
        </a>
    </div>
</section>

</body>
</html>