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
         <a href="home_tr.php">TR</a>
         <a href="about.php">about</a>
         <a href="menu.php">menu</a>
         <a href="contact.php">contact</a>
         <a href="chef.php">Chef Login</a>
         
      </nav>
      <div class="icons">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
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
            <p class="name">please enter your name and table number first!</p>
            <a href="register.php" class="btn" style="font-size: 1rem; padding: 0.6rem 0.6rem;">ok</a>
         <?php
          }
         ?>
      </div>
   </section>
</header>



