<?php

class Usuarios {
	private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname=academia;host=localhost:3306", "root" , "root");
    }

		public function adicionar($nome, $email, $senha) {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO academia.usuarios (nome, email, senha) VALUES (:nome, :email,:senha)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':senha', md5($senha));
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function getNome($email) {
		$sql = "SELECT nome FROM usuarios WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$info = $sql->fetch();

			return $info['nome'];
		} else {
			return '';
		}
	}

	public function getAll() {
		$sql = "SELECT * FROM usuarios";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function editar($nome, $email) {
		if($this->existeEmail($email)) {
			$sql = "UPDATE usuarios SET nome = :nome WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function excluir($id) {
			$sql = "DELETE FROM usuarios WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
	}

	private function existeEmail($email) {
		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
