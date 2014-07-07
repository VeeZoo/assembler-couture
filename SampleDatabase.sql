/*
Sample Database
phpMyAdmin SQL Dump
L. Booth, M. Marzitelli, V. Zou
*/

-- Table structure for table "fashion_products"

DROP TABLE IF EXISTS fashion_products;

CREATE TABLE fashion_products (
	product_id VARCHAR(10) NOT NULL,
	prod_gender VARCHAR(10) NOT NULL,
	prod_type VARCHAR(10) NOT NULL,
	prod_style VARCHAR(12) NOT NULL,
	prod_color VARCHAR(12) NOT NULL,
	prod_size VARCHAR(10) NOT NULL,
	prod_photo VARCHAR(5) NOT NULL,
	prod_thumb VARCHAR(4) NOT NULL,
	PRIMARY KEY (product_id),
	FOREIGN KEY (prod_style) REFERENCES product_info(prod_style),
	FOREIGN KEY (prod_color) REFERENCES product_colors(prod_color)
);

-- Dumping data for table "fashion_products"

INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS01RS','Womens','Shirt','Tee','Red','Small','WS01R','WS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS01RM','Womens','Shirt','Tee','Red','Medium','WS01R','WS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS01RL','Womens','Shirt','Tee','Red','Large','WS01R','WS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS01BS','Womens','Shirt','Tee','Blue','Small','WS01B','WS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS01BM','Womens','Shirt','Tee','Blue','Medium','WS01B','WS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS01BL','Womens','Shirt','Tee','Blue','Large','WS01B','WS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS02PS','Womens','Shirt','Longsleeve','Pink','Small','WS02P','WS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS02PM','Womens','Shirt','Longsleeve','Pink','Medium','WS02P','WS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS02PL','Womens','Shirt','Longsleeve','Pink','Large','WS02P','WS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS02GS','Womens','Shirt','Longsleeve','Green','Small','WS02G','WS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS02GM','Womens','Shirt','Longsleeve','Green','Medium','WS02G','WS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WS02GL','Womens','Shirt','Longsleeve','Green','Large','WS02G','WS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP01PS','Womens','Pants','Sweat','Pink','Small','WP01P','WP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP01PM','Womens','Pants','Sweat','Pink','Medium','WP01P','WP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP01PL','Womens','Pants','Sweat','Pink','Large','WP01P','WP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP01KS','Womens','Pants','Sweat','Black','Small','WP01K','WP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP01KM','Womens','Pants','Sweat','Black','Medium','WP01K','WP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP01KL','Womens','Pants','Sweat','Black','Large','WP01K','WP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP02BS','Womens','Pants','Jean','Blue','Small','WP02B','WP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP02BM','Womens','Pants','Jean','Blue','Medium','WP02B','WP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP02BL','Womens','Pants','Jean','Blue','Large','WP02B','WP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP02KS','Womens','Pants','Jean','Black','Small','WP02K','WP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP02KM','Womens','Pants','Jean','Black','Medium','WP02K','WP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199WP02KL','Womens','Pants','Jean','Black','Large','WP02K','WP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS01YS','Mens','Shirt','Tee','Yellow','Small','MS01Y','MS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS01YM','Mens','Shirt','Tee','Yellow','Medium','MS01Y','MS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS01YL','Mens','Shirt','Tee','Yellow','Large','MS01Y','MS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS01BS','Mens','Shirt','Tee','Blue','Small','MS01B','MS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS01BM','Mens','Shirt','Tee','Blue','Medium','MS01B','MS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS01BL','Mens','Shirt','Tee','Blue','Large','MS01B','MS01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS02KS','Mens','Shirt','Longsleeve','Black','Small','MS02K','MS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS02KM','Mens','Shirt','Longsleeve','Black','Medium','MS02K','MS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS02KL','Mens','Shirt','Longsleeve','Black','Large','MS02K','MS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS02RS','Mens','Shirt','Longsleeve','Red','Small','MS02R','MS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS02RM','Mens','Shirt','Longsleeve','Red','Medium','MS02R','MS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MS02RL','Mens','Shirt','Longsleeve','Red','Large','MS02R','MS02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP01ES','Mens','Pants','Sweat','Grey','Small','MP01E','MP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP01EM','Mens','Pants','Sweat','Grey','Medium','MP01E','MP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP01EL','Mens','Pants','Sweat','Grey','Large','MP01E','MP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP01BS','Mens','Pants','Sweat','Blue','Small','MP01B','MP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP01BM','Mens','Pants','Sweat','Blue','Medium','MP01B','MP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP01BL','Mens','Pants','Sweat','Blue','Large','MP01B','MP01');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP02KS','Mens','Pants','Jean','Black','Small','MP02K','MP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP02KM','Mens','Pants','Jean','Black','Medium','MP02K','MP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP02KL','Mens','Pants','Jean','Black','Large','MP02K','MP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP02BS','Mens','Pants','Jean','Blue','Small','MP02B','MP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP02BM','Mens','Pants','Jean','Blue','Medium','MP02B','MP02');
INSERT INTO fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb)
 VALUES ('199MP02BL','Mens','Pants','Jean','Blue','Large','MP02B','MP02');

