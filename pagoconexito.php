<?php 
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
if (empty($_SESSION['shoppingCart'])) {
    header('Location: Cart.php');
}

$_SESSION['orderdone']=true;

//Preparamos la conexion a db para crear el pedido.

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bbdd_mytiendainfoalba';

//Fecha en formato sql
function getDatetimeNow() {
    $tz_object = new DateTimeZone('Europe/Paris');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}

$dateorder = getDatetimeNow();

// Probamos a conectar a la base de datos, en caso de error devolvemos mensaje de error
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if (isset($_SESSION['orderfname'], $_SESSION['orderadr'], $_SESSION['ordercity'], $_SESSION['orderzip'], $_SESSION['orderdni'])){
    $idUser = $_SESSION['id'];
    $nameOrder = $_SESSION['orderfname'];
    $zipOrder = $_SESSION['orderzip'];
    $cityOrder = $_SESSION['ordercity'];
    $dniOrder = $_SESSION['orderdni'];
    $adrOrder = $_SESSION['orderadr'];
    $paid = 1;

    $temp = mysqli_query($conn,"INSERT INTO onlineOrder (idClient,date,nameofreceiver,zip,city,paid,dniofreceiver,address) 
    VALUES ('$idUser','$dateorder','$nameOrder','$zipOrder','$cityOrder','1','$dniOrder','$adrOrder')");

    $idPedido = $conn->insert_id;

    echo $idPedido;
    
    //Pedido creado, ahora creamos las lineas de pedido con el carrito.

    require('Controller/C_seeProducts.php');
    foreach ($_SESSION['shoppingCart'] as $pro => $amount) {
        $producto = $con->getProductById($pro);
        $idProducto= $producto['id'];
        echo $idProducto;
        $temp = mysqli_query($conn,"INSERT INTO orderLine (orderId,productId,Amount) 
        VALUES ($idPedido,$idProducto,$amount)");
    }
    

    if(!$temp){
        echo "error";
    }else{
        $_SESSION['shoppingCart'] = array();
        //Pedido creado con exito
        header('Location: ../profile.php');

    }
}
?>