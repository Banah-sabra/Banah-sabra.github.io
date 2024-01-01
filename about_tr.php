<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
$tableNumber = isset($_POST['tableNumber']) ? $_POST['tableNumber'] : '';

// Validation flag
$isValidTableNumber = false;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate table number (you may want to customize this validation)
    if (!empty($tableNumber) && is_numeric($tableNumber) && $tableNumber > 0) {
        $isValidTableNumber = true;
    }
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hakkında</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- Font Awesome CDN bağlantısı -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Özel CSS dosyası bağlantısı -->
   <link rel="stylesheet" href="css/style.css">
   

   
    
    
</head>


</head>
<body>
   
<!-- başlık bölümü başlangıcı -->
<?php include 'components/tr_header.php'; ?>
<!-- başlık bölümü sonu -->

<div class="heading">
   <h3>Hoşgeldiniz</h3>
   <p><a href="home_tr.php">ana sayfa</a> <span> / hoşgeldiniz</span></p>
</div>

<!-- hakkında bölümü başlangıcı -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/solo_lasagna-remove.png" alt="">
      </div>

      <div class="content">
         <h3>Solo Lasagna'ya Hoşgeldiniz</h3>
         <p>
lezzet kolaylıkla buluşuyor! Modern dijital menümüz, yemek zevkinizi basitlik ve verimlilikle yükseltmek için burada. Her ısırık, özel tatların bir senfoniyle buluştuğu nefis lasagnalarımızın keyfini çıkarın. Özenle hazırlanan ve en taze malzemeler kullanılarak yapılan lasagnalarımız, sizi daha fazlasını istemeye yönlendirecek keyifli bir deneyim vadeder. Solo Lasagna, her öğünün lezzetli bir macera olduğu yer!</p>
         <a href="menu_tr.php" class="btn" style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">menümüz</a>
      </div>

   </div>

</section>

<!-- hakkında bölümü sonu -->

<!-- adımlar bölümü başlangıcı -->

<section class="steps">

<h1 class="title">basit adımlar</h1>

<div class="box-container">

   <div class="box">
      <img src="images/order-food.png" alt="">
      <h3>sipariş seç</h3>
      <p>
Solo Lasagna'da yemeğinizi seçmek, keyifli bir ilk adımdır! Kullanımı kolay dijital menümüzle çeşitli lezzetli seçenekler arasından hızlıca seçim yapabilirsiniz. Klasik tatları seven ya da yeni bir şey denemek isteyen herkes için sipariş vermek çok kolay. Solo Lasagna, sadece tıklayın ve keyfini çıkarın!</p>
   </div>

   <div class="box">
      <img src="images/fast-delivery.png" alt="">
      <h3>hızlı teslimat</h3>
      <p>Çekici bir seçenek seçtikten sonra Solo Lasagna'da hızlı ve kolay bir deneyime hazırlanın! Hızlı teslimat hizmetimiz, siparişinizin masanıza zamanında gelmesini sağlar. Uzun sıralara veda edin ve hızlı, pratik yemek yemeğe merhaba deyin. Sadece lezzetli lasagna değil, aynı zamanda hızlı ve harika bir yeme deneyimi sunmaya adanmışız!</p>
   </div>

   <div class="box">
      <img src="images/food.png" alt="">
      <h3>yiyeceğin tadını çıkar</h3>
      <p>Solo Lasagna, sadece midesini değil, her leziz ısırıkla kalbini ısıtan bir yemek noktasıdır.
.</p>
   </div>

</div>

</section>

<!-- incelemeler bölümü başlar -->

<!--
<section class="incelemeler">

   <h1 class="baslik">müşteri yorumları</h1>

   <div class="swiper incelemeler-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/resim-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="yildizlar">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/resim-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="yildizlar">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/resim-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="yildizlar">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/resim-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="yildizlar">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/resim-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="yildizlar">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/resim-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="yildizlar">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
-->

<!-- incelemeler bölümü biter -->

<?php include 'components/footer_tr.php'; ?>




<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- Özel JS dosyası bağlantısı -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>