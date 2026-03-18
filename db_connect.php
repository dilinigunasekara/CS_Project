<?php
// ============================================================
//  FILE: db_connect.php
//  Edit the 4 lines below to match your MySQL setup.
//  For XAMPP the defaults below usually work as-is.
// ============================================================

$host     = 'localhost';
$dbname   = 'testweb_db';
$username = 'root';
$password = '';          // XAMPP default is empty; change if yours differs

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die('<p style="color:red;font-family:sans-serif;padding:2rem;">
         ❌ Database connection failed: ' . $e->getMessage() . '<br>
         Make sure XAMPP MySQL is running and you have run database_setup.sql.
         </p>');
}
