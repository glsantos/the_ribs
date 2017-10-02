<?php

  class ControllerFaq{

    public function Cadastrar(){

          require_once('models/faq_class.php');


          $txt_pergunta=$_POST['txt_pergunta'];
          $txt_reposta=$_POST['txt_resposta'];
          $slt_status=$_POST['slt_status'];


          $faq_cadastro = new Faq();

          $faq_cadastro->pergunta=$txt_pergunta;
          $faq_cadastro->resposta=$txt_reposta;
          $faq_cadastro->status=$slt_status;

          $faq_cadastro->Insert($faq_cadastro);

    }
  }

 ?>
