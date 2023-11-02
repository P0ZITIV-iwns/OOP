CREATE TABLE products
(
    id int PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(50),
    mainname varchar(50),
    title varchar(100),
    price float
);

CREATE TABLE cd
(
    id int PRIMARY KEY AUTO_INCREMENT,
    playlength int,
    product_id int,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE book
(
    id int PRIMARY KEY AUTO_INCREMENT,
    numpages int,
    product_id int,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);