-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 11:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food3_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `order_note` varchar(255) DEFAULT NULL,
  `table_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`, `order_note`, `table_number`) VALUES
(3, 1, 2, 'Lasagna Bolognese Spicy', 76, 1, 'lasagnaa-.png', NULL, NULL),
(4, 1, 20, 'Soda ', 12, 3, 'Soda Sade.png', NULL, NULL),
(5, 1, 3, 'Lasagna Vegetarian', 73, 1, 'lazanya-.png', NULL, NULL),
(6, 1, 6, 'Mushroom and Sausage Pizza', 90, 1, 'mantar.png', NULL, NULL),
(7, 3, 3, 'Lasagna Vegetarian', 73, 1, 'lazanya-.png', NULL, NULL),
(8, 3, 0, '', 0, 1, '', NULL, NULL),
(9, 3, 2, 'Lasagna Bolognese Spicy', 76, 1, 'lasagnaa-.png', NULL, NULL),
(12, 4, 3, 'Lasagna Vegetarian', 73, 1, 'lazanya-.png', NULL, NULL),
(29, 5, 2, 'Lasagna Bolognese Spicy', 76, 1, 'lasagnaa-.png', NULL, NULL),
(30, 5, 3, 'Lasagna Vegetarian', 73, 1, 'lazanya-.png', NULL, NULL),
(38, 13, 1, 'Lazanya Bolognese\r\n', 76, 1, 'lasagnaa-.png', NULL, NULL),
(39, 13, 5, 'Margarita Pizza', 72, 1, 'margarita.png', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `chef_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`chef_id`, `username`, `password`) VALUES
(1, 'sololasagna', '1234567890'),
(2, 'Bana', '12345'),
(9, 'Ruba', '2004'),
(10, 'RUBA ALHATI', '12'),
(11, 'banon', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(2, 24, 'shahd ', 'bana.sabra@hotmail.com', '0557719501', 'keep going'),
(3, 0, 'ruba', 'abdulraoufs@hotmail.com', '987654321', 'kjhgfds');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `table_number` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `total_products` text DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `chef_id` int(11) NOT NULL,
  `order_notes` text DEFAULT NULL,
  `order_note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `name`, `table_number`, `status`, `total_products`, `total_price`, `payment_method`, `rating`, `feedback`, `order_date`, `chef_id`, `order_notes`, `order_note`) VALUES
(27, 28, 'bana', '3', 'pending', 'Lasagna Bolognese Spicy (76 x 1)', 76.00, NULL, NULL, NULL, '2023-12-30 17:28:29', 0, NULL, ''),
(28, 29, 'shahd ', '7', 'pending', 'Lasagna Bolognese Spicy (76 x 1)Lazanya Bolognese\r\n (76 x 1)', 152.00, NULL, NULL, NULL, '2023-12-30 18:08:30', 0, NULL, 'hgtre');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`, `description`) VALUES
(1, 'Lazanya Bolognese\r\n', 'lasagna', 76, 'lasagnaa-.png', 'Bechamel sauce, red pepper, green pepper, mushroom, garlic, onion, zucchini, carrot, pea, corn, tomato, celery, basil, butter, olive oil, spices, dough, mozzarella cheese.'),
(2, 'Lasagna Bolognese Spicy', 'lasagna', 76, 'lasagnaa-.png', 'Bechamel sauce, hot pepper, red pepper, green pepper, mushroom, garlic, onion, tomato, celery, basil, butter, spices, mozzarella cheese, dough'),
(3, 'Lasagna Vegetarian', 'lasagna', 73, 'lazanya-.png', 'Bechamel sauce, red pepper, green pepper, mushroom, garlic, onion, zucchini, carrot, pea, corn, tomato, celery, basil, butter, olive oil, spices, dough, mozzarella cheese.'),
(4, 'Four Seasons pizza', 'pizza\r\n', 87, 'four-.png', 'Tomato sauce, dough, olive oil, basil, mushrooms, corn, mozzarella cheese, thyme, sausage, seasonal seasonings'),
(5, 'Margarita Pizza', 'pizza', 72, 'margarita.png', 'Dough , tomato sauce , olive oil , mozzarella cheese ,oregano'),
(6, 'Mushroom and Sausage Pizza', 'pizza', 90, 'mantar.png', 'Dough , tomato sauce , olive oil, mushrooms , meat sausage , mozzarella cheese ,thyme'),
(7, 'Sausage Pizza', 'pizza', 90, 'sausage.png', 'Tomato sauce, dough, olive oil, basil, mozzarella cheese, thyme, sausage'),
(8, 'Mushroom Pizza', 'pizza', 87, 'Mushroom Pizza.png', 'Dough , tomato sauce , olive oil , mushrooms , mozzarella cheese , oregano'),
(9, 'Roca Pizza', 'pizza', 80, 'Screenshot_2023-12-09_164246-removebg-preview.png', 'Tomato sauce, dough, olive oil, basil, seasonal greens, mozzarella cheese, thyme'),
(10, 'Mint Beef Sandwich', 'sandwiches', 70, 'Mint Beef Sandwich.png', NULL),
(11, 'Sausage Sandwich', 'sandwiches', 80, 'Sausage Sandwich.png', NULL),
(12, 'Sucuklu Sandviç', 'sandwiches', 60, 'Chicken Fajita Sandwich.png', NULL),
(13, 'Lamb Sandwich', 'sandwiches', 80, 'Lamb Sandwich.png', NULL),
(14, 'Lamb Brain Sandwich', 'sandwiches', 50, 'Kuzu Beyin Sandviç.png', NULL),
(15, 'Lamb Tongue Sandwich', 'sandwiches', 80, 'Lamb Tongue Sandwich.png', NULL),
(16, 'Chicken Fajita Sandwich', 'sandwiches', 50, 'Chicken Fajita Sandwich.png', NULL),
(17, 'Tahini Chicken Sandwich', 'sandwiches', 50, 'Tahini Chicken Sandwich.png', NULL),
(18, 'Roast Sandwich', 'sandwiches', 80, 'Roast Sandwich.png', NULL),
(19, 'Roca Salad', 'sandwiches', 20, 'saladd.png', 'Mushroom, arugula, tomato, lettuce, lemon'),
(20, 'Soda ', 'drinks', 12, 'Soda Sade.png', NULL),
(21, 'Soda Fruity', 'drinks', 12, 'Soda Meyveli.png', NULL),
(22, 'Ayran', 'drinks', 15, 'Ayran.png', NULL),
(27, 'coca cola 1 litre', 'drinks', 35, 'coca cola 1 litre.png', NULL),
(28, 'coca cola', 'drinks', 22, 'coca_cola.png', NULL),
(29, 'water', 'drinks', 8, 'water.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_tr`
--

