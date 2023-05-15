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
    $stmt = $pdo->query("SELECT * FROM reservations");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a new record
        $roomType = $_POST['roomType'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contactNumber = $_POST['contactNumber'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        // Insert the data into the reservations table
        $stmt = $pdo->prepare("INSERT INTO reservations (ROOMTYPE, NAME, EMAIL, CONTACTNUMBER, DATE, TIME) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$roomType, $name, $email, $contactNumber, $date, $time]);
        // Check if the insertion was successful
        if ($stmt->rowCount() > 0) {
            echo "Reservation created successfully";
        } else {
            echo "Failed to create reservation";
        }
        
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Update an existing record
    parse_str(file_get_contents("php://input"), $putData);
    $id = $putData['id'];
    $roomType = $putData['roomType'];
    $name = $putData['name'];
    $email = $putData['email'];
    $contactNumber = $putData['contactNumber'];
    $date = $putData['date'];
    $time = $putData['time'];

    $stmt = $pdo->prepare("UPDATE reservations SET roomType = ?, name = ?, email = ?, contactNumber = ?, date = ?, time = ? WHERE id = ?");
    $stmt->execute([$roomType, $name, $email, $contactNumber, $date, $time, $id]);

    echo "Record updated successfully";
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Delete a record
    parse_str(file_get_contents("php://input"), $deleteData);
    $id = $deleteData['id'];

    $stmt = $pdo->prepare("DELETE FROM reservations WHERE id = ?");
    $stmt->execute([$id]);

    echo "Record deleted successfully";
}
?>
