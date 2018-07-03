 <?php // sqltest.php
 require_once 'login.php';
 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error) die($conn->connect_error);
 
 if (isset($_POST['delete']) && isset($_POST['lName']))
 {
     $lName = get_post($conn, 'lName');
     $query = "DELETE FROM users WHERE lName='$lName'";
     $result = $conn->query($query);
     if (!$result) echo "DELETE failed: $query<br>" .
     $conn->error . "<br><br>";
 }
 
 if (isset($_POST['fName']) &&
     isset($_POST['lName']))
     
 {
     $fName = get_post($conn, 'fName');
     $lName = get_post($conn, 'lName');
     
     $query = "INSERT INTO users VALUES" .
     "('$fName', '$lName')";
     $result = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
 }
 
 echo <<<_END
 <form action="sqltest.php" method="post"><pre>
    First Name <input type="text" name="fName">
    Last Name  <input type="text" name="lName">
                <input type="submit" value="ADD RECORD">
 </pre></form>
_END;

 $query = "SELECT * FROM users";
 
 
 $result = $conn->query($query);
 if (!$result) die ("Database access failed: " . $conn->error);
 
 $rows = $result->num_rows;
 for ($j = 0 ; $j < $rows ; ++$j)
 {
     $result->data_seek($j);
     $row = $result->fetch_array(MYSQLI_NUM);
 echo <<<_END
     <pre>
     First Name: $row[0]
     Last  Name: $row[1]
     
     </pre>
     <form action="sqltest.php" method="post">
     <input type="text" name="delete" value="yes">
     <input type="text" name="lName" value="$row[1]">
     <input type="submit" value="DELETE RECORD"></form>
_END;
 }
 
 $result->close();
 $conn->close();
 function get_post($conn, $var)
 {
 return $conn->real_escape_string($_POST[$var]);
 }
?>