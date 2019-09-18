<html>
<head>
    <title>Add new user</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    if(empty($name) || empty($surname) || empty($email)) {
        if(empty($name)) {
            echo "Name is NULL ";
        }

        if(empty($surname)) {
            echo "Surname is NULL ";
        }

        if(empty($email)) {
            echo "Email is NULL ";
        }

        echo "<br/><a href='javascript:self.history.back();'>Back</a>";
    } else {
        $rows = mysqli_query($mysqli, "INSERT INTO users(name,surname,email) VALUES('$name','$surname','$email')");
        echo "User added successfully";
        echo "<br/><a href='index.php'>Show Result</a>";
    }
}
?>
</body>
</html>
