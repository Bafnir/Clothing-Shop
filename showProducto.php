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
	<link href="../styles/productstyle.php" rel="stylesheet" type="text/css">
	<link rel="../stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
            <h1><a href="../home.php" style="color:black;"><h1>Inicio</h1></a></h1>
			<a style="color:black;" href="../profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
			<a style="color:black;" href="../Cart.php"><i class="fas fa-shopping-cart"></i>Carrito</a>
			<a style="color:black;" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
		</div>
	</nav>
	<div>
		<div class="center-home">
			<h1>Información de producto</h1>
            <div class="Product">

            <?php
            require('Controller/C_seeProducts.php');
            $producto = $con -> getProductById($idProducto);
			$src = "../".$producto['image_src'];
			echo "<div class='image'>";
            echo "<img src=".$src." alt='Clothing item' width='500' height='500'>";
			echo "</div>";
			echo "<div class='text'>";
            echo "<h2>".$producto['name']."</h2>";
            echo "<br>";
			echo "<p>Color: </p>";
            echo $producto['colour'];
            echo "<br>";
			echo "<p>Descripción: </p>";
            echo $producto['description'];
            echo "<br>";
            echo"<form method='post' action='../addToCart.php/?id=".$producto['id']."'><a href='../addToCart.php/?id=".$producto['id']."'><input class='boton-solo' id='btn-see' type='submit' value='Añadir al carrito'></a></form>";
            echo "</div>";
			?>
            
            </div>
		</div>
</body>

</html>