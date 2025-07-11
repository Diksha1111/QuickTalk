<?php
session_start();
require 'database/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

    try {
        $stmt->execute([$username, $email, $password]);
        header("Location: login.php");
        exit;
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">QuickTalk</header>
    <br>
    <div class="form-wrapper">
    <form method="post">
        <h2 style="text-align: center;">Register</h2>

        <?php if (!empty($error)): ?>
            <p style="color:red; text-align: center;"><?php echo $error; ?></p>
        <?php endif; ?>

        <input name="username" type="text" placeholder="Username" required>
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Register</button>
        <p style="text-align: center; margin-top: 10px;">
            Already have an account? <a href="login.php">Login</a>
        </p>
    </form>
    </div>
</body>
</html>
