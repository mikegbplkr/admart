<?php
include './db/db.php'; 
include 'auth_check.php';

requireLogin(); //   blocks access if not logged in
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <a href="logout.php" class="text-red-600">Logout</a>
</body>
</html>
