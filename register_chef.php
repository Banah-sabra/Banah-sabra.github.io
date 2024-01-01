<?php
include 'components/connect.php';
session_start();

if (!isset($_SESSION['chef_id'])) {
    header('location: chef.php');
    exit;
}

$chef_id = $_SESSION['chef_id'];
$message = [];

if (isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $confirm_password = filter_var($_POST['confirm_password'], FILTER_SANITIZE_STRING);

    // Additional validation for username and password (e.g., length, format)
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $message[] = "All fields are required.";
        // You may redirect or handle the error as needed
    } elseif ($password !== $confirm_password) {
        $message[] = "Passwords do not match. Please enter them again.";
        // You may redirect or handle the error as needed
    } else {
        // Check if the username already exists
        $select_user = $conn->prepare("SELECT * FROM `chefs` WHERE username = ?");
        $select_user->execute([$username]);
        $existingUser = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            $message[] = "Username already exists. Please choose a different username.";
            // You may redirect or handle the error as needed
        } else {
            // Hash the password securely
          

            // Insert the new chef
            $insert_user = $conn->prepare("INSERT INTO `chefs` (username, password) VALUES (?, ?)");
            $insert_user->execute([$username, $password]);

            // Retrieve the user's information after registration
            $select_user = $conn->prepare("SELECT * FROM `chefs` WHERE username = ?");
            $select_user->execute([$username]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);

            $_SESSION['chef_id'] = $row['chef_id'];
            header('location: chef_dashboard.php');
            exit;
        }
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
   <link rel="stylesheet" href="css/admin_style.css">


</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/admin_header.php'; ?>
<!-- header section ends -->

<section class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
     
      <input type="text" name="username" required placeholder="enter new username" class="box" maxlength="50">
      <input type="text" name="password" required placeholder="enter password" class="box" maxlength="10">
      <input type="text" name="confirm_password" required placeholder="confirm password" class="box" maxlength="10">
      <input type="submit" value="register now" name="submit" class="btn" style="font-size: 1.5rem; padding: 0.8rem 0.8rem;">
   </form>
</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
