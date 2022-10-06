<?php

include("../db.php");

$results = $conn->query("UPDATE mission SET assignee = '{$_GET['fullname']}', status = 'In Bearbeitung' WHERE id = '{$_POST['id']}';");
                                    

if($results == false) {
    die($db->lastErrorMsg());
} else {
    header('Location: ../pages/missions.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'');
}

?>