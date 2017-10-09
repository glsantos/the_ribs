<!DOCTYPE html>
<html>

  <?php require_once('head.php'); ?>
  <body>
    <?php

    if(isset($_GET['controller'])){

      $controller = $_GET['controller'];

      if(isset($_GET['modo'])){

        $modo = $_GET['modo'];

        switch ($controller) {
          case 'cliente':
         
            require_once('controllers/controller_cliente.php');
            require_once('models/cliente_class.php');

            switch($modo) {
              case 'logar':

                $controller_cliente = new controllerCliente();
                $controller_cliente->Logar();

                break;

              case 'cadastrar':

                $controller_cliente = new controllerCliente();
                $controller_cliente->Cadastrar();
                break;

            }

            case 'cms':

                require('controllers/controller_login_cms.php');
                require('models/login_cms_class.php');

                switch ($modo){

                  case 'autenticacao_cms':

                    $controller_login_cms = new ControllerLogin();
                    $controller_login_cms->Autenticar();

                    break;

                }


          case 'controller_galeria':


                require('controllers/controller_galeria.php');
                require('models/galeria_class.php');

                switch ($modo) {
                  case 'salvar':



                  $controller_galeria = new ControllerGaleria();
                  $controller_galeria->SalvarFoto();

                    break;

                  case 'apagar':
                        $controller_galeria = new ControllerGaleria();
                        $controller_galeria->DeletarImagem();
                    break;
                  case 'alterar':
                     $controller_galeria = new ControllerGaleria();
                     //chamada para o metodo de buscar um registro no banco de dados
                     $controller_galeria->Buscar();
                   break;
                  case 'editar':
                        $controller_galeria = new ControllerGaleria();
                        $controller_galeria->Atualizar();
                      break;
                  case 'ativar':
                        $controller_galeria = new ControllerGaleria();
                        $controller_galeria->Ativar();
                      break;
                  case 'desativar':
                        $controller_galeria = new ControllerGaleria();
                        $controller_galeria->Desativar();
                      break;                          
                

                }


              break;

              case 'controller_faq':

                require('controllers/controller_faq.php');
                require('models/faq_class.php');

                switch ($modo) {
                  case 'salvar':

                      $controller_faq = new controllerFaq();
                      $controller_faq->Cadastrar();

                  break;

                  case 'apagar':

                      $controller_faq = new controllerFaq();
                      @$controller_faq->Apagar($id_faq);
                  break;

                  case 'alterar':
                      $controller_faq = new controllerFaq();
                      @$controller_faq->Buscar();
                  break;

                  case 'editar':
                      $controller_faq = new controllerFaq();
                      $controller_faq->Atualizar();
                  break;

                }
                break;

                  case 'controller_home':

                    require('controllers/controller_home.php');
                    require('models/home_class.php');

                    switch ($modo) {
                      case 'salvar':
                          $controller_home = new ControllerHome();
                          $controller_home->SalvarPassoApasso();
                      break;

                      case 'excluir':
                            $controller_home = new ControllerHome();
                            $controller_home->Deletar();
                        break;
                      case 'alterar':
                              $controller_home = new ControllerHome();
                              $controller_home->Buscar();
                          break;
                      case 'editar':
                              $controller_home = new ControllerHome();
                              $controller_home->Atualizar();
                          break;
                     case 'salvar_valores':
                              $controller_home = new ControllerHome();
                              $controller_home->SalvarFotoValores();
                            break;
                     case 'excluir_dois':
                            $controller_home = new ControllerHome();
                            $controller_home->ExcluirDois();
                            break;
                    case 'alterar_dois':
                            $controller_home = new ControllerHome();
                            $controller_home->AlterarDois();
                            break;
                    case 'editar_dois':
                            $controller_home = new ControllerHome();
                            $controller_home->EditarDois();
                            break;
             
              }
             break;


              case 'controller_enquete':

                  require_once('controllers/controller_enquete.php');
                  require_once('models/enquete_models_class.php');

                   switch($modo){
                      case 'novo':
                      $controller_enquete = new ControllerEnquete();
                      $controller_enquete->Novo();
                      break;
            

                      case 'excluir':

                      $controller_enquete = new ControllerEnquete();
                      $controller_enquete->Apagar();

                      break;

                      case 'alterar':


                      $controller_enquete = new ControllerEnquete();
                      $controller_enquete->Alterar();

                      break;

                      case 'editar':

                      $controller_enquete = new ControllerEnquete();
                      $controller_enquete->Atualizar();

                      break;
                
                   }
                  break;  
             
                
            case 'controller_sobre':

                  require_once('controllers/controller_sobre.php');
                  require_once('models/sobre_model.php');

                   switch($modo){
                      case 'novo':
                      $controller_sobre = new ControllerCadastroSobre();
                      $controller_sobre->Novo();


                    }
                  break;
                
                
              
          } // fechando if $controller
        } // fechando isset $controller

      if($controller == "contato_cliente"){

        require_once('controllers/controller_cliente.php');
        require_once('models/cliente_class.php');

        $controller_cliente = new controllerCliente();
        $controller_cliente->EntrarEmContato();

      }

}
?>
</body>
</html>
