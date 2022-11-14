<?php
    require_once('Model/Connection.php');
    $con = new Conexion();
    $clients = $con -> getClients();
?>