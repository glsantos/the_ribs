  <?php

class ControllerGaleria{


    public function ListarUnidades(){

        //Inclui a model da classe Unidade
        require_once('../models/unidade_class.php');

		      $unidade_class = new Unidade();

		      return  $unidade_class->SelecionarTodasUnidades();

    }





}
?>