CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
)ENGINE=INNODB;

CREATE TABLE category (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	category VARCHAR(64) NOT NULL,
	category_description VARCHAR(256) NOT NULL
)ENGINE=INNODB;

CREATE TABLE exercise (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	title VARCHAR(128) NOT NULL,
	exercise_description VARCHAR(256) NOT NULL
)ENGINE=INNODB;


# Inserciones de usuarios
INSERT INTO user (username, password, email) VALUES ('admin', 'admin', 'julio.carvajal@outlook.com');
# Inserciones de categorías
INSERT INTO category (category, category_description) VALUES ('Programación', 'Ejercicios de programación básica');
INSERT INTO category (category, category_description) VALUES ('Matemáticas', 'Ejercicios de matemáticas básicas');
INSERT INTO category (category, category_description) VALUES ('Química', 'Ejercicios de química básica');

