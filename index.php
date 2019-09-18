<?php
include_once("config.php");
$rows = mysqli_query($mysqli, "SELECT * FROM users");
?>

<html>
<head>
    <title>Creator</title>
</head>

<body>
    <a href="create.html">You can add new user</a>

    <table>
        <tr>
            <td>Name</td>
            <td>Surname</td>
            <td>Email</td>
            <td>Update</td>
        </tr>
        <?php
        while($row = mysqli_fetch_array($rows)) {
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
