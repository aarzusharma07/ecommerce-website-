<?php
include 'config.php';
session_start();
$msg = ''; // Initialize the message variable

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM user_form WHERE email='$email' AND password='$pass'") or die('query failed');
    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] =$row['id'];
        $msg = 'correct email or password';
      
        header('Location: index.html');
        exit(); // Stop further execution
    } else {
        $msg = 'Incorrect email or password';
      


// Displaying the message in HTML
echo '<script>alert("' . $msg . '");</script>';

       
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styl.css">
    
</head><script>
        function disableButton() {
            document.getElementById("loginButton").disabled = true;
        }
    </script>
<body>
    
    <div class="form-container">
    <form action="" method="post" onsubmit="disableButton()">
            <h3>Login Now</h3>
            <input type="email" name="email" required placeholder="Enter email" class="box">
            <input type="password" name="password" required placeholder="Enter password" class="box">
            <input type="submit" name="submit" class="btn" value="Login Now">
            <p>Don't have an account? <a href="register.php">Register Now</a></p>
        </form>
    </div>
</body>
</html>
