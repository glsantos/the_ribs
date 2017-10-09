<?php

class ControllerEnquete{

  public function Novo(){


        $enquete_pergunta = $_POST['txt_pergunta_enquete'];


        $cadastro_enquete = new Enquete();

        $cadastro_enquete->enquete=$enquete_pergunta;

      $retorno= $cadastro_enquete->Insert($cadastro_enquete);

      if($retorno == 'Salvo'){
        require_once('views/cms/cms_enquete.php');
      }else{
          echo "erro";
      }



  }
  public function Listar(){

    require_once('models/enquete_models_class.php');

    $list_enquete_controller = new Enquete();

    return $list_enquete_controller ->SelectAll();

  }

  public function Apagar(){

      $codigo=$_GET['id'];

      require_once('models/enquete_models_class.php');

      $apagar_controller_enquete = new Enquete();

      $apagar_controller_enquete->id_enquete = $codigo;

      $codigo = $apagar_controller_enquete->Delete($apagar_controller_enquete);
  }

  public function Alterar(){

      $codigo = $_GET['id'];

      $list_enquete_controller = new Enquete();

      $list_enquete_controller->id_enquete = $codigo;

      $list = $list_enquete_controller->SelectById($list_enquete_controller);

      require_once('views/cms/cms_enquete.php');


  }
  public function Atualizar(){

    if($_SERVER['REQUEST_METHOD']== 'POST'){

        $enquete = $_POST['txt_pergunta_enquete'];

        $codigo = $_GET['id'];

        $enquete_class = new Enquete();

        $enquete_class->enquete=$enquete;

        $enquete_class->id_enquete = $codigo;

        $enquete_class->Update($enquete_class);

    }
  }
}

?>
