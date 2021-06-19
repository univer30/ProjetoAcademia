<?php require 'header.php'; ?>
<div class="container">
	<?php
	require 'classes/usuarios.class.php';
	$u = new Usuarios();
	if(isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];

		if(!empty($nome) && !empty($email) && !empty($senha)) {
			if($u->adicionar($nome, $email, $senha)) {
				?>
				<div class="alert alert-success">
					<strong>Parabéns!</strong> Cadastrado com sucesso! 
          <a href="login.php" class="alert-link">Faça o login agora</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
				</div>
				<?php
			} else {
				?>
				<div class="alert alert-warning">
					Este usuário já existe! 
          <a href="login.php" class="alert-link">Faça o login agora!</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
				</div>
				<?php
			}
		} else {
			?>
			<div class="alert alert-warning">
				Preencha todos os campos!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<?php
		}

	}
	?>
	<div class="container">
	<div class="jumbotron mt-lg-3">
	<form method="POST">
		<h2 class="text-primary">CADASTRO DE USUÁRIOS</h2>
		<div class="row">
			<div class="col-sm-5">
				<div class="form-group">
					<label for="email">Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5">
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" name="email" id="email" class="form-control" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" name="senha" id="senha" class="form-control" />
				</div>
			</div>
		</div>
		<input type="submit" value="Cadastrar" class="btn btn-info" />
	</form>
    </div>
</div>
</div>