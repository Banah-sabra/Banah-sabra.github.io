
<?php

include 'components/connect.php';

session_start();

if (!isset($_SESSION['chef_id'])) {

    header('location: chef.php');
    exit;
}

$chef_id = $_SESSION['chef_id'];

// Retrieve orders relevant to the logged-in chef
$select_orders = $conn->query("SELECT * FROM `orders`");
$orders = $select_orders->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Dashboard</title>
    <link rel="stylesheet" href="css/admin_style.css">
    

    <style>
        body {
            background-color: var(--light-color);
            color: var(--black);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .chef-dashboard {
            max-width: 1100px;
            margin: 20px auto;
            padding: 20px;
            background-color: var(--light-bg);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: var(--main-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid var(white);
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: var(--main-color);
            color: var(--white);
        }

        tr:nth-child(even) {
            background-color: var(white);
        }

        select, button {
            padding: 5px;
            margin-top: 5px;
        }

        select {
            width: 100px;
        }

        button {
            background-color: var(--orange);
            color: var(--white);
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: var(--main-color);
        }
    </style>
</head>
<body>
<?php include 'components/admin_header.php' ?>
<?php
if (isset($message)) {
    echo '<p style="color: red;">' . $message . '</p>';
} 
?>



    <section class="chef-dashboard">
        <h2>Order Schedule</h2>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Items Ordered</th>
                    <th>Order Note</th>
                    <th>Table Number</th>
                    <th>Status</th>
                    <th>Scheduled Time</th>
                    <th>Action</th>
                    

                </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
    <td><?= $order['order_id']; ?></td>
    <td><?= $order['name']; ?></td>
    <td><?= $order['total_products']; ?></td>
    <td><?= $order['order_note']; ?></td>
    <td><?= $order['table_number']; ?></td>
    <td><?= $order['status']; ?></td>
    <td><?= $order['order_date']; ?></td>
    <td>
        <form action="update_status.php" method="post">
            <input type="hidden" name="order_id" value="<?= $order['order_id']; ?>">
            <select name="status">
                <option value="pending">Pending</option>
                <option value="preparing">Preparing</option>
                <option value="ready">Ready</option>
                <option value="done">Done</option>
            </select>
            <button type="submit">Update</button>
        </form>
    </td>
</tr>
            <?php endforeach; ?>
            </tbody>
        </table>
     
    </section>
</body>
</html>
