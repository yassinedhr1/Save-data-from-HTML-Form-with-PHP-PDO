<?php
define("USER", 'root');
define("PASSWORD", '');
define("DSN", 'mysql:host=localhost;dbname=pdotest');
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];


    echo 'Firstname: ' . $fname . 'Lastname: ' . $lastname . 'Subject: ' . $subject;
    try {
        $pdo = new PDO(DSN, USER, PASSWORD);
    }
    catch (PDOException $e) {
        die("Error ! : " . $e->getMessage());
    }

    $pdo->exec("INSERT INTO client(prenom,nom,adresse) VALUES ('$fname','$lastname','$subject')");


    unset($pdo);
}
?>