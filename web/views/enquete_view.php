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
