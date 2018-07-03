<?php

include 'db.php';

if ( isset($_POST['email']) && !empty($_POST['email']) )
{
  // Validate e-mail
  $email = trim($_POST['email']);
  
 
  $check = $conn->query("SELECT `email` FROM `users` WHERE `email` = '$email';");
  
  
    if(mysqli_num_rows($check)) {
        exit('This email is already being used');
    }
      
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
  {
      // Let's save it on the DB
      $sql = "INSERT INTO users (email)
              VALUES ('$email')
              ON DUPLICATE KEY UPDATE email='$email';";

      if ($conn->query($sql) === TRUE) {
          // "New record created successfully";

          $_SESSION['user_id'] = $conn->insert_id;

          header('Location: /chat.php');
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }
  else
  {
      echo '<div style="margin-top:100px;"><center>';
      echo '<h1>Error:</h1>';
      echo "<p>$email is not a valid email address<p>";
      echo '</center></div>';
  }
}
else
{
  // Nothing to see here go back to index.php
  header('Location: /');
  exit;
}
