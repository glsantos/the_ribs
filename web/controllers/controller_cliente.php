<?php

class controllerCliente{

  public function Logar(){

    $nome_usuario = $_POST['txtnome'];
    $senha = $_POST['txtsenha'];

    $cliente_login = new Cliente();

    $cliente_login->nome_usuario=$nome_usuario;
    $cliente_login->senha=$senha;

    $cliente_login->Login($cliente_login);

  }

  public function Cadastrar(){

    $nome_usuario = $_POST['txtnome'];
    $sobrenome = $_POST['txtsobrenome'];
    $rg = $_POST['txtrg'];
    $cpf = $_POST['txtcpf'];
    $usuario = $_POST['txtusuario'];
    $senha = $_POST['txtsenha'];

    $cliente_cadastro = new Cliente();

    $cliente_cadastro->nome_usuario=$nome_usuario;
    $cliente_cadastro->sobrenome=$sobrenome;
    $cliente_cadastro->rg=$rg;
    $cliente_cadastro->cpf=$cpf;
    $cliente_cadastro->usuario=$usuario;
    $cliente_cadastro->senha=$senha;

    if($cliente_cadastro->Cadastro($cliente_cadastro)==true){

        ?>
        <script type="text/javascript">
          alert('Cadastro efetuado com sucesso!!!');
        </script>
        <?php
        header('location:index.php');
    }else{

      ?>
        <script type="text/javascript">
            alert('Erro ao cadastrar!! :(');
        </script>
      <?php
    }

  }

}

?>
