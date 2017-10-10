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

              header('location:router_cms.php?pagina_cms=faq');
          }else {
            echo('deu ruim');
          }

      }

      public function SelectAll(){

          $sql = "select * from tbl_faq order by id_faq desc";
          $select = mysql_query($sql);

          $cont=0;

          while($rs=mysql_fetch_array($select)){

              $listFaq[] = new Faq();
              $listFaq[$cont]->id_faq=$rs['id_faq'];
              $listFaq[$cont]->pergunta=$rs['pergunta'];
              $listFaq[$cont]->resposta=$rs['resposta'];
              $listFaq[$cont]->status=$rs['status'];
              $cont+=1;
          }

          return $listFaq;
      }

      public function SelectOnSite(){

          $sql = "select * from tbl_faq where status = 1";
          $select = mysql_query($sql);

          $cont=0;

          while($rs=mysql_fetch_array($select)){

              $listFaq[] = new Faq();
              $listFaq[$cont]->pergunta=$rs['pergunta'];
              $listFaq[$cont]->resposta=$rs['resposta'];
              $cont+=1;
          }

          return $listFaq;
      }

      public function Delete($deleteFaq){

          $sql="delete from tbl_faq where id_faq = ".$deleteFaq->id_faq.";";

          if(mysql_query($sql)){

            ?><script>alert('FAQ Deletado!');</script><?php
            require_once('views/cms/faq.php');
          }else{
            echo('não foi');
          }

      }

      public function SelectById($buscaFaq){

          $sql="select * from tbl_faq where id_faq = ".$buscaFaq->id_faq;
          $select = mysql_query($sql);

          if($rs=mysql_fetch_array($select)){

              $listFaq = new Faq();

              $listFaq->id_faq=$rs['id_faq'];
              $listFaq->pergunta=$rs['pergunta'];
              $listFaq->resposta=$rs['resposta'];
              $listFaq->status=$rs['status'];


              return $listFaq;
          }
      }

      public function Update($faq){

          $sql = "update tbl_faq set  pergunta = '".$faq->pergunta."',
                                      resposta = '".$faq->resposta."',
                                      status = ".$faq->status."
                                      where id_faq = ".$faq->id_faq;

          if(mysql_query($sql)){

              ?><script>alert('FAQ Atualizado!');</script><?php
              require_once('views/cms/faq.php');
          }else{
              echo('não foi');
          }
      }
  }

 ?>
