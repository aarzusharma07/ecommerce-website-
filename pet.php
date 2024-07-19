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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="pet.css">
</head>
<body>
    <div class="carti border">
        <button>
        <span class="carticon">
            <i class="fa-solid fa-cart-shopping"></i>
        </span>
        <div class="bold">Cart check</div>
       </div>
    <div> </button>
        <div id="cart-items" class="border">
            <h2>Shopping Cart</h2>
            <ul id="cart-list"></ul>
            <div id="total">
              Total: <span id="total-amount">0</span> Rupees
            </div>
          </div>
          
        <h1 class="deal"> Today's Deals</h1>
    </div>
    <div class="img"></div>
    <div>
        <h2 class="Deals">Today's Featured Deals</h2>
    </div>
    <div class="images">
        <div class="i">
            <div class="deal1"></div>
            <div class="deal1dis">  50 ruppes</div>
            <button class="cart" onclick="addToCart('Chom Chom Roller Pet Hair Remover and Reusable Lint Roller - ChomChom Cat and Dog Hair Remover for Furniture, Couch, Carpet, Clothing and Bedding - Portable, Multi-Surface Fur Removal Tool',50 )">Add To Cart</button>
            <div class="pname">Chom Chom Roller Pet Hair Remover and Reusable Lint Roller - ChomChom Cat and Dog Hair Remover for Furniture, Couch, Carpet, Clothing and Bedding - Portable, Multi-Surface Fur Removal Tool</div>
            </div>
      
        <div class="i">
            <div class="deal2"></div>
            <div class="deal1dis">  35 ruppes</div>
            <button class="cart" onclick="addToCart('GoPets 2-Sided Dematting Comb - Professional Grooming Rake for Cats & Dogs, Long Hair Deshedding Tool, Undercoat Brush - for Matted & Long-Haired Pets', 35)">Add To Cart</button>
            <div class="pname">GoPets 2-Sided Dematting Comb - Professional Grooming Rake for Cats & Dogs, Long Hair Deshedding Tool, Undercoat Brush - for Matted & Long-Haired Pets</div>
            </div>
            
        <div class="i">
            <div class="deal3"></div>
            <div class="deal1dis"> 40 ruppes</div>
            <button class="cart" onclick="addToCart('Hertzko Dog & Cat Brush, Dog Brush for Shedding, Cat & Dog Grooming, Self Cleaning Slicker Brush for Pets, Grooming Brushes for Long Short Haired Dogs Cats, Deshedding Brush, Rake, Comb | Original', 40)">Add To Cart</button>
            <div class="pname">Hertzko Dog & Cat Brush, Dog Brush for Shedding, Cat & Dog Grooming, Self Cleaning Slicker Brush for Pets, Grooming Brushes for Long Short Haired Dogs Cats, Deshedding Brush, Rake, Comb | Original</div>
        </div>
        </div>
            <div class="images">
        <div class="i">
            <div class="deal4"></div>
            <div class="deal1dis">  15 ruppes</div>
            <button class="cart" onclick="addToCart(' PET HEAD Oatmeal Paw Butter 2 fl. oz. Moisturizing Paw Balm, Soothes and Relieves Dry Cracked Paws and Noses, Lickable, Hypoallergenic with Natural Ingredients. Gentle Formula for Puppies. Made in USA', 15)">Add To Cart</button>
            <div class="pname"> PET HEAD Oatmeal Paw Butter 2 fl. oz. Moisturizing Paw Balm, Soothes and Relieves Dry Cracked Paws and Noses, Lickable, Hypoallergenic with Natural Ingredients. Gentle Formula for Puppies. Made in USA</div>
        
            
        </div><div class="i">
            <div class="deal5"></div>
            <div class="deal1dis"> 10 ruppes</div>
            <button class="cart" onclick="addToCart(' Pet Grooming Brush and Metal Comb Combo, Cat Brush Dog Brush for Shedding, Undercoat Rake for Dogs Grooming Supplies, Dematting Deshedding Brush Dogs Shedding Tool for Long matted Haired Pets, Blue', 10)">Add To Cart</button>
            <div class="pname"> Pet Grooming Brush and Metal Comb Combo, Cat Brush Dog Brush for Shedding, Undercoat Rake for Dogs Grooming Supplies, Dematting Deshedding Brush Dogs Shedding Tool for Long matted Haired Pets, Blue</div>
            
        </div>
    
        <div class="i">
            <div class="deal6"></div>
            <div class="deal1dis"> 30 ruppess</div>
            <button class="cart" onclick="addToCart('Maxpower Planet Pet Grooming Brush - Double Sided Shedding, Dematting Undercoat Rake for Dogs, Cats - Extra Wide Dog Grooming Brush, Dog Brush for Shedding, Cat Brush, Reduce Shedding by 95%, Blue', 35)">Add To Cart</button>
            <div class="pname"> Maxpower Planet Pet Grooming Brush - Double Sided Shedding, Dematting Undercoat Rake for Dogs, Cats - Extra Wide Dog Grooming Brush, Dog Brush for Shedding, Cat Brush, Reduce Shedding by 95%, Blue </div>
            </div>
            </div>
            <div class="images">
        <div class="i">
            <div class="deal7"></div>
            <div class="deal1dis">  40 ruppess</div>
            <button class="cart" onclick="addToCart('Casfuy Dog Nail Grinder Upgraded - Professional 2-Speed Electric Rechargeable Pet Nail Trimmer Painless Paws Grooming & Smoothing for Small Medium Large Dogs & Cats (Dark Blue)', 40)">Add To Cart</button>
            <div class="pname">Casfuy Dog Nail Grinder Upgraded - Professional 2-Speed Electric Rechargeable Pet Nail Trimmer Painless Paws Grooming & Smoothing for Small Medium Large Dogs & Cats (Dark Blue)</div>
            
        </div><div class="i">
            <div class="deal8"></div>
            <div class="deal1dis"> 20 ruppes</div>
            <button class="cart" onclick="addToCart('Arm & Hammer for Pets Super Deodorizing Spray for Dogs | Best Odor Eliminating Spray for All Dogs & Puppies | Fresh Kiwi Blossom Scent That Smells Great, 8 Ounces', 20)">Add To Cart</button>
            <div class="pname"> Arm & Hammer for Pets Super Deodorizing Spray for Dogs | Best Odor Eliminating Spray for All Dogs & Puppies | Fresh Kiwi Blossom Scent That Smells Great, 8 Ounces</div>
            
        
           
        </div>
    </div>
    <footer>
        <div>
            <a href="index.html" class="n"> <h1> Click here.Visit Home Page </h1> </a>
        </div>
    </footer>
    <script src="deal.js"></script>
</body>
</html>