<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}

$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);

//recogemos el parametro
if(isset($url_components['query'])){
    parse_str($url_components['query'], $params);
}else {
    $params['id'] = 0;
}

$idProducto = $params['id'];

$_SESSION['shoppingCart'][$idProducto] = $_SESSION['shoppingCart'][$idProducto] + 1;


header('Location: ../home.php');
?>
