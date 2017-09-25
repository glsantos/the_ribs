<!DOCTYPE html>
<html>
<!-- CHAMANDO HEAD -->
	<head>
		<title>The Ribs - SteakHouse </title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo_enquete.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo_cardapio.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo_avalie.css">
		<link rel="icon" href="../img/logo_folha.png">
		<script type="text/javascript" src="../js/jquery.js"></script>
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
									<img src="../img/01.jpg">
								</div>
								<div id="titulo">
									<h1>Cardapio Geral</h1>
								</div>
							</div>
							<div id="faixas-filtro">
								<div class="button-filtro-cardapio">steak</div>
								<div class="button-filtro-cardapio">bebidas</div>
								<div class="button-filtro-cardapio">sobremesas</div>
								
								<!-- A ESTILIZAÇÃO DESTE CAMPO DE BUSCA ESTA NO CSS DO AVALIE_VIEW -->
								<div id="caixa-busca">
										<input type="submit" name="btn_pesquisa" class="btn_pesquisa" value="Pesquisar">
										<input type="text" name="txt_pesquisa" class="txt_pesquisa" placeholder="Tente 'Steak Friday'...">
								</div>
							</div>
							<div id="corpo-cardapios-geral">
								<div id="faixa-cardapio-geral">
									<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
										<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
										<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
									<div id="faixa-cardapio-geral">
									<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
										<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
										<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
									<div id="faixa-cardapio-geral">
									<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
										<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
									</div>
										<div class="produto-cardapio-geral">
										<div class="titulo_produto">
											Costela Furiosa
										</div>
										<div class="imagem_produto">
											<img src="../img/costela.jpg">
										</div>
										<div class="avaliacao">
											<div class="estrelas_cardapio">
													<input type="radio" id="vazio" name="estrela" value="" checked>

																<label for="estrela_um"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_um" name="estrela" value="1">

																<label for="estrela_dois"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_dois" name="estrela" value="2">

																<label for="estrela_tres"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_tres" name="estrela" value="3">

																<label for="estrela_quatro"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_quatro" name="estrela" value="4">

																<label for="estrela_cinco"><img src="../img/star.png"></label>
																<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

											</div>

										</div>
										<div class="btndetalhes">
											detalhes
										</div>
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
