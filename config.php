<?php
    $id = 0;
    $name = '';
    $surname = '';
    $email = '';

    $mysqli = mysqli_connect('localhost', 'root', '', 'hw1');
    $res = mysqli_query($mysqli, "SELECT * FROM users");
    //ADD
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $newId = random_int(0, 10000);
        $add = "INSERT INTO users (id, name, surname, email) VALUES ('$newId', '$name', '$surname', '$email')";
        mysqli_query($mysqli, $add);
        header('location: main.php');
    }
