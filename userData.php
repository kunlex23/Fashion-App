<?php

require 'config.php'; 
// Get the data from the form
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Prepare and execute the SQL statement to insert the data
$sql = "INSERT INTO clients_data (fullname, address, email, gender)
        VALUES ('$fullname', '$address', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
