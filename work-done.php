<?php
// Check if the fullname parameter is present in the URL
if (isset($_GET['fullname'])) {
    $fullname = $_GET['fullname'];
    
    // Require the database configuration
    require 'config.php'; 

    // Update the status in the database
    $newStatusC = "Done"; 
    $newStatus = "0";

    // Construct the SQL query
    $sql = "UPDATE jobs SET StatusC = '$newStatusC', Status = '$newStatus' WHERE fullname = '$fullname'";

    if ($conn->query($sql) === TRUE) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $conn->close();
    ?>
    <script>
        // Redirect back to the previous page
        window.history.back();
    </script>
    <?php
} else {
    echo "Fullname parameter not provided in the URL";
}
?>
