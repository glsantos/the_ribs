
			<main>
				<div >
						<div id="faq">
							<div class="titulo_faixa_padrao">
									Dúvidas Frequentes
							</div>
						</div>

				</div>
				<!-- Div Accordion -->
				<div id="container_perguntas">
					<div id="perguntas">
						<div class = "alinhamento">

							<?php

									require_once('controllers/controller_faq.php');

									$controller_faq = new ControllerFaq();

									$rsFaq = $controller_faq->ListarSite();

									$cont=0;

									while($cont<count($rsFaq)){
							 ?>

							<div class="pergunta">
								<div ><a class="exibir"><?php echo($rsFaq[$cont]->pergunta); ?></a></div>
							</div>
							<div class = "resposta">
								<div ><?php echo($rsFaq[$cont]->resposta); ?></div>
							</div>
							<?php
										$cont+=1;
									}
							 ?>
							<div class="fechar_resposta"><a class="esconder">Fechar X </a></div>
						</div>
					</div>
					<div id = "duvidas">
						<div id = "txtDuvidas">
							<h1>Ainda ficou com dúvidas?</h1>
						</div>
						<div> <img id="imagemFaq" src="img/faq.png"> </div>
						<div id = "contatosFaq">
							<p>faq@theribs.com.br</p>
								11 4141-8922
						</div>
					</div>
				</div>
				<!-- Fim accordion -->
			</main>
