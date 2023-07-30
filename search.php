<?php
require 'config.php';

// Check if the form has been submitted
if (isset($_GET['clientID'])) {
    // Get the clientID from the URL parameters
    $clientID = $_GET['clientID'];

    // Validate the clientID (you can add more validation if needed)
    if (!is_numeric($clientID)) {
        echo "Please enter a valid numeric Client ID.";
        exit; // Stop further processing
    }

    // Prepare and execute the SQL statement to search for jobs related to the given clientID
    $sql = "SELECT * FROM jobs WHERE customerID = $clientID";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo " Job ID: " . $row["jobID"] . "<br>";
            echo " Client ID: " . $row["customerID"] . "<br>";
            echo " Style: " . $row["Style"] . "<br>";
            echo " Status: " . $row["Status"] . "<br>";
            echo " Entry Date: " . $row["Entry_date"] . "<br>";
            echo " Delivery Date: " . $row["Delivery_date"] . "<br>";
            // Output other job-related information here as needed
            echo "<br>";
        }
    } else {
        echo "No jobs found for the given Client ID.";
    }

    // Close the database connection
    $conn->close();
}
?>
