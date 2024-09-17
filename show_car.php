<?php include "query.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show car</title>
</head>
<body>
    <a href="insert_page.php">insert</a>
<table>
  <tr>
    <th>cid</th>
    <th>c_name</th>
    <th>c_color</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
    <?php 
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["cid"] . "</td>";
            echo "<td>" . $row["c_name"] . "</td>";
            echo "<td>" . $row["c_color"] . "</td>";
            echo "<td>" . "<a href='edit_page.php?cid=".$row["cid"]."'>edit</a>" . "</td>";
            echo "<td>" . "<a href='delete.php?cid=".$row["cid"]."'>delete</a>" . "</td>";
            echo "</tr>";
        }
    }
    ?>
    </table> 
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</body>
</html>