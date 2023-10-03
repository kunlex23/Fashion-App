<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zibah</title>
    <!-- Material app -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
       table, th, td {
  /* border: 1px solid black; */
  /* border-collapse: collapse; */
    padding: 8px;
}

tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}
    </style>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                <img src="./images/logo.png">
                    <!-- <h2>ZIB<span class="compel">AH</span></h2> -->
                    <!-- <h2>Name</h2> -->
                </div>
                <div class="closeBTN" id="close-btn"><span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sideBar">
                <a href="index.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="client_records.php" class="active">
                    <span class="material-icons-sharp">local_library</span>
                    <h3>Client Records</h3>
                </a>
                <a href="newClient.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>New Client</h3>
                </a>
                <a href="workRecord.php">
                    <span class="material-icons-sharp">local_library</span>
                    <h3>Work Records</h3>
                </a>
                <a href="newWorkentry.php">
                    <span class="material-icons-sharp">checkroom</span>
                    <h3>New Work</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp"></span>
                    <h3></h3>
                </a>
            </div>
            </aside>
        <!------------ END OF ASIDE ------------>
        <main>

            <!-- ---------END OF EXAM-------- -->
            <div class="recent-sales">

            <h1><?php echo $_GET['fullname']; ?> Work Records</details></h1>

<?php
require 'config.php'; 
// Get the fullname from the URL parameter
$fullname = $_GET['fullname'];

// Check if a delete action is requested
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    // Perform the deletion query here
    $deleteSql = "DELETE FROM work WHERE workID = $deleteId";

    if ($conn->query($deleteSql) === TRUE) {
        echo "Record deleted successfully.";
        // You can add a redirect here if needed
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if (isset($_GET['status_id'])) {
    $status_id = $_GET['status_id'];

    // Perform the update query here
    $statusSql = "UPDATE work SET Status = '0', StatusC = 'Done' WHERE workID = $status_id";

    if ($conn->query($statusSql) === TRUE) {
        echo "Record updated successfully.";
        // You can add a redirect here if needed
    } else {
        echo "Error updating record: " . $conn->error;
    }
}



// Prepare and execute a SQL query to fetch records from the work table
$sql = "SELECT * FROM work WHERE fullname LIKE '%$fullname%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1'>
    <tr>
        <th>Style</th>
        <th>Sewing</th>
        <th>Entry Date</th>
        <th>Due Date</th>
        <th>Status</th>
        <th>Delete</th>
        <th>Action</th>
                            
        <!-- Add more columns as needed -->
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row['Style']."</td>
            <td>".$row['Sewing']."</td>
            <td>".$row['Entry_Date']."</td>
            <td>".$row['Due_Date']."</td>
            <td>".$row['StatusC']."</td>
            <td ><a href='?fullname=$fullname&delete_id=".$row['workID']."' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a></td>
            <td ><a href='?fullname=$fullname&status_id=".$row['workID']."' onclick='return confirm(\"By clicking Ok you confirm that this work is completed\")'>Done</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

$conn->close();
?>

                 </main>
                <!-- ----------END OF MAIN----------- -->
                <div class="right">
                <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                </div>            <!-- -----------END OF RECENT UPDATE--------------- -->
                <div class="sales-analytics">
                <a href="newworkentry.php">
                        <div class="item add-product"><div>
                        <span class="material-icons-sharp">add</span>
                        <h3>New Work</h3>
                        </div></div>
                    </a>

                <?php
require 'config.php'; 

// Get the fullname from the URL parameter
$fullname = $_GET['fullname'];

// Prepare and execute a SQL query to fetch records from the jobs table
$sql = "SELECT * FROM client_info WHERE fullname LIKE '%$fullname%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['fullname'] . "<br>";
        echo "Contact: " . $row['contact'] . "<br>";
        echo "Address: " . $row['address'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Gender: " . $row['gender'] . "<br>";
        echo "Measurement: " . $row['measurement'] . "<br>";
        echo "Shoulder: " . $row['shoulder'] . "<br>";
        echo "Shoulder to burst: " . $row['shoulder2burst'] . "<br>";
        echo "Shoulder to under burst: " . $row['shoulder2under_burst'] . "<br>";
        echo "Burst: " . $row['burst'] . "<br>";
        echo "Burst span: " . $row['burst_span'] . "<br>";
        echo "Round uder burst: " . $row['round_uder_burst'] . "<br>";
        echo "Blouse length: " . $row['blouse_length'] . "<br>";
        echo "Blouse hips: " . $row['blouse_hips'] . "<br>";
        echo "Blouse waist: " . $row['blouse_waist'] . "<br>";
        echo "Back half cut: " . $row['back_half_cut'] . "<br>";
        echo "Neck depth: " . $row['neck_depth'] . "<br>";
        echo "Round sleeve: " . $row['round_sleeve'] . "<br>";
        echo "Sleevelength: " . $row['sleeve_length'] . "<br>";
        echo "Shoulder to knee: " . $row['shoulder2knee'] . "<br>";
        echo "Skirt waist: " . $row['skirt_waist'] . "<br>";
        echo "Skirt length: " . $row['skirt_length'] . "<br>";
        echo "Hips: " . $row['hips'] . "<br>";
        echo "Full length: " . $row['full_length'] . "<br>";
        echo "Round knee: " . $row['round_knee'] . "<br>";
       
        echo "<br>"; // Add a line break between record pairs
    }
} else {
    echo "No results found.";
}

$conn->close();
?>


             </div>
            
        </div>
    </div>
    <script src="script/scrip.js"></script>
</body>

</html>
