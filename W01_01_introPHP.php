<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>

<h1>Welcome to PHP Basic</h1>
<p>This is a simple PHP application.
</p>
<hr>
<h1 style="color:red">Basic PHP Syntax</h1>
<pre>
        &lt;?p
            echo "Hello World";
        ?&gt;
    </pre>
<h2>Result</h2>
<div style="color: blue;">
    <?php
    echo "Hello World<br>";
    print "<span style=color:green;>Thodsaporn Kukunthod</span>";
    ?>
</div>
<hr>
<h1 style="color:red">PHP Variabies</h1>
<pre>
        &lt;?p
            $greeting = "Hello World";
            echo $greeting;
        ?&gt;
    </pre>
<h2>Result</h2>
<?php
$greeting = "Hello World!";
echo "<span style=color:green;>" . $greeting . "</span>";
?>

<hr>
<h1 style="color:red">Integer Variable Example</h1>
<?php
$age = 20;

echo "<span style=color:blue;>" . "I am " . $age . " years old" . "</span><br>";
echo "<span style=color:blue;>I am  $age  years old</span>";
?>
<hr>
<h1 style="color:red">Calculate with Variables</h1>
<?php
$x = 5;
$y = 4;
echo "<span style=color:blue;>The sum of $x and $y is " . $x + $y . "</span>";
?>
<hr>
<h1 style="color:red"> คำนวนพื้นที่สามเหลี่ยม</h1>
<?php
$h = 25;
$b = 2;
$area = 0.5 * $h * $b;
echo "<span style=color:blue;>" . "พื้นที่ของสามเหลี่ยมคือ " . $area . " ตารางหน่วย" . "</span><br>";
?>
<hr>
<h1 style="color:red">คำนวณอายุจากปีเกิด</h1>
<?php
$born = 2547;
$thisyear = 2568;
$myage = $thisyear - $born;
echo "<span style=color:blue;>" . "อายุของคุณคือ " . $myage . " ปี" . "</span><br>";
?>
<hr>

<h1 style="color:red">IF-Else</h1>
<!-- เกณฑ์ผ่่าการสอบ ต้องได้คะแนน มากกว่า 60 คะแนน -->
<?php
$score = 75;
echo "คะแนนของคุณคือ $score คะแนน<br>";
if ($score > 60) {
    echo "สอบผ่าน";
} else {
    echo "สอบไม่ผ่าน";
}

?>
<h1 style="color:red">Boolean Variable</h1>
<!-- ตรวจสอบว่าคุณเป็นนักศึกษาหรือไม่ -->
<?php

echo "<h3>คุณเป็นนักเรียนใช่หรือไม่</h3>";
$is_student = true;
if (!$is_student) {
    echo "ใช่";
} else {
    echo "ไม่ใช่";
}

?>
<h1 style="color:red">Loop</h1>
<h2>======Loop For=======</h2>
<h3>แสดงตัวเลข 1 ถึง 10</h3>
<?php
$sum = 0;
for ($i = 5; $i <= 9; $i++) {

    $sum += $i;
    echo "$i ";
    if ($i < 9) {
        echo "+ ";
    } else {
        echo "= ";
    }

}
echo "$sum ";
?>
<hr>
<h2>======สูตรคูณแม่ 2=======</h2>
<?php
$j = 1;
while ($j <= 12) {
    echo "2 * $j = ", ($j * 2), "<br>";
    $j++;

}
?>
<hr>
<h2>======สูตรคูณแม่ 2ใส่ตาราง=======</h2>
<table class="table table-bordered table-striped w-auto mx-auto text-center">
    <thead class="table-success">
        <tr>
            <th>ลำดับ</th>
            <th>สูตรคูณ</th>
            <th>ผลลัพธ์</th>
        </tr>
        </theadแ>
    <tbody>
        <?php
        $j = 1;
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>2 x $i</td>";
            echo "<td>", 2 * $i, "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<hr>
<h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
<h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
<hr>
<?php
$fruit = ["Apple", "Banana", "Cherry"];
?>
<h3>แสดงรายการผลไม้ โดยใช้ index</h3>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    echo $fruit[0] . "<br>";
    echo $fruit[1] . "<br>";
    echo $fruit[2] . "<br>";
    ?>
</div>
<br>
<div style="color:red; background-color: lightgray; padding: 10px;">
    <?php
    echo "รายการผลไม้" . "<br>";
    echo "ผลไม้ที่ 1: " . $fruit[0] . "<br>";
    echo "ผลไม้ที่ 3: " . $fruit[2] . "<br>";
    ?>
</div>
<br>
<h4>แสดงรายการผลไม้ โดยใช้ print readable</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    echo "รายการผลไม้: <br>";
    print_r($fruit); // แสดงผลอาเรย์ทั้งหมด  print readable
    echo "<br>";

    ?>
</div>
<br>
<h4>แสดงจำนวนสมาชิกในอาเรย์</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    echo "จำนวนผลไม้: " . count($fruit) . " ชนิด <br>";
    echo "<br>";

    ?>
</div>
<br>
<br>
<h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
    // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
    echo "รายการผลไม้: " . implode(", ", $fruit) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
    echo "<br>";
    ?>
</div>
<br>
<h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
    foreach ($fruit as $fruits) {
        echo "ผลไม้:" . $fruits . "<br>";
    }
    echo "<br>";
    ?>
</div>
<h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
    foreach ($fruit as $fruits) {
        if ($fruits == end($fruit)) {
            echo "$fruits.";
        } else {
            echo "$fruits, ";
        }
    }
    ?>
</div>

<hr>
<h2>สร้างตัวแปรอาเรย์ แบบที่ 2: Associative Array</h2>
<h6>เป็น array ซ้อนกันหลายชุด (Multidimensional array)</h6>
<h6>แต่ละชุดเป็น associative array ที่ระบุชื่อ key ชัดเจน เช่น "name" และ "price"</h6>
<h6>ใช้สำหรับเก็บข้อมูลที่มีความสัมพันธ์กัน key => value เช่น รายการสินค้า</h6>


<?php
// สร้างอาเรย์ของผลไม้ที่มีชื่อและราคา
$products = [
    ["name" => "Apple", "price" => 30],
    ["name" => "Banana", "price" => 20],
    ["name" => "Cherry", "price" => 15]
];
?>
<br>
<h4>แสดงรายการสินค้า ใช้คำสั่ง foreach เพื่อวนลูป</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
    foreach ($products as $product) {
        $totalprice += $product['price'];
        echo "สินค้า:" . $product['name'] . ", ราคา:" . $product['price'] . " บาท, <br>";
    }
    echo "<br>";
    echo "ราคารวมของผลไม้ทั้งหมด:" . $totalprice;
    ?>
</div>

<a href="index.php">Home
</a>
</body>

</html>