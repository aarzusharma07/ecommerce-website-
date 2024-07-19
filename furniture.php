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
    <link rel="stylesheet" href="furniture.css">
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
            <button class="cart" onclick="addToCart('AD Basics Padded Office Desk Chair with Armrests, Adjustable Height/Tilt, 360-Degree Swivel, 275 Pound Capacity, 24 x 24.2 x 34.8 Inches, Black', 50,)">Add To Cart</button>
            <div class="pname">AD Basics Padded Office Desk Chair with Armrests, Adjustable Height/Tilt, 360-Degree Swivel, 275 Pound Capacity, 24 x 24.2 x 34.8 Inches, Black</div>
            </div>
      
        <div class="i">
            <div class="deal2"></div>
            <div class="deal1dis">  35 ruppes</div>
            <button class="cart"onclick="addToCart('3 Drawer File Cabinets, Mobile Lateral Printer Stand with Open Shelf, Rolling Filing Cabinet with Wheels Home Office Organization and Storage (White)', 35,)">Add To Cart</button>
            <div class="pname">3 Drawer File Cabinets, Mobile Lateral Printer Stand with Open Shelf, Rolling Filing Cabinet with Wheels Home Office Organization and Storage (White) </div>
            </div>
            
        <div class="i">
            <div class="deal3"></div>
            <div class="deal1dis"> 40 ruppes</div>
            <button class="cart"onclick="addToCart('VEDECASA Corner Printer Stand Table with Power Outlet Charging Plugs USB Port Adjustable Storage Shelf Computer Tower CPU Stand Holder for Home Office (Brown)', 40,)">Add To Cart</button>
            <div class="pname">VEDECASA Corner Printer Stand Table with Power Outlet Charging Plugs USB Port Adjustable Storage Shelf Computer Tower CPU Stand Holder for Home Office (Brown)</div>
        </div>
        </div>
            <div class="images">
        <div class="i">
            <div class="deal4"></div>
            <div class="deal1dis">  15 ruppes</div>
            <button class="cart"onclick="addToCart('Unikito File Cabinet with LED Lights and Power Outlets, Rolling Printer Stand with Storage and USB Charging Ports, Lateral Office Filing Cabinet for Letter, A4, Legal and File Folders, Rustic Brown', 15,)">Add To Cart</button>
            <div class="pname"> Unikito File Cabinet with LED Lights and Power Outlets, Rolling Printer Stand with Storage and USB Charging Ports, Lateral Office Filing Cabinet for Letter, A4, Legal and File Folders, Rustic Brown</div>
        
            
        </div><div class="i">
            <div class="deal5"></div>
            <div class="deal1dis"> 10 ruppes</div>
            <button class="cart"onclick="addToCart('HOOBRO Wooden File Cabinet, Mobile Lateral Filing Cabinet with Charging Station, Rolling Printer Stand with Open Storage Shelf, for Home Office, Small Spaces, A4/Letter Size, Rustic Brown FG22UWJ01', 10,)">Add To Cart</button>
            <div class="pname">HOOBRO Wooden File Cabinet, Mobile Lateral Filing Cabinet with Charging Station, Rolling Printer Stand with Open Storage Shelf, for Home Office, Small Spaces, A4/Letter Size, Rustic Brown FG22UWJ01</div>
            
        </div>
    
        <div class="i">
            <div class="deal6"></div>
            <div class="deal1dis"> 30 ruppess</div>
            <button class="cart"onclick="addToCart('Homieasy Vertical Filing Cabinet with Lock & Charging Station, Large Drawer Wood File Cabinet with Bookshelf, Printer Stand with Open Storage Shelf, fits Letter Size for Home Office, White ', 30,)">Add To Cart</button>
            <div class="pname">Homieasy Vertical Filing Cabinet with Lock & Charging Station, Large Drawer Wood File Cabinet with Bookshelf, Printer Stand with Open Storage Shelf, fits Letter Size for Home Office, White </div>
            </div>
            </div>
            <div class="images">
        <div class="i">
            <div class="deal7"></div>
            <div class="deal1dis">  40 ruppess</div>
            <button class="cart"onclick="addToCart('SUPERDANNY LED Desk Lamp for Office Home, Eye-Caring Desk Light with Adjustable Gooseneck, 12W Touch Control Dimmable Brightness, Architect Clamp Lamp with USB Adapter for Reading Study Workbench', 40,)">Add To Cart</button>
            <div class="pname">SUPERDANNY LED Desk Lamp for Office Home, Eye-Caring Desk Light with Adjustable Gooseneck, 12W Touch Control Dimmable Brightness, Architect Clamp Lamp with USB Adapter for Reading Study Workbench</div>
            
        </div><div class="i">
            <div class="deal8"></div>
            <div class="deal1dis"> 20 ruppes</div>
            <button class="cart"onclick="addToCart('HOOBRO 7-Drawer Chest, File Cabinet, Wooden File Cabinet, Office Cabinet with Drawers, Storage Cabinet, for Home Office, Study, Easy Assembly, Rustic Brown and Black BF07WJ01', 20,)">Add To Cart</button>
            <div class="pname">HOOBRO 7-Drawer Chest, File Cabinet, Wooden File Cabinet, Office Cabinet with Drawers, Storage Cabinet, for Home Office, Study, Easy Assembly, Rustic Brown and Black BF07WJ01</div>
            
        
        
        
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