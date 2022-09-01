<?php
define("USER", 'root');
define("PASSWORD", '');
define("DSN", 'mysql:host=localhost;dbname=pdotest');
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $adress = $_POST['adress'];


    echo 'Firstname: ' . $fname . 'Lastname: ' . $lastname . 'Adress: ' . $adress;
    try {
        $pdo = new PDO(DSN, USER, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection succeeded";
    }
    catch (PDOException $e) {
        die("Error ! : " . $e->getMessage());
    }

    $pdo->exec("INSERT INTO client(fname,lastname,adress) VALUES ('$fname','$lastname','$adress')");


    unset($pdo);
}
?>