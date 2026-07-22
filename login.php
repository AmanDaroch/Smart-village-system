<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fixed Login Credentials
    if ($username === "admin" && $password === "pavneet") {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Smart Village</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #2dbd8a, #c0f0d1); height:100vh; display:flex; justify-content:center; align-items:center;">

<div class="card shadow p-4" style="width: 400px; border-radius:15px;">

    <h3 class="text-center mb-3">Smart Village Login</h3>

    <?php if ($error != ""): ?>
        <div class="alert alert-danger text-center">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Login</button>

        <div class="text-center mt-3">
            <a href="index.php" class="text-decoration-none">⬅ Back to Home</a>
        </div>

    </form>

</div>

</body>
</html>