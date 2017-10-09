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

    public function Listar(){

        require_once('models/faq_class.php');

        $listFaq_Controller = new Faq();

        return $listFaq_Controller->SelectAll();
    }

    public function Apagar(){

        if($_SERVER['REQUEST_METHOD']=='GET'){

            $id_faq=$_GET['id_faq'];

            require_once('models/faq_class.php');

            $deleteFaq_Controller = new Faq();

            $deleteFaq_Controller->id_faq=$id_faq;
            $deleteFaq_Controller->Delete($deleteFaq_Controller);
        }
    }

    public function Buscar(){

        $id_faq=$_GET['id_faq'];

        require_once('models/faq_class.php');
        $listFaq_Controller = new Faq();

        $listFaq_Controller->id_faq=$id_faq;

        $list = $listFaq_Controller->SelectById($listFaq_Controller);
        require_once('views/cms/faq.php');
    }

    public function Atualizar(){

      $txt_pergunta=$_POST['txt_pergunta'];
      $txt_reposta=$_POST['txt_resposta'];
      $slt_status=$_POST['slt_status'];

      $id_faq=$_GET['id_faq'];

      $faq_class = new Faq();

      $faq_class->pergunta=$txt_pergunta;
      $faq_class->resposta=$txt_reposta;
      $faq_class->status=$slt_status;

      $faq_class->id_faq=$id_faq;


      $faq_class->Update($faq_class);
    }

  }

 ?>
