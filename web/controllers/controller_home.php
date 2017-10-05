<?php
class ControllerHome{


      public function SalvarPassoApasso(){

          require_once('models/home_class.php');

            $nome_processo=$_POST['nome_processo'];
            $passoum=$_POST['txtpassoum'];
            $passodois=$_POST['txtpassodois'];
            $passotres=$_POST['txtpassotres'];
            $passoquatro=$_POST['txtpassoquatro'];


            $model_home = new Home_class;
            $model_home->nome_processo=$nome_processo;
            $model_home->passoum=$passoum;
            $model_home->passodois=$passodois;
            $model_home->passotres=$passotres;
            $model_home->passoquatro=$passoquatro;
            $retorno_ = $model_home->Salvar($model_home);

            if($retorno_ == 'ok'){

              require_once('views/cms/gerenciar_home.php');

            }else {
                echo "erro";
            }


      }


      public function Listar(){

          require_once('models/home_class.php');

          $model_home = new Home_class;


          return $model_home->SelectTodosPassos();

      }
    

      public function Deletar(){


          require_once('models/galeria_class.php');
          $id=$_GET['id'];

          $model_home = new Home_class;

          $model_home->codigo_passo=$id;
          $model_home->Delete($model_home);

      }


       public function Buscar(){

            $id_processo_home = $_GET['id'];

            $model_home = new Home_class;


           $model_home->codigo_passo = $id_processo_home;


           $listPassos=$model_home->SelectPorId($model_home);

          require_once('views/cms/gerenciar_home.php');

       }

       //Metodo Atualizar um Registro
       public function Atualizar(){

         require_once('models/home_class.php');
        
           
          
          $model_home = new Home_class;

           
           $id_processo_home = $_GET['id'];
           
         
           $nome_processo=$_POST['nome_processo'];
           
           $passoum=$_POST['txtpassoum'];
           $passodois=$_POST['txtpassodois'];
           $passotres=$_POST['txtpassotres'];
           $passoquatro=$_POST['txtpassoquatro'];
           
           
           
            $model_home->codigo_passo=$id_processo_home;
            $model_home->nome_processo=$nome_processo;
            $model_home->passoum=$passoum;
            $model_home->passodois=$passodois;
            $model_home->passotres=$passotres; 
            $model_home->passoquatro=$passoquatro;
            $model_home->Update($model_home);

           }
    
            public function SelecionarTitulos(){

              require_once('models/home_class.php');

              $model_home = new Home_class;


              return $model_home->SelecionarTitulos();

          }
    
    
    
          public function SalvarFotoValores(){
                require_once('models/home_class.php');

                   
                   $id_titulo=$_POST['slttitulos'];
                   
                  
                   $caminho_arquivo = "arquivos_enviados/";
                 
                   $nome_imagem = basename($_FILES['flefotos']['name']);
                   
                   $uploadfile = $caminho_arquivo . $nome_imagem;

               
                   $extensao = strtolower(substr($nome_imagem, strlen($nome_imagem)-3,3));

                 

                       if(move_uploaded_file ($_FILES['flefotos']['tmp_name'],$uploadfile)){

                        
                         $home_class = new Home_class();


                         $home_class->id_titulo=$id_titulo;
                         $home_class->imagem_valores=$uploadfile;

                         $retorno_ = $home_class->SalvarEdicao($home_class);

                        if($retorno_ == 'ok'){

                                require_once('views/cms/gerenciar_home.php');

                        }else{
                            echo "erro";
                        }

               }

          }
          public function ListarEdicao(){

              require_once('models/home_class.php');

              $model_home = new Home_class;


              return $model_home->SelecionarTodosRegistros();

          }
    
          public function ExcluirDois(){
              
              require_once('models/galeria_class.php');
              $id_home=$_GET['id'];

              $model_home = new Home_class;

              $model_home->id_home=$id_home;
              $model_home->ExcluirDois($model_home);
              
              echo $id_home;
          }
    
        public function AlterarDois(){

            $id = $_GET['id'];

            $model_home = new Home_class;


            $model_home->id_home = $id;


            $listHome=$model_home->SelecionarPorId($model_home);

          require_once('views/cms/gerenciar_home.php');

       }
    

       }
 ?>
