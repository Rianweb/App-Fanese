<?php
require "conexao.php";
require "config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Patrimonio</title>
	<!-- Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo BASE_URL ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/bootstrap/css/bootstrap.min.css">
	<!-- sweetalert2 alert -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/pages/style.css">
</head>

<body>



	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="nav-link" href="<?php echo BASE_URL ?>/home">Patrimonio</a>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">

						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarScroll">
							<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

								<li class="nav-item">
									<a class="nav-link" href="<?php echo BASE_URL ?>/home">Página Inicial</a>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										Cadastro
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?php echo BASE_URL ?>/pages/Item">Cadastro de Item</a>
										<a class="dropdown-item" href="<?php echo BASE_URL ?>/pages/Local">Cadastro Local</a>
										<a class="dropdown-item" href="<?php echo BASE_URL ?>/pages/Setor">Setor</a>
									</div>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="<?php echo BASE_URL ?>/pages/consulta">Consulta</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="<?php echo BASE_URL ?>/pages/relatorio">Relatório</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="<?php echo BASE_URL ?>/pages/atualizar">Atualizar</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="<?php echo BASE_URL ?>/sair">Sair</a>
								</li>

							</ul>
						</div>
					</div>
				</nav>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		</nav>

		<?php
		session_start();
		$nivel_necessario = 1;

		// Verifica se não há a variável da sessão que identifica o usuário
		if (!isset($_SESSION['usuario']) && ($_SESSION['nivel'] < $nivel_necessario)) {
			// Destrói a sessão por segurança
			session_destroy();
			// Redireciona o visitante de volta pro login
			header("Location:login.php");
			exit;
		}

		if (isset($_SESSION['usuario']) && isset($_SESSION['nivel'])) {
			$url = isset($_GET['url']) ? $_GET['url'] : "home";
			if (file_exists($url . ".php")) {
				require  dirname(__FILE__) . "/{$url}.php";
			} else {
				require  dirname(__FILE__) . "{$url}.php";
			}
		}
		echo "<pre>";
		var_dump($_SESSION);
		echo "<pre>";
		?>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


	<script>
		$(document).ready(function() {
			$("#botBem").click(function(e) {
				e.preventDefault();
				const dataDados = $("#formBem").serialize();

				// $.post("cadastro_bem", {
				// 	data: dataDados
				// }, function(data) {
				// 	console.log(data);
				// },"json");

				$.ajax({
					url: "cadastro_bem.php",
					method: "POST",
					data: {
						data: dataDados
					},
					success: function(data) {
						console.log(data);
					if (data == 1) {
						Swal.fire({
							position: 'cnter',
							icon: 'success',
							title: 'Cadastrado com Sucesso',
							showConfirmButton: false,
							timer: 1500
						})
						$("#formBem")[0].reset();
					} else {
						Swal.fire({
							position: 'center',
							icon: 'error',
							title: 'Oops...',
							text: "Erro"
						})
					}
				},
				error: function() {
					Swal.fire({
						position: 'center',
						icon: 'error',
						title: 'Oops...',
						text: "Erro de"
					})
					}
				})
			});

		});
	</script>
	
</body>
<?php
session_write_close();
mysqli_close($conn);
?>