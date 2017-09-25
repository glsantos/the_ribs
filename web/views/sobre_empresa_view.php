<html>
	<head>
		<title>Sobre Nós </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo_sobre_empresa.css">
		<script type="text/javascript" src="js/jquery.js"></script>
 		<script>
	     $(document).ready(function(){

	    $("a").click(function(event){
	    var link = $(this);

	    if(link.attr("class").match("esconder"))
	    	$(".conteudo").hide("slow");

	    else
	    	$(".conteudo").show("slow");
				$(".div_principal_titulo1").show("slow");



	    event.preventDefault();

	    });

	    })
 		</script>
	<head>
	<body>

			<header>
				<div id="faixa_menu">
					<h5>Telefone: 4707-7551</h5>
				</div>
				<nav>
					<h1>MENU</h1>
				</nav>
			</header>


			<div class="titulo_slide">
				<div class="title">
							Aqui os diversos sabores da carne
						criam sua experiência inesquecível.
				</div>
				<div id="img">
						<img src="imagens/sobre_empresa.jpg" alt="sobre_empresa">
				</div>
			</div>
			<!-- section conteúdo principal-->
			<section>
				<div class="div_imagens_accordion">
						<div class="imagens_accordion">
								<img class="tamanho_imagem_accordion"src="imagens/icone-missao.png">
								<div class="div_principal_titulo"><a class="exibir"><h1>Missão</h1></a></div>
								<div class="conteudo"><br>"Conquistar a plena</br>
									<br>satisfação dos clientes, colaboradores e</br>
									<br>fornecedores, prestando serviços de qual</br>
									<br>idade conduzindo os negócios de maneira é</br>
									<br>tica e</br>
									 <br>sendo co-responsável pelo desenvolviment</br>
									 <br>o da região."</br></div>
								<div class="div_principal_titulo1"><a class="esconder">Fechar</a></div>
						</div>

						<div class="imagens_accordion">
								<img class="tamanho_imagem_accordion"src="imagens/icone-valores.png">
								<div class="div_principal_titulo"><a class="exibir"><h1>Valores</h1></a></div>
								<div class="conteudo"><br>• Ética Profissional</br>
																			<br>• Respeito</br>
																			<br>• Honestidade</br>
																			<br>• Humildade</br>
								</div>
								<div class="div_principal_titulo1"><a class="esconder">Fechar</a></div>
						</div>

						<div class="imagens_accordion">
								<img class="tamanho_imagem_accordion"src="imagens/icone-visao.png">
								<div class="div_principal_titulo"><a class="exibir"><h1>Objetivo</h1></a></div>
								<div class="conteudo">
									<br>"Ser uma empresa</br>
									<br>profissionalizada que acompanhe</br>
									<br>o desenvolvimento dos negócios e</br>
									<br>permaneça em um processo contínuo</br>
									 <br>de expansão."</br></div>
								<div class="div_principal_titulo1"><a class="esconder">Fechar</a></div>
						</div>

				</div>

				<div class="div_historia">
						<div class="titulo"><h1>Nossa História</h1></div>
						<div class="sla">
						Steve Jobs, Steve Wozniak e Ronald Wayne cria
						ram a Apple no dia primeiro de abril de 1976, em
						, no Vale do Silício que existia na Califórnia. Wozni
						ak era aficionado por eletrônica e tinha criado parte
						das Blue Boxes que existiam na época, uma forma de cracke
						ar as linhas telefônicas que existiam nos Estados Unidos.
						Com esse conhecimento, o trio começou a produzir computador
						es em miniatura em uma garagem, que seriam o primeiro passo pa
						ra revolucionar a tecnologia.
						Antes da Apple, Steve Wozniak trabalhou na HP, emprego que o auxiliou a entender sobre
						engenharia de tecnologia e o colocou como o primeiro desenvolvedor da empresa. Steve Jobs trabalhou
						um tempo como desenvolvedor da Atari, a gigante dos videogames que começou a dominar
						os fliperamas, ao lado de Nolan Bushnell, mas descobriu que seu negócio era fazendo
					 	marketing e auxiliando na criação de produtos, não trabalhando como empregado.
						Os dois, junto com Ronald Wayne, desenvolveram um kit, o Apple I, de eletrônica que permitia que
						o cliente construísse sua própria máquina, inaugurando a empresa e a era de computadores pessoais.
					 	Eles queriam tirar o monopólio da computação das mãos da IBM, a maior empresa na época.
						A empresa, que passou a ser liderada por Steve Jobs, decolou com o lançamento do Apple II em 77,
						ganhando investidores e criando uma máquina que conseguia rodar programas gráficos, jogos eletrônicos
					 	e utilitários. Em ascensão, a equipe da Apple conheceu a Xerox em 1979 e passou a copiar seu sistema
					  de interfaces que funcionava com mouse em novos projetos.
						</div>
				</div>

			</section>

			<footer>
				<h1>rodape</h1>

			</footer>
	</body>
</html>
