<?php
    include_once ("conectorBD.php");
    $con = new ConectorBD;
    $con->conectar();
?>
<html>
<head>
    <title></title>

</head>
<body>
    <h1>Listado de personas</h1>
    <a href="Controllers/PersonaController.php">Lista de personas</a>
</body>
</html>