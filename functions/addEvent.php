<?php
include("../db.php");

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

session_start();

$id = uniqid("event");

//Check if username exists
$sql="INSERT INTO events (id, title, start, starttime, end, endtime, description) VALUES ('{$id}', '{$_POST['inputTitle']}', '{$_POST['inputStart']}', '{$_POST['inputStartTime']}', '{$_POST['inputEnd']}', '{$_POST['inputEndTime']}', '{$_POST['inputDescription']}')";
$result=$conn->query($sql);

if ($result) {
    header('Location: https://rootk1d.xyz/awi-system/pages/addevent.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
} else {
    die("ERROR: ". $sql . "<br><br>". $conn->error);
}


$conn ->close();

?>