<?php

use PDO;

class UsuarioRepository{
    private $conn;

    public function __construct()
    {
    }


    public function get_usuarios(){
        $query = "SELECT * FROM usuarios";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
}