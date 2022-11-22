<?php

include_once '../conectorBD.php';
class PersonaModel {
    
    private $con;
    
    public function __construct(){
    
        $this->con = new ConectorBd();
        
    }
    
    public function listar(){
        $cadenaSql = "select * from personas";
        $filas = $con->consultaRetorno($cadenaSql);
        return $filas;
    }
    
    function getCon() {
        return $this->con;
    }

    function setCon($con) {
        $this->con = $con;
    }


}
?>

