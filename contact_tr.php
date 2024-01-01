<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'Daha önce gönderilmiş bir mesaj!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'Mesaj başarıyla gönderildi!';

   }

}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Değerlendirme</title>

   <!-- Font Awesome CDN bağlantısı -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Özel CSS dosyası bağlantısı -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- Başlık bölümü başlangıç -->
<?php include 'components/tr_header.php'; ?>
<!-- Başlık bölümü son -->

<div class="heading">
   <h3>Web Sitemizi Değerlendirin</h3>
   <p><a href="home_tr.php">Anasayfa</a> <span> / İletişim</span></p>
</div>

<!-- İletişim bölümü başlangıç -->
<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>Eğer sanal garson web sitemizi kullanırken herhangi bir sorunla karşılaşırsanız, lütfen bize bildirin. Geri bildiriminiz çok değerlidir ve hizmet kalitemizi artırmamıza yardımcı olacaktır!</h3>
         <input type="text" name="name" maxlength="50" class="box" placeholder="Adınızı girin" required>
         <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="Numaranızı girin" required maxlength="10">
         <input type="email" name="email" maxlength="50" class="box" placeholder="E-postanızı girin" required>
         <textarea name="msg" class="box" required placeholder="Mesajınızı girin" maxlength="500" cols="30" rows="10"></textarea>
         <input type="submit" value="Mesajı Gönder" name="send" class="btn" style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">
      </form>

   </div>

</section>
<!-- İletişim bölümü son -->

<!-- Özel JS dosyası bağlantısı -->
<script src="js/script.js"></script>

</body>
</html>
