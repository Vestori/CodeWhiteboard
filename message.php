<?php

include 'db.php';

if ( isset($_POST['message']) && !empty($_POST['message']) )
{
  // Clean up message
  $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

  $user_id = $_SESSION['user_id'];

  $sql = "INSERT INTO messages (user_id, message)
          VALUES ('$user_id', '$message')";

      if ($conn->query($sql) === TRUE) {
          // Message saved
          echo "message saved.";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
else
{
  // Nothing to see here go back to index.php
  header('Location: /');
  exit;
}