-- Table structure for table "product_info"

DROP TABLE IF EXISTS product_info;

CREATE TABLE product_info (
	prod_style VARCHAR(12) NOT NULL,
	prod_name VARCHAR(20) NOT NULL,
	prod_price DECIMAL(5,2) NOT NULL,
	prod_desc VARCHAR(100) NOT NULL,
	PRIMARY KEY (prod_style)
);

-- Dumping data for table "product_info"

INSERT INTO product_info (prod_style,prod_name,prod_price,prod_desc)
 VALUES ('Tee','Cotton T-Shirt','19.99','100% cotton. Ultra soft. Simple and comfortable.');
INSERT INTO product_info (prod_style,prod_name,prod_price,prod_desc)
 VALUES ('Longsleeve','Long-Sleeved Shirt','29.99','Cotton/polyester blend. For everyday wear. Classic look.');
INSERT INTO product_info (prod_style,prod_name,prod_price,prod_desc)
 VALUES ('Sweat','Cotton Sweatpants','34.99','100% cotton. Breathable, flexible fabric. Warm and durable.');
INSERT INTO product_info (prod_style,prod_name,prod_price,prod_desc)
 VALUES ('Jean','Straight-Leg Jeans','39.99','Best-seller. Pre-washed cotton blend. Sturdy and reliable.');

 
-- Table structure for table "product_colors"

DROP TABLE IF EXISTS product_colors;

CREATE TABLE product_colors (
	prod_color VARCHAR(12) NOT NULL,
	color_hex VARCHAR(7) NOT NULL,
	color_code VARCHAR(1) NOT NULL,
	PRIMARY KEY (prod_color)
);

-- Dumping data for table "product_colors"

INSERT INTO product_colors (prod_color,color_hex,color_code)
 VALUES ('Black','#252525','K');
INSERT INTO product_colors (prod_color,color_hex,color_code)
 VALUES ('Blue','#447FC5','B');
INSERT INTO product_colors (prod_color,color_hex,color_code)
 VALUES ('Green','#91F0A0','G');
INSERT INTO product_colors (prod_color,color_hex,color_code)
 VALUES ('Grey','#C4D4D0','E');
INSERT INTO product_colors (prod_color,color_hex,color_code)
 VALUES ('Pink','#E9A6E7','P');
INSERT INTO product_colors (prod_color,color_hex,color_code)
 VALUES ('Red','#B03B3B','R');
INSERT INTO product_colors (prod_color,color_hex,color_code)
 VALUES ('Yellow','#EAEA50','Y');


-- Table structure for table "orders"

DROP TABLE IF EXISTS orders;

CREATE TABLE orders (
	order_id INT NOT NULL AUTO_INCREMENT,
	credit_card_no VARCHAR(16) NOT NULL,
	credit_card_hash VARCHAR(32) NOT NULL,
	credit_card_type VARCHAR(20) NOT NULL,
	credit_card_expiry VARCHAR(9) NOT NULL,
	cardholder_name VARCHAR(26) NOT NULL,
	order_details VARCHAR(800) NOT NULL,
	order_total DECIMAL(8,2) NOT NULL,
	ship_address VARCHAR(100) NOT NULL,
	ship_city VARCHAR(50) NOT NULL,
	ship_prov VARCHAR(21) NOT NULL,
	ship_postal VARCHAR(6) NOT NULL,
	email VARCHAR(30) NOT NULL,
	PRIMARY KEY (order_id)
);

INSERT INTO orders (credit_card_no,credit_card_hash,credit_card_type,credit_card_expiry,cardholder_name,order_details,order_total,ship_address,ship_city,ship_prov,ship_postal,email)
 VALUES ('XXXXXXXXXXXX1234','e692dacb200e558d9cc08648c9a72c44','American Express','11 / 2017','John Smith Jones','199MS02RLx1 199WP01PSx2','999999.99','123 FAKE ST.','Kalamazoo','Northwest Territories','A1B2C3','test@tester.com');
