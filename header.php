<?php
session_start();
require 'config.php';
$id = $_SESSION['codigo'];

?>
<doctype! html>
<html lang="pt-br">
<head>
    <title>Academia Unimar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bs/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/bs/js/bootstrap.bundle.min.js"></script>
</head>
 	<body style="background-color:#36648B;">
		<nav class="navbar navbar-expand-lg  bg-dark text-primary">
			<a class="navbar-brand" href="#"><img class="img-fluid" src="assets/images/logo01.png" width="200" height='50'></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link " href="index.php">Início <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Arquivo</a>
					</li>
					<?php
					 if($_SESSION['id'] == 2){
					    echo "<li class='nav-item dropdown'>
						     <a class='nav-link dropdown-toggle ' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					         Restrito
					         </a>
					         <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
					          <a class='dropdown-item' href='cadusuario.php'>Cadastro de usuários</a>
							  <a class='dropdown-item' href='#'>xxx</a>
							  </div>
							  </li>";
					 }
					 ?>
					
				
				<li class="nav-item">
					<a class="nav-link " href="#" >Quem Somos!</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#" >Ajuda?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="logout.php" >Sair</a>
				</li>
				<li class="nav-item">
                
				</li>
				<li class="nav-item " style="border: solid 1px blue; 
											border-radius: 5px; 
											margin: auto; 
											padding-left: 10px;
											padding-right: 10px;">
					<h6 class="lead"> Bem - Vindo! <?php if($_SESSION['id'] == 2){ echo "Administrador" ;}?></h6>
				</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
					<button class="btn btn-info my-2 my-sm-0 text-white " type="submit">Buscar</button>
					<a href="#">
						<img class="img-fluid mr-sm-2 mx-2" src="assets/images/user.png" width="40" height='40'>
					</a>
				</form>
			</div>
		</nav>
