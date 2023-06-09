<?php
require "connection.php";
$sql = "SELECT * FROM records";
$list = $con->query($sql);
$row = $list->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud</title>
</head>
<body>
    <h1>Record</h1>
    <a href="add.php" class='btn1'>add</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th> Name </th>
                <th> Age </th>
                <th> Gender </th>
                <th> Operation </th>

            </tr>
        </thead>
        <tbody>
            <?php do { ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td>
                        <a href="index.php" class='btn2'>Delete</a>
                    </td>

                </tr>
            <?php }while($row = $list->fetch_assoc())?>
        </tbody>
    </table>

</body>
</html>