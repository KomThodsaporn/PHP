<?php
require_once 'W07_01_connectDB.php';

$sql = "SELECT * FROM products";

$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    echo "<h2>พบข้อมลในตาราง</h2>";

    $data = $result->fetchAll(PDO::FETCH_NUM);

    echo "$data[0][0]";

    print_r($data);
} else {
    echo "<h2>ไม่พบข้อมลในตาราง</h2>";
}
?>