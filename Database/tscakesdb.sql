CREATE DATABASE tscakesdb;
GRANT ALL PRIVILEGES ON tscakesdb.* TO 'fallzur'@'localhost' IDENTIFIED BY 'pass123';
FLUSH PRIVILEGES;

USE tscakesdb;

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);
