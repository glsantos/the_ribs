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
							<div id="corpo-contato">
								<img src="../img/fundo-entre.jpg" alt="">
								<div id="caixa-contato">
									<div class="titulo"> <h1> Entre contato </h1> </div>
									<div class="content-form">
											<form name="frmformulario" class="frmformulario" method="post" action="entre_contato_view.php">
													<div id="nucleo">
															<input type="text" class="txt" name="txt_nome" placeholder="Nome">
															<input type="text" class="txt" name="txt_telefone" placeholder="Telefone">
															<input type="text" class="txt" name="txt_email"  placeholder="Email">

															<div id="radio">
																<input type="radio" class="radio" name="radio_avaliacao">Sugestão
																<input type="radio" class="radio" name="radio_avaliacao">Elogio
																<input type="radio" class="radio" name="radio_avaliacao">Critica
															</div>


															<textarea rows="5" cols="5" name="txt_area" class="txt_area" placeholder="Comentario..."></textarea>
															<input type="submit" class="btn-comentario" name="btn_salvar" value="Enviar Comentario">
													</div>
											</form>
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
