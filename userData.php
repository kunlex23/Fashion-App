<?php

require 'config.php'; 
// Get the data from the form
$fullname = $_POST['fullname'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Prepare and execute the SQL statement to insert the data
$sql = "INSERT INTO clients_data (fullname,contact, address, email, gender)
        VALUES ('$fullname','$contact','$address', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
    sleep(2);
    // Redirect back to the previous page
    header("Location: /fashion-app/client_records.html"); // Replace 'previous_page.php' with the actual URL
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
