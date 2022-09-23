<?php
$conn=new mysqli('localhost', 'root', '1001010mM', 'arcadius');

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

session_start();

$id = uniqid("storage");

$date = date("d.m.Y, H:i");

//Check if username exists
$sql="INSERT INTO storage (id, datetime, name, description, action) VALUES ('{$id}', '{$date}', '{$_GET['fullname']}', '{$_POST['inputDescription']}', '{$_POST['inputAction']}')";
$result=$conn->query($sql);

if ($result) {
    header('Location: https://rootk1d.xyz/awi-system/pages/storage.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
} else {
    die("ERROR: ". $sql . "<br><br>". $conn->error);
}


$conn ->close();

?>