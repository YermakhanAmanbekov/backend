<?php
    include_once("config.php");

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        if(empty($name) || empty($surname) || empty($email)) {
            if(empty($name)) {
                echo "<p>Name is null</p>";
            }
            if(empty($surname)) {
                echo "<p>Surname is null</p>";
            }
            if(empty($email)) {
                echo "<p>Email is null</p>";
            }
        } else {
            $result = mysqli_query($mysqli, "UPDATE users SET name='$name', surname='$surname', email='$email' WHERE id=$id");
            header("Location: index.php");
        }
    }
    ?>
    <?php
    $id = $_GET['id'];
    $rows = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
    while($row = mysqli_fetch_array($rows))
    {
        $name = $row['name'];
        $surname = $row['surname'];
        $email = $row['email'];
    }
?>
<html>
<head>
    <title>Update</title>
</head>

<body>
    <a href="index.php">Creator</a>
    <form name="form1" method="post" action="update.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Surname</td>
                <td><input type="text" name="surname" value="<?php echo $surname;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
