<?php

include "db_con.php";
class Users
{
    //Student
    private $id;
    private $username;
    private $password;
    private $edad;
    private $sexo;
    private $status;

    private $conexion;
    
    public function __construct()
    {
        $this->conexion = new conexion();
    }

    //CRUD
    //C
    public function addUser($username, $password, $edad, $sexo)
    {
        return $this->conexion->consultar("insert into users (username, password, edad, sexo, status, tipoUser_idtipoUser, resources_idrecursos, infoUser_idinfoUser)
        values ('$username', '$password', '$edad', '$sexo', 'activo', '1', '1', '1')"); 
    }
        //
    public function showUser($username)
    {
        return $this->conexion->consultar("select * from users where username = '$username'"); 
    }

    //R
    // public function readEstu($codigoStudent){
    //     return $this->conexion->consultar("select * from student_info where numeroCarnet = '$codigoStudent' or name = '$codigoStudent'");
    // }   

    //U
    public function updateUser($username, $password, $edad, $sexo){
        return $this->conexion->consultar("UPDATE users 
        SET password ='$password', edad = '$edad', sexo = '$sexo'
        WHERE username = '$username'");
    }
    // //D
    // public function deleteEstu($codigoStudent, $grado){
    //     return $this->conexion->consultar("DELETE FROM student_info WHERE numeroCarnet = '$codigoStudent' 
    //     AND numeroCarnet in (SELECT student_info_numeroCarnet FROM matricula WHERE grado = '$grado')");
    // }
}
