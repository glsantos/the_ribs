<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Ribs - SteakHouse </title>
    <link rel="icon" href="img/logo_folha.png">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_avalie.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_cadastro.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_cardapio.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_enquete.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_galeria_fotos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_galeria_principal_cms.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_login.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_pagina_principal_cms.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_sobre_empresa.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_faq.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_adquirir_reserva.css">


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script_menu_lateral.js"></script>
    <script type="text/javascript" src="js/script_menu_fixo.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/script-slide-show.js"></script>
    <script type="text/javascript" src="js/jcarousellite.js"></script>
  </head>
  <body>

    <section id="principal">

      <section id="main">

        <?php
    			require_once('views/componentes/menu.php');
    		?>

        <section id="conteudo">
          <?php

              require_once('views/componentes/cabecalho.php');


              if(isset($_GET['pagina'])){

                  $pagina = $_GET['pagina'];

                  switch ($pagina) {
                    case 'sobre':
                      require_once('views/sobre_empresa/sobre_empresa_view.php');
                      break;

                    case 'reserve':
                      # code...
                      break;

                    case 'enquete':
                      require_once('views/enquete/enquete_view.php');
                      break;

                    case 'cardapio_geral':
                      require_once('views/cardapio_geral/cardapio_geral_view.php');
                      break;

                    case 'cardapio_principal':
                      # code...
                      break;

                    case 'avaliacao_prato':
                      require_once('views/avaliacao/avalie_view.php');
                      break;

                    case 'unidades':
                      # code...
                      break;

                    case 'galeria':
                      require_once('views/galeria_fotos/galeria_fotos_view.php');
                      break;

                    case 'entre_em_contato':
                      require_once('views/entre_em_contato/entre_contato_view.php');
                      break;

                    case 'login_cliente':
                      require_once('views/login_cliente/login_cliente_view.php');
                      break;

                    case 'cadastro_cliente':
                      require_once('views/cadastro_cliente/cadastro_cliente_view.php');
                      break;

                    case 'login_cms':
                      
						require_once('views/login_cms/login_cms_view.php');
						break;
						
                    case 'adquirir_reserva':
                      require_once('views/adquirir_reserva/adquirir_reserva_view.php');
                      break;

                    case 'faq':
                      require_once('views/faq/faq_view.php');
                      break;

                    case 'voltar_inicio':
                      require_once('views/home.php');
                      break;

                  }

              }else {

                require_once('views/home.php');
              }

          require_once('views/componentes/rodape.php');

          ?>

        </section>

      </section>

    </section>


  </body>
</html>
