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
                <h1>Current Work Records</h1>
                <?php
                require 'config.php'; 
                // Get the status from the URL parameter
                $status = "1";
                
                // Prepare and execute a SQL query to fetch records from the jobs table
                $sql = "SELECT * FROM jobs WHERE status LIKE '%$status%'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                
                    echo "<table border='1'>
                    <tr>
                        <th>fullname</th>
                        <th>Style</th>
                        <th>M. Tailor</th>
                        <th>Sewing</th>
                        <th>Entry Date</th>
                        <th>Due Date</th>
                        <th>status</th>
                        <th>Contact</th>
                                            
                        <!-- Add more columns as needed -->
                    </tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row['fullname']."</td>
                            <td>".$row['style']."</td>
                            <td>".$row['measurement']."</td>
                            <td>".$row['sewing']."</td>
                            <td>".$row['date']."</td>
                            <td>".$row['delivery_date']."</td>
                            <td>".$row['StatusC']."</td>
                            <td>".$row['contact']."</td>
                            <!-- Add more columns as needed -->
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

                <label for="fullname">Enter Client's Name and Search:</label>
                <input type="text" name="fullname" required><br>
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
    <script src="script/scrip.js"></script>
    
    <!-- ==========work-done============ -->
    <script>
        var tbody = document.getElementById('table-body');
        var rows = tbody.querySelectorAll('tr');
    
        rows.forEach(function(row) {
            var fullnameLink = row.querySelector('td:first-child a');
            
            fullnameLink.addEventListener('click', function(event) {
                event.preventDefault();
    
                var fullname = fullnameLink.textContent;
    
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'update_status.php?fullname=' + encodeURIComponent(fullname), true);
    
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            var statusCell = row.querySelector('td:nth-child(7)');
                            statusCell.textContent = 'Updated Status';
                        } else {
                            console.error('Error updating status:', xhr.statusText);
                        }
                    }
                };
    
                xhr.send();
            });
        });
    </script>
        
</body>

</html>
