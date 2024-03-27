<?php
namespace Back\repository;
use PDO;
use Back\model\Usuario;

class UsuarioRepository{
    private $conn;

    #TODO fazer sanitizacao das querys
    public function __construct($conn){
        $this->conn = $conn;
        #TODO ajustar variavel de conexao com banco
    }

    public function get_usuarios(){
        $query = "SELECT * FROM usuarios";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }

    public function get_usuario_email($email){
        $query = "SELECT * FROM usuarios WHERE email = $email";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function criar_usuario(Usuario $usr){
        $nome = $usr->get_nome();
        $email = $usr->get_email();
        $desc = $usr->get_desc();

        $query = "INSERT INTO usuarios (nome, email, desc) VALUES $nome, $email, $desc";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
}