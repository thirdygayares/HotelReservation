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
    $stmt = $pdo->query("SELECT * FROM roomtype");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a new record
    $title = $_POST['title'];
    $imageSrc = $_POST['imageSrc'];
    $typeBed = $_POST['typeBed'];
    $price = $_POST['price'];

    $stmt = $pdo->prepare("INSERT INTO roomtype (title, imageSrc, typeBed, price) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $imageSrc, $typeBed, $price]);

    echo "Record created successfully";
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Update an existing record
    parse_str(file_get_contents("php://input"), $putData);
    $id = $putData['id'];
    $title = $putData['title'];
    $imageSrc = $putData['imageSrc'];
    $typeBed = $putData['typeBed'];
    $price = $putData['price'];

    $stmt = $pdo->prepare("UPDATE roomtype SET title = ?, imageSrc = ?, typeBed = ?, price = ? WHERE id = ?");
    $stmt->execute([$title, $imageSrc, $typeBed, $price, $id]);

    echo "Record updated successfully";
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Delete a record
    parse_str(file_get_contents("php://input"), $deleteData);
    $id = $deleteData['id'];

    $stmt = $pdo->prepare("DELETE FROM roomtype WHERE id = ?");
    $stmt->execute([$id]);

    echo "Record deleted successfully";
}
?>
