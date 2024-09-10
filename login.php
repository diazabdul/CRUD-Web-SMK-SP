<?php
require 'init.php';
session_start();

if (isset($_POST['login'])) {
    $result = $user->getdataSingle($_POST['username']);
    
    if ($result['password'] === $_POST['password'] && $result['username'] === $_POST['username']) {
        header("Location: databuku.php");
        $_SESSION['login'] = true;
        exit();
    } else {
        echo "<script>alert('Username atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
            <form action="" method="post">
                <input type="text" name="username" placeholder="username" class="input-field">
                <input type="password" name="password" placeholder="Password" class="input-field">
                <button type="submit" name="login" class="login-btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>