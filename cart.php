<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Shopping Cart</h1>
        <div class="cart">
            <?php
            include 'config.php';

            $result = mysqli_query($conn, "SELECT * FROM cart") or die('Query failed');

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="item">';
                   
                    echo '<div class="item-info">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<p>$' . $row['price'] . '</p>';
                    echo '<div class="actions">';
                    echo '<button class="delete-btn" data-id="' . $row['id'] . '">Delete</button>';
                    echo '<button class="update-btn" data-id="' . $row['id'] . '">Update</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'No items in the cart';
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>

    <script src="scriptt.js"></script>
</body>
</html>
