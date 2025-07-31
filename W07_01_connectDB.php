<?php
// connect database ด้วย mysqli

$host = "localhost";
$username = "root";
$password = "";
$database = "db68_product_db";
$dns = "mysql:$host;dbname=$database";

// $conn = new mysqli($host, $username, $password, $database);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connected successfully";
// }

try {
    $conn = new PDO($dns, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "COnnection failed: " . $e->getMessage();

}
?>