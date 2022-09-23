<?php

$conn=new mysqli('localhost', 'root', '1001010mM', 'arcadius');

$array = $conn->query("SELECT participants WHERE id = '{$_POST["id"]}';");

die($array);

//$results = $conn->query("UPDATE events SET fullname = '{$_POST["inputFullName"]}', username = '{$_POST["inputName"]}', phone = '{$_POST["inputPhone"]}', number = '{$_POST['inputNumber']}', password = '{$hashedPass}', role = '{$_POST['inputRole']}' WHERE id = '{$_POST["id"]}';");
                                    

if($results == false) {
    die($db->lastErrorMsg());
} else {
    header('Location: https://rootk1d.xyz/awi-system/pages/users.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
}

?>