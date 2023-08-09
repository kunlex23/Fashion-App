<?php
// Check if the fullname parameter is present in the URL
if (isset($_GET['fullname'])) {
    // Get the fullname from the URL parameter
    $fullname = urldecode($_GET['fullname']);

    <?php 
    require 'config.php'; 
    // Update the status in the database
    $newStatus = "Done"; // The new status you want to set
    $sql = "UPDATE job SET StatusC = '$newStatus' WHERE fullname = '$fullname'";

    if ($conn->query($sql) === TRUE) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid parameters";
}
?>
