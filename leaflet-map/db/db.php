<?php  
// CREATE TABLE users (
//   id INT AUTO_INCREMENT PRIMARY KEY,
//   email VARCHAR(255) UNIQUE NOT NULL,
//   password VARCHAR(255) NOT NULL,
//   reset_token VARCHAR(255),
//   reset_expires DATETIME,
//   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// ); 
session_start();
 
$host = "localhost";
$dbname = "auth_db";
$user = "root";
$pass = "";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
} 