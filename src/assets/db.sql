DROP TABLE IF EXISTS info;

CREATE TABLE info (
    info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    info_name VARCHAR(50),
    info_last VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    info
VALUES
    (1, 'Voy Llevando', '2023-01-01 00:00:00');

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(50),
    user_lastname VARCHAR(50),
    user_dni VARCHAR(50),
    user_email VARCHAR(50),
    user_phone VARCHAR(50),
    user_address VARCHAR(50),
    user_location VARCHAR(50),
    user_city VARCHAR(50),
    user_pass TEXT,
    user_photo VARCHAR(50) DEFAULT 'default.png',
    user_type INT,
    user_last VARCHAR(50),
    user_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    user (
        user_name,
        user_lastname,
        user_dni,
        user_pass,
        user_type,
        user_created,
        user_last
    )
VALUES
    (
        'Admin',
        'Admin',
        'admin',
        'admin',
        1,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

CREATE TABLE alert (
    alert_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    alert_last VARCHAR(50),
    alert_created VARCHAR(50),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id)
) ENGINE INNODB;

CREATE TABLE tracking (
    tracking_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    tracking_last VARCHAR(50),
    tracking_created VARCHAR(50),
    alert_id INT,
    FOREIGN KEY (alert_id) REFERENCES alert(alert_id)
) ENGINE INNODB;

CREATE TABLE category (
    category_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    category_last VARCHAR(50),
    category_created VARCHAR(50)
) ENGINE INNODB;

CREATE TABLE subcategory (
    subcategory_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    subcategory_last VARCHAR(50),
    subcategory_created VARCHAR(50),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category(category_id)
) ENGINE INNODB;

CREATE TABLE product (
    product_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    product_last VARCHAR(50),
    product_created VARCHAR(50),
    subcategory_id INT,
    alert_id INT,
    FOREIGN KEY (subcategory_id) REFERENCES subcategory(subcategory_id),
    FOREIGN KEY (alert_id) REFERENCES alert(alert_id)
) ENGINE INNODB;