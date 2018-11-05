create database webdev;
use webdev;
CREATE USER 'bobbie'@'localhost' IDENTIFIED BY 'pug';
GRANT ALL PRIVILEGES ON USER.* TO 'bobbie'@'localhost';
GRANT ALL PRIVILEGES ON webdev.* TO 'bobbie'@'localhost';



create table USER(
USERID int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
Address VARCHAR(70) NOT NULL,
Username VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL
);
