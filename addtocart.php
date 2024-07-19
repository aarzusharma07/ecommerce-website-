<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Connect to the database
  $host = 'localhost';
  $user = 'username';
  $password = 'password';
  $database = 'database';

  $conn = mysqli_connect($host, $user, $password, $database);

  // Validate the user input
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // Redirect the user to the e-commerce website
    header('Location: https://example.com/e-commerce');
  } else {
    echo 'Invalid username or password';
  }

  // Close the database connection
  mysqli_close($conn);
?>