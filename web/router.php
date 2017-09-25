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

          break;

        default:
          # code...
          break;
      }

    }

  }

?>
