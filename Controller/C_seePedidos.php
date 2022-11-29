<?php
    require_once('Model/Connection.php');
    $con = new Conexion();
    function updateAndGetOrders($con,$id){
        return $con -> getOrders($id);
    }

    function getLineasPedidos($con,$id){
        return $con -> getLineasPedidos();
    }
?>