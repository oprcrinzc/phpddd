<?php
include 'connect.php';
$cid = $_POST['cid'];
$c_name = $_POST['c_name'];
$c_color = $_POST['c_color'];
 
$result = $conn->query("INSERT INTO car(cid,c_name,c_color) values ('$cid','$c_name','$c_color')");
 
if ($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_car.php';</script>";
} else {
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
    echo "<script>window.location='show_car.php';</script>";
}
$conn->close();
?>