
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
    <link rel="stylesheet" href="pc.css">
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
          
    <div> 
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
            <button class="cart"onclick="addToCart('WIPEMIK 14, Laptop Computer, 16GB RAM Laptop 512GB SSD, Intel Quad-Cores.......', 50,)">Add To Cart</button>
            <div class="pname">WIPEMIK 14" Laptop Computer, 16GB RAM Laptop 512GB SSD, Intel Quad-Cores.......</div>
            </div>
      
        <div class="i">
            <div class="deal2"></div>
            <div class="deal1dis">35 ruppes</div>
            <button class="cart"onclick="addToCart('eero mesh wi-fi routers and systems', 35,)">Add To Cart</button>
            <div class="pname">eero mesh wi-fi routers and systems</div>
            </div>
            
        <div class="i">
            <div class="deal3"></div>
            <div class="deal1dis"> 40 ruppes</div>
            <button class="cart"onclick="addToCart('HP 15.6,HD Busienss Laptop Computer, 6-core AMD Ryzen...............', 40,)">Add To Cart</button>
            <div class="pname">HP 15.6" HD Busienss Laptop Computer, 6-core AMD Ryzen...............</div>
        </div>
        </div>
            <div class="images">
        <div class="i">
            <div class="deal4"></div>
            <div class="deal1dis"> 15 rupees</div>
            <button class="cart"onclick="addToCart('ASUS gaming laptops', 15,)">Add To Cart</button>
            <div class="pname"> ASUS gaming laptops</div>
        
            
        </div><div class="i">
            <div class="deal5"></div>
            <div class="deal1dis">  10 rupees</div>
            <button class="cart"onclick="addToCart('samsung s6 lite tablets', 10,)">Add To Cart</button>
            <div class="pname">samsung s6 lite tablets</div>
            
        </div>
    
        <div class="i">
            <div class="deal6"></div>
            <div class="deal1dis"> 30 rupees</div>
            <button class="cart"onclick="addToCart('fatest wifi extender', 30,)">Add To Cart</button>
            <div class="pname">fatest wifi extender</div>
            </div>
            </div>
            <div class="images">
        <div class="i">
            <div class="deal7"></div>
            <div class="deal1dis"> 40 rupees</div>
            <button class="cart"onclick="addToCart('samsung memory and drives', 40,)">Add To Cart</button>
            <div class="pname">samsung memory and drives</div>
            
        </div><div class="i">
            <div class="deal8"></div>
            <div class="deal1dis"> 20 rupees</div>
            <button class="cart"onclick="addToCart('samsung monitor deals', 20,)">Add To Cart</button>
            <div class="pname">samsung monitor deals</div>
            
        </div><div class="i">
            <div class="deal9"></div>
            <div class="deal1dis">  40 rupees</div>
            <button class="cart"onclick="addToCart('Anker USB C cable', 40,)">Add To Cart</button>
            <div class="pname">Anker USB C cable</div>
        </div>
        </div>
           
        
        </div>
    </div>
    <footer>
        <div>
            <a href="index.html" class="n"> <h1 class="na"> Click here.Visit Home Page </h1> </a>
        </div>
        
    </footer>
    <script src="deal.js"></script>
</body>
</html>