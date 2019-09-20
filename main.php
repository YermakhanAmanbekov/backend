<?php
    include('config.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users list</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>surname</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($rows = mysqli_fetch_array($res)) { ?>
                <tr>
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['surname'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><a href="">edit</a></td>
                    <td><a href="">delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br><br><br><br>
    <form action="config.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname">
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <br>
        <button type="submit" name="save">Save</button>
    </form>
</body>
</html>