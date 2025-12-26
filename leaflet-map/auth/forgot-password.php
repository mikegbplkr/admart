<?php
include './../db/db.php';
include './auth_check.php';
include './../config/mail_config.php';

redirectIfLoggedIn();


$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $token = bin2hex(random_bytes(32));
    $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

    $stmt = $db->prepare("UPDATE users SET reset_token=?, reset_expires=? WHERE email=?");
    $stmt->execute([$token, $expires, $email]);

    if ($stmt->rowCount()) {
        $resetLink = "http://localhost/reset-password.php?token=$token";

        if (sendResetEmail($email, $resetLink)) {
            $msg = "Password reset link sent to your email.";
        } else {
            $msg = "Email sending failed.";
        }
    } else {
        $msg = "Email not found.";
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
    <h2 class="text-xl font-bold mb-4">Forgot Password</h2>
    <?php if ($msg): ?>
        <p class="text-green-600 mb-3"><?= $msg ?></p>
    <?php endif; ?>
    <input type="email" name="email" required class="w-full border p-2 mb-3" placeholder="Your Email">
    <button class="bg-blue-600 text-white w-full py-2 rounded">Send Reset Link</button>
</form>
</body>
</html>
