<?php
include 'config.php';
session_start();
$user_id=$_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
};
if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    
    header('location:login.php');
    
    
    

}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoppingcart</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<?php
    if (isset($message)){
        foreach($message as $msg){
            echo '<div class="message">' . $msg . '</div>';
        }
    }

  ?>

<?php

$select_user=mysqli_query($conn,"SELECT * FROM user_form WHERE id='$user_id' ")or die('query failed');
if(mysqli_num_rows($select_user)>0){
    $fetch_user=mysqli_fetch_assoc($select_user);
};
?>
<div class="container">
    <div class="user-profile">
<p> username: <span><?php echo $fetch_user['name']; ?></span></p>
<p> email: <span><?php echo $fetch_user['email']; ?></span></p>
<div class="flex">
    <a href="login.php" class="btn">login</a>
    <a href="register.php" class="option-btn">register</a>
    <a href="index.php?logout=<?php echo $user_id;?>" onclick="return confirm('are you sure u want to logout?');" class="delete-btn">logout</a>
</div>
</div>
</div>
</body>
</html>