<?php
session_start();
include 'db_config.php';
$con = mysqli_connect('localhost:3308', 'root', 'root', 'animal');
$name = $_POST['user'];
$password = $_POST['password'];
$sql = "Select * from users where email='$_POST[email]'";
$result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);
    if($num == 0) {
        $s = "INSERT INTO users (firstName, lastName,email, password,phoneNumber, gender) VALUES ('$_POST[fName]', '$_POST[lName]', '$_POST[email]', '$_POST[password]', $_POST[phone], '$_POST[gender]')";
        if ($connection->query($s) === TRUE) {
            echo "New record created successfully";
            header("location:indexR.php");
            exit;
        } else {
            echo "Error: " . $s . "<br>" . $connection->error;
        }
    }
    else
    {
        header('location:register.php?failed=true');
    }
?>