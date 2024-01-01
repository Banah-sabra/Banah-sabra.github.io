<?php

include 'components/connect.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get order_id and status from the form
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];

    // Update the status in the orders table
    $update_status = $conn->prepare("UPDATE `orders` SET `status` = ? WHERE `order_id` = ?");
    $update_status->execute([$status, $order_id]);

    // If the status is 'done', delete the row from the orders table
    if ($status === 'done') {
        $get_user_id = $conn->prepare("SELECT `user_id` FROM `orders` WHERE `order_id` = ?");
        $get_user_id->execute([$order_id]);
        $user_id = $get_user_id->fetchColumn();

        // Delete the order from the orders table
        $delete_order = $conn->prepare("DELETE FROM `orders` WHERE `order_id` = ?");
        $delete_order->execute([$order_id]);

        // Delete the user from the users table
        $delete_user = $conn->prepare("DELETE FROM `users` WHERE `id` = ?");
        $delete_user->execute([$user_id]);
    }
    // Redirect back to the chef dashboard
    header('Location: chef_dashboard.php');
    exit;
} else {
    // If the form is not submitted, redirect to the chef dashboard
    header('Location: chef_dashboard.php');
    exit;
}
?>
