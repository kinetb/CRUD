<?php
require "connection.php";

if(isset($_POST['add'])){
    $name = $_POST['Fname'];
    $age = $_POST['Age'];
    $gender = $_POST['Gender'];
    $sql = "INSERT INTO `records`(`name`, `age`, `gender`) VALUES ('$name', '$age', '$gender')";
    $con->query($sql);
    echo "goods";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add</title>

</head>
<body>
    <h1>Add Record</h1>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="Fname" required>
        <label>Age</label>
        <input type="number" name="Age" required>
        <label>Gender</label>
        <input type="text" name="Gender" required>
        <br><br>
        <button type="submit" name="add" class="add">Submit</button>
        <br>
        
    </form>
    <br>
    <a href="index.php" class="back">Back</a>


</body>
</html>