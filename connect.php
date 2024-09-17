<?php 

$sname = "127.0.0.1";
$suname = "oprc";
$pwd = "123456789";
$db_name = "car_db";

$table = "car";

$conn = new mysqli($sname, $suname, $pwd, $db_name);

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
} else {
    echo "success" . "<br>";
}

?>