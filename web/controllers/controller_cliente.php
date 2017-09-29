<?php

class controllerCliente(){

  public function Logar(){

    if ($_SERVER['REQUEST_METHOD']==['POST']) {

      $nome_usuario = $_POST['txtnome'];
      $senha = $_POST['senha'];

      $cliente_login = new ClienteLogar();

      $cliente_login->nome_usuario=$nome_usuario;
      $cliente_login->senha=$senha;

      $cliente_login->Login($cliente_login);

    }

  }

}

?>
