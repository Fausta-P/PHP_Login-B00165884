<?php
require_once 'config.php';
session_start();

if (isset($_POST['Submit'])) {
    require_once '../data/DBconnect.php';
    require_once '../src/clean.php';

    $new_user = [
        'Username' => clean($_POST['Username']),
        'Email' => clean($_POST['Email']),
        'Password' => password_hash(clean($_POST['Password']), PASSWORD_DEFAULT)
    ];

    try {
        $sql = sprintf(
            "INSERT INTO users (%s) VALUES (:%s)",
            implode(", ", array_keys($new_user)),
            implode(", :", array_keys($new_user))
        );
        $statement = $conn->prepare($sql);
        $statement->execute($new_user);
        echo "New user created successfully! <br>";
        echo "Click here to <a href='login.php'>Login</a>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>