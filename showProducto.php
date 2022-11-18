<?php
//GATHERING PRODUCTS TO SHOW THEM 
session_start();
// If the user is not logged in redirect to the login page...
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

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tienda de Ropa</title>
	<link href="../styles/style-home.php" rel="stylesheet" type="text/css">
	<link href="../styles/style.php" rel="stylesheet" type="text/css">
	<link rel="/stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
            <h1><a href="../home.php" style="color:black;"><h1>Home</h1></a></h1>
			<a style="color:black;" href="../profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
			<a style="color:black;" href="../Cart.php"><i class="fas fa-shopping-cart"></i>Carrito</a>
			<a style="color:black;" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
		</div>
	</nav>
	<div class="content">
	</div>

	<div>
		<div class="center-home">
			<h1>Información de producto</h1>
            <div class="Producto">
            <p><?php
            require('Controller/C_seeProducts.php');
            $producto = $con -> getProductById($idProducto);
            echo $producto['name'];
            echo "<br>";
            echo $producto['colour'];
            echo "<br>";
            echo $producto['description'];
            echo "<br>";
            $src = "../".$producto['image_src'];
            echo "<img src=".$src." alt='Clothing item' width='200' height='200'>";
            echo"<form method='post' action='../addToCart.php/?id=".$producto['id']."'><a href='../addToCart.php/?id=".$producto['id']."'><input class='boton-solo' id='btn-see' type='submit' value='Añadir al carrito'></a></form>";
            ?></p>
            
            </div>
		</div>
</body>

</html>