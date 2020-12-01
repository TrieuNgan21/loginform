<?php
    $conn = new PDO('mysql:host=localhost;dbname=users', 'chopper', 'qwertyuiop');
    $stmt = $conn->prepare('INSERT INTO user(USERNAME, PASS) VALUES(?,?)');
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$pass);
    
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $stmt->execute();

?>