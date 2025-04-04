<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dbase";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];


/* Define username and password */
$Username = "Steve";
$Password = "pass";
