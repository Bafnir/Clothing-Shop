<?php
    require_once('Model/Connection.php');
    $con = new Conexion();
    $products = $con -> getProducts();
?>