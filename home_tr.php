<?php

include 'components/connect.php';



session_start();


if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
}
if (isset($_SESSION['order_placed'])) {
   // Destroy the session (log out)
   session_destroy();
   // Redirect to the home page without the session variable
   header('location: home_tr.php');
   exit;
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Anasayfa</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- Font Awesome CDN bağlantısı -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Özel CSS dosya bağlantısı -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/tr_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>Sipariş</span>
               <h3>İtalyan Yemekleri</h3>
               <a href="menu_tr.php" class="btn" style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">Menüleri Gör</a>
            </div>
            <div class="image">
               <img src="images/home.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Sipariş </span>
               <h3>Lezzetli Lazanya</h3>
               <a href="menu_tr.php" class="btn" style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">Menüleri Gör</a>
            </div>
            <div class="image">
               <img src="images/lasagna.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Sipariş </span>
               <h3>Pizza</h3>
               <a href="menu_tr.php" class="btn" style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">Menüleri Gör</a>

            </div>
            <div class="image">
               <img src="images/pizza3.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>
</section>


</section>

<section class="category">

   <h1 class="title">Yemek Kategorisi</h1>

   <div class="box-container">

      
      <a href="category_tr.php?category=pizza" class="box">
         <img src="images/pizza (1).png" alt="">
         <h3>Pizza</h3>
      </a>

      <a href="category_tr.php?category=lasagna" class="box">
         <img src="images/lasagnaa.png" alt="">
         <h3>Lazanya</h3>
      </a>

      <a href="category_tr.php?category=sandwiches" class="box">
         <img src="images/sandwich.png" alt="">
         <h3>Sandviçler</h3>
      </a>

      <a href="category_tr.php?category=drinks" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>İçecekler</h3>
      </a>

   </div>

</section>





<section class="products">

   <h1 class="title">En Son Eklenen Yemekler</h1>

   <div class="box-container">

      <?php
         $select_products = $conn->prepare("SELECT * FROM `products_tr` LIMIT 6");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view_tr.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category_tr.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
         <div class="price"><?= $fetch_products['price']; ?> TL</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
         </div>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">Henüz ürün eklenmedi!</p>';
         }
      ?>

   </div>

   <div class="more-btn">
   <a href="menu_tr.php" class="btn" style="font-size: 2.5rem; padding: 1rem 1.8rem;">Hepsini Gör</a>
</div>

</section>






















<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- Özel JavaScript dosya bağlantısı -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop: true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
});

</script>

</body>
</html>
