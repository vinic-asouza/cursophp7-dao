<?php 	

require_once("config.php");

$root = new Usuario();

$root->loadbyId(1);

echo $root;

 ?>