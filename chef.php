<?php

include 'components/connect.php';
session_start();

if (isset($_SESSION['chef_id'])) {
    $chef_id = $_SESSION['chef_id'];
} else {
    $chef_id = '';
}

// Initialize an array to store error messages

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $username = filter_var($username, FILTER_SANITIZE_STRING);

    $password = $_POST['password'];
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    // Fetch hashed password from the database based on the provided username
    $select_chef = $conn->prepare("SELECT * FROM `chefs` WHERE username = ? AND password = ?");
    $select_chef->execute([$username, $password]);

    $row = $select_chef->fetch(PDO::FETCH_ASSOC);

    if ($select_chef->rowCount() > 0) {
        $_SESSION['chef_id'] = $row['chef_id'];
        header('location: chef_dashboard.php');
    } else {
        $message[] = 'Incorrect username or password!';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chef Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<?php include 'components/admin_header.php'; ?>




<section class="form-container">
   <form action="" method="post">
      <h3>Chef Login</h3>
      <img src="images/user-icon.png" alt="" width="100" height="100">

      <input type="text" name="username" required placeholder="Enter your username" class="box" maxlength="50">
      <input type="password" name="password" required placeholder="Enter your password" class="box" maxlength="50">
      <input type="submit" value="Login Now" name="submit" class="btn">
   </form>
</section>

</body>
</html>
