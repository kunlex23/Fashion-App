<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientID = $_POST['clientID'];
    $name = $_POST['fullname'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $measurement = $_POST['measurement'];
    $shoulder = $_POST['shoulder'];
    $shoulder2burst = $_POST['shoulder2burst'];
    $shoulder2under_burst = $_POST['shoulder2under_burst'];
    $burst = $_POST['burst'];
    $burst_span = $_POST['burst_span'];
    $round_uder_burst = $_POST['round_uder_burst'];
    $blouse_length = $_POST['blouse_length'];
    $blouse_hips = $_POST['blouse_hips'];
    $arm_hole = $_POST['arm_hole'];
    $blouse_waist = $_POST['blouse_waist'];
    $back_half_cut = $_POST['back_half_cut'];
    $neck_depth = $_POST['neck_depth'];
    $round_sleeve = $_POST['round_sleeve'];
    $sleeve_length = $_POST['sleeve_length'];
    $shoulder2knee = $_POST['shoulder2knee'];
    $skirt_waist = $_POST['skirt_waist'];
    $skirt_length = $_POST['skirt_length'];
    $hips = $_POST['hips'];
    $full_length = $_POST['full_length'];
    $trouser_length = $_POST['trouser_length'];

    // Perform the update query to update client data
    $clientSql = "UPDATE client_info SET
                fullname = '$name',
                contact = '$contact',
                address = '$address',
                email = '$email',
                gender = '$gender',
                measurement = '$measurement',
                shoulder = '$shoulder',
                shoulder2burst = '$shoulder2burst',
                shoulder2under_burst = '$shoulder2under_burst',
                burst = '$burst',
                burst_span = '$burst_span',
                round_uder_burst = '$round_uder_burst',
                blouse_lenght = '$blouse_length',
                blouse_hips = '$blouse_hips',
                arm_hole = '$arm_hole',
                blouse_waist = '$blouse_waist',
                back_half_cut = '$back_half_cut',
                neck_depth = '$neck_depth',
                round_sleeve = '$round_sleeve',
                sleeve_lenght = '$sleeve_length',
                shoulder2knee = '$shoulder2knee',
                skirt_waist = '$skirt_waist',
                skirt_length = '$skirt_length',
                hips = '$hips',
                full_length = '$full_length',
                trouser_length = '$trouser_length'
            WHERE clientID = '$clientID'";

    $workSql = "UPDATE work SET
                fullname = '$name'
            WHERE clientID = '$clientID'";

    // Start a database transaction
    $conn->begin_transaction();

    // Execute both SQL queries and check for errors
    if ($conn->query($clientSql) === TRUE && $conn->query($workSql) === TRUE) {
        // If both queries are successful, commit the transaction
        $conn->commit();
        echo "Client data updated successfully.";
    } else {
        // If any query fails, roll back the transaction and display an error message
        $conn->rollback();
        echo "Error updating client data: " . $conn->error;
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
