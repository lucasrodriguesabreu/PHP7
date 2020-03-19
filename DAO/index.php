<?php

require_once("config.php");
/*
//Carrega um usuário
//$jose = new Usuario();
//$jose->loadByID(3);
//echo $jose;
*/
/*
//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);
*/
/*
//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);
*/
/*
//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("joao", "qwerty");
//echo $usuario;
*/
/*
//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;
*/
/*
//Alterar um usuário já existente
$usuario = new Usuario();
$usuario->loadByID(6);
$usuario->update("Carlos", "12345teste");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadByID(6);
$usuario->delete();
echo $usuario;

?>