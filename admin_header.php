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

<header class="header">

   <section class="flex">

      <a href="chef.php" class="logo">Chef<span>Panel</span></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="chef_dashboard.php">Dahboard</a>
         
         <a href="messages.php">Messages</a>
         <a href="register_chef.php">Register New Chef</a>
         <a href="components/chef_logout.php">Logout</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

   </section>

</header>