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
    <link rel="stylesheet" href="bok2.css">
</head>
<body>
    <div class="img">
        <div class="imgbok1"></div>
        <div class="bok1desc"><h1>Be A Magician Of Your Life: Unlock the Secrets To Magical Life Transformation With This Book Kindle Edition</h1>
     <div><h1 class="q">PaperBack - January 13,2024 </h1></div>
     <div class="q">by <span class="w">Rahul Parmar<span> (Author)</div>
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
       <div>🌟 **Embark on a Magical Odyssey with 'Be a Magician of Your Life' by Rahul Parmar** 🌟</div>
       <div>Welcome to a transformative journey curated by the brilliant mind of Rahul Parmar. In this Kindle Amazon sensation, you're not just holding a book; you're unlocking a gateway to a life of enchantment and empowerment.div>
       <div>🚀 **Positive Alchemy and Self-Belief:**
        Immerse yourself in the alchemy of positivity and self-belief, where every page acts as a transformative spell propelling you to new heights. Rahul Parmar, our guide on this magical odyssey, intricately weaves wisdom into every word, creating a tapestry of empowerment.</div>
        <div>🔥 **Igniting Self-Motivation:**
            Ignite the flames of self-motivation as each chapter becomes a torch lighting the path to your most extraordinary self. Rahul's motivational insights are not just motivational quotes but a call to action, encouraging you to take charge of your narrative and redefine what is possible.
            </div>
    </div>
    <div>🌈 **Journey of Self-Realization:**
        Journey through the profound awakening of self-realization, where you become the orchestrator of your own destiny. Rahul's introspective narrative encourages you to delve deep into your essence, fostering a profound understanding of yourself and your aspirations.
        
    <div>✨ **Unveiling the Secrets of the Law of Attraction:**
        Unveil the secrets of the Law of Attraction, where your desires manifest into reality. Rahul Parmar delves into the nuances of this universal law, providing insights and practical applications that empower you to attract positivity and abundance into your life.
        </div>
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



<h1>About the Author</h1>
<h1 class="author2">RAHUL PARMAR</h1>
<p>"Dive into the magic of 'Be A Magician Of Your Life' by the renowned Rahul Parmar, a bestseller that's more than a book—it's a journey. From facing tough times to rocking it at the State Bank of India, Parmar's story is a rollercoaster of inspiration. Flip through the pages for a dose of courage, dreams, and a touch of magic that'll stick with you. Parmar is thankful you're part of this adventure—your time and vibe make it even more special. Ready for a feel-good ride? Grab the book and let's dive into the magic together!"</p>
        </div>
    </div>
    

    </div>
    <div class="f"></div>
    <h3 class="r">Follow The Author</h3>
    <div class="laura">
        <div class="authorimg"></div>
        <div class="authorname">
            <div class="d">Rahul</div>
            <div class="d">Parmar</div>
             
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
                <button class="addtocart" onclick="addToCart('Be A Magician Of Your Life: Unlock the Secrets To Magical Life Transformation With This Book Kindle Edition', 7.27)">Add To Cart</button>
                <button class="buynow">Buy Now</button>
            </div>
        </div>

    </div>
    <script src="deal.js"></script>
         
</body>
</html>