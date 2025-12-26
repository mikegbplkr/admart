<?php
include './../db/db.php';
include './auth_check.php';

redirectIfLoggedIn();
$token = $_GET['token'] ?? '';

$stmt = $db->prepare("SELECT * FROM users WHERE reset_token=? AND reset_expires > NOW()");
$stmt->execute([$token]);
$user = $stmt->fetch();

if (!$user) {
    die("Invalid or expired token.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $db->prepare("UPDATE users SET password=?, reset_token=NULL, reset_expires=NULL WHERE id=?");
    $stmt->execute([$password, $user['id']]);

    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<form method="POST" class="bg-white p-6 rounded shadow w-96">
    <h2 class="text-xl font-bold mb-4">Reset Password</h2>
    <input type="password" name="password" required class="w-full border p-2 mb-3" placeholder="New Password">
    <button class="bg-blue-600 text-white w-full py-2 rounded">Reset</button>
</form>
</body>
</html>
