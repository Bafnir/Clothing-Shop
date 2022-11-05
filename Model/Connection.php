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