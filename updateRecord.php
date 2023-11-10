<?php
// Include your database connection configuration (config.php)
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the necessary POST parameters are set
    $workID = $_POST['workID'];
    $style = $_POST['style'];
    $sewing = $_POST['Sewing'];
    $delivery_date = $_POST['delivery_date'];
    $note = $_POST['note'];

    // Start a database transaction
    $conn->begin_transaction();

    // Update the work table using prepared statements
    $sqlwork = "UPDATE work SET
        Style = ?,
        Sewing = ?,
        Due_Date = ?,
        notes = ?
        WHERE workID = ?";

    // Prepare and execute the SQL query
    $stmt = $conn->prepare($sqlwork);
    $stmt->bind_param("ssssi", $style, $sewing, $delivery_date, $note, $workID);

    if ($stmt->execute()) {
        // If the query is successful, commit the transaction
        $conn->commit();
        echo "Client data updated successfully.";
    } else {
        // If the query fails, roll back the transaction and display an error message
        $conn->rollback();
        echo "Error updating client data: " . $conn->error;
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
