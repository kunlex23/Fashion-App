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
    <link rel="stylesheet" href="css/styl.css">
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
                <a href="newClient.php" >
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
                <h1>Edit Client Data</h1>
                <?php
    require 'config.php';

    if (isset($_GET['clientID'])) {
        $clientID = $_GET['clientID'];

        // Fetch the client data by clientID
        $sql = "SELECT * FROM client_info WHERE clientID = '$clientID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Display a form with input fields to edit the data
            echo '<form method="post" action="updateClient.php">
                    <input type="hidden" name="clientID" value="' . $row['clientID'] . '">
                    <div class="tray0">
    
                    Name: <input type="text" name="fullname" value="' . $row['fullname'] . '"><br>
                    Contact: <input type="text" name="contact" value="' . $row['contact'] . '"><br>
                    Address: <input type="text" name="address" value="' . $row['address'] . '"><br>
                    Email: <input type="text" name="email" value="' . $row['email'] . '"><br>
                    Gender:<select name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select><br>
                    
                    </div>
                    <div class="tray1">
                        Measurement by: <input type="text" name="measurement" value="' . $row['measurement'] . '"><br>
                        Shoulder: <input type="text" name="shoulder" value="' . $row['shoulder'] . '"><br>
                        Shoulder to Burst Point: <input type="text" name="shoulder2burst" value="' . $row['shoulder2burst'] . '"><br>
                        Shoulder to Under Burst: <input type="text" name="shoulder2under_burst" value="' . $row['shoulder2under_burst'] . '"><br>
                        Burst: <input type="text" name="burst" value="' . $row['burst'] . '"><br>
                    </div>
                    <div class="tray2">
                        Burst Span: <input type="text" name="burst_span" value="' . $row['burst_span'] . '"><br>
                        Round under Burst: <input type="text" name="round_uder_burst" value="' . $row['round_uder_burst'] . '"><br>
                        Blouse Lenght: <input type="text" name="blouse_lenght" value="' . $row['blouse_lenght'] . '"><br>
                        Blouse Hips: <input type="text" name="blouse_hips" value="' . $row['blouse_hips'] . '"><br>
                        Arm Hole: <input type="text" name="arm_hole" value="' . $row['arm_hole'] . '"><br>
                    
                    </div>

                    <div class="tray3">
                        Blouse Waist: <input type="text" name="blouse_waist" value="' . $row['blouse_waist'] . '"><br>
                        Back Half Cut: <input type="text" name="back_half_cut" value="' . $row['back_half_cut'] . '"><br>
                        Neck Depth: <input type="text" name="neck_depth" value="' . $row['neck_depth'] . '"><br>
                        Round Sleeve: <input type="text" name="round_sleeve" value="' . $row['round_sleeve'] . '"><br>
                        Sleeve Lenght: <input type="text" name="sleeve_lenght" value="' . $row['sleeve_lenght'] . '"><br>
              
                    </div>
                    <div class="tray4">
                        Shoulder to Knee: <input type="text" name="shoulder2knee" value="' . $row['shoulder2knee'] . '"><br>
                        Skirt Waist: <input type="text" name="skirt_waist" value="' . $row['skirt_waist'] . '"><br>
                        Skirt Length: <input type="text" name="skirt_length" value="' . $row['skirt_length'] . '"><br>
                        Hips: <input type="text" name="hips" value="' . $row['hips'] . '"><br>
                        Full Length: <input type="text" name="full_length" value="' . $row['full_length'] . '"><br>
                        Trouser Length: <input type="text" name="trouser_length" value="' . $row['trouser_length'] . '"><br>
            
                    </div>';
            
                // Add more input fields for other data as needed
            echo '<input type="submit" value="Save Changes">';
            echo '</form>';
        } else {
            echo "Client not found.";
        }
    } else {
        echo "Invalid client ID.";
    }

    $conn->close();
    ?>
           </div>
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
            </div> <!-- -----------END OF RECENT UPDATE--------------- -->
            <div class="sales-analytics">

                
            </div>
        </div>
    </div>
    <script src="script/scrip.js"></script>
</body>

</html>