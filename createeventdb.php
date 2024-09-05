<?php
// Connect to the database using mysqli
$mysqli = new mysqli('localhost', 'root', 'root', 'event_manage');

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Your code here for handling POST requests
    // Get form data (consider using proper validation/sanitization)
$name = $_POST['name'];
if (isset($_POST['type'])) {
    $eventType = $_POST['type'];
} else {
    // Handle the case where 'eventType' is not set in the $_POST array
}

if (isset($_POST['phone'])) {
    $phoneNumber = $_POST['phone'];
} else {
    // Handle the case where 'phoneNumber' is not set in the $_POST array
}
$eventDate = $_POST['date'];
$eventTime = $_POST['time'];
$meetingSpace = $_POST['meetingSpace'];
$attendeesPerDay = $_POST['attendeesPerDay'];
$eventDescription = $_POST['description'];

// Modify the table structure if 'meetingSpace' column doesn't exist
//$alterQuery = "ALTER TABLE manage1 ADD COLUMN IF NOT EXISTS meetingSpace VARCHAR(255)";
//$mysqli->query($alterQuery)

// Insert data into the database using prepared statements
$query = 'INSERT INTO manage8 (name, eventType, phoneNumber, eventDate, eventTime, meetingSpace, attendeesPerDay, eventDescription) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
$stmt = $mysqli->prepare($query);

// Check if the prepare statement failed
if (!$stmt) {
    echo "<script>alert('Failed to prepare statement'); window.location.href = 'createevents.php';</script>";
    exit();
}

// Bind parameters
$stmt->bind_param("ssssssis", $name, $eventType, $phoneNumber, $eventDate, $eventTime, $meetingSpace, $attendeesPerDay, $eventDescription);

// Execute the statement and handle errors
if ($stmt->execute()) {
    echo "<script>alert('EVENT CREATED SUCCESSFULLY'); window.location.href = 'fulldetails.php';</script>";
} else {
    echo "<script>alert('EVENT NOT CREATED'); window.location.href = 'createevents.php';</script>";
}
}



// Close the prepared statement and database connection
$stmt->close();
$mysqli->close();
?>
