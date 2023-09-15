<?php
    include "../app/add-user.php";

    $addUser = new Users();
    $usern = $_POST['username'];
    $passw = $_POST['password'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    $checkUser = $addUser->showUser($usern);

    if(mysqli_num_rows($checkUser) == 0) {
        echo "201";
        $passwE = sha1(md5($passw));
        $query = $addUser->addUser($usern, $passwE, $edad, $sexo);
    }
    else if(mysqli_num_rows($checkUser) > 0) {
        echo "402";
    }
?>