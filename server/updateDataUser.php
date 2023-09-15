<?php

    include "../app/add-user.php";
    
    $user = new Users();
    $usern = $_POST['username'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    $checkUser = $user->showUser($usern);
        
    if(mysqli_num_rows($checkUser) > 0) {
        echo "202";
        $User = $user->updateUser($usern, $password, $edad, $sexo);
    }
    else {
        echo "401";
    }

?>