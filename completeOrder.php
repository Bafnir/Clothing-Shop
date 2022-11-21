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
    <link href="../styles/checkout-form.php" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1><a href="../home.php" style="color:black;">
                    <h1>Home</h1>
                </a></h1>
            <a style="color:black;" href="../profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
            <a style="color:black;" href="../Cart.php"><i class="fas fa-shopping-cart"></i>Carrito</a>
            <a style="color:black;" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
        </div>
    </nav>
    <div class="content">
        <div class="center-home">
            <h1>Completar compra</h1>
            <p>Complete los datos referentes al envío:</p>

            <div class="row">
                <div class="col-75">
                    <div class="container">
                        <form action="/action_page.php">
                            <div class="row">
                                <div class="col-50">
                                    <h3>Dirección de envio</h3>
                                    <label for="fname"><i class="fa fa-use"></i>Nombre completo</label>
                                    <input type="text" id="fname" name="firstname" placeholder="Alejandro Pérez">
                                    <label for="adr"><i class="fa fa-address-card-o"></i>Dirección</label>
                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                    <label for="city"><i class="fa fa-institution"></i>Ciudad</label>
                                    <input type="text" id="city" name="city" placeholder="New York">

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="state">Código postal</label>
                                            <input type="text" id="zip name=" zip" placeholder="02006">
                                        </div>
                                        <div class="col-50">
                                            <label for="zip">DNI</label>
                                            <input type="text" id="zip" name="zip" placeholder="12345678X">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Pago</h3>
                                    <label for="fname">Solo aceptamos pago con paypal</label>
                                    
                            <input type="submit" value="Completar compra" class="btn">
                        </form>
                    </div>
                </div>

                <div class="col-25">
                    <div class="container">
                        <h4>Carrito
                            <span class="price" style="color:black">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                        </h4>
                        <?php
                        $totalPrice = 0;
						require('Controller/C_seeProducts.php');
						foreach($_SESSION['shoppingCart'] as $pro=>$amount){
                            $producto = $con -> getProductById($pro);
							echo"<p><a href='showProducto.php/?id=".$producto['id']."'>". $producto['name'] ."</a> <span class='price'>". $producto['price'] ." x ".$amount."</span></p>";
                            $totalPrice = $totalPrice + ($producto['price']*$amount);
						}
                        echo"<hr>";
                        echo"<p>Total <span class='price' style='color:black'><b>" .$totalPrice."</b></span></p>";
					    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>