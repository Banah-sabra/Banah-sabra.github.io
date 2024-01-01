<?php
session_start();
include 'components/connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
   header('location: order_confirmation_tr.php?grand_total=' . $grand_total);
   exit;
    
}

// Kullanıcı profil verilerini çek
$select_profile = $conn->prepare("SELECT name, table_number FROM `users` WHERE id = ?");
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
$grand_total = isset($_GET['grand_total']) ? $_GET['grand_total'] : 0;
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Onayı</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Ek stil tanımlarınız buraya gelecek -->
    <style>
        /* Eklenen stiller buraya gelecek */
        :root {
            /* ... (özel stilleriniz) ... */
        }

        /* ... (diğer verilen stiller) ... */

        .order-details {
            /* order-details bölümü için ek stiller ekleyin */
            text-align: center;
            margin: 2rem;
        }

        .order-details p {
            /* order-details bölümündeki paragraflar için ek stiller ekleyin */
            font-size: 2rem;
            color: var(--dark-green);
        }
        .order-details p strong {
           font-size: 3.5rem; /* Gerektiğinde yazı tipi boyutunu ayarlayın */
            color: #9b2b1e; /* Belirlediğiniz renge göre değiştirin */
        
        }
        .Image {
            margin-top: 3px;
            max-width: 300px; /* İstenen genişlik değerine ayarlayın */
            height: auto;
        }


        /* ... (diğer stiller) ... */
    </style>
</head>

<body>

    <!-- header bölümü başlangıcı -->
    <?php include 'components/tr_header.php'; ?>
    <!-- header bölümü sonu -->

    <div class="heading">
        <h3>Sipariş Onayı</h3>
        <p><a href="home_tr.php">ana sayfa</a> / Sipariş Onayı</p>
    </div>

    <section class="form-container">
        <div class="order-details">
            <p><strong>Siparişiniz Başarıyla Alındı!</strong></p>
            <p><?= $fetch_profile['name']; ?>, siparişinizi verdiğiniz için teşekkür ederiz. Siparişiniz onaylandı ve yakında teslim edilecek.</p>
            <p>Masa Numarası: <?= $fetch_profile['table_number']; ?></p>
          
       
            <p>Lütfen bir dakikanızı ayırarak <a href="rate_website_tr.php">deneyiminizi değerlendirin</a>.</p>

            <div class="image">
                <img src="images/Confirmed-bro.svg" alt="Resim" class="Image">
            </div>
        </div>
    </section>

    
    <!-- footer bölümü sonu -->

    <!-- Özel js dosyası bağlantısı -->
    <script src="js/script.js"></script>

</body>

</html>
