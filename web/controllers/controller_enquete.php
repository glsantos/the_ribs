<?php

class ControllerEnquete{

  public function Novo(){


        $enquete = $_POST['txt_pergunta_enquete'];


        $cadastro_enquete = new Enquete();

        $cadastro_enquete->enquete=$enquete;

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

}

?>
