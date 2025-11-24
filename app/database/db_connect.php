<?php
$db_path = '../database/database.sqlite';

try {
    $pdo = new PDO('sqlite:' . $db_path);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // The database file will be created automatically if it doesn't exist
    

    // Create a table if it doesn't exist
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT NOT NULL,
                    email TEXT NOT NULL 
                )");


} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>