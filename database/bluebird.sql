CREATE TABLE account (
  id int NOT NULL,
  username varchar(200) NOT NULL,
  password varchar(200) NOT NULL
);


INSERT INTO account (id, username, password) VALUES
(1, 'admin', 'admin'),
(2, 'Long', '15122000');


CREATE TABLE category (
  CatId int NOT NULL,
  CatName varchar(100) NOT NULL
) ;


INSERT INTO category (CatId, CatName) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Kid');


CREATE TABLE product (
  ProductId varchar(10) NOT NULL,
  ProductName varchar(200) NOT NULL,
  Image varchar(100) NOT NULL,
  Price double precision NOT NULL,
  CatId int NOT NULL,
  ProductDetails varchar(1000) NOT NULL
) ;


INSERT INTO product (ProductId, ProductName, Image, Price, CatId, ProductDetails) VALUES
('1', 'Royal Azure Gown', 'images/royal_azure.jpg', 89.99, 2, 'Fancy Blue gown'),
('2', 'Black T-Shirt', 'images/black_tee.jpg', 39.99, 1, 'Rib finish strips, inverted seams and an adjusted fit. Perfect for a windy summer day.'),
('3', 'Casual Pink Shirt', 'images/pink_casual.jpg', 39.99, 2, 'Casual pink shirt to help with your daily needs. Sometimes simplicity is the best.'),
('4', 'Blue Skinny Jeans', 'images/jeans.jpg', 59.99, 2, 'Blue skinny jeans that goes with almost everything, comes in many sizes.'),
('5', 'Pink Princess Dress', 'images/princess.jpg', 59.99, 3, 'The dream dress of every little girl, transform your daughter into your own little princess, suitable for every important occasion.'),
('6', 'Boys Sailor Outfit', 'images/sailor.jpg', 39.99, 3, 'Quirky sailor outfit for small boys, twice as energetic everyday with bright color clothes!'),
('7', 'Black Kojira Hoodie', 'images/hoodie.jpg', 59.99, 1, 'Black Zipped hoodie branded with stylish KOJIRA for the fashion fan, limited edition.');


ALTER TABLE account
  ADD PRIMARY KEY (id);


ALTER TABLE category
  ADD PRIMARY KEY (CatId);


ALTER TABLE product
  ADD PRIMARY KEY (ProductId);


ALTER TABLE product
  ADD CONSTRAINT foreignkey_product_catid FOREIGN KEY (CatId) REFERENCES category (CatId);
COMMIT;


