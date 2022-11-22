<?php
//GATHERING PRODUCTS TO SHOW THEM 
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tienda de Ropa</title>
	<link href="../styles/style-home.php" rel="stylesheet" type="text/css">
	<link href="../styles/style.php" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
	<div class="content">
    <div class="center-home">
			<h1>Productos en el carrito</h1>
			<table class="user-table">
				<thead>
					<tr>
						<td>Nombre</td>
                        <td>Precio</td>
                        <td>Color</td>
                        <td>Cantidad</td>
                        <td>Accion</td>
					</tr>
				</thead>
				<tbody>
					<?php
                        $totalPrice = 0;
						require('Controller/C_seeProducts.php');
						foreach($_SESSION['shoppingCart'] as $pro=>$amount){
                            $producto = $con -> getProductById($pro);
							echo"<tr>";
							echo"<td>". $producto['name'] ."</td>";
                            echo"<td>". $producto['price'] ."</td>";
                            echo"<td>". $producto['colour'] ."</td>";
                            $totalPrice = $totalPrice + ($producto['price']*$amount);
                            echo"<td>". $amount ."</td>";
                            echo"<td><form method='post' action='deleteFromCart.php/?id=".$producto['id']."'><a href='deleteFromCart/?id=".$producto['id']."'><input id='btn-see' type='submit' value='Eliminar del carrito'></a></form></td>";
							echo"</tr>";
						}
                        echo"<tr>";
                        echo"<td>Precio Total:</td>";
                        echo"<td>". $totalPrice ."</td>";
                        echo"</tr>";
					?>

				</tbody>
			</table>
            <form method='post' action='completeOrder.php'><a href='completeOrder.php'><input class='boton-solo' id='btn-see' type='submit' value='Completar Compra'></a></form>
		</div>
	</div>
</body>

</html>