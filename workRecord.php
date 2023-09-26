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
        table,
        th,
        td {
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        <main>
            <div class="recent-sales">
                <h1>Work Records</h1>
                <label for="statusFilter">Filter by Status:</label>
                <select id="statusFilter">
                    <option value="all">All Records</option>
                    <!-- <option value="done">Done</option> -->
                    <option value="progress">In Progress</option>
                </select>
                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Style</th>
                            <th>Sewing</th>
                            <th>Entry Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php 
                        require 'config.php'; 
                        $query = mysqli_query($conn, "SELECT fullname, Style, Sewing, Entry_Date, Due_Date, StatusC FROM work ORDER BY workID DESC");
                        while($row = mysqli_fetch_array($query)){
                            $fullname = $row['fullname'];
                            $Style = $row['Style'];
                            $Sewing = $row['Sewing'];
                            $Entry_Date = $row['Entry_Date'];
                            $Due_Date = $row['Due_Date'];
                            $StatusC = $row['StatusC'];
                        ?>
                        <tr>
                            <td> <?php echo $fullname; ?></td>
                            <td><?php echo $Style; ?></td>
                            <td>
                                <?php echo $Sewing; ?>
                            </td>
                            <td>
                                <?php echo $Entry_Date; ?>
                            </td>
                            <td>
                                <?php echo $Due_Date; ?>
                            </td>
                            <td>
                                <?php echo $StatusC; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
            </div>
            <div class="sales-analytics">
                <a href="newWorkentry.php">
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>New Work</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sales-analytics">
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

    <!-- ==========work-done============ -->
    <script>
        var tbody = document.getElementById('table-body');
        var rows = tbody.querySelectorAll('tr');

        rows.forEach(function (row) {
            var fullnameLink = row.querySelector('td:first-child a');

            fullnameLink.addEventListener('click', function (event) {
                event.preventDefault();

                var fullname = fullnameLink.textContent;

                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'update_status.php?fullname=' + encodeURIComponent(fullname), true);

                xhr.onreadystatechange = function () {
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var statusFilter = document.getElementById('statusFilter');
        var tableRows = document.querySelectorAll('tbody tr');

        statusFilter.addEventListener('change', function () {
            var selectedStatus = statusFilter.value.toLowerCase();

            tableRows.forEach(function (row) {
                var rowStatus = row.querySelector('td:last-child').textContent.toLowerCase();

                if (selectedStatus === 'all' || (selectedStatus === 'done' && rowStatus === 'done') || (selectedStatus === 'progress' && rowStatus.includes('progress'))) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>



</body>

</html>
