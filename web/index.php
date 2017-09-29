<!DOCTYPE html>
<html>
  <?php require_once('head.php'); ?>
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

                    case 'cadastro':
                      require_once('views/cadastro_cliente/home.php');
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
