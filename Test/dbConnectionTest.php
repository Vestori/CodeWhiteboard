<?php
 require_once 'login.php';
 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error) die($conn->connect_error);
 
 $query = "SELECT * FROM users";
 $result = $conn->query($query);
 if (!$result) die($conn->error);
 
 $rows = $result->num_rows;

 for ($j = 0 ; $j < $rows ; ++$j)
 {
     $result->data_seek($j);
     $row = $result->fetch_array(MYSQLI_ASSOC);
     echo 'First Name: ' . $row['fName'] . '<br>';
     echo 'Last Name: ' . $row['lName'] . '<br><br>';
     
 }




//  for ($j = 0 ; $j < $rows ; ++$j)
//  {
//      $result->data_seek($j);
//      echo 'fName: ' . $result->fetch_assoc()['fName'] . '<br>';
//      $result->data_seek($j);
//      echo 'lName: ' . $result->fetch_assoc()['lName'] . '<br>';
     
//  }
 
 $result->close();
 $conn->close();

 
?>