<?php
// Connect to the database using mysqli
$mysqli = new mysqli('localhost', 'root', 'root', 'event_manage');

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get form data
$name = $_POST['marriage'];
$eventType = $_POST['Engagement'];
$phoneNumber = $_POST['functions'];
$eventDate = $_POST['birthday_party'];

// Insert data into the database
$query = 'INSERT INTO createevent1 (marriage,engagement,function,birthday_party) VALUES (?, ?, ?, ?)';
$stmt = $mysqli->prepare($query);

// Check if the prepare statement failed
if (!$stmt) {
    echo "<script>alert('Failed to prepare statement'); window.location.href = 'createevents.php';</script>";
    exit();
}

// Bind parameters
$stmt->bind_param("ssss", $marriage,$engagement,$function,$birthday_party);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>alert('EVENT CREATED SUCCESSFULLY'); window.location.href = 'food.php';</script>";
    exit();
} else {
    echo "<script>alert('EVENT NOT CREATED'); window.location.href = 'events.php';</script>";
}

// Close the prepared statement and database connection
$stmt->close();
$mysqli->close();
?>
