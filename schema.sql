CREATE TABLE `user` (
  `username` varchar(255),
  `password` varchar(255),
  `role` enum("USER", "ADMIN"),
  `user_ID` int(6),
  PRIMARY KEY (`username`)
);

CREATE TABLE `account_profile` (
  `user_ID` int(6),
  `firstName` varchar(255),
  `lastName` varchar(255),
  `email` varchar(255),
  `address` varchar(255),
  `phone` int(11),
  `username` varchar(255),
  PRIMARY KEY (`user_ID`)
);

CREATE TABLE `payment` (
  `bill_no` int(5),
  `amount` int(255),
  `payment_due` datetime,
  `date` datetime,
  `payment_method` varchar(255),
  `order_ID` int(8),
  PRIMARY KEY (`bill_no`)
);

CREATE TABLE `purchase_order` (
  `order_ID` int(8),
  `order_date` datetime,
  `quantity` int(255),
  `order_number` int(5),
  `product_ID` int(5),
  `supplier_ID` int(11),
  PRIMARY KEY (`order_ID`),
  KEY `FK1` (`product_ID`),
  KEY `FK2` (`supplier_ID`)
);

CREATE TABLE `product` (
  `product_ID` int(5),
  `product_name` varchar(255),
  `unit_price` int(255),
  `unit_desc` varchar(255),
  `status` enum("Active", "Inactive"),
  PRIMARY KEY (`product_ID`)
);

CREATE TABLE `warehouse` (
  `warehouse_ID` int(8),
  `address` varchar(255),
  `user_ID` int(6),
  `product_ID` int(5),
  PRIMARY KEY (`warehouse_ID`),
  KEY `FK1` (`user_ID`),
  KEY `FK2` (`product_ID`)
);

CREATE TABLE `supplier` (
  `supplier_ID` int(11),
  `name` varchar(255),
  `address` varchar(255),
  `phone` int(11),
  `email` varchar(255),
  `payment_method` varchar(255),
  PRIMARY KEY (`supplier_ID`),
  FOREIGN KEY (`supplier_ID`) REFERENCES `purchase_order`(`supplier_ID`)
);
