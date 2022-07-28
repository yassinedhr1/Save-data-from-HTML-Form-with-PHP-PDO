<?php
define("USER", 'root');
define("PASSWORD", '');
define("DSN", 'mysql:host=localhost;dbname=pdotest');
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $adress = $_POST['adress'];


    echo 'Firstname: ' . $fname . 'Lastname: ' . $lastname . 'Subject: ' . $subject;
    try {
        $pdo = new PDO(DSN, USER, PASSWORD);
    }
    catch (PDOException $e) {
        die("Error ! : " . $e->getMessage());
    }

    $pdo->exec("INSERT INTO client(fname,lastname,adress) VALUES ('$fname','$lastname','$adress')");


    unset($pdo);
}
?>