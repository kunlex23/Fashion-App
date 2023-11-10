<?php

require 'config.php'; 
// Get the data from the form
$fullname = $_POST['fullname'];
$style = $_POST['style'];
$sewing = $_POST['sewing'];
$Due_Date = $_POST['delivery_date'];
$StatusC = 'In Progress';
$status = '1';
$notes = $_POST['notes'];
$clientID = $_POST['clientID'];

// Prepare and execute the SQL statement to insert the data
$sql = "INSERT INTO work (fullname, style, sewing, Due_Date, status, StatusC, notes, clientID)
        VALUES ('$fullname', '$style', '$sewing', '$Due_Date', '$status','$StatusC','$notes','$clientID')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
    sleep(2);
    // Redirect back to the previous page
    header("Location: /fashion-app/newWorkentry.php?status=success");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
