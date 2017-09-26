<?php

  if(isset($_GET['controller'])){

    $controller = $_GET['controller'];

    if(isset($_GET['modo'])){

      $modo = $_GET['modo'];

      switch ($controller) {
        case 'cliente':

          switch ($modo) {
            case 'logar':

              $controller_cliente = new controllerCliente();
              $controller_cliente->Logar();

              break;

          }

          case 'verificar_login_cms':
              echo "eee";
              //require('controllers/controller_login_cms');
            //  require('models/login_cms_class.php');
              /*switch ($modo) {
                case 'autenticacao_cms':

                  $controller_login_cms = new ControllerLogin();
                  $controller_login_cms->Autenticar();

                  break;

              }*/

              break;
          }
        }
  }

?>
