<?php
include 'connect.php';
$cid = $_GET['cid'];
 
$result = $conn->query("DELETE FROM car WHERE cid = '$cid'");
 
 
if ($result) {
    echo "<script>alert('delete เรียบร้อย ');</script>";
    echo "<script>window.location='show_car.php';</script>";
} else {
    echo "<script>alert('delete ไม่สำเร็จ');</script>";
    echo "<script>window.location='show_car.php';</script>";
}
$conn->close();
?>