<?php
include("../db.php");

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

session_start();

$id = uniqid("car");

//Check if username exists
$sql="INSERT INTO cars (id, plate, owner) VALUES ('{$id}', '{$_POST['inputPlate']}', '{$_POST['inputOwner']}')";
$result=$conn->query($sql);

if ($result) {
    header('Location: https://rootk1d.xyz/awi-system/pages/cars.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
} else {
    die("ERROR: ". $sql . "<br><br>". $conn->error);
}


$conn ->close();

?>