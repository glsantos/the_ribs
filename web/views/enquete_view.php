<!DOCTYPE html>
<html>
<!-- CHAMANDO HEAD -->
	<head>
		<title>The Ribs - SteakHouse </title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo_enquete.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo_avalie.css">
		<link rel="icon" href="img/logo_folha.png">
		<link rel="icon" href="../img/logo_folha.png">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="js/script_menu_lateral.js"></script>
		<script type="text/javascript" src="../js/script_menu_lateral.js"></script>
		
	</head>
	<body>
		<section id="principal">
			 <section id="main">
				<!-- CHAMANDO MENU LATERAL -->
				  <?php
						require_once('componentes/menu.php');
					?>
				  <section id="conteudo">
						<!-- CHAMANDO CABECALHO -->
						<header id="cabecalho">
										<div id="img-menu">
											<a href="#" class="toggle-nav btn-nav"><img src="../img/menu_icon.png" title="MENU" alt="Menu"></a>
										</div>
										<div id="logo">
											<img src="../img/logo.png" alt="Logo">
										</div>
						</header>	
						<!-- AQUI VAI O SEU CONTEUDO -->
							<div id="faixa-1">
								<div id="img">
									<img src="img/img4.jpg">
								</div>
								<div id="titulo">
									<h1>Enquete Ribs</h1>
								</div>
							</div>
							<div id="corpo-enquete">
								<div id="caixa-pergunta">
									<div class="pergunta">
										<h1>1) O site do The Ribs Está:</h1>
									</div>
									<div  class="alternativas">
										<input type="radio" name="radio" value="um">Pessimo(Dificil de usar)<br>
									</div>
									<div  class="alternativas">
											<input type="radio" name="radio" value="um">Razoavel<br>
									</div>
									<div  class="alternativas">
											<input type="radio" name="radio" value="um">Ótimo<br>
									</div>
									<div  class="alternativas">
											<input type="radio" name="radio" value="um">Atende todos os requisitos do cliente<br>
									</div>

									<div class="btn-enquete">
									Votar
									</div>


								</div>



							</div>

						 <?php
							require_once('componentes/rodape.php');
						?>
				  </section>
			</section>
		</section>

	</body>
</html>
