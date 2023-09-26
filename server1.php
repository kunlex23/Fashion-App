<?php

require 'config.php';

$sql = "SELECT COUNT(*) AS totalWork FROM work";
// where order_date > now() - interval 1 day;
if ($result = $conn->query($sql)) {
  while ($row = $result->fetch_assoc()) {
      $twork = $row['totalWork']; 
      
     echo'
         <h1>'.$twork.'</h1>
     ';
  }
  $result->free();
}
$conn->close();
?> 
