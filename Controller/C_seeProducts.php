<?php
    require('Model/Connection.php');
    $con = new Conexion();
    $products = $con -> getProducts();
?>