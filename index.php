<?php 	

require_once("config.php");

/*

echo "<strong>Carrega um usuario pelo codigo:</strong> <br>";
$root = new Usuario();
$root->loadbyId(1);
echo $root;

echo "<br><br>";

//////////////////////////////////////////////////////////////

echo "<strong>Carrega lista com todos os usurios da tabela:</strong> <br>";
$lista = Usuario::getList();
echo json_encode($lista);

echo "<br><br>";

/////////////////////////////////////////////////////////////

echo "<strong>Carrega uma lista de uma lista de usuarios buscando pelo login:</strong> <br>";
$search = Usuario::search("jo");
echo json_encode($search);

echo "<br><br>";

/////////////////////////////////////////////////////////////

echo "<strong>Carrega um usuario usando o login e a senha:</strong> <br>";
$usuario = new Usuario();
$usuario->login("vinicius","souza147");
echo $usuario;

echo "<br><br>";

/////////////////////////////////////////////////////////////
/*
echo "<strong>Insert de novo usuario:</strong> <br>";

$aluno = new Usuario("aluno","@lun0");

$aluno->insert();

echo $aluno;

echo "<br><br>";
*/
/////////////////////////////////////////////////////////////


echo "<strong>Alterando um usuario: </strong> <br>";

$usuario = new Usuario();

$usuario->loadById(13);

$usuario->update("professor", "professor");

echo $usuario;

 ?>