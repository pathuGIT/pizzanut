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

