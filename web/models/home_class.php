<?php

class Home_class{


      public $codigo_passo;
      public $passoum;
      public $passodois;
      public $passotres;
      public $passoquatro;



      //Construtor da Classe
        public function __construct(){

            //Inclui o arquivo de conexao com o BD
            require_once('models/banco_classe.php');

            //Instancia a Classe Mysql_db
            $conexao_bd = new Mysql_db();

            //Chama o metodo conectar para estabelecer a conexão como BD
            $conexao_bd->conectar();

        }



        public function Salvar($home_class){



            $sql="insert into tbl_processo_home(txt_passo_um, txt_passo_dois,txt_passo_tres,txt_passo_quatro)values(
              '".$home_class->passoum."',
              '".$home_class->passodois."',
              '".$home_class->passotres."',
              '".$home_class->passoquatro."'
              )";


              if(mysql_query($sql)){
                 return 'ok';
              }else{
                  echo("erro no script de insert no banco de dados <br> Erro: </br>".mysql_error());
              }


        }

        public function SelectTodosPassos(){
             $sql="select * from tbl_processo_home";
             $select = mysql_query($sql);


             $cont=0;


             while($rs=mysql_fetch_array($select)) {

                 $listPassos[] = new Home_class;

                 $listPassos[$cont]->codigo_passo=$rs['id_processo_home'];
                 $listPassos[$cont]->passoum=$rs['txt_passo_um'];
                 $listPassos[$cont]->passodois=$rs['txt_passo_dois'];
                 $listPassos[$cont]->passotres=$rs['txt_passo_tres'];
                 $listPassos[$cont]->passoquatro=$rs['txt_passo_quatro'];



                 $cont+=1;

               }

              return $listPassos;

        }

        public function Delete($delete){

             $sql = "delete from tbl_processo_home where id_processo_home=".$delete->codigo_passo;

             if (mysql_query($sql)){
                    require_once('views/cms/gerenciar_home.php');
             }else{
                 echo("Erro no Script de Insert no Banco de Dados <br> Erro:". mysql_error());
             }

          }



          public function SelectPorId($home_class){

              $sql="select * from tbl_processo_home where id_processo_home=".$home_class->codigo_passo;
              echo $sql;
              $select = mysql_query($sql);


              if($rs=mysql_fetch_array($select)){

                  $listPassos = new Home_class;

                  $listPassos->passoum=$rs['txt_passo_um'];
                  $listPassos->passodois=$rs['txt_passo_dois'];
                  $listPassos->passotres=$rs['txt_passo_tres'];
                  $listPassos->passoquatro=$rs['txt_passo_quatro'];

                  return $listPassos;
              }


          }





}




 ?>
