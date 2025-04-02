<?php
include 'db_connect.php'; // Connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $event = $_POST["event"];

    // Insert data into database
    $sql = "INSERT INTO registrations (name, email, phone, event) VALUES ('$name', '$email', '$phone', '$event')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location.href='register.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='register.php';</script>";
    }

    $conn->close();
}
?>
