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

$idPedido = $params['id'];

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tienda de Ropa</title>
	<link href="../styles/style-home.php" rel="stylesheet" type="text/css">
	<link href="../styles/style.php" rel="stylesheet" type="text/css">
	<link rel="/stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
		<img src="/images/ClothingLogo.png">
            <h1><a href="../home.php" style="color:black;"><h1>Inicio</h1></a></h1>
			<a style="color:black;" href="../profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
			<a style="color:black;" href="../Cart.php"><i class="fas fa-shopping-cart"></i>Carrito</a>
			<a style="color:black;" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
		</div>
	</nav>
	<div>
		<div class="center-home">
			<h1>Información de Pedido</h1>
            <div class="Producto">
            <h2>Datos del pedido:</h2>
            <?php
            
            require('Controller/C_seeProducts.php');
            require('Controller/C_seePedidos.php');
            $pedido = $con -> getPedidoById($idPedido);
            echo "Fecha del pedido: ".$pedido['date'];
            echo "<br>";
            echo "Destinatario: ".$pedido['nameofreceiver'];
            echo "<br>";
            echo "Direccion: ".$pedido['address'].",".$pedido['zip'].",".$pedido['city']."";
            ?>
            <h2>Contenido del pedido:</h2>
            <table class="user-table">
				<thead>
					<tr>
						<td>Nombre</td>
						<td>Color</td>
						<td>Precio</td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
            <p><?php
            $totalPrice = 0;
            $lineasPedido = $con -> getLineasPedido($idPedido);
            foreach($lineasPedido as $lp){
                $producto = $con -> getProductById($lp['productId']);

                echo"<tr>";
							echo"<td>". $producto['name'] ."</td>";
							echo"<td>". $producto['colour'] ."</td>";
							echo"<td>". $producto['price'] ."€</td>";
							echo"<td><img src='../".$producto['image_src']."' alt='Clothing item' width='200' height='200'></td>";
                            $totalPrice = $totalPrice + $producto['price'];
                            echo "<td>Uds: ".$lp['Amount']."</td>";
				echo"</tr>";
            }
            ?></p>
            </tbody>
			</table>
            <?php
                echo "<h3>El precio total de este pedido es de: ".$totalPrice."€</h3>";
            ?>
            </div>
		</div>
</body>

</html>