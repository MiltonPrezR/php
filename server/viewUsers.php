<?php

    include "../app/db_con.php";

    $conexiondb = new conexion();

    $resultado = $conexiondb->consultar("select * from users");

        if(mysqli_num_rows($resultado) > 0) {
            //mostrar los datos

            while($row = mysqli_fetch_assoc($resultado)) {
                echo $row['username']. "|". $row['edad']. "|". $row['id'];
            }
        }
        else echo "401";

?>