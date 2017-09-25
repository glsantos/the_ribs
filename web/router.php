<?php

  if(isset($_POST['controller'])){

    $controller = $_POST['controller'];

    if(isset($_POST['modo'])){

      $modo = $_POST['modo'];

      switch ($controller) {
        case 'cliente':

          switch ($modo) {
            case 'logar':
            
              $controller_cliente = new controllerCliente();
              $controller_cliente->Logar();

              break;

          }

          case 'verificar_login_cms':
              
              switch ($modo) {
                case 'autenticacao_cms':

                  $controller_login_cms = new ControllerLogin();
                  $controller_login_cms->Autenticar();

                  break;

              }
                
       
      }

    }

  }

?>
