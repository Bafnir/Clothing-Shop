<?php
class Conexion{
    private $con;

    public function __construct(){
        $this->con = mysqli_connect('localhost','root','','bbdd_mytiendainfoalba');

        if ( mysqli_connect_errno() ) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        }

    }

    public function getProducts(){
        $query = $this->con->query('SELECT * FROM product');
        $result = [];
        
        $i=0;
        while($fila = $query->fetch_assoc()){
            $result[$i] = $fila;
            $i++;
        }

        return $result;
    }

    public function getOrders($id){
        $query = $this->con->query('SELECT * FROM onlineOrder WHERE idClient = '.$id);
        $result = [];
        $i=0;
        while($fila = $query->fetch_assoc()){
            $result[$i] = $fila;
            $i++;
        }

        return $result;
    }

    public function getLineasPedido($id){
        $query = $this->con->query('SELECT * FROM orderLine WHERE orderId = '.$id);
        $result = [];
        $i=0;
        while($fila = $query->fetch_assoc()){
            $result[$i] = $fila;
            $i++;
        }

        return $result;
    }


    public function getPedidoById($id){
        $queryString = 'SELECT * FROM onlineOrder WHERE orderNum = '.$id;
        $result = 0;
        if ($query = $this->con->query($queryString)) {
            $result= $query->fetch_assoc();
        }
        return $result;      
    }

    public function getProductById($id){
        $queryString = 'SELECT * FROM product WHERE id = '.$id;
        $result = 0;
        if ($query = $this->con->query($queryString)) {
            $result= $query->fetch_assoc();
        }
        return $result;      
    }

    public function getClients(){
        $query = $this->con->query('SELECT * FROM clients');
        $result = [];
        
        $i=0;
        while($fila = $query->fetch_assoc()){
            $result[$i] = $fila;
            $i++;
        }

        return $result;
    }
}

?>