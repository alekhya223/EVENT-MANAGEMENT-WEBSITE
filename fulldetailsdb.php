<?php
// Connect to the database using mysqli
$mysqli = new mysqli('localhost', 'root', 'root', 'event_manage');

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data (consider using proper validation/sanitization)
    $planningForOrganization = $_POST['planningForOrganization'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $organization = $_POST['organization'];
    $commissionRate = $_POST['commissionRate'];
    $clientOrganization = $_POST['clientOrganization'];
    $industry = $_POST['industry'];
    $responses = $_POST['responses'];
    $contactPreference = $_POST['contactPreference'];
    $sharing = isset($_POST['sharing']) ? 'Yes' : 'No';

    // Insert data into the database using prepared statements
    $query = 'INSERT INTO manage9 (planningForOrganization, email, city, country, state, organization, commissionRate, clientOrganization, industry, responses, contactPreference, sharing) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = $mysqli->prepare($query);

    // Check if the prepare statement failed
    if (!$stmt) {
        echo "<script>alert('Failed to prepare statement'); window.location.href = 'your_form_page.html';</script>";
        exit();
    }

    // Bind parameters
    $stmt->bind_param("ssssssdsssss", $planningForOrganization, $email, $city, $country, $state, $organization, $commissionRate, $clientOrganization, $industry, $responses, $contactPreference, $sharing);

    // Execute the statement and handle errors
    if ($stmt->execute()) {
        echo "<script>alert('Data inserted successfully'); window.location.href = 'payment.html';</script>";
    } else {
        echo "<script>alert('Failed to insert data'); window.location.href = 'fulldetails.php';</script>";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$mysqli->close();
?>
