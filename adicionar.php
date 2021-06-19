<?php
require 'config.php';
require 'classes/usuarios.class.php';
$u = new Usuarios();

if(!empty($_POST['email'])){
    $nome = $_POST['nome'];
	$email = $_POST['email'];
    $senha = $_POST['senha'];
    
   
   $u->adicionar($nome, $email, $senha);

    header("Location: index.php");
}
?>