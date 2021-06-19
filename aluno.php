<?php
include 'header.php';


?>
<div class="jumbotron">
<div class="container-fluid">
<h1 class="lead"><strong>CADASTRO DE ALUNOS</strong></h1><br>
    <div class="row justify-center">
        <div class="col-sm-6">
          <form method="POST">
          <div class="form-group">
              <label class="font-weight-bold text-info">NOME:</label>
              <input type="text" class="form-control" id="nome" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label class="font-weight-bold text-info">E-MAIL:</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label class="font-weight-bold text-info">ENDEREÇO:</label>
              <input type="password" class="form-control" id="senha">
            </div>
            <div class="form-group">
              <label class="font-weight-bold text-info">Nº:</label>
              <input type="password" class="form-control" id="senha">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
              <label class="font-weight-bold text-info">TELEFONE:</label>
              <input type="password" class="form-control" id="senha">
            </div>
            <div class="form-group">
              <label class="font-weight-bold text-info">SEXO:</label>
              <select class="form-control" id="tipo">
                <option></option>
                <option>M</option>
                <option>F</option>
              </select>
            </div>
            
            </div>
           
          </form>
          <div class="container-fluid">
          <div class="row">
                <div class="col-sm-6">
                <button type="submit" class="btn btn-primary" id="adicionar">Cadastrar</button>
                <button type="submit" class="btn btn-info" id="editar">Editar</button>
                <button type="submit" class="btn btn-danger" id="excluir">Excluir</button>
                <a type="submit" class="btn btn-success" href="index.php">Voltar</a>
                </div>
                </div>
            </div>
          </div>
       </div>
     </div>
     </div>