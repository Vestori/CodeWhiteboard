<?php

include 'db.php';

$output = array();

$sql = "SELECT * FROM messages m
        LEFT JOIN users u
        ON u.id = m.user_id
        ORDER BY m.id DESC LIMIT 20";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
} else {
    $output[] = ['error' => 'There are no current messages'];
}

header('Content-Type: application/json');
print json_encode($output);
