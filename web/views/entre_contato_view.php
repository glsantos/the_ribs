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
							<div id="entre-contato">
								
								<form id="formulario" name="frm_entrecontato" action="index.php" method="post">
									<div class="titulo">
										<h1>Nos avalie!</h1>
									</div>
									<div id="caixa-formulario">
										<input type="text" name="txt_nome" class="input_text_nome" autofocus required placeholder="Digite seu nome">
										<input type="tel" name="txt_telefone" class="input_text_telefone" autofocus required placeholder="Digite o seu telefone">
										<p><input type="email" name="txt_email" class="input_text_email" autofocus required placeholder="Digite o seu email"></p>
										<p><div id="cla">
											<p><h1>Classificação</h1></p>
											<input type="radio" name="radio" value="um">Sugestão<br>
											<input type="radio" name="radio" value="dois">Crítica<br>
											<input type="radio" name="radio" value="três">Elogio<br>
										</div></p>
										<p><textarea name="txt_area" id="txt_area" rows="8" cols="80" placeholder="Digite o seu comentario"></textarea></p>
										<button class="btn-entre" type="submit" >Enviar Comentario</button>
									</div>
								</form>
							</div>
						 <?php
							require_once('componentes/rodape.php');
						?>

				  </section>
			</section>
		</section>
	</body>
</html>
