<?php
require 'header.php';

?>
		<div class="container-fluid mt-sm-3">
			<div class="row">
				<div class="col-sm-2">
				<div class="accordion" id="accordionExample">
					<div class="card bg-dark border-primary">
						<div class="card-header" id="headingOne">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  ALUNOS
							</button>
						</h2>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body bg-dark border-primary">
							<ul class="list-group">
								<li class="list-group-item list-group-item-action"><a href="aluno.php">Cadastro</a></li>
								<li class="list-group-item list-group-item-action"><a href="procurarAluno.php">Consulta</a></li>
								<li class="list-group-item list-group-item-action"><a href="#">Alterações</a></li>
							</ul>
						</div>
						</div>
					</div>
					<div class="card bg-dark border-primary">
						<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							MEDIDAS
							</button>
						</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item list-group-item-action"><a href="#">Exemplo A</a></li>
								<li class="list-group-item list-group-item-action"><a href="#">Exemplo B</a></li>
								<li class="list-group-item list-group-item-action"><a href="#">Exemplo C</a></li>
							</ul>
						</div>
						</div>
					</div>
					<div class="card bg-dark border-primary">
						<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							ANÁLISES
							</button>
						</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item list-group-item-action"><a href="#">Exemplo A</a></li>
								<li class="list-group-item list-group-item-action"><a href="#">Exemplo B</a></li>
								<li class="list-group-item list-group-item-action"><a href="#">Exemplo C</a></li>
							</ul>
						</div>
						</div>
					</div>
					</div>
				</div>
				<?php 
				$vendas = array(10,20,30,40,20);
				$custos = array(8,15,37,97,35);
				?>				
				<div class="wapper-col-5">
				<div style="width:500px; background-color: #fff;border-radius: 5px;">
					<canvas id="grafico"></canvas>
				</div>
					<script type="text/javascript" src="Chart.min.js"></script>
					<script type="text/javascript">
						window.onload = function(){
							var contexto = document.getElementById("grafico").getContext("2d");
							var grafico = new Chart(contexto, {
								type:'line',
								data: {
									labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
									datasets: [{
										label:'EXEMPLO A',
										backgroundColor:'#FF0000',
										borderColor:'#FF0000',
										data:[<?php echo implode(',', $vendas );?>],
										fill:false
									}, {
										label:'EXEMPLO B',
										backgroundColor:'#00FF00',
										borderColor:'#00FF00',
										data:[<?php echo implode(',', $custos); ?>],
										fill:false
									}]
								}
							});
						}		
					</script>
					
				</div>
				<div class="col-sm-5">
					
			   </div>
		</div>
        <div class="dropdown-divider"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="width: 18rem; background-color: #4F94CD">
						<img src="assets/images/img01.jpg" class="card-img-top" alt="100">
						<div class="card-body">
							<h5 class="card-title text-white">Equipamentos</h5>
							<p class="card-text">Exemplo</p>
							<a href="#" class="btn btn-warning">Pesquisar</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="width: 18rem; background-color: #4F94CD">
						<img src="assets/images/img02.jpg" class="card-img-top" alt="100">
						<div class="card-body">
							<h5 class="card-title text-white">Medidas</h5>
							<p class="card-text">Exemplo</p>
							<a href="#" class="btn btn-warning">Análises</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="width: 18rem; background-color: #4F94CD">
						<img src="assets/images/img03.png" class="card-img-top" alt="100">
						<div class="card-body">
							<h5 class="card-title text-white">Sobre</h5>
							<p class="card-text">Exemplo</p>
							<a href="#" class="btn btn-warning">Buscar</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="width: 18rem; background-color: #4F94CD">
						<img src="assets/images/academia.jpg" class="card-img-top" alt="100">
						<div class="card-body">
							<h5 class="card-title text-white">Treinos</h5>
							<p class="card-text">Exemplo</p>
							<a href="#" class="btn btn-warning">Pesquisar</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="dropdown-divider"></div>
		<div class="container-fluid mt-sm-1">
			<div class="row">
				<div class="col-sm-12" >
					<div class="jumbotron" style="opacity: 0.7;">
						<h1 class="display-4">Academia Unimar</h1>
						<p class="lead">Galeria</p>
						<div class="img-thumbnail rounded mx-auto">
				      		<img class="img-fluid" src="assets/images/img01.jpg" width="300" height="300">
							<img class="img-fluid" src="assets/images/img01.jpg" width="300" height="300">
							<img class="img-fluid" src="assets/images/img01.jpg" width="300" height="300">
							<img class="img-fluid" src="assets/images/img01.jpg" width="300" height="300">
				   </div>
					</div>
				</div>
			</div>
		</div>

<?php
require 'footer.php';
?>