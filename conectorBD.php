<?php

class ConectorBd {

    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $bd ="parqueadero";
    private $conexion;
    
   
    public function conectar() {
        
        $conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bd);
        
        if ($conexion->connect_errno){
            echo "No se puedo conectar con la base de datos: ".$conexion->connect_error;
            exit();
        }else{
            echo "La conexion a la base de datos fue exitosa.";
        }
        return $conexion;
    }
    //no devuelve nada
    public function consultaRetorno($cadenaSql){
        $datos = $this->conectar()->query($cadenaSql);
        $filas = $datos->fetch_assoc();
        return $filas;    
    }
    
    
}

?>