<?php
class ControllerHome{


      public function SalvarPassoApasso(){

          require_once('models/home_class.php');


            $passoum=$_POST['txtpassoum'];
            $passodois=$_POST['txtpassodois'];
            $passotres=$_POST['txtpassotres'];
            $passoquatro=$_POST['txtpassoquatro'];


            $model_home = new Home_class;
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

           $id_processo_home = $_GET['id'];
           $passoum=$_POST['txtpassoum'];
           $passodois=$_POST['txtpassodois'];
           $passotres=$_POST['txtpassotres'];
           $passoquatro=$_POST['txtpassoquatro'];






            $home_class->Update($home_class);

           }

       }
 ?>
