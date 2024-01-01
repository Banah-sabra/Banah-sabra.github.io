<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $number = $_POST['table_number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);

    // Additional validation for table number
    if (!is_numeric($number) || $number < 1 || $number > 20) {
        echo '<script>alert("Table number should be between 1 and 20.");</script>';
        // You can redirect or handle the error as needed
    } else {
        $select_user = $conn->prepare("SELECT * FROM `users` WHERE table_number = ?");
        $select_user->execute([$number]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        $insert_user = $conn->prepare("INSERT INTO `users`(name, table_number) VALUES(?, ?)");
        $insert_user->execute([$name, $number]);

        // Retrieve the user's information after registration
        $select_user = $conn->prepare("SELECT * FROM `users` WHERE table_number = ?");
        $select_user->execute([$number]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<section class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box" maxlength="50">
      <input type="number" name="table_number" required placeholder="enter your table number" class="box" min="0" max="9999999999" maxlength="10">
      <input type="submit" value="register now" name="submit" class="btn"style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">
  
   </form>

</section>



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
