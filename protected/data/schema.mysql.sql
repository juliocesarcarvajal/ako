CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
)ENGINE=INNODB;

INSERT INTO user (username, password, email) VALUES ('admin', 'admin', 'julio.carvajal@outlook.com');

