<?php
session_start();
include 'components/connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
   header('location: order_confirmation.php?grand_total=' . $grand_total);
   exit;
    
}

// Fetch user profile data
$select_profile = $conn->prepare("SELECT name, table_number FROM `users` WHERE id = ?");
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
$grand_total = isset($_GET['grand_total']) ? $_GET['grand_total'] : 0;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Your additional styles go here -->
    <style>
        /* Add the provided styles here */
        :root {
            /* ... (your custom styles) ... */
        }

        /* ... (other provided styles) ... */

        .order-details {
            /* Add any additional styles for the order-details section */
            text-align: center;
            margin: 2rem;
        }

        .order-details p {
            /* Add any additional styles for paragraphs within the order-details section */
            font-size: 2rem;
            color: var(--dark-green);
        }
        .order-details p strong {
           font-size: 3.5rem; /* Adjust the font size as needed */
            color: #9b2b1e; /* Change the color to your desired color */
        
        }
        .Image {
    margin-top: 3px;
    max-width: 300px; /* Adjust the pixel value to your desired width */
    height: auto;
}


        /* ... (other styles) ... */
    </style>
</head>

<body>

    <!-- header section starts -->
    <?php include 'components/user_header.php'; ?>
    <!-- header section ends -->

    <div class="heading">
        <h3>Order Confirmation</h3>
        <p><a href="home.php">home</a> / Order Confirmation</p>
    </div>

    <section class="form-container">
        <div class="order-details">
            <p><strong>Order Placed Successfully!</strong></p>
            <p>Thank you, <?= $fetch_profile['name']; ?>, for placing your order. Your order has been confirmed and will be delivered shortly.</p>
            <p>Table Number: <?= $fetch_profile['table_number']; ?></p>
          
       
            <p>Please take a moment to <a href="rate_website.php">rate your experience</a>.</p>

            <div class="image">
          <img src="images/Confirmed-bro.svg" alt="Image" class="Image">
   
        </div>
    </section>

    
    <!-- footer section ends -->

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>