<?php
    require('Model/Connection.php');
    $con = new Conexion();
    $clients = $con -> getClients();
?>