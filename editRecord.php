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
                <a href="client_records.php">
                    <span class="material-icons-sharp">local_library</span>
                    <h3>Client Records</h3>
                </a>
                <a href="newClient.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>New Client</h3>
                </a>
                <a href="workRecord.php" class="active">
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
    <!-- <h1>Edit Work Record</h1> -->

    <?php
// Include your database connection configuration (config.php)
require 'config.php';

// Check if a workID parameter is provided in the URL
if (isset($_GET['id'])) {
    $workID = $_GET['id'];

    // Prepare and execute a SQL query to retrieve the record by its workID
    $sql = "SELECT * FROM work WHERE workID = ?";
    $stmt = $conn->prepare($sql);

    // You need to specify the data type of the parameter (i for integer in this case)
    $stmt->bind_param("i", $workID);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    
        echo '<h2>Edit ' . htmlspecialchars($row["fullname"]) . ' Word</h2><br>'; // Display the fullname as text// Display a form for editing the record
        echo '<form action="updateRecord.php" method="POST">';
        echo 'Style: <input type="text" name="style" value="' . $row["Style"] . '"><br>';
        echo 'Sewing: <input type="text" name="Sewing" value="' . $row["Sewing"] . '"><br>';
        echo 'Delivery Date: <input type="date" name="delivery_date" value="' . $row["Due_Date"] . '"><br>';
        echo 'Note: <input type="text" name="note" value="' . $row["notes"] . '"><br>'; // Correct the field name to "note"
        echo '<input type="hidden" name="workID" value="' . $row["workID"] . '">';
        echo '<input type="submit" value="Save Changes">';
        echo '</form>';
    } else {
        echo "Record not found.";
    }
    

    // Close the prepared statement
    $stmt->close();
} else {
    echo "No workID provided in the URL.";
}

// Close the database connection
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

                <a href="newWorkentry.php">
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>New Work</h3>
                        </div>
                    </div>
                </a>
                
             </div><div class="sales-analytics">

                <a href="newClient.php">
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>New Client</h3>
                        </div>
                    </div>
                </a>
                
            </div>
            <form action="/fashion-app/search.php" method="GET">

            <label for="fullname">Full Name:</label>
                            <select name="fullname" required>
                                <option value="">Select a client</option>
                                <?php
                        require 'config.php';
                        $sql = "SELECT fullname, contact FROM client_info";
                        $result = $conn->query($sql);
                    
                        // Generate options for the combo box
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . $row["fullname"] . '">' . $row["fullname"] . ' - ' . $row["contact"] . '</option>';
                            }
                        }
                    
                        ?>
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
    <script src="script/scrip.js"></script>
</body>

</html>
