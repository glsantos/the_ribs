<?php

  Class Faq{

    public $id_faq;
    public $pergunta;
    public $resposta;
    public $status;

    //Construtor da Classe
      public function __construct(){

          //Inclui o arquivo de conexao com o BD
          require_once('banco_classe.php');

          //Instancia a Classe Mysql_db
          $conexao_bd = new Mysql_db();

          //Chama o metodo conectar para estabelecer a conexão como BD
          $conexao_bd->conectar();
      }

      public function Insert($dados_faq){

          $valores = ("'$dados_faq->pergunta', '$dados_faq->resposta', $dados_faq->status");
          $sql="insert into tbl_faq(pergunta, resposta, status) values($valores);";


          if(mysql_query($sql)){

              header('location:views/cms/faq.php');
          }else {
            echo('deu ruim');
          }

      }
  }

 ?>
