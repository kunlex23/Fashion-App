<?php

require 'config.php';

$sql = "SELECT COUNT(*) AS totalWork FROM jobs";
// where order_date > now() - interval 1 day;
if ($result = $conn->query($sql)) {
  while ($row = $result->fetch_assoc()) {
      $tJobs = $row['totalWork']; 
      
     echo'
         <h1>'.$tJobs.'</h1>
     ';
  }
  $result->free();
}
$conn->close();
?> 
