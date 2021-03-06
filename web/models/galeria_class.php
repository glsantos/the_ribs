<?php

class Galeria{

    public $id_foto;
    public $id_unidade;
    public $imagem_unidade;
    public $nome_unidade;
    public $status;
    
    //Construtor da Classe
      public function __construct(){

          //Inclui o arquivo de conexao com o BD
          require_once('models/banco_classe.php');

          //Instancia a Classe Mysql_db
          $conexao_bd = new Mysql_db();

          //Chama o metodo conectar para estabelecer a conexão como BD
          $conexao_bd->conectar();


      }




      //Metodo para Inserir um Novo Registro
      public function Insert($cadastro_foto){

      $sql="insert into tbl_galeria_fotos (id_unidade, imagem_unidade, status)values('".$cadastro_foto->id_unidade."',
                            '".$cadastro_foto->imagem_unidade."',
                            0
                            )";
          if(mysql_query($sql)){
             return 'ok';
          }else{
              echo("erro no script de insert no banco de dados <br> Erro: </br>".mysql_error());
          }
      }
         public function SelecionarTodasImagens(){

             $sql="select uni.nome_unidade, gal.imagem_unidade, gal.status, uni.id_unidade, gal.id_galeria_fotos
                  from tbl_unidades as uni
                  inner join tbl_galeria_fotos as gal
                  on uni.id_unidade = gal.id_unidade;";
              
     		    $select = mysql_query($sql);

             $cont=0;

             while($rs=mysql_fetch_array($select)){

                 $listImagens[] = new Galeria();

                 $listImagens[$cont]->id_foto=$rs['id_galeria_fotos'];
                 $listImagens[$cont]->id_unidade=$rs['id_unidade'];
                 $listImagens[$cont]->nome_unidade=$rs['nome_unidade'];
                 $listImagens[$cont]->status=$rs['status'];
                 $listImagens[$cont]->imagem_unidade=$rs['imagem_unidade'];
                 $cont+=1;

             }


             return $listImagens;

         }


         public function ApagarImagem($galeria_class){




           $sql="delete from tbl_galeria_fotos where id_galeria_fotos=".$galeria_class->id_foto;

          if(mysql_query($sql)){
              require_once('views/cms/cms_galeria_fotos.php');
          }else{
            echo("erro no script do metodo Apagar Imagem no banco de dados <br> Erro: </br>".mysql_error());
          }



        }

        //Metodo para Selecionar Registro pelo ID
        public function SelecionarPorId($galeria_class){

            $sql="
            select uni.nome_unidade, gal.imagem_unidade, uni.id_unidade, gal.id_galeria_fotos
            from tbl_unidades as uni
            inner join tbl_galeria_fotos as gal
            on uni.id_unidade = gal.id_unidade
            where id_galeria_fotos=".$galeria_class->id_foto;

            $select = mysql_query($sql);


            if($rs=mysql_fetch_array($select)){

                $listGaleria = new Galeria;


                $listGaleria->id_foto=$rs['id_galeria_fotos'];
                $listGaleria->id_unidade=$rs['id_unidade'];
                $listGaleria->imagem_unidade=$rs['imagem_unidade'];
                $listGaleria->nome_unidade=$rs['nome_unidade'];

                return $listGaleria;
            }


        }
    
    
        public function UpdateGaleria($galeria_class){
            
            
            $sql="update tbl_galeria_fotos set
            id_unidade ='".$galeria_class->id_unidade."',
            imagem_unidade='".$galeria_class->imagem_unidade."'
            where id_galeria_fotos=".$galeria_class->id_foto;
            
            
           
            
              if(mysql_query($sql)){
                   require_once('views/cms/cms_galeria_fotos.php');
              }else{
              echo("erro no script de update no banco de dados <br> Erro: </br>".mysql_error());
              }
            
        }
    
    
        public function AtivarItem($galeria_class){
            
            
            $sql="update tbl_galeria_fotos set
            status = 1
            where id_galeria_fotos=".$galeria_class->id_foto;
            
            if(mysql_query($sql)){
                   echo("<script>alert('ATIVADO!')</script>");
                   require_once('views/cms/cms_galeria_fotos.php');
              }else{
              echo("erro no script de update no banco de dados <br> Erro: </br>".mysql_error());
              }
              
            
            
        }
    
    
        public function DesativarItem($galeria_class){
            
            
            $sql="update tbl_galeria_fotos set
            status = 0
            where id_galeria_fotos=".$galeria_class->id_foto;
            
            if(mysql_query($sql)){
                   echo("<script>alert('DESATIVADO!')</script>");
                   require_once('views/cms/cms_galeria_fotos.php');
              }else{
              echo("erro no script de update no banco de dados <br> Erro: </br>".mysql_error());
              }
              
            
            
        }


        //METODO PARA LISTAGEM DE FOTOS NA PAGINA 
        //GALERIA_VIEW_FOTOS.PHP
         public function SelecionarTodasImagensViews($galeria_class){

             $sql="select uni.nome_unidade, gal.imagem_unidade, gal.status, uni.id_unidade, gal.id_galeria_fotos
                  from tbl_unidades as uni
                  inner join tbl_galeria_fotos as gal
                  on uni.id_unidade = gal.id_unidade
                  WHERE status =1 and id_unidade=".$galeria_class->id_unidade;
              
     		    $select = mysql_query($sql);

             $cont=0;

             while($rs=mysql_fetch_array($select)){

                 $listImagens[] = new Galeria();

                 $listImagens[$cont]->id_foto=$rs['id_galeria_fotos'];
                 $listImagens[$cont]->id_unidade=$rs['id_unidade'];
                 $listImagens[$cont]->nome_unidade=$rs['nome_unidade'];
                 $listImagens[$cont]->status=$rs['status'];
                 $listImagens[$cont]->imagem_unidade=$rs['imagem_unidade'];
                 $cont+=1;

             }


             return $listImagens;

         }



}
 ?>
