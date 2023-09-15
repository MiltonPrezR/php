<?php

class conexion {
    private $DBHOST;
    private $DBUSER;
    private $DBNAME;
    private $DBPASS;
    private $db_con;

    public function __construct() {
        $this->DBHOST = 'localhost';
        $this->DBUSER = 'root';
        $this->DBNAME = 'safezone505';
        $this->DBPASS = '';
    }

    public function conectar() {
        $this->db_con = new mysqli($this->DBHOST,$this->DBUSER,$this->DBPASS,$this->DBNAME);

        if($this->db_con->connect_errno){
            echo "No se pudo conectar con la base de datos: ".$this->db_con->connect_error;
            return 0;
        }else{
            return $this->db_con;
        }
    }
    public function cerrarConexion(){
        $this->db_con->close();
    }

    public function consultar($query){
        $result = mysqli_query($this->conectar(),$query);
        $this->cerrarConexion();
        return $result;
    }

}