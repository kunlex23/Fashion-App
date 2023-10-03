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
                <h1>Clients Records</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <!-- <th>Date</th> -->
                        </tr>
                    </thead>
                    <?php 
                    require 'config.php'; 
                	$query = mysqli_query($conn, "SELECT fullname, contact, address, email, gender,date FROM client_info ORDER BY fullname ASC"); 
                	while($row = mysqli_fetch_array($query)){
                
                		$fullname = $row['fullname'];
                		$contact = $row['contact'];
                        $address = $row['address'];
                        $email = $row['email'];
                        $gender = $row['gender'];
                        $date = $row['date'];
                        ?>
                            <tbody>
                                <tr>
                                    <td><a href="search-jobs.php?fullname=<?php echo urlencode($fullname); ?>"><?php echo $fullname; ?></a></td>
                                    <td><?php echo $contact; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $gender; ?></td>
                                    <!-- <td><?php echo $date; ?></td> -->
                            </tbody>
                    <?php 	} ?>
                </table>

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
        </div>
    </div>
    <script src="script/scrip.js"></script>
</body>

</html>
