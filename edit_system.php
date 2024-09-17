<?php
include 'connect.php';
$cid = $_POST['cid'];
$c_name = $_POST['c_name'];
$c_color = $_POST['c_color'];
 
$result = $conn->query("UPDATE car SET c_name = '$c_name', c_color = '$c_color' WHERE cid = '$cid'");
 
 
if ($result) {
    echo "<script>console.log(`'UPDATE car2 SET c_name = '$c_name', c_color = '$c_color' WHERE cid = '$cid'`);</script>";
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');</script>";
    echo "<script>window.location='show_car.php';</script>";
} else {
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
    echo "<script>window.location='show_car.php';</script>";
}
$conn->close();
?>