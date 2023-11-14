DROP TABLE IF EXISTS info;

CREATE TABLE info (
    info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    info_name VARCHAR(50),
    info_country VARCHAR(50),
    info_state VARCHAR(50),
    info_city VARCHAR(50),
    info_whatsapp VARCHAR(20),
    info_location TEXT,
    info_desc TEXT,
    info_mision TEXT,
    info_vision TEXT,
    info_last VARCHAR(50)
) ENGINE INNODB;

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(50),
    user_user VARCHAR(50),
    user_pass TEXT,
    user_photo VARCHAR(50) DEFAULT 'default.png',
    user_last VARCHAR(50),
    user_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    user (
        user_id,
        user_name,
        user_user,
        user_pass,
        user_last,
        user_created
    )
VALUES
    (
        1,
        'Administrator',
        'admin',
        'admin',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Root',
        'erazobrothers',
        'ZXa1A%1IC$KtMlb6',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );