<!DOCTYPE html>
<html>
    <head>
      <title>The Ribs - SteakHouse </title>
      <link rel="stylesheet" type="text/css" href="../css/estilo_galeria_fotos.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="stylesheet" type="text/css" href="../css/estilo.css">
      <link rel="icon" href="img/logo_folha.png">
      <link rel="icon" href="../img/logo_folha.png">

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script type="text/javascript" src="js/script_menu_lateral.js"></script>
      <script type="text/javascript" src="../js/script_menu_lateral.js"></script>
      <script type="text/javascript" src="js/script_menu_fixo.js"></script>
      <script type="text/javascript" src="../js/script_menu_fixo.js"></script>
      <script type="text/javascript" src="js/tabs.js"></script>
      <script type="text/javascript" src="../js/tabs.js"></script>
      <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
      <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
      <script type="text/javascript" src="js/script-slide-show.js"></script>
      <script type="text/javascript" src="../js/script-slide-show.js"></script>
      <script type="text/javascript" src="js/jcarousellite.js"></script>
      <script type="text/javascript" src="../js/jcarousellite.js"></script>
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
            <div class="principal">
                <div class="primeira_faixa">
                    <div class="selecao_unidade">
                      <div class="filtre_unidade">
                        <a>Filtre por Unidade</a>
                      </div>
                      <div class="busque_unidade">
                        <select class="cbo_unidade" name="cbo_unidade">
                            <option value="#" selected><a href="#">Selecione algum restaurante </a></option>

                            <option value="#">SP Capital</option>
                            <option value="#">Jandira City</option>
                        </select>
                        <div class="btn_buscar">
                          <input type="button" name="btn_buscar_unidade" value="BUSCAR">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="segunda_faixa">
                    <div class="espaco_fotos_unidades">
                        <div class="linha_imagem">
                          <div class="img_unidade">

                          </div>
                          <div class="img_unidade">

                          </div>
                          <div class="img_unidade">

                          </div>
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
