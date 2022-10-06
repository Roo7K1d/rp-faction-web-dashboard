<?php
include("../db.php");

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

$sql="UPDATE users SET duty = 'off' WHERE id = '{$_POST['userID']}'";
$result=$conn->query($sql);

header('Location: https://rootk1d.xyz/awi-system/pages/duty.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'')


?>