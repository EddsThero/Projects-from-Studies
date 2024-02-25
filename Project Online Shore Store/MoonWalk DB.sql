create Table Catalog
(
  ProductID INT NOT NULL Primary Key,
  ProductName Varchar(30) Not Null,
  ProductCost INT not null
);

create Table ShoppingCart
(
  OrderID INT NOT NULL Primary Key,
  OrderName Varchar(50) not Null,
  OrderPrice Int not Null
);

INSERT Catalog(ProductID,ProductName,ProductCost) 
Values
(1,'Nike Air Max',500),
(2,'Nike Infinity Run',600),
(3,'Nike Air Force 1',1000),
(4,'Nike Blazer',800),
(5,'Nike Solay Flip Flops',300),
(6,'Jordan Break Slides',300),
(7,'Air Jordan',800),
(8,'Jordan Max Aura',800),
(9,'Jordan Delta',1000),
(10,'Jordan series',800),
(11,'Adidas Yeezy',2000),
(12,'Adidas Stan smith',900),
(13,'Adidas Ultraboost',900),
(14,'Adidas Slide',300),
(15,'Adidas Superstar',600),
(16,'Puma Long Sleeve Flip Flops',300),
(17,'Puma Smash Buck Trainers',700),
(18,'Puma Terrae Boots',700),
(19,'Puma Deviate Running Shoes',1500),
(20,'Puma Nitro Shoes',1200),
(21,'Vans Classic Sneakers',600),
(22,'Vans Classic Slip-ons',600),
(23,'Vans Sk8 HI',700),
(24,'Vans Boots',1200),
(25,'Vans Cross Strap Flip Flops',400),
(26,'Crocs Classic Flip Flops',300),
(27,'Crocs Salahe Bembury',2000),
(28,'Crocs Original',500),
(29,'Crocs Rainboots',700),
(30,'Crocs Puff Boots',1000),
(31,'DC Net Skate Shoe',700),
(32,'DC Slip on shoe',700),
(33,'DC Open Flip Flops',400),
(34,'DC Walking Boots',1200),
(35,'DC Villian Slip ons',900),
(36,'Converse Run Star',1200),
(37,'Converse Classic Chuck Taylor',600),
(38,'Converse Classic All Star Canvas',600),
(39,'Converse Flyease',1100),
(40,'Converse Weapon CX',1500),
(41,'Heelys Hustle',900),
(42,'Heelys Wowza',1100),
(43,'Heelys Pro 20',900),
(44,'Heelys Voyager',800),
(45,'Heelys Premium 1 LO',1800);

select * from ShoppingCart;


/*create Table ShoppingCart(
 OrderID INT NOT NULL,
 Totalcost INT NUll,
 TotalItems INT Null,
 primary key (OrderID),
 foreign key (ProductID) references catalog(ProductID)
);*/

/*CREATE TABLE ShoppingCart(
    OrderID INT NOT NULL,
    TotalCost Int Null,
    TotalItems Int Null,
    PRIMARY KEY(OrderID),
    FOREIGN KEY(ProductID) REFERENCES catalog(ProductID)
);*/