CREATE TABLE `products_tr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_tr`
--

INSERT INTO `products_tr` (`id`, `name`, `category`, `price`, `image`, `description`) VALUES
(1, 'Bolonez lazanya', 'lasagna', 76.00, 'lasagnaa-.png', 'Beşamel sos, kırmızı biber, yeşil biber, mantar...'),
(2, 'Lazanya Bolonez acılı', 'lasagna', 76.00, 'lasagnaa-.png', 'Beşamel sos, acı biber, kırmızı biber, yeşil biber...'),
(3, 'Lazanya Vejetaryen', 'lasagna', 73.00, 'lazanya-.png', 'Beşamel sos, kırmızı biber, yeşil biber, mantar...'),
(4, 'Dört Mevsim pizza', 'pizza', 87.00, 'four-.png', 'Domates sosu, hamur, zeytinyağı, fesleğen, mantar,...'),
(5, 'Margarita Pizza', 'pizza', 72.00, 'margarita.png', 'Hamur, domates sosu, zeytinyağı, mozzarella peyniri...'),
(6, 'Mantarlı ve Sosisli Pizza', 'pizza', 90.00, 'mantar.png', 'Hamur, domates sosu, zeytinyağı, mantar, et...'),
(7, 'Sosisli Pizza', 'pizza', 90.00, 'sausage.png', 'Domates sosu, hamur, zeytinyağı, fesleğen, mozarella...'),
(8, 'Mantarlı pizza', 'pizza', 87.00, 'Mushroom Pizza.png', 'Hamur, domates sosu, zeytinyağı, mantar, moz...'),
(9, 'Roca Pizza', 'pizza', 80.00, 'Screenshot_2023-12-09_164246-removebg-preview.png', 'Domates sosu, hamur, zeytinyağı, fesleğen, mevsim yeşillikleri...'),
(10, 'Nane Dana etli Sandviç', 'sandwiches', 70.00, 'Mint Beef Sandwich.png', NULL),
(11, 'Sosisli Sandviç', 'sandwiches', 80.00, 'Sausage Sandwich.png', NULL),
(12, 'Sucuklu Sandviç', 'sandwiches', 60.00, 'Chicken Fajita Sandwich.png', NULL),
(13, 'Kuzu etli Sandviç', 'sandwiches', 80.00, 'Lamb Sandwich.png', NULL),
(14, 'Kuzu Beyinli Sandviç', 'sandwiches', 50.00, 'Kuzu Beyin Sandviç.png', NULL),
(15, 'Kuzu Dilli Sandviç', 'sandwiches', 80.00, 'Lamb Tongue Sandwich.png', NULL),
(16, 'Tavuklu Fajita Sandviç', 'sandwiches', 50.00, 'Chicken Fajita Sandwich.png', NULL),
(17, 'Tahinli Tavuklu Sandviç', 'sandwiches', 50.00, 'Tahini Chicken Sandwich.png', NULL),
(18, 'Kızarmış Sandviç', 'sandwiches', 80.00, 'Roast Sandwich.png', NULL),
(19, 'Roca Salatası', 'sandwiches', 20.00, 'saladd.png', 'Mantar, roka, domates, marul, limon'),
(20, 'Soda', 'drinks', 12.00, 'Soda Sade.png', NULL),
(21, 'Meyveli soda', 'drinks', 12.00, 'Soda Meyveli.png', NULL),
(22, 'Ayran', 'drinks', 15.00, 'Ayran.png', NULL),
(23, 'coca cola 1 litre', 'drinks', 35.00, 'coca cola 1 litre.png', NULL),
(24, 'coca cola', 'drinks', 22.00, 'coca_cola.png', NULL),
(25, 'Su', 'drinks', 8.00, 'water.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `table_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `table_number`) VALUES
(28, 'bana', '3'),
(29, 'shahd ', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`chef_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_tr`
--
ALTER TABLE `products_tr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `chef_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products_tr`
--
ALTER TABLE `products_tr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
