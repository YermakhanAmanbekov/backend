<?php
include_once("config.php");

$rows = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
    <title>Creator</title>
</head>

<body>
    <a href="add.html">You can add new user</a>

    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Email</td>
        </tr>
        <?php
        while($row = mysqli_fetch_array($row)) {
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['surname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href=\"update.php?id=$row[id]\">Update</a> | <a href=\"delete.php?id=$row[id]\">Delete</a></td>";
        }
        ?>
    </table>
</body>
</html>
