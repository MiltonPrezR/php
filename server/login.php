<?php

    include '../app/db_con.php';
    $conexiondb = new conexion();
    
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = $conexiondb->consultar("SELECT * FROM `users` WHERE `username` = '$username'");


		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);

			if ($row['password'] == sha1(md5($password))) {

				if ($row['status'] == 'activo') {
					echo "200";
				} else {
					echo "199";
				}
			} else {
            echo "401";
            }
		} else {
            echo "401";
		}
