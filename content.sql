CREATE TABLE `foods` (
  `food_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`food_id`)
) ;


INSERT INTO `foods` VALUES 
(1,'Margherita Pizza','Classic tomato and mozzarella cheese pizza',9.99,1),
(2,'Cheeseburger','Delicious cheeseburger with fries',7.49,2),
(3,'Spaghetti Carbonara','Creamy pasta with bacon and parmesan',11.99,3),
(4,'Caesar Salad','Fresh romaine lettuce with Caesar dressing',5.99,4),
(5,'Chocolate Brownie','Rich and gooey chocolate brownie',3.99,5),
(6,'Pepperoni Pizza','Classic pizza with pepperoni slices',10.99,1),
(7,'Chicken Alfredo','Creamy pasta with grilled chicken',12.99,3),
(8,'Greek Salad','Fresh salad with feta cheese and olives',6.99,4),
(9,'Chocolate Chip Cookie','Warm and gooey chocolate chip cookie',2.49,5),
(10,'Veggie Burger','Vegetarian burger with a variety of veggies',8.49,2);

CREATE TABLE `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ;
INSERT INTO `categories` (`name`) VALUES
  ('Pizza'),
  ('Burgers'),
  ('Pasta'),
  ('Salads'),
  ('Desserts');

CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ;
INSERT INTO `users` (`username`, `email`, `password`) VALUES
  ('user1', 'user1@example.com', 'hashed_password1'),
  ('user2', 'user2@example.com', 'hashed_password2'),
  ('user3', 'user3@example.com', 'hashed_password3'),
  ('user4', 'user4@example.com', 'hashed_password4'),
  ('user5', 'user5@example.com', 'hashed_password5');

CREATE TABLE `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_address` varchar(255) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`order_id`)
) ;
INSERT INTO `orders` (`user_id`, `delivery_address`, `total_amount`) VALUES
  (1, '123 Main St', 34.95),
  (2, '456 Elm St', 22.50),
  (3, '789 Oak St', 45.75),
  (4, '101 Pine St', 18.25),
  (5, '202 Maple St', 28.99);

CREATE TABLE `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `food_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ;
INSERT INTO `cart` (`user_id`, `food_id`, `quantity`, `subtotal`) VALUES
  (1, 1, 2, 19.98),
  (2, 3, 1, 11.99),
  (3, 2, 3, 22.47),
  (4, 5, 2, 7.98),
  (5, 4, 1, 5.99);


