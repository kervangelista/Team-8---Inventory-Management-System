
CREATE TABLE `user` (
  `username` varchar,
  `password` varchar,
  `role` enum,
  `user_ID` int,
  PRIMARY KEY (`username`)
);

CREATE TABLE `account_profile` (
  `user_ID` int,
  `firstName` varchar,
  `lastName` varchar,
  `email` varchar,
  `address` varchar,
  `phone` int,
  `username` varchar,
  PRIMARY KEY (`user_ID`)
);

CREATE TABLE `payment` (
  `bill_no` int,
  `amount` int,
  `payment_due` datetime,
  `date` datetime,
  `payment_method` varchar,
  `order_ID` int,
  PRIMARY KEY (`bill_no`)
);

CREATE TABLE `purchase_order` (
  `order_ID` int,
  `order_date` datetime,
  `quantity` int,
  `order_number` int,
  `product_ID` int,
  `supplier_ID` int,
  PRIMARY KEY (`order_ID`),
  KEY `FK1` (`product_ID`),
  KEY `FK2` (`supplier_ID`)
);

CREATE TABLE `product` (
  `product_ID` int,
  `product_name` varchar,
  `unit_price` int,
  `unit_desc` varchar,
  `prod_in_stock` enum,
  PRIMARY KEY (`product_ID`)
);

CREATE TABLE `warehouse` (
  `warehouse_ID` int,
  `address` varchar,
  `user_ID` int,
  `product_ID` int,
  PRIMARY KEY (`warehouse_ID`),
  KEY `FK1` (`user_ID`),
  KEY `FK2` (`product_ID`)
);

CREATE TABLE `supplier` (
  `supplier_ID` int,
  `name` varchar,
  `address` varchar,
  `phone` int,
  `email` varchar,
  `payment_method` varchar,
  PRIMARY KEY (`supplier_ID`),
  FOREIGN KEY (`supplier_ID`) REFERENCES `purchase_order`(`supplier_ID`)
);
