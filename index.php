<?php

require_once("config.php");

$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);
//carrega um usuario
//$root = new Usuario();

//$root->loadbyId(9);

//echo $root;

//carrega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("us");

//echo json_encode($search);

//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","123456");

echo $usuario;


 ?>
