<!DOCTYPE html>
<html>
<!-- CHAMANDO HEAD -->
	<?php
		require_once('../head.php');
	?>
	<body>
		<section id="principal">
			 <section id="main">
				<!-- CHAMANDO MENU LATERAL -->
				  <?php
						require_once('componentes/menu.php');
					?>
				  <section id="conteudo">
						<!-- CHAMANDO CABECALHO -->
						<?php
							require_once('componentes/cabecalho.php');
						?>
						<!-- AQUI VAI O SEU CONTEUDO -->
								<div id="corpo">
									<div id="container-imagem">

										<div class="imagem-principal">
											<img src="../img/img3.jpg">
										</div>
										<div class="titulo-principal">
											Nos Avalie!

										</div>
										<div class="subtitulo">
											Dê-nos seu FeedBack
										</div>


									</div>
									<div id="caixa-busca">
											<input type="submit" name="btn_pesquisa" class="btn_pesquisa" value="Pesquisar">
										<input type="text" name="txt_pesquisa" class="txt_pesquisa" value="Tente 'Steak Friday'...">

									</div>
									<div id="container-produtos">
										<div id="filtro">
											<div class="unidades">
												<div class="titulo">
													Unidades
												</div>
												<div class="detalhes-filtro">
													<a href="#">Alphaville</a>
													<a href="#">Jandira</a>
													<a href="#">Itapevi</a>
													<a href="#">Rio de janeiro</a>
												</div>
											</div>
											<div class="nota">
												<div class="titulo">
													Nota
												</div>
												<div class="detalhes-filtro">
													<a href="#">5.0</a>
													<a href="#">4.0</a>
													<a href="#">3.0</a>
													<a href="#">2.0</a>
													<a href="#">1.0</a>
												</div>
											</div>
											<div class="preco">
												<div class="titulo">
													Preço
												</div>
												<div class="detalhes-filtro">
													<p><input type="radio" class="radio" name="radio_avaliacao">Até R$ 10.00</p>
													<p><input type="radio" class="radio" name="radio_avaliacao">Até R$ 20.00</p>
													<p><input type="radio" class="radio" name="radio_avaliacao">Até R$ 40.00</p>
													<p><input type="radio" class="radio" name="radio_avaliacao">Até R$ 100.00</p>
													<p><input type="radio" class="radio" name="radio_avaliacao">Até R$ 10.00</p>



												</div>
											</div>
										</div>
										<div id="produtos">

											<div class="faixa-produtos">
												<div class="imagem-produtos">
													<img src="../img/cu.jpg">
												</div>
												<div class="titulo-produto">
													Cuzcuz com bife
												</div>
												<div class="nota-produto">
													<small>Nota</small>: 8.7/10
												</div>


												<div class="preco-produto">
													R$ 15.00


												</div>
												<div class="descricao-produto">
													<p>Este prato surgiu na Paraiba, muito bom com ovo, contém 10 kg de cuzcuz</p>
													<p>ideal para quem quer engordar</p>


												</div>
												<div class="estrelas">
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
											<div class="faixa-produtos">
												<div class="imagem-produtos">
													<img src="../img/cu.jpg">
												</div>
												<div class="titulo-produto">
													Cuzcuz com bife
												</div>
												<div class="nota-produto">
													<small>Nota</small>: 8.7/10
												</div>


												<div class="preco-produto">
													R$ 15.00


												</div>
												<div class="descricao-produto">
													<p>Este prato surgiu na Paraiba, muito bom com ovo, contém 10 kg de cuzcuz</p>
													<p>ideal para quem quer engordar</p>


												</div>
												<div class="estrelas">
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
