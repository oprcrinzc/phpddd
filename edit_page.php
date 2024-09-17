<?php 
include "connect.php";
$cid = $_GET['cid'];

$res = $conn->query("SELECT * FROM car WHERE cid='$cid'");
if($res->num_rows == 1){
    $row = $res->fetch_assoc();
    $c_name = $row['c_name'];
    $c_color = $row['c_color'];
} else {
    echo "<script>alert('error');</script>";
    echo "<script>window.location='show_car.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
<body>
    <div class="container">
        <div class=" h3 text-center alert alert-success">editcar</div>
        <form action="edit_system.php" method="post">
            <label>cid</label>
            <input type="text" name="cid" class="form-control" placeholder="...cid" value="<?=$cid?>" required> <br>
            <label>c_name</label>
            <input type="text" name="c_name" class="form-control" placeholder="...c_name" value="<?=$c_name?>" required><br>
            <label>c_color</label>
            <input type="text" name="c_color" class="form-control" placeholder="...c_color" value="<?=$c_color?>" required><br>
            <input type="submit" class="btn btn-success">
            <a href="show_car.php" class="btn btn-danger">ยกเลิก</a>
        </form>
    </div>
</body>
 
</html>
 
