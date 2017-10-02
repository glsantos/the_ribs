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

  public function EntrarEmContato(){

    $nome_cliente = $_POST['txtnome'];
    $telefone = $_POST['txttelefone'];
    $email = $_POST['txtemail'];
    $id_classificacao = 1; //TODO: MUDAR ISSO! A PESSOA TEM QUE ESCOLHER CONFORME O ID QUE VIER DO BANCO
    $comentario = $_POST['txtcomentario'];

    $dados_contato = new ContatoCliente();

    $dados_contato->nome_cliente=$nome_cliente;
    $dados_contato->telefone=$telefone;
    $dados_contato->email=$email;
    $dados_contato->id_classificacao=$id_classificacao;
    $dados_contato->comentario=$comentario;

    if($dados_contato->Contato($dados_contato)==true){

        ?>
        <script type="text/javascript">
          alert('Comentário enviado com sucesso!!!');
        </script>
        <?php
        require_once('index.php');
    }else{

      ?>
        <script type="text/javascript">
            alert('Erro ao enviar comentário!! :(');
        </script>
      <?php
      require_once('index.php');
    }

  }

  public function ApagarContato(){

    $id_contato = $_POST['id'];

    $id_contato = new ContatoCliente();

    $id_contato->ApagarContato($id_contato);

  }

}

?>
