<?php
$conn=new mysqli('localhost', 'root', '1001010mM', 'arcadius');

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

$id = uniqid("bee");

//Check if username exists
$sql="INSERT INTO bees (id, name, phone, gang) VALUES ('{$id}', '{$_POST['inputFullName']}', '{$_POST["inputPhone"]}', '{$_POST["inputGang"]}')";
$result=$conn->query($sql);

if ($result) {
    header('Location: https://rootk1d.xyz/awi-system/pages/bees.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
} else {
    die("ERROR: ". $sql . "<br><br>". $conn->error);
}


$conn ->close();

?>