<?php
    include_once '../Models/PersonaModel.php';
    $persona = new PersonaModel(); 
    $lista = $persona->listar();
    //localhost/CompartirPrueba/
    header("location: /CompartirPrueba/Views/Personas/index.php")
?>

