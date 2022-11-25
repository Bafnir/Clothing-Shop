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

if (isset($_POST['fname'], $_POST['adr'], $_POST['city'], $_POST['city'], $_POST['zip'], $_POST['dni'])){
    $_SESSION['orderfname']=$_POST['fname'];
    $_SESSION['orderdone']=false;
    $_SESSION['orderadr']=$_POST['adr'];
    $_SESSION['ordercity']=$_POST['city'];
    $_SESSION['orderzip']=$_POST['zip'];
    $_SESSION['orderdni']=$_POST['dni'];
} else {
    header('Location: completeOrder.php');
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
                    <h1>Inicio</h1>
                </a></h1>
            <a style="color:black;" href="../profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
            <a style="color:black;" href="../Cart.php"><i class="fas fa-shopping-cart"></i>Carrito</a>
            <a style="color:black;" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
        </div>
    </nav>
    <div class="content">
        <div class="center-home">
            <h1>Pantalla de pago</h1>
            <p>Compruebe que el carrito es correcto</p>
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
            <p>Al hacer click en completar Pago se le redigirá a paypal:</p>
            <form name="formTPV" method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value='usuario-facilitador@business.example.com'>
                <input type="hidden" name="item_name" value="Compra en Tienda de ROPA">
                <input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="return" value="http://localhost/pagoconexito.php/">
                <input type="hidden" name="cancel_return" value="http://localhost/pagocancelado.html/">
                <?php 
                echo"<input type='hidden' name='first_name' value='".$_POST['fname']."'>";
                echo"<input type='hidden' name='address1' value='".$_POST['adr']."'>";
                echo"<input type='hidden' name='city' value='".$_POST['city']."'>";
                echo"<input type='hidden' name='zip' value='".$_POST['zip']."'>";
                echo"<input type='hidden' name='amount' value='".$_SESSION['totalPrice']."'>";
                ?>
                <input type="hidden" name="lc" value="es">
                <input type="hidden" name="country" value="ES">
			<input type="submit" value="Completar Pago" class="btn">
		</form>

        
        </div>
    </div>
</body>

</html>