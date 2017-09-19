<!DOCTYPE html>
<html>
	<!-- CHAMANDO HEAD -->
		<?php
			require_once('head.php');
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
						<div id="slide">
							<ul>
								<li><img src="img/img1.jpg"></li>
								<li><img src="img/img3.jpg"></li>
								<li><img src="img/img4.jpg"></li>
							</ul>
							<div id="setas">
								<a href="#" id="antes"><img src="img/antes.png"></a>
								<a href="#" id="proximo"><img src="img/proximo.png"></a>
							</div>
						</div>
						<div id="faixa_reserva">
							<div id="titulo-faca">
								<h1>Faça sua reserva</h1>
							</div>
							<div class="main-content">

								<ul class="menu">
									<li id="tab_1" class="active">Primeiro passo</li>
									<li id="tab_2">Segundo passo</li>
									<li id="tab_3">Terceiro passo</li>
								</ul>
								<div class="content tab_1 active">
											 gnissim eget semper vitae, mollis
											 quis enim. Suspendisse suscipit, mi
sit amet efficitur fermentum, eros tellus molestie nibh, vitae vestibulum mi nibh vel lorem. Donec venenatis cursus justo ac cursus.
								</div>
								<div class="content tab_2">
												Praesent quis bibendum dui, in tincidunt odio. Etiam interdum eget quam ac mattis. Cras fringilla consequat volutpat. Quisque tempus nulla nisl, a finibus turpis scelerisque eu. Suspendisse et mauris arcu. Cras nec risus facilisis, iaculis lorem ut, cursus mi. Integer felis arcu, lobortis quis cursus quis, cursus quis urna. Pellentesque at nulla porta, consequat velit ornare, ullamcorper massa. Ut euismod molestie ante sit amet venenatis. Phasellus dapibus semper interdum. Fusce turpis metus, dictum sed quam ac, ultricies condimentum odio.

									Donec pellentesque elit sit amet purus sollicitudin tincidunt non at turpis. Nullam vitae gravida nisi. Integer ac nisi at tellus commodo convallis quis in ante. Sed eu mi ultricies, commodo mi quis, interdum velit. In pharetra ligula ut dapibus facilisis. Nam euismod vestibulum elit, nec imperdiet ante consectetur luctus. Vivamus at lacinia metus, sed commodo quam.
								</div>
								<div class="content tab_3">
												Praesent quis bibendum dui, in tincidunt odio. Etiam interdum eget quam ac mattis. Cras fringilla consequat volutpat. Quisque tempus nulla nisl, a finibus turpis scelerisque eu. Suspendisse et mauris arcu. Cras nec risus facilisis, iaculis lorem ut, cursus mi. Integer felis arcu, lobortis quis cursus quis, cursus quis urna. Pellentesque at nulla porta, consequat velit ornare, ullamcorper massa. Ut euismod molestie ante sit amet venenatis. Phasellus dapibus semper interdum. Fusce turpis metus, dictum sed quam ac, ultricies condimentum odio.

										Donec pellentesque elit sit amet purus sollicitudin tincidunt non at turpis. Nullam vitae gravida nisi. Integer ac nisi at tellus commodo convallis quis in ante. Sed eu mi ultricies, commodo mi quis, interdum velit. In pharetra ligula ut dapibus facilisis. Nam euismod vestibulum elit, nec imperdiet ante consectetur luctus. Vivamus at lacinia metus, sed commodo quam.
								</div>
							</div>
						</div>
						<div id="faixa_valores">
							<div id="imagem-valores">
								<img src="img/banner2.jpg" alt="">
							</div>
							<div id="texto-valores">
								<h1>Cozinhar é nossa PAIXÃO</h1>
								<button class="btn-valores">VEJA NOSSOS VALORES</button>
							</div>
						</div>

						<div id="faixa_galeria">
							<h1>Veja algumas de nossas unidades</h1>
							<div id="lado-direito">
								<div class="foto">
										<img src="img/img-restaurante-1.jpg" alt="">
								</div>
								<div class="foto">
										<img src="img/img-restaurante-1.jpg" alt="">
								</div>
								<div class="foto">
										<img src="img/img-restaurante-1.jpg" alt="">
								</div>
							</div>
							<div id="lado-esquerdo">
								<div class="foto">
										<img src="img/img-restaurante-1.jpg" alt="">
								</div>
								<div class="foto">
										<img src="img/img-restaurante-1.jpg" alt="">
								</div>
								<div class="foto">
										<img src="img/img-restaurante-1.jpg" alt="">
								</div>
							</div>
							<div id="caixa-botao">
								<button class="btn-unidades">Conhecer nossas unidades</button>
							</div>
						</div>

						<div id="faixa_destaque">
							<h1>Pratos mais bem avaliados</h1>
							<div id="carrossel">
								<ul>
									<li>
										<img src="img/prato-1.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
									</li>
									<li>
										<img src="img/prato-2.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
									</li>
									<li>
										<img src="img/prato-3.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
									</li>
									<li>
										<img src="img/prato-4.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
									</li>
									<li>
										<img src="img/prato-5.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
									</li>
								</ul>
							</div>
							<nav id="menu-carrossel">
								<a href="#" class="prev" title="Anterior">&lsaquo;</a>
								<a href="#" class="next" title="Próximo">&rsaquo;</a>
							</nav>


						</div>
						<script>

							$(function() {
									$("#carrossel"). jCarouselLite({
										btnPrev: '.prev',
										btnNext: '.next',
										 visible: 4,
										 auto: 800,
										 scroll: 3,
										 speed: 3000,
										  mouseWheel: true
									})
								})
						</script>
						<?php
						 require_once('componentes/rodape.php');
						 ?>

				  </section>

			</section>

		</section>

	</body>
</html>
