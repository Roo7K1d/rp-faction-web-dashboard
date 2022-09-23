<?php
$conn=new mysqli('localhost', 'root', '1001010mM', 'arcadius');

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

session_start();

$id = uniqid("complaint");

//Check if username exists
$sql="INSERT INTO complaint (id, title, description, username, phone, number, fullname) VALUES ('{$id}', '{$_POST['inputTitle']}', '{$_POST['inputDescription']}', '{$_GET['username']}', '{$_GET['phone']}', '{$_GET['number']}', '{$_GET['fullname']}')";
$result=$conn->query($sql);

if ($result) {
    header('Location: https://rootk1d.xyz/awi-system/pages/complaint.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
} else {
    die("ERROR: ". $sql . "<br><br>". $conn->error);
}


$conn ->close();

?>