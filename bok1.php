<?php
include 'server.php';
session_start();
$msg = ''; // Initialize the message variable

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cart'])) {
    $productName = mysqli_real_escape_string($conn, $_POST["productName"]);
    $productPrice = mysqli_real_escape_string($conn, $_POST["productPrice"]);

    // Assuming you have a user_id stored in the session
    $userId = $_SESSION['user_id'];

    // Insert the product into the cart table along with the user_id
    $insert = mysqli_query($conn, "INSERT INTO cart (user_id, product_name, product_price) VALUES ('$userId', '$productName', '$productPrice')");

    if ($insert) {
        $msg = 'Product added to cart successfully';
    } else {
        $msg = 'Error adding product to cart';
    }

    echo $msg; // Send response message back to JavaScript
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bok1.css">
</head>
<body>
    <div class="img">
        <div class="imgbok1"></div>
        <div class="bok1desc"><h1>If He Had Been With Me</h1>
     <div><h1 class="q">PaperBack - November 1,2019 </h1></div>
     <div class="q">by <span class="w">Naura Lawlin<span> (Author)</div>
     <div>4.2 <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i></div>
        <div class="w">ratings</div>
       <span class="e"> best of book #booktok </span>
       <div class="f"></div>
       <div class="buy">
       <div>Buy now:<div>
       <div>$7.27</div>
       
       
       
    
    </div>
       <div class="f"></div>
       <div class="margindesc">
       <div>A New York Times Bestseller</div>
       <div>*A BookTok Viral Sensation*</div>
       <div>An achingly authentic and raw portrait of love, regret, and the life-altering impact of the relationships we hold closest to us, this YA romance bestseller is perfect for fans of Colleen Hoover, Jenny Han, and You've Reached Sam.</div>
        <div>If he had been with me, everything would have been different…

            Autumn and Finn used to be inseparable. But then something changed. Or they changed. Now, they do their best to ignore each other.
            
            Autumn has her boyfriend Jamie, and her close-knit group of friends. And Finn has become that boy at school, the one everyone wants to be around.
            
            That still doesn't stop the way Autumn feels every time she and Finn cross paths, and the growing, nagging thought that maybe things could have been different. Maybe they should be together.
            
            But come August, things will change forever. And as time passes, Autumn will be forced to confront how else life might have been different if they had never parted ways…</div>
    </div>
    <div>Captivating and heartbreaking, If He Had Been with Me is perfect for readers looking for:
    <ul>
        <li>Contemporary teen romance books </li>
           <li> Unputdownable & bingeworthy novels
           <li>Complex emotional YA stories</li> 
           <li>TikTok Books</li> 
           <li>Jenny Han meets Dear Even Hanson </li> 
            <li>Colleen Hover fans</li>
    </ul>
</div>
<div class="f"></div>
<div class="icons">
<div class="aboutbook">
<h4>Print length</h4>
<div class="icon1"><i class="fa-solid fa-book"></i></div>
<span class="color">400 pages</span>
</div>
<div class="aboutbook">
    <h4>Language</h4>
<div class="icon1"><i class="fa-solid fa-globe"></i></i></div>
<span class="color">English</span>
</div>
<div class="aboutbook">
    <h4>Publisher Date</h4>
<div class="icon1"><i class="fa-regular fa-calendar-days"></i></i></i></div>
<span class="color">Nov 19,2009</span>
</div>
<div class="aboutbook">
    <h4>Dimensions</h4>
<div class="icon1"><i class="fa-regular fa-address-book"></i></div>
<span class="color">5.5 x 1 x 8.25 inches</span>
</div>
</div>
<div class="f"></div>

<h1>Popular Highlights in this book</h1>
<div class="highlights">
    <div class="img1"><p class="white">Sometimes I am disappointed with love. I thought that when you were in love, it would always be right there, staring you in the face, reminding you every moment that you love this person. It seems that it isn’t always like that. </p></div>
    <div class="img2"><p class="white">“Try to marry your first love. For the rest of your life, no one will ever treat you as well.” </p></div>
</div>
<div class="f"></div>
<div><h1>From the publisher</h1></div>
<div class="pub"></div>
<div class="f"></div>
<h1>About the Author</h1>
<p>Laura Nowlin holds a B.A. in English with an emphasis in Creative Writing from Missouri University. When she isn’t at home agonizing over her own novels, Laura works at the public library, where the patrons give her plenty of inspiration for her writing. She lives in St. Louis with her musician husband, neurotic dog, and psychotic cat.</p>
        </div>
    </div>
    <div class="f"></div>
    <h3 class="r">Follow The Author</h3>
    <div class="laura">
        <div class="authorimg"></div>
        <div class="authorname">
            <div class="d">Laura</div>
            <div class="d">Nowlin</div>
             
            <button class="follow">Follow</button>
         </div>
         <div id="cart">
            <h2 class="shopping-cart">Shopping Cart</h2>
            <ul id="cart-items"></ul>
            <div class="shopping-cart">Total: <span id="total">0.00</span></div>
        </div>
    
       
    
        <!-- Your existing HTML code -->
    
        <div class="img">
            <!-- Your existing book details -->
    
            <div class="buy">
                <div>Buy now:<div>
                <div>$7.27</div>
                <button class="addtocart" onclick="addToCart('If He Had Been With Me', 7.27)">Add To Cart</button>
                <button class="buynow">Buy Now</button>
            </div>
        </div>

    </div>
    <script src="deal.js"></script>
</body>
</html>