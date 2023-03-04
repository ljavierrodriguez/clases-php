-- Active: 1677845700950@@127.0.0.1@3307
CREATE DATABASE clientsdb
    DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE `clientsdb`.`contacts` (
    id INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(100),
    ingreso DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    deleted_at DATETIME,
    PRIMARY KEY (id)
);

INSERT INTO `clientsdb`.`contacts` (name, email, phone) VALUES ('Fernando Cortes', 'fcortes1@gmail.com', '5555 55 55');
INSERT INTO `clientsdb`.`contacts` (name, email, phone) VALUES ('Luis J. Rodriguez', 'ljavierrodriguez@gmail.com', '5555 55 00');