<?php
require_once('../vendor/autoload.php');
use Back\model\Usuario;

$nome = 'teste';
$usr = new Usuario($n);

var_dump($usr);