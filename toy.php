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
    <link rel="stylesheet" href="toy.css">
</head>
<body>
    <div class="carti border">
        <button>
        <span class="carticon">
            <i class="fa-solid fa-cart-shopping"></i>
        </span>
        <div class="bold">Cart</div>
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
            <button class="cart"onclick="addToCart('Butte Slime Kit 11 Pack Party Favor for Kids, Color and Texture Experience, Stress Relief Toy for Girls and Boys', 50,)">Add To Cart</button>
            <div class="pname">Butte Slime Kit 11 Pack Party Favor for Kids, Color and Texture Experience, Stress Relief Toy for Girls and Boys</div>
            </div>
      
        <div class="i">
            <div class="deal2"></div>
            <div class="deal1dis">  35 ruppes</div>
            <button class="cart"onclick="addToCart('80Pcs Party Favors for Kids 4-8, Kawaii Squishies Mochi Squishy Toy Bulk Fidget Sensory Toys Birthday Gifts for Boys Girls Goodie Bag Christmas Stocking Stuffers Treasure Box Classroom Prizes', 35,)">Add To Cart</button>
            <div class="pname">80Pcs Party Favors for Kids 4-8, Kawaii Squishies Mochi Squishy Toy Bulk Fidget Sensory Toys Birthday Gifts for Boys Girls Goodie Bag Christmas Stocking Stuffers Treasure Box Classroom Prizes </div>
            </div>
            
        <div class="i">
            <div class="deal3"></div>
            <div class="deal1dis"> 40 ruppes</div>
            <button class="cart"onclick="addToCart('110 Pack Fidget Toys Set,Pop Sensory Party Favors Gifts for Kids Adults Boy Girl ADHD Autism Stress Relief Stocking Stuffers Autistic Bulk Goodie Bag Pinata Filler Treasure Box Classroom Prizes School', 40, )">Add To Cart</button>
            <div class="pname">110 Pack Fidget Toys Set,Pop Sensory Party Favors Gifts for Kids Adults Boy Girl ADHD Autism Stress Relief Stocking Stuffers Autistic Bulk Goodie Bag Pinata Filler Treasure Box Classroom Prizes School</div>
        </div>
        </div>
            <div class="images">
        <div class="i">
            <div class="deal4"></div>
            <div class="deal1dis">  15 ruppes</div>
            <button class="cart"onclick="addToCart('Disney Store Official Buzz Lightyear Interactive Talking Action Figure from Toy Story, Features 10+ English Phrases, Interacts with Other Figures and Toys', 15,)">Add To Cart</button>
            <div class="pname"> Disney Store Official Buzz Lightyear Interactive Talking Action Figure from Toy Story, Features 10+ English Phrases, Interacts with Other Figures and Toys </div>
        
            
        </div><div class="i">
            <div class="deal5"></div>
            <div class="deal1dis"> 10 ruppes</div>
            <button class="cart"onclick="addToCart('Toddlers Montessori Toys for 1 2 3 Year Old, Wooden Educational Shape Sorting Toys Gifts for Kids 2-4 Girl Boy Baby, Preschool Learning Fine Motor Skills Game, Carrot Harvest Toddler Toys for 2-3', 10,)">Add To Cart</button>
            <div class="pname">Toddlers Montessori Toys for 1 2 3 Year Old, Wooden Educational Shape Sorting Toys Gifts for Kids 2-4 Girl Boy Baby, Preschool Learning Fine Motor Skills Game, Carrot Harvest Toddler Toys for 2-3</div>
            
        </div>
    
        <div class="i">
            <div class="deal6"></div>
            <div class="deal1dis"> 30 ruppess</div>
            <button class="cart"onclick="addToCart('AMLL 3D Printed Dragon in Egg, Full Articulated Dragon Crystal Dragon with Dragon Egg, Crystal Dragon Fidget Toys, Home Office Executive Desk Toys', 30,)">Add To Cart</button>
            <div class="pname">AMLL 3D Printed Dragon in Egg, Full Articulated Dragon Crystal Dragon with Dragon Egg, Crystal Dragon Fidget Toys, Home Office Executive Desk Toys</div>
            </div>
            </div>
            <div class="images">
        <div class="i">
            <div class="deal7"></div>
            <div class="deal1dis">  40 ruppess</div>
            <button class="cart"onclick="addToCart('Mini Explorer Voice Changer for Kids - Voice Changing Device for Boys & Girls Ages 3-8+ Olds - Birthday Gifts for 3, 4, 5, 7, 8 Year Old Boy - Cool Outdoor Toys Gift Ideas for Kid, Toddler', 40,)">Add To Cart</button>
            <div class="pname">Mini Explorer Voice Changer for Kids - Voice Changing Device for Boys & Girls Ages 3-8+ Olds - Birthday Gifts for 3, 4, 5, 7, 8 Year Old Boy - Cool Outdoor Toys Gift Ideas for Kid, Toddler</div>
            
        </div><div class="i">
            <div class="deal8"></div>
            <div class="deal1dis"> 20 ruppes</div>
            <button class="cart"onclick="addToCart('olloiig Pop Fidget Kids It Games Toy, Fast Push Bubble Game Console with LED Screen for Kids 8-12, Handheld Quick Push Game, Autism Sensory Toys, Birthday Xmas Gifts for Boys, Girls, Adults (Rabbit)', 20,)">Add To Cart</button>
            <div class="pname">olloiig Pop Fidget Kids It Games Toy, Fast Push Bubble Game Console with LED Screen for Kids 8-12, Handheld Quick Push Game, Autism Sensory Toys, Birthday Xmas Gifts for Boys, Girls, Adults (Rabbit)</div>
            
        
        
        
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