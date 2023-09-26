<?php

require 'config.php'; 
// Get the data from the form
$fullname = $_POST['fullname'];
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
$blouse_lenght = $_POST['blouse_lenght'];
$blouse_hips = $_POST['blouse_hips'];
$blouse_waist = $_POST['blouse_waist'];
$back_half_cut = $_POST['back_half_cut'];
$neck_depth = $_POST['neck_depth'];
$round_sleeve = $_POST['round_sleeve'];
$sleeve_lenght = $_POST['sleeve_lenght'];
$shoulder2knee = $_POST['shoulder2knee'];
$skirt_waist = $_POST['skirt_waist'];
$skirt_length = $_POST['skirt_length'];
$hips = $_POST['hips'];
$full_length = $_POST['full_length'];
$round_knee = $_POST['round_knee'];

// Prepare and execute the SQL statement to insert the data
$sql = "INSERT INTO client_info (fullname, contact, address, email, gender, measurement, shoulder,shoulder2burst,shoulder2under_burst,burst,burst_span,round_uder_burst,blouse_lenght,blouse_hips,blouse_waist,back_half_cut,neck_depth,round_sleeve,sleeve_lenght,shoulder2knee,skirt_waist,skirt_length,hips,full_length,round_knee)
        VALUES ('$fullname', '$contact','$address', '$email', '$gender', '$measurement','$shoulder','$shoulder2burst','$shoulder2under_burst','$burst','$burst_span','$round_uder_burst','$blouse_lenght','$blouse_hips','$blouse_waist','$back_half_cut','$neck_depth','$round_sleeve','$sleeve_lenght','$shoulder2knee','$skirt_waist','$skirt_length','$hips','$full_length','$round_knee')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
    sleep(2);
    // Redirect back to the previous page
    header("Location: /fashion-app/index.php?status=success");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
