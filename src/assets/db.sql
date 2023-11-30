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

-- locker -> hace referencia a las casas donde pueden enviar sus paquetes
CREATE TABLE locker (
    locker_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    locker_name VARCHAR(50),
    locker_popup BOOLEAN DEFAULT FALSE,
    locker_img VARCHAR(50),
    locker_last VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    locker (locker_name, locker_popup)
VALUES
    ('Danbury, CT- USA', 1),
    ('Mastic Beach, NY - USA', 1),
    ('Gualaceo, Azuay - ECU', 0);

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
    ),
    (
        'Admin',
        'Admin',
        'd295336',
        'MV9~GV7Bq~VL',
        1,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

CREATE TABLE shipment (
    shipment_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    shipment_date VARCHAR(50),
    shipment_weight DOUBLE,
    shipment_last VARCHAR(50),
    shipment_created VARCHAR(50),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id)
) ENGINE INNODB;

CREATE TABLE alert (
    alert_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    alert_buyer_name VARCHAR(50),
    alert_carrier_name VARCHAR(50),
    alert_tracking_code VARCHAR(50),
    alert_bill_file VARCHAR(50),
    alert_last VARCHAR(50),
    alert_created VARCHAR(50),
    user_id INT,
    shipment_id INT,
    locker_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (shipment_id) REFERENCES shipment(shipment_id),
    FOREIGN KEY (locker_id) REFERENCES locker(locker_id)
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
    category_name VARCHAR(50),
    category_last VARCHAR(50),
    category_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    category (category_id, category_name)
VALUES
    (1, 'Electrónicos'),
    (2, 'Vestimenta'),
    (3, 'Respuestos'),
    (4, 'Documentos');

CREATE TABLE subcategory (
    subcategory_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    subcategory_name VARCHAR(50),
    subcategory_last VARCHAR(50),
    subcategory_created VARCHAR(50),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category(category_id)
) ENGINE INNODB;

INSERT INTO
    subcategory (subcategory_name, category_id)
VALUES
    ('Laptop', 1),
    ('Celular', 1),
    ('Alexa', 1),
    ('Tablet', 1),
    ('Camaras Profesionales', 1),
    ('Lentes Profesionales', 1),
    ('Speaker', 1),
    ('CD Videojuegos', 1),
    ('Smarth Watch', 1),
    ('Audifonos', 1),
    ('Drone', 1),
    ('Otro', 1),
    ('Zapatos', 2),
    ('Ropa', 2),
    ('Bolsos', 2),
    ('Vitaminas', 2),
    ('Sensores', 3),
    ('Empaques', 3),
    ('Discos / Pistas', 3),
    ('Otros', 3),
    ('Poderes', 4),
    ('Cartas', 4),
    ('Libros', 4),
    ('Otros', 4);

CREATE TABLE product (
    product_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    product_name VARCHAR(50),
    product_last VARCHAR(50),
    product_created VARCHAR(50),
    subcategory_id INT,
    alert_id INT,
    FOREIGN KEY (subcategory_id) REFERENCES subcategory(subcategory_id),
    FOREIGN KEY (alert_id) REFERENCES alert(alert_id)
) ENGINE INNODB;