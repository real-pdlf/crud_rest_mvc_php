<?php
namespace Back\controller;
use Back\model\Usuario;
// use Back\Repository\UsuarioRepository;

class UsuarioController{
    private $repository;

    public function __construct($repo){
        $this->repository = $repo;        
    }

    public function criar_usuario($nome, $email, $desc){
        if (!isset($nome, $email, $desc)){
            http_response_code(400);
            echo json_encode(["erro" => "dados insuficientes para criar usuario"]);
            return;
        }

        $usuario_existe = $this->repository->get_usuario_email($email);
        if (isset($usuario_existe)){
            echo json_encode(["erro" => "ja existe um usuario com este email"]);
            return;
        }

        $usr = new Usuario($nome, $email, $desc);
        $this->repository->criar_usuario($usr);
        return $usr;
    }

}