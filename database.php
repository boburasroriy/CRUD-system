<?php
global $sql;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CRUD";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "New record created successfully";
} catch(PDOException $e) {
    echo 'It is not connected' .  $e->getMessage();
}
