<?php

include 'db.php';

$output = array();

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
} else {
    $output[] = ['error' => 'There are no connected users'];
}

header('Content-Type: application/json');
print json_encode($output);
