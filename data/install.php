<?php
require "../public/config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("init.sql");
    $connection->exec($sql);
    echo "Database and table users created successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br>SQL: " . $sql;
}
?>