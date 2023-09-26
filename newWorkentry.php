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

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <!-- <img src="./images/logo.jpeg"> -->
                    <h2>ZIB<span class="compel">AH</span></h2>
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
                <a href="workRecord.php">
                    <span class="material-icons-sharp">local_library</span>
                    <h3>Work Records</h3>
                </a>
                <a href="newWorkentry.php" class="active">
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
                <h1>New Work</h1>
                <div class="entries">
                    <form class="three-column-form" action="/fashion-app/workData.php" method="POST">
                        <div class="tray0">

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
                            </select>
                            <label for="style">Style:</label>
                            <input type="text" name="style" required><br>
                            


                        </div>
                        <div class="tray1">
                            <label for="sewing">Sewing Tailor:</label>
                            <input type="text" name="sewing" required><br>

                            <label for="delivery_date">Delivery Date:</label>
                            <input type="date" name="delivery_date" required><br>


                        </div>
                        <div class="tray2">
                            <label for="notes">notes:</label>
                            <input type="text" name="notes"><br>


                        </div>
                        <div id="notification" class="notification hidden"> New record created successfully!</div>
                        <div class="job"><input type="submit" value="Submit"></div>
                    </form>
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

                <a href="workRecord.php">
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">record</span>
                            <h3>Work Records</h3>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');

            if (status === 'success') {
                const notification = document.getElementById("notification");
                notification.classList.add("show");

                // Hide the notification after a certain time (e.g., 5 seconds)
                setTimeout(function () {
                    notification.classList.remove("show");
                }, 5000);
            }
        });

    </script>
    <script src="script/scrip.js"></script>

</body>

</html>