<?php

$conn=new mysqli('localhost', 'root', '1001010mM', 'arcadius');

$results = $conn->query("UPDATE bees SET name = '{$_POST["inputFullName"]}', phone = '{$_POST["inputPhone"]}', gang = '{$_POST["inputGang"]}' WHERE id = '{$_POST["id"]}';");
                                    

if($results == false) {
    die($db->lastErrorMsg());
} else {
    header('Location: https://rootk1d.xyz/awi-system/pages/bees.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
}

?>