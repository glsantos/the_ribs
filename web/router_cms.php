<?php

require_once('head.php');

if(isset($_GET['controller_cms'])){

  $controller_cms = $_GET['controller_cms'];

  switch ($controller_cms) {
    case '':

    break;

  }

}

if(isset($_GET['pagina_cms'])){

  $pagina = $_GET['pagina_cms'];

  switch ($pagina) {

    case 'galeria_fotos':

      require_once('views/cms/cms_galeria_fotos.php');
      break;
    case 'fale_conosco':

      require_once('views/cms/entre_em_contato.php');
      break;

    case 'faq':
      require_once('views/cms/faq.php');
      break;

    case 'sobre_nos':
      require_once('views/cms/sobre_view.php');
      break;

    case 'gerenciar_home':
        require_once('views/cms/gerenciar_home.php');
        break;




  }

}

if (isset($_GET['modo'])=="apagar"){

    $id = $_GET['id'];
    require_once('controllers/controller_cliente.php');
    require_once('models/cliente_class.php');


}

?>
