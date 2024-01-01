:<?php
session_start();
include 'components/connect.php';

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Redirect to home.php if the user is not logged in
    header('location:home.php');
    exit;
}

// Handle form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $table_number = $_POST['table_number'];
    $table_number = filter_var($table_number, FILTER_SANITIZE_STRING);

    $total_products = $_POST['total_products'];
    $total_price = $_POST['total_price'];

    $order_note = $_POST['order_note'];

    // Check if the cart is not empty
    $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
    $check_cart->execute([$user_id]);

    if ($check_cart->rowCount() > 0) {
        // Insert order into the database
        $insert_order = $conn->prepare("INSERT INTO `orders` (user_id, name, table_number, total_products, total_price,order_note) VALUES (?,?,?,?,?,?)");
        $insert_order->execute([$user_id, $name, $table_number, $total_products, $total_price,$order_note]);

        // Delete items from the cart
        $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
        $delete_cart->execute([$user_id]);
        
        $_SESSION['order_placed'] = true;
     
        // Redirect to a confirmation page or perform other actions after placing the order
        header('location: order_confirmation.php');
       
    } else {
        $message[] = 'Your cart is empty';
    }
    
}

// Fetch user profile data
$select_profile = $conn->prepare("SELECT name, table_number FROM `users` WHERE id = ?");
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
     <link rel="stylesheet" href="css/style.css">

    <style>
        /* Style the select element */
        .payment-method-select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            background-color: #fff;
        }

        /* Style the options within the dropdown */
        .payment-method-select option {
            font-size: 16px;
        }
    </style>
</head>
<body>

<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
    <h3>checkout</h3>
    <p><a href="home.php">home</a> <span> / checkout</span></p>
</div>

<section class="checkout">

    <h1 class="title">order summary</h1>

    <form action="" method="post">

        <div class="cart-items">
            <h3>cart items</h3>
            <?php
            $grand_total = 0;
            $cart_items = [];
            $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $select_cart->execute([$user_id]);

            if ($select_cart->rowCount() > 0) {
                while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
                    $cart_items[] = $fetch_cart['name'] . ' (' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity'] . ')';
                    $total_products = implode($cart_items);
                    $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
                    ?>
                    <p><span class="name"><?= $fetch_cart['name']; ?></span><span
                                class="price"><?= $fetch_cart['price']; ?> x <?= $fetch_cart['quantity']; ?> TL</span></p>
                    <?php
                }
            } else {
                echo '<p class="empty">your cart is empty!</p>';
            }
            ?>
            <p class="grand-total"><span class="name">grand total :</span><span
                        class="price"><?= $grand_total; ?> TL</span></p>
            <a href="cart.php" class="btn"style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">view cart</a>
        </div>

        <input type="hidden" name="total_products" value="<?= $total_products; ?>">
        <input type="hidden" name="total_price" value="<?= $grand_total; ?>">
        <input type="hidden" name="name" value="<?= $fetch_profile['name'] ?>">
        <input type="hidden" name="table_number" value="<?= $fetch_profile['table_number'] ?>">

        <div class="user-info">
            <h3>your info</h3>
            <p><i class="fas fa-user"></i><span><?= $fetch_profile['name'] ?></span></p>
            <p><i class="fas fa-table"></i><span><?= $fetch_profile['table_number'] ?></span></p>

 
            <textarea name="order_note" id="order_note" rows="4" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; outline: none; resize: vertical; box-sizing: border-box;" placeholder="You can write your special instructions here"></textarea>

           
    
        <select name="payment_method" class="payment-method-select">
            <option value="" disabled selected>Select payment method</option>
            <option value="cash on delivery">Cash on Delivery</option>
            <option value="credit card">Credit Card</option>
            <option value="paytm">Paytm</option>
            <option value="paypal">PayPal</option>
        </select>

            
            <button type="submit" class="btn" style="width:100%; background:var(--red); color:var(--white); font-size:2rem; padding:1rem 1rem;"
                    name="submit">Place Order
                    
            </button>
        </div>
    </form>
</section>

<!-- footer section starts  -->

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>