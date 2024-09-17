<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลนักเรียน</title>
</head>
<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
<body>
    <div class="container">
        <div class=" h3 text-center alert alert-success">เพิ่มข้อมูล car</div>
        <form action="insert_system.php" method="post">
            <label>cid</label>
            <input type="text" name="cid" class="form-control" placeholder="...cid" required> <br>
            <label>c_name</label>
            <input type="text" name="c_name" class="form-control" placeholder="...c_name" required><br>
            <label>c_color</label>
            <input type="text" name="c_color" class="form-control" placeholder="...c_color" required><br>
            <input type="submit" class="btn btn-success">
            <a href="show_car.php" class="btn btn-danger">ยกเลิก</a>
        </form>
    </div>
</body>
 
</html>
 