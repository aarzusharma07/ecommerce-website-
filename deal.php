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
    <link rel="stylesheet" href="deal.css">
    <link rel="stylesheet" href="server.php">
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
           
            <button class="cart" onclick="addToCart('Furniture products from AD', 50,)">Add To Cart</button>

            <div class="pname">Furniture products from AD</div>
            </div>
      
        <div class="i">
            <div class="deal2"></div>
            <div class="deal1dis">  35 ruppes</div>
            <button class="cart" onclick="addToCart('Victorias gift set', 35)">Add To Cart</button>


            <div class="pname">Victoria's gift set</div>
            </div>
            
        <div class="i">
            <div class="deal3"></div>
            <div class="deal1dis"> 40 ruppes</div>
            <button class="cart" onclick="addToCart('Turbo tax & $10 AD gift card', 40)">Add To Cart</button>
            <div class="pname">Turbo tax & $10 AD gift card</div>
        </div>
        </div>
            <div class="images">
        <div class="i">
            <div class="deal4"></div>
            <div class="deal1dis">  15 ruppes</div>
            
            
            <button class="cart" onclick="addToCart(' Grubhub', 15)">Add To Cart</button>
            <div class="pname"> Grubhub</div>
        
            
        </div><div class="i">
            <div class="deal5"></div>
            <div class="deal1dis"> 10 ruppes</div>
            <button class="cart" onclick="addToCart('Luxury handbags', 10)">Add To Cart</button>
            <div class="pname"> Luxury handbags</div>
            
        </div>
    
        <div class="i">
            <div class="deal6"></div>
            <div class="deal1dis"> 30 ruppess</div>
            <button class="cart" onclick="addToCart('Water bottle', 30)">Add To Cart</button>
            <div class="pname">Water bottle</div>
            </div>
            </div>
            <div class="images">
        <div class="i">
            <div class="deal7"></div>
            <div class="deal1dis">  40 ruppess</div>
            <button class="cart" onclick="addToCart('saves on valentiness day favourite', 40)">Add To Cart</button>
            <div class="pname">saves on valentines's day favourite</div>
            
        </div><div class="i">
            <div class="deal8"></div>
            <div class="deal1dis"> 20 ruppes</div>
            <button class="cart" onclick="addToCart('samsung monitor deals', 20)">Add To Cart</button>
            <div class="pname">samsung monitor deals</div>
            
        </div><div class="i">
            <div class="deal9"></div>
            <div class="deal1dis">  40 ruppes</div>
            <<button class="cart" onclick="addToCart('Blink smarthomes doorbells and cameras', 40)">Add To Cart</button>
            <div class="pname">Blink smarthomes doorbells and cameras</div>
        </div>
        </div>
            <div class="images">
        <div class="i">
            <div class="deal10"></div>
            <div class="deal1dis">  12 ruppes</div>
            <button class="cart" onclick="addToCart('The big game essentials:pepsi,frito-lay,and more', 12)">Add To Cart</button>
            <div class="pname">The big game essentials:pepsi,frito-lay,and more</div>
            
        </div><div class="i">
            <div class="deal11"></div>
            <div class="deal1dis">  23 ruppes </div>
            <button class="cart" onclick="addToCart('get ready with aveeno and more', 23)">Add To Cart</button>
            <div class="pname">get ready with aveeno and more</div>
            
        </div><div class="i">
            <div class="deal12"></div>
            <div class="deal1dis">  40 ruppes</div>
            <button class="cart" onclick="addToCart('Woman Essentials', 40)">Add To Cart</button>
            <div class="pname"> Woman Essentials</div>
            </div>T
            </div>
            <div class="images">
        <div class="i">
            <div class="deal13"></div>
            <div class="deal1dis">  30 ruppes</div>
            <button class="cart" onclick="addToCart('Mens apparel', 30)">Add To Cart</button>
            <div class="pname">Men's apparel</div>
            
        </div><div class="i">
            <div class="deal14"></div>
            <div class="deal1dis">  50 ruppes</div>
            <button class="cart" onclick="addToCart('watches from fossil and more', 50)">Add To Cart</button>
            <div class="pname">watches from fossil and more </div>
            
        </div><div class="i">
            <div class="deal15"></div>
            <div class="deal1dis"
            > 60 rupees </div>
            <button class="cart" onclick="addToCart('Evenflo shyft dualride and more', 60)">Add To Cart</button>
            <div class="pname">Evenflo shyft dualride and more</div>
            </div>
            </div>
        
            
            
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