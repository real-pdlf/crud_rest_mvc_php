<?php
class Usuario{
    //att
    private $id, $nome, $email, $desc;

    
    //getters e setters
    public function get_nome(){
        return $this->nome;
    }

    public function set_nome($novo_nome){
        $this->nome = $novo_nome;
    }

    public function get_email(){
        return $this->email;
    }

    public function set_email($novo_email){
        $this->email = $novo_email;
    }

    public function get_desc(){
        return $this->desc;
    }
}