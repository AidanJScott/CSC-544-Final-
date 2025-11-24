<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSC 544</title>
</head>
<body>
    <h1>SQL Injection and XSS</h1>
    <?php
    require '../database/db_connect.php'; // Include the connection file

    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->execute(['John Doe', 'john.doe@example.com']);


    // Example: Select all users
    $stmt = $pdo->query("SELECT id, name, email FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the data as JSON
    header('Content-Type: application/json');
    echo "<p>" . json_encode($users) . "</p>";
    ?>
</body>
</html>