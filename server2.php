<?php

                            require 'config.php';
                            
                            // $sql = "SELECT SUM(totalWIP) as totalWIP FROM sales ";
                            $sql = "SELECT SUM(Status) as totalWIP FROM work ";
                            
                            if ($result = $conn->query($sql)) {
                              while ($row = $result->fetch_assoc()) {
                                  $row_totalWIP = $row['totalWIP']; 
                                  
                                 echo'
                                     <h1>'.$row_totalWIP.'</h1>
                                 ';
                              }
                              $result->free();
                            }
                            $conn->close();
                            ?> 