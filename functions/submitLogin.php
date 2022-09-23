<?php

$conn=new mysqli('localhost', 'root', '1001010mM', 'arcadius');

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

//Check if username exists
$sql="SELECT * FROM users WHERE username = '". $_POST['inputUsername'] . "'";
$result=$conn->query($sql);

if ($result) {

    if (mysqli_num_rows($result)==0) {

        //Username doesn't exist

         header("Location: ../login.php");

    } else {

        //Username exists

        $result = mysqli_fetch_array($result);

        if(password_verify($_POST['inputPassword'], $result['password']) == TRUE) {

            //Credentials are correct


            ini_set('session.cookie_samesite', 'None');
session_set_cookie_params(['samesite' => 'None']);
header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"'); 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
session_start();
        

            $_SESSION['id']=$result['id'];
            $_SESSION['username']=$result['username'];
            $_SESSION['fullname']=$result['fullname'];
            $_SESSION['role']=$result['role'];
            $_SESSION['birthday']=$result['birthday'];
            $_SESSION['usersince']=$result['usersince'];
            $_SESSION['phone']=$result['phone'];
            $_SESSION['number']=$result['number'];

            header("Location: https://rootk1d.xyz/awi-system/index.php?id=" . $result['id'] ."&username=" . $result['username'] ."&fullname=" . $result['fullname'] ."&role=" . $result['role'] ."&birthday=" . $result['birthday'] ."&usersince=" . $result['usersince'] ."&phone=" . $result['phone'] ."&number=" . $result['number'] ."");
            
        } else {

            //Wrong password
            header("Location: https://rootk1d.xyz/awi-system/login.php");
        }

    }

} else {
    die("ERROR: ". $sql . "<br><br>". $conn->error);
}


$conn ->close();

?>