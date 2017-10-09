<?php

class Home_class{

        
      public $id_home;
      public $codigo_passo;
      public $nome_processo;
      public $passoum;
      public $passodois;
      public $passotres;
      public $passoquatro;
      public $id_titulo;
      public $imagem_valores;    
      public $codigo_titulo;        

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



            $sql="insert into tbl_processo_home(nome_processo,txt_passo_um, txt_passo_dois,txt_passo_tres,txt_passo_quatro)values(
              '".$home_class->nome_processo."',
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
                 $listPassos[$cont]->nome_processo=$rs['nome_processo'];
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
              
              $select = mysql_query($sql);


              if($rs=mysql_fetch_array($select)){

                  $listPassos = new Home_class;
                  
                  
                  $listPassos->codigo_passo=$rs['id_processo_home'];
                  $listPassos->nome_processo=$rs['nome_processo'];
                  $listPassos->passoum=$rs['txt_passo_um'];
                  $listPassos->passodois=$rs['txt_passo_dois'];
                  $listPassos->passotres=$rs['txt_passo_tres'];
                  $listPassos->passoquatro=$rs['txt_passo_quatro'];

                  return $listPassos;
              }


          }
    
           public function Update($home_class){
               
            $sql="
            UPDATE tbl_processo_home
            SET txt_passo_um = '".$home_class->passoum."',
            txt_passo_dois = '".$home_class->passodois."',
            txt_passo_tres = '".$home_class->passotres."',
            txt_passo_quatro = '".$home_class->passoquatro."',
            nome_processo = '".$home_class->nome_processo."'
            where id_processo_home=".$home_class->codigo_passo;
            
               
        
          
            
            if(mysql_query($sql)){
                  require_once('views/cms/gerenciar_home.php');
            }else{
              echo("erro no script de update no banco de dados <br> Erro: </br>".mysql_error());
            }



          }    
    
        public function SelecionarTitulos(){



            $sql="select * from tbl_processo_home";
            
            $select = mysql_query($sql);

            $cont=0;


            while($rs=mysql_fetch_array($select)){


               
                $listTitulos[] = new Home_class();

                
                $listTitulos[$cont]->id_titulo=$rs['id_processo_home'];
                $listTitulos[$cont]->nome_processo=$rs['nome_processo'];

                $cont+=1;

            }


            return $listTitulos;

        }
    
    
        public function salvarEdicao($home_class){
     

          $sql="insert into tbl_home(id_processo_reserva, foto_valores, status)values('".$home_class->id_titulo."',
                                                                                    '".$home_class->imagem_valores."', 0)";

              if(mysql_query($sql)){
                 return 'ok';
              }else{
                  echo("erro no script de insert no banco de dados <br> Erro: </br>".mysql_error());
              }
        }

    
        public function SelecionarTodosRegistros(){
            
            $sql="select ho.id_home,ho.foto_valores as foto, ho.id_processo_reserva as id, pro.nome_processo as titulo
                from tbl_home as ho
                inner join  tbl_processo_home as pro 
                on ho.id_processo_reserva = pro.id_processo_home;";
            
            $select = mysql_query($sql);

            $cont=0;


            while($rs=mysql_fetch_array($select)){


               
                $listHome[] = new Home_class();

                
                $listHome[$cont]->id_home=$rs['id_home'];
                $listHome[$cont]->nome_processo=$rs['titulo'];
                $listHome[$cont]->imagem_valores=$rs['foto'];
                $cont+=1;

            }


            return $listHome;
            
        }
    
         public function ExcluirDois($home_class){

             $sql = "delete from tbl_home where id_home=".$home_class->id_home;

             if (mysql_query($sql)){
                    require_once('views/cms/gerenciar_home.php');
             }else{
                 echo("Erro no Script de Excluir no Banco de Dados <br> Erro:". mysql_error());
             }

          }
    
    
            
        public function SelecionarPorIdHome($home_class){

            $sql="
            select ho.id_home,ho.foto_valores as foto, ho.id_processo_reserva, pro.nome_processo
            from tbl_home as ho
            inner join  tbl_processo_home as pro 
            on ho.id_processo_reserva = pro.id_processo_home
            where id_home=".$home_class->id_home;

            $select = mysql_query($sql);
           

            if($rs=mysql_fetch_array($select)){

                $listHome = new Home_class;

                $listHome->id_home=$rs['id_home'];
                $listHome->id_titulo=$rs['id_processo_reserva'];
                $listHome->imagem_valores=$rs['foto'];
                $listHome->nome_processo=$rs['nome_processo'];
                
              
                return $listHome;
               
            }


        }


        public function UpdateEdicao($home_class){
            $sql="
            UPDATE tbl_home
            SET id_processo_reserva = ".$home_class->id_titulo.",
            foto_valores = '".$home_class->imagem_valores."'
            where id_home= ".$home_class->id_home;
          
            echo $sql;
            
            
            if(mysql_query($sql)){
                  require_once('views/cms/gerenciar_home.php');
            }else{
              echo("erro no script de Update no banco de dados <br> Erro: </br>".mysql_error());
            }
       }    
        





}
 ?>
