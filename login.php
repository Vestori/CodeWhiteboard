<?php

include 'db.php';

if ( isset($_POST['email']) && !empty($_POST['email']) )
{
  // Validate e-mail
  $email = trim($_POST['email']);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
  {
      // Let's save it on the DB
      
      //$check = $conn->query("SELECT `email` FROM `users` WHERE `email` = '$email';");
      
      $check = $conn->query("SELECT `email` FROM `users` WHERE `email` = '$email';");
      
      //$check = "SELECT `email` FROM `users` WHERE `email` = '$email';";
      
      // $sql = "INSERT INTO users (email)
      //         VALUES ('$email')
      //         ON DUPLICATE KEY UPDATE email='$email';";

      if (mysqli_num_rows($check)) {
          // "New record created successfully";

          $user = $conn->query("SELECT `id` FROM `users` WHERE `email` = '$email';");
          $value = mysqli_fetch_object($user);
          $_SESSION['user_id'] = $value->id;
          

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
