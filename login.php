<?php
session_start();
require 'config.php';

if(isset($_POST['email']) && !empty($_POST['email'])){
	$email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
   

	if($sql->rowCount() > 0){
        $dado = $sql->fetch();
        $_SESSION['codigo'] = $dado['codigo'];
       ?> 
        <script type="text/javascript">window.location.href="index.php";</script>
        <?php
    } else {
        ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                 <strong>Usuário e/ou senha inválidos.</strong> Tente novamente!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
    }
}
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
 <body style="background-color: #36648B">

    <nav class="navbar-fluid navbar-light bg-dark" style="opacity: 0.8;">
        <a class="navbar-brand " href="#">
            <img src="assets/images/logo01.png" width="200" height="40" >
        </a>
    </nav>

       <div class="container" 
                         style="position: absolute;left: 7%;
                                top: 25%;
                                width: 100%;
                                opacity: 0.9;">
         <div class="row">
           <div class="col-sm-4"></div>
           <div class="col-sm-4 mt-lg-5 rounded" style="background-color: #3a5fcd; border: solid 1px #1e90ff;">
            <form method="POST" >
                <div class="form-group text-white">
                 <label for="senha">E-mail</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="assets/images/user.png" width="20" height="20"></span>
                        </div>
                            <input type="text" class="form-control" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group text-white">
                    <label for="password">Senha</label>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img src="assets/images/pass.png" width="20" height="20"></span>
                          </div>
                         <input type="password" class="form-control"  name="senha" placeholder="Senha"  >
                     </div>
                    <button type="submit" class="btn btn-primary text-white btn-block">Entrar</button>
               </form>
              </div>
            </div>
          </div>
        </div>
        <div class="fixed-bottom">
        <footer>
		<div class="d-flex justify-content-center ">
			<p class="lead text-white" >Unimar Fit - Ⓒ Todos os direitos reservados.</p>
		</div>
		</footer>
        </div>
 </body>
 </html>

