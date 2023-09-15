<?php

class conexion {
    private $DBHOST;
    private $DBUSER;
    private $DBNAME;
    private $DBPASS;
    private $db_con;

    public function __construct() {
        $this->DBHOST = 'b65aujabhglo7wzrexe5-mysql.services.clever-cloud.com';
        $this->DBUSER = 'ucl7kw88b8xp513r';
        $this->DBNAME = 'b65aujabhglo7wzrexe5';
        $this->DBPASS = 'IVjya5cbfKoBUjntMhDo';
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
