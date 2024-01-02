<?php

$db_name = 'mysql:host=localhost;dbname=foood_db';
$user_name = 'root';
$user_password = '';

try {
    $conn = new PDO($db_name, $user_name, $user_password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Additional configuration if needed
    // $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // You can perform additional configuration or actions if needed after successful connection.
} catch (PDOException $e) {
    // If an error occurs during the connection, catch the exception and handle it.
    echo "Connection failed: " . $e->getMessage();
    // You might want to log the error or take other actions as needed.
}

?>
