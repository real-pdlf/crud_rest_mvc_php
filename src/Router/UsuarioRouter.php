<?php
use Back\controller\UsuarioController;
require '../../vendor/autoload.php';

// include 'model/Usuario.php';

$n = 'teste';
$usr = new UsuarioController($n);

var_dump($usr);