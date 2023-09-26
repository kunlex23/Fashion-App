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
                <a href="newClient.php" class="active">
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
                <h1>New Client</h1>
            <form class="five-column-form" action="/fashion-app/userData.php" method="POST">
                <div class="tray0">
    
                    <label for="fullname">Fullname:</label>
                    <input type="text" name="fullname" required><br>
                    
                    <label for="contact">Contact:</label>
                    <input type="text" name="contact" required><br>
            
                    <label for="address">Address:</label>
                    <input type="text" name="address" required><br>
            
                    <label for="email">Email:</label>
                    <input type="text" name="email" required><br>
            
                    <label for="gender">Gender:</label>
                    <select name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select><br>
                    
                </div>
                <div class="tray1">
                    <label for="measurement">Measurement by:</label>
                    <input type="text" name="measurement" required><br>
            
                    <label for="shoulder">Shoulder:</label>
                    <input type="text" name="shoulder" required><br>
            
                    <label for="shoulder2burst">Shoulder to Burst Point:</label>
                    <input type="text" name="shoulder2burst" required><br>
            
                    <label for="shoulder2under_burst">Shoulder to Under Burst:</label>
                    <input type="text" name="shoulder2under_burst" required><br>
            
                    <label for="burst">Burst:</label>
                    <input type="text" name="burst" required><br>
            
                    
                </div>
                <div class="tray2">
                    <label for="burst_span">Burst Span:</label>
                    <input type="text" name="burst_span" required><br>
            
                    <label for="round_uder_burst">Round under Burst:</label>
                    <input type="text" name="round_uder_burst" required><br>
    
                    <label for="blouse_lenght">Blouse Lenght:</label>
                    <input type="text" name="blouse_lenght" required><br>
    
                    <label for="blouse_hips">Blouse Hips:</label>
                    <input type="text" name="blouse_hips" required><br>
    
                    <label for="blouse_waist">Blouse Waist:</label>
                    <input type="text" name="blouse_waist" required><br>
                </div>

                <div class="tray3">
                    <label for="back_half_cut">Back Half Cut:</label>
                    <input type="text" name="back_half_cut" required><br>
    
                    <label for="neck_depth">Neck Depth:</label>
                    <input type="text" name="neck_depth" required><br>
    
                    <label for="round_sleeve">Round Sleeve:</label>
                    <input type="text" name="round_sleeve" required><br>
    
                    <label for="sleeve_lenght">Sleeve Lenght:</label>
                    <input type="text" name="sleeve_lenght" required><br>
    
                    <label for="shoulder2knee">Shoulder to Knee:</label>
                    <input type="text" name="shoulder2knee" required><br>
                </div>
                <div class="tray4">

                    <label for="skirt_waist">Skirt Waist:</label>
                    <input type="text" name="skirt_waist" required><br>
                        
                    <label for="skirt_length">Skirt Length:</label>
                    <input type="text" name="skirt_length" required><br>
    
                    <label for="hips">Hips:</label>
                    <input type="text" name="hips" required><br>
    
                    <label for="full_length">Full Length:</label>
                    <input type="text" name="full_length" required><br>
    
                    <label for="round_knee">Round Knee:</label>
                    <input type="text" name="round_knee" required><br>
    
                    
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

                
            </div>
        </div>
    </div>
    <script src="script/scrip.js"></script>
</body>

</html>