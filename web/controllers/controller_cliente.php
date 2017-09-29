<?php

class controllerCliente{

  public function Logar(){

    $nome_usuario = $_POST['txtnome'];
    $senha = $_POST['txtsenha'];

    $cliente_login = new ClienteLogar();

    $cliente_login->nome_usuario=$nome_usuario;
    $cliente_login->senha=$senha;

    $cliente_login->Login($cliente_login);

  }

}

?>
