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
            //echo('clienteeee');
            require_once('controllers/controller_cliente.php');
            require_once('models/cliente_class.php');

            switch($modo) {
              case 'logar':

                $controller_cliente = new controllerCliente();
                $controller_cliente->Logar();

                break;

            }

            case 'verificar_login_cms':
                  //echo "login cms";
                  require('controllers/controller_login_cms.php');
                  require('models/login_cms_class.php');

                switch ($modo) {

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
					
					echo "aqui";
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

                }


              break;
          }	
				
				
			

               
				
				
				
            }
          }
    

    ?>
</body>
</html>
