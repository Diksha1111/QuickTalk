<?php
session_start();
require 'database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: chat_room.php");
    } else {
        echo "<p style='color: red; text-align: center;'>Invalid Credentials</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">QuickTalk</header>
<br>
    <div class="form-wrapper">
    <form method="post">
        <h2 style="text-align: center;">Login</h2>
        <input name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    </div>
</body>
</html>
