<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>

    <!-- Your additional styles go here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #rgb(240, 227, 156);
            color: #004715;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #033a0331;
        }

        p {
            font-size: 2rem;
        }

        a {
            color: #9b2b1e;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-to-home {
            margin-top: 20px;
        }

        /* Added style for the image */
        .thank-you-image {
            margin-top: 3px;
            max-width: 100%;
            height: auto;
            
        }
    </style>
</head>

<body>

    <div>
        <h1>Thank You for Your Order!</h1>
        
        <p>If you have any questions or concerns, please feel free to <a href="contact.php">contact us</a>.</p>
        <p>Follow us on <a href="https://www.facebook.com/solo.restorant/about">Facebook</a></p>
    </div>

    <!-- Back to Home link -->
    <div class="back-to-home">
        <a href="home.php">Back to Home</a>
    </div>

    <div class="image">
    <img src="images/Pizza maker-pana.svg" alt="Thank You Image" class="thank-you-image">
   
</body>

</html>
