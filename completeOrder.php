<?php
//GATHERING PRODUCTS TO SHOW THEM 
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
if (empty($_SESSION['shoppingCart'])) {
    header('Location: Cart.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
        <img src="/images/ClothingLogo.png">
            <h1><a href="../home.php" style="color:black;">
                    <h1>Inicio</h1>
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
                        <form action="payment.php" method="post">
                            <div class="row">
                                <div class="col-50">
                                    <h3>Dirección de envio</h3>
                                    <label for="fname"><i class="fa fa-use"></i>Nombre completo</label>
                                    <input type="text" id="fname" name="fname" placeholder="Nombre y Apellidos" required>

                                    <label for="adr"><i class="fa fa-address-card-o"></i>Dirección</label>
                                    <input type="text" id="adr" name="adr" placeholder="Avenida de España 33 4B" required>

                                    <label for="city"><i class="fa fa-institution"></i>Ciudad</label>
                                    <input type="text" id="city" name="city" placeholder="Albacete" required>

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="zip">Código postal</label>
                                            <input type="text" id="zip" name="zip" placeholder="02006" required>
                                        </div>
                                        <div class="col-50">
                                            <label for="dni">DNI</label>
                                            <input type="text" id="dni" name="dni" placeholder="12345678X"  required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Pago</h3>
                                    <label for="fname">Solo aceptamos pago con paypal</label>
                                    <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png">
                                    <input type="submit" value="Ir al pago" class="btn">
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
                        foreach ($_SESSION['shoppingCart'] as $pro => $amount) {
                            $producto = $con->getProductById($pro);
                            echo "<p><a href='showProducto.php/?id=" . $producto['id'] . "'>" . $producto['name'] . "</a> <span class='price'>" . $producto['price'] . " x " . $amount . "</span></p>";
                            $totalPrice = $totalPrice + ($producto['price'] * $amount);
                        }
                        echo "<hr>";
                        echo "<p>Total <span class='price' style='color:black'><b>" . $totalPrice . "</b></span></p>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
<footer style="position:inherit; max-width:99.9%; background-color: #15264c">
        <div class="footer-content">
            <h3>Clothing Shop ALBA</h3>
            <p>This is a prototype for an university project, here will be the project that me and my team will be developing during this quarter.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
			<p style="max-width:600px">Alejandro Pérez Martínez - Ioan Gabriel Turcas - Judit Rodrigo Carrasco - Aida Córdoba Moreno</p>

        </div>
    </footer>
</html>