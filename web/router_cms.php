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

    case 'gerenciar_home':
        require_once('views/cms/gerenciar_home.php');
          break;    
          
  }

}

?>
