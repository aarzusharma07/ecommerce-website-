<?php
// Establish MySQL connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST request is made to add item to cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cart'])) {
    $productName = $_POST["productName"]; // Changed from $_POST["name"]
    $productPrice = $_POST["productPrice"]; // Changed from $_POST["price"]

    // Insert item into cart table
    $sql = "INSERT INTO cart (name, price) VALUES ('$productName', '$productPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
