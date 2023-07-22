<?php

require 'config.php'; 
// Get the data from the form
$customerID = $_POST['customerID'];
$Style = $_POST['Style'];
$Bust = $_POST['Bust'];
$Waist = $_POST['Waist'];
$Hips = $_POST['Hips'];
$Shoulder_width = $_POST['Shoulder_width'];
$Back_lenght = $_POST['Back_lenght'];
$Sleeve_lenght = $_POST['Sleeve_lenght'];
$Armhole = $_POST['Armhole'];
$Bicep = $_POST['Bicep'];
$Wrist = $_POST['Wrist'];
$Neck = $_POST['Neck'];
$Collar = $_POST['Collar'];
$Inseam = $_POST['Inseam'];
$Outseam = $_POST['Outseam'];
$Thigh = $_POST['Thigh'];
$Knee = $_POST['Knee'];
$Calf = $_POST['Calf'];
$Ankle = $_POST['Ankle'];
$Rise = $_POST['Rise'];
$Hemline = $_POST['Hemline'];
$Torso_length = $_POST['Torso_length'];
$Status = $_POST['Status'];
$Delivery_date = $_POST['Delivery_date'];


// Prepare and execute the SQL statement to insert the data
$sql = "INSERT INTO jobs (customerID, Style, Bust, Waist, Hips, Shoulder_width, Back_lenght,Sleeve_lenght,Armhole,Bicep,Wrist,Neck,Collar,Inseam,Outseam,Thigh,Knee,Calf,Ankle,Rise,Hemline,Torso_length,Status,Delivery_date)
        VALUES ('$customerID', '$Style', '$Bust', '$Waist', '$Hips', '$Shoulder_width', '$Back_lenght','$Sleeve_lenght','$Armhole','$Bicep','$Wrist','$Neck','$Collar','$Inseam','$Outseam','$Thigh','$Knee','$Calf','$Ankle','$Rise','$Hemline','$Torso_length','$Status','$Delivery_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
