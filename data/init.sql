DROP DATABASE IF EXISTS dbase;
CREATE DATABASE dbase;

USE dbase;
CREATE TABLE users (
    UserID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(45) NOT NULL,
    Email VARCHAR(45) NOT NULL,
    Password VARCHAR(255) NOT NULL
);