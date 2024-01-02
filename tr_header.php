<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!DOCTYPE html>
<html lang="en">


<header class="header">
   <section class="flex">
      <a href="home.php" class="logo">SOLO lasagna</a>
      <nav class="navbar">
         <a href="home.php">EN</a>
         <a href="about_tr.php">hakkında</a>
         <a href="menu_tr.php">menü</a>
         <a href="contact_tr.php">iletişim</a>
         <a href="chef.php">Şef Girişi</a>
         
      </nav>
      <div class="icons">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart_tr.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <p class="name"><?= $fetch_profile['table_number']; ?></p>
         <?php
            }else{
         ?>
            <p class="name">Lütfen adınızı ve masa numaranızı girin!</p>
            <a href="register_tr.php" class="btn" style="font-size: 1rem; padding: 0.6rem 0.6rem;">tamam</a>
         <?php
          }
         ?>
      </div>
   </section>
</header>
