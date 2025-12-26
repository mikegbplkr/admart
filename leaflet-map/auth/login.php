<?php
include './../db/db.php'; 
include 'auth_check.php';


redirectIfLoggedIn(); // 🚀 already logged in → dashboard
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$_POST['email']]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<form method="POST" class="bg-white p-6 rounded shadow w-96">
    <h2 class="text-xl font-bold mb-4">Login</h2>
    <?php if ($error): ?>
        <p class="text-red-500 mb-3"><?= $error ?></p>
    <?php endif; ?>
    <input type="email" name="email" required class="w-full border p-2 mb-3" placeholder="Email">
    <input type="password" name="password" required class="w-full border p-2 mb-3" placeholder="Password">
    <button class="bg-blue-600 text-white w-full py-2 rounded">Login</button>
    <div class="mt-3 text-sm flex justify-between">
        <a href="register.php" class="text-blue-600">Register</a>
        <a href="forgot-password.php" class="text-blue-600">Forgot Password?</a>
    </div>
</form>
</body>
</html>
