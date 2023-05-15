<?php
// Database configuration
$dbHost = 'localhost'; // Replace with your database host
$dbName = 'hotelreservation'; // Replace with your database name
$dbUser = 'root'; // Replace with your database username
$dbPass = ''; // Replace with your database password

// Establish database connection
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// API endpoints
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get all records
    $stmt = $pdo->query("SELECT * FROM contact");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a new record
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $message]);

    echo "Record created successfully";
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Update an existing record
    parse_str(file_get_contents("php://input"), $putData);
    $id = $putData['id'];
    $name = $putData['name'];
    $email = $putData['email'];
    $phone = $putData['phone'];
    $message = $putData['message'];

    $stmt = $pdo->prepare("UPDATE contact SET name = ?, email = ?, phone = ?, message = ? WHERE id = ?");
    $stmt->execute([$name, $email, $phone, $message, $id]);

    echo "Record updated successfully";
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Delete a record
    parse_str(file_get_contents("php://input"), $deleteData);
    $id = $deleteData['id'];

    $stmt = $pdo->prepare("DELETE FROM contact WHERE id = ?");
    $stmt->execute([$id]);

    echo "Record deleted successfully";
}
?>
