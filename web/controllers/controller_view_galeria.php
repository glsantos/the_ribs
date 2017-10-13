<?php

class ControllerViewGaleria{

    
    

    public function ListarUnidades(){

        //Inclui a model da classe Unidade
        require_once('models/unidade_class.php');

		      $unidade_class = new Unidade();

		      return  $unidade_class->SelecionarTodasUnidades();

    }
    
    public function PreencherPagina(){
        
        require('models/galeria_class.php');
        
        
        $id = $_GET['cbo_unidade'];
        
        
        
        $galeria_class = new Galeria;
        $galeria_class->id_unidade=$id;
        return $rsImagens=$galeria_class->SelecionarTodasImagensViews();
        
        
    }
    

}